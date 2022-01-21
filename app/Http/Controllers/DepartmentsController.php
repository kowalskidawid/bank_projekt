<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DepartmentsController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('departments/index')
            ->with('departments', $departments);
    }

    public function create()
    {
        return view('departments/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        try {
            Department::create($data);
            return redirect()->route('departments')->withSuccess('Oddział został zapisany');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return redirect()->route('departments')->withError('Coś poszło nie tak. Nie udało się dodać oddziału.');
        }
    }

    public function edit($id)
    {
        $department = Department::find($id);

        return view('departments/edit')
            ->with('department', $department);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        try {
            $department = Department::find($id);
            $department->update($data);
            return redirect()->route('departments')->withSuccess('Oddział został zaktualizowany');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return redirect()->route('departments')->withError('Coś poszło nie tak. Nie udało się zaktualizować oddziału.');
        }
    }

    public function destroy($id)
    {
        $department = Department::find($id);
        $department->delete();
        return redirect()->route('departments')->withSuccess('Oddział został usunięty');
    }
}

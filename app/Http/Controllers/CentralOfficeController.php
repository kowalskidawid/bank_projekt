<?php

namespace App\Http\Controllers;

use App\Models\CentralOffice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CentralOfficeController extends Controller
{
    public function index()
    {
        $centralOffice = CentralOffice::all()->first();
        if (is_null($centralOffice)) {
            $centralOffice = CentralOffice::make();
        }
        return view('/central-office/index')
            ->with('centralOffice', $centralOffice);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        try {
            $centralOffice = CentralOffice::all()->first();
            if (!is_null($centralOffice)) {
                $centralOffice->update($data);
            } else {
                CentralOffice::create($data);
            }
            return redirect()->route('central-office')->withSuccess('Dane centrali zostały zmienione');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return redirect()->route('central-office')->withError('Coś poszło nie tak. Nie udało się zmienić danych');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Models\Client;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('register/index')
            ->with('departments', $departments);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();
            $bankAccount = BankAccount::create(['account_number' => BankAccount::generateAccountNumber()]);
            $data['bank_account_id'] = $bankAccount->id;
            Client::create($data);
            DB::commit();
            return redirect()->route('register')->withSuccess('Zgłoszenie otworzenia konta bankowego zostało przesłane');
        } catch (\Exception $exception) {
            DB::rollBack();
            var_dump($exception->getMessage());
            die;
        }
    }
}

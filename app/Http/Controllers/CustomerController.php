<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return view('customer.profile', compact(['customer']));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'no_kk' => 'required',
        ]);

        $customer = new Customer($request->all());
        $customer->save();
        return redirect('home')->with('success', 'Terimakasih anda telah terdaftar, permohonan anda akan segera di proses');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customer.edit', compact(['customer']));
    }

    public function update($id, Request $request)
    {
        $customer = Customer::find($id);
        $customer->update($request->except(['_token', 'submit']));
        return redirect('customer')->with('success', 'Update data berhasil');
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('customer')->with('success', 'Delete data berhasil');
    }
}

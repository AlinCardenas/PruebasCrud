<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataReportRequest;
use App\Models\FillReport;
use Illuminate\Http\Request;

class GenerateDataReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = FillReport::paginate(5);
        return view('paymentRegister.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paymentRegister.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DataReportRequest $request)
    {
        FillReport::create($request->all());
        return redirect()->route('payment_register.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(FillReport $fillReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FillReport $fillReport)
    {
        dd($fillReport);
        return view('paymentRegister.edit', compact('fillReport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DataReportRequest $request, FillReport $fillReport)
    {
        $fillReport->update($request->all());
        return redirect()->route('payment_register.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FillReport $fillReport)
    {
        //
    }
}

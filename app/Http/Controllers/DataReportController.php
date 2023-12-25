<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataReportRequest;
use App\Models\data_report;
use App\Models\FillReport;
use Illuminate\Http\Request;

class DataReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = FillReport::paginate(5);
        return view('payment_register.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('payment_register.create');
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
    public function show(data_report $data_report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(data_report $data_report)
    {
        return view('payment_register.edit', compact('data_report'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DataReportRequest $request, data_report $data_report)
    {
        $data_report->update($request->all());
        return redirect()->route('payment_register.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(data_report $data_report)
    {
        //
    }
}

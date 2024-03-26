<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ConsultationHistory;
use Illuminate\Http\Request;

class ConsultationHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('errors.maintenance');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('errors.maintenance');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ConsultationHistory $consultationHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ConsultationHistory $consultationHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ConsultationHistory $consultationHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ConsultationHistory $consultationHistory)
    {
        //
    }
}

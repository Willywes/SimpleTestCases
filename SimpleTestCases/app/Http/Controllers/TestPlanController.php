<?php

namespace App\Http\Controllers;

use App\Entity\TestPlan;
use Illuminate\Http\Request;

class TestPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TestPlan::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entity\TestPlan  $testPlan
     * @return \Illuminate\Http\Response
     */
    public function show(TestPlan $testPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entity\TestPlan  $testPlan
     * @return \Illuminate\Http\Response
     */
    public function edit(TestPlan $testPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entity\TestPlan  $testPlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestPlan $testPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entity\TestPlan  $testPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestPlan $testPlan)
    {
        //
    }
}

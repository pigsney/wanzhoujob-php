<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class JobTypeController extends Controller
{

    public function index()
    {
        //
    }




    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $jobType
     * @return \Illuminate\Http\Response
     */
    public function show(Category $jobType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $jobType
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $jobType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $jobType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $jobType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $jobType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $jobType)
    {
        //
    }
}

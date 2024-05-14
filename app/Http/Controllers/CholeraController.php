<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCholeraRequest;
use App\Http\Requests\UpdateCholeraRequest;
use App\Models\Cholera;
use ProtoneMedia\Splade\Facades\Toast;

class CholeraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Cholera::all();

        return view('dashboard.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCholeraRequest $request)
    {
        Cholera::create($request->validated());
        Toast::title('Success')->message('Patient added successfully')->success();
        return redirect()->route('dashboard.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cholera $cholera)
    {
        return view('dashboard.show', compact('cholera'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cholera $cholera)
    {
        return view('dashboard.edit', compact('cholera'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCholeraRequest $request, Cholera $cholera)
    {
        $cholera->update($request->validated());
        Toast::title('Success')->message('Patient updated successfully')->success();
        return redirect()->route('dashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cholera $cholera)
    {
        $cholera->delete();
        Toast::title('Success')->message('Patient deleted successfully')->success();
        return redirect()->route('dashboard.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCholeraRequest;
use App\Http\Requests\UpdateCholeraRequest;
use App\Models\Cholera;
use ProtoneMedia\Splade\Facades\Toast;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class CholeraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Cholera::all();
        $patientChart = Cholera::all()->pluck('id')->all();
        $patientsDeceased = Cholera::all()->where('status', 'Deceased')->pluck('id')->toArray();
        $patientsRecovered = Cholera::all()->where('status', 'Recovered')->pluck('id')->toArray();
        $patientsConfirmed = Cholera::all()->where('status', 'Confirmed')->pluck('id')->toArray();
        $patientsSuspected = Cholera::all()->where('status', 'Suspected')->pluck('id')->toArray();

        $chart = (new LarapexChart)
            ->lineChart()
            ->addLine('All Cases', $patientChart)
            ->setXAxis(range(1, count($patientChart)))
            ->setColors(['#003087', '#fbc33b'])
            ->setTitle('All Cases')
            ->toVue();

        $barChart = (new LarapexChart)
        ->barChart()
            ->addBar(' All Confirmed',$patientsConfirmed)
            ->setXAxis(range(1, count($patientsConfirmed)))
            ->setTitle('All Confirmed Cases')
            ->setColors(['#003087', '#fbc33b'])
            ->toVue();

        $pieChart = (new LarapexChart)
            ->pieChart()
            ->addPieces($patientsDeceased)
            ->setLabels(range(1, count($patientsDeceased)))
            ->setColors(['#003087', '#fbc33b'])
            ->setFontFamily('Quicksand')
            ->setTitle('All Deceased')
            ->toVue();

        $pieChartRecovered = (new LarapexChart)
            ->pieChart()
            ->addPieces($patientsRecovered)
            ->setLabels(range(1, count($patientsRecovered)))
            ->setFontFamily('Quicksand')
            ->setColors(['#003087', '#003087'])
            ->setTitle('All Recovered')
            ->toVue();


        return view('dashboard.index', compact('chart', 'patients', 'barChart', 'pieChart', 'pieChartRecovered','patientsSuspected'));
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

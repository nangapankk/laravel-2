<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChartRequest;
use App\Models\Chart;
use App\Models\product;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = chart::where('user_id', auth()->user()->id)->get()->load('product');
        $products = product::with(['supplier'])->get();
        return view('pages.chart.index', compact('products', 'data'));
    }

    /**
     * Undocumented function
     *
     * @return void
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
    public function store(ChartRequest $request)
    {
        try {
            chart::updateorcreate([
                'user_id' => auth()->user()->id,
                'product_id' => $request['add_product_id'],
                'quantity' => $request['add_quantity'],

            ]);
            return redirect()->route('chart.index')->with('Berhasil', ' has been created succesfuly.');

        } catch (\Throwable $th) {
            return redirect()->route('chart.index')->with('Gagal', ' failed to created.');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function show(Chart $chart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function edit(Chart $chart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chart $chart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chart $chart)
    {
        try {
            $chart->deleteorFail();
            return redirect()->route('chart.index')->with('Berhasil', 'Deletenya berhasil');
        } catch (\Throwable $th) {
            return redirect()->route('chart.index') - with('Gagal', 'Delete tidak berhasil');
        }}
}

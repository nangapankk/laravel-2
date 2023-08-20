<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierRequest;
use App\Models\supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data=supplier::get();
        return view('pages.supplier.index',compact('data'));
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
     * @param SupplierRequest $request
     *
     * @return [type]
     */
    public function store(SupplierRequest $request)
    {
        try {
            supplier::create([
                'name' => $request['add_name'],
                'phone' => $request['add_phone'],
                'address' => $request['add_address'],

            ]);
            return redirect()->route('supplier.index')->with('Berhasil', 'Supplier has been created succesfuly.');

        } catch (\Throwable $th) {
            return redirect()->route('supplier.index')->with('Gagal', 'Supplier failed to created.');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     *
     */

        public function destroy(supplier $supplier)
        {
            try {
                $supplier->deleteorFail();
                return redirect()->route('supplier.index')->with('Berhasil', 'Delete berhasil');
            } catch (\Throwable $th) {
                return redirect()->route('supplier.index')->with('Gagal', 'Delete tidak berhasil');
            }}
    }


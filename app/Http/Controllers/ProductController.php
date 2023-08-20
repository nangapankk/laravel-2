<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\product;
use App\Models\supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function index()
    {
        $data = product::with(['supplier'])->get();
        $supplier = supplier::get();
        return view('pages.product.index', compact('data', 'supplier'));

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
     * Undocumented function
     *
     * @param ProductRequest $request
     * @return void
     */
    public function store(ProductRequest $request)
    {
        try {

            $file = $request->file('add_image_url')->store('public/product');

            product::create([
                'name' => $request['add_name'],
                'description' => $request['add_description'],
                'category' => $request['add_category'],
                'buy' => $request['add_buy'],
                'sell' => $request['add_sell'],
                'stock' => $request['add_stock'],
                'supplier_id' => $request['add_supplier_id'],
                'image_url' => str_replace('public/', 'storage/', $file),

            ]);
            return redirect()->route('product.index')->with('Berhasil', 'Berhasil dong-');
        } catch (\Throwable $th) {
            return redirect()->route('product.index')->with('Gagal', 'Tidak Berhasil.');
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
 * delete product
 *
 * @param product $product
 * @return void
 */
    public function destroy(product $product)
    {
        try {
            $product->deleteorFail();
            return redirect()->route('product.index')->with('Berhasil', 'Deletenya berhasil');
        } catch (\Throwable $th) {
            return redirect()->route('product.index') - with('Gagal', 'Delete tidak berhasil');
        }}
}

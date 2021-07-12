<?php

namespace App\Http\Controllers;

use App\Models\Kit;
use Illuminate\Http\Request;

class KitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kits = Kit::latest()->paginate(5);
        return view('productLayouts.app',compact('kits'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productLayouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'productName' => 'required',
            'number' => 'required',
            'image' => 'required',
            'wattage' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'sellingPrice' => 'required',
            'description' => 'required'
        ]);

        Kit :: create($request->all());
        return redirect()->route('productLayouts.app')->with('success','Created!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Kit $kit)
    {
        return view('productLayouts.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Kit $kit)
    {
        return view('productLayouts.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kit $kit)
    {
        $request->validate([
            'productName' => 'required',
            'number' => 'required',
            'image' => 'required',
            'wattage' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'sellingPrice' => 'required',
            'description' => 'required'
        ]);

        $kit->update($request->all());
        return redirect()->route('productLayouts.app')->with('success','Updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kit $kit)
    {
        $kit->delete();

        return redirect()->route('productLayouts.app')->with('success','Delete!!');
    }
}

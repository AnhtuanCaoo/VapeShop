<?php

namespace App\Http\Controllers;

use App\Models\Juice;
use Illuminate\Http\Request;

class JuiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juices = Juice::latest()->paginate(5);
        return view('juiceManagement.app',compact('juices'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('juiceManagement.create');
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
            'juicename' => 'required',
            'number' => 'required',
            'image' => 'required',
            'nicotin' => 'required',
            'flavor' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'sellingprice' => 'required',
            'description' => 'required'
        ]);

        Juice :: create($request->all());
        return redirect()->route('juiceManagement.app')->with('success','Created!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Juice $juice)
    {
        return view('juiceManagement.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Juice $juice)
    {
        return view('juiceManagement.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Juice $juice)
    {
        $request->validate([
            'juicename' => 'required',
            'number' => 'required',
            'image' => 'required',
            'nicotin' => 'required',
            'flavor' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'sellingPrice' => 'required',
            'description' => 'required'
        ]);

        $juice->update($request->all());
        return redirect()->route('juiceManagement.app')->with('success','Updated!!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Juice $juice)
    {
        $juice->delete();

        return redirect()->route('juiceManagement.app')->with('success','Delete!!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Mids;
use App\Models\order;
use Illuminate\Http\Request;

class ordertroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function show(Mids $Mids, $id)
    // {
    //     $mid = Mids::where('id', $id)->first();
    //     return view('pages/order', compact('mid'));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = order::create([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'description' => $request->description,
            'name_clint' => $request->name_clint,
            'phon' => $request->phon,
        ]);
        return redirect()->back()->with('status', 'Your order is save');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mids  $Mids
     * @return \Illuminate\Http\Response
     */
    public function show(Mids $Mids, $id)
    {
        $mid = Mids::where('id', $id)->first();
        return view('pages/order', compact('mid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order, $id)
    {
        order::destroy($id);
        return back();
    }
}

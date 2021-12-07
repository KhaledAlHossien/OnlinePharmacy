<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\Mids;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = order::all();
        $user = Auth::user();
        return view('/admin/admin', compact('user', 'orders'));
    }

    public function edit(Mids $Mids, $id)
    {
        $user = Auth::user();
        $mid = Mids::where('id', $id)->first();
        $companies = company::all();
        return view('mid/edit', compact('mid', 'companies', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mids  $Mids
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mids $Mids, $id)
    {
        $newphoto = $request->photo;
        if ($request->hasFile('photo')) {
            $nfile = $request->file('photo');
            $ext = $nfile->getClientOriginalExtension();
            $nfilename = time() . '.' . $ext;
            $nfile->move('imgs/mid/', $nfilename);

            $newphoto = $nfilename;
        } else {
            $photo = Mids::where('id', $id)->first();
            $newphoto = $photo->photo;
        }

        Mids::where('id', $id)
            ->update([
                'name' => $request->name,
                'type' => $request->type,
                'price' => $request->price,
                'description' => $request->description,
                'company_id' => $request->company_id,
                'photo' => $newphoto,
            ]);

        return redirect()->back()->with('status', 'Edit Successfully');

    }
    public function index_admin()
    {
        $user = Auth::user();
        $mids = Mids::all();
        return view('admin/index_admin', compact('mids', 'user'));
    }

    public function destroy(order $order, $id)
    {
        order::destroy($id);
        return "Delete Data";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mids  $Mids
     * @return \Illuminate\Http\Response
     */
    public function search(Mids $Mids, Request $request)
    {
        $user = Auth::user();
        if ($mid = Mids::where('name', $request->search)->first()) {
            return view('admin/search_admin', compact('mid', 'user'));
        } else {
            $mid = "we are soory";
            return redirect('/')->with('status', 'We dont have that');
        }

    }

}

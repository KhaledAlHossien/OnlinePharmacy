<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\Mids;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $mids = Mids::all();
        return view('mid/index', compact('mids', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $companies = company::all();
        return view('mid/create', compact('companies', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('imgs/mid/', $filename);
            $photo = $filename;
        }

        $mid = Mids::create([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'description' => $request->description,
            'photo' => $photo,
        ]);
        return redirect()->back()->with('status', 'Add Successfully');
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
        return view('mid/show', compact('mid'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mids  $Mids
     * @return \Illuminate\Http\Response
     */
    public function search(Mids $Mids, Request $request)
    {
        if ($mid = Mids::where('name', $request->search)->first()) {
            return view('pages/search', compact('mid'));
        } else {

            return redirect('/')->with('status', 'We dont have that');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mids  $Mids
     * @return \Illuminate\Http\Response
     */
    public function illness(Mids $Mids, Request $request)
    {
        $mids = Mids::where('description', $request->illness)->take(2)->get();
        return view('pages/illness', compact('mids'));
        // return redirect('/')->with('status', 'We dont have that');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mids  $Mids
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mids $Mids, $id)
    {
        Mids::destroy($id);
        // return "Delete Data";

        return redirect('admin/index_admin')->with('status', 'Delete Data');

    }
}

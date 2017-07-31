<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateAssetGroup;
use App\Http\Requests\InsertAssetGroup;

class AssetGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      //return response()->json(\App\AssetGroup::all());
      if($request->has("withTrashed")) {
        return response()->json(\App\AssetGroup::withTrashed()->paginate(10));
      }
      return response()->json(\App\AssetGroup::paginate(10));
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertAssetGroup $request)
    {
        $ulaz = \App\AssetGroup::create($request->all());
        return response()->json($ulaz);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(\App\AssetGroup::with('assets')->find($id));
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
    public function update(UpdateAssetGroup $request, $id)
    {
          $ulaz = \App\AssetGroup::find($id);
          $ulaz->update($request->all());
          return response()->json($ulaz);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		      \App\AssetGroup::find($id)->delete();
    }
    
    public function restore($id)
    {
		      \App\AssetGroup::withTrashed()->find($id)->restore();
    }
}

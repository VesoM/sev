<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($ag_id, Request $request)
    {
      $ag = \App\AssetGroup::find($ag_id);
      if($ag) {
        if($request->has("onlyTrashed")) {
          return response()->json($ag->assets()->onlyTrashed()->paginate(10));
        }
        if($request->has("withTrashed")) {
          return response()->json($ag->assets()->withTrashed()->paginate(10));
        }
        return response()->json($ag->assets()->paginate(10));
      }
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
    public function store($ag_id, Request $request)
    {
      $ag = \App\AssetGroup::find($ag_id);
      if($ag) {
        $asset = new \App\Asset;
        $asset->fill($request->all());
        $asset->asset_group_id = $ag_id;
        $asset->save();
        return response()->json($asset);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ag_id, $id)
    {
      $ag = \App\AssetGroup::find($ag_id);
      //Vjerovatno cemo ukloniri dio with(...) vec cemo ugnjezdjavati kontrolere
      return response()->json($ag->assets()->with(['assetContracts', 'assetContracts.assetOwner', 'assetContracts.assetAnnexes'])->find($id));
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
    public function update($ag_id, Request $request, $id)
    {
      $ag = \App\AssetGroup::find($ag_id);
      if($ag) {
        $asset = $ag->assets()->find($id);
        if($asset) {
          $asset->update($request->all());
          return response()->json($asset);
        }
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ag_id, $id)
    {
      $ag = \App\AssetGroup::find($ag_id);
      if($ag) {
        $asset = $ag->assets()->find($id);
        if($asset) {
          if($asset->delete()) {
            return response()->json(["deleted id"=>$id]);
          }
        }
      }
    }

}

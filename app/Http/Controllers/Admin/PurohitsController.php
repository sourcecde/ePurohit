<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Purohit;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;

class PurohitsController extends Controller
{
    public function index()
    {
    	$purohits = Purohit::all();

    	return view('admin.purohits.index', compact('purohits'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $purohit = Purohit::find($id);
        return view('admin.purohits.show', compact('purohit'));
    }

    /**
     * Show the form for creating a new purohit.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.purohits.create');
    }

    /**
     * Store a newly created purohit in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //   'namaSiswa' => 'required',
        //   'alamatSiswa' => 'required'
        // ]);

        Purohit::create($request->all());
        return redirect()->route('admin.purohits.index')
                        ->with('success', 'New purohit created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $purohit = Purohit::find($id);
        return view('admin.purohits.edit', compact('purohit'));
    }

    /**
     * Update Purohit in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purohit $purohit)
    {

        $purohit->update($request->all());

        return redirect()->route('admin.purohits.index')
                        ->with('success', 'Purohit updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $purohit = Purohit::find($id);
        $purohit->delete();
        return redirect()->route('admin.purohits.index')
                        ->with('success', 'Purohit deleted successfully');
    }

     /**
     * Delete all selected Purohit at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        
        Purohit::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}

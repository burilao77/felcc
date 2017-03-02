<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Redirect;
use App\Complaint;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $complaints = Complaint::all();
        return view('complaint.index', ['complaints' => $complaints]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('complaint.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
               'categories' => 'required',
               'nameDenouncer' => 'required',
               'ageDenouncer' => 'required',
               'dniDenouncer' => 'required',
               'genderDenouncer' => 'required',
               'phoneDenouncer' => 'required',
               'addressDenouncer' => 'required',
               'nameDenounced' => 'required',
               'genderDenounced' => 'required',
               'phoneDenounced' => 'required',
               'addressDenounced' => 'required',
            ]);
        //guardando los datos
        $complaint = new complaint;
        $complaint->title = $request->title;
        $complaint->description = $request->description;
        $complaint->categories = $request->categories;
        $complaint->nameDenouncer = $request->nameDenouncer;
        $complaint->ageDenouncer = $request->ageDenouncer;
        $complaint->dniDenouncer = $request->dniDenouncer;
        $complaint->genderDenouncer = $request->genderDenouncer;
        $complaint->phoneDenouncer = $request->phoneDenouncer;
        $complaint->addressDenouncer = $request->addressDenouncer;
        $complaint->nameDenounced = $request->nameDenounced;
        $complaint->genderDenounced = $request->genderDenounced;
        $complaint->phoneDenounced = $request->phoneDenounced;
        $complaint->addressDenounced = $request->addressDenounced;

        //$complaint->categories_id = $request->get('categories_id');
        $complaint->save();

        Session::flash('message', 'La denuncia fue Creada con Exito');
        return Redirect::to('/complaint');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // tratando de acer el detalle
/*        $complaint = $this->Complaint->find($id);
        return view('complaint.show', compact('complaint'));*/
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
        $complaint = Complaint::findOrFail($id);
        // retornamos la vista
        return view('complaint.edit', compact('complaint'));
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
                        //validacion
            $this->validate($request,[
                'title' => 'required',
                'description' => 'required',
               'categories' => 'required',
               'nameDenouncer' => 'required',
               'ageDenouncer' => 'required',
               'dniDenouncer' => 'required',
               'genderDenouncer' => 'required',
               'phoneDenouncer' => 'required',
               'addressDenouncer' => 'required',
               'nameDenounced' => 'required',
               'genderDenounced' => 'required',
               'phoneDenounced' => 'required',
               'addressDenounced' => 'required',
            ]);
        // editando datos
            $complaint = Complaint::findOrFail($id);
            $complaint->title = $request->title;
            $complaint->description = $request->description;
            $complaint->categories = $request->categories;
            $complaint->nameDenouncer = $request->nameDenouncer;
            $complaint->ageDenouncer = $request->ageDenouncer;
            $complaint->dniDenouncer = $request->dniDenouncer;
            $complaint->genderDenouncer = $request->genderDenouncer;
            $complaint->phoneDenouncer = $request->phoneDenouncer;
            $complaint->addressDenouncer = $request->addressDenouncer;
            $complaint->nameDenounced = $request->nameDenounced;
            $complaint->genderDenounced = $request->genderDenounced;
            $complaint->phoneDenounced = $request->phoneDenounced;
            $complaint->addressDenounced = $request->addressDenounced;
            $complaint->save();

            Session::flash('message', 'La denuncia fue editada');
            return Redirect::to('/complaint');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $complaint = Complaint::findOrFail($id);
        $complaint->delete();
        return redirect()->route('complaint.index')->with('alert-success', 'La denuncia fue eliminada');
    }
}

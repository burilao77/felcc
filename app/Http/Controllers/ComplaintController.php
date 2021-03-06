<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Collection;
use Session;
use Redirect;
use Charts;
use App\Complaint;
use PDF;


class ComplaintController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //dd($request->get('nameDenouncer'));
        $complaints = Complaint::name($request->get('nameDenouncer'))->orderBy('id', 'DESC')->paginate(5);
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
        
         $this->validate($request,[

                
               'categories' => 'required',
               'description' => 'required',
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
         
 
        //guardando los date_isodate_set()
        $complaint = new complaint;

        
        $complaint->active = $request->active;
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
         $complaint = Complaint::findOrFail($id);
        
         $view = view('complaint.show', compact('complaint'));
 
         $pdf = \App::make('dompdf.wrapper');
         $pdf->loadHTML($view);
         return $pdf->stream('complaint');
      /*  $complaint = Complaint::findOrFail($id);
        return view('complaint.show', compact('complaint'));*/
        // tratando de acer el detalle
/*        $complaint = $this->Complaint->find($id);
        return view('complaint.show', compact('complaint'));*/
       /*$chart = Charts::database(Complaint::all(), 'pie', 'highcharts')
      ->title("Porcentaje de Delitos")
      ->elementLabel("Total")
      ->dimensions(1000, 500)
      ->responsive(false)
      ->GroupBy('categories', null, ['homicide' => 'Homicidio', 'abuse' => 'Abuso', 'Stole' => 'Robo']);

        $chart2 = Charts::database(Complaint::all(), 'bar', 'highcharts')
      ->title("Porcentaje de Delitos")
      ->elementLabel("Total")
      ->dimensions(1000, 500)
      ->responsive(false)
      ->GroupBy('categories', null, ['homicide' => 'Homicidio', 'abuse' => 'Abuso', 'Stole' => 'Robo']);

        return view('complaint.show', ['chart' => $chart, 'chart2' => $chart2]);*/
    

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

                'active' => true,
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

              $complaint->active = $request->active;
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

   public function chart()
    {
      $chart = Charts::database(Complaint::all(), 'pie', 'highcharts')
      ->title("Porcentaje de Delitos Totales")
      ->elementLabel("Total")
      ->dimensions(1000, 500)
      ->responsive(true)
      ->GroupBy('categories', null, ['homicide' => 'Homicidio', 'abuse' => 'Abuso', 'Stole' => 'Robo']);
      

          $chart2 = Charts::database(Complaint::all(), 'area', 'highcharts')
      ->title("Porcentaje de Delitos de los últimos 14 dias")
      ->elementLabel("Total")
      ->dimensions(1000, 500)
      ->responsive(true)
      ->GroupBy('categories', null, ['homicide' => 'Homicidio', 'abuse' => 'Abuso', 'Stole' => 'Robo'])
      ->lastByDay(14, true);

            $chart3 = Charts::database(Complaint::all(), 'donut', 'highcharts')
      ->title("Porcentaje de Personas Denunciantes según el Género")
      ->elementLabel("Total")
      ->dimensions(1000, 500)
      ->responsive(true)
      ->GroupBy('genderDenouncer', null, ['male' => 'Hombres', 'female' => 'Mujeres']);
      //->lastByYear(2, true);
      

          $chart4 = Charts::database(Complaint::all(), 'bar', 'highcharts')
      ->title("Porcentaje de Personas Denunciadas según el Género")
      ->elementLabel("Total")
      ->dimensions(1000, 500)
      ->responsive(true)
      ->GroupBy('genderDenounced', null, ['male' => 'Hombres', 'female' => 'Mujeres']);
     
      //->lastByMonth(6, true);

        return view('complaint.chart', ['chart' => $chart, 'chart2' => $chart2, 'chart3' => $chart3, 'chart4' => $chart4]);

    }

    public function process()
    {
        $complaints = DB::table('complaints')
            ->where('active', '=', '1')
            ->get();
        //total denuncias en proceso con el metodo count();
        $totald = $complaints->count();
        
        return view('complaint.process', ['complaints' => $complaints, 'totald' => $totald]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detalle($id)
    {
       $complaint = Complaint::findOrFail($id);
       $evidencias = DB::table('evidence')->where('evidence.complaint_id', '=', $complaint->id )->get();
       //dd($evidencias);
        return view('complaint.detalle', ['complaint'=>$complaint, 'evidencias' => $evidencias]);
    }

    public function success()
    {
        $complaints = DB::table('complaints')
            ->where('active', '=', '0')
            ->get();

        return view('complaint.success', ['complaints' => $complaints]);
    }

    
    public function updateStatus(Request $request)
    {
      
        if (Request::get('ajax'))
        {
            $complaint = Complaint::findOrFail($request->complaint('id'));

            if ($complaint->save())
            {
            }
            echo json_encode('complaint.process', compact('complaint'));
            $this->autoRender = false;
        }
    }
}

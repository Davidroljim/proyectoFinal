<?php

namespace App\Http\Controllers;

use App\Models\Alquilere;
use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;
use DateTime;
use PhpParser\Node\Stmt\If_;

/**
 * Class AlquilereController
 * @package App\Http\Controllers
 */
class AlquilereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alquileres = Alquilere::paginate();

        return view('alquilere.index', compact('alquileres'))
            ->with('i', (request()->input('page', 1) - 1) * $alquileres->perPage());
    }
    public function indexalquileres($id)
    {
        $alquileres = Alquilere::paginate($id);

        return view('alquilere.index', compact('alquileres'))
            ->with('i', (request()->input('page', 1) - 1) * $alquileres->perPage());
    }
    public function misAlquileres()
    {
        $alquileres = Alquilere::all()->where('id_usuario', "=",Auth::id());
        
        return view('alquilere.misalquileres', compact('alquileres'));
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alquilere = new Alquilere();
        return view('alquilere.create', compact('alquilere'));
    }

    public function crear(Request $request)
    {
        // echo$_REQUEST["equipo_id"];
        // var_dump($request);
        // echo $request["equipo_id"];
        $equipo = Equipo::find($request["equipo_id"]);
        $alquilere = new Alquilere();
        return view('equipo.showcatalogo', compact('alquilere', 'equipo'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //obtengo todos los alquileres con la misma id del que se quiere alquilar.
        $alquileres = Alquilere::where('id_equipo', $request["id_equipo"])->get();
        $disponibles = Equipo::where('id', $request["id_equipo"])->get();

        foreach ($disponibles as $disponible) {
            $stock_equipo= $disponible->disponible;
        }

        echo $stock_equipo;
         $fechaActual = time();
         echo $fechaActual;
         $furbo = 1;

         $fechai = $request["f_inicio"];
         $fechaf = $request["f_fin"];
         $stock_alquiler=0;
         $fechaComprobarI = strtotime($fechai);
         $fechaComprobarF = strtotime($fechaf);

          foreach ($alquileres as $alquilere) {

              $fechaInicial = strtotime($alquilere->f_inicio);
              $fechaFinal = strtotime($alquilere->f_fin);

                // var_dump($alquilere->f_inicio);  
                // echo $alquilere->f_fin;

              if ($fechaComprobarI >= $fechaInicial && $fechaComprobarI <= $fechaFinal || $fechaComprobarF >= $fechaInicial && $fechaComprobarF <= $fechaFinal || $fechaComprobarI < $fechaActual || $fechaComprobarF < $fechaActual || $fechaComprobarI>$fechaComprobarF) {
                 
                $furbo = 0;
                 
            
             }

            


          }
          
          if ($furbo == 1) {

             $fecha=strtotime($request["f_inicio"]);
             $a=date("Y-m-d", $fecha);
             $request["f_inicio"]=$a;

             $fecha1=strtotime($request["f_fin"]);
             $b=date("Y-m-d", $fecha1);
             $request["f_fin"]=$b;
            // var_dump($stock_alquiler);
            //  $request["stock"]=$stock_alquiler;

             var_dump($request->all());


                 request()->validate(Alquilere::$rules);
            

                 $alquilere = Alquilere::create($request->all());
                 $user = Auth::user();


                session()->put('id_equipo', $user->$request["id_equipo"]);
                $user_id = session()->get('id_equipo');
                var_dump($user_id);

                 return redirect()->route('alquileres.index')
                     ->with('success', 'Alquiler creado Correctamente.');

           } else {
               return redirect()->back()
                   ->with('error', 'El producto seleccionado no está disponible para esta fecha.');
           }


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alquilere = Alquilere::find($id);

        return view('alquilere.show', compact('alquilere'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alquilere = Alquilere::find($id);

        return view('alquilere.edit', compact('alquilere'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Alquilere $alquilere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alquilere $alquilere)
    {
        request()->validate(Alquilere::$rules);

        $alquilere->update($request->all());

        return redirect()->route('alquileres.index')
            ->with('success', 'Alquilere updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $alquilere = Alquilere::find($id)->delete();

        return redirect()->route('alquileres.index')
            ->with('success', 'Alquilere deleted successfully');
    }
}

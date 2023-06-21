<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Alquilere;
use Illuminate\Http\Request;

/**
 * Class EquipoController
 * @package App\Http\Controllers
 */
class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::paginate();

        return view('equipo.index', compact('equipos'))
            ->with('i', (request()->input('page', 1) - 1) * $equipos->perPage());
    }

    public function indexCatalogo()
    {
        $equipos = Equipo::paginate();

        return view('equipo.catalogo', compact('equipos'))
            ->with('i', (request()->input('page', 1) - 1) * $equipos->perPage());
    }

    public function indexCarrito(Request $request)
    {
        $equipos = Equipo::paginate();
        
        
        $fechaComprobarI=strtotime($request["fecha_inicio"]);
        $fechaComprobarF=strtotime($request["fecha_fin"]);
        // var_dump($fechaComprobarI);
        // echo("////");
        // var_dump($fechaComprobarF);
        $fechaActual = time();
         $alquileres = Alquilere::paginate();
         $equipoSinStock = array();
         foreach ($alquileres as $alquilere) {
             $fechaInicial= strtotime($alquilere->f_inicio);
             $fechaFinal= strtotime($alquilere->f_fin); 
            

             if ($fechaComprobarI >= $fechaInicial && $fechaComprobarI <= $fechaFinal || $fechaComprobarF >= $fechaInicial && $fechaComprobarF <= $fechaFinal  || $fechaComprobarI < $fechaInicial &&  $fechaComprobarF>$fechaFinal) {
                // echo($alquilere->id_equipo);
                array_push($equipoSinStock, $alquilere->id_equipo);
                
         }
        }
        $fechas = array();
        array_push($fechas, $request["fecha_inicio"]);
        array_push($fechas, $request["fecha_fin"]);
        
           // var_dump($equipoSinStock);
         return view('equipo.catalogo', compact('equipos','equipoSinStock','fechas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipo = new Equipo();
        return view('equipo.create', compact('equipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Equipo::$rules);

        $equipo = Equipo::create($request->all());

        return redirect()->route('equipos.index')
            ->with('success', 'Equipo creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipo = Equipo::find($id);

        return view('equipo.show', compact('equipo'));
    }

    public function showcatalogo($id)
    {
        $equipo = Equipo::find($id);

        return view('equipo.showcatalogo', compact('equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipo = Equipo::find($id);

        return view('equipo.edit', compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Equipo $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo $equipo)
    {
        request()->validate(Equipo::$rules);

        $equipo->update($request->all());

        return redirect()->route('equipos.index')
            ->with('success', 'Equipo modificado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $equipo = Equipo::find($id)->delete();

        return redirect()->route('equipos.index')
            ->with('success', 'Equipo borrado correctamente');
    }

    public function avisolegal(){
        return view('equipo.avisolegal');
    }
    public function politicacookies(){
        return view('equipo.politicacookies');
    }
    public function politicaprivacidad(){
        return view('equipo.politicaprivacidad');
    }
    public function condicionesventa(){
        return view('equipo.condicionesventa');
    }
    public function contacto(){
        return view('equipo.contacto');
    }
    public function politicaenvios(){
        return view('equipo.politicaenvios');
    }
}

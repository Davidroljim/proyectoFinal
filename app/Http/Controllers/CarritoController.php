<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Carrito;
use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Alquilere;
use DateTime;

/**
 * Class CarritoController
 * @package App\Http\Controllers
 */
class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carritos = Carrito::paginate();

        return view('carrito.index', compact('carritos'))
            ->with('i', (request()->input('page', 1) - 1) * $carritos->perPage());
    }

    public function pago()
    {
        $carrito = Carrito::all()->where('id_usuario', "=",Auth::id());
        //print_r($carrito);
        // $alquileres = Alquilere::paginate();

        foreach ($carrito as $carro) {
            Alquilere::create([
                'id_usuario' => Auth::id(),
                'id_equipo' => $carro->id_equipo,
                'f_inicio' => $carro->f_inicio,
                'f_fin' => $carro->f_fin,
                'stock' => $carro->precio,
            ]);
                    
            Carrito::where('id', $carro->id)->delete();
        }

        $alquileres = Alquilere::paginate();
         return redirect()->route('carritos.misAlquileres', compact('alquileres'))
         ->with('success', 'Producto alquilado correctamente.');
    }


    public function comprobacion()
    {

        $carrito = Carrito::all()->where('id_usuario', "=",Auth::id());
        $alquileres = Alquilere::paginate();
        
        foreach ($carrito as $carro){
            $fechaComprobarI=strtotime($carro->f_inicio);
            $fechaComprobarF=strtotime($carro->f_fin);

            foreach ($alquileres as $alquilere) {
                $fechaInicial= strtotime($alquilere->f_inicio);
                $fechaFinal= strtotime($alquilere->f_fin); 
               
                if ($carro->id_equipo==$alquilere->id_equipo) {
                    
                
                if ($fechaComprobarI >= $fechaInicial && $fechaComprobarI <= $fechaFinal || $fechaComprobarF >= $fechaInicial && $fechaComprobarF <= $fechaFinal  || $fechaComprobarI < $fechaInicial &&  $fechaComprobarF>$fechaFinal) {
                   
                   $carrito = Carrito::find($carro->id)->delete();
                   
                    }
                }
           }
        }
        
        $carritos = Carrito::all()->where('id_usuario', "=",Auth::id());
        return view('equipo.paypal', compact('carritos'))
            ->with('success', 'Compruebe sus productos antes del pago puede que por falta de stock se hayan eliminado algunos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $carrito = new Carrito();
        return view('carrito.create', compact('carrito'));
    }

    public function createAlquiler(Request $request)
    {
        
        $equipo = Equipo::find($request["id_equipo"]);
        $carrito = new Carrito();
        $fechas = array();
        array_push($fechas, $request["fecha_inicio"]);
        array_push($fechas, $request["fecha_fin"]);
        
                $fi = new DateTime($fechas[0]);
                $ff = new DateTime($fechas[1]);
                $diff = $fi->diff($ff); 
                
                $diasAlquiler=$diff->days+1;
                

        return view('equipo.showcatalogo', compact('carrito','equipo','fechas','diasAlquiler'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Carrito::$rules);

        $carrito = Carrito::create($request->all());

        return redirect()->route('carritos.index')
            ->with('success', 'Carrito created successfully.');
    }

    public function storeCarro(Request $request)
    {
        $bandera=0;
        $fecha=strtotime($request["f_inicio"]);
             $a=date("Y-m-d", $fecha);
             $request["f_inicio"]=$a;

             $fecha1=strtotime($request["f_fin"]);
             $b=date("Y-m-d", $fecha1);
             $request["f_fin"]=$b;

        $carritos = Carrito::all()->where('id_usuario', "=",Auth::id());

        foreach ($carritos as $carro) {
            $fechaInicial= strtotime($carro->f_inicio);
            $fechaFinal= strtotime($carro->f_fin); 
           
            if ($carro->id_equipo==$carro->id_equipo) {
                
            
            if ($fecha >= $fechaInicial && $fecha <= $fechaFinal || $fecha1 >= $fechaInicial && $fecha1 <= $fechaFinal  || $fecha < $fechaInicial &&  $fecha1>$fechaFinal) {
               
               $bandera=1;
               
                }
            }
       }


        if ($bandera==0) {
            request()->validate(Carrito::$rules);

        $carrito = Carrito::create($request->all());
        $comp=0;
        return redirect()->route('carritos.mostrarCarrito','comp')
            ->with('success', 'Producto añadido al carrito');
        }else{
            $comp=0;
        return redirect()->route('carritos.mostrarCarrito','comp')
            ->with('error', 'El rango de fechas del alquiler coincide con un producto de tu carrito');
        }

        
    }

    public function mostrarCarrito($comp)
    {
        if ($comp==1) {
            $carrito = Carrito::where('id_usuario', "=",Auth::id()) ->get();
            return view('carrito.mostrarCarrito', compact('carrito','comp'));
        }else{
            
            $carrito = Carrito::where('id_usuario', "=",Auth::id()) ->get();
            return view('carrito.mostrarCarrito', compact('carrito','comp'));
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
        $carrito = Carrito::find($id);

        return view('carrito.show', compact('carrito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carrito = Carrito::find($id);

        return view('carrito.edit', compact('carrito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Carrito $carrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrito $carrito)
    {
        request()->validate(Carrito::$rules);

        $carrito->update($request->all());

        return redirect()->route('carritos.index')
            ->with('success', 'Carrito updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $carrito = Carrito::find($id)->delete();
        $comp=0;
        return redirect()->route('carritos.mostrarCarrito','comp')
            ->with('success', 'Producto Borrado correctamente');
    }
}

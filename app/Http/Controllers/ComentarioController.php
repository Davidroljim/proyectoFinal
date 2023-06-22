<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Extension\CommonMark\Node\Inline\Link;

/**
 * Class ComentarioController
 * @package App\Http\Controllers
 */
class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentarios = Comentario::paginate();

        return view('comentario.index', compact('comentarios'))
            ->with('i', (request()->input('page', 1) - 1) * $comentarios->perPage());
    }

    public function indexp($id_usuario)
    {
        $comentarios = Comentario::where('id_usuario', $id_usuario)->orderBy('created_at', 'desc')->get();
        //$comentarios = Comentario::paginate();

        return view('comentario.miscomentarios', compact('comentarios'))
            ->with('success', 'Comentario creado Correctamente.');
    }

    public function indexInicio()
    {
        //$comentarios = Comentario::paginate();
        $comentarios = Comentario::orderBy('created_at', 'desc')->get();

        $comentario = new Comentario();

        return view('welcome', compact('comentario', 'comentarios'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comentario = new Comentario();
        return view('comentario.create', compact('comentario'));
    }
    public function crear()
    {
        $comentarios = Comentario::paginate();

        $comentario = new Comentario();

        return view('welcome', compact('comentarios', 'comentario'))
            ->with('i', (request()->input('page', 1) - 1) * $comentarios->perPage());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate(Comentario::$rules);

        $comentario = Comentario::create($request->all());

        return redirect()->route('comentario.miscomentarios', $request["id_usuario"])
            ->with('success', 'Comentario creado Correctamente.');
    }
    public function storeC(Request $request)
    {

        var_dump(request()->validate(Comentario::$rules));

        $comentario = Comentario::create($request->all());

        echo "esto es el store";
        return redirect()->route('welcome')
            ->with('success', 'Comentario Creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comentario = Comentario::find($id);

        return view('comentario.show', compact('comentario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comentario = Comentario::find($id);
        if (Auth::user()->role=='admin') {
            return view('comentario.edit', compact('comentario'));
        }else{
            return view('comentario.edit', compact('comentario'));
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Comentario $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentario $comentario)
    {
        request()->validate(Comentario::$rules);

        $comentario->update($request->all());
        
        if (Auth::user()->role=='admin') {
            return redirect()->route('comentarios.index')
            ->with('success', 'Comentario editado correctamente');
        }else{
            return redirect()->route('comentario.miscomentarios',$request["id_usuario"])
            ->with('success', 'Comentario editado correctamente');
        }
        
    }

    

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $comentario = Comentario::find($id)->delete();


        if (Auth::user()->role=='admin') {
            return redirect()->route('comentarios.index')
            ->with('success', 'Comentario borrado correctamente');
        }else{
            return redirect()->route('comentario.miscomentarios', Auth::user()->id )
            ->with('success', 'Comentario borrado correctamente');
        }

        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $users = User::paginate();

        return view('user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view('user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(User::$rules);

        $user = User::create($request->all());

        return redirect()->route('users.index')
            ->with('success', 'Usuario creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }
    public function showMiuser($id)
    {
        $user = User::find($id);
        
        return view('user.miuser', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $bandera=0;
        //  var_dump($user["email"]);
        $usuarios = User::paginate();
         foreach($usuarios as $users){
            // var_dump($user->email);
                 


        if ($user["email"]!=$request["email"]) {
            if ($request["email"]==$users->email) {
                $bandera=1;
            }
            
            
            // echo ("si");
        }
         }
         var_dump ($bandera);

         if ($bandera==1) {
            if (Auth::user()->role=='admin') {
                return redirect()->route('users.edit',$user["id"])
                ->with('success', 'El correo que has intentado cambiar esta ya en uso');
            }else{
                return redirect()->route('users.edit',Auth::user()->id)
                ->with('success', 'El correo que has intentado cambiar esta ya en uso');
            }
         }else{
                request()->validate(User::$rules);

        $user->update($request->all());

            if (Auth::user()->role=='admin') {
                return redirect()->route('users.index')
                ->with('success', 'Usuario Actualizado');
            }else{
                return redirect()->route('comentario.indexInicio')
                ->with('success', 'Usuario Actualizado');
            }
         }

        
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'Usuario Borrado');
    }
}

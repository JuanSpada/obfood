<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class PerfilController extends Controller
{
    public function perfil()
    {
        $user = Auth::user();
        return view('perfil',compact('user',$user));
    }

    public function update_usuario(Request $request){

        $request->validate([
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();
        
            $user->nombre = $request->input('nombre');
            $user->apellido = $request->input('apellido');
            $user->email = $request->input('email');
            $user->direccion = $request->input('direccion'); 
            $user->postal = $request->input('postal');
        
        if($request->has('avatar')) {
            $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
            $request->avatar->storeAs('avatars',$avatarName);
            $user->avatar = $avatarName;
            $user->save();
            return back()->with('success','You have successfully upload image.');
        }
        
        $user->save();
        

        return redirect('/perfil');
    }

    public function editarUser($id) {
        $user = User::find($id);
        return view('perfil')->with('user', $user);
    }
}

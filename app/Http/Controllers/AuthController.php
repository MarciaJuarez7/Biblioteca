<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function loginForm(){
        return view('auth.login');
    }
    
    public function register(Request $request){
    try {
        // 1. Validar los datos
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // 2. Crear el usuario
        $user = User::create([
            'name' => $validateData['name'],
            'email' => $validateData['email'],
            'password' => Hash::make($validateData['password']),
        ]);

        // 3. Iniciar sesión
        auth()->login($user);

        // 4. Redirigir con mensaje de éxito
        return redirect()->route('home')->with('success', '¡Registro exitoso!');
        
    } catch (\Illuminate\Validation\ValidationException $e) {
        // Si hay error de validación, muestra qué campos fallan
        dd('ERROR DE VALIDACIÓN:', $e->errors());
        
    } catch (\Exception $e) {
        // Cualquier otro error
        dd('ERROR GENERAL:', $e->getMessage());
    }
}
}

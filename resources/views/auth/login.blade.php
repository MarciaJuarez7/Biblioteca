@extends('layout.auth')

@section('content')
<!-- Contenedor principal que empuja el footer hacia abajo -->
    <main class="flex-grow flex items-center justify-center p-4">
        <div class="max-w-6xl w-full grid md:grid-cols-2 gap-8 items-start py-8">
            
            <!-- ========== FORMULARIO DE LOGIN ========== -->
            <section class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-indigo-100 rounded-full text-indigo-600 mb-4">
                        <i class="fas fa-sign-in-alt text-2xl"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800">Bienvenido</h2>
                    <p class="text-gray-500 mt-2">Accede a tu cuenta de biblioteca</p>
                </div>

                <!-- Formulario de login -->
                <form class="space-y-6" action="{{ route('login') }}" method="post">
                 @csrf 
                    <!-- Email -->
                    <div>
                        <label for="login-email" class="block text-sm font-medium text-gray-700 mb-1.5">
                            <i class="far fa-envelope mr-2 text-indigo-500"></i>Email
                        </label>
                        <input type="email" id="login-email" name="email" required 
                               class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all"
                               placeholder="tu@email.com">
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="login-password" class="block text-sm font-medium text-gray-700 mb-1.5">
                            <i class="fas fa-lock mr-2 text-indigo-500"></i>Contraseña
                        </label>
                        <input type="password" id="login-password" name="password" required 
                               class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all"
                               placeholder="••••••••">
                    </div>

                    <!-- Recordar y olvidé contraseña -->
                    <div class="flex items-center justify-between text-sm">
                        <label class="flex items-center gap-2 text-gray-600">
                            <input type="checkbox" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            Recordarme
                        </label>
                        <a href="#" class="text-indigo-600 hover:text-indigo-800 hover:underline">¿Olvidaste tu contraseña?</a>
                    </div>

                    <!-- Botón de envío -->
                    <button type="submit" 
                            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-4 rounded-xl transition duration-200 shadow-md hover:shadow-lg flex items-center justify-center gap-2">
                        <i class="fas fa-arrow-right-to-bracket"></i> Iniciar sesión
                    </button>
                </form>

                <!-- Enlace a registro -->
                <p class="text-center text-gray-500 text-sm mt-6">
                    ¿No tienes cuenta? 
                    <a href="#registro" class="text-indigo-600 font-medium hover:underline">Regístrate aquí</a>
                </p>
            </section>

            <!-- ========== FORMULARIO DE REGISTRO ========== -->
            <section id="registro" class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-emerald-100 rounded-full text-emerald-600 mb-4">
                        <i class="fas fa-user-plus text-2xl"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800">Crear cuenta</h2>
                    <p class="text-gray-500 mt-2">Hazte socio de la biblioteca</p>
                </div>

                <!-- Formulario de registro -->
                <!-- Formulario de registro -->
<form class="space-y-5" action="{{ route('register') }}" method="POST">
    @csrf  <!-- ¡IMPORTANTE! Protección CSRF -->
    
    <!-- Campo Nombre (único) -->
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 mb-1.5">
            <i class="fas fa-user mr-2 text-emerald-500"></i>Nombre completo
        </label>
        <input type="text" id="name" name="name" required 
               class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition-all"
               placeholder="María García">
    </div>

    <!-- Email -->
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">
            <i class="far fa-envelope mr-2 text-emerald-500"></i>Email
        </label>
        <input type="email" id="email" name="email" required 
               class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition-all"
               placeholder="tu@email.com">
    </div>

    <!-- Password -->
    <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1.5">
            <i class="fas fa-lock mr-2 text-emerald-500"></i>Contraseña
        </label>
        <input type="password" id="password" name="password" required 
               class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition-all"
               placeholder="Mínimo 8 caracteres">
    </div>

    <!-- Confirmar contraseña -->
    <div>
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1.5">
            <i class="fas fa-lock mr-2 text-emerald-500"></i>Repetir contraseña
        </label>
        <input type="password" id="password_confirmation" name="password_confirmation" required 
               class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition-all"
               placeholder="••••••••">
    </div>

    <!-- Términos y condiciones -->
    <div class="flex items-start gap-3 text-sm">
        <input type="checkbox" id="terminos" required class="mt-1 rounded border-gray-300 text-emerald-600 focus:ring-emerald-500">
        <label for="terminos" class="text-gray-600">
            Acepto los <a href="#" class="text-emerald-600 hover:underline">términos y condiciones</a> y la 
            <a href="#" class="text-emerald-600 hover:underline">política de privacidad</a>.
        </label>
    </div>

    <!-- Botón de registro -->
    <button type="submit" 
            class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-3 px-4 rounded-xl transition duration-200 shadow-md hover:shadow-lg flex items-center justify-center gap-2">
        <i class="fas fa-user-check"></i> Crear cuenta
    </button>
</form>

                <!-- Enlace a login -->
                <p class="text-center text-gray-500 text-sm mt-6">
                    ¿Ya tienes cuenta? 
                    <a href="#" class="text-emerald-600 font-medium hover:underline">Inicia sesión</a>
                </p>
            </section>
        </div>
    </main>
    
    @endsection
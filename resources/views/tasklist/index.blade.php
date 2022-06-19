@extends('layouts.app')

@section('content')
    <nav class="flex p-4 ">
        <router-link to="/form" class="text-xl text-white mx-3 p-2" active-class="font-bold" exact>Agregar tarea
        </router-link>

        <router-link to="/" class="text-xl text-white mx-3 p-2" active-class="font-bold" exact>Lista de tareas
        </router-link>
    </nav>

    <div class="flex justify-center mt-20">
        <router-view></router-view>
    </div>
@endsection

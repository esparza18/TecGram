@extends('layouts.app')
@section('titulo')
Iniciar sesion en TecGram 
@endsection

@section('contenido')
<div class="flex justify-center gap-10">
    <div class="w-4/12">
       <img class="rounded-full shadow-lg" src="{{asset('img/Como.jpg')}}" alt="">
    </div>
    <div class="w-4/12 bg-blue-900 p-6 rounded-lg shadow-xl">
        <form action="{{route('login.store')}}" method="POST">
            @csrf
            @if (session('mensaje'))
                <p class="text-red-700 my-2">{{session('mensaje')}}</p>
            @endif
         
          
         
           <div class="mb-5">
            <label class="mb-2 block text-white font-bold uppercase" for="username">Username</label>
            <input class="border p-2 w-full rounded-lg @error('username') border-red-500 @enderror" type="text" value="{{old('username')}}" id = "name" name="username">
           </div>
           @error('username')
           <p class="text-red-600 text-center mb-2"> {{$message}}</p>
          @enderror

           

           <div class="mb-5">
            <label class="mb-2 block text-white font-bold uppercase" for="password">password</label>
            <input class="border p-2 w-full rounded-lg @error('password') border-red-500 @enderror" type="password" id = "name" name="password">
            @error('password')
            <p class="text-red-600 text-center mb-2"> {{$message}}</p>
           @enderror
           </div>

          

          

           <input class="bg-sky-600 text-white p-2 w-full rounded-lg font-bold hover:bg-sky-900 cursor-pointer" type="submit" value="Iniciar Sesion">
        </form>
    </div>
</div>

@endsection
@extends('layouts.app')
@section('titulo')
Registrate en TecGram 
@endsection

@section('contenido')
<div class="flex justify-center gap-10">
    <div class="w-4/12">
       <img class="rounded-full shadow-lg" src="{{asset('img/Como.jpg')}}" alt="">
    </div>
    <div class="w-4/12 bg-blue-900 p-6 rounded-lg shadow-xl">
        <form action="{{route('cuenta.store')}}" method="POST">
            @csrf
           <div class="mb-5">
            <label class="mb-2 block text-white font-bold uppercase" for="name">Nombre</label>
            <input class="border p-2 w-full rounded-lg @error('name') border-red-500 @enderror" type="text" value="{{old('name')}}" id = "name" name="name" placeholder="  @error('name') {{$message}} @enderror">
             
           </div>

           @error('name')
            <p class="text-red-600 text-center mb-2"> {{$message}}</p>
           @enderror
          
          
         
           <div class="mb-5">
            <label class="mb-2 block text-white font-bold uppercase" for="username">Username</label>
            <input class="border p-2 w-full rounded-lg @error('username') border-red-500 @enderror" type="text" value="{{old('username')}}" id = "name" name="username">
           </div>
           @error('username')
           <p class="text-red-600 text-center mb-2"> {{$message}}</p>
          @enderror

           <div class="mb-5">
            <label class="mb-2 block text-white font-bold uppercase" for="email">email</label>
            <input class="border p-2 w-full rounded-lg @error('email') border-red-500 @enderror" type="text" value="{{old('email')}}" id = "name" name="email">
           </div>

           @error('email')
           <p class="text-red-600 text-center mb-2"> {{$message}}</p>
          @enderror

           <div class="mb-5">
            <label class="mb-2 block text-white font-bold uppercase" for="password">password</label>
            <input class="border p-2 w-full rounded-lg @error('password') border-red-500 @enderror" type="password" id = "name" name="password">
            @error('password')
            <p class="text-red-600 text-center mb-2"> {{$message}}</p>
           @enderror
           </div>

          

           <div class="mb-5">
            <label class="mb-2 block text-white font-bold uppercase" for="password_confirmation">Repetir password</label>
            <input class="border p-2 w-full rounded-lg @error('name') border-red-500 @enderror" type="password" id = "name" name="password_confirmation">
           </div>



           <input class="bg-sky-600 text-white p-2 w-full rounded-lg font-bold hover:bg-sky-900 cursor-pointer" type="submit" value="Crear cuenta">
        </form>
    </div>
</div>

@endsection
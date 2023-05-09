@extends ('layouts.app')

@section('titulo')
Crear nueva publicación
@endsection

@push('style')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
<div class="md:flex md:items-center">
    <div class="md:w-1/2 px-10">
        <form action="{{route('Imagen.store')}}" id = "dropzone" class="dropzone border-dashed border-2 w-full h-80 rounded flex flex-col justify-center items-center bg-transparent" enctype="multipart/form-data">
            @csrf
            
            </form>
    
    </div>
    <div class="md:w-1/2 px-10 w-4/12 bg-blue-900 p-6 rounded-lg shadow-xl">
        <form action="{{route('cuenta.store')}}" method="POST">
            @csrf
           <div class="mb-5">
            <label class="mb-2 block text-white font-bold uppercase" for="titulo">Título</label>
            <input class="border p-2 w-full rounded-lg @error('titulo') border-red-500 @enderror" type="text" value="{{old('titulo')}}" id = "titulo" name="titulo" placeholder="  @error('titulo') {{$message}} @enderror">
             
           </div>

           @error('titulo')
            <p class="text-red-600 text-center mb-2"> {{$message}}</p>
           @enderror


           <div class="mb-5">
            <label class="mb-2 block text-white font-bold uppercase" for="descripcion">Descripción</label>
            <textarea class="border p-2 w-full rounded-lg @error('descripcion') border-red-500 @enderror" type="text"id = "descripcion" name="descripcion" placeholder="  @error('descripcion') {{$message}} @enderror"> {{old('descripcion')}} </textarea>
             
            

           @error('descripcion')
            <p class="text-red-600 text-center mb-2"> {{$message}}</p>
           @enderror
           

           <input class="bg-sky-600 text-white p-2 w-full rounded-lg font-bold hover:bg-sky-900 cursor-pointer" type="submit" value="Publicar">
        </form>
    </div>
</div>
@endsection
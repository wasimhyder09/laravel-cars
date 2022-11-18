@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
      <div class="text-center">
        <h1 class="text-5xl uppercase bold">Edit car</h1>
      </div>
      <div class="pt-10">
        <a href="/cars" class="border-b-2 pb-2 border-dotted italic text-gray-500">Back &larr;</a>
      </div>
    </div>
    <div class="flex justify-center pt-20">
      <form action="/cars/{{ $car->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="block">
          <input type="text"
            name="name"
            class="block shadow-5xl mb-10 p-2 w-80 italic placehodler-gray-400"
            placeholder="Brand name..."
            value="{{ $car->name }}">
          <input type="text"
            name="founded"
            class="block shadow-5xl mb-10 p-2 w-80 italic placehodler-gray-400"
            placeholder="Founded..."
            value="{{ $car->founded }}">

          <input type="text"
            name="description"
            class="block shadow-5xl mb-10 p-2 w-80 italic placehodler-gray-400"
            placeholder="Description..."
            value="{{ $car->description }}">
          <button
            type="submit"
            class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">Edit</button>
        </div>
      </form>
    </div>
@endsection
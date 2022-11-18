@extends('layouts.app')

@section('content')
  <div class="ml-20 mt-5">
    <h1 class="font-bold">Are you sure you want to delete {{ $car->name }}?</h1>
    <form action="/cars/{{ $car->id }}" method="POST" class="mt-2">
      @csrf
      @method('delete')
      <button class="border-b-2 pb-2 border-dotted italic text-red-500">Delete &rarr;</button>
      <br>
      <a href="/cars" class="border-b-2 pb-2 border-dotted italic text-gray-500"> &larr; Cancel</a>
    </form>
  </div>
@endsection
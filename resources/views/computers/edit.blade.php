@extends('layout')
@section('title', 'edit computers')

@section('content')
<div class="p-6 ">
    <div class="flex items-center">
        <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">edit computers</div>
    </div>
    <p>this is a edit computer page</p>


    <form action="/computers/{{ $computer->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="sr-only">Name</label>
            <input type="text" name="name" required id="name" placeholder="computer name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ $computer->name }}">
            @error('name')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="price" class="sr-only">Price</label>
            <input type="text" name="price" id="price" required placeholder="computer price" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('price') border-red-500 @enderror" value="{{ $computer->price }}">
            @error('price')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Update</button>
        </div>
    </form>
    
</div>
@endsection
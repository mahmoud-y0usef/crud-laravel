@extends('layout')
@section('title', 'show computers')

@section('content')
<div class="p-6 ">
    <div class="flex items-center">
        <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">computers</div>
    </div>
    <p>this is a computer page</p>
    <p>computer name: {{$computer['name']}}</p>
    <p>computer price: {{$computer['price']}}</p>
    <a href="/computers/{{$computer['id']}}/edit">edit</a>
    <form action="/computers/{{$computer['id']}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">delete</button>
    </form>
    <a href="/computers">back</a>
</div>
@endsection
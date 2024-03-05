@extends('layout')
@section('title', 'computers')

@section('content')
<div class="p-6 ">
    <a href="/computers/create">create</a>
    @if(count($computers) === 0)
    <p>no computers found</p>
    @else
        @foreach($computers as $computer)
        <li>
            <a href="/computers/{{$computer['id']}}">{{$computer['name']}}</a>
        </li>
        @endforeach
    @endif
    <div class="flex items-center">
        <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">computers</div>

    </div>
    <p>this is a computer page</p>
</div>
@endsection
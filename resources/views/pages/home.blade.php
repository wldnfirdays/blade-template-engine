@extends('layouts.app')
@section('title', 'Halaman Home')
@section ('content')
    ini adalah halaman home <br/>
    Hello, {!! $name[0] !!} <br/>

    <x-alert theme="success" closeable="true">
        Ini adalah alert
    </x-alert>

    <br/>

    @foreach($fruits as $fruit)
        @if($loop->first)
            -Pengulangan pertama- <br/>
        @endif
        {{ $fruit }} <br/>
        @if($loop->last)
            -Pengulangan terakhir- <br/>
        @endif
    @endforeach

    @php
        $no = 1;
    @endphp

    {{ $no }}
    {!! $fruits[2] !!}
@stop

@section('js')
    <script>
        console.log('Hello');
    </script>
@stop
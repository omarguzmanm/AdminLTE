@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Hola mundo</h1>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam corrupti temporibus repellat laborum. Tempore labore commodi, veniam nemo nostrum fuga voluptatum eaque cumque aliquam et, sint iste nobis enim eius.</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
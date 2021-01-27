@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Publish your New App</h1>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        @include('app-form')

    </div>

</div>
@stop
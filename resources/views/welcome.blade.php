@extends('layouts.app')

@section('content')
@if(session()->has('msj'))
    <div class="alert alert-success" role="alert">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
    <div class="alert alert-danger" role="alert">{{ session('errormsj') }}</div>
@endif
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

             
            </div>
        </div>
@endsection

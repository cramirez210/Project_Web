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
                   

                    <img src="https://www.ucr.ac.cr/plantillas/ucr_3/imagenes/firma-ucr-ico.png" class="thumb" alt="a picture">
                <h4>Programa de Posgrado en Tecnologías de Informaación y Comunicación para la Gestión Organizacional</h4>   

                </div>


             
            </div>
        </div>
@endsection

<?php
use Illuminate\Support\Str;
?>
@extends('layouts.panel')

@section('content')

<div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Nuevo Paciente</h3>
                </div>
                <div class="col text-right">
                  <a href="{{ url('/pacientes')}}" 
                  class="btn btn-sm btn-success">
                  <i class="fas fa-chevron-left"></i> Regresar</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              
            @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    <i class="fas fa-exclamation-triangle"></i>
                 <strong>Por favor!</strong> {{ $error}}
                </div>
                @endforeach
            @endif
                <form action="{{ url('/pacientes')}}" method="POST">
               @csrf
                    <div class="form-group">
                        <label for="name">Nombre del Paciente</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name')}}" required> 
                     </div>

                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="text" name="email"  value="{{ old('email')}}" class="form-control"> 
                     </div>

                     <div class="form-group">
                        <label for="cedula">Cedula</label>
                        <input type="text" name="cedula"  value="{{ old('cedula')}}" class="form-control"> 
                     </div>

                     <div class="form-group">
                        <label for="address">Direccion</label>
                        <input type="text" name="address"  value="{{ old('address')}}" class="form-control"> 
                     </div>

                     <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone"  value="{{ old('phone')}}" class="form-control"> 
                     </div>

                     <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="text" name="password"  value="{{ old('password', Str::random(8))}}" class="form-control"> 
                     </div>

                     <button type="submit" class="btn btn-sm btn-primary">Crear Paciente</button>
                </form>
            </div>
            </div>
@endsection
<?php
use Illuminate\Support\Str;
?>
@extends('layouts.panel')

@section('content')

<div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Edit Paciente</h3>
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
                <form action="{{ url('/pacientes/'.$patient>id)}}" method="POST">
               @csrf
               @method('PUT')
                    <div class="form-group">
                        <label for="name">Nombre del Paciente</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $patient->name)}}" required> 
                     </div>

                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="text" name="email"  value="{{ old('email', $patient->email)}}" class="form-control"> 
                     </div>

                     <div class="form-group">
                        <label for="cedula">Cedula</label>
                        <input type="text" name="cedula"  value="{{ old('cedula', $patient->cedula)}}" class="form-control"> 
                     </div>

                     <div class="form-group">
                        <label for="address">Direccion</label>
                        <input type="text" name="address"  value="{{ old('address', $patient->address)}}" class="form-control"> 
                     </div>

                     <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone"  value="{{ old('phone', $patient->phone)}}" class="form-control"> 
                     </div>

                     <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="text" name="password"  class="form-control">
                        <small class="text-warning">Solo llena el campo si desea cambiar la contraseña</small> 
                     </div>

                     <button type="submit" class="btn btn-sm btn-primary">Guardar cambios</button>
                </form>
            </div>
            </div>
@endsection
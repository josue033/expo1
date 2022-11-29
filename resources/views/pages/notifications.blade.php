@extends('layouts.app', ['page' => __('Notifications'), 'pageSlug' => 'notifications'])

@section('content')
@section('content')
<form action="{{ route('estado.store') }}" method="POST">
    @csrf
<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header ">
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <h5 class="card-category">Mood Diary</h5>
                        <h2 class="card-title">Registrar Estado</h2>
                    </div>
                    
                </div>
            </div>
            
        </div>
        @csrf
<div class="row">
    <div class="col-sm-4">
        <label for="SelectAnimo" class="form-label">Estado de animo</label><br>
        <select name="estado_animo" id="SelectAnimo" class="form-select">
            <option value="0">Muy positivo</option>
            <option value="1">positivo</option>
            <option value="2">Neutral</option>
            <option value="3">Negativo</option>
            <option value="4">Muy Negativo</option>
           {{-- @for($x = 0; $x < count($urgencias); $x++)
             <option value="{{ $x }}" @selected(old('urgencia', $tarea->urgencia))>{{ $urgencias[$x] }}</option>
           @endfor  --}}
        </select>
    </div>
    <div class="col-sm-4">
        <label for="SelectEmocion" class="form-label">Emocion</label><br>
        <select name="emocion" id="SelectEmocion" class="form-select">
            <option value="0">Ansioso</option>
            <option value="1">Alegre</option>
            <option value="2">Optimista</option>
            <option value="3">Triste</option>
            <option value="4">Optimista</option>
           {{-- @for($x = 0; $x < count($urgencias); $x++)
             <option value="{{ $x }}" @selected(old('urgencia', $tarea->urgencia))>{{ $urgencias[$x] }}</option>
           @endfor  --}}
        </select>
    </div>
    <div class="col-sm-4">
        <label for="SelectReaccion" class="form-label">Sintoma fisico</label><br>
        <select name="reacciones" id="SelectReaccion" class="form-select">
            <option value="0">Sudor</option>
            <option value="1">Mareo</option>
            <option value="2">Temblores</option>
            <option value="3">Palpitaciones</option>
            <option value="4">Dolor de pecho</option>
           {{-- @for($x = 0; $x < count($urgencias); $x++)
             <option value="{{ $x }}" @selected(old('urgencia', $tarea->urgencia))>{{ $urgencias[$x] }}</option>
           @endfor  --}}
        </select>
    </div>
    
    <div class="col-sm-12" style="margin-top: 30px">
        <label for="TextAreaSituacion" class="form-label">Situación</label>
        <textarea name="situacion" id="TextAreaSituacion" cols="30" rows="10" class="form-control">{{ old('descripcion') }}</textarea>
    </div>
    <div class="col-sm-12" style="margin-top: 30px">
        <label for="TextAreaPensamiento" class="form-label">Pensamientos</label>
        <textarea name="pensamientos" id="TextAreaPensamiento" placeholder="Lo que sucede" cols="30" rows="10" class="form-control">{{ old('descripcion') }}</textarea>
    </div>
    <div class="col-sm-12" style="margin-top: 30px">
        <label for="TextAreaComportamiento" class="form-label">Comportamieto</label>
        <textarea name="comportamiento" id="TextAreaComportamiento" cols="30" rows="10" class="form-control">{{ old('descripcion') }}</textarea>
    </div>
    <div class="col-sm-4" style="margin-top: 30px">
        <label for="InputFecha" class="form-label">Fecha</label>
        <input type="datetime-local" name="fecha" id="InputFecha" class="form-control" >
        {{-- value="{{ old('fecha_limite', is_null($tarea->fecha_limite) ? '' : $tarea->fecha_limite->format('Y-m-d\TH:i')) }}" --}}
    </div>
</div>
<div style="margin-top: 50px" class="col-sm-12 textend my-2">
    <button type="submit" class="btn btn-primary">guardar</button>
</div>
    </div>
</div>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection

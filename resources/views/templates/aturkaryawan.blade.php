
@extends('templates.dashboard1')

@section('content')

<?php use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator; ?>

<h1>Ubah Status Karyawan {{ $karyawan->name }} </h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($karyawan, array('route' => array('daftar-karyawan.update', $karyawan->id), 'method' => 'PUT')) }}

<div class="box">
<div class="box-body">
    <div class="form-group">
        {{ Form::label('status', 'Status') }}
        {{ Form::number('status', $karyawan->status, array('class' => 'form-control', 'placeholder' => 'Status karyawan')) }}
    </div>
</div>
</div>

    {{ Form::submit('Ubah', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection

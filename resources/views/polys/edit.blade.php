@extends('polys.template')
@section('isi')
<div class="col-md-12">
    <div class="row">
        <span class="pull-right"><a href="{{ URL::to('polys/create') }}" class="btn btn-primary">Tambah Data</a></span>
    </div><br>
    <div class="clearfix"></div>
    <div class="row">
        <h3>Data {{ $poly->nama }}</h3>
        <hr>
        <div class="col-md-6 col-md-offset-3">
            {{ Html::ul($errors->all()) }}
            {{ Form::model($poly, array('route' => array('polys.update', $poly->id), 'method' => 'PUT')) }}
            <div class="form-group">
                {{ Form::label('nama', 'Nama') }}
                {{ Form::text('nama', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('latitude', 'Latitude') }}
                {{ Form::text('latitude', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('longitude', 'Longitude') }}
                {{ Form::text('longitude', null, array('class' => 'form-control')) }}
            </div>
            {{ Form::submit('Simpan', array('class' => 'btn btn-primary pull-right')) }}
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop
@section('script')
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
@stop


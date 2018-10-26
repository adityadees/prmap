@extends('polys.template')
@section('isi')
<div class="col-md-12">
    <div class="row">
        <span class="pull-right"><a href="{{ URL::to('polys/create') }}" class="btn btn-primary">Tambah Data</a></span>
    </div><br>
    <div class="clearfix"></div>
    <div class="row">
        <div class="jumbotron text-center">
            <h2>{{ $poly->nama }}</h2>
            <p>
                <strong>Latitude:</strong> {{ $poly->latitude }}<br>
                <strong>Longitude:</strong> {{ $poly->longitude }}
            </p>
        </div>
    </div>
</div>
@stop
@section('script')
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
@stop

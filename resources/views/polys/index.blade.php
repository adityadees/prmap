@extends('polys.template')
@section('isi')
<div class="col-md-12">
    <div class="row">
        <span class="pull-right"><a href="{{ URL::to('polys/create') }}" class="btn btn-primary">Tambah Data</a></span>
    </div><br>
    <div class="clearfix"></div>
    <div class="row">
        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nama</td>
                    <td>Latitude</td>
                    <td>Longitude</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($polys as $key => $value)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->latitude }}</td>
                    <td>{{ $value->longitude }}</td>
                    <td>
                        <div class="col-md-1">
                            <a href="{{ URL::to('polys/' . $value->id) }}" class="btn btn-warning btn-xl"><i class="fa fa-eye"></i> </a>
                        </div>
                        <div class="col-md-1">
                            <a href="{{ URL::to('polys/' . $value->id . '/edit') }}" class="btn btn-warning btn-xl"><i class=" fa fa-pencil"></i></a>
                        </div>
                        <div class="col-md-1">
                            {{ Form::open(array('url' => 'polys/' . $value->id, 'class' => '')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-warning btn-xl'] ) }}
                            {{ Form::close() }}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
@section('script')
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
@stop


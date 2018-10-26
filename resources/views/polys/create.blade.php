@extends('polys.template')
@section('isi')
<div class="col-md-12">
    <div class="row">
        <span class="pull-right"><a href="{{ URL::to('polys/create') }}" class="btn btn-primary">Tambah Data</a></span>
    </div><br>
    <div class="clearfix"></div>
    <div class="row">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Beginer</a></li>
                <li><a href="#tab_2" data-toggle="tab">Intermediate</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                  <div class="box-body">
                    <h3>Tambah Data</h3>
                    <hr>
                    <div class="col-md-6 col-md-offset-3">
                        {{ Html::ul($errors->all()) }}
                        {{ Form::open(array('url' => 'polys')) }}
                        <div class="form-group">
                            {{ Form::label('nama', 'Nama') }}
                            {{ Form::text('nama', Input::old('nama'), array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('latitude', 'Latitude') }}
                            {{ Form::text('latitude', Input::old('latitude'), array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('longitude', 'Longitude') }}
                            {{ Form::text('longitude', Input::old('longitude'), array('class' => 'form-control')) }}
                        </div>
                        {{ Form::submit('Simpan', array('class' => 'btn btn-primary pull-right')) }}
                        {{ Form::close() }}
                    </div>

                </div>
            </div>
            <div class="tab-pane" id="tab_2">
                <div class="box-body">
                    <h3>Tambah Data</h3>
                    <hr>

                    {{ Html::ul($errors->all()) }}
                    {{ Form::open(array('url' => 'polys')) }}
                    <div class="form-group">
                        <label>Nama Lokasi</label>
                        {{ Form::label('nama', 'Nama') }}
                        {{ Form::text('nama', 'Indonesia', array('class' => 'inputAddress input-xxlarge form-control')) }}
                    </div>      
                    <div class="form-group">
                        {{ Form::label('latitude', 'Latitude') }}
                        {{ Form::text('latitude', Input::old('latitude'), array('class' => 'latitude form-control', 'readonly' => 'readonly')) }}

                    </div>
                    <div class="form-group">
                        {{ Form::label('longitude', 'Longitude') }}
                        {{ Form::text('longitude', Input::old('longitude'), array('class' => 'longitude form-control', 'readonly' => 'readonly')) }}
                        
                    </div>

                    {{ Form::submit('Simpan', array('class' => 'btn btn-primary pull-right')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop
@section('script')
<script>
    $('.inputAddress').addressPickerByGiro({
        distanceWidget: true,
        boundElements: {
            'latitude': '.latitude',
            'longitude': '.longitude',
            'formatted_address': '.formatted_address'
        }
    });
</script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
@stop


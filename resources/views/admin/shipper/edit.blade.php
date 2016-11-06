@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>{{ trans('shipper.edit_shipper') }}</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {{ Form::model($shipper, array('route' => array('shipper.update', $shipper['id']), 'method' => 'PUT', 'files' => true)) }}

                        @include('admin.shipper.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

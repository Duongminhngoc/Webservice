@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>{{ trans('shipment.edit_shipment') }}</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {{ Form::model($shipment, array('route' => array('shipment.update', $shipment['id']), 'method' => 'PUT')) }}

                        @include('admin.shipment.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

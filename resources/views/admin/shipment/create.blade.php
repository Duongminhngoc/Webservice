@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>{{ trans('shipment.shipment') }}</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'shipment.store']) !!}

                        @include('admin.shipment.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

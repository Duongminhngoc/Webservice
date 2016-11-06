@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>{{ trans('shipment.detail_shipment') }}</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    @include('admin.shipment.show_fields')
                    <a href="{!! route('shipment.index') !!}" class="btn btn-default">{{ trans('shipment.back') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>{{ trans('orderItem.edit_orderItem') }}</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {{ Form::model($orderItem, array('route' => array('orderItem.update', $orderItem['id']), 'method' => 'PUT', 'files' => true)) }}

                        @include('admin.orderItem.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>{{ trans('restaurant.edit_restaurant') }}</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {{ Form::model($restaurant, array('route' => array('restaurant.update', $restaurant['id']), 'method' => 'PUT')) }}

                        @include('admin.restaurant.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

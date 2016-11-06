@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">{{ trans('restaurant.list_restaurant') }}</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" href="{!! route('restaurant.create') !!}">{{ trans('restaurant.add_restaurant') }}</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
            @if(Session::has('msg'))
                <div class="alert alert-success">
                    {{ Session::get('msg') }}
                </div>
            @endif
        <div class="box box-primary">
            <div class="box-body">
                @include('admin.restaurant.table')
            </div>
        </div>
    </div>
@endsection


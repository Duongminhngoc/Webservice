@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">{{ trans('product.list_product') }}</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" href="{!! route('product.create') !!}">{{ trans('product.add_product') }}</a>
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
            <div class="box-body col-sm-12">
                @include('admin.product.table')
            </div>
        </div>
    </div>
@endsection


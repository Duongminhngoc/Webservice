@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>{{ trans('product.product') }}</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['url' => 'services/product', 'files' => true]) !!}

                        @include('admin.product.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

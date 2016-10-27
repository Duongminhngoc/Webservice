@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>{{ trans('product.edit_product') }}</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {{ Form::model($product, ['url' => ['services/product', $product['id']], 'method' => 'PUT', 'files' => true]) }}

                        @include('admin.product.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

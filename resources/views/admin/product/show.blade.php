@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>{{ trans('product.detail_product') }}</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    @include('admin.product.show_fields')
                </div>
            </div>
        </div>
    </div>
@endsection

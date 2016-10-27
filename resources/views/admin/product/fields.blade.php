@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif

<div class="form-group col-sm-6">
    {!! Form::label('type', trans('product.type')) !!}
    {!! Form::text('product_type_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('status', trans('product.status')) !!}
    {!! Form::text('product_status_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('name', trans('product.name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('price', trans('product.price')) !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('quantity', trans('product.quantity')) !!}
    {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('description', trans('product.description')) !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('other', trans('product.other')) !!}
    {!! Form::text('other_product_details', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('image', trans('product.image')) !!}
    {!! Form::file('image') !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('product.index') !!}" class="btn btn-default">{{ trans('product.back') }}</a>
</div>

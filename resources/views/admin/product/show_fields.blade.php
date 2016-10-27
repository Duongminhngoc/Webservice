<div class="form-group col-sm-6">
    {!! Form::label('id', trans('product.id')) !!}
    <p>{!! $product['id'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('name', trans('product.name')) !!}
    <p>{!! $product['name'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('price', trans('product.price')) !!}
    <p>{!! $product['price'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('quantity', trans('product.quantity')) !!}
    <p>{!! $product['quantity'] !!}</p>
</div>

<div class="form-group">
    {!! Form::label('image', trans('product.image')) !!}
    <p><img src="{{ Request::root() }}/uploads/images/{!! $product['image'] !!}" width="100px" height="100px"></p>
</div>

<div class="form-group">
    {!! Form::label('created_at', trans('label.created_at')) !!}
    <p>{!! $product['created_at'] !!}</p>
</div>

<div class="form-group">
    {!! Form::label('updated_at', trans('label.updated_at')) !!}
    <p>{!! $product['updated_at'] !!}</p>
</div>


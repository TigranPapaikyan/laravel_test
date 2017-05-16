@extends('main')

@section('content')
<div class="row">
    <div class="col-md-6">
        <form id="product_form">
            {!! csrf_field() !!}
            <div class="form-group">
                <label>
                    Product name:<br/>
                    <input type="text" name="name" class="form-control"/>
                </label>
            </div>
            <div class="form-group">
                <label>
                    Quantity:<br/>
                    <input type="text" name="quantity" class="form-control"/>
                </label>
            </div>
            <div class="form-group">
                <label>
                    Price:<br/>
                    <input type="text" name="price" class="form-control"/>
                </label>
            </div>
            <div class="form-group">
                <div class="text-left">
                    <input type="submit" class="btn btn-success" value="Save" id="product_save"/>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="product_data">
    @if($products)
    @foreach ($products as $product)
        <div class="row">
            <div class="col-md-4"><b>Product Name:</b></div><div class="col-md-8">{!! $product['name'] !!}</div>
            <div class="col-md-4"><b>Price:</b></div><div class="col-md-8">{!! $product['price'] !!}</div>
            <div class="col-md-4"><b>Quantity:</b></div><div class="col-md-8">{!! $product['quantity'] !!}</div>                
        </div>
        <br/>
    @endforeach
    @endif
</div>
@endsection
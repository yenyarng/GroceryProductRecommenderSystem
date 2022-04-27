@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
                    <li class="breadcrumb-item active">{{ $product['name'] }}</li>
                </ol>
                <div class="card">
                    <div class="card mb-3">
                        <h3 class="card-header">Product Details</h3>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                        </div>
                        <div class="text-center">
                            <img src="{{ $product['image_path'] }}" class="img-fluid" alt="Responsive image"
                                width="350px" height="400px">
                        </div>

                        <div class="card-body">
                            <hr class="mt-2 mb-4">
                            <h5 class="card-title">Add to your grocery list</h5>
                            <h6 class="card-text">Recommended Quantity:
                                @if ($recommendQuantity == '0')
                                    {{ 'No recommendation' }}
                                @else
                                    {{ $recommendQuantity }}
                                @endif
                            </h6>
                            <form action="{{ route('addToGroceryList') }}" method="POST">
                                @csrf
                                <input type="hidden" , name="checked" , value="0">
                                <input type="hidden" id="product_id" name="product_id" value="{{ $product->id }}">
                                <div class="form-group mb-3">
                                    <label class="form-label mt-4" for="quantity">Select Quantity</label>
                                    <select class="form-select" id="quantity" name="quantity">
                                        <option selected value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Product Description
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body">
                                    {{ $product['desc'] }}
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Product Overview
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body">
                                    {{ $product['overview'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted"></div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">You might also like</h4>
                            <p class="card-text">Related products</p>
                            <hr class="mt-2 mb-5">
                            <div class="row text-center text-lg-start">
                                @foreach ($productLists as $productList)
                                    <div class="col-lg-3 col-md-4 col-6 ">
                                        <a href="{{ route('products.show', ['product' => $productList->id]) }}"
                                            class="d-block mb-4 h-100">
                                            <img class="img-fluid img-thumbnail" src="{{ $productList->image_path }}"
                                                alt="" style="width: auto; height: 195px;">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

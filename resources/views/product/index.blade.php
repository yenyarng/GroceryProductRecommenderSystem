@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Shopping List') }}</div>
                <div class="card-body">
                    {{-- <ul> --}}
                        {{-- @foreach ($products as $product)
                        <li>{{ $product->name }}
                            <span>
                                <a
                                    class="btn-sm btn-outline"
                                    style="width:150px"
                                    href="{{ route('products.show', ['product'=>$product->id]) }}">
                                    View Details
                                </a>
                            </span>
                        </li>
                        @endforeach --}}

                        <div class="row text-center text-lg-start">
                            @foreach ($products as $product)
                                <div class="col-lg-3 col-md-4 col-6 ">
                                    <a href="{{ route('products.show', ['product'=>$product->id]) }}"
                                        class="d-block mb-4 h-100">
                                        <img class="img-fluid img-thumbnail" src="{{ $product->image_path }}"
                                            alt="" style="width: auto; height: 195px;">
                                            <p> {{$product->name}}</p>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    {{-- </ul> --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

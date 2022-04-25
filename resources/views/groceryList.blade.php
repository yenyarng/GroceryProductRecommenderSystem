@extends('layouts.app')

@section('content')
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Your Grocery List') }}</div>
                    <div class="card-body">
                        {{-- <form action="updateGroceryList/{{$groceryLists->user_id}}" method="POST"> --}}
                        {{-- <form action="" method="POST"> --}}
                        {{-- <h1>{{$groceryLists}}</h1> --}}

                        @if ($groceryLists == '[]')
                            <p class="card-text">You have not created your grocery list yet.</p>
                        @else
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Checked</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($groceryLists as $groceryList)
                                        <tr>
                                            @if ($groceryList->checked == 0)
                                                <td>{{ $groceryList->product_name }}</td>
                                            @else
                                                <td>
                                                    <span style="text-decoration:line-through">
                                                        {{ $groceryList->product_name }}
                                                    </span>
                                                </td>
                                            @endif
                                            <td>{{ $groceryList->quantity }}</td>
                                            @if ($groceryList->checked == 0)
                                                <td><a
                                                        href={{ route('checkGroceryListProduct', [$groceryList->id]) }}>Checked</a>
                                                </td>
                                            @else
                                                <td><a
                                                        href={{ route('checkGroceryListProduct', [$groceryList->id]) }}>Unchecked</a>
                                                </td>
                                            @endif
                                            <td><a href={{ route('deleteGroceryListProduct', [$groceryList->id]) }}>Delete
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                        <a href="{{ route('home') }}" class="card-link">Home</a>
                        <a href="#" class="card-link">View Grocery Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

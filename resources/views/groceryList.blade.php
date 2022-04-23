@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('groceryListView') }}</div>
                    <div class="card-body">
                        {{-- <form action="updateGroceryList/{{$groceryLists->user_id}}" method="POST"> --}}
                        {{-- <form action="" method="POST"> --}}
                        {{-- <h1>{{$groceryLists}}</h1> --}}
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Checked</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            @if ($groceryLists != null)
                                <tbody>
                                    @foreach ($groceryLists as $groceryList)
                                        <tr>
                                            @if ($groceryList->checked == 0)
                                                <td>{{ $groceryList->name }}</td>
                                            @else
                                                <td>
                                                    <span style="text-decoration:line-through">
                                                        {{ $groceryList->name }}
                                                    </span>
                                                </td>
                                            @endif
                                            <td>{{ $groceryList->quantity }}</td>
                                            @if ($groceryList->checked == 0)
                                                <td><a href={{ route('updateGroceryList', [$groceryList->id]) }}>Checked</a></td>
                                            @else
                                                <td><a href={{ route('updateGroceryList', [$groceryList->id]) }}>Unchecked</a></td>
                                            @endif
                                            <td><a href={{ route('deleteGroceryListProduct', [$groceryList->id]) }}>Delete</td>
                                                <td>{{$groceryList->id}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                        </table>
                        <form action="/home" method="GET">
                            <div class="col text-center">
                                <button type="submit" style="width:150px " class="btn btn-primary">Save</button>
                            </div>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

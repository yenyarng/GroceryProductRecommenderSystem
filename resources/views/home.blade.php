@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Home') }}</div>
                    @include('preferencePage')
                    <div class="card-body">
                        <div class="col text-center">
                            <form action="findPreference" method="GET">
                                <button type="submit"  style="width:150px" class="btn btn-primary">Set preference</button>
                            </form>             
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col text-center">
                            <form action="showGroceryList/{{ Auth::user()->id }}" method="GET">
                                <button type="submit" style="width:150px" class="btn btn-primary">View Grocery List</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

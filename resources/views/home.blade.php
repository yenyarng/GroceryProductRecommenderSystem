@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Home') }}</div>
                    @include('preferencePage')
                    <div class="card-body">
                    <a href="{{ route('findPreference') }}" class="card-link">Set Preference</a>
                    <a href="showGroceryList/{{ Auth::user()->id }}" class="card-link">View Grocery List</a>
                    <a href="#" class="card-link">View Grocery Product</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

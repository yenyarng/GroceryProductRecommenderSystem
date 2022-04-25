@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Set Preference') }}</div>
                    @include('preferencePage')
                    <div class="card-body">
                        <form action="/updatePreference/{{$groceryData->id}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" , name="user_id" , value={{ Auth::user()->id }}> <br><br>
                                <label class="col-form-label" for="inputDefault">User Pax</label>
                                <input type="text" class="form-control" placeholder="Input user pax" id="inputDefault" name="user_pax" value={{$groceryData->user_pax}}>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label mt-2" for="inputDefault">Meal Number</label>
                                <input type="text" class="form-control" placeholder="Input meal number" id="inputDefault" name="meal_num" value={{$groceryData->meal_num}}>
                            </div>
                            <br>
                                <div class="col text-center">
                                    <button type="submit" style="width:150px " class="btn btn-primary">Save</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection

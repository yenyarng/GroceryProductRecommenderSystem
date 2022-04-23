@if (is_null($groceryData))
    <p class="text-center mt-3">You have not set preference yet</p>
@else
    <div class="card-body">
        <h5>Your Preference</h5>
        <table class="table table-hover">
            <tbody>
                <tr>
                    <th scope="row">User Pax</th>
                    <td>{{ $groceryData->user_pax }}</td>
                </tr>
                <tr>
                    <th scope="row">Meal Num</th>
                    <td>{{ $groceryData->meal_num }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endif

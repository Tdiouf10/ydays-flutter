<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserCollection;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends ApiController
{
    /**
     * Display a listing of the resource.
     * @return UserCollection
     */
    public function index()
    {
        return new UserCollection(User::query()->whereKeyNot(auth()->id())->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:55',
            'email' => 'email|required|unique:users',
        ]);

        $fields = collect($request->all());
        // Set data to the model
        $haircutReservation = $this->fillModel(new HaircutReservation(), $fields);
        // Save the model
        $haircutReservation->save();

        $allUserReservations = Haircut::getHaircutsWithReservationsFromUser($request->user_id);

        // Return the response
        return response()->json($allUserReservations);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

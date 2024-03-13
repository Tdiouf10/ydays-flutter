<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\User\UserCollection;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends ApiController
{
    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->model = new User();
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
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
        $user = $this->fillModel($this->model, $fields);
        // Save the model
        $success = $user->save();

        if (! $success) {
            return $this->internalServerError('User creation failed');
        }

        return $this->successResponse('User created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): UserResource|JsonResponse
    {
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $fields = collect($request->all());
        // Set data to the model
        $userModel = $this->fillModel($user, $fields);
        // Save the model
        $success = $userModel->save();

        if (! $success) {
            return $this->internalServerError('User creation failed');
        }

        return $this->successResponse('User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Delete the model from the database
        $user->delete();

        return $this->successResponse('User deleted successfully');
    }
}

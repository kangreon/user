<?php

namespace App\Http\Controllers;

use App\Http\Requests\SuperUserRequest;
use App\Http\Services\SuperUserService;

class SuperUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param SuperUserService $users
     * @return array
     */
    public function index(SuperUserService $users)
    {
        return $users->index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SuperUserRequest $request
     * @param SuperUserService $users
     * @return mixed
     */
    public function store(SuperUserRequest $request, SuperUserService $users)
    {
        return $users->store($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @param SuperUserService $users
     * @return mixed
     */
    public function show($id, SuperUserService $users)
    {
        return $users->show($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SuperUserRequest $request
     * @param $id
     * @param SuperUserService $users
     * @return mixed
     */
    public function update(SuperUserRequest $request, $id, SuperUserService $users)
    {
        return $users->update($id, $request->validated());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id - user id
     * @param SuperUserService $users
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function destroy($id, SuperUserService $users)
    {
        if ($users->destroy($id)) {
            return response(null, 202);
        }

        return response(null, 500);
    }
}

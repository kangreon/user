<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.03.2019
 * Time: 15:13
 */

namespace App\Http\Services;


use App\SuperUser;

class SuperUserService implements RESTService
{
    public function index()
    {
        return SuperUser::all()->toArray();
    }

    public function store($data)
    {
        return SuperUser::create($data)->toArray();

    }

    public function show($id)
    {
        return $this->getUser($id)->toArray();
    }

    public function update($id, $data)
    {
        $user = $this->getUser($id);
        $user->fill($data);
        $user->save();
        return $user->toArray();
    }

    public function destroy($id)
    {
        $user = $this->getUser($id);
        return $user->delete();
    }

    private function getUser($id)
    {
        return SuperUser::findOrFail($id);
    }
}

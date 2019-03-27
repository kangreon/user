<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.03.2019
 * Time: 15:09
 */

namespace App\Http\Services;

interface RESTService
{

    public function index();

    public function store($data);

    public function show($id);

    public function update($id, $data);

    public function destroy($id);

}

<?php

namespace App\User;
use Illuminate\Http\Request;

interface IUserSource{
    public function getByID($id);
    public function showAll();
    public function save(Request $request);
    public function update($id, Request $request);
    public function delete($id);
}

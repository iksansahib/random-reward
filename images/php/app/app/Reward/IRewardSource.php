<?php

namespace App\Reward;
use Illuminate\Http\Request;

interface IRewardSource{
    public function getByID($id);
    public function showAll();
    public function save(Request $request);
    public function update($id, Request $request);
    public function delete($id);
}

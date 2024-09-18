<?php

namespace App\Repositories;

use App\Models\Bird;
use App\Interfaces\BirdRepositoryInterface;

class BirdRepository implements BirdRepositoryInterface
{
    public function index(){
        return Bird::all();
    }

    public function getById($id){
        return Bird::findOrFail($id);
    }

    public function store(array $data){
        return Bird::create($data);
    }

    public function update(array $data,$id){
        return Bird::whereId($id)->update($data);
    }

    public function delete($id){
        Bird::destroy($id);
    }

    public function create($id)
    {
        return $this->store($id);
    }
}

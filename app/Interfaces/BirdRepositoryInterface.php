<?php

namespace App\Interfaces;

interface BirdRepositoryInterface
{
    public function index();
    public function create($id);
    public function store(array $data);
    public function update(array $data,$id);
    public function delete($id);
}

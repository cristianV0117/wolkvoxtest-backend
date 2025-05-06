<?php

namespace App\Repositories;

interface ProductsRepository {
    public function index();
    public function show(int $id);
    public function store(array $data);
    public function update($id, array $data);
    public function destroy($id);
}
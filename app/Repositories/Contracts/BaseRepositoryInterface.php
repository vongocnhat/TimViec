<?php

namespace App\Repositories\Contracts;

interface BaseRepositoryInterface
{
    public function paginate($numberRows);
    public function findOrFail($id);
    public function store($request);
    public function update($request, $id);
    public function destroy($request);
}
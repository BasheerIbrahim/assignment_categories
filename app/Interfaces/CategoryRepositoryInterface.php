<?php

namespace App\Interfaces;

interface CategoryRepositoryInterface
{
    public function getParents(): array;

    public function getWithChildren(): array;

    public function store(array $data);

    public function show(int $id);

    public function delete(int $id);
}
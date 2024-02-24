<?php

namespace App\Repository\Interfaces;

interface BaeRepositoryInterface
{
    public function all();
    public function find(int $id);
    public function update(int $id);
}

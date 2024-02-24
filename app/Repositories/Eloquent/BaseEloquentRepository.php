<?php

namespace App\Repositories\Eloquent;

interface BaseEloquentRepository
{
    public function all();
    public function find(int $id);
    public function update(int $id);
}

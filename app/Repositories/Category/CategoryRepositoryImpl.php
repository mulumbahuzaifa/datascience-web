<?php

namespace App\Repositories\Category;

use App\Models\Category;

class CategoryRepositoryImpl implements CategoryRepository
{
    public function findAll()
    {
        return Category::get();
    }
}

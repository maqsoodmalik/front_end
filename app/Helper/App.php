<?php

namespace App\Helper;

use App\Models\Category;

class app
{
    public function getCategory()
    {
        $data = Category::all();
        return $data;
    }
}

<?php

namespace App\Repositories\Vendor;

use App\Models\Vendor;

class VendorRepositoryImpl implements VendorRepository
{
    public function findAll()
    {
        return Vendor::get();
    }
}

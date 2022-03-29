<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PackageCollection;
use App\Models\Package;

class LookupsController extends Controller
{
    public function listPackages()
    {
        $packages = Package::paginate(5);
        return new PackageCollection($packages);
    }
}

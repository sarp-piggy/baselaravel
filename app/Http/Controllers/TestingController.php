<?php

namespace App\Http\Controllers;

use Illuminate\Http\Resources\Json\JsonResource;

class TestingController extends Controller
{
    public function __invoke(): JsonResource
    {
        return JsonResource::make([
            'it works'
        ]);
    }
}

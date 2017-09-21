<?php
namespace App\Services\Api\Http\Controllers;

use Illuminate\Http\Request;
use Lucid\Foundation\Http\Controller;
use App\Services\Api\Features\ListUsersFeature;

class UserController extends Controller
{
    public function get()
    {
        return $this->serve(ListUsersFeature::class);
    }
}

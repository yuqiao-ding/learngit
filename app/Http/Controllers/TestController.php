<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Xiaocai\Test\DemoInterface;

class TestController extends Controller
{
    public function index(DemoInterface $demo)
    {
        dd($demo->demo2());
    }
}

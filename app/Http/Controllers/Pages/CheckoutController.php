<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        return $this ->middleware(['auth','verified']);
    }
    public function __invoke()
    {
        return view('pages.checkout.index');
    }
}

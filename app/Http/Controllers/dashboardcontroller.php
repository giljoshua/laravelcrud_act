<?php

namespace App\Http\Controllers;

use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Fetch all products
        return view('dashboard', ['products' => $products]); // Pass them to the view
    }
}
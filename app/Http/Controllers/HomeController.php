<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Contact;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('site.index');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function index()
    {
        $categories = Category::All();
        $products = Product::All();
        $contacts = Contact::first();

        if (empty($categories) || empty($products) || empty($contacts)) {
            return redirect()->route('welcome');
        } 

        return view('site.index', ['products' => $products, 'categories' => $categories, 'contacts' => $contacts]);
    }
    
}

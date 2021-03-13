<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('admin.products.index', ['products' => $products, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name              = $request->name;
        $product->price             = $request->price;
        $product->category_id       = $request->category;
        $product->disponibility     = $request->disponibility;
        $product->short_description = $request->shortDescription;
        $product->long_description  = preg_replace('/\s+/', ' ', nl2br($request->longDescription));

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $file->move('assets/image/product/uploads/', $filename);
            $product->image = $filename;

        } else {
            $product->image = '';

        }
        
        $product->save();
        return redirect()->route('product.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.products.edit', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->name              = $request->name;
        $product->price             = $request->price;
        $product->category_id       = $request->category;
        $product->disponibility     = $request->disponibility;
        $product->short_description = $request->shortDescription;
        $product->long_description  = preg_replace('/\s+/', ' ', nl2br($request->longDescription));

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $file->move('assets/image/product/uploads/', $filename);
            $product->image = $filename;

        } else {
            $product->image = '';

        }
        
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $filepath = "assets/image/product/uploads/";
        if (!unlink($filepath .$product->image)) {
            echo "<script>alert('$filepath - Ocorreu algum problema ao tentar localizar a imagem no servidor.');</script>";

        }
        $product->delete();
        return redirect()->route('product.index');
    }
}

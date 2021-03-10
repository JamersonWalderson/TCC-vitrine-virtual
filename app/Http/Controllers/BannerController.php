<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::all();
        return view ('admin.banner.index', ['banners' => $banner]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = new Banner;
        $banner->name = $request->name;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $file->move('assets/image/banner/uploads/', $filename);
            $banner->image = $filename;

        } else {
            $banner->image = '';

        }
        $banner->save();
        return redirect()->route('banner.index');

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
        $banner = Banner::find($id);
        return view('admin.banner.edit', ['banner' => $banner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $banner->name = $request->name;
        $banner->image = $request->image;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $file->move('assets/image/banner/uploads/', $filename);
            $banner->image = $filename;

        } else {
            $banner->image = '';

        }
        $banner->save();
        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $banner = Banner::find($id);
       $filepath = "assets/image/banner/uploads/";
        if (!unlink($filepath .$banner->image)) {
            echo "<script>alert('$filepath - Ocorreu algum problema ao tentar localizar a imagem no servidor.');</script>";

        }
       $banner->delete($id);
       return redirect()->route('banner.index');
    }
}

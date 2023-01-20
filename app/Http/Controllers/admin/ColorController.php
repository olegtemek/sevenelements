<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\ColorRequest;
use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = Color::all();
        return view('admin.color.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.color.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ColorRequest $request)
    {
        Color::create([
            'code' => $request->code,
            'title' => $request->title,
            'image1' => $request->image1,
            'image2' => $request->image2,
            'image3' => $request->image3,
            'image4' => $request->image4,
            'video' => $request->video,
        ]);

        return redirect()->route('admin.color.index')->with('message', 'Цвет был успешно добавлен');
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
        $color = Color::find($id);
        return view('admin.color.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ColorRequest $request, $id)
    {
        Color::find($id)->update([
            'code' => $request->code,
            'title' => $request->title,
            'image1' => $request->image1,
            'image2' => $request->image2,
            'image3' => $request->image3,
            'image4' => $request->image4,
            'video' => $request->video,
        ]);

        return redirect()->route('admin.color.index')->with('message', 'Цвет был успешно изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Color::destroy($id);
        return redirect()->route('admin.color.index')->with('message', 'Цвет был успешно удален');
    }
}

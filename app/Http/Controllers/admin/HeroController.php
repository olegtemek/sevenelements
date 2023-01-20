<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HeroRequest;
use App\Models\Color;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroes = Hero::with('color')->get();
        $colors = Color::all();
        return view('admin.hero.index', compact('heroes', 'colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors = Color::all();
        return view('admin.hero.create', compact('colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HeroRequest $request)
    {
        Hero::create([
            'color_id' => $request->color_id,
            'name' => $request->name,
            'description' => $request->description,
            'pos' => $request->pos,
            'image1' => $request->image1,
            'image2' => $request->image2,
            'image3' => $request->image3,
            'image4' => $request->image4,
        ]);
        return redirect()->route('admin.hero.index')->with('message', 'Герой был добавлен');
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
        $colors = Color::all();
        $hero = Hero::find($id);
        return view('admin.hero.edit', compact('colors', 'hero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Hero::find($id)->update([
            'color_id' => $request->color_id,
            'name' => $request->name,
            'description' => $request->description,
            'pos' => $request->pos,
            'image1' => $request->image1,
            'image2' => $request->image2,
            'image3' => $request->image3,
            'image4' => $request->image4,
        ]);
        return redirect()->route('admin.hero.index')->with('message', 'Герой был изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hero::destroy($id);
        return redirect()->route('admin.hero.index')->with('message', 'Герой был удален');
    }
}

<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics = Comic::all();
        $buy = config('comics.buy');
        $links = config('comics.links');
        $socials = config('comics.socials');
        return view('comics.index', compact('comics', 'buy', 'links', 'socials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $links = config('comics.links');
        $socials = config('comics.socials');
        return view('comics.create', compact('links', 'socials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $form_data = $request->all();
        $newcomic = new Comic();
        $newcomic->title = $form_data['title']; 
        $newcomic->price = $form_data['price'];
        $newcomic->series = $form_data['series'];
        $newcomic->thumb = null;
        $newcomic->description = null;
        $newcomic->type = $form_data['type'];
        $newcomic->sale_date = $form_data['sale_date'];
        $newcomic->artists = null;
        $newcomic->writers = null;
        $newcomic->save();
        return redirect()->route('comics.show', ['comic'=>$newcomic->id]);
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
        $comic = Comic::findOrFail($id);
        $links = config('comics.links');
        $socials = config('comics.socials');
        return view('comics.show', compact('comic','links', 'socials'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

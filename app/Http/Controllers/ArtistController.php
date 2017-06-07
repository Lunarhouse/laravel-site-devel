<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Post;

class ArtistController extends Controller
{
    public function show($slug)
    {
        $artist = Artist::where('slug', $slug)->first();
        $posts = $artist->posts()->withCount('comments')->paginate(7);

        if (is_null($artist)) {
            abort(404);
        }

        return view('artists.show', compact('artist', 'posts'));
    }

    public function letter($letter)
    {
        $artists = Artist::where('first_letter', $letter)->get();

        return view('artists.letter_category', compact('artists'));
    }

    public function create()
    {
        return view('artists.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $artist = new Artist();
        $artist->name = $input['name'];
        $artist->first_letter = strtolower(substr($input['name'], 0, 1));
        $artist->save();

        \Session::flash('flash_message', 'Исполнитель ' . $artist->name . ' был добавлен!'); //Всплывающее сообщение

        return redirect()->route('index');
    }

    public function destroy($slug)
    {
        $artist = Artist::where('slug', $slug)->first();

        if (is_null($artist)) {
            abort(404);
        }

        $artist->delete();

        \Session::flash('flash_message', 'Исполнитель был удален!');

        return redirect()->route('index');

    }


}

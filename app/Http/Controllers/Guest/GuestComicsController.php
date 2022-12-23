<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class GuestComicsController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('guest.comics.index', compact('comics'));
    }

    public function show($id)
    {
        $comic = Comic::find($id);
        return view('guest.comics.show', compact('comic'));
    }
}

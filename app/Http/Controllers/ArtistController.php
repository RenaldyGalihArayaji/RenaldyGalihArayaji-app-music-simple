<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Artist;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ArtistController extends Controller
{
    public function index()
    {
        $data = Artist::latest()->get();
        return view('index', compact('data'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'ArtistName' => 'required',
            'PackageName' => 'required',
            'ImageURL' => 'required',
            'SampleURL' => 'required',
            'price' => 'required',
            'ReleaseDate' => 'required',
        ]);

        Artist::create([
            'ArtistName' => $request->ArtistName,
            'PackageName' => $request->PackageName,
            'ImageURL' => $request->ImageURL,
            'SampleURL' => $request->SampleURL,
            'price' => $request->price,
            'ReleaseDate' => date('Y-m-d', strtotime($request->ReleaseDate))
        ]);

        Alert::success('Success', 'Add Successfully');
        return redirect()->route('artist.index');
    }
    public function edit($id)
    {
        $data = Artist::findOrFail($id);
        return view('edit', compact('data'));
    }
    public function update(Request $request, Artist $artist)
    {
        $request->validate([
            'ArtistName' => 'required',
            'PackageName' => 'required',
            'ImageURL' => 'required',
            'SampleURL' => 'required',
            'price' => 'required',
            'ReleaseDate' => 'required',
        ]);

        $artist->update([
            'ArtistName' => $request->ArtistName,
            'PackageName' => $request->PackageName,
            'ImageURL' => $request->ImageURL,
            'SampleURL' => $request->SampleURL,
            'price' => $request->price,
            'ReleaseDate' => date('Y-m-d', strtotime($request->ReleaseDate))
        ]);

        Alert::success('Success', 'Updated Successfully');
        return redirect()->route('artist.index');
    }
    public function destroy(Artist $artist)
    {
        $artist->delete();
        return redirect()->route('artist.index');
    }
}

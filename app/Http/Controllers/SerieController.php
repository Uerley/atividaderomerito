<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;
class SerieController extends Controller
{
    public function serie_index(){
        $series = Serie::all();
        return view('admin.posts.series.serie_index', compact('series'));
    }
    public function create_serie(){
        return view('admin.posts.series.create_serie');
    }
    public function serie_store(Request $request){
       $serie = new Serie();

        $serie->id=$request->id;
        $serie->title = $request->title;
        $serie->synopsis = $request->synopsis;
        $serie->year = $request->year;
        $serie->temp = $request->temp;
        $serie->save();

        return redirect()
                ->route('posts.series.serie_index')
                ->with('message', 'Serie Criado com sucesso');
    }
    public function show_serie($id){
        if(!$serie = Serie::find($id)){
            return redirect()->route('posts.series.serie_index');
        }
        return view('admin.posts.series.show_serie',compact('serie'));
    }
}

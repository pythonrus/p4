<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller {

    /**
    * Responds to requests to GET /movies
    */
    public function getIndex() {

        $movies = \App\Movie::orderBy('id','desc')->get();

        return view('movies.index')->with('movies',$movies);
    }

    /**
     * Responds to requests to GET /movies/show/{id}
     */
    public function getShow($id = null) {
        return view('movies.show')->with('id',$id);
    }

    /**
     * Responds to requests to GET /movies/create
     */
    public function getCreate() {
        return view('movies.create');
    }

    /**
     * Responds to requests to POST /movies/create
     */
    public function postCreate(Request $request) {

        $this->validate($request,[
            'title' => 'required|min:3',
            'director' => 'required',
            'released' => 'required|min:4',
            'cover' => 'required|url',
            'purchase_link' => 'required|url',
        ]);

        # Add the movie (this was how we did it pre-mass assignment)
        $movie = new \App\Movie();
        $movie->title = $request->title;
        $movie->director = $request->director;
        $movie->released = $request->released;
        $movie->cover = $request->cover;
        $movie->purchase_link = $request->purchase_link;
        $movie->save();

        \Session::flash('message','Your movie was added');

        return redirect('/movies');
    }
}

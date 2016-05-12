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
        //$movie = new \App\Movie();
        //$movie->title = $request->title;
        //$movie->director = $request->director;
        //$movie->released = $request->released;
        //$movie->cover = $request->cover;
        //$movie->purchase_link = $request->purchase_link;
        //$movie->save();

        # Mass assignment
        $data = $request->only('title','director','released','cover','purchase_link');
        //$data['user_id'] = \Auth::id();

        # One way to add the data
        #$movie = new \App\Movie($data);
        #$movie->save();

        # An alternative way to add the data
        $movie = \App\Movie::create($data);

        \Session::flash('message','Your movie was added');

        return redirect('/movies');
    }

    /**
	* Responds to requests to GET /movie/edit/{id?}
	*/
    public function getEdit($id) {

        $movie = \App\Movie::find($id);

        # Get all directors
        $directors = \App\Director::orderBy('last_name','ASC')->get();

        # Build array for directors dropdown
        $directors_for_dropdown = [];
        foreach($directors as $director) {
            $directors_for_dropdown[$director->id] = $director->last_name.', '.$director->first_name;
        }

        #dump($directors_for_dropdown);

        return view('movies.edit')
        ->with('movie',$movie)
        ->with('directors_for_dropdown',$directors_for_dropdown);
    }

    /**
	* Responds to requests to POST /movie/edit
	*/
    public function postEdit(Request $request) {

        // dump($request);

        $movie = \App\Movie::find($request->id);

        $movie->title = $request->title;
        $movie->director_id = $request->director_id;
        $movie->cover = $request->cover;
        $movie->released = $request->released;
        $movie->purchase_link = $request->purchase_link;

        $movie->save();

        \Session::flash('message','Your changes were saved');
        return redirect('/movie/edit/'.$request->id);

    }

}

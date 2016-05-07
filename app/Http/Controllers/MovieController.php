<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MovieController extends Controller {

    /**
    * Responds to requests to GET /movies
    */
    public function getIndex() {
        return view('movies.index');
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
    public function postCreate() {
        return redirect('/movies');
    }
}

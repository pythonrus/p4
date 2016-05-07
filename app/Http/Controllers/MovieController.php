<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MovieController extends Controller {

    /**
    * Responds to requests to GET /movies
    */
    public function getIndex() {
        return 'Show a list of all movies';
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
        $view = '<form method ="POST" action ="/movie/create">';
        $view .= csrf_field();
        $view .= 'Movie title: <input type=text" name="title">';
        $view .= '<input type="submit">';
        $view .= '</form>';

        return $view;
    }

    /**
     * Responds to requests to POST /movies/create
     */
    public function postCreate() {
        return 'Add the movie: '.$_POST['title'];
    }
}

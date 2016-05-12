<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Director extends Model
{
    public function movies() {
        return $this->hasMany('\App\Movie');
    }
    public static function directorsForDropdown() {
        # Get all directors
        $directors = \App\Director::orderBy('last_name','ASC')->get();
        $directors_for_dropdown = [];
        $directors_for_dropdown[0] = 'Choose a director...';
        foreach($directors as $director) {
            $directors_for_dropdown[$director->id] = $director->last_name.', '.$director->first_name;
        }
        return $directors_for_dropdown;
    }
}

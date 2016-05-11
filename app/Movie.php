<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Movie extends Model
{
    protected $fillable = ['title','director_id','released','cover','purchase_link','user_id'];
    /**
	* Relationship method
	*/
    public function director() {
        return $this->belongsTo('\App\Director');
    }
    /**
	* Relationship method
	*/
    public function tags() {
        return $this->belongsToMany('\App\Tag')->withTimestamps();
    }
    /**
	* Relation method
	*/
    public function user() {
        return $this->belongsTo('\App\User');
    }
    /**
	* Example of outsourcing a common query to the model
	*/
    public static function getAllMoviesWithDirectors() {
        return \App\Movie::with('director')->where('user_id', '=',\Auth::id())->orderBy('id','desc')->get();
    }
    /**
	*
	*/
    public function getTagsForThisMovie() {
        $tags_for_this_movie = [];
        foreach($this->tags as $tag) {
            $tags_for_this_movie[] = $tag->id;
        }
        return $tags_for_this_movie;
    }
}

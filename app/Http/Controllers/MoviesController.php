<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Http\Requests\MovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Movie;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movies = Movie::all();
        return view('admin.movies.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $genre = Genre::pluck('name','id')->all();
        return view('admin.movies.create', compact('genre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {
        //

        $input = $request->all();

        if($photo = $request->file('photo_id')){
            $name = time() . $photo->getClientOriginalName();
            $photo->move('images', $name);

            $file = Photo::create(['photo'=>$name]);
            $input['photo_id'] = $file->id;
        }

        $movie = Movie::create($input);
        return redirect('movies');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $movie = Movie::findOrFail($id);
        $genres = Genre::Pluck('name','id');
        return view('admin.movies.edit', compact('movie','genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMovieRequest $request, $id)
    {
        //

        $movie = Movie::findOrFail($id);
        $input = $request->all();

        if($file = $request->file('photo_id')){

            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);

//            $photo = Photo::create(['photo'=>$name, 'movie_id'=>$id]);
            $photo = Photo::create(['photo'=>$name]);
            $input['photo_id'] = $photo->id;
        }

        $movie->update($input);
        return redirect('movies');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $movie = Movie::findOrFail($id);

        if($movie->photo){
            unlink(public_path() . $movie->photo->photo);
        }


        $movie->delete();
        Session::flash('deleted_movies', 'The movie has been Deleted');
        return redirect('movies');

    }
}

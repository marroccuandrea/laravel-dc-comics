<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Functions\Helper;
use App\Http\Requests\ComicRequest;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Comic::all();
        return view('comics.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComicRequest $request)
    {

        // ELIMINATA REQUEST SPECIFICA, CREATA UNA UNIVERSALE GRAZIE AL COMIC REQUEST

        // $request->validate([
        //     'title' => 'required|min:5|max:255',
        //     'description' => 'max:255',
        //     'thumb' => 'required|min:5|max:255',
        //     'price' => 'required',
        //     'series' => 'required|min:5|max:255',
        //     'sale_date' => 'required',
        //     'type' => 'required|min:5|max:255',
        //     'artists' => 'required|min:5|max:255',
        //     'writers' => 'required|min:5|max:255',
        // ], [
        //     'title.required' => 'Il titolo è un campo obbligatorio',
        //     'title.min' => 'Il titolo deve avere almeno :min caratteri',
        //     'title.max' => 'Il titolo deve avere al massimo :max caratteri',
        //     'description.max' => 'La descrizione deve avere al massimo :max caratteri',
        //     'thumb.required' => 'La thumb è un campo obbligatorio',
        //     'thumb.min' => 'La thumb deve avere almeno :min caratteri',
        //     'thumb.max' => 'La thumb deve avere al massimo :max caratteri',
        //     'price.required' => 'Il prezzo è un campo obbligatorio',
        //     'series.required' => 'La serie è un campo obbligatorio',
        //     'series.min' => 'La serie deve avere almeno :min caratteri',
        //     'series.max' => 'La serie deve avere al massimo :max caratteri',
        //     'sale_date.required' => 'La data di uscita è un campo obbligatorio',
        //     'type.required' => 'Il tipo è un campo obbligatorio',
        //     'type.min' => 'Il tipo deve avere almeno :min caratteri',
        //     'type.max' => 'Il tipo deve avere al massimo :max caratteri',
        //     'artists.required' => 'Gli artisti sono un campo obbligatorio',
        //     'artists.min' => 'Gli artisti devono avere almeno :min caratteri',
        //     'artists.max' => 'Gli artisti devono avere al massimo :max caratteri',
        //     'writers.required' => 'I writer sono un campo obbligatorio',
        //     'writers.min' => 'I writer devono avere almeno :min caratteri',
        //     'writers.max' => 'I writer devono avere al massimo :max caratteri',
        // ]);

        $form_data = $request->all();

        $new_comic = new Comic();
        $new_comic->title = $form_data['title'];
        $new_comic->slug = Helper::generateSlug($new_comic->title, new Comic());
        $new_comic->description = $form_data['description'];
        $new_comic->thumb = $form_data['thumb'];
        $new_comic->price = $form_data['price'];
        $new_comic->series = $form_data['series'];
        $new_comic->sale_date = $form_data['sale_date'];
        $new_comic->type = $form_data['type'];
        $new_comic->artists = $form_data['artists'];
        $new_comic->writers = $form_data['writers'];
        $new_comic->save();

        // dd($form_data);
        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComicRequest $request, Comic $comic)
    {


        $form_data = $request->all();

        if ($form_data['title'] === $comic->title) {
            $form_data['slug'] = $comic->slug;
        } else {
            $form_data['slug'] = Helper::generateSlug($form_data['title'], new Comic());
        }
        $comic->fill($form_data);
        $comic->update($form_data);
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index', $comic)->with('deleted', 'Il fumetto ' . $comic->title . ' è stato eliminato correttamente!');
    }
}

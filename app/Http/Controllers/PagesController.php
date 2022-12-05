<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* php artisan make:controller PagesController --resource
 * generuje szkielet metod zgodnych z metodologią REST
*/
class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     * Wyświetl listę zasobów.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Wyświetlamy jakis tekst
        //echo 'Witaj! To jest metoda index';

        // Wyświetlamy szablon widoku Blade
        // w formaci {nazwa katalogu}.{nazwa szablonu}
        return view('pages.index');
    }

    /**
     * Show the form for creating a new resource.
     * Pokaż formularz tworzenia nowego zasobu.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * Przechowaj nowo utworzony zasób w bazie.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * Wyświetl określony zasób.
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
     * Pokaż formularz edycji określonego zasobu.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * Zaktualizuj określony zasób w bazie.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * Usuń określony zasób z bazy.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Functiile paginilor si returnarea ce le returneaza view-urilor
class PageController extends Controller
{
    public function index(){
        $title = 'Welcome !!!';
        return view('pagini.index')->with('title', $title);
    }

    public function about(){
        $title = 'Description';
        return view('pagini.about')->with('title', $title);
    }

    public function services(){
    $data = array(
        'title' => 'Services',
        'services' => ['-Adaugare/editare/stergere postare', '-Vizualizare postari (atat cele proprii cat si cele ale altor useri)', '-un utlizitator nu are posibilitatea de a sterge/modifica postarile ce apartin altor utilizatori','-postarile pot contine imagini alese de catre utilizator']
    );
    return view('pagini.services')->with($data);
    }

}

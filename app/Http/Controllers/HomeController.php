<?php

namespace App\Http\Controllers;

use App\Models\Directory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }

        if ($language == 'es') {
            $maquinas = Directory::select(['id', 'categorie_id', 'image', 'model', 'name_es AS name', 'fabricacion_es AS fabricacion', 'capacidad_es AS capacidad', 'componentes_es AS componentes', 'objetivo_es AS objetivo'])->limit(3)->get();
        } elseif ($language == 'en') {
            $maquinas = Directory::select(['id', 'categorie_id', 'image', 'model', 'name_en AS name', 'fabricacion_en AS fabricacion', 'capacidad_en AS capacidad', 'componentes_en AS componentes', 'objetivo_en AS objetivo'])->limit(3)->get();
        } else {
            $maquinas = Directory::select(['id', 'categorie_id', 'image', 'model', 'name_es AS name', 'fabricacion_es AS fabricacion', 'capacidad_es AS capacidad', 'componentes_es AS componentes', 'objetivo_es AS objetivo',])->limit(3)->get();
        }


        return view('pages.home', [
            'list'  => $maquinas
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDirectoryRequest;
use App\Http\Requests\UpdateDirectoryRequest;
use App\Models\Directory;
use App\Models\DirectoryFruit;
use Illuminate\Support\Facades\App;

class DirectoryController extends Controller
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
            $maquinaria = Directory::select(['id', 'categorie_id', 'logo_servicio', 'image', 'model', 'name_es AS name', 'fabricacion_es AS fabricacion', 'capacidad_es AS capacidad', 'componentes_es AS componentes', 'objetivo_es AS objetivo'])->paginate(6);
        } elseif ($language == 'en') {
            $maquinaria = Directory::select(['id', 'categorie_id', 'logo_servicio', 'image', 'model', 'name_en AS name', 'fabricacion_en AS fabricacion', 'capacidad_en AS capacidad', 'componentes_en AS componentes', 'objetivo_en AS objetivo'])->paginate(6);
        } else {
            $maquinaria = Directory::select(['id', 'categorie_id', 'logo_servicio', 'image', 'model', 'name_es AS name', 'fabricacion_es AS fabricacion', 'capacidad_es AS capacidad', 'componentes_es AS componentes', 'objetivo_es AS objetivo'])->paginate(6);
        }

        return view(
            'pages.catalogo',
            [
                'maquinas' => $maquinaria
            ]
        );
    }

    /**
     * Display a listing of the resource.
     */
    public function show(Directory $directory, $language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }

        if ($language == 'es') {
            $detalle = Directory::select(['id', 'categorie_id', 'logo_servicio', 'image', 'model', 'name_es AS name', 'fabricacion_es AS fabricacion', 'capacidad_es AS capacidad', 'componentes_es AS componentes', 'objetivo_es AS objetivo'])->where('id', $directory->id)->first();
            $relacionados = Directory::select(['id', 'categorie_id', 'image', 'model', 'name_es AS name', 'fabricacion_es AS fabricacion', 'capacidad_es AS capacidad', 'componentes_es AS componentes', 'objetivo_es AS objetivo'])->whereNotIn('id', [$directory->id])->limit(6)->get();
        } elseif ($language == 'en') {
            $detalle = Directory::select(['id', 'categorie_id', 'logo_servicio', 'image', 'model', 'name_en AS name', 'fabricacion_en AS fabricacion', 'capacidad_en AS capacidad', 'componentes_en AS componentes', 'objetivo_en AS objetivo'])->where('id', $directory->id)->first();
            $relacionados = Directory::select(['id', 'categorie_id', 'image', 'model', 'name_en AS name', 'fabricacion_en AS fabricacion', 'capacidad_en AS capacidad', 'componentes_en AS componentes', 'objetivo_en AS objetivo'])->whereNotIn('id', [$directory->id])->limit(6)->get();
        } else {
            $detalle = Directory::select(['id', 'categorie_id', 'logo_servicio', 'image', 'model', 'name_es AS name', 'fabricacion_es AS fabricacion', 'capacidad_es AS capacidad', 'componentes_es AS componentes', 'objetivo_es AS objetivo'])->where('id', $directory->id)->first();
            $relacionados = Directory::select(['id', 'categorie_id', 'image', 'model', 'name_es AS name', 'fabricacion_es AS fabricacion', 'capacidad_es AS capacidad', 'componentes_es AS componentes', 'objetivo_es AS objetivo'])->whereNotIn('id', [$directory->id])->limit(6)->get();
        }

        $frutas = DirectoryFruit::where('directorie_id', $directory->id)->get();

        return view('pages.detalle', [
            'row'           => $detalle,
            'frutas'        => $frutas,
            'relacionados'  => $relacionados
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDirectoryRequest $request)
    {
        //
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Directory $directory)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Directory $directory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDirectoryRequest $request, Directory $directory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Directory $directory)
    {
        //
    }
}

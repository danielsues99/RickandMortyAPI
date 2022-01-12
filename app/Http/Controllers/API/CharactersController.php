<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\ActualizarCharacterRequest;
use App\Http\Resources\CharacterResource;
use App\Models\Characters;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CharacterResource::collection(Characters::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharacterRequest $request)
    {
        /*Characters::create($request->all());
        return response()->json([
            'res'=>true,
            'mensage' => 'Personaje guardado correctamente'
        ],200);*/
        return (new CharacterResource(Characters::create($request->all())))
                ->additional(['msg'=>'Personaje Guardado Correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Characters $character)
    {
        /*return response()->json([
            'res' => true,
            'character' => $character
        ],200);*/
        return new CharacterResource($character);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarCharacterRequest $request, Characters $character)
    {
        $character->update($request->all());
        /*return response()->json([
            'res' => true,
            'mensage' => 'Personaje Actualizado Correctamente!'
        ],200);*/
        return (new CharacterResource($character))->additional(['msg'=>'Personaje Actualizado Correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Characters $character)
    {
        /*return response()->json([
            'res' => true,
            'mensage' => 'Personaje Eliminado Correctamente!'
        ],200);*/
        $character->delete();
        return (new CharacterResource($character))->additional(['msg'=>'Personaje Eliminado Correctamente']);
    }
}

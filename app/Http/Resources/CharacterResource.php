<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class CharacterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre' => Str::of($this->name)->upper(),
            'estado' => Str::of($this->status)->upper(),
            'especie' => Str::of($this->especies)->upper(),
            'tipo' => Str::of($this->type)->upper(),
            'genero' => Str::of($this->gender)->upper(),
            'origen' => Str::of($this->origin)->upper(),
            'ubicacion' => $this->location,
            'imagen' => Str::of($this->image)->upper(),
            'episodios' => Str::of($this->episode)->upper(),
            'url' => Str::of($this->url)->upper(),
            'fecha_creado' => $this->created_at->format('d-m-Y')
        ];
    }
}

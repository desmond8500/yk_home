<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'prenom' => $this->prenom,
            'nom' => $this->nom,
            'ci' => $this->ci,
            'delivre' => $this->delivre,
            'telephone' => $this->telephone,
            'prix' => $this->prix,
            'local1' => $this->local1,
            'arrivee' => $this->arrivee,
            'depart' => $this->depart,
            'contrat' => $this->contrat,
            'titre' => $this->titre,
            'image' => $this->image,
            'garantie' => $this->garantie,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}

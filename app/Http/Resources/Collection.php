<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Collection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request){
        return [
            'id' => $this->id,
            'namaKoleksi' => $this->namaKoleksi,
            'jenisKoleksi' => $this->jenisKoleksi,
            'jumlahKoleksi' => $this->jumlahKoleksi,
            'created_at' => $this->created_at ? $this->created_at->format('Y/m/d') : null,
            'updated_at' => $this->updated_at ? $this->updated_at->format('Y/m/d') : null,
        ];
    }
}

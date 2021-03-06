<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class HocKyResource extends Resource
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
            'hoc_ky' => $this->hoc_ky,
            'nam_hoc' => $this->namhoc,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\SignumRaw as Signum;

class SignumRaw extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      return
          [ 'id' => $this->signum_hexagon_id,
            'latitude' => Signum::find($this->signum_hexagon_id)->latitude,
            'longitude' => Signum::find($this->signum_hexagon_id)->longitude,
            'average' => $this->average,
          ];
    }
}

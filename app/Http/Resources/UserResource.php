<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
    
        //dump($this->id);
        return [
            'id'=>$this->id,
            'email'=>$this->email,
            "important"=>$this->when($this->email==="test@test.com","cool"),
            "password"=>$this->whenHas("password2","x")
        ];  
        //return parent::toArray($request);
    }
}

<?php

namespace App\Http\Resources;
use Illuminate\Support\Str;
use Illuminate\Http\Resources\Json\JsonResource;
use  App\Http\Resources\User;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return 
        [
         'id' => $this->id,   //this refers to object of PostResource
         'title'=>$this->Title,
         'description'=>$this->Description,
         'created_at'=>$this->created_at,
         'user'=>new UserResource($this->user), //object from UserResource
        ];
    }
}
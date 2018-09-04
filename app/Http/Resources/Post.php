<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Post extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
          'id' => $this->id,
          'slug' => $this->slug,
          'title' => $this->title,
          'excerpt' => $this->excerpt,
          'content' => $this->content
        ];
    }
}

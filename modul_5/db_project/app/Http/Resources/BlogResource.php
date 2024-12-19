<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
{
    /**
     *
     */
    private $id;
    private $title;
    private $content;
    private $image;
    private $created_at;
    private $updated_at;

    /**
     * 
     *
     * @param  mixed $resource
     */
    public function __construct($resource)
    {
        parent::__construct($resource);

        $this->id = $resource->id;
        $this->title = $resource->title;
        $this->content = $resource->content;
        $this->image = $resource->image;
        $this->created_at = $resource->created_at;
        $this->updated_at = $resource->updated_at;
    }

    /**
     *
     *
     * @param  Request $request
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'image' => $this->image,
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
        ];
    }
}


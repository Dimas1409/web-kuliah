<?php
namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
{
    public $id;
    public $name;
    public $email;
    public $phone;
    public $message;
    public $created_at;
    public $updated_at;

    /**
     * Create a new resource instance.
     *
     * @param mixed $resource
     */
    public function __construct($resource)
    {
        // Wajib panggil parent constructor
        parent::__construct($resource);

        $this->id = $resource->id;
        $this->name = $resource->name;
        $this->email = $resource->email;
        $this->phone = $resource->phone;
        $this->message = $resource->message;
        $this->created_at = $resource->created_at;
        $this->updated_at = $resource->updated_at;
    }

    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

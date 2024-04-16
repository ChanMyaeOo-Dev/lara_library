<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "author" => $this->author,
            "qty" => $this->qty,
            "book_image" => $this->book_image,
            "category" => $this->category->title,
            "transactions" => TransactionResource::collection($this->transactions),
        ];
    }
}

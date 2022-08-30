<?php

    namespace App\Http\Resources;

    use Illuminate\Http\Resources\Json\JsonResource;

    class BlogResource extends JsonResource {
        /**
         * Transform the resource into an array.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
         */
        public function toArray($request) {
            return [
                'id' => $this->id,
                'category' => new BlogCategoryResource($this->blogCategory),
                'title' => $this->title,
                'caption' => $this->caption,
                'link' => env('APP_URL')."/blogs/{$this->id}",
                'created_at' =>  $this->created_at->toDateTimeString()
            ];
        }
    }

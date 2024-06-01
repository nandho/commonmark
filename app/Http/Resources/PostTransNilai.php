<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostTransNilai extends JsonResource
{
    public $status;
    public $message;
    public $resource;

    /**
     * Konstruktor untuk PostNilaiMatkul.
     *
     * @param mixed $status Status operasi.
     * @param string $message Pesan yang akan ditampilkan.
     * @param mixed $resource Data yang akan dikirim.
     */
    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->status = $status;
        $this->message = $message;
    }

    /**
     * Transformasi resource menjadi array.
     *
     * @param Request $request Request yang diterima.
     * @return array<string, mixed> Array yang berisi status, pesan, dan data.
     */
    public function toArray(Request $request): array
    {
        return [
            'success' => $this->status,
            'message' => $this->message,
            'data' => $this->resource
        ];
    }
}

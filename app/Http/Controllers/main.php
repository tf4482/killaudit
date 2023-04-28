<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function main(Request $request): void
    {
        $data = $request->all();
        $response = [
            'status' => 'success',
            'data' => $data,
        ];
        echo json_encode($response);
    }
}

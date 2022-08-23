<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function addToCart(Request $oRequest): JsonResponse
    {
        $sSize = $oRequest->get('size');
        $aData = session()->get('cart');
        if($aData === null || isset($aData[$sSize]) === false) {
            session()->put('cart', []);
            $aData[$sSize] = $oRequest->input();
            $aData[$sSize]['count'] = 1;
            return $this->updateCart($aData);
        }


        $aData[$sSize]['count'] = $aData[$sSize]['count'] + 1;
        return $this->updateCart($aData);
    }

    private function updateCart(array $aProductData): JsonResponse
    {
        Session::put('cart', $aProductData);
        return Response::json([
            'result' => true
        ]);
    }
}

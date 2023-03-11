<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class CoockieService
{
    public function setUrlCoockie()
    {

        $url = request()->url();
        $endpoint = explode(':8000', $url)['1'];
        if (str_contains($endpoint, 'challenge')) {
            setcookie('lastpage', $endpoint, time() + 360000, httponly: true);
        }
    }
    public function verifyAndRedirect()
    {
        if (!empty($_COOKIE['lastpage'])) {
            $page = $_COOKIE['lastpage'];
            $this->deleteUrlCoockie();
            return $page;
        }
        return false;
    }
    private function deleteUrlCoockie()
    {
        unset($_COOKIE['lastpage']);
    }
}

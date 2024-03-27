<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PhpController extends Controller
{
    public function goPhp(Request $request)
    {
        $result = [];
        $path = ('/var/www/html/storage/phpCode/' . time() . '.php');
        file_put_contents($path, '<?php' . "\n" . $request->code . "\n" . '?>');
        exec('php ' . $path, $result);
        return ($result);
    }
}



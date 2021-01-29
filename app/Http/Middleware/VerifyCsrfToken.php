<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
<<<<<<< HEAD
        '/sociallogin/google'

=======
        //
>>>>>>> bed016b0d951cf2a0c2d689d1e629dc7a2fc5926
    ];
}

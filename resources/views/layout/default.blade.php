<?php

use Illuminate\Support\Facades\Auth;

if ( Auth::check() ) {
    $theme  =   Auth::user()->attribute->theme ?: ns()->option->get( 'ns_default_theme', 'light' );
} else {
    $theme  =   ns()->option->get( 'ns_default_theme', 'light' );
}

?>
<!DOCTYPE html>
<html lang="en" class="{{ $theme }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{!! $title ?? __( 'Unamed Page' ) !!}</title>
    <link rel="stylesheet" href="{{ loadcss( 'app.css' ) }}">
    <link rel="stylesheet" href="{{ asset( 'css/line-awesome.css' ) }}">
    <link rel="stylesheet" href="{{ loadcss( $theme . '.css' ) }}">
    @yield( 'layout.default.header' )
</head>
<body>
    @yield( 'layout.default.body' )
        @section( 'layout.default.footer' )
    @show
</body>
</html>
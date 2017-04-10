<?php

Route::group( [ 'middleware' => 'web',
                'prefix'     => 'bigstep' ],
    function()
    {
        Route::get( '',
            function()
            {
                return "It's work :))";
            } );

        Route::get( 'controller', 'Bigstepdenmark\Message\Http\Controllers\MessageController@index' );

    } );
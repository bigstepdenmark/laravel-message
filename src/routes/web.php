<?php

Route::get( 'bigstep',
    function()
    {
        return "It's work :))";
    } );

Route::get( 'bigstep/controller', 'Bigstepdenmark\Message\Http\Controllers\MessageController@index' );
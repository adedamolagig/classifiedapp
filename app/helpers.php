<?php

function flash($title = null, $message = null)
{
    $flash = app('App\Http\Flash');

    if (func_num_args() == 0  ) {
    	return $flash;
    }    
    
    else
    	
    return $flash->message($title, $message);
}
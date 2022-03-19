<?php

namespace App\Util;

class Flash{
    public function success($message){
        session()->flash('flash_message', $message);
        session()->flash('flash_message_type', BOOTSTRAP_SUCCESS);
    }

    public function error($message){
        session()->flash('flash_message', $message);
        session()->flash('flash_message_type', BOOTSTRAP_ERROR);
    }
}
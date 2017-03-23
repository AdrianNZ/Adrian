<?php

namespace App\Http\Libraries;

class AjaxResponse
{
    public $success;
    public $error_code;
    public $error_msg;
    public $data;

    public function __construct($success = false, $error_code = 0, $error_msg = '', $data = array(), $messages = '')
    {
        $this->success = $success;
        $this->error_code = $error_code;
        $this->error_msg = $error_msg;
        $this->data = $data;
        $this->messages = $messages;
    }

    public function toArray()
    {
        return array(
            'success' => $this->success,
            'errors' => array(
                'code' => $this->error_code,
                'msg' => $this->error_msg
            ),
            'data' => $this->data,
            'messages' => $this->messages
        );
    }
}


//Class Control
<?php
namespace App\Requests;

/**
 * Request Class
 */
class Request
{
    public $id;
    public $email;
    public $test;
    public $frame;
    public $image;

    public function __construct($data = null)
    {
        if (is_array($data)) {
            $this->frame = $data['frame'];
            $this->image= $data['image'];
            $this->email = $data['email'];
            $this->test = $data['test'];
        }
    }
}

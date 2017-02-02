<?php
class User
{
    public $id;
    public $email;
    public $password;
    public $passverif;
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
            $this->password = $data['password'];
            $this->passverif = $data['passverif'];
        }
    }

    public function createUser()
    {
        if
    }

    public function getUser()
    {
        if $this->email
    }

    public function valid()
    {
        if ($this->password !== $this->passverif) {
            $message = 'Les mots de passe que vous avez entré ne sont pas identiques.';
            echo '<h2><p><div class="message">'.$message.'</div><br/><br/></P></h2>';
        }
        elseif (strlen($this->password) >= 8) {
            $message = 'Le mot de passe que vous avez entré contient moins de 8 caractères.';
            echo '<h2><p><div class="message">'.$message.'</div><br/><br/></P></h2>';
        }
        elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $message = 'L\'email que vous avez entré n\'est pas valide.';
            echo '<h2><p><div class="message">'.$message.'</div><br/><br/></P></h2>';
        }
        else {

        }
    }

    public function getUsers()
    {
        RequestRepository::getUsers();        
    }

}

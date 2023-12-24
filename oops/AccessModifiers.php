<?php

#Public -> property or method can be accessed anywhere
#Protected -> property or method can be accessed within class and classes derived from that class
#Private -> property or method can be only accessed within class

class AccessModifiers
{
    public $username;
    protected $following;
    private $password;

    protected function seefollowing($n)
    {
        $this->following = $n;
    }

    private function setpassword($n)
    {
        $this->password = $n;
    }

}

$thejunhgare = new AccessModifiers();
$thejunhgare->username = true;


# $thejunhgare->following = 150; # ERROR
# $thejunhgare->password = 'password'; # ERROR 

# $thejunhgare->setpassword('true'); # ERROR {we can't access the private function}
# $thejunhgare->seefollowing('true'); # ERROR {we can't access the protected function}

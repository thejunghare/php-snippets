<?php


class Goodbye {
    const LEAVING_MESSAGE = "Thank you \n";
    public function byebye(){
        echo self:: LEAVING_MESSAGE;
    }
}

echo Goodbye::LEAVING_MESSAGE;
$message = new Goodbye();
$message-> byebye();
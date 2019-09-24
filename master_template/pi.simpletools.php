<?php

class Simpletools {

    public function __construct()
    {

    }
    public function random_six_digits() {
        $randomid = mt_rand(100000,999999); 
        return $randomid;
    }

}
// END Class

// EOF
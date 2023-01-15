<?php

namespace XCrone\LudoCrypt;

class Character {
    static public function get()
    {
        $chars = ' !"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
        $chars = str_split($chars);

        return $chars;
    }
}

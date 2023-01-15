<?php

namespace XCrone\LudoEncryption;

class Code {
    static public function get()
    {
        $uppercase = range('A', 'Z');
        $lowercase = range('a', 'z');
        $numbers = range(0, 9);
        $all = array_merge($uppercase, $lowercase, $numbers);
        $codes = array();

        foreach ($all as $char1) {
            foreach ($all as $char2) {
                foreach ($all as $char3) {
                    $codes[] = $char1 . $char2 . $char3;
                }
            }
        }

        return $codes;
    }
}

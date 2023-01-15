<?php

namespace XCrone\LudoEncryption;

class Range {
    static public function get()
    {
        $ranges = json_decode(file_get_contents('range.json'));

        if (! $ranges) return;

        return $ranges;

    }
}

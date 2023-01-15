<?php

namespace XCrone\LudoCrypt;

class Range {
    static public function get()
    {
        $path = __DIR__ . '/range.json';
        $ranges = json_decode(file_get_contents($path));

        if (! $ranges) return;

        return $ranges;

    }
}

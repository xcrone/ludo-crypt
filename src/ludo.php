<?php

namespace XCrone\LudoCrypt;

class Ludo {
    public function encrypt(String $text)
    {
        if (! is_string($text)) return;

        $codes = Code::get();
        $chars = Character::get();
        $ranges = Range::get();

        $result = [];
        foreach (str_split($text) as $t) {
            if (in_array($t, $chars)) {
                $char_index = array_search($t, $chars);
                $range = $ranges[$char_index];
                $code_index = rand($range->start, $range->end);
                $get_text = $codes[$code_index];
                $result[] = $get_text;
            } else {
                break;
                return null;
            }
        }

        $result = implode(':::', $result);
        $result = str_replace(':::', '', $result);

        return $result;
    }
}

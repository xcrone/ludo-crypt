<?php

class LudoEncryption {
    public function encrypt(String $text)
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

        $chars = ' !"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
        $chars = str_split($chars);

        if (! is_string($text)) return;

        $ranges = json_decode(file_get_contents('range.json'));

        if (! $ranges) return;
        
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

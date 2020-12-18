<?php 

namespace App; 

class TagParser {

    public function parse(string $tags): array
    {
        $values =  preg_split("/ ?[,|] ?/", $tags);
        return $values ;
        // return array_map(function ($tag){
        //     return trim($tag);
        // }, $values);
    }
}
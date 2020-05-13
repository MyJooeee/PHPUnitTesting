<?php

namespace App\Http\Services;

class AreYouOld
{

    /**
     * @param  int
     * @return string
     */
    public function getDescription($age)
    {
        $description = 'You are ';
        if ($age <= 3) {
            $description .= 'just a baby ;)';
        } elseif ($age <= 10) {
            $description .= 'a child.';
        } elseif ($age < 18) {
            $description .= 'a teenager.';
        } elseif($age <= 30) {
            $description .= 'a young adult.';
        } elseif($age <= 40) {
            $description .= 'an adult.';
        } elseif($age <= 60) {
            $description .= 'a middle-aged person.';
        } elseif($age <= 80) {
            $description .= 'a senior.';
        } else {
            $description .= 'very old..';
        }

        return $description;
    }
}

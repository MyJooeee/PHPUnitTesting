<?php

namespace App\Http\Services;

class NextLetter
{
    /**
     * Get next letter of alphabet
     * @param  string
     * @return string
     */
    public function getNextLetter($letter)
    {
        return ++$letter;
    }
}

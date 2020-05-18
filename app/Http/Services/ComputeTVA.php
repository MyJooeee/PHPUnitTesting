<?php

namespace App\Http\Services;

class ComputeTVA
{
    const PRODUCTS = 'product';
    const SERVICES = 'service';

    const TYPES = [
        self::PRODUCTS => 0.055, // 5,5 %
        self::SERVICES => 0.20 // 20 %
    ];

    /**
     * @param  string $name
     * @param  string $name
     * @param  int $price
     * @return string
     */
    public function getTVA($name, $type, $price)
    {
        if (array_key_exists($type, self::TYPES)) {
            return 'The price with TVA for '.$name.' is '.(self::TYPES[$type] + 1) * $price.' euros.';
        }

        return 'Unknown applicable TVA for '.$name.', sorry xD.';
    }
}

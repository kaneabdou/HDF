<?php

namespace App\Extensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class CustomTwigExtension extends AbstractExtension
{
    /**
     * @return TwigFunction[]
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('is_integer', [$this, 'isInteger']),
        ];
    }

    /**
     * @param $value
     * @return bool
     */
    public function isInteger($value): bool
    {
        return is_int($value);
    }
}

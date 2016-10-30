<?php

namespace Project\Data;

abstract class AbstractData
{
    /**
     * @param string $type, string $color, int $capacity, string $fuel, int $price, string $comment
     * @return array
     */
    public function dataProcessing($type, $color, $capacity, $fuel, $price, $comment)
    {
	//do something with data
	return [$type, $color, $capacity, $fuel, $price, $comment];
    }
}
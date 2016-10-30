<?php

namespace Project\Data;

class Data extends AbstractData
{
    /**
     *@param string $type, string $color, int $capacity, string $fuel, int $price, string $comment
     *@return array
     */
    public function get($type, $color, $capacity, $fuel, $price, $comment)
    {
	return $this->dataProcessing($type, $color, $capacity, $fuel, $price, $comment);
    }
}
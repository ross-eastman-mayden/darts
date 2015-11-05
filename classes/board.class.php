<?php
namespace board;

class board
{

    private $possibleValues;
    private $possibleSingleValues;
    private $possibleDoubleValues;
    private $possibleTrippleValues;
    private $min = 1;
    private $max = 20;
    private $bullseye = 50;
    private $outerBullseye = 25;

    /**
     * board constructor.
     */
    public function __construct()
    {
        $this->possibleSingleValues = range($this->min, $this->max);
        $this->possibleDoubleValues = array_map(function($value) { return $value * 2; }, $this->possibleSingleValues);
        $this->possibleTrippleValues = array_map(function($value) { return $value * 3; }, $this->possibleSingleValues);
        $this->possibleValues = [$this->possibleSingleValues, $this->possibleDoubleValues, $this->possibleTrippleValues];
    }

    public function dartValue()
    {
        $type = rand(1,3);
        $value = rand(1,20);
        return $this->possibleValues[$type][$value];
    }
}


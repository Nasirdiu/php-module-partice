<?php

class DistrictCollection implements IteratorAggregate
{
    private $districts;
    function __construct()
    {
        $this->districts = array();
    }
    function add($district)
    {
        array_push($this->districts, $district);
    }
    function getDistricts()
    {
        return $this->districts;
    }
    function getIterator()
    {
        return new ArrayIterator($this->districts);
    }
}
$districts = new DistrictCollection;
$districts->add("Rajshahi");
$districts->add("Dhaka");
$districts->add("Bogra");
$districts->add("Joypurhat");
$districts->add("Natore");
$districts->add("Sylhet");

foreach ($districts as $districts) {
    echo $districts . " \n";
}

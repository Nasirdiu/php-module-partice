<?php
class Fund
{
    private $fund;

    function __construct($initialFund = 0)
    {
        $this->fund = $initialFund;
    }
    public function addFund($mony)
    {
        $this->fund += $mony;
    }
    public function deducFund($mony)
    {
        $this->fund -= $mony;
    }
    public function getTotal()
    {
        echo "Total fund is {$this->fund}\n";
    }
}

$ourFund = new Fund(100);
// $ourFund->fund=75;
$ourFund->getTotal();
$ourFund->addFund(10);
$ourFund->deducFund(7);
$ourFund->getTotal();

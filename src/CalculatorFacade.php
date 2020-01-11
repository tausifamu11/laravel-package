<?php
namespace Devd\Calculator;
use Illuminate\Support\Facades\Facade;
class CalculatorFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'websanova-calculator';
    }
}

<?php

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});
Route::get('add/{a}/{b}', 'Devd\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Devd\Calculator\CalculatorController@subtract');
Route::get('demo/hello', function () {
    return Demo::hello();
});

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add(float $x, float $y){

    if (is_integer($x) || is_integer($y) || is_float($x) || is_float($y)) {
        $z = $x + $y;
        return [
            'Operation' => '+',
            'Operands' => "$x and $y",
            'Result' => $z
        ];
    }
    else {
        return "Inputs not Numeric Values!";
    }

    }

    public function sub(float $x, float $y){

    if (is_integer($x) || is_integer($y) || is_float($x) || is_float($y)) {
        $z = $x - $y;
        return [
            'Operation' => '-',
            'Operands' => "$x and $y",
            'Result' => $z
        ];
    }
    else {
        return "Inputs not Numeric Values!";
    }

    }

    public function multiply(float $x, float $y){

    if (is_integer($x) || is_integer($y) || is_float($x) || is_float($y)) {
        $z = ($x * $y);
        return [
            'Operation' => '*',
            'Operands' => "$x and $y",
            'Result' => $z
        ];;
    }
    else {
        return "Inputs not Numeric Values!";
    }

    }

    public function divide(float $x, float $y){

    if ((is_integer($x) || is_integer($y) || is_float($x) || is_float($y)) && (($y!=0))) {
        $z = ($x / $y);
        return [
            'Operation' => '/',
            'Operands' => "$x and $y",
            'Result' => $z
        ];
    }


    if($y == 0){
        return [
            'Operation' => '/',
            'Operands' => "$x and $y",
            'Result' => "Division by zero is undefined!"
        ];
    }

    else {
            return "Inputs not Numeric Values!";
        }

    }
}

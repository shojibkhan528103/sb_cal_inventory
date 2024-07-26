<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator.calculator');
    }

    public function calculate(Request $request)
    {
        // dd($request->all());

        $firstNum = $request->firstNumber;
        $secondNum = $request->secondNumber;
        $opetator = $request->opetator;

        if ($opetator == '+') {
            $result = $firstNum + $secondNum;
        } elseif ($opetator == '-') {
            $result = $firstNum - $secondNum;
        } elseif ($opetator == '/') {
            $result = $firstNum / $secondNum;
        } elseif ($opetator == '*') {
            $result = $firstNum * $secondNum;
        } else {
            $result = "something is wrong.Please Try again later";
        }
        return back()->with('status',$result);
    }

}

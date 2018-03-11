<?php

namespace App\Http\Controllers;

use App\Models\Instruction;
use Illuminate\Http\Request;

class InstructionController extends Controller
{
    public function index()
    {
        $instructions = Instruction::where('enabled',1)->orderBy('id','DESC')->get();
        return view('instruction.index',compact('instructions'));

    }
}

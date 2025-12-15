<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {
        $data = [
            ["id" => 1, "title" => "1st Assignment"],
            ["id" => 2, "title" => "2nd Assignment"],
            ["id" => 3, "title" => "3rd Assignment"],
        ];
        return view(
            'assignment.index',
            [
                'assignment' => $data
            ]

        );
    }
}

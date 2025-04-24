<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   
        public function index()
        {
            return view('admin.admin'); // Dashboard view
        }
    
        public function view_reports()
        {
            return view('admin.reports.viewreports'); // View reports page
        }
    }



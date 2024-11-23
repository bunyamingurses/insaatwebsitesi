<?php

namespace App\Http\Controllers\admin\contact;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $contact=contact::orderBy("id","desc")->get();
        return View("admin.contact.index",["contact"=>$contact]);
    }
}

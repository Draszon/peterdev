<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Carrier;
use App\Models\Contact;
use App\Models\Info;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MainController extends Controller
{
  public function index () {
    return Inertia::render('MainPage', [
      'infos'         => Info::all(),
      'contacts'      => Contact::all(),
      'about_mes'     => About::all(),
      'projects'      => Project::all(),
      'technologies'  => Technology::all(),
      'carriers'      => Carrier::all(),
    ]);
  }
}

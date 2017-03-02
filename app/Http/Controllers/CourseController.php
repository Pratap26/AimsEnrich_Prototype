<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
   protected function individual_course_view()
   {
   	return view('pages.individual_courses');
   }
}

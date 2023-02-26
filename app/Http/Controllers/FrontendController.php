<?php

namespace App\Http\Controllers;


class FrontendController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function studentSignup(){
        return view('frontend.student.student-signup');
    }
    public function atGlance(){
        return view('frontend.about.at-glance');
    }
    public function whyStudies(){
        return view('frontend.about.why-study-shs');
    }
    public function messageMinister(){
        return view('frontend.administration.message-minister');
    }
    public function messageSecretary(){
        return view('frontend.administration.message-secretary');
    }
    public function messageChairman(){
        return view('frontend.administration.message-chairman');
    }
    public function messageHeadmaster(){
        return view('frontend.administration.message-headmaster');
    }
    public function teacherInfo(){
        return view('frontend.administration.teacher-info');
    }
    public function staffInfo(){
        return view('frontend.administration.staff-info');
    }
    public function academicCl(){
        return view('frontend.academic.academic-calender');
    }
    public function classRoutine(){
        return view('frontend.academic.class-routine');
    }
    public function syllabus(){
        return view('frontend.academic.syllabus');
    }
    public function admissionCircular(){
        return view('frontend.admission.admission-circular');
    }
    public function mediaClass(){
        return view('frontend.facilities.media-class');
    }
    public function indoreGame(){
        return view('frontend.facilities.indore-game');
    }
    public function library(){
        return view('frontend.facilities.library');
    }
    public function computerClub(){
        return view('frontend.facilities.computer-club');
    }
    public function scienceClub(){
        return view('frontend.facilities.science-club');
    }
    public function photos(){
        return view('frontend.gallery.photos');
    }
    public function videos(){
        return view('frontend.gallery.videos');
    }
    public function contact(){
        return view('frontend.contact.contact');
    }
}

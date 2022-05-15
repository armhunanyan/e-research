<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Member;
use App\Models\Training;
use App\Models\Announcement;
use App\Models\Project;
use App\Models\Statistic;

class PagesController extends Controller
{
    public function home(){
        $services = Service::orderBy('id', 'desc')->limit(4)->get();
        $projects = Project::orderBy('id', 'desc')->limit(10)->get();
        $news = News::orderBy('id', 'desc')->limit(3)->get();
        $partners = Partner::orderBy('id', 'desc')->get();
        return view('pages.home')->with(array(
            'services' => $services,
            'projects' => $projects,
            'news' => $news,
            'partners' => $partners,
        ));
    }

    public function about(){
        $statistics = Statistic::orderBy('id', 'desc')->limit(4)->get();
        $partners = Partner::orderBy('id', 'desc')->get();
        $members = Member::orderBy('id', 'desc')->get();
        return view('pages.about')->with(array(
            'statistics' => $statistics,
            'partners' => $partners,
            'members' => $members,
        ));
    }

    public function services(){
        $services = Service::orderBy('id', 'desc')->get();
        $news = News::orderBy('id', 'desc')->limit(3)->get();
        $partners = Partner::orderBy('id', 'desc')->get();
        $members = Member::orderBy('id', 'desc')->get();
        $trainings = Training::orderBy('id', 'desc')->limit(4)->get();
        return view('pages.services')->with(array(
            'services' => $services,
            'news' => $news,
            'partners' => $partners,
            'members' => $members,
            'trainings' => $trainings,
        ));
    }

    public function portfolio(){
        $services = Service::orderBy('id', 'desc')->get();
        $news = News::orderBy('id', 'desc')->get();
        $partners = Partner::orderBy('id', 'desc')->get();
        $members = Member::orderBy('id', 'desc')->get();
        $trainings = Training::orderBy('id', 'desc')->limit(4)->get();
        return view('pages.portfolio')->with(array(
            'services' => $services,
            'news' => $news,
            'partners' => $partners,
            'members' => $members,
            'trainings' => $trainings,
        ));
    }

    public function news(){
        $services = Service::orderBy('id', 'desc')->get();
        $news = News::orderBy('id', 'desc')->get();
        $partners = Partner::orderBy('id', 'desc')->get();
        $members = Member::orderBy('id', 'desc')->get();
        $trainings = Training::orderBy('id', 'desc')->get();
        $announcements = Announcement::orderBy('id', 'desc')->get();
        return view('pages.news')->with(array(
            'services' => $services,
            'news' => $news,
            'partners' => $partners,
            'members' => $members,
            'trainings' => $trainings,
            'announcements' => $announcements,
        ));
    }

    public function materials(){
        $services = Service::orderBy('id', 'desc')->get();
        $news = News::orderBy('id', 'desc')->get();
        $partners = Partner::orderBy('id', 'desc')->get();
        $members = Member::orderBy('id', 'desc')->get();
        $trainings = Training::orderBy('id', 'desc')->get();
        return view('pages.materials')->with(array(
            'services' => $services,
            'news' => $news,
            'partners' => $partners,
            'members' => $members,
            'trainings' => $trainings,
        ));
    }

    public function contact(){
        return view('pages.contact');
    }
}

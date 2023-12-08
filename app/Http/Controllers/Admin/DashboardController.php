<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
//use App\Models\Blog;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Page;
use App\Models\Faq;
use App\Models\Lead;
use App\Models\color;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $categories = Category::count();
        //$blogs = Blog::count();
        $reviews = Testimonial::count();
        $services = Service::count();
        $pages = Page::count();
        $faqs = Faq::count();
        $leads = Lead::count();
        $users = User::get();
        $viewData = array(
            'pageName' => 'Dashboard',
            'categories' => $categories,
            //'blogs' => $blogs,
            'reviews' => $reviews,
            'services' => $services,
            'pages' => $pages,
            'faqs' => $faqs,
            'leads' => $leads,
            'users' => $users,
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => 'active',
                    'url' => route('admin.dashboard')
                )
            )
        );
        return view('admin.dashboard')->with($viewData);
    }
    public function home()
    {
        $pages = Page::count();
        $faqs = Faq::count();
        $leads = Lead::count();
        $users = User::count();
        $viewData = array(
            'pageName' => 'Dashboard',
            'pages' => $pages,
            'faqs' => $faqs,
            'leads' => $leads,
            'users' => $users,
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => 'active',
                    'url' => route('admin.dashboard')
                )
            )
        );
        return view('admin.user-dashboard')->with($viewData,);
    }
}

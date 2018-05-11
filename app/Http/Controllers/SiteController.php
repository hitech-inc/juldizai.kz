<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Models\Menu;
use App\Models\Contact;
use App\Models\Reqisite;
use App\Models\allNew;
use App\Models\Gallery;
use App\Models\massMediaAboutUs as massMedia;
use App\Models\Project;
use App\Models\testmenu;

class SiteController extends Controller
{

    public function index($id = "")
    {
    	if (!$id)
    	{
            if(session('lang')){
                $lang = session('lang');
            } else {
                $lang = 'ru';
            }

            App::setLocale($lang);

    		$currentURL = \Request::segment(1);
	    	$menus = $this->getMenu();
	    	$projects = Project::where('lang',$lang)->get();
	    	$news =allNew::where('lang',$lang)->take(6)->get();
	    	// $selectedNews = allNew::where('slug', $id)->first();
	    	return view('frontend.index', compact('menus', 'currentURL', 'projects', 'news'));
    	}
    	else
    	{
            App::setLocale($lang);
            
    		$menus = $this->getMenu();
    		$selectedNews = allNew::where('slug', $id)->first();
    		//dd($selectedNews);
    		return view('frontend.news-more', compact('selectedNews', 'menus'));
    	}
    }

    public function contacts()
    {
        $lang = session('lang');
        App::setLocale($lang);

    	$currentURL = \Request::segment(1);
    	$menus = $this->getMenu();
    	$contacts = Contact::where('lang',$lang)->get();
    	return view('frontend.contacts', compact('menus', 'contacts', 'currentURL'));
    }

    public function news(Request $request, $id = "")
    {
        $lang = session('lang');
        App::setLocale($lang);

    	if (!$id)
    	{
    		$currentURL = \Request::segment(1);
    		$menus = $this->getMenu();
	    	$news = allNew::where('lang',$lang)->get();
	    	//dd($news);
	    	return view('frontend.news', compact('news', 'menus', 'selectedNews', 'currentURL'));
    	}
    	else
    	{
    		$menus = $this->getMenu();
    		$selectedNews = allNew::where('slug', $id)->first();
    		//dd($selectedNews);
    		return view('frontend.news-more', compact('selectedNews', 'menus'));
    	}
    }

    public function massMedia()
    {
        $lang = session('lang');
        App::setLocale($lang);

    	$currentURL = \Request::segment(1);
    	$menus = $this->getMenu();
    	$massMedia = massMedia::where('lang',$lang)->get();
    	//dd($massMedia);
    	return view('frontend.mass-media-about-us', compact('menus', 'massMedia', 'currentURL'));
    }

    public function gallery(Request $request, $id = "")
    {
        $lang = session('lang');
        App::setLocale($lang);

    	if (!$id)
    	{
    		$currentURL = \Request::segment(1);
    		$menus = $this->getMenu();
	    	$galleries = Gallery::where('lang',$lang)->get();
	    	//dd($galleries);
	    	return view('frontend.galleries', compact('menus', 'galleries', 'currentURL'));
    	}
    	else
    	{
    		$menus = $this->getMenu();
    		$gallery = Gallery::where('slug', $id)->first();
    		//dd($gallery);
    		return view('frontend.gallery', compact('menus', 'gallery'));
    	}
    }

    public function projects()
    {
        $lang = session('lang');
        App::setLocale($lang);

    	$currentURL = \Request::segment(1);
    	$projects = Project::where('lang',$lang)->get();
    	return view('frontend.our-projects', compact('projects', 'currentURL'));
    }

    public function getSubMenu()
    {
    	// $subMenus = testmenu::where('');
    }

    public function getMenu()
    {
        $lang = session('lang');
        
    	$menus = Menu::where('lang',$lang)->get();
    	// $menus = testmenu::where('parent_id', null)->get();
    	// Menu::make('MyNavBar', function($menu){
    	// 	$menu->add($menus);
    	// 	foreach ($menus as $key => $item) {
	    // 		$menu->add($item->)
	    // 	}
    	// });

    	return $menus;
    }

    public function setLang($language)
    {
        App::setLocale($language);
        session(['lang' => $language]);
        $lang = session('lang');
        return self::index();
    }

}

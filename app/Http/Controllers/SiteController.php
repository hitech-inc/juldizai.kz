<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;
use App\Models\Contact;
use App\Models\Reqisite;
use App\Models\allNew;
use App\Models\Gallery;
use App\Models\massMediaAboutUs as massMedia;
use App\Models\testmenu;

class SiteController extends Controller
{

    public function index()
    {

    	$menus = $this->getMenu();
    	// dd($menus);
    	return view('frontend.index', compact('menus'));
    }

    public function contacts()
    {
    	$menus = $this->getMenu();
    	$contacts = Contact::get();
    	return view('frontend.contacts', compact('menus', 'contacts'));
    }

    public function news(Request $request, $id = "")
    {
    	if (!$id)
    	{
    		$menus = $this->getMenu();
	    	$news = allNew::all();
	    	//dd($news);
	    	return view('frontend.news', compact('news', 'menus', 'selectedNews'));
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
    	$menus = $this->getMenu();
    	$massMedia = massMedia::all();
    	//dd($massMedia);
    	return view('frontend.mass-media-about-us', compact('menus', 'massMedia'));
    }

    public function gallery(Request $request, $id = "")
    {
    	if (!$id)
    	{
    		$menus = $this->getMenu();
	    	$galleries = Gallery::all();
	    	//dd($galleries);
	    	return view('frontend.galleries', compact('menus', 'galleries'));
    	}
    	else
    	{
    		$menus = $this->getMenu();
    		$gallery = Gallery::where('slug', $id)->first();
    		//dd($gallery);
    		return view('frontend.gallery', compact('menus', 'gallery'));
    	}
    }

    public function getSubMenu()
    {
    	// $subMenus = testmenu::where('');
    }

    public function getMenu()
    {
    	$menus = Menu::all();
    	// $menus = testmenu::where('parent_id', null)->get();
    	// Menu::make('MyNavBar', function($menu){
    	// 	$menu->add($menus);
    	// 	foreach ($menus as $key => $item) {
	    // 		$menu->add($item->)
	    // 	}
    	// });

    	return $menus;
    }

}

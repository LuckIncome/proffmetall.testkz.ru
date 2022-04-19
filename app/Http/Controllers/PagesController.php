<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;
use App\Models\Partner;
use App\Models\Advantage;
use App\Models\About;
use App\Models\Price;
use App\Models\FAQ;
use App\Models\Certificate;
use App\Models\Article;
use App\Models\Slider;
use App\Models\Catalog;
use App\Models\Child;
use App\Models\Tovar;
use App\Models\Table;

use App\Models\User;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function getPage($slug = 'home')
    {
        if (strpos(url()->current(), 'home') !== false) {            
            abort(404);
        } else {
            $page = Page::select('type', 'id', 'title', 'excerpt', 'body', 'image', 'slug', 'seo_title', 'meta_description', 'meta_keywords', 'status')
                ->where(['slug' => $slug, 'status' => Page::STATUS_ACTIVE])
                ->firstOrFail();
        }

        switch ($page->type) {
            case 'home':
                $partners = Partner::get();
                $advantages = Advantage::get();
                $about = About::first();
                $articles = Article::orderBy('created_at', 'desc')->get();
                $sliders = Slider::get();
                $catalogs = Catalog::where('status', true)->take(12)->get();

                $title_catalogs = Catalog::with(['child'])->where('status', true)->get();

                return view('pages.' . $page->type, compact(
                    'page', 
                    'partners', 
                    'advantages',
                    'about',
                    'articles',
                    'sliders',
                    'catalogs',
                    'title_catalogs'
                ));
                break;

            case 'about':
                $partners = Partner::get();
                $advantages = Advantage::get();
                $about = About::first();
                $certificates = Certificate::get();
                $articles = Article::orderBy('created_at', 'desc')->get();
                return view('pages.' . $page->type, compact(
                    'page', 
                    'partners', 
                    'advantages',
                    'about',
                    'certificates',
                    'articles'
                ));
                break;
            case 'price':
                $partners = Partner::get();
                $advantages = Advantage::get();
                $prices = Price::get();
                $articles = Article::orderBy('created_at', 'desc')->get();
                return view('pages.' . $page->type, compact(
                    'page', 
                    'partners', 
                    'advantages',
                    'prices',
                    'articles'
                ));
                break;   
            case 'faq':
                $partners = Partner::get();
                $faqs = FAQ::get();
                return view('pages.' . $page->type, compact(
                    'page', 
                    'partners', 
                    'faqs'
                ));
                break; 
            case 'cert':
                $advantages = Advantage::get();
                $certificates = Certificate::get();
                $articles = Article::orderBy('created_at', 'desc')->get();
                return view('pages.' . $page->type, compact(
                    'page', 
                    'advantages', 
                    'certificates',
                    'articles'
                ));
                break; 
            case 'partners':
                $partners = Partner::get();
                $advantages = Advantage::get();
                return view('pages.' . $page->type, compact(
                    'page', 
                    'partners', 
                    'advantages'
                ));
                break; 
            case 'simple':
                return view('pages.' . $page->type, compact('page'));
                break;
            default :
                return view('pages.' . $page->type, compact('page'));
                break;
        }
    }
}

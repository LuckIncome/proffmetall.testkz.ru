<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;
use App\Models\Catalog;
use App\Models\Child;
use App\Models\Tovar;
use App\Models\Table;
use App\Models\Partner;
use App\Models\Article;

use App\Models\User;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CatalogController extends Controller
{
    public $paginate = 12;
    public $sort = 'created_at';
    public $order = 'desc';
    
    public function index() 
    {   
        $partners = Partner::get();
        $articles = Article::orderBy('created_at', 'desc')->get();

        $catalogs = Catalog::where('status', true)->paginate($this->paginate);

        $page = Page::where(['type' => 'catalogs'])->firstOrFail();
        return view('pages.catalogs.index', compact(
            'page',
            'partners',
            'articles',
            'catalogs'
        ));
    }

    public function show($catalog) 
    { 
        $articles = Article::orderBy('created_at', 'desc')->get();

        $catalog_one = Catalog::where('slug', $catalog)->where('status', true)->first();
        
        $childrens = Child::where('catalog_id', $catalog_one->id)
            ->where('status', true)
            ->orderBy($this->sort, $this->order)
            ->paginate($this->paginate);
        
        return view('pages.catalogs.show', compact(
            'catalog_one',
            'articles',
            'childrens'
        ));
    }

    public function showTovar($catalog, $tovar) 
    {         
        $articles = Article::orderBy('created_at', 'desc')->get();

        $catalog_one = Catalog::where('slug', $catalog)->where('status', true)->first();
        $child_one = Child::where('slug', $tovar)->where('status', true)->first();

        $tovars = Tovar::where('child_id', $child_one->id)
            ->where('status', true)
            ->orderBy($this->sort, $this->order)
            ->paginate($this->paginate);

        return view('pages.catalogs.show_tovar', compact(
            'child_one',
            'catalog_one',
            'articles',
            'tovars'
        ));
    }

    public function showTable($catalog, $tovar, $table) 
    { 
        $catalog_one = Catalog::where('slug', $catalog)->where('status', true)->first();
        $child_one = Child::where('slug', $tovar)->where('status', true)->first();
        $tovar = Tovar::where('slug', $table)->where('status', true)->first();

        $tables = Table::where('tovar_id', $tovar->id)
            ->orderBy($this->sort, $this->order)
            ->paginate(50);
        $table = Table::where('tovar_id', $tovar->id)
            ->orderBy($this->sort, $this->order)
            ->first();

        return view('pages.catalogs.show_tovar_table', compact(
            'child_one',
            'catalog_one',
            'tovar',
            'tables',
            'table'
        ));
    }
}

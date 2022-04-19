<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;
use App\Models\Catalog;
use App\Models\Child;
use App\Models\Tovar;
use App\Models\Table;

use App\Models\User;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SearchController extends Controller
{
    public function index(Request $request) 
    {
        \DB::statement("SET SQL_MODE=''"); //this is the trick use it just before your query

        $data = Tovar::search($request->get('search'), null, true) 
            ->with(['tovar_child'  => function($q) {
                $q->with(['child_catalog'])->get();
            }])     
            ->paginate(12);

        $page = Page::where(['type' => 'search'])->firstOrFail();
        return view('pages.search', compact('page', 'data'));
    }
}

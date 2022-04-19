<?php

namespace App\Providers;

use TCG\Voyager\Models\Page;
use App\Models\Contact;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use TCG\Voyager\Http\Controllers\ContentTypes\Image;
use TCG\Voyager\Http\Controllers\ContentTypes\MultipleImage;
use TCG\Voyager\Http\Controllers\Controller;
use TCG\Voyager\Http\Controllers\VoyagerController;
use TCG\Voyager\Http\Controllers\VoyagerSettingsController;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(VoyagerBaseController::class, \App\Http\Controllers\Voyager\VoyagerBaseController::class);
        $this->app->bind(VoyagerController::class, \App\Http\Controllers\Voyager\VoyagerController::class);
        $this->app->bind(Controller::class, \App\Http\Controllers\Voyager\Controller::class);
        $this->app->bind(VoyagerSettingsController::class, \App\Http\Controllers\Voyager\VoyagerSettingsController::class);
        $this->app->bind(Image::class, \App\Http\Controllers\Voyager\ContentTypes\Image::class);
        $this->app->bind(MultipleImage::class, \App\Http\Controllers\Voyager\ContentTypes\MultipleImage::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); 
        Paginator::useBootstrap();

        view()->composer([
            'partials.header', 
            'partials.footer', 
            'pages.contacts', 
        ], function ($view)
        {
            $phone_aktau = Contact::select('value', 'link')->where('city','aktau')->where('type','phone')->where('status',true)->firstOrFail();
            $view->with('phone_aktau',$phone_aktau);
            
            $phone_ustKamenogorsk = Contact::select('value', 'link')->where('city','ustKamenogorsk')->where('type','phone')->where('status',true)->firstOrFail();
            $view->with('phone_ustKamenogorsk',$phone_ustKamenogorsk);
            
            $phone_atyrau = Contact::select('value', 'link')->where('city','atyrau')->where('type','phone')->where('status',true)->firstOrFail();
            $view->with('phone_atyrau',$phone_atyrau);
            
            $phone_kyzylorda = Contact::select('value', 'link')->where('city','kyzylorda')->where('type','phone')->where('status',true)->firstOrFail();
            $view->with('phone_kyzylorda',$phone_kyzylorda);
            
            $phone_kostanay = Contact::select('value', 'link')->where('city','kostanay')->where('type','phone')->where('status',true)->firstOrFail();
            $view->with('phone_kostanay',$phone_kostanay);
            
            $phone_aktobe = Contact::select('value', 'link')->where('city','aktobe')->where('type','phone')->where('status',true)->firstOrFail();
            $view->with('phone_aktobe',$phone_aktobe);
            
            $phone_karaganda = Contact::select('value', 'link')->where('city','karaganda')->where('type','phone')->where('status',true)->firstOrFail();
            $view->with('phone_karaganda',$phone_karaganda);
            
            $phone_kokshetau = Contact::select('value', 'link')->where('city','kokshetau')->where('type','phone')->where('status',true)->firstOrFail();
            $view->with('phone_kokshetau',$phone_kokshetau);
            
            $phone_petropavlovsk = Contact::select('value', 'link')->where('city','petropavlovsk')->where('type','phone')->where('status',true)->firstOrFail();
            $view->with('phone_petropavlovsk',$phone_petropavlovsk);
            
            $phone_uralsk = Contact::select('value', 'link')->where('city','uralsk')->where('type','phone')->where('status',true)->firstOrFail();
            $view->with('phone_uralsk',$phone_uralsk);
            
            $phone_semei = Contact::select('value', 'link')->where('city','semei')->where('type','phone')->where('status',true)->firstOrFail();
            $view->with('phone_semei',$phone_semei);
            
            $phone_taldykorgan = Contact::select('value', 'link')->where('city','taldykorgan')->where('type','phone')->where('status',true)->firstOrFail();
            $view->with('phone_taldykorgan',$phone_taldykorgan);
            
            $phone_petropavlovsk = Contact::select('value', 'link')->where('city','petropavlovsk')->where('type','phone')->where('status',true)->firstOrFail();
            $view->with('phone_petropavlovsk',$phone_petropavlovsk);
            
            $phone_zhezkazgan = Contact::select('value', 'link')->where('city','zhezkazgan')->where('type','phone')->where('status',true)->firstOrFail();
            $view->with('phone_zhezkazgan',$phone_zhezkazgan);
            
            $phone_taraz = Contact::select('value', 'link')->where('city','taraz')->where('type','phone')->where('status',true)->firstOrFail();
            $view->with('phone_taraz',$phone_taraz);
            
            $phone_pavlodar = Contact::select('value', 'link')->where('city','pavlodar')->where('type','phone')->where('status',true)->firstOrFail();
            $view->with('phone_pavlodar',$phone_pavlodar);
            
            $phone_shymkent = Contact::select('value', 'link')->where('city','shymkent')->where('type','phone')->where('status',true)->firstOrFail();
            $view->with('phone_shymkent',$phone_shymkent);
            
            
            $phone_one = Contact::select('value', 'link')->where('city','almaty')->where('type','phone')->where('status',true)->firstOrFail();
            $view->with('phone_one',$phone_one);

            $phone_astana = Contact::select('value', 'link')->where('city','astana')->where('type','phone')->where('status',true)->get();
            $view->with('phone_astana',$phone_astana);

            $phone_almaty = Contact::select('value', 'link')->where('city','almaty')->where('type','phone')->where('status',true)->get();
            $view->with('phone_almaty',$phone_almaty);

            $phone_with_name = Contact::where('city','withName')->where('type','phone')->where('status',true)->get();
            $view->with('phone_with_name',$phone_with_name);

            $email = Contact::select('value')->where('type','email')->where('status',true)->firstOrFail();
            $view->with('email',$email);

            $map = Contact::select('value')->where('type','map')->where('status',true)->firstOrFail();
            $view->with('map',$map);

            $adress = Contact::where('type','address')->where('status',true)->firstOrFail();
            $view->with('adress',$adress);

            $socials = Contact::where('type','social')->where('status',true)->orderBy('sort_id')->get();
            $view->with('socials',$socials);

            $pages = Page::whereNotIn('type',['home'])->where('status',Page::STATUS_ACTIVE)->get();
            $pages = $pages->groupBy('type');
            $view->with('pages',$pages);
        });
    }
}

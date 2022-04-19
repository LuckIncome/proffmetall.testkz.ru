<?php


namespace App\Http\Controllers\Voyager\Dimmers;

use App\Models\Price;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class PriceDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Price::count();
        $string = 'Прайс листы';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-download',
            'title'  => "{$count} {$string}",
            'text'   => "Всего {$count} распечатанных {$string} на сайте",
            'button' => [
                'text' => "Все прайс листы",
                'link' => route('voyager.prices.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(Price::class));
    }

}

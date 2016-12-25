<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class MenuComposer
{

    /**
     * Bind data to the view.
     *
     * @param    View  $view
     * @return  void
     */
    public function compose(View $view)
    {
        $dsloaisp = DB::SELECT ('Select* FROM loai_san_pham');
        $view->with('listloaisp',$dsloaisp);
    }
}
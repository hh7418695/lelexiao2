<?php


namespace App\Admin\Controllers;


use App\Admin\Forms\EmailTest;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Widgets\Card;

class EmailTestController extends AdminController
{

    /**
     * 系统设置
     *
     * @param Content $content
     * @return Content

     */
    public function emailTest(Content $content)
    {
        return $content
            ->title(admin_trans('menu.titles.email_test'))
            ->body(new Card(new EmailTest()));
    }

}

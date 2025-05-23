<?php


namespace App\Admin\Controllers;


use App\Admin\Forms\SystemSetting;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Widgets\Card;

class SystemSettingController extends AdminController
{

    /**
     * 系统设置
     *
     * @param Content $content
     * @return Content

     */
    public function systemSetting(Content $content)
    {
        return $content
            ->title(admin_trans('menu.titles.system_setting'))
            ->body(new Card(new SystemSetting()));
    }

}

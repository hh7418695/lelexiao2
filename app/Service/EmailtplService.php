<?php


namespace App\Service;


use App\Models\Emailtpl;

class EmailtplService
{

    /**
     * 通过邮件标识获得邮件模板
     *
     * @param string $token 邮件标识
     * @return Emailtpl

     */
    public function detailByToken(string $token): Emailtpl
    {
        $tpl = Emailtpl::query()->where('tpl_token', $token)->first();
        return $tpl;
    }

}

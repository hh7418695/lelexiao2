<?php


namespace App\Service;


use App\Models\Pay;

class PayService
{

    /**
     * 加载支付网关
     *
     * @param string|int $payClient 支付场景客户端
     * @return array|null

     */
    public function pays(string $payClient = Pay::PAY_CLIENT_PC): ?array
    {
        $payGateway = Pay::query()
            ->whereIn('pay_client', [$payClient, Pay::PAY_CLIENT_ALL])
            ->where('is_open', Pay::STATUS_OPEN)
            ->get();
        return $payGateway ? $payGateway->toArray() : null;
    }

    /**
     * 通过支付标识获得支付配置
     *
     * @param string $check 支付标识
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null

     */
    public function detailByCheck(string $check)
    {
        $gateway = Pay::query()
            ->where('pay_check', $check)
            ->where('is_open', Pay::STATUS_OPEN)
            ->first();
        return $gateway;
    }

    /**
     * 通过id查询支付网关
     *
     * @param int $id 支付网关id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null

     */
    public function detail(int $id)
    {
        $gateway = Pay::query()
            ->where('id', $id)
            ->where('is_open', Pay::STATUS_OPEN)
            ->first();
        return $gateway;
    }

}

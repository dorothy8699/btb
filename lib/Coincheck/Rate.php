<?php
namespace Coincheck;

class Rate
{
    /** @var Coincheck */
    private $client;

    public function __construct(\Coincheck\Coincheck $client)
    {
        $this->client = $client;
    }

    /**
     * 各種最新情報を簡易に取得することができます。
     *
     * @param  mixed
     * @return Json Array
     */
    public function all($params = array())
    {
        $arr = array();
        $rawResponse = $this->client->request('get', 'api/rate/btc_jpy', $arr);
        return $rawResponse;
    }

}

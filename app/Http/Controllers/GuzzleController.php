<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/4/4
 * Time: 11:50
 */
namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class GuzzleController extends Controller
{
    public function send(Request $request)
    {
        $params = [
            'key' => '727e233b33084b66b2c39661d25dccc5',
        ];

        $params['info'] = $request->input('info');

        $client = new Client();
        $options = json_encode($params, JSON_UNESCAPED_UNICODE);

        $data = [
            'body' => $options,
            'headers' => ['content-type' => 'application/json']
        ];

        $response = $client->request('post','http://www.tuling123.com/openapi/api', $data);

        $callback = json_decode($response->getBody()->getContents());

        return response()->json($callback);
    }
}
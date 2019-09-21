<?php
namespace app\admin\controller;

class Index
{
	/**
     * @api {POST} /client/read 商户详情(查看)
     * @apiVersion 0.0.1
     * @apiGroup Client
     *
     * @apiParam {Number} id 商户ID
     * 
     * @apiParamExample {json} 请求数据:
     * {
     *     "id": "80000",
     * }
     * 
     * @apiSuccess {Number} id 商户ID号
     * @apiSuccess {String} name 商户名称
     * @apiSuccess {Number} status 商户状态值
     * @apiSuccess {String} status_text 商户状态
     * @apiSuccess {String} create_time 创建时间
     * @apiSuccess {String} update_time 更新时间
     *
     * @apiSuccessExample {json} 成功数据:
     * {
     *     "code":200,
     *     "msg":"操作成功",
     *     "data": {
     *         "id": 2,
     *         "name": "淘京科技",
     *         "status": 1,
     *         "create_time": "2019-07-31 15:41:38",
     *         "update_time": "2019-08-01 18:25:16",
     *         "status_text": "正常",        
     *     }
     * }
     */
    public function index()
    {
        return '我想风一样的自111222333由';
    }

}

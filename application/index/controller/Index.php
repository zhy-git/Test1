<?php
namespace app\index\controller;

class Index
{
	/**
	 * @api {POST} /client_order 订单列表
	 * @apiVersion 0.0.1
	 * @apiGroup ClientOrder
	 *
	 * @apiParam {String=lost,list} type 订单类型 lost掉单列表 list所有列表
	 * @apiParam {Number=1,2,3} status 状态 1未确认、2已到账、3未到账
	 * @apiParam {String} start_date 开始时间 Y-m-d
	 * @apiParam {String} end_date 结束时间 Y-m-d
	 * @apiParam {Number} [page=1] 页码
	 * @apiParam {Number} [limit=10] 条数
	 * 
	 */
    public function index()
    {
        return '111222233334444';
    }
}

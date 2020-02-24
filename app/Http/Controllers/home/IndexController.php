<?php
    /**
     * Created by 十清凉.
     * User: 十清凉
     * Date: 2020/2/13 0013
     * Time: 11:08
     */

    namespace App\Http\Controllers\home;


    use App\Http\Controllers\Controller;

    class IndexController extends Controller
    {


        public function index()
        {
            return view('home.index.index');
        }

        //alert 弹窗；
        public function alert()
        {
            $result = <<<php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
     <link rel="stylesheet" href="https://gw.alipayobjects.com/as/g/antui/antui/10.1.32/dpl/widget/dialog.css"/>  
<body>
	<div class="am-dialog-mask show"></div>
<div class="am-dialog show" role="dialog" aria-hidden="false">
	    <div class="am-dialog-wrap">
	         <div class="am-dialog-wrap">
                <div class="am-dialog-header">
                    <h3>授权成功！</h3>
                </div>
                <div class="am-dialog-body">
                    <p class="am-dialog-brief">授权成功！点击确定返回滋滋</p>
                </div>
                <div class="am-dialog-footer">
               
                <a style="text-decoration: none" href="http://www.coolr.top/"  type="button" class="am-dialog-button">取消</a>
                 <a style="text-decoration: none" href="http://www.coolr.top/"  type="button" class="am-dialog-button">确定</a>
                </div>
	        </div>
	    </div>
	</div>
</body>
</html>

php;
            return $result;
        }

        //get_time
        public function get_time($type = true)
        {

            if ($type) {
                return time();
            }
            return date('Y-m-d');

        }

        //计算脚本执行时间
        public function runtime($start = null, $end = null)
        {
            static $cache = [];
            if (is_null($start)) {
                return $cache;
            } elseif (is_null($end)) {
                return $cache[$start] = microtime(true);
            } else {
                $end = $cache[$end] ?? microtime(true);
                return $end - $cache[$start];
            }
        }
    }
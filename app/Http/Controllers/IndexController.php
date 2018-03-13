<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Category;
use App\Models\Message;
use App\Models\NewPosition;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::has('product')->where('enabled',1)->orderBy('sort','ASC')->limit(6)->get();
        $is_mobile = false;
        if(isset($_SERVER['HTTP_USER_AGENT'])) {
            $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
            $clientkeywords = array(
                'nokia', 'sony', 'ericsson', 'mot', 'samsung', 'htc', 'sgh', 'lg', 'sharp', 'sie-'
            ,'philips', 'panasonic', 'alcatel', 'lenovo', 'iphone', 'ipod', 'blackberry', 'meizu',
                'android', 'netfront', 'symbian', 'ucweb', 'windowsce', 'palm', 'operamini',
                'operamobi', 'opera mobi', 'openwave', 'nexusone', 'cldc', 'midp', 'wap', 'mobile'
            );
            // 从HTTP_USER_AGENT中查找手机浏览器的关键字
            if(preg_match("/(".implode('|',$clientkeywords).")/i",$userAgent)&&strpos($userAgent,'ipad') === false)
            {
                $is_mobile = true;
            }
        }



        //新品速递位置
        $newPosition = NewPosition::where('enabled',1)->first();
        $newProductArr = [];
        if ($newPosition) {
            $positionLayout  = collect(array_values(array_filter(explode('|',$newPosition->layout))));
            if (count($positionLayout)) {
                $positionLayout->each(function($item,$key) use (&$newProductArr,$positionLayout) {
                    if ($key == 0) {
                        $newProductArr[] = Product::where('enabled',1)->where('is_new',1)->orderBy('sort','ASC')->limit($item)->get();
                    } else {
                        $newProductArr[] = Product::where('enabled',1)->where('is_new',1)->orderBy('sort','ASC')->limit($item)->offset($positionLayout[$key-1])->get();
                    }
                });
            } else {
                $newProductArr[] = Product::where('enabled',1)->where('is_new',1)->orderBy('sort','ASC')->get();
            }
        } else {
            $newProductArr[] =  Product::where('enabled',1)->where('is_new',1)->orderBy('sort','ASC')->get();
        }
        //所有分类产品
        $catProductArr = [];
        $categories->each(function(&$item) use (&$catProductArr) {
            $catLayout  = collect(array_filter(explode('|',$item->layout)));
            $item->catLayout = $catLayout;
            if (count($catLayout)) {
                $offset = 0;
                $catLayout->each(function($i,$k) use (&$catProductArr,$catLayout,$item,&$offset) {
                    if ($k == 0) {
                        $catProductArr[$item->id][] = Product::with('category')->where('enabled',1)->where('cat_id',$item->id)->orderBy('sort','ASC')->limit($i)->get();
                    } else {
                        $offset += $catLayout[$k-1];
                        $catProductArr[$item->id][] = Product::with('category')->where('enabled',1)->where('cat_id',$item->id)->orderBy('sort','ASC')->limit($i)->offset($offset)->get();
                    }
                });
            } else {
                $catProductArr[$item->id][] = Product::with('category')->where('enabled',1)->where('cat_id',$item->id)->orderBy('sort','ASC')->get();
            }
        });
        return view('index.index', compact('catProductArr','categories','newProductArr','positionLayout','is_mobile'));
    }

    public function sendMessage()
    {
        $value = request('value');
        $model = request('model','通用留言,无针对型号');
        if ($value) {
            if (!$value['contact']) {
                return response()->json(['message'=>'留个联系方式吧']);
            }
            $data = [
                'name'=>$value['name'] ?:'',
                'contact'=>$value['contact'] ?:'',
                'message'=>$value['message'] ?:'',
                'model'=>$model,
            ];
            $message = Message::create($data);
            if ($message) {
                return response()->json(['message'=>'感谢您的留言,我们会及时联系您']);
            }
        }
        return response()->json(['message'=>'留言失败']);

    }




}

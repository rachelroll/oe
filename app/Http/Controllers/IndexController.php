<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Category;
use App\Models\NewPosition;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        $categories = Category::has('product')->where('enabled',1)->orderBy('sort','ASC')->limit(6)->get();

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
                $catLayout->each(function($i,$k) use (&$catProductArr,$catLayout,$item) {
                    if ($k == 0) {
                        $catProductArr[$item->id][] = Product::with('category')->where('enabled',1)->where('cat_id',$item->id)->orderBy('sort','ASC')->limit($i)->get();
                    } else {
                        $catProductArr[$item->id][] = Product::with('category')->where('enabled',1)->where('cat_id',$item->id)->orderBy('sort','ASC')->limit($i)->offset($catLayout[$k-1])->get();
                    }
                });
            } else {
                $catProductArr[$item->id][] = Product::with('category')->where('enabled',1)->where('cat_id',$item->id)->orderBy('sort','ASC')->get();
            }
        });
        return view('index.index', compact('catProductArr','categories','newProductArr','positionLayout'));
    }




}

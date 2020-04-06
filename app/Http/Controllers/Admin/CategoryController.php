<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{

  public function showCategoryCreateView()
  {
    $categories = ProductCategory::orderBy('name' ,'ASC')->get();
    $action = 1;
    return view("vendor.adminlte.product_category.list", compact('categories','action')) ;
  }

  public function showCategoryEditView($id)
  {
   try {
    $categories = ProductCategory::orderBy('name' ,'ASC')->get();
    $action = 2;
    $category = ProductCategory::findOrFail($id);
    return view("vendor.adminlte.product_category.list", compact('categories','action','category')) ;
   } catch (\Exception $e) {

      return  redirect()->back();
   }
  }
  public function showCategoryView()
  {
    $categories = ProductCategory::orderBy('name' ,'ASC')->get();
    $action = 3;
    return view("vendor.adminlte.product_category.list", compact('categories','action')) ;
  }
  public function createCategory(Request $request)
  {
    try {
      DB::beginTransaction();
      $data = $request->all();
      $data['slug'] = str_slug($data['name'],'-');
      ProductCategory::create($data);
      DB::commit();
      return redirect()->route('product-category');
    } catch (\Exception $e) {
      DB::rollback();
      return  redirect()->back();
    }
      
  }

  public function updateCategory($id,Request $request)
  {
    try {
      DB::beginTransaction();
      $data = $request->except('_method','_token');
      $category = ProductCategory::findOrFail($id);
      if($data['parent_id'] == $id) 
          $data['parent_id'] = $category->parent_id;
      $data['slug'] = str_slug($data['name'],'-');
     
      ProductCategory::where('id',$id)->update($data);
      DB::commit();
      return redirect()->route('product-category');
    } catch (\Exception $e) {
      DB::rollback();
      return  redirect()->back();
    }
  }

  public function deleteCategory($id)
  {
    try {
      DB::beginTransaction();
      ProductCategory::where('id',$id)->delete();
      DB::commit();
      return redirect()->route('product-category');
    } catch (\Exception $e) {
      DB::rollback();
      return  redirect()->back();
    }
  }
}

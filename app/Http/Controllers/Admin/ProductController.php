<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductDetail;
use App\Models\ProductPhoto;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showProductView()
    {
        $list = Product::paginate(1);
        return view('vendor.adminlte.products.list',compact('list'));
    }

    public function showProductCreateView()
    {
        $categories = ProductCategory::orderBy('name', 'ASC')->get();
        return view('vendor.adminlte.products.create', compact('categories'));
    }


    public function createProduct(CreateProductRequest $request)
    {
        DB::beginTransaction();
        try {
            $data =  $request->except('_method', '_token');
            $product = new Product();
            $product->name = $data['name'];
            $product->promo_photo = $data['promo_photo'];
            $product->category_id = $data['category_id'];
            $product->slug = str_slug($data['name'], '-');
            unset($data['promo_photo']);
            unset($data['name']);
            unset($data['category_id']);
            if ($product->save()) {
                $id = $product->id;
                $product->slug = $product->slug . '-' . $id;
                $product->save();
                // detail
                $this->createProductDetail($id, $data);
                // photo
                $this->createListProductPhoto($id, $data);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }
    private function createListProductPhoto($productId, $data)
    {
        foreach ($data as $key => $value) {
            if (preg_match("/^(more_)/", $key)) {
                // dd($key);
                $this->createProductPhoto($productId, $value);
            }
        }
    }

    private function createProductPhoto($productId, $photoPath)
    {
        $photo = new ProductPhoto();
        $photo->product_id = $productId;
        $photo->photo = $photoPath;
        return $photo->save();
    }
    private function createProductDetail($productId, $data)
    {
        $detail = new ProductDetail();
        $detail->product_id = $productId;
        $detail->meta_title = $data['meta_title'] ?? '';
        $detail->meta_keyword = $data['meta_keyword'] ?? '';
        $detail->meta_description = $data['meta_description'] ?? '';
        $detail->code = $data['code'] ?? '';
        $detail->bh = $data['bh'] ?? '';
        $detail->xx = $data['xx'] ?? '';
        $detail->short_description = $data['sort_description'] ?? '';
        $detail->description = $data['description'] ?? '';
        return $detail->save();
    }
    public function updateProduct()
    {
    }

    public function deleteProduct()
    {
    }
}

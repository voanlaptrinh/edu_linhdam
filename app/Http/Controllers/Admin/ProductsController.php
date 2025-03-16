<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->input('search');

        $products = Products::when($search, function ($query, $search) {
            return $query->where('title', 'like', "%$search%");
        })->paginate(10);

        if ($request->ajax()) {
            return response()->json([
                'table' => view('admin.products.table', compact('products'))->render(),
                'pagination' => $products->links('pagination::bootstrap-4')->toHtml()
            ]);
        }


        return view('admin.products.index', compact('products'));
    }




    public function create()
    {

      
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'nullable|string|max:255|required',
            'quantity' => 'nullable|integer|min:0',
            'language' => 'nullable|string|max:255|required',
            'isbn' => 'nullable|string|max:255|unique:products,isbn|required',
            'description' => 'nullable|string',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            // 'images' => 'nullable|array',
            // 'images.*' => 'image|mimes:jpg,jpeg,png,gif',
            'price' => 'nullable|numeric|min:0|required',
            'sale_price' => 'nullable|numeric|min:0',
            'tags' => 'nullable',
            'tags.*' => 'string|max:255',
            'release_date' => 'nullable|date',
            'metatitle' => 'required|string|max:255',
            'metadescription' => 'required|string|max:255',
        ], [
            'title.required' => 'Tiêu đề là bắt buộc.',
            'title.string' => 'Tiêu đề phải là chuỗi.',
            'title.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
            'author.string' => 'Tác giả phải là chuỗi.',
            'author.required' => 'Tác giả là bắt buộc.',
            'author.max' => 'Tác giả không được vượt quá 255 ký tự.',
            'quantity.integer' => 'Số lượng phải là số nguyên.',
            'quantity.min' => 'Số lượng không được nhỏ hơn 0.',
            'language.string' => 'Ngôn ngữ phải là chuỗi.',
            'language.required' => 'Ngôn ngữ là bắt buộc.',
            'language.max' => 'Ngôn ngữ không được vượt quá 255 ký tự.',
            'isbn.string' => 'Mã ISBN phải là chuỗi.',
            'isbn.required' => 'Mã ISBN là bắt buộc.',
            'isbn.max' => 'Mã ISBN không được vượt quá 255 ký tự.',
            'isbn.unique' => 'Mã ISBN đã tồn tại.',
            'description.string' => 'Mô tả phải là chuỗi.',
            'cover_image.image' => 'Ảnh bìa phải là tệp hình ảnh.',
            'cover_image.mimes' => 'Ảnh bìa phải thuộc định dạng jpg, jpeg, png hoặc gif.',
            // 'images.array' => 'Hình ảnh phải là một mảng.',
            // 'images.*.image' => 'Tất cả các hình ảnh phải là tệp hình ảnh.',
            // 'images.*.mimes' => 'Mỗi hình ảnh phải thuộc định dạng jpg, jpeg, png hoặc gif.',
            'price.numeric' => 'Giá phải là một số.',
            'price.min' => 'Giá không được nhỏ hơn 0.',
            'price.required' => 'Giá sản phẩm là bắt buộc.',
            'sale_price.numeric' => 'Giá khuyến mãi phải là một số.',
            'sale_price.min' => 'Giá khuyến mãi không được nhỏ hơn 0.',
            'tags.*.string' => 'Mỗi tag phải là chuỗi.',
            'tags.*.max' => 'Mỗi tag không được vượt quá 255 ký tự.',
            'release_date.date' => 'Ngày phát hành phải là một ngày hợp lệ.',
            'metatitle.required' => 'Tiêu đề seo là bắt buộc',
            'metatitle.max' => 'Tiêu đề seo không được vượt quá 255 ký tự.',
            'metadescription.required' => 'Nội dung seo là bắt buộc',
            'metadescription.max' => 'Nội dung seo không được vượt quá 255 ký tự.',
        ]);

        // Collect old images if available
        $oldImages = $request->old_images ?? [];

        // Handle new image uploads
        $newImages = $this->uploadImages($request->file('images'));

        // Combine old and new images
        $allImages = array_merge($oldImages, $newImages);

        // Handle cover image upload
        $coverImagePath = $this->uploadCoverImage($request->file('cover_image'));
        // Store the main product data using mass assignment
        $product = Products::create([
            'title' => $request->title,
            'author' => $request->author,
            'quantity' => $request->quantity,
            'language' => $request->language,
            'isbn' => $request->isbn,
            'description' => $request->description,
            'metatitle' => $request->metatitle,
            'metadescription' => $request->metadescription,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'tags' => $request->tags ? json_decode($request->tags, true) : null,
            'release_date' => $request->release_date,
            'status' => $request->has('status') ? 1 : 0,
            'cover_image' => $coverImagePath,
            // 'images' => $allImages ? json_encode($allImages) : null,

        ]);
        $product->alias = Str::slug($request->title) . '-' . $product->id;
        $product->save();
        return redirect()->route('products.admin')->with('success', 'Sản phẩm đã được thêm thành công!');
    }

    public function edit($alias)
    {
        $product = Products::where('alias',  $alias)->firstOrFail();
     

        return view('admin.products.edit', compact('product'));
    }



    public function update(Request $request, $id)
    {
        // Tìm sản phẩm theo ID
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'nullable|string|max:255|required',
            'quantity' => 'nullable|integer|min:0',
            'language' => 'nullable|string|max:255|required',
            'isbn' => 'nullable|string|max:255|required',
            'description' => 'nullable|string',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'price' => 'nullable|numeric|min:0|required',
            'sale_price' => 'nullable|numeric|min:0',
            'tags' => 'nullable',
            'tags.*' => 'string|max:255',
            'release_date' => 'nullable|date',
            'metatitle' => 'required|string|max:255',
            'metadescription' => 'required|string|max:255',
        ], [
            'title.required' => 'Tiêu đề là bắt buộc.',
            'title.string' => 'Tiêu đề phải là chuỗi.',
            'title.max' => 'Tiêu đề không được vượt quá 255 ký tự.',

            'author.string' => 'Tác giả phải là chuỗi.',
            'author.required' => 'Tác giả là bắt buộc.',
            'author.max' => 'Tác giả không được vượt quá 255 ký tự.',
            'quantity.integer' => 'Số lượng phải là số nguyên.',
            'quantity.min' => 'Số lượng không được nhỏ hơn 0.',
            'language.string' => 'Ngôn ngữ phải là chuỗi.',
            'language.required' => 'Ngôn ngữ là bắt buộc.',
            'language.max' => 'Ngôn ngữ không được vượt quá 255 ký tự.',
            'isbn.string' => 'Mã ISBN phải là chuỗi.',
            'isbn.required' => 'Mã ISBN là bắt buộc.',
            'isbn.max' => 'Mã ISBN không được vượt quá 255 ký tự.',
            'description.string' => 'Mô tả phải là chuỗi.',
            'cover_image.image' => 'Ảnh bìa phải là tệp hình ảnh.',
            'cover_image.mimes' => 'Ảnh bìa phải thuộc định dạng jpg, jpeg, png hoặc gif.',

            'price.numeric' => 'Giá phải là một số.',
            'price.min' => 'Giá không được nhỏ hơn 0.',
            'price.required' => 'Giá sản phẩm là bắt buộc.',
            'sale_price.numeric' => 'Giá khuyến mãi phải là một số.',
            'sale_price.min' => 'Giá khuyến mãi không được nhỏ hơn 0.',
            'tags.*.string' => 'Mỗi tag phải là chuỗi.',
            'tags.*.max' => 'Mỗi tag không được vượt quá 255 ký tự.',
            'release_date.date' => 'Ngày phát hành phải là một ngày hợp lệ.',
            'metatitle.required' => 'Tiêu đề seo là bắt buộc',
            'metatitle.max' => 'Tiêu đề seo không được vượt quá 255 ký tự.',
            'metadescription.required' => 'Nội dung seo là bắt buộc',
            'metadescription.max' => 'Nội dung seo không được vượt quá 255 ký tự.',
        ]);
        $product = Products::findOrFail($id);

        // Bước 1: Xử lý xóa ảnh (nếu có)
        // if ($request->has('deleted_images')) {
        //     $deletedImages = json_decode($request->input('deleted_images'), true);

        //     if (!empty($deletedImages)) {
        //         $currentImages = json_decode($product->images, true) ?? [];
        //         $remainingImages = array_diff($currentImages, $deletedImages);
        //         // Xóa ảnh vật lý
        //         foreach ($deletedImages as $imagePath) {
        //             $absolutePath = public_path('source/dataimages/' . basename($imagePath));
        //             if (file_exists($absolutePath)) {
        //                 @unlink($absolutePath);
        //             }
        //         }
        //         $product->images = json_encode(array_values($remainingImages));
        //         $product->save();
        //     }
        // }
        // if ($request->hasFile('images')) {
        //     $newImages = $this->uploadImages($request->file('images'));
        //     $currentImages = json_decode($product->images, true) ?? [];
        //     $allImages = array_merge($currentImages, $newImages);
        //     $product->images = json_encode($allImages);
        // }
        if ($request->hasFile('cover_image')) {
            $oldCoverImagePath = $product->cover_image;
            $coverImagePath = $this->uploadCoverImage($request->file('cover_image'));
            $product->cover_image = $coverImagePath;
            if (!empty($oldCoverImagePath)) {
                $absolutePath = public_path($oldCoverImagePath);
                if (file_exists($absolutePath)) {
                    unlink($absolutePath);
                }
            }
        }

        $product->title = $request->input('title');
        $product->author = $request->input('author');
        $product->quantity = $request->input('quantity');
        $product->language = $request->input('language');
        $product->isbn = $request->input('isbn');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->sale_price = $request->input('sale_price');
        $product->tags = $request->tags ? json_decode($request->tags, true) : null;
        $product->release_date = $request->input('release_date');
        $product->metatitle = $request->input('metatitle');
        $product->metadescription = $request->input('metadescription');
        $product->status = $request->has('status') ? 1 : 0;

        // Cập nhật alias cho sản phẩm
        $product->alias = Str::slug($request->input('title')) . '-' . $product->id;

        // Lưu lại thay đổi vào DB
        $product->save();

        return redirect()->route('products.admin')->with('success', 'Sản phẩm đã được cập nhật thành công!');
    }

    public function detail($alias)
    {
        $product = Products::where('alias',  $alias)->firstOrFail();
        return view('admin.products.detail', compact('product'));
    }

    public function destroy($id)
    {
        $product = Products::findOrFail($id);

        // Xóa ảnh bìa
        if ($product->cover_image && file_exists(public_path($product->cover_image))) {
            unlink(public_path($product->cover_image));
        }

        // Xóa tất cả ảnh liên quan
        if ($product->images) {
            $images = json_decode($product->images, true);
            foreach ($images as $image) {
                if (file_exists(public_path($image))) {
                    unlink(public_path($image));
                }
            }
        }

        // Xóa sản phẩm trong DB
        $product->delete();

        return redirect()->route('products.admin')->with('success', 'Sản phẩm đã được xóa thành công!');
    }









    /**
     * Handle the upload of product images.
     *
     * @param  array|null  $images
     * @return array
     */
    private function uploadImages($images)
    {
        $uploadedImages = [];

        if ($images) {
            foreach ($images as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('source/dataimages'), $imageName);
                $uploadedImages[] = 'source/dataimages/' . $imageName;
            }
        }

        return $uploadedImages;
    }

    /**
     * Handle the upload of the cover image.
     *
     * @param  \Illuminate\Http\UploadedFile|null  $coverImage
     * @return string|null
     */
    private function uploadCoverImage($coverImage)
    {
        if ($coverImage) {
            $coverImageName = time() . '_' . $coverImage->getClientOriginalName();
            $coverImage->move(public_path('source/dataimages'), $coverImageName);
            return 'source/dataimages/' . $coverImageName;
        }

        return null;
    }
}


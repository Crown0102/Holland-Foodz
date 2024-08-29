<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;
use App\Models\Category;
use App\Models\SalesPoint;
use App\Models\Chief;
use App\Models\CustomerReview;

class ProductController extends Controller {

    public function home() {
        $candyProducts = Product::where('type', 'candy')->get();
        $diaryProducts = Product::where('type', 'diary')->get();

        return view('index', ['candyProducts'=>$candyProducts, 'diaryProducts'=>$diaryProducts]);
    }

    // public function about() {
    //     $products = Product::all();
    //     $chiefs = Chief::all();
    //     $reviews = CustomerReview::all();

    //     return view('about', ['products'=>$products, 'chiefs'=>$chiefs, 'reviews'=>$reviews]);
    // }

    public function salespoints() {
        $salespoints = SalesPoint::all();  
        return view('salespoint', ['salespoints'=>$salespoints]);
    }

    public function salespoint($title) {
        $titleUC = ucwords(str_replace("-", " ", $title));
        $salespoint = SalesPoint::where('title', $titleUC)->first();
        $salespoints = SalesPoint::all();
        return view('salespoint-detail', ['salespoint'=>$salespoint, 'salespoints'=>$salespoints]);
    }

    public function contact() {
              
        return view('contact');
    }

    public function candy(Request $request) {

        $categories = Category::where('type','candy')->get();
        $candyAvailableCategories = $request->session()->get('candyAvailableCategories', []);
        $candySelectedCategories = $request->session()->get('candySelectedCategories', []);
        $currentCategory = $request->input('category_id');
        if ($currentCategory && !in_array($currentCategory, $candySelectedCategories) && in_array($currentCategory, $candyAvailableCategories)) {
            $candySelectedCategories[] = $currentCategory; 
        }
        else if ($currentCategory && in_array($currentCategory, $candySelectedCategories)) {
            $candySelectedCategories = array_diff($candySelectedCategories, [$currentCategory]);
        }
        $request->session()->put('candySelectedCategories', $candySelectedCategories);
        
        if($candySelectedCategories) {
            $products = Product::whereHas('categories', function ($query) use ($candySelectedCategories) {
                $query->whereIn('categories.id', $candySelectedCategories)
                ->groupBy('products.id')
                ->havingRaw('COUNT(DISTINCT categories.id) = ?', [count($candySelectedCategories)]);
            })
            ->get();
        }
        else $products = Product::where('type','candy')->get();

        $candyAvailableCategory = Category::whereHas('products', function ($query) use ($products) {
            $query->whereIn('products.id', $products->pluck('id'));
        })->get();
        $candyAvailableCategories = $candyAvailableCategory->pluck('id')->toArray();
        $candyAvailableCategories = array_diff($candyAvailableCategories, $candySelectedCategories);
        $request->session()->put('candyAvailableCategories', $candyAvailableCategories);

        return view('candy', compact('products', 'categories', 'candyAvailableCategories', 'candySelectedCategories'));
    }

    public function diary(Request $request) {
        
        $categories = Category::where('type', 'diary')->get();
        $diaryAvailableCategories = $request->session()->get('diaryAvailableCategories', []);
        $diarySelectedCategories = $request->session()->get('diarySelectedCategories', []);
        $currentCategory = $request->input('category_id');
        if ($currentCategory && !in_array($currentCategory, $diarySelectedCategories) && in_array($currentCategory, $diaryAvailableCategories)) {
            $diarySelectedCategories[] = $currentCategory; 
        }
        else if ($currentCategory && in_array($currentCategory, $diarySelectedCategories)) {
            $diarySelectedCategories = array_diff($diarySelectedCategories, [$currentCategory]);
        }
        $request->session()->put('diarySelectedCategories', $diarySelectedCategories);
        
        if($diarySelectedCategories) {
            $products = Product::whereHas('categories', function ($query) use ($diarySelectedCategories) {
                $query->whereIn('categories.id', $diarySelectedCategories)
                ->groupBy('products.id')
                ->havingRaw('COUNT(DISTINCT categories.id) = ?', [count($diarySelectedCategories)]);
            })
            ->get();
        }
        else $products = Product::where('type','diary')->get();

        $diaryAvailableCategory = Category::whereHas('products', function ($query) use ($products) {
            $query->whereIn('products.id', $products->pluck('id'));
        })->get();
        $diaryAvailableCategories = $diaryAvailableCategory->pluck('id')->toArray();
        $diaryAvailableCategories = array_diff($diaryAvailableCategories, $diarySelectedCategories);
        $request->session()->put('diaryAvailableCategories', $diaryAvailableCategories);

        return view('diary', compact('products', 'categories', 'diaryAvailableCategories', 'diarySelectedCategories'));
    }

    public function products($category) {

        $products = Product::where('category', strtoupper(str_replace("-", " ", $category)))->get();

        return view('products', ['products'=>$products, 'category'=>$category]);
    }

    public function detail($productName) {
        $singleProduct = Product::where('name', $productName)->first();
        $type = $singleProduct->type;
        $id = $singleProduct->id;
        $relatedProducts = Product::where('type', $type)->get();
        $customerReviews = CustomerReview::where('productId', $id)->where('productType', $type)->get();
        return view('single-product', ['type'=>$type,'singleProduct'=>$singleProduct, 'relatedProducts'=>$relatedProducts, 'customerReviews'=>$customerReviews]);
    }

    public function store(Request $request, Response $response) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'productId' => 'required|integer',
            'productType' => 'required|string|max:255',
            'score' => 'required|numeric',
            'comment' => 'required|string|max:10000',
        ]);

        // dd($response);

        try {
            CustomerReview::create([
                'name' => $request->name,
                'email' => $request->email,
                'productId' => $request->productId,
                'productType' => $request->productType,
                'score' => $request->score,
                'comment' => $request->comment
            ]);
            return redirect()->back()->with('success', 'Review submitted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to submit review: ' . $e->getMessage()]);
        }
        
    }
}

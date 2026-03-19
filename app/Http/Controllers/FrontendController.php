<?php

namespace App\Http\Controllers;

use App\Enums\NewsTypeEnum;
use App\Models\Category;
use App\Models\News;
use App\Models\Order;
use App\Models\Product;
use App\Models\Project;
use App\Models\StaticPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Jorenvh\Share\Share;

class FrontendController extends BaseController
{

    public function home(){
        $this->setPageTitle(config('settings.site_title'),'Home');
        $page_type = 'home';
        return view('home',compact('page_type'));
    }
    

    public function aboutUs(){
        $this->setPageTitle(config('settings.site_title'),'About Us');
        $page_type = 'about';
        $content = StaticPage::aboutContent();
        return view('about-us',compact('content','page_type'));
    }

    public function categoryProduct($slug){
        $this->setPageTitle(config('settings.site_title'),'Products');
        $category = Category::categoryProductWithSlug($slug);
        return view('products',compact('category'));
    }
    public function productCenter(){
        $this->setPageTitle(config('settings.site_title'),'Product Center');
        $products = Product::where('status', 1)
            ->orderBy('id', 'desc')
            ->paginate(21);
        return view('product-center',compact('products'));
    }
    public function privacyPolicy()
    {
        $this->setPageTitle(config('settings.site_title'), 'Privacy Policy');
        return view('privacy-policy');
    }
    public function productDetail($slug){
       $product = Product::productDetail($slug);
        if(!$product){
            abort(404);
        }
        $this->setPageTitle(config('settings.site_title'), $product['name'], $product['meta_tags'], $product['meta_description'], $product['meta_title']);
        $image = asset('storage/'.$product['image']);
        $this->setShareableLink($image);
        return view('product-detail', compact('product'));
    }

    public function service(){
        $this->setPageTitle(config('settings.site_title'),'Services');
        return view('service');
    }
    public function contactUs(){
        $this->setPageTitle(config('settings.site_title'),'Contact Us');
        return view('contact');
    }

    public function allNews(){
         $banner = StaticPage::newsBanner();
        $data =  News::paginate(10);
        $this->setPageTitle(config('settings.site_title'),'News');
        $name = 'All News';
        return view('all-news',compact('data','name','banner'));
        
    }

    public function OurProjects(){
        $this->setPageTitle(config('settings.site_title'), 'Our Projects');
        
        // Fetch active projects with pagination
        $data = Project::where('status', 1)
            ->orderBy('sorting', 'asc')
            ->orderBy('id', 'desc')
            ->paginate(12);
            
        $name = 'Our Projects';
        $banner = StaticPage::projectBanner(); // Use project banner from static pages
        
        return view('our-project', compact('data', 'name', 'banner'));
    }

    public function projectDetail($slug){
        $data = Project::where('slug', $slug)->where('status', 1)->firstOrFail();
        
        $this->setPageTitle(config('settings.site_title'), $data->title);
        
        return view('project-detail', compact('data'));
    }

    public function singleNews($slug) {
         $data = News::newsDetail($slug);
        $this->setPageTitle(config('settings.site_title'),'News Details');
        return view('single-news-detail',compact('data'));
    }

    public function news($news_type){
        $banner = StaticPage::newsBanner();
        if($news_type== strtolower('new-products')){
            $type = NewsTypeEnum::NEW_PRODUCTS;
            $name ="New Products";
        }elseif ($news_type == strtolower('industry-new')){
            $type = NewsTypeEnum::INDUSTRY_NEWS;
            $name ="Industry News";
        }elseif ($news_type == strtolower('exhibition-news')){
            $type = NewsTypeEnum::EXHIBITION_NEWS;
            $name ="Exhibition News";
        }elseif($news_type == strtolower('certification')){
            $name ="Certification";
            $type = NewsTypeEnum::CERTIFICATION;
            $banner = StaticPage::certificationBanner();
        }else{
            $name ="Company News";
            $type = NewsTypeEnum::COMPANY_NEWS;
        }
        $data = News::activeNews($type->value);
        $this->setPageTitle(config('settings.site_title'),'News');
        return view('news',compact('data','news_type','name','banner'));
    }
    public function newsDetail($type,$slug)
    {
        $data = News::newsDetail($slug);
        $this->setPageTitle(config('settings.site_title'),'News Details');
        return view('news-detail',compact('data','type'));

    }
    public function cart(){
        $cart =  \Cart::getContent()->count();
        if($cart<=0){
            return redirect(route('frontend.home'));
        }
        $this->setPageTitle(config('app.name'),'Cart');
        return view('cart');
    }

    public function checkout(){
       $cart =  \Cart::getContent()->count();
        if($cart<=0){
            return redirect(route('frontend.home'));
        }
        $this->setPageTitle(config('settings.site_title'),'Checkout');
        return view('checkout');
    }


    public function completeOrder($order_no){
        $order = Order::where('order_no',$order_no)->select('id')->first();
        if($order) {
            $this->setPageTitle('Order Complete', 'Order Complete');
            return view('order-complete',compact('order_no'));
        }else{
            return redirect(route('frontend.home'));
        }
    }

    public function myAccount(){
        $this->setPageTitle('User', 'User Account');
        return view('user');
    }

    public function search(Request $request){
        $this->validate($request,[
            'key' => 'required'
        ]);
        $this->setPageTitle(config('settings.site_title'),'Products');
        $products = Product::where('name','like','%' . $request->input('key') . '%')->limit(15)->get()?->toArray();
        return view('search-products',compact('products'));
    }
    
     public function inquire()
    {
        $this->setPageTitle('Inquire', 'Inquire');
        return view('inquire');
    }

    public function inquireSuccess()
    {
        $this->setPageTitle('Inquire', 'Inquire Success');
        return view('inquire-success');
    }
}

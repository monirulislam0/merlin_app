<?php

namespace App\Http\Livewire\Products;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Trait\CartTrait;
use Jorenvh\Share\Share;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product;

    public function mount($productId)
    {
        // Assuming you're fetching the product as an array
        $this->product = Product::findOrFail($productId)->toArray();
        $this->setOpenGraphTags();
    }

    public function render()
    {
        $this->setOpenGraphTags();
        return view('livewire.product-detail');
    }

private function setOpenGraphTags()
{
    $imageUrl = isset($this->product['images'][0]['image_link']) 
        ? asset('storage/products/' . $this->product['images'][0]['image_link'])
        : '';

    $description = Str::limit(strip_tags($this->product['description'] ?? ''), 200);

    $this->dispatchBrowserEvent('setOpenGraphTags', [
        'title' => $this->product['name'] ?? 'Product',
        'description' => $description,
        'image' => $imageUrl,
        'url' => url()->current(),
        'appId' => config('services.facebook.app_id'),
    ]);
}
}

class Detail extends Component
{
    use CartTrait;
    public $attributs;
    public $images;
    public $product;
    public $related_products;
    public $shareButton;
    public $price_after_discount;
    public function mount($product){
       $this->images    = $product['images'];
       $this->product = $product;
        $this->price_after_discount = $this->price_after_discount($this->product);
       $categories = ProductCategory::where('product_id',$product['id'])->select('category_id')->get();
        $this->related_products = Product::leftJoin('product_categories','products.id','=','product_categories.product_id')
            ->whereIn('product_categories.category_id',$categories)
            ->where('product_categories.product_id','!=',$product['id'])
            ->select('products.id','products.name','products.image','products.slug')
            ->limit(4)->get();
    }
    public function product_add_to_cart($id){
        $cart =  $this->addItem($id);
        if($cart){
            $this->emit('shoppingCartCount');
            $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Product added to cart successfully.']);
        }else {
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Product can not add to cart!.']);
        }
        return redirect(route('frontend.cart'));
    }
    
    public function price_after_discount($product)
    {
        if($product['discount']>0){
          return $product['price']- ($product['discount']*$product['price']/100);
        }
        return $product['price'];
    }
    
    public function inquire($id)
    {
        $add = $this->addInquire($id);
        if ($add) {
            return redirect()->route('frontend.inquire');
        }
        $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Something is wrong.']);
    }
    public function render()
    {
        return view('livewire.products.detail');
    }
}

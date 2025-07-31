<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
class UserController extends Controller
{
      public function showMenu()
{
    $userID = Auth::id();

    // Group products by category
    $products = Product::all()->groupBy('product_category');

    return view('user.menu', [
        'products' => $products,
    ]);
}



    

             public function userOnly()
    {
        return view('user.only');
    }


  public function sellView(Request $request)
    {
$user = Auth::user();

if ($user && $user->is_seller) {
     $cats = $request->get('cat_name');
        $search = $request->get('search');

        if(!$cats && !$search){
        $userID=Auth::id();
    
        
        $products = Product::where('seller_id', $userID)->paginate(6);
        $categories = Product::select('product_category')->distinct()->get();

return view('user.sellView', [
    'products' => $products,
    'categories'=> $categories
]);
}

else{
$userID=Auth::id();
   if($cats){       
     
     
        
        $products = Product::where('seller_id', $userID)->
        where('product_category', $cats)->paginate(6);
        $categories = Product::select('product_category')->distinct()->get();

return view('user.sellView', [
    'products' => $products,
    'categories'=> $categories
]);


}if($search){

     $products= Product::where('product_name', 'like', '%'. $search. '%')->
     where('seller_id', $userID)->paginate(10);
     $categories = Product::select('product_category')->distinct()->get();
    return view('user.sellView',[
        'products'=>$products,
        'categories'=> $categories
    ]);

}

    
}

}else{

return view("store.setUp");

}




     

    }
}

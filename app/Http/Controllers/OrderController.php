<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Get login client id
        if(session()->has('loggedin')){
            $client = DB::table('client_login')
            ->select('*')
            ->where('client_id', '=', session('loggedin'))
            ->first();
        }

        // Generate max order id
        $maxOrderIDSql = DB::table('food_order')
        ->select(DB::raw('max(order_id) as maxOrderId'))
        ->first();

        $orderId = $maxOrderIDSql->maxOrderId + 1;

        $order = new Order();
        $order->client_id = $client->client_id;
        $order->save();

        //Insert or update food order items
        if(session('cart')){
            foreach(session('cart') as $cart){
                DB::table('order_food_list')
                ->updateOrInsert(
                    [
                        'order_id' => $orderId,
                        'fp_id' => $cart['fp_id']
                    ],
                    [
                        'order_id' => $orderId,
                        'shop_id' => $cart['shop_id'],
                        'fp_id' => $cart['fp_id'],
                        'qty' => $cart['qty'],
                        'unit_price' => $cart['fp_price']
                    ]
                );
            }
        }

        // unset cart
        $request->session()->forget('cart');

        //Retrun redirect to back with message
        return redirect()->back()->with('success', 'Your order was placed successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Fetch all shop details
     */
    public function fetchAllShop()
    {
        $shop = DB::table('food_shop')
        ->select('*')
        ->get();

        // $foods = DB::table('food_list')
        // ->select('*')
        // ->get();

        if(session()->has('loggedin')){
            $client = DB::table('client_login')
            ->select('*')
            ->where('client_id', '=', session('loggedin'))
            ->first();

            $user_data = $client;
        }

        return view('food-package', compact('shop', 'user_data'));
    }

    /**
     * Add foods to cart
     */
    public function addtocart(Request $request, int $fp_id)
    {
        $food = DB::table('food_package')
        ->select('*')
        ->join('food_shop', 'food_shop.shop_id', '=', 'food_package.shop_id')
        ->where('fp_id', '=', $fp_id)
        ->first();

        // Define cart session
        $cart = session()->get('cart', []);

        /**
         * First check cart is empty or not
         * if empty first item to cart
         */
        if(empty($cart)){
            $cart = [
                $fp_id => [
                    'fp_id' => $fp_id,
                    'shop_id' => $food->shop_id,
                    'shop_name' => $food->shop_name,
                    'image' => $food->image,
                    'fp_description' => $food->fp_description,
                    'fp_price' => $food->fp_price,
                    'qty' => $request->get('qty')
                ]
            ];

            // Add item to cart session
            session()->put('cart', $cart);

            // Redirect to food gallery page with message
            return redirect()->back()->with('success', 'Food added to cart');
        }else{
            //Else cart is not empty check item already exit or not
            if(isset($cart[$fp_id])){

                // Redirect to food gallery page with message
                return redirect()->back()->with('error', 'This food already added to cart.');

            }else{

                // item did't exit cart add as a new item
                $cart[$fp_id] = [
                    'fp_id' => $fp_id,
                    'shop_id' => $food->shop_id,
                    'image' => $food->image,
                    'fp_description' => $food->fp_description,
                    'fp_price' => $food->fp_price,
                    'qty' => $request->get('qty')
                ];

                // Add item to cart session
                session()->put('cart', $cart);

                // Redirect to food gallery page with message
                return redirect()->back()->with('success', 'Food added to cart');
            }
        }
    }

    /**
     * Update cart quantity
     */
    public function updateCartQuantity(Request $request)
    {
        $qty = $request->qty;
        $cart = session()->get('cart');
        if(isset($cart[$request->fp_id]))
        {
            $cart[$request->fp_id]['qty'] = $qty;
            session()->put('cart', $cart);
            return redirect()->back()->with('status', 'Cart updated succesfully.');
        }
    }

    /**
     * Empty full cart
     */
    public function emptyCart(Request $request)
    {
        $request->session()->forget('cart');

        return redirect()->back()->with('success', 'Cart item removed successfully.');
    }

    /**
     * Remove cart item - single item
     */
    public function removeCartItem(Request $request, int $fp_id)
    {
        $cart = session()->get('cart');
        if(isset($cart[$fp_id]))
        {
            unset($cart[$fp_id]);
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('status', 'Item removed successfully');
    }

    /**
     * Get shop related foods
     */
    public function foodGallery(int $shop_id)
    {
        $foods = DB::table('food_package')
        ->select('*')
        ->join('food_shop', 'food_shop.shop_id', '=', 'food_package.shop_id')
        ->where('food_package.shop_id', '=', $shop_id)
        ->get();

        return view('food-gallery', compact('foods'));
    }
}

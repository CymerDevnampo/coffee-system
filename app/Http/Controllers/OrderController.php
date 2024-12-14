<?php

namespace App\Http\Controllers;

use App\Orders;
use App\OrderItems;
use App\CartItems;
use App\Carts;
use App\Products;
use App\TrackOrders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function addToCart(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Find or create a cart for the user
        $cart = Carts::firstOrCreate(['user_id' => Auth::id()]);

        // Find the product
        $product = Products::find($validatedData['product_id']);

        // Find or create a cart item
        $cartItem = CartItems::firstOrCreate(
            ['cart_id' => $cart->id, 'product_id' => $product->id],
            ['quantity' => 0, 'price' => $product->price]
        );

        // Update the quantity and price
        $cartItem->quantity += $validatedData['quantity'];
        $cartItem->price = $product->price * $cartItem->quantity;
        $cartItem->save();

        return response()->json(['message' => 'Item added to cart!', 'cartItem' => $cartItem], 201);
    }

    public function getDataCart()
    {
        $cart = Carts::with('items.product')->where('user_id', Auth::id())->first();

        return response()->json(['cart' => $cart]);
    }

    public function createOrder(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'products' => 'required|array',
            'products.*.product_id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
        ]);

        // Create a new order
        $order = new Orders();
        $order->user_id = Auth::id(); // Assuming user is authenticated
        $order->price = 0; // Initialize total price
        $order->status = 'pending'; // Set initial status
        $order->save();

        // Calculate total price and create order items
        $totalPrice = 0;
        foreach ($validatedData['products'] as $productData) {
            $product = Products::find($productData['product_id']);

            $orderItem = new OrderItems();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $product->id;
            $orderItem->quantity = $productData['quantity'];
            $orderItem->price = $product->price * $productData['quantity'];
            $orderItem->save();

            $totalPrice += $orderItem->price;

            // Add to order tracking
            $orderTracking = new TrackOrders();
            $orderTracking->order_id = $order->id;
            $orderTracking->user_id = Auth::id();
            $orderTracking->product_id = $product->id;
            $orderTracking->quantity = $productData['quantity'];
            $orderTracking->price = $orderItem->price;
            $orderTracking->status = 'pending';
            $orderTracking->save();
        }

        // Update the total price of the order
        $order->price = $totalPrice;
        $order->save();

        // Clear the cart
        $cart = Carts::where('user_id', Auth::id())->first();
        if ($cart) {
            foreach ($cart->items as $cartItem) {
                $cartItem->delete();
            }
            $cart->delete();
        }

        return response()->json(['message' => 'Order created successfully!', 'order' => $order], 201);
    }

    public function getDataTrackOrder()
    {
        $trackOrder = TrackOrders::with('product')->where('user_id', Auth::id())->get();

        return response()->json(['orders' => $trackOrder]);
    }

}

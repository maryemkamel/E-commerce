<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;
use App\Models\Order_items;
use Srmklive\PayPal\Services\ExpressCheckout;
use Illuminate\Http\Request;

class PaypalPaymentController extends Controller
{public function __construct()
    {
        $this->middleware("auth");
    }

    //
    public function handlePayment()
    {
        $data = [];
        $data['items'] = [];

        foreach (\Cart::getContent() as $item) {
            array_push($data['items'], [
                'name' => $item->name,
                'price' => (int) ($item->price / 9),
                'desc' => $item->associatedModel->description,
                'qty' => $item->quantity
            ]);
        }


        $data['invoice_id'] = auth()->user()->id;
        $data['invoice_description'] = "Commande #{$data['invoice_id']}";
        $data['return_url'] = route('success.payment');
        $data['cancel_url'] = route('cancel.payment');

        $total = 0;
        foreach ($data['items'] as $item) {
            $total += $item['price'] * $item['qty'];
        }

        $data['total'] = $total;
        $paypalModule = new ExpressCheckout;

        $res = $paypalModule->setExpressCheckout($data);
        $res = $paypalModule->setExpressCheckout($data, true);

        return redirect($res['paypal_link']);
    }



    public function paymentCancel()
    {
        return redirect()->route('cart.index')->with([
            'info' => 'Order canceled'
        ]);
    }
    public function paymentSuccess(Request $request)
    {
        $paypalModule = new ExpressCheckout;
        $response = $paypalModule->getExpressCheckoutDetails($request->token);
        $orderitem=new Order_items();
        $orderitem->user_id=auth()->user()->id;
        $orderitem->name=auth()->user()->name;
        

        $orderitem->tracking_no='ORD-'.uniqid();
       
     $total=0;
     $quantite_elem=0;
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            foreach (\Cart::getContent() as $item) {
                $total+=($item->price * $item->quantity);
                $quantite_elem +=1;
            }
            $orderitem->total_price= $total;
            $orderitem->quantite_elem=$quantite_elem;
            $orderitem->paid = 1;
             $orderitem->save();
            foreach (\Cart::getContent() as $item) {
               $total+=($item->price * $item->quantity);
                Order::create([
                    "user_id" => auth()->user()->id,
                    "orderitem_id" => $orderitem->id,
                    "product_name" => $item->name,
                    "qty" => $item->quantity,
                    "price" => $item->price,
                    "total" => $item->price * $item->quantity,
                  
                ]);
           
               $prod=Product::where('id',$item->associatedModel->id)->first();
               $prod->inStock= $prod->inStock - $item->quantity;
               if( $prod->inStock==0)
               {
                $prod->delete();
               }
               else{$prod->update();}
               
                \Cart::clear();
              
            }
            return redirect()->route('welcome')->with([
                'success' => 'Paid successfully'
            ]);
        }
    }
}
<?php

namespace App\Http\Controllers;


class WebController extends Controller
{

    public function yourBouquet(){
        $products=Product::where('type','raw')->get();        
        return view('yourBouquet')->with("products", $products);
    }

    public function yourBouquetCart(Request $request){
        
        $orderData = $request->bouquetData;
        $orderDecoded = json_decode($orderData);

       //return 'hola'.$request->bouquetData;

       //TEST CREAR PRODUCTO
       $productN = new Product();
      // $productN->id=999;
       $productN->parent_id = NULL;
       $productN->order = 0;
       $productN->active = true;
       $productN->sku = 'TT-999';
       $productN->name = AppHelper::setLanguages('Ramo Personalizado','Ram Personalitzat','Personalized Bouquet');
       $productN->es_slug = AppHelper::createSlug($productN->getLocalizedName('es'),'es');
       $productN->ca_slug = AppHelper::createSlug($productN->getLocalizedName('ca'),'ca');
       $productN->en_slug = AppHelper::createSlug($productN->getLocalizedName('en'),'en');
       $productN->categories = '0PPP0';
       $productN->tags = 'personalizado';
       $productN->description = AppHelper::setLanguages('','','');
       $productN->price = end($orderDecoded);
       $productN->sale_price = 0;
       $productN->images = '';
       $productN->type='variable';
       $productN->save();
        //TEST GUARDAR CARRITO
        //dd($productN['id']);
        $cart = \Cart::session($request->session()->get('_token'));
            $product = Product::find($productN->id);
            $cart->add([
                'id' => $productN->id,
                'name' => $productN->getLocalizedName(),
                'price' => end($orderDecoded),
                'quantity' => 1,
                'attributes' => $orderDecoded,
            ]);

            $items = explode(',',$request->items);
            foreach( $items as $item ) {
                if( $item ) {
                   // dd($item);
                    $product = Product::find($item);
                    $cart->add([
                        'id' => $product->id,
                        'name' => $product->getLocalizedName(),
                        'price' => end($precioFinal),
                        'quantity' => 1,
                        'attributes' => array(),
                    ]);
                }
            }
        $items = $cart->getContent();
        $cart_items = array();
        foreach( $items as $item ) {
            $product = Product::find($item->id);
            //dd($item->id);
            $sku = $product->sku;
            if( $product->images ) {
                $images = explode('|',$product->images );
                $image = $images[0];
            } else {
                $image = 'ramsupreme.png';
            }
            $cart_items[] = ['qty'=>$item->quantity,'id'=>$item->id,'name'=>$item->name,'price'=>$item->price,'sku'=>$sku,'image'=>$image, 'attributes'=>json_encode($item->attributes)];
            file_put_contents( storage_path().'/logs/carla.log', "\n". __FILE__ .":". __LINE__ ."\n".var_export($cart_items, true)."\n", FILE_APPEND );

        }
        return view('cart')->with('complements',Product::getAllComplements())->with('items',$cart_items)->with('jsonData','{"items":[1]}');
        


    }

}

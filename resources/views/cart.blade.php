@extends('layouts.app')
@section('title', 'FrostFree | Cart')
@section('addCss')
  <style>
    .product-opt{

    }

    @media (min-width: 700px){
      .product-opt{
        display: flex; 
        justify-content: space-between; 
        margin-top: 5em;
      }
    }
  </style>
@endsection
@section('content')
  <?php $subTotal = 0 ?>
  <div class="content-container" style="margin-top: 6em">
    <div class="container">
      <div class="row">
        <div class="col-md-12 main-wrap">
          <div class="main-content">
            <div class="shop">
              <form method="post" action="{{route('carts.update')}}">
                @csrf 
                @method('PUT')
                <table class="table shop_table cart">
                  <thead>
                    <tr>
                      <th class="product-remove hidden-xs">&nbsp;</th>
                      <th class="product-thumbnail hidden-xs">&nbsp;</th>
                      <th class="product-name">Product</th>
                      <th class="product-price text-center">Price</th>
                      <th class="product-quantity text-center">Quantity</th>
                      <th class="product-subtotal text-center hidden-xs">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($cartProducts as $cart)
                      <tr class="cart_item">
                        <td class="product-remove hidden-xs">
                          <?php $pid = $cart['id']?>
                          <a style="cursor: pointer" onclick="event.preventDefault(); document.getElementById('cart-del-form{{$pid}}').submit();" 
                            class="remove" title="Remove this item">&times;</a>
                        </td>
                        <td class="product-thumbnail hidden-xs">
                          <a href="#">
                            <?php $image = $cart['product_image']?>
                            <img width="100" height="150" src={{url("uploads/products/$image")}} alt="Product-1"/>
                          </a>
                        </td>
                        <td class="product-name">
                          <a href="#">{{$cart['product_name']}}</a>
                          <dl class="variation">
                            <dt class="variation-Color">Category:</dt>
                            <dd class="variation-Color"><p>{{$cart['category_name']}}</p></dd>
                            <dt class="variation-Size">Shop:</dt>
                            <dd class="variation-Size"><p>{{$cart['shop_name']}}</p></dd>
                          </dl>
                        </td>
                        <td class="product-price text-center">
                          <span class="amount">&pound;{{$cart['product_price']}}</span>
                        </td>
                        <td class="product-quantity text-center">
                          <div class="quantity">
                            <input type="number" step="1" min="1" name="{{$pid}}" value="<?php echo $cart['quantity'] ?>" title="Qty" class="input-text qty text" size="4"/>
                          </div>
                        </td>
                        <td class="product-subtotal hidden-xs text-center">
                          <?php
                            $subTotal += $cart['quantity'] * $cart['product_price'];
                          ?>
                          <span class="amount">&pound;{{$cart['quantity'] * $cart['product_price']}}</span>
                        </td>
                      </tr>
                    @empty 
                      <tr>
                        <td colspan="6" style="text-align: center; font-size: 18px;">Your cart is currently empty.</td>
                      </tr>
                    @endforelse 
                    @if(sizeOf($cartProducts) > 0)
                      <tr>
                        <td colspan="6" class="actions">
                          <input type="submit" class="button update-cart-button" name="update_cart" value="Update Cart"/>
                        </td>
                      </tr>
                    @endif
                  </tbody>
                </table>
              </form>
              @forelse($cartProducts as $cart) 
                <?php $pid = $cart['id']?>
                <form method="POST" id="cart-del-form{{$pid}}" style="display:none" 
                  action="{{route('carts.destroy', $pid)}}">
                  @csrf 
                  @method('DELETE')
                </form>
              @empty
              @endforelse
              @if(sizeOf($cartProducts) > 0)
                <div class="cart-collaterals">
                  <div class="cart_totals">
                    <h2>Cart Totals</h2>
                    <table>
                      <tr class="cart-subtotal">
                        <th>Subtotal</th>
                        <td><span class="amount">&pound;{{$subTotal}}</span></td>
                      </tr>
                      <tr class="shipping">
                        <th>Discount</th>
                        <td><span class="amount">&pound;0.00</span></td>
                      </tr>
                      <tr class="order-total">
                        <th>Total</th>
                        <td><strong><span class="amount">&pound;56.00</span></strong></td>
                      </tr>
                    </table>
                    <div class="wc-proceed-to-checkout">
                      <a href="#" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
                    </div>
                  </div>
                  
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('injectJQuery')
  <script type='text/javascript' src='{{ URL::asset('js/core.min.js') }}'></script>
  <script type='text/javascript' src='{{ URL::asset('js/widget.min.js') }}'></script>
  <script type='text/javascript' src='{{ URL::asset('js/mouse.min.js') }}'></script>
  <script type='text/javascript' src='{{ URL::asset('js/slider.min.js') }}'></script>
  <script type='text/javascript' src='{{ URL::asset('js/jquery-ui-touch-punch.min.js') }}'></script>
  <script type='text/javascript' src='{{ URL::asset('js/price-slider.js') }}'></script>

  <script>
    const elements = document.querySelectorAll('.underline');
    elements.forEach(element => {
      element.style.color = 'black';
    });

    const search = document.querySelectorAll('.navbar-search-button')[1];
    search.style.color = 'black';

    const cart = document.querySelector('.minicart-link');
    cart.style.color = 'black';
  </script>
@endsection
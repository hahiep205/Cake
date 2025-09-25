<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAKE - Cart</title>
    <link rel="stylesheet" href="{{asset('backend/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>

    @include('backend.auth.header')
    
    <section class="section section_profile">
        <div class="container profile">
            
            <h2 class="section_title"><i class="ri-shopping-cart-line"></i> Shopping Cart</h2>

            <div class="cart_container">
                
                <!-- Danh sách sản phẩm -->
                <div class="cart_items">

                    <div class="cart_item">
                        <div class="cart_item_image">
                            <img src="backend/imgs/cake1-1.jpg" alt="">
                        </div>
                        <div class="cart_item_details">

                            <h3 class="cart_item_name">Nama Matcha Chocolate</h3>

                            <p class="cart_item_code">NMC-2509</p>

                            <div class="form_group">

                                <label for="note"><strong>Note:</strong></label><br>
                                <textarea id="note" name="note" rows="2" required>{{ old('note', auth()->user()->note) }}</textarea>


                            </div>

                            <div class="cart_item_price">$25.99</div>
                            <div class="cart_item_actions">
                                
                                <div class="quantity_controls">

                                    <button class="quantity_btn">-</button>
                                        <span class="quantity">1</span>
                                    <button class="quantity_btn quantity">+</button>

                                </div>

                                <button class="remove_btn"><i class="ri-delete-bin-6-line"></i></button>

                            </div>
                        </div>
                    </div>

                    <!-- Button Continue Shopping -->
                    <div class="continue_shopping">
                        <a href="dashboard#popular"><button class="continue_btn hover-slide-left">
                            <i class="ri-arrow-left-line"></i> CONTINUE SHOPPING
                        </button></a>
                    </div>

                </div>

                <!-- Bảng tính tiền -->
                <div class="order_summary">
                    <div class="summary_box">
                        <h3 class="summary_title">ORDER SUMMARY</h3>

                        <div class="summary_line">
                            <span class="items_count">Items:</span>
                            <span>1</span>
                        </div>
                        
                        <div class="summary_line">
                            <span>Subtotal</span>
                            <span>$25.99</span>
                        </div>
                        
                        <div class="summary_line">
                            <span>Discount</span>
                            <span>$0</span>
                        </div>
                        
                        <div class="summary_total">
                            <span>Total</span>
                            <span>$25.99</span>
                        </div>
                        
                        <p class="summary_note">Free shipping on all orders.</p>
                        
                        <button class="checkout_btn hover-slide-left">PROCEED TO CHECKOUT</button>
                    </div>
                </div>
            </div>

        </div>
    </section>    

    @include('backend.auth.footer')
	
</body>
</html>
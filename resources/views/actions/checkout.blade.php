@extends('app')
@section('contents')
    <!--=============================================
    =            breadcrumb area         =
    =============================================-->

    <div class="breadcrumb-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="{{route('homepage')}}"><i class="fa fa-home"></i> Home</a></li>
                            <li class="active">Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of breadcrumb area  ======-->

    <!--=============================================
    =            Checkout page content         =
    =============================================-->

    <div class="page-section section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Checkout Form s-->
                    <form action="#" class="checkout-form">
                        <div class="row row-40">

                            <div class="col-lg-7 mb-20">

                                <!-- Billing Address -->
                                <div id="billing-form" class="mb-40">
                                    <h4 class="checkout-title">Sitting Location</h4>

                                    <div class="row">

                                        {{--<div class="col-md-6 col-12 mb-20">
                                            <label>First Name*</label>
                                            <input type="text" placeholder="First Name">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Last Name*</label>
                                            <input type="text" placeholder="Last Name">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Email Address*</label>
                                            <input type="email" placeholder="Email Address">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Phone no*</label>
                                            <input type="text" placeholder="Phone number">
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Company Name</label>
                                            <input type="text" placeholder="Company Name">
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Address*</label>
                                            <input type="text" placeholder="Address line 1">
                                            <input type="text" placeholder="Address line 2">
                                        </div>--}}

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Table*</label>
                                            <select class="nice-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12 ">
                                            <label>Row*</label>
                                            <select class="nice-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <button class="place-order" style="width: 300px !important;">Pay on Delivery</button>
                                        </div>

                                        <div class="col-md-12 col-12" >
                                            <button class="place-order" style="width: 300px !important; background-color: #28a745 !important;">Pay Online</button>
                                        </div>
                                    </div>

                                </div>

                                {{--<!-- Shipping Address -->
                                <div id="shipping-form" class="mb-40">
                                    <h4 class="checkout-title">Shipping Address</h4>

                                    <div class="row">

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>First Name*</label>
                                            <input type="text" placeholder="First Name">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Last Name*</label>
                                            <input type="text" placeholder="Last Name">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Email Address*</label>
                                            <input type="email" placeholder="Email Address">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Phone no*</label>
                                            <input type="text" placeholder="Phone number">
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Company Name</label>
                                            <input type="text" placeholder="Company Name">
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Address*</label>
                                            <input type="text" placeholder="Address line 1">
                                            <input type="text" placeholder="Address line 2">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Country*</label>
                                            <select class="nice-select">
                                                <option>Bangladesh</option>
                                                <option>China</option>
                                                <option>country</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Town/City*</label>
                                            <input type="text" placeholder="Town/City">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>State*</label>
                                            <input type="text" placeholder="State">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Zip Code*</label>
                                            <input type="text" placeholder="Zip Code">
                                        </div>

                                    </div>

                                </div>--}}

                            </div>

                            <div class="col-lg-5">
                                <div class="row">

                                    <!-- Cart Total -->
                                    <div class="col-12 mb-60">

                                        <h4 class="checkout-title">Cart Total</h4>

                                        <div class="checkout-cart-total">

                                            <h4>Product <span>Total</span></h4>

                                            <ul>
                                                <li>Cocacola X 02 <span>N160.00</span></li>
                                                <li>Fanta X 02 <span>N200.00</span></li>
                                            </ul>

                                            <p>Sub Total <span>N360.00</span></p>
                                            <p>Shipping Fee <span>N00.00</span></p>

                                            <h4>Grand Total <span>N360.00</span></h4>

                                        </div>

                                    </div>

                                    <!-- Payment Method -->
                                    {{--<div class="col-12">

                                        <h4 class="checkout-title">Payment Method</h4>

                                        <div class="checkout-payment-method">

                                            <div class="single-method">
                                                <input type="radio" id="payment_check" name="payment-method" value="check">
                                                <label for="payment_check">Check Payment</label>
                                                <p data-method="check">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                            </div>

                                            <div class="single-method">
                                                <input type="radio" id="payment_bank" name="payment-method" value="bank">
                                                <label for="payment_bank">Direct Bank Transfer</label>
                                                <p data-method="bank">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                            </div>

                                            <div class="single-method">
                                                <input type="radio" id="payment_cash" name="payment-method" value="cash">
                                                <label for="payment_cash">Cash on Delivery</label>
                                                <p data-method="cash">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                            </div>

                                            <div class="single-method">
                                                <input type="radio" id="payment_paypal" name="payment-method" value="paypal">
                                                <label for="payment_paypal">Paypal</label>
                                                <p data-method="paypal">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                            </div>

                                            <div class="single-method">
                                                <input type="radio" id="payment_payoneer" name="payment-method" value="payoneer">
                                                <label for="payment_payoneer">Payoneer</label>
                                                <p data-method="payoneer">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                            </div>

                                            <div class="single-method">
                                                <input type="checkbox" id="accept_terms">
                                                <label for="accept_terms">I’ve read and accept the terms & conditions</label>
                                            </div>

                                        </div>



                                    </div>--}}

                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

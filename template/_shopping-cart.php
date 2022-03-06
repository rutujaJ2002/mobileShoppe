<!--shopping cart section-->
<section id="cart" class="py-3">
            <div class="container-fluid w-75">
                <h5 class="font-baloo font-size20">Shopping Cart</h5>

                <!--shopping cart items-->
                <div class="row">
                    <div class="col-sm-9">
                        <!--cart item 1-->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="./assets/products/1.png" style="height: 120px;" alt="item1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size20">Samsung Galaxy</h5>
                                <small>by Samsung</small>
                                <!--product rating-->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-rale font-size14">20,354 ratings</a>
                                </div>

                                <!--product quantity-->
                                <div class="d-flex qty pt-2">
                                    <div class="d-flex font-rale w-25">
                                        <button class="qty-up border bg-light" data-id="pro1">
                                            <i class="fas fa-angle-up"></i>
                                        </button>
                                        <input type="text" data-id="pro1" class="qty-input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                        <button data-id="pro1" class="qty-down border bg-light">
                                            <i class="fas fa-angle-down"></i>
                                        </button>
                                    </div>
                                    <button class=" btn font-baloo mx-3 text-danger border-right">Delete</button>
                                    <button class=" btn font-baloo text-danger">Save for Later</button>
                                </div>


                            </div>
                            <div class="col-sm-2 text-right">
                                <div class="font-size20 text-danger font-baloo">
                                    $<span class="product-price">152</span>
                                </div>
                            </div>
                        </div>

                        <!--cart item 2-->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="./assets/products/2.png" style="height: 120px;" alt="item1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size20">Redmi Note 7</h5>
                                <small>by Redmi</small>
                                <!--product rating-->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-rale font-size14">12,165 ratings</a>
                                </div>

                                <!--product quantity-->
                                <div class="d-flex qty pt-2">
                                    <div class="d-flex font-rale w-25">
                                        <button class="qty-up border bg-light">
                                            <i class="fas fa-angle-up"></i>
                                        </button>
                                        <input type="text" class="qty-input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                        <button class="qty-down border bg-light">
                                            <i class="fas fa-angle-down"></i>
                                        </button>
                                    </div>
                                    <button class=" btn font-baloo mx-3 text-danger border-right">Delete</button>
                                    <button class=" btn font-baloo text-danger">Save for Later</button>
                                </div>


                            </div>
                            <div class="col-sm-2 text-right">
                                <div class="font-size20 text-danger font-baloo">
                                    $<span class="product-price">152</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--subtotal section-->
                    <div class="col-sm-3">
                        <div class="sub-total txt-center mt-2 border">
                            <h6 class="font-size12 font-rale text-success py-3">
                                &nbsp;&nbsp;<i class="fas fa-check"></i>
                                Your order is eligible for free delivery
                            </h6>
                            <div class="border-top p-4">
                                <h5 class="font-baloo font-size16">Subtotal(2 item):&nbsp;<span class="text-danger">$ <span class="text-danger" id="deal-price">152.00</span>
                                </span></h5>
                                <button class="btn btn-warning mt-3" type="submit">Proceed To Buy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
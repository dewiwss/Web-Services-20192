<!-- Header Section Begin -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div>
                    <a href="{{route('form_register_shop')}}" class="mail-service"><i class=" fa fa-briefcase"></i>
                    Want to Open your Shop ?? Let's Join us
                    </a>
                </div>
            </div>
            <div class="ht-right">
                <a href="{{route('login')}}" class="login-panel "><i class="fa fa-user"></i>Login</a>
                <a href="{{route('register')}}" class="login-panel pr-5" ><i class="fa fa-user"></i>Register</a>
                <div class="lan-selector">
                    <select class="language_drop" name="countries" id="countries" style="width:300px;">
                        <option value='yt' data-image="{{asset('front/img/flag-1.jpg')}}" data-imagecss="flag yt"
                            data-title="English">English</option>
                        <option value='yu' data-image="{{asset('front/img/flag-2.jpg')}}" data-imagecss="flag yu"
                            data-title="Bangladesh">German </option>
                    </select>
                </div>
                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="{{asset('front/img/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        <button type="button" class="category-btn">All Categories</button>
                        <form action="#" class="input-group">
                            <input type="text" placeholder="What do you need?">
                            <button type="button"><i class="ti-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="heart-icon"><a href="#">
                            <i class="icon_heart_alt"></i>
                            <span>1</span>
                        </a>
                        </li>
                        <li class="cart-icon"><a href="#">
                            <i class="icon_bag_alt"></i>
                            <span>3</span>
                        </a>
                        <div class="cart-hover">
                            <div class="select-items">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="si-pic"><img src="{{asset('front/img/select-product-1.jpg')}}" alt=""></td>
                                            <td class="si-text">
                                                <div class="product-selected">
                                                    <p>$60.00 x 1</p>
                                                    <h6>Kabino Bedside Table</h6>
                                                </div>
                                            </td>
                                            <td class="si-close">
                                                <i class="ti-close"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="si-pic"><img src="{{asset('front/img/select-product-2.jpg')}}" alt=""></td>
                                            <td class="si-text">
                                                <div class="product-selected">
                                                    <p>$60.00 x 1</p>
                                                    <h6>Kabino Bedside Table</h6>
                                                </div>
                                            </td>
                                            <td class="si-close">
                                                <i class="ti-close"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="select-total">
                                <span>total:</span>
                                <h5>$120.00</h5>
                            </div>
                            <div class="select-button">
                                <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                            </div>
                        </div>
                    </li>
                        <li class="cart-price">$150.00</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@php
@endphp
    <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <span>All Collection</span>
                    <ul class="depart-hover">
                        {{-- <li class="active"><a href="#">Women’s Clothing</a></li> --}}

                        {{-- @foreach($categories->ChildCategory as $category)
                                <li class="active"><a href="{{route('products.index', ['category_id' => $category->id])}}">{{$category->name}}</a></li>
                        @endforeach --}}

                        <li><a href="#">Men’s Clothing</a></li>
                        <li><a href="#">Underwear</a></li>
                        <li><a href="#">Kid's Clothing</a></li>
                        <li><a href="#">Brand Fashion</a></li>
                        <li><a href="#">Accessories/Shoes</a></li>
                        <li><a href="#">Luxury Brands</a></li>
                        <li><a href="#">Brand Outdoor Apparel</a></li>
                    </ul>
                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('shop')}}">Shop</a></li>
                    <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
                    <li><a href="./contact.html">FaQ</a></li>
                    <li><a href="#">Pages</a>
                        <ul class="dropdown">
                            <li><a href="./blog-details.html">Blog Details</a></li>
                            <li><a href="{{route('cart.index')}}">Shopping Cart</a></li>
                            <li><a href="./check-out.html">Checkout</a></li>
                            <li><a href="./faq.html">Faq</a></li>
                            <li><a href="{{route('register')}}">Register</a></li>
                            <li><a href="{{route('login')}}">Login</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>
<!-- Header End -->


<!DOCTYPE html>
<html lang="en">
   <head>
      <title>FlexTop</title>
      <meta charset="utf-8">
      <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{{asset('flextop/css/jquery-ui.css')}}" rel="stylesheet">
      <link href="{{asset('flextop/css/bootstrap.css')}}" rel="stylesheet">
      <link href="{{asset('flextop/css/font-awesome.css')}}" rel="stylesheet">
      <link href="{{asset('flextop/css/flexslider.css')}}" rel="stylesheet">
      <link href="{{asset('flextop/css/gflexslider.css')}}" rel="stylesheet">
      <link href="{{asset('flextop/css/owl.carousel.css')}}" rel="stylesheet">
      <link href="{{asset('flextop/css/animate.css')}}" rel="stylesheet">
      <link href="{{asset('flextop/css/style.css')}}" rel="stylesheet">
      <script src="{{asset('flextop/js/jquery.js')}}"></script>
      <script src="{{asset('flextop/js/jquery-ui.js')}}"></script>
      <script src="{{asset('flextop/js/jquery-migrate-1.2.1.min.js')}}"></script>
      <script src="{{asset('flextop/js/jquery.easing.1.3.js')}}"></script>
      <script src="{{asset('flextop/js/superfish.js')}}"></script>
      <script src="{{asset('flextop/js/jquery.flexslider.js')}}"></script>
      <script src="{{asset('flextop/js/owl.carousel.js')}}"></script>
      <script src="{{asset('flextop/js/jquery.appear.js')}}"></script>
      <script src="{{asset('flextop/js/jquery.caroufredsel.js')}}"></script>
      <script src="{{asset('flextop/js/jquery.touchSwipe.min.js')}}"></script>
      <script src="{{asset('flextop/js/scripts.js')}}"></script>
      <!-- HTML5 Shim and Respond.js')}} IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
      <![endif]-->
   </head>
   <body class="not-front page-listing">
      <div id="main">
         <div class="top">
            <div class="top1_wrapper">
               <div class="container">
                  <div class="top1 clearfix">
                     <div class="hello1">Hello Customer - <a href="#">Login</a> or <a href="#">Register!</a></div>
                     <div class="top1_block_right">
                        <div class="store_location1"><a href="#">Store Location</a></div>
                        <div class="track_order1"><a href="#">Track Your Order</a></div>
                        <div class="settings1">
                           <div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Settings<span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                 <li><a href="#">My Account</a></li>
                                 <li><a href="#">Profile</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="lang1">
                           <div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">English<span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                 <li><a class="ge" href="#">Deutsch</a></li>
                                 <li><a class="ru" href="#">Russian</a></li>
                                 <li><a class="en" href="#">English</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="currency1">
                           <div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">USD<span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                 <li><a href="#">EUR</a></li>
                                 <li><a href="#">USD</a></li>
                                 <li><a href="#">RUB</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="top2_wrapper">
               <div class="container">
                  <div class="top2 clearfix">
                     <header>
                        <div class="logo_wrapper">
                           <a href="index-2.html" class="logo">
                           <img src="{{asset('flextop/images/logo.png')}}" alt="" class="img-responsive">
                           </a>
                        </div>
                     </header>
                     <div class="hotline1">
                        <div class="txt1">Hotline:</div>
                        <div class="txt2">(800) 123 456 789</div>
                     </div>
                     <div class="search_section_wrapper">
                        <div class="all_categories1">
                           <div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">All Categories<span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
                                 <li><a href="#">Category 1</a></li>
                                 <li><a href="#">Category 2</a></li>
                                 <li><a href="#">Category 3</a></li>
                                 <li><a href="#">Category 4</a></li>
                                 <li><a href="#">Category 5</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="search-form-wrapper clearfix">
                           <form class="clearfix">
                              <input type="text" class="form-control" placeholder="" value="Search Here" onBlur="if(this.value=='') this.value='Search Here'" onFocus="if(this.value =='Search Here' ) this.value=''">
                              <a href="#" class="">Search</a>
                           </form>
                        </div>
                     </div>
                     <div class="my_cart_wrapper">
                        <div class="my_cart_button">
                           <a href="shopping-cart.html">
                           <span class="my_cart_icon"><span>3</span></span>
                           <span class="txt1">My Cart:</span>
                           <span class="txt2">3 item(s) - <span>$200.00</span></span>
                           </a>
                        </div>
                        <div class="my_cart_popup">
                           <div class="my_cart_item clearfix">
                              <a href="#" class="my_cart_item_close"><i class="fa fa-times"></i></a>
                              <figure>
                                 <img src="{{asset('flextop/images/cart01.jpg')}}" alt="" class="img-responsive">
                              </figure>
                              <div class="caption">
                                 <div class="txt1">
                                    <a href="#">Widescreen 55″ LED4K Ultra HD</a>
                                 </div>
                                 <div class="txt2">2 x $762.12</div>
                              </div>
                           </div>
                           <div class="my_cart_item clearfix">
                              <a href="#" class="my_cart_item_close"><i class="fa fa-times"></i></a>
                              <figure>
                                 <img src="{{asset('flextop/images/cart02.jpg')}}" alt="" class="img-responsive">
                              </figure>
                              <div class="caption">
                                 <div class="txt1">
                                    <a href="#">Widescreen 55″ LED4K Ultra HD</a>
                                 </div>
                                 <div class="txt2">2 x $762.12</div>
                              </div>
                           </div>
                           <div class="my_cart_shipping clearfix">
                              <div class="left">Shipping :</div>
                              <div class="right">$0.00</div>
                           </div>
                           <div class="my_cart_subtotal clearfix">
                              <div class="left">Subtotal :</div>
                              <div class="right">$762.12</div>
                           </div>
                           <a href="shopping-cart.html" class="my_cart_view_cart">View Cart</a>
                           <a href="checkout.html" class="my_cart_check_out">Check Out</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="top3_wrapper">
               <div class="container">
                  <div class="top3 clearfix">
                     <div class="navbar navbar_ navbar-default">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse navbar-collapse_ collapse">
                           <ul class="nav navbar-nav sf-menu clearfix">
                              <li class="sub-menu sub-menu-1">
                                 <a href="listing.html">Computer & Laptop</a>
                                 <div class="sf-mega">
                                    <ul class="sf-mega-ul">
                                       <li class="menu-item-container-text">
                                          <div class="menu-item-title">iMac Computers</div>
                                          <ul class="sf-mega-menu">
                                             <li><a href="listing.html">Flip-Flops</a></li>
                                             <li><a href="listing.html">Fashion Scarves</a></li>
                                             <li><a href="listing.html">Wallets</a></li>
                                             <li><a href="listing.html">Evening Handbags</a></li>
                                             <li><a href="listing.html">Wrist Watches</a></li>
                                          </ul>
                                          <div class="menu-item-title">Makbooks</div>
                                          <ul class="sf-mega-menu">
                                             <li><a href="#">Flip-Flops</a></li>
                                             <li><a href="#">Fashion Scarves</a></li>
                                             <li><a href="#">Wallets</a></li>
                                             <li><a href="#">Evening Handbags</a></li>
                                             <li><a href="#">Wrist Watches</a></li>
                                          </ul>
                                       </li>
                                       <li class="menu-item-container-text">
                                          <div class="menu-item-title">Windows Computers</div>
                                          <ul class="sf-mega-menu">
                                             <li><a href="#">Flip-Flops</a></li>
                                             <li><a href="#">Fashion Scarves</a></li>
                                             <li><a href="#">Wallets</a></li>
                                             <li><a href="#">Evening Handbags</a></li>
                                             <li><a href="#">Wrist Watches</a></li>
                                          </ul>
                                          <div class="menu-item-title">Laptops</div>
                                          <ul class="sf-mega-menu">
                                             <li><a href="#">Flip-Flops</a></li>
                                             <li><a href="#">Fashion Scarves</a></li>
                                             <li><a href="#">Wallets</a></li>
                                             <li><a href="#">Evening Handbags</a></li>
                                             <li><a href="#">Wrist Watches</a></li>
                                          </ul>
                                       </li>
                                       <li class="menu-item-container-image">
                                          <div class="menu-item-image"><img src="{{asset('flextop/images/mega-menu-computer.jpg')}}" alt="" class="img-responsive"></div>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                              <li class="sub-menu sub-menu-1">
                                 <a href="listing.html">TV & Audios</a>
                                 <div class="sf-mega">
                                    <ul class="sf-mega-ul">
                                       <li class="menu-item-container-text">
                                          <div class="menu-item-title">TV Samsung</div>
                                          <ul class="sf-mega-menu">
                                             <li><a href="listing.html">Flip-Flops</a></li>
                                             <li><a href="#">Fashion Scarves</a></li>
                                             <li><a href="#">Wallets</a></li>
                                             <li><a href="#">Evening Handbags</a></li>
                                             <li><a href="#">Wrist Watches</a></li>
                                          </ul>
                                          <div class="menu-item-title">TV Philips</div>
                                          <ul class="sf-mega-menu">
                                             <li><a href="listing.html">Flip-Flops</a></li>
                                             <li><a href="#">Fashion Scarves</a></li>
                                             <li><a href="#">Wallets</a></li>
                                             <li><a href="#">Evening Handbags</a></li>
                                             <li><a href="#">Wrist Watches</a></li>
                                          </ul>
                                       </li>
                                       <li class="menu-item-container-text">
                                          <div class="menu-item-title">Lorem Audio</div>
                                          <ul class="sf-mega-menu">
                                             <li><a href="listing.html">Flip-Flops</a></li>
                                             <li><a href="#">Fashion Scarves</a></li>
                                             <li><a href="#">Wallets</a></li>
                                             <li><a href="#">Evening Handbags</a></li>
                                             <li><a href="#">Wrist Watches</a></li>
                                          </ul>
                                          <div class="menu-item-title">Lorem Sound Audio</div>
                                          <ul class="sf-mega-menu">
                                             <li><a href="listing.html">Flip-Flops</a></li>
                                             <li><a href="#">Fashion Scarves</a></li>
                                             <li><a href="#">Wallets</a></li>
                                             <li><a href="#">Evening Handbags</a></li>
                                             <li><a href="#">Wrist Watches</a></li>
                                          </ul>
                                       </li>
                                       <li class="menu-item-container-image">
                                          <div class="menu-item-image"><img src="{{asset('flextop/images/mega-menu-audio.jpg')}}" alt="" class="img-responsive"></div>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                              <li><a href="#">Smartphone & Tablets</a></li>
                              <li><a href="#">Games & Consoles</a></li>
                              <li class="sub-menu sub-menu-1">
                                 <a href="listing.html">Accessories</a>
                                 <div class="sf-mega">
                                    <ul class="sf-mega-ul">
                                       <li class="menu-item-container-text">
                                          <div class="menu-item-title">TV Samsung</div>
                                          <ul class="sf-mega-menu">
                                             <li><a href="listing.html">Flip-Flops</a></li>
                                             <li><a href="#">Fashion Scarves</a></li>
                                             <li><a href="#">Wallets</a></li>
                                             <li><a href="#">Evening Handbags</a></li>
                                             <li><a href="#">Wrist Watches</a></li>
                                          </ul>
                                          <div class="menu-item-title">TV Philips</div>
                                          <ul class="sf-mega-menu">
                                             <li><a href="listing.html">Flip-Flops</a></li>
                                             <li><a href="#">Fashion Scarves</a></li>
                                             <li><a href="#">Wallets</a></li>
                                             <li><a href="#">Evening Handbags</a></li>
                                             <li><a href="#">Wrist Watches</a></li>
                                          </ul>
                                       </li>
                                       <li class="menu-item-container-text">
                                          <div class="menu-item-title">Lorem Audio</div>
                                          <ul class="sf-mega-menu">
                                             <li><a href="listing.html">Flip-Flops</a></li>
                                             <li><a href="#">Fashion Scarves</a></li>
                                             <li><a href="#">Wallets</a></li>
                                             <li><a href="#">Evening Handbags</a></li>
                                             <li><a href="#">Wrist Watches</a></li>
                                          </ul>
                                          <div class="menu-item-title">Lorem Sound Audio</div>
                                          <ul class="sf-mega-menu">
                                             <li><a href="listing.html">Flip-Flops</a></li>
                                             <li><a href="#">Fashion Scarves</a></li>
                                             <li><a href="#">Wallets</a></li>
                                             <li><a href="#">Evening Handbags</a></li>
                                             <li><a href="#">Wrist Watches</a></li>
                                          </ul>
                                       </li>
                                       <li class="menu-item-container-image">
                                          <div class="menu-item-image"><img src="{{asset('flextop/images/mega-menu01.jpg')}}" alt="" class="img-responsive"></div>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                              <li class="sub-menu sub-menu-2">
                                 <a href="#">Pages <span class="caret"></span></a>
                                 <div class="sf-mega">
                                    <ul>
                                       <li>
                                          <a href="index-2.html">Home Page <i class="fa fa-caret-right gridgumright" aria-hidden="true"></i></a>
                                          <div class="sf-mega">
                                             <ul>
                                                <li><a href="index-2.html">Home version 1</a></li>
                                                <li><a href="index-3.html">Home version 2</a></li>
                                                <li><a href="index-4.html">Home version 3</a></li>
                                                <li><a href="index-5.html">Home version 4</a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <li><a href="listing.html">Product Listing Page</a></li>
                                       <li><a href="product-details.html">Product Description Page</a></li>
                                       <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                       <li><a href="checkout.html">Checkout Page</a></li>
                                       <li>
                                          <a href="blog.html">Blog <i class="fa fa-caret-right gridgumright" aria-hidden="true"></i></a>
                                          <div class="sf-mega">
                                             <ul>
                                                <li><a href="blog.html">Blog Left Sidebar</a></li>
                                                <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                                                <li><a href="post.html">Post Left Sidebar</a></li>
                                                <li><a href="post-right.html">Post Right Sidebar</a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <li><a href="contact-us.html">Contact Us</a></li>
                                       <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                 </div>
                              </li>
                              <li><a href="contact-us.html">Contact us</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--Main Content Starts-->
         <div class="main-content">
            <div class="main-content-overlay"></div>
            <div class="main-content-inner">
               <div id="content">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2 column-sidebar">
                           <div class="sidebar-block">
                              <div class="sidebar-title">
                                 Categories
                              </div>
                              <div class="sidebar-content">
                                 <ul class="ul1">
                                   
                              </div>
                           </div>
                           <div class="sidebar-block">
                              <div class="sidebar-title">
                                 Filter By
                              </div>
                              <div class="sidebar-content">
                                 <div class="sidebar-filters">
                                    <div class="sidebar-filters-title">Price</div>
                                    <div class="slider-range-txt">Range:  <span>$100.00 - $1.700.00</span></div>
                                    <div id="slider-range"></div>
                                    <div class="slider-range-text clearfix">
                                       <input type="text" id="amount" readonly>
                                       <input type="text" id="amount2" readonly>
                                    </div>
                                    <div><a href="#" class="btn-default btn1">Filter</a></div>
                                    <br>
                                    <div class="sidebar-filters-title">Brands</div>
                                    <ul class="ul2">
                                       <li><a href="#">Sony <span>(09)</span></a></li>
                                       <li><a href="#">Panasonic <span>(02)</span></a></li>
                                       <li><a href="#">Apple <span>(10)</span></a></li>
                                       <li><a href="#">Samsung <span>(12)</span></a></li>
                                    </ul>
                                    <br>
                                    <div class="sidebar-filters-title">Color</div>
                                    <form>
                                       <div class="checkbox1-custom-item color1">
                                          <input id="checkbox-1" class="checkbox1-custom" name="checkbox-1" type="checkbox">
                                          <label for="checkbox-1" class="checkbox1-custom-label"></label>
                                       </div>
                                       <div class="checkbox1-custom-item color2">
                                          <input id="checkbox-2" class="checkbox1-custom" name="checkbox-2" type="checkbox">
                                          <label for="checkbox-2" class="checkbox1-custom-label"></label>
                                       </div>
                                       <div class="checkbox1-custom-item color3">
                                          <input id="checkbox-3" class="checkbox1-custom" name="checkbox-3" type="checkbox" checked>
                                          <label for="checkbox-3" class="checkbox1-custom-label"></label>
                                       </div>
                                       <div class="checkbox1-custom-item color4">
                                          <input id="checkbox-4" class="checkbox1-custom" name="checkbox-4" type="checkbox">
                                          <label for="checkbox-4" class="checkbox1-custom-label"></label>
                                       </div>
                                       <div class="checkbox1-custom-item color5">
                                          <input id="checkbox-5" class="checkbox1-custom" name="checkbox-5" type="checkbox">
                                          <label for="checkbox-5" class="checkbox1-custom-label"></label>
                                       </div>
                                       <div class="checkbox1-custom-item color6">
                                          <input id="checkbox-6" class="checkbox1-custom" name="checkbox-6" type="checkbox">
                                          <label for="checkbox-6" class="checkbox1-custom-label"></label>
                                       </div>
                                       <div class="checkbox1-custom-item color7">
                                          <input id="checkbox-7" class="checkbox1-custom" name="checkbox-7" type="checkbox">
                                          <label for="checkbox-7" class="checkbox1-custom-label"></label>
                                       </div>
                                    </form>
                                    <div class="sidebar-filters-title">Size</div>
                                    <form>
                                       <div class="checkbox2-custom-item">
                                          <input id="checkbox2-1" class="checkbox2-custom" name="checkbox2-1" type="checkbox">
                                          <label for="checkbox2-1" class="checkbox2-custom-label">S</label>
                                       </div>
                                       <div class="checkbox2-custom-item">
                                          <input id="checkbox2-2" class="checkbox2-custom" name="checkbox2-2" type="checkbox">
                                          <label for="checkbox2-2" class="checkbox2-custom-label">M</label>
                                       </div>
                                       <div class="checkbox2-custom-item">
                                          <input id="checkbox2-3" class="checkbox2-custom" name="checkbox2-3" type="checkbox" checked>
                                          <label for="checkbox2-3" class="checkbox2-custom-label">L</label>
                                       </div>
                                       <div class="checkbox2-custom-item">
                                          <input id="checkbox2-4" class="checkbox2-custom" name="checkbox2-4" type="checkbox">
                                          <label for="checkbox2-4" class="checkbox2-custom-label">XL</label>
                                       </div>
                                       <div class="checkbox2-custom-item">
                                          <input id="checkbox2-5" class="checkbox2-custom" name="checkbox2-5" type="checkbox">
                                          <label for="checkbox2-5" class="checkbox2-custom-label">XXL</label>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-8 column-content">
                           <div class="banner banner7"><a href="#"><img src="{{asset('flextop/images/banner7.png')}}" alt="" class="img-responsive"></a></div>
                           
                           <div id="second-tab-group" class="tabgroup">
                              <div id="tabs2-1">
                                 <div class="row">

                                                @foreach($data as $post)
                                    <div class="col-sm-2">
                                       <div class="product">
                                          <div class="product-inner">
                                             <figure class="product-media">
                                                <a href="#" class="product-view"><img src="{{asset('flextop/images/appleiphoneX.jpg')}}" alt="" class="img-responsive"></a>
                                                <div class="product-links">
                                                   <a href="#"><i class="fa fa-heart-o"></i></a>
                                                   <a href="#"><i class="fa fa-bar-chart"></i></a>
                                                   <a href="#"> 
                                                   </a>
                                                </div>
                                             </figure>
                                             <div class="product-divider"></div>
                                             <div class="product-caption">
                                                <div class="product-name"><a href="product-details.html"><?php echo $post->product_name?></a>
                                                   <?php echo $post->model ?></div>
                                                <div class="product-review clearfix">
                                                   <div class="product-review-txt"></div>
                                                </div>
                                                <div class="product-prices clearfix">
                                                  
                                                  

                                                    
                                                   <div class="product-price-old"></div>
                                                  
                                                </div>
                                                <button  type="button"><a href="{{route('next',['id' => $post->id])}}">Detail</a></button>
                                             
                                            </div>
                                          </div>
                                       </div>
                                    </div>
                                    @endforeach
                                  
                                 </div>
                                
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="pane2 clearfix">
                        <ul class="pager clearfix">
                           <li class="active"><a href="#">1</a></li>
                           <li class="li"><a href="#">2</a></li>
                           <li class="li"><a href="#">3</a></li>
                           <li class="next"><a href="#"></a></li>
                        </ul>
                        <div class="showing-results">Showing 1-15 <span>of 30 relults</span></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="bot0_wrapper">
         <div class="container">
            <div class="bot0 clearfix">
               <div class="providers clearfix">
                  <div class="provider">
                     <a href="#">
                     <img src="{{asset('flextop/images/tb1.jpg')}}" alt="" class="img-responsive">
                     </a>
                  </div>
                  <div class="provider">
                     <a href="#">
                     <img src="{{asset('flextop/images/tb2.jpg')}}" alt="" class="img-responsive">
                     </a>
                  </div>
                  <div class="provider">
                     <a href="#">
                     <img src="{{asset('flextop/images/tb3.jpg')}}" alt="" class="img-responsive">
                     </a>
                  </div>
                  <div class="provider">
                     <a href="#">
                     <img src="{{asset('flextop/images/tb4.jpg')}}" alt="" class="img-responsive">
                     </a>
                  </div>
                  <div class="provider">
                     <a href="#">
                     <img src="{{asset('flextop/images/tb6.jpg')}}" alt="" class="img-responsive">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--Footer-->
      <div class="bot1_wrapper">
         <div class="container">
            <div class="bot1 clearfix">
               <div class="row">
                  <div class="col-sm-5">
                     <div class="newsletter">
                        <div class="txt1">Sign up to <span>Newsletter</span></div>
                        <div class="txt2">Get <span>30% Off</span> First Purchase!</div>
                     </div>
                  </div>
                  <div class="col-sm-7">
                     <div class="newsletter-form-wrapper clearfix">
                        <form class="clearfix">
                           <input type="text" class="form-control" placeholder="" value="Your email address" onBlur="if(this.value=='') this.value='Your email address'" onFocus="if(this.value =='Your email address' ) this.value=''">
                           <a href="#" class="">Subscribe!</a>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="bot2_wrapper">
         <div class="container">
            <div class="bot2 clearfix">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="logo2">
                        <a href="#">
                        <img src="{{asset('flextop/images/logo2.png')}}" alt="" class="img-responsive">
                        </a>
                     </div>
                     <div class="contact-details">
                        <p><i class="fa fa-address-card"></i>
                           <span>Address:</span>
                           
                        </p>
                        <p><i class="fa fa-envelope"></i>
                           <span>Email:</span>
                          
                     <div class="download-app-text">Download Mobile Touch App:</div>
                     <div class="download-app-wrapper">
                        <div class="download-app"><a href="#"><img src="{{asset('flextop/images/download01.png')}}" alt="" class="img-responsive"></a></div>
                        <div class="download-app"><a href="#"><img src="{{asset('flextop/images/download02.png')}}" alt="" class="img-responsive"></a></div>
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="bot2-title">Information</div>
                     <ul class="ul0">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">All Collection</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Terms & condition</a></li>
                     </ul>
                  </div>
                  <div class="col-sm-2">
                     <div class="bot2-title">Custom Links</div>
                     <ul class="ul0">
                        <li><a href="#">Phones & Tablets</a></li>
                        <li><a href="#">Home Entertainment</a></li>
                        <li><a href="#">Video Games & Toys</a></li>
                        <li><a href="#">Cameras & Drones</a></li>
                        <li><a href="#">Home, Kitchen & Tools</a></li>
                     </ul>
                  </div>
                  <div class="col-sm-2">
                     <div class="bot2-title">My Account</div>
                     <ul class="ul0">
                        <li><a href="#">My orders</a></li>
                        <li><a href="#">My credit slips</a></li>
                        <li><a href="#">My addresses</a></li>
                        <li><a href="#">My personal info</a></li>
                        <li><a href="#">My vouchers</a></li>
                     </ul>
                  </div>
                  <div class="col-sm-2">
                     <div class="bot2-title">Why Choose Us</div>
                     <ul class="ul0">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Typography</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="bot3_wrapper">
         <div class="container">
            <div class="bot3 clearfix">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="copyrights">Copyright &copy; <a href="#">DevDigs</a> all rights reserved. Powered by <a href="#">DEVDIGS</a></div>
                  </div>
                  <div class="col-sm-6">
                     <div class="cards">
                        <div class="card">
                           <a href="#"><img src="{{asset('flextop/images/payment01.png')}}" alt="" class="img-responsive">
                           </a>
                        </div>
                        <div class="card">
                           <a href="#"><img src="{{asset('flextop/images/payment02.png')}}" alt="" class="img-responsive">
                           </a>
                        </div>
                        <div class="card">
                           <a href="#"><img src="{{asset('flextop/images/payment03.png')}}" alt="" class="img-responsive">
                           </a>
                        </div>
                        <div class="card">
                           <a href="#"><img src="{{asset('flextop/images/payment04.png')}}" alt="" class="img-responsive">
                           </a>
                        </div>
                        <div class="card">
                           <a href="#"><img src="{{asset('flextop/images/payment05.png')}}" alt="" class="img-responsive">
                           </a>
                        </div>
                        <div class="card">
                           <a href="#"><img src="{{asset('flextop/images/payment06.png')}}" alt="" class="img-responsive">
                           </a>
                        </div>
                        <div class="card">
                           <a href="#"><img src="{{asset('flextop/images/payment07.png')}}" alt="" class="img-responsive">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--Footer End-->
      </div><!--Main Content Ends Here-->
      </div>
      <script src="{{asset('flextop/js/bootstrap.min.js')}}"></script>
      <!-- Modal Quick View -->
      <div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               </div>
               <div class="modal-body">
                  <div class="modalQuickView">
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="gslider-wrapper">
                              <div id="gslider" class="flexslider flexslider-gslider">
                                 <ul class="slides">
                                    <li>
                                       <img src="{{asset('flextop/images/gallery01.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/gallery02.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/gallery03.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/gallery04.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/gallery01.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/gallery02.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/gallery03.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/gallery04.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/gallery01.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/gallery02.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/gallery03.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/gallery04.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                 </ul>
                              </div>
                              <div id="carousel" class="flexslider flexslider-carousel">
                                 <ul class="slides">
                                    <li>
                                       <img src="{{asset('flextop/images/thumb01.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/thumb02.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/thumb03.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/thumb04.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/thumb01.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/thumb02.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/thumb03.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/thumb04.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/thumb01.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/thumb02.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/thumb03.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                    <li>
                                       <img src="{{asset('flextop/images/thumb04.jpg')}}" alt="" class="img-responsive">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="title">Widescreen 55″ LED4K Ultra HD</div>
                           <div class="product-review clearfix">
                              <!-- <div class="product-stars">
                                 <i class="fa fa-star-o active"></i>
                                 <i class="fa fa-star-o active"></i>
                                 <i class="fa fa-star-o active"></i>
                                 <i class="fa fa-star-o active"></i>
                                 <i class="fa fa-star-o"></i>
                                 </div> -->
                              <div class="product-review-txt">23 Review (s)</div>
                           </div>
                           <div class="product-prices clearfix">
                              <div class="product-price">$362.23</div>
                              <div class="product-price-old">$24.00  </div>
                           </div>
                           <div class="product-popup-txt">
                              Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.
                           </div>
                           <form id="popup-form" class="form-horizontal" @="javascript:void(0);">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Size <span>*</span></label>
                                       <select class="form-control">
                                          <option selected>- Please select -</option>
                                          <option>Size 1</option>
                                          <option>Size 2</option>
                                          <option>Size 3</option>
                                          <option>Size 4</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Color <span>*</span></label>
                                       <select class="form-control">
                                          <option selected>- Please select -</option>
                                          <option>Color 1</option>
                                          <option>Color 2</option>
                                          <option>Color 3</option>
                                          <option>Color 4</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="required-fiields">Required Fiields *</div>
                              <div class="quantity-block-wrapper clearfix">
                                 <div class="col-text">
                                    Quantity:
                                 </div>
                                 <div class="col-quantity">
                                    <div class="quantity">
                                       <button class="dec quantity-button">-</button>
                                       <input class="quantity-input" type="text" value="2">
                                       <button class="inc quantity-button">+</button>
                                    </div>
                                 </div>
                                 <div class="col-btn">
                                    <button type="submit" class="btn-default btn-add-to-cart">Add to Cart</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /.Modal Quick View -->
      <!-- Modal Newsletter -->
      <div class="modal fade" id="modalNewsletter" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               </div>
               <div class="modal-body">
                  <div class="modalNewsletter">
                     <div class="txt1">Get Our Email Letter</div>
                     <div class="txt2">Subscribe to the FlexTop mailing list to receive updates on new arrivals, special offers and other discount information.</div>
                     <form id="popup-form2" class="form-horizontal" action="javascript:void(0);">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label>Size <span>*</span></label>
                                 <input type="text" class="form-control" value="Enter your mail..." onBlur="if(this.value=='') this.value='Enter your mail...'" onFocus="if(this.value =='Enter your mail...' ) this.value=''">
                              </div>
                           </div>
                        </div>
                        <button type="submit" class="btn-default btn-newsletter-submit">Subscribe!</button>
                        <div class="checkbox">
                           <label>
                           <input type="checkbox"> Do not show this popup again
                           </label>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <div class="modalNewsletterMan">
                     <img src="{{asset('flextop/images/newsletterman.png')}}" alt="" class="img-responsive">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /.Modal Newsletter -->
   </body>
</html>
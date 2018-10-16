
	
<!--nav-->
<nav class="navbar navbar-expand-sm  navbar-light navbar-fixed-top nav_hide_mobile">
  
  <div class="top-bar2">
    <div class="container">
        
        <div class="logo">
          <a href="{{URL::to('/')  }}"> <img src="/public/front/img/amarfood_logo.png" alt="Logo"> </a>
        </div>
        <div class="row padding_bottom">
            <div class="col-sm-8">
                <div class="search_bar">
                    <div class="col-sm-9" >
        				<form class="form-inline pull-right form_tab" method="get" action="{{ action('PublicPagesController@getSearch') }}">
                            <div class="form-group">
                                <input class="form-control width_450" type="search" name="item"  value="{{ request('item') }}" placeholder="Search">
                            </div>
                            <button class="btn search_btn" type="submit"> <i class="fa fa-search"></i> </button>
        			    </form>
                    </div>
                    <div class="col-sm-3">
                      <div class=" dropdown">
                        <div class="cart-btn "> <a href="#" class="button adc"   id="MenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ Cart::subtotal() }} BDT </a> </div>
                        
                        <div class="dropdown-menu dropdown-menu2" aria-labelledby="MenuButton">
                          <h2>{{ Cart::count() }} ITEMS IN THE SHOPPING CART </h2>
                          <div class="dropdown-menu2-in">
                            
        					@if(\Cart::content())
                            <ul class="cart_ul">
        					@foreach(\Cart::content() as $cartItem)
        					<?php 
        					    $myproduct = \App\Product::find($cartItem->id);
        					?>
                              <li>
                                <div class="row">
                                  <div class="col-3"><img src="{{ $myproduct->product_photo }}" alt="" title="" height="50px" width="50px"></div>
                                  <div class="col-9">
                                    <p>{{ $myproduct->name }}</p>
                                    <span>{{ $myproduct->discunt_price }} Taka</span>
                                  </div>
                                </div>
                              </li>
                              	@endforeach
                            </ul>
        					@endif
                            <a href="{{ action('CartController@myItems') }}" class="view-ct">View Cart</a> <a href="{{ action('CheckOutController@getCheckOut')  }}" class="check-ct">Checkout</a> </div>
                        </div>
                        
                      </div>
                  </div>
                </div>
            </div>
            <div class="col-sm-4 padding_0">
                <div class="phone_number">
                  
                  <div class="" style="margin-top: 26px;">
                    <ul>
                      @auth
                      <li>
                        <div class="dropdown" style="display: inline;">
                            
                            <a href="{{ action('PublicPagesController@getUserAccount') }}" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <img src="/public/front/menu3/assets/images/user.png" alt="">
                               <span class="user_name"> {{ Auth::user()->firstname }} </span>
                            </a>
                              
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ action('PublicPagesController@getUserAccount') }}">Profile</a>
                                <a class="dropdown-item" href="{{ action('PublicPagesController@logout') }}">Logout</a>
                            </div>
                              
                        </div>
                        
                        <a href="tel:01761429381"  class=""><img src="/public/front/menu3/assets/images/telephone.png" style="margin-right:10px;" > <sapn class="font_size">01761429381 </sapn></a>
                        
                        </li>
                      @else
                      <li>
                        <a href="{{ action('PublicPagesController@getLogin') }}">
                          <img src="/public/front/menu3/assets/images/padlock.png" alt="" style="margin-right:10px;" ><span class="font_size"> Login || Registation</span>
                        </a>
                        
                        <a href="tel:01761429381"  class=""><img src="/public/front/menu3/assets/images/telephone.png" style="margin-right:10px;" > <sapn class="font_size">01761429381 </sapn></a>
                        
                      </li>
                      @endauth
                    </ul>
                  </div>
                  
                </div>
            </div>
        </div>
    </div>
  </div>
  
  <div class="container">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
    <div class="clearfix"></div>
    
    <div class="collapse1 navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav" id="my_nav">
        <li class="nav-item"><a  class="nav-link {{ Request::path() == '/' ? ' menu-active' : '' }}"  href="{{ URL::to('/') }}">Home</a></li>
        <li class="nav-item"><a  class="nav-link  {{ Request::path() == 'products' ? ' menu-active' : '' }}"  href="{{ URL::to('/products') }}">Products</a></li>
        <li class="nav-item"><a  class="nav-link {{ Request::path() == 'family-combo' ? ' menu-active' : '' }}"  href="{{ action('PublicPagesController@getFamilyCombo') }}">Family Combo</a></li>
        <li class="nav-item"><a  class="nav-link {{ Request::path() == 'pre-order' ? ' menu-active' : '' }}"  href="{{ action('PublicPagesController@getPreorder') }}">Pre Order</a></li>
        <li class="nav-item"><a  class="nav-link {{ Request::path() == 'offers' ? ' menu-active' : '' }}"  href="{{ action('PublicPagesController@getOffers') }}">Offer</a></li>
      </ul>
    </div>
    
  </div>
  
</nav>
<!--nav-->

<!--mobile nav-->

<nav class="navbar-fixed-top nav_hide">
    <div class="container">
        <div class="row">
            <div class="col-xs-4">
                <div class="mobile_logo">
                    <a href="">
                        <img src="/public/front/img/amarfood_logo.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-xs-8">
                <div class="phone_number">
                    <div class="list2 m-t-18">
                        <ul>
                            @auth
                                <li>
                                    <a href="{{ action('PublicPagesController@getProfile') }}" class="m_number yellow_bg_round"   data-toggle="tooltip" data-placement="top" title="">
                                        <img src="/public/front/menu3/assets/images/user.png" alt="">
                                        <span class="user_name f_s_9"> {{ Auth::user()->firstname }} </span>
                                    </a>
                                    
                                    <a href="tel:01761429381"  class="yellow_bg_round" data-toggle="tooltip" data-placement="top" title="01761429381">
                                        <img src="/public/front/menu3/assets/images/telephone.png">
                                        <sapn class="m_number"> </sapn>
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ action('PublicPagesController@getLogin') }}"  data-toggle="tooltip" data-placement="top" title="Login || Registation" class="yellow_bg_round">
                                        <img src="/public/front/menu3/assets/images/padlock.png" alt="" style="margin-right:10px;" >
                                        <span class="f_s_9"> Login || Registation</span>
                                    </a>
                                    <a href="tel:01761429381"  class="call_icon_mobile" data-toggle="tooltip" data-placement="top" title="01761429381">
                                        <img src="/public/front/menu3/assets/images/telephone.png">
                                        <sapn class="m_number"></sapn>
                                    </a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="mobile_menu">
        
        <div class="search_from">
			<form class="form-inline search_mobile" method="get" action="{{ action('PublicPagesController@getSearch') }}">
                <div class="">
                    <input class="form-control" type="search" name="item"  value="{{ request('item') }}" placeholder="Search what you want ? like Milk">
                </div>
                <button class="search_mobile_button" type="submit"> <i class="fa fa-search"></i> </button>
		    </form>
        </div>
        
        <div class="m_cart">
            <a class="mobile_cart search_mobile_button" href="{{ action('CartController@myItems') }}"> <i class="fa fa-shopping-cart"></i> {{ Cart::subtotal() }} BDT</a>
        </div>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a  class="nav-link {{ Request::path() == '/' ? ' menu-active' : '' }}"  href="{{ URL::to('/') }}">Home</a></li>
                <li class="nav-item"><a  class="nav-link  {{ Request::path() == 'products' ? ' menu-active' : '' }}"  href="{{ URL::to('/products') }}">Products</a></li>
                <li class="nav-item"><a  class="nav-link {{ Request::path() == 'family-combo' ? ' menu-active' : '' }}"  href="{{ action('PublicPagesController@getFamilyCombo') }}">Family Combo</a></li>
                <li class="nav-item"><a  class="nav-link {{ Request::path() == 'pre-order' ? ' menu-active' : '' }}"  href="{{ action('PublicPagesController@getPreorder') }}">Pre Order</a></li>
                <li class="nav-item"><a  class="nav-link {{ Request::path() == 'offers' ? ' menu-active' : '' }}"  href="{{ action('PublicPagesController@getOffers') }}">Offer</a></li>
            </ul>
        </div>
        </nav>
        
    </div>
</nav>


<!--mobile nav-->
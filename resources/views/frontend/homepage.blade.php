@extends('layouts.frontLayout')

@section('customCSS')
{{-- <style>
  .test {
    display: none;
  }

  ul.countdown {
    list-style: none;
    margin: 0px 0px;
    padding: 0;
    display: block;
    color: #44c134;
    text-align: center;
  }

  ul.countdown li {
    display: inline-block;
    height: 0px;
  }

  ul.countdown li span {
    font-size: 56px;
    font-weight: 300;
    line-height: 40px;
  }

  ul.countdown li.seperator {
    font-size: 56px;
    line-height: 40px;
    vertical-align: top;
  }

  ul.countdown li p {
    color: #a7abb1;
    font-size: 14px;
  }

  .button {
    background-color: #4CAF50;
    /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
  }
</style> --}}
@endsection

@section('content')

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text" style="background-image: url(assets/images/Image-4.png);background-repeat: round;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 hm-hide">
        <ul class="menu cf">
          <li>
            <a href="">Auctions<i class="fa fa-caret-down" aria-hidden="true" style="margin-left: 5px;"></i></a>
            <ul class="submenu">
              <li><a href="">Submenu item</a></li>
              <li><a href="">Submenu item</a></li>
            </ul>
          </li>
          <li style="margin-right: 12px;"><a href="">Bid</a></li>
          <li style="margin-right: 12px;">
            <a href="">Games<i class="fa fa-caret-down" aria-hidden="true" style="margin-left: 5px;"></i></a>
            <ul class="submenu">
              <li><a href="">Submenu item</a></li>
              <li><a href="">Submenu item</a></li>
            </ul>
          </li>
          <li style="margin-left: 12px;margin-right: 12px;"><a href="">Home</a></li>
          <li class="hm-li"><a href=""></a></li>
        </ul>
      </div>
      <div class="col-md-12" style="margin-top: 60px;padding-right: 19px;">

        <div class="card hm-card">
          <div class="card-header">
            <span><button class="hm-active">Auctions</button></span>
          </div>
          <div class="card-body">
            <h5 class="card-title penny-hm">Penny Auctions</h5>
            <p class="card-text penny">Get yourself up to 99% off with hundreds of auctions running daily</p>

          </div>
          <div class="card-footer text-muted">
            <a href="#" class="btn btn-danger hm-active-get-big">GET BID</a>
          </div>
        </div>

      </div>
    </div>
  </div>

</div>
<!-- Banner Ends Here -->

<div class="latest-products" style="background-image: url(assets/images/image-10.jpg);background-repeat: round;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12" style="margin-bottom: -40px;">
        <div class="section-heading">
          <h2>Auctions</h2>

        </div>
      </div>
      @foreach($auctions as $auction)
      <div class="col-md-6">
        <div class="product-item">
          <div class="item-list auction-list">
            <li class="anim-elem  live-auction">
              <div class="item-inner anim-02"
                style="background: url(assets/images/Mask-group-1.png), linear-gradient(to bottom right, #d32ce6 -170%, rgba(0,0,0,0.2) 70%);background-repeat: round;">
                <div data-auction-alert-popup="" class="overlay-dialog" style="display: none;"></div>
                <div class="item-info">
                  <div class="item-title">
                    <h3 style="color: #fff">
                      {{-- <a href="#"> --}}
                      {{$auction->name ? $auction->name : ''}}
                      {{-- </a> --}}
                    </h3>
                    <span class="item-heading">{{$auction->title ? $auction->title : ''}}</span>
                  </div>
                  <div class="item-rarity" style="color: #fff">
                    {{$auction->sub_title ? $auction->sub_title : ''}}
                  </div>
                  <div class="item-value">
                    <span class="item-heading">Worth</span>
                    <h4>${{$auction->price ? $auction->price : ''}}</h4>
                  </div>
                  <nav class="button-group item-buttons">
                    <ul>
                      <li><a href="#" class="item-inspect btn btn-info"><i class="fa fa-phone"></i></a></li>
                      <li><a href="#" class="item-inspect btn btn-info"><i class="fa fa-eye"></i></a></li>
                    </ul>
                  </nav>
                  <div class="item-image"></div>
                </div>
                <div class="auction-info" data-auction-info-id="2893">
                  <div class="auction-price">
                    <h4 data-price="">
                      <span class="">$0.01</span>
                    </h4>
                    <span class="item-heading">Current Price</span>
                  </div>
                  <div class="auction-bidder">
                    <div class="the-bidder">
                      <div class="the-bidder">
                        <span class="item-heading">Highest Bidder</span>
                        <div class="logo-hm">LOGO</div>
                        <h4 data-user-name=""><span class="animated bounceIn"><a target="_blank"
                              href="#">Username</a></span></h4>
                      </div>
                    </div>
                  </div>
                  <div class="auction-time">
                    <time data-live="" data-time-ms="0">
                      
                    </time>
                    <button class="btn btn-default btn-lg" data-auction-id="2893"><span class="bid-cost"><i
                          class="fa fa-circle"></i>{{$auction->bid_cost ? $auction->bid_cost : ''}}</span>
                      <div class="bid">PLACE BID</div>
                    </button>
                  </div>
                </div>
              </div>
            </li>
          </div>

        </div>
      </div>
      @endforeach
      {{-- <div class="col-md-6">
            <div class="product-item">
              <div class="item-list auction-list">
                <li class="anim-elem  live-auction">
                  <div class="item-inner anim-02" style="background: url(assets/images/Mask-group-1.png), linear-gradient(to bottom right, #d32ce6 -170%, rgba(0,0,0,0.2) 70%);background-repeat: round;">
                  <div data-auction-alert-popup="" class="overlay-dialog" style="display: none;"></div>
                  <div class="item-info">
                  <div class="item-title">
                  <h3><a href="#">StatTrak™ Glock-18 | Water Elemental</a></h3>
                  <span class="item-heading">Factory New</span>
                  </div>
                  <div class="item-rarity" style="color: #fff"> 
                  StatTrak™ Classified Pistol
                  </div>
                  <div class="item-value">
                  <span class="item-heading">Worth</span>
                  <h4>$39.45</h4>
                  </div>
                  <nav class="button-group item-buttons">
                  <ul>
                  <li><a href="#" class="item-inspect btn btn-info"><i class="fa fa-phone"></i></a></li>
                  <li><a href="#" class="item-inspect btn btn-info"><i class="fa fa-eye"></i></a></li>
                  </ul>
                  </nav>
                  <div class="item-image"></div>
                  </div>
                  <div class="auction-info" data-auction-info-id="2893">
                  <div class="auction-price">
                  <h4 data-price="">
                  <span class="">$4.96</span>
                  </h4>
                  <span class="item-heading">Current Price</span>
                  </div>
                  <div class="auction-bidder">
                  <div class="the-bidder">
                  <div class="the-bidder">
                  <span class="item-heading">Highest Bidder</span>
                  <div class="logo-hm">LOGO</div>
                  <h4 data-user-name=""><span class="animated bounceIn"><a target="_blank" href="#">Username</a></span></h4>
                  </div>
                  </div>
                  </div>
                  <div class="auction-time">
                  
                  <time data-live="" data-time-ms="0"></time>
                  <button class="btn btn-default btn-lg" data-auction-id="2893"><span class="bid-cost"><i class="fa fa-circle"></i>20</span><div class="bid">PLACE BID</div></button>
                  </div>
                  </div>
                  </div>
                </li>
              </div>
            </div>
          </div> --}}
      {{--
          <div class="col-md-6">
            <div class="product-item">
              <div class="item-list auction-list">
                <li class="anim-elem  live-auction">
                  <div class="item-inner anim-02" style="background: url(assets/images/Mask-group-1.png), linear-gradient(to bottom right, #d32ce6 -170%, rgba(0,0,0,0.2) 70%);background-repeat: round;">
                  <div data-auction-alert-popup="" class="overlay-dialog" style="display: none;"></div>
                  <div class="item-info">
                  <div class="item-title">
                  <h3><a href="#">StatTrak™ Glock-18 | Water Elemental</a></h3>
                  <span class="item-heading">Factory New</span>
                  </div>
                  <div class="item-rarity" style="color: #fff"> 
                  StatTrak™ Classified Pistol
                  </div>
                  <div class="item-value">
                  <span class="item-heading">Worth</span>
                  <h4>$39.45</h4>
                  </div>
                  <nav class="button-group item-buttons">
                  <ul>
                  <li><a href="#" class="item-inspect btn btn-info"><i class="fa fa-phone"></i></a></li>
                  <li><a href="#" class="item-inspect btn btn-info"><i class="fa fa-eye"></i></a></li>
                  </ul>
                  </nav>
                  <div class="item-image"></div>
                  </div>
                  <div class="auction-info" data-auction-info-id="2893">
                  <div class="auction-price">
                  <h4 data-price="">
                  <span class="">$4.96</span>
                  </h4>
                  <span class="item-heading">Current Price</span>
                  </div>
                  <div class="auction-bidder">
                  <div class="the-bidder">
                  <div class="the-bidder">
                  <span class="item-heading">Highest Bidder</span>
                  <div class="logo-hm">LOGO</div>
                  <h4 data-user-name=""><span class="animated bounceIn"><a target="_blank" href="#">Username</a></span></h4>
                  </div>
                  </div>
                  </div>
                  <div class="auction-time">
                  
                  <time data-live="" data-time-ms="0"></time>
                  <button class="btn btn-default btn-lg" data-auction-id="2893"><span class="bid-cost"><i class="fa fa-circle"></i>20</span><div class="bid">PLACE BID</div></button>
                  </div>
                  </div>
                  </div>
                </li>
              </div>
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="product-item">
              <div class="item-list auction-list">
                <li class="anim-elem  live-auction">
                  <div class="item-inner anim-02" style="background: url(assets/images/Mask-group-1.png), linear-gradient(to bottom right, #d32ce6 -170%, rgba(0,0,0,0.2) 70%);background-repeat: round;">
                  <div data-auction-alert-popup="" class="overlay-dialog" style="display: none;"></div>
                  <div class="item-info">
                  <div class="item-title">
                  <h3><a href="#">StatTrak™ Glock-18 | Water Elemental</a></h3>
                  <span class="item-heading">Factory New</span>
                  </div>
                  <div class="item-rarity" style="color: #fff"> 
                  StatTrak™ Classified Pistol
                  </div>
                  <div class="item-value">
                  <span class="item-heading">Worth</span>
                  <h4>$39.45</h4>
                  </div>
                  <nav class="button-group item-buttons">
                  <ul>
                  <li><a href="#" class="item-inspect btn btn-info"><i class="fa fa-phone"></i></a></li>
                  <li><a href="#" class="item-inspect btn btn-info"><i class="fa fa-eye"></i></a></li>
                  </ul>
                  </nav>
                  <div class="item-image"></div>
                  </div>
                  <div class="auction-info" data-auction-info-id="2893">
                  <div class="auction-price">
                  <h4 data-price="">
                  <span class="">$4.96</span>
                  </h4>
                  <span class="item-heading">Current Price</span>
                  </div>
                  <div class="auction-bidder">
                  <div class="the-bidder">
                  <div class="the-bidder">
                  <span class="item-heading">Highest Bidder</span>
                  <div class="logo-hm">LOGO</div>
                  <h4 data-user-name=""><span class="animated bounceIn"><a target="_blank" href="#">Username</a></span></h4>
                  </div>
                  </div>
                  </div>
                  <div class="auction-time">
                  
                  <time data-live="" data-time-ms="0"></time>
                  <button class="btn btn-default btn-lg" data-auction-id="2893"><span class="bid-cost"><i class="fa fa-circle"></i>20</span><div class="bid">PLACE BID</div></button>
                  </div>
                  </div>
                  </div>
                </li>
              </div>
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="product-item">
              <div class="item-list auction-list">
                <li class="anim-elem  live-auction">
                  <div class="item-inner anim-02" style="background: url(assets/images/Mask-group-1.png), linear-gradient(to bottom right, #d32ce6 -170%, rgba(0,0,0,0.2) 70%);background-repeat: round;">
                  <div data-auction-alert-popup="" class="overlay-dialog" style="display: none;"></div>
                  <div class="item-info">
                  <div class="item-title">
                  <h3><a href="#">StatTrak™ Glock-18 | Water Elemental</a></h3>
                  <span class="item-heading">Factory New</span>
                  </div>
                  <div class="item-rarity" style="color: #fff"> 
                  StatTrak™ Classified Pistol
                  </div>
                  <div class="item-value">
                  <span class="item-heading">Worth</span>
                  <h4>$39.45</h4>
                  </div>
                  <nav class="button-group item-buttons">
                  <ul>
                  <li><a href="#" class="item-inspect btn btn-info"><i class="fa fa-phone"></i></a></li>
                  <li><a href="#" class="item-inspect btn btn-info"><i class="fa fa-eye"></i></a></li>
                  </ul>
                  </nav>
                  <div class="item-image"></div>
                  </div>
                  <div class="auction-info" data-auction-info-id="2893">
                  <div class="auction-price">
                  <h4 data-price="">
                  <span class="">$4.96</span>
                  </h4>
                  <span class="item-heading">Current Price</span>
                  </div>
                  <div class="auction-bidder">
                  <div class="the-bidder">
                  <div class="the-bidder">
                  <span class="item-heading">Highest Bidder</span>
                  <div class="logo-hm">LOGO</div>
                  <h4 data-user-name=""><span class="animated bounceIn"><a target="_blank" href="#">Username</a></span></h4>
                  </div>
                  </div>
                  </div>
                  <div class="auction-time">
                  
                  <time data-live="" data-time-ms="0"></time>
                  <button class="btn btn-default btn-lg" data-auction-id="2893"><span class="bid-cost"><i class="fa fa-circle"></i>20</span><div class="bid">PLACE BID</div></button>
                  </div>
                  </div>
                  </div>
                </li>
              </div>
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="product-item">
              <div class="item-list auction-list">
                <li class="anim-elem  live-auction">
                  <div class="item-inner anim-02" style="background: url(assets/images/Mask-group-1.png), linear-gradient(to bottom right, #d32ce6 -170%, rgba(0,0,0,0.2) 70%);background-repeat: round;">
                  <div data-auction-alert-popup="" class="overlay-dialog" style="display: none;"></div>
                  <div class="item-info">
                  <div class="item-title">
                  <h3><a href="#">StatTrak™ Glock-18 | Water Elemental</a></h3>
                  <span class="item-heading">Factory New</span>
                  </div>
                  <div class="item-rarity" style="color: #fff"> 
                  StatTrak™ Classified Pistol
                  </div>
                  <div class="item-value">
                  <span class="item-heading">Worth</span>
                  <h4>$39.45</h4>
                  </div>
                  <nav class="button-group item-buttons">
                  <ul>
                  <li><a href="#" class="item-inspect btn btn-info"><i class="fa fa-phone"></i></a></li>
                  <li><a href="#" class="item-inspect btn btn-info"><i class="fa fa-eye"></i></a></li>
                  </ul>
                  </nav>
                  <div class="item-image"></div>
                  </div>
                  <div class="auction-info" data-auction-info-id="2893">
                  <div class="auction-price">
                  <h4 data-price="">
                  <span class="">$4.96</span>
                  </h4>
                  <span class="item-heading">Current Price</span>
                  </div>
                  <div class="auction-bidder">
                  <div class="the-bidder">
                  <div class="the-bidder">
                  <span class="item-heading">Highest Bidder</span>
                  <div class="logo-hm">LOGO</div>
                  <h4 data-user-name=""><span class="animated bounceIn"><a target="_blank" href="#">Username</a></span></h4>
                  </div>
                  </div>
                  </div>
                  <div class="auction-time">
                  
                  <time data-live="" data-time-ms="0"></time>
                  <button class="btn btn-default btn-lg" data-auction-id="2893"><span class="bid-cost"><i class="fa fa-circle"></i>20</span><div class="bid">PLACE BID</div></button>
                  </div>
                  </div>
                  </div>
                </li>
              </div>
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="product-item">
              <div class="item-list auction-list">
                <li class="anim-elem  live-auction">
                  <div class="item-inner anim-02" style="background: url(assets/images/Mask-group-1.png), linear-gradient(to bottom right, #d32ce6 -170%, rgba(0,0,0,0.2) 70%);background-repeat: round;">
                  <div data-auction-alert-popup="" class="overlay-dialog" style="display: none;"></div>
                  <div class="item-info">
                  <div class="item-title">
                  <h3><a href="#">StatTrak™ Glock-18 | Water Elemental</a></h3>
                  <span class="item-heading">Factory New</span>
                  </div>
                  <div class="item-rarity" style="color: #fff"> 
                  StatTrak™ Classified Pistol
                  </div>
                  <div class="item-value">
                  <span class="item-heading">Worth</span>
                  <h4>$39.45</h4>
                  </div>
                  <nav class="button-group item-buttons">
                  <ul>
                  <li><a href="#" class="item-inspect btn btn-info"><i class="fa fa-phone"></i></a></li>
                  <li><a href="#" class="item-inspect btn btn-info"><i class="fa fa-eye"></i></a></li>
                  </ul>
                  </nav>
                  <div class="item-image"></div>
                  </div>
                  <div class="auction-info" data-auction-info-id="2893">
                  <div class="auction-price">
                  <h4 data-price="">
                  <span class="">$4.96</span>
                  </h4>
                  <span class="item-heading">Current Price</span>
                  </div>
                  <div class="auction-bidder">
                  <div class="the-bidder">
                  <div class="the-bidder">
                  <span class="item-heading">Highest Bidder</span>
                  <div class="logo-hm">LOGO</div>
                  <h4 data-user-name=""><span class="animated bounceIn"><a target="_blank" href="#">Username</a></span></h4>
                  </div>
                  </div>
                  </div>
                  <div class="auction-time">
                  
                  <time data-live="" data-time-ms="0"></time>
                  <button class="btn btn-default btn-lg" data-auction-id="2893"><span class="bid-cost"><i class="fa fa-circle"></i>20</span><div class="bid">PLACE BID</div></button>
                  </div>
                  </div>
                  </div>
                </li>
              </div>
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="product-item">
              <div class="item-list auction-list">
                <li class="anim-elem  live-auction">
                  <div class="item-inner anim-02" style="background: url(assets/images/Mask-group-1.png), linear-gradient(to bottom right, #d32ce6 -170%, rgba(0,0,0,0.2) 70%);background-repeat: round;">
                  <div data-auction-alert-popup="" class="overlay-dialog" style="display: none;"></div>
                  <div class="item-info">
                  <div class="item-title">
                  
                  <h3><a href="#">StatTrak™ Glock-18 | Water Elemental</a></h3>
                  <span class="item-heading">Factory New</span>
                  </div>
                  <div class="item-rarity" style="color: #fff"> 
                  StatTrak™ Classified Pistol
                  </div>
                  <div class="item-value">
                  <span class="item-heading">Worth</span>
                  <h4>$39.45</h4>
                  </div>
                  <nav class="button-group item-buttons">
                  <ul>
                  <li><a href="#" class="item-inspect btn btn-info"><i class="fa fa-phone"></i></a></li>
                  <li><a href="#" class="item-inspect btn btn-info"><i class="fa fa-eye"></i></a></li>
                  </ul>
                  </nav>
                  <div class="item-image"></div>
                  </div>
                  <div class="auction-info" data-auction-info-id="2893">
                  <div class="auction-price">
                  <h4 data-price="">
                  <span class="">$4.96</span>
                  </h4>
                  <span class="item-heading">Current Price</span>
                  </div>
                  <div class="auction-bidder">
                  <div class="the-bidder">
                  <div class="the-bidder">
                  <span class="item-heading">Highest Bidder</span>
                  <div class="logo-hm">LOGO</div>
                  <h4 data-user-name=""><span class="animated bounceIn"><a target="_blank" href="#">Username</a></span></h4>
                  </div>
                  </div>
                  </div>
                  <div class="auction-time">
                  
                  <time data-live="" data-time-ms="0"></time>
                  <button class="btn btn-default btn-lg" data-auction-id="2893"><span class="bid-cost"><i class="fa fa-circle"></i>20</span><div class="bid">PLACE BID</div></button>
                  </div>
                  </div>
                  </div>
                </li>
              </div>
              <!-- <a href="#"><img src="assets/images/product_01.jpg" alt=""></a>
              
                <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$25.75</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>

              </div> -->
            </div>
          </div> --}}

      <div class="col-md-12" style="margin-bottom: -40px;">
        <div class="section-heading">
          <h2>RECENT BARGAINS</h2>

        </div>
      </div>

      <div class="col-md-12">
        <div class="product-item">
          <div class="item-list auction-list">
            <li class="anim-elem  live-auction">
              <div class="item-inner anim-02"
                style="background: url(assets/images/Mask-group-4.png), linear-gradient(to bottom right, #d32ce6 -170%, rgba(0,0,0,0.2) 70%);background-repeat: round;">
                <div data-auction-alert-popup="" class="overlay-dialog" style="display: none;"></div>
                <div class="item-info">
                  <div class="item-title">
                    <h3><a href="#">StatTrak™ Glock-18 | Water Elemental</a></h3>
                    <span class="item-heading">Factory New</span>
                  </div>
                  <div class="item-rarity" style="color: #fff">
                    StatTrak™ Classified Pistol
                  </div>
                  <div class="item-value hm-value">
                    <span class="item-heading">Worth</span>
                    <h4>$39.45</h4>
                  </div>
                  <div class="item-image"></div>
                </div>
                <div class="auction-info hm-info" data-auction-info-id="2893">
                  <div class="auction-price">
                    <span class="item-heading">Final Price</span>
                    <h4 data-price="">
                      <span class="">$4.96</span>
                    </h4>
                    <span class="item-heading" style="font-size: large;">Saved 89%</span>
                  </div>
                  <div class="auction-bidder hm-bidder">
                    <div class="the-bidder">
                      <div class="the-bidder">
                        <span class="item-heading">won by</span>
                        <h4 data-user-name=""><span class="animated bounceIn"><a target="_blank">username</a></span>
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </div>
          <!-- <a href="#"><img src="assets/images/product_01.jpg" alt=""></a>
              
                <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$25.75</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>

              </div> -->
        </div>
      </div>

      <div class="col-md-12">
        <div class="product-item">
          <div class="item-list auction-list">
            <li class="anim-elem  live-auction">
              <div class="item-inner anim-02"
                style="background: url(assets/images/Mask-group-4.png), linear-gradient(to bottom right, #d32ce6 -170%, rgba(0,0,0,0.2) 70%);background-repeat: round;">
                <div data-auction-alert-popup="" class="overlay-dialog" style="display: none;"></div>
                <div class="item-info">
                  <div class="item-title">
                    <h3><a href="#">StatTrak™ Glock-18 | Water Elemental</a></h3>
                    <span class="item-heading">Factory New</span>
                  </div>
                  <div class="item-rarity" style="color: #fff">
                    StatTrak™ Classified Pistol
                  </div>
                  <div class="item-value hm-value">
                    <span class="item-heading">Worth</span>
                    <h4>$39.45</h4>
                  </div>
                  <div class="item-image"></div>
                </div>
                <div class="auction-info hm-info" data-auction-info-id="2893">
                  <div class="auction-price">
                    <h4 data-price="">
                      <span class="item-heading">Final Price</span>
                      <h4 data-price="">
                        <span class="">$4.96</span>
                      </h4>
                      <span class="item-heading" style="font-size: large;">Saved 89%</span>
                  </div>
                  <div class="auction-bidder hm-bidder">
                    <div class="the-bidder">
                      <div class="the-bidder">
                        <span class="item-heading">won by</span>
                        <h4 data-user-name=""><span class="animated bounceIn"><a target="_blank">username</a></span>
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </div>

        </div>
      </div>

      <div class="col-md-12" style="margin-bottom: 30px;">
        <div class="product-item">
          <div class="item-list auction-list">
            <li class="anim-elem  live-auction">
              <div class="item-inner anim-02"
                style="background: url(assets/images/Mask-group-4.png), linear-gradient(to bottom right, #d32ce6 -170%, rgba(0,0,0,0.2) 70%);background-repeat: round;">
                <div data-auction-alert-popup="" class="overlay-dialog" style="display: none;"></div>
                <div class="item-info">
                  <div class="item-title">
                    <h3><a href="#">StatTrak™ Glock-18 | Water Elemental</a></h3>
                    <span class="item-heading">Factory New</span>
                  </div>
                  <div class="item-rarity" style="color: #fff">
                    StatTrak™ Classified Pistol
                  </div>
                  <div class="item-value hm-value">
                    <span class="item-heading">Worth</span>
                    <h4>$39.45</h4>
                  </div>
                  <div class="item-image"></div>
                </div>
                <div class="auction-info hm-info" data-auction-info-id="2893">
                  <div class="auction-price">
                    <h4 data-price="">
                      <span class="item-heading">Final Price</span>
                      <h4 data-price="">
                        <span class="">$4.96</span>
                      </h4>
                      <span class="item-heading" style="font-size: large;">Saved 89%</span>
                  </div>
                  <div class="auction-bidder hm-bidder">
                    <div class="the-bidder">
                      <div class="the-bidder">
                        <span class="item-heading">won by</span>
                        <h4 data-user-name=""><span class="animated bounceIn"><a target="_blank">username</a></span>
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>
@endsection

@section('customJS')
@endsection
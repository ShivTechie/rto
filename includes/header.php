<?php
if(!isset($meta)){
  $meta = array(
    'title' => 'RTO Service in Pune',
    'description' => 'RTO Service in Pune',
    'keywords' => 'RTO Service in Pune',
  );
}
?>
<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
      <?= $meta['title']; ?>
    </title>
    <meta name="author" content="themeholy" />
    <meta
      name="description"
      content="<?= $meta['description']; ?>"
    />
    <meta
      name="keywords"
      content="<?= $meta['keywords']; ?>"
    />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="96x96"
      href="assets/img/favicons/rto-logo.jpg"
    />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="theme-color" content="#ffffff" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <?php
    if (isset($css)) {
      foreach ($css as $c) {
        echo '<link rel="stylesheet" href="assets/css/' . $c . '.css" />';
      }
    }
    ?> 
    <link rel="stylesheet" href="assets/css/custom.css" />
  </head>

  <body>
  <div class="preloader">
      <div class="preloader-inner">
      <img src="assets/img/loader.gif" alt="">
      </div>
  </div>
    <div class="sidemenu-wrapper d-none d-lg-block">
      <div class="sidemenu-content">
        <button class="closeButton sideMenuCls">
          <i class="far fa-times"></i>
        </button>
        <div class="widget woocommerce widget_shopping_cart">
          <h3 class="widget_title">Shopping cart</h3>
          <div class="widget_shopping_cart_content">
            <ul class="woocommerce-mini-cart cart_list product_list_widget">
              <li class="woocommerce-mini-cart-item mini_cart_item">
                <a href="#" class="remove remove_from_cart_button"
                  ><i class="far fa-times"></i
                ></a>
                <a href="#"
                  ><img
                    src="assets/img/product/product_thumb_1_1.jpg"
                    alt="Cart Image"
                  />Plastic Book Bags</a
                >
                <span class="quantity"
                  >1 ×
                  <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">$</span
                    >940.00</span
                  >
                </span>
              </li>
              <li class="woocommerce-mini-cart-item mini_cart_item">
                <a href="#" class="remove remove_from_cart_button"
                  ><i class="far fa-times"></i
                ></a>
                <a href="#"
                  ><img
                    src="assets/img/product/product_thumb_1_2.jpg"
                    alt="Cart Image"
                  />The Genie Mind</a
                >
                <span class="quantity"
                  >1 ×
                  <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">$</span
                    >899.00</span
                  >
                </span>
              </li>
              <li class="woocommerce-mini-cart-item mini_cart_item">
                <a href="#" class="remove remove_from_cart_button"
                  ><i class="far fa-times"></i
                ></a>
                <a href="#"
                  ><img
                    src="assets/img/product/product_thumb_1_3.jpg"
                    alt="Cart Image"
                  />The Energy Book</a
                >
                <span class="quantity"
                  >1 ×
                  <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">$</span
                    >756.00</span
                  >
                </span>
              </li>
              <li class="woocommerce-mini-cart-item mini_cart_item">
                <a href="#" class="remove remove_from_cart_button"
                  ><i class="far fa-times"></i
                ></a>
                <a href="#"
                  ><img
                    src="assets/img/product/product_thumb_1_4.jpg"
                    alt="Cart Image"
                  />Pencil Bag</a
                >
                <span class="quantity"
                  >1 ×
                  <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">$</span
                    >723.00</span
                  >
                </span>
              </li>
              <li class="woocommerce-mini-cart-item mini_cart_item">
                <a href="#" class="remove remove_from_cart_button"
                  ><i class="far fa-times"></i
                ></a>
                <a href="#"
                  ><img
                    src="assets/img/product/product_thumb_1_5.jpg"
                    alt="Cart Image"
                  />Sharpner</a
                >
                <span class="quantity"
                  >1 ×
                  <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">$</span
                    >1080.00</span
                  >
                </span>
              </li>
            </ul>
            <p class="woocommerce-mini-cart__total total">
              <strong>Subtotal:</strong>
              <span class="woocommerce-Price-amount amount">
                <span class="woocommerce-Price-currencySymbol">$</span
                >4398.00</span
              >
            </p>
            <p class="woocommerce-mini-cart__buttons buttons">
              <a href="cart.php" class="th-btn wc-forward">View cart</a>
              <a href="checkout.php" class="th-btn checkout wc-forward"
                >Checkout</a
              >
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="popup-search-box d-none d-lg-block">
      <button class="searchClose"><i class="fal fa-times"></i></button>
      <form action="#">
        <input type="text" placeholder="What are you looking for?" />
        <button type="submit"><i class="fal fa-search"></i></button>
      </form>
    </div>
    <div class="th-menu-wrapper">
      <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
          <a href="index.php"><img src="assets/img/logo.png" alt="RTO" /></a>
        </div>
        <div class="th-mobile-menu">
          <ul>
            <li class="sub-menu">
              <a href="index.php">Home</a>
            </li>
            <li class="sub-menu">
              <a href="about.php">About Us</a>
            </li>
            <li class="menu-item-has-children">
              <a href="#">Services</a>
              <ul class="sub-menu p-2 pl-0" style="width: 250px">
                <li class="menu-item-has-children pb-2">
                  <a href="driving-related-service.php">Driving Services</a>
                  <ul class="sub-menu p-2" style="width: 240px">
                  <li >
                                  <a href="#"
                                    >Learner's License Issue</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    >Permanent License Issue </a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    >Driving License Renewal</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    >Duplicate Driving License Issue</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    >Information Changes | Correction on Driving License</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="international-driving-permit.php"
                                    >International Driving Permit Issue</a
                                  >
                                </li>
                  </ul>
                </li>
                <li class="menu-item-has-children">
                  <a href="vehicle-service.php">Vehicle Services</a>
                  <ul class="sub-menu p-2" style="width: 240px">
                  <li>
                                  <a href="#"
                                    >Ownership Transfer of the Vehicle </a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    >Duplicate Registration Certificate Issue</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="#"
                                    >Renewal of Registration Certificate</a
                                  >
                                </li>
                                <li>
                                  <a

                                    href="#"
                                    >Address Change | Correction in Registration

                                    </a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    >Hypothecation Cancellation</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    > Vehicle NOC Issue </a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    > Vehicle NOC Submit </a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    >Vehicle Insurance</a
                                  >
                                </li>
                  </ul>
                </li>
              </ul>
            </li>
            
            <li>
              <a href="contact.php">Contact</a>
            </li>
            <li class="sub-menu">
              <a href="#">Book Now</a>
            </li>
          </ul>
        </div>
        <div class="col-auto">
              <div class="header-links header-right">
                <ul>
                  <li>
                    <div class="header-social">
                      <a href="https://www.facebook.com/" target="_blank"
                        ><i class="fa-brands fa-facebook fa-xl"></i></a>
                      <a href="https://www.instagram.com/rto_.services/" target="_blank"
                        ><i class="fa-brands fa-instagram fa-xl"></i></a>
                    </div>
                  </li>
                  
                </ul>
              </div>
            </div>
      </div>
    </div>
    <header class="th-header header-layout1">
      <div class="header-top">
        <div class="container">
          <div
            class="row justify-content-center justify-content-lg-between align-items-center gy-2"
          >
            <div class="col-auto d-none d-lg-block">
              <div class="header-links">
                <ul>
                  <li>
                    <i class="far fa-phone"></i
                    ><a href="tel:9595856447">+91 9595856447</a>
                  </li>
                  <li class="d-none d-xl-inline-block">
                    <i class="far fa-envelope"></i
                    ><a href="mailto:arvindupadhyay2928@gmail.com">arvindupadhyay2928@gmail.com</a>
                  </li>
                  <li><i class="far fa-clock"></i>Mon - Sat: 9:00 AM - 6:00 PM</li>
                </ul>
              </div>
            </div>
            <div class="col-auto">
              <div class="header-links header-right">
                <ul>
                  <li>
                    <div class="header-social">
                      <span class="social-title">Follow Us:</span>
                      <a href="https://www.facebook.com/" target="_blank"
                        ><i class="fa-brands fa-facebook-f"></i></a>
                      <a href="https://www.instagram.com/rto_.services/" target="_blank"
                        ><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
                    </div>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
          <div class="container">
            <div class="row align-items-center justify-content-between">
              <div class="col-6">
                <div class="header-logo">
                  <a href="index.php"
                    ><img src="assets/img/logo.png" alt="Edura"
                  /></a>
                </div>
              </div>
              <div class="col-auto">
                <div class="row">
                  <div class="col-auto">
                    <nav class="main-menu d-none d-lg-inline-block">
                      <ul>
                        <li class="sub-menu">
                          <a href="index.php">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                          <a href="#">Services</a>
                          <ul
                            class="sub-menu p-2 pl-0"
                            style="width: 240px"
                          >
                            <li class="menu-item-has-children pb-2">
                              <a href="driving-related-service.php"
                                >Driving Related Services</a
                              >

                              <ul class="sub-menu p-2" style="width: 240px">
                              <li >
                                  <a href="#"
                                    >Learner's License Issue</a

                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    >Permanent License Issue </a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    >Driving License Renewal</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    >Duplicate Driving License Issue</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    >Information Changes | Correction on Driving License</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="international-driving-permit.php"
                                    >International Driving Permit Issue</a
                                  >
                                </li>
                                
                              </ul>
                            </li>
                            <li class="menu-item-has-children">
                              <a href="vehicle-service.php"
                                >Vehicle Related Services</a
                              >
                              <ul class="sub-menu p-2" style="width: 240px">
                              <li>
                                  <a href="#"
                                    >Ownership Transfer of the Vehicle </a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    >Duplicate Registration Certificate Issue</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="#"
                                    >Renewal of Registration Certificate</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="#"
                                    >Address Change | Correction in Registration
                                    Certificate</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    >Hypothecation Cancellation</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    > Vehicle NOC Issue </a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    > Vehicle NOC Submit </a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    >Vehicle Insurance</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    >Pay Only Road Tax</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    >NOC Cancellation</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    >Registration of New Vehicle</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    >Road Tax Refund</a
                                  >
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="about.php">About Us</a>
                        </li>
                        
                        

                        <li class="sub-menu">
                          <a href="contact.php">Contact</a>
                        </li>

                        <li
                          class="ast-masthead-custom-menu-items button-custom-menu-item"
                        >
                          <a
                            
                            href="#"
                           
                            >BOOK NOW</a
                          >
                        </li>
                      </ul>
                    </nav>
                    <button
                      type="button"
                      class="th-menu-toggle d-block d-lg-none"
                    >
                      <i class="far fa-bars"></i>
                    </button>
                  </div>
                  <!-- <div class="col-auto d-none d-xl-block">
                    <div class="header-button">
                      <button type="button" class="icon-btn searchBoxToggler">
                        <i class="far fa-search"></i>
                      </button>
                      <a href="wishlist.php" class="icon-btn">
                        <i class="far fa-heart"></i>
                        <span class="badge">3</span>
                      </a>
                      <button type="button" class="icon-btn sideMenuToggler">
                        <i class="far fa-shopping-cart"></i>
                        <span class="badge">5</span>
                      </button>
                      <a href="contact.php" class="th-btn ml-25"
                        >Contact Us <i class="fas fa-arrow-right ms-1"></i
                      ></a>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <?php
function breadCrum($title, $parent=array()){
    ?>
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb_shape_1_1.png" data-overlay="title" data-opacity="8">
        <div class="breadcumb-shape" data-bg-src="assets/img/bg/breadcumb_shape_1_1.png">
        </div>
        <div class="shape-mockup breadcumb-shape2 jump d-lg-block d-none" data-right="30px" data-bottom="30px">
            <img src="assets/img/bg/breadcumb_shape_1_2.png" alt="shape">
        </div>
        <div class="shape-mockup breadcumb-shape3 jump-reverse d-lg-block d-none" data-left="50px" data-bottom="80px">
            <img src="assets/img/bg/breadcumb_shape_1_3.png" alt="shape">
        </div>
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title"><?= $title; ?></h1>
                <ul class="breadcumb-menu">
                    <li>
                        <a href="index.php">
                            <i class="fas fa-home"></i> 
                        </a>
                    </li>
                    <?php
                    if(count($parent)){
                        foreach($parent as $p){
                            ?>
                            <li><a href="<?= $p[1]; ?>"><?= $p[0]; ?></a></li>
                            <?php
                        }
                    }
                    ?>
                    <li><?= $title; ?></li>
                </ul>
            </div>
        </div>
    </div>
    <?php
}
?>
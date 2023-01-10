<?php 
require ("includes/connection.php");
require ("functions/common_function.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hi.YOu Store</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="css/store.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <style>
.store-add-to-cart{border-radius:.2rem; width:80%;
  margin:9px; cursor:pointer;
            margin-left:12px;text-align: center;border: 0px solid var(--eerie-black);background: black; color: #fff;}
      </style>

</head>

<body>


  <div class="store-overlay" data-overlay></div>

  <!--
    - MODAL
  -->

  <div class="store-modal" data-modal>

    <div class="store-modal-close-overlay" data-modal-overlay></div>

    <div class="store-modal-content">

      <button class="store-modal-close-btn" data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="store-newsletter-img">
        <img src="./assets/images/newsletter.png" alt="subscribe newsletter" width="400" height="400">
      </div>

      <div class="store-newsletter">

        <form action="#">

          <div class="store-newsletter-header">

            <h3 class="store-newsletter-title">Subscribe Newsletter.</h3>

            <p class="store-newsletter-desc">
              Subscribe the <b></b> to get latest products and discount update.
            </p>

          </div>

          <input type="email" name="email" class="store-email-field" placeholder="Email Address" required>

          <button type="submit" class="store-btn-newsletter">Subscribe</button>

        </form>

      </div>

    </div>

  </div>





  <!--
    - NOTIFICATION TOAST
  -->

  <div class="store-notification-toast" data-toast>

    <button class="store-toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="store-toast-banner">
      <img src="./assets/images/products/jewellery-1.jpg" alt="Rose Gold Earrings" width="80" height="70">
    </div>

    <div class="store-toast-detail">

      <p class="store-toast-message">
        Someone in new just bought
      </p>

      <p class="store-toast-title">
        Rose Gold Earrings
      </p>

      <p class="store-toast-meta">
        <time datetime="PT2M">2 Minutes</time> ago
      </p>

    </div>

  </div>





  <!--
    - HEADER
  -->

  <header>

    <div class="store-header-top">

      <div class="store-container">

        <ul class="store-header-social-container">

          <li>
            <a href="#" class="store-social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="store-social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="store-social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="store-social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

        <div class="store-header-alert-news">
          <p>
            <b>Free Shipping</b>
            This Week Order Over - $55
          </p>
        </div>

        <div class="store-header-top-actions">

          <select name="currency">

            <option value="usd">USD &dollar;</option>
            <option value="eur">EUR &euro;</option>

          </select>

          <select name="language">

            <option value="en-US">English</option>
            <option value="es-ES">Espa&ntilde;ol</option>
            <option value="fr">Fran&ccedil;ais</option>

          </select>

        </div>

      </div>

    </div>
 
    <div class="store-header-main">

      <div class="store-container">

        <a href="#" class="store-header-logo">
          <img src="..." alt="Aurthor Jean Pierre" width="120" height="36">
        </a>
        <div class="store-header-search-container">
        <form action="search_product.php" method="get">
          <input type="search" name="search_data"  class="store-search-field" placeholder="Enter your product name...">

          <button class="store-search-btn" name="search_data_products"   >
            <ion-icon name="search-outline"></ion-icon>
          </button>
          </form>
        </div>
        

        <div class="store-header-user-actions"style=" 
      ">

          <button class="store-action-btn" style="margin: 2px;">
            <ion-icon name="person-outline"  style="margin: 2px;"></ion-icon>
          </button> 
          <button class="store-action-btn">
            <ion-icon name="heart-outline" ></ion-icon>
            <span class="store-count">0</span>
  </button>
  <?php         
cart();

?>

        <button class="store-action-btn">
          <a href="cart.php"><ion-icon name="bag-handle-outline"></ion-icon></a>
            <span class="store-count"><?php cart_items_num(); ?></span>
          </button>
         

        </div>

      </div>

    </div>
   

    <nav class="store-desktop-navigation-menu">

      <div class="store-container">

        <ul class="store-desktop-menu-category-list">

          <li class="store-menu-category">
            <a href="store.php" class="store-menu-title">Home</a>
          </li>

          <li class="store-menu-category">
            <a href="#" class="store-menu-title">Categories</a>
              <!-- nav header desktop bar categories section after home start here--->

            <div class="store-dropdown-panel">
            <?php
          get_fast_link_categoires();
            ?>
            </div>
              <!-- nav header desktop bar categories section after home End here--->

          </li>

          <li class="store-menu-category">
            <a href="#" class="store-menu-title">Men's</a>

            <ul class="store-dropdown-list">

              <li class="store-dropdown-item">
                <a href="#">Shirt</a>
              </li>

              <li class="store-dropdown-item">
                <a href="#">Shorts & Jeans</a>
              </li>

              <li class="store-dropdown-item">
                <a href="#">Safety Shoes</a>
              </li>

              <li class="store-dropdown-item">
                <a href="#">Wallet</a>
              </li>

            </ul>
          </li>

          <li class="store-menu-category">
            <a href="#" class="store-menu-title">Women's</a>

            <ul class="store-dropdown-list">

              <li class="store-dropdown-item">
                <a href="#">Dress & Frock</a>
              </li>

              <li class="store-dropdown-item">
                <a href="#">Earrings</a>
              </li>

              <li class="store-dropdown-item">
                <a href="#">Necklace</a>
              </li>

              <li class="store-dropdown-item">
                <a href="#">Makeup Kit</a>
              </li>

            </ul>
          </li>

          <li class="store-menu-category">
            <a href="#" class="store-menu-title">Perfume</a>

            <ul class="store-dropdown-list">

              <li class="store-dropdown-item">
                <a href="#">Clothes Perfume</a>
              </li>

              <li class="store-dropdown-item">
                <a href="#">Deodorant</a>
              </li>

              <li class="store-dropdown-item">
                <a href="#">Flower Fragrance</a>
              </li>

              <li class="store-dropdown-item">
                <a href="#">Air Freshener</a>
              </li>

            </ul>
          </li>

          <li class="store-menu-category">
            <a href="#" class="store-menu-title">Blog</a>
          </li>

          <li class="store-menu-category">
            <a href="#" class="store-menu-title">Hot Offers</a>
          </li>
          <?php  if (!isset($_SESSION['info']['username'])):?>
        <li class="store-menu-category">
          <a href="customers_area/customer_register.php" class="store-menu-title">Register</a>
        </li>
        <li class="store-menu-category">
          <a href="customers_area/customer_login.php" class="store-menu-title">Login</a>
        </li>
      
        <?php endif;?>
        <?php  if (isset($_SESSION['info']['username'])):?>

        <li class="store-menu-category">
          <a href="customers_area/customer_profile.php" class="store-menu-title">My Account</a>
        </li>
        <li>
        <a href="customers_area/customer_logout.php" class="store-menu-title">Logout</a>

        </li>
        <?php endif;?>


        </ul>

      </div>

    </nav>

    <div class="store-mobile-bottom-navigation">

      <button class="store-action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="store-action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

        <span class="store-count"><?php cart_items_num(); ?></span>
      </button>

      <button class="store-action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <button class="store-action-btn">
        <ion-icon name="heart-outline"></ion-icon>

        <span class="store-count">0</span>
      </button>

      <button class="store-action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>

    </div>

    <nav class="store-mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="store-menu-top">
        <h2 class="store-menu-title">Menu</h2>

        <button class="store-menu-close-btn" style="color: tomato; font-size:1rem;" data-mobile-menu-close-btn>
         close
          <ion-icon name="close-outline"  style="color: tomato; font-size:1rem;"> </ion-icon>
        </button>
      </div>

      <ul class="store-mobile-menu-category-list">

        <li class="store-menu-category">
          <a href="#" class="store-menu-title">Home</a>
        </li>

        <li class="store-menu-category">

          <button class="store-accordion-menu" data-accordion-btn>
            <p class="store-menu-title">Men's</p>

            <div>
              <ion-icon name="add-outline" class="store-add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="store-remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="store-submenu-category-list" data-accordion>

            <li class="store-submenu-category">
              <a href="#" class="store-submenu-title">Shirt</a>
            </li>

            <li class="store-submenu-category">
              <a href="#" class="store-submenu-title">Shorts & Jeans</a>
            </li>

            <li class="store-submenu-category">
              <a href="#" class="store-submenu-title">Safety Shoes</a>
            </li>

            <li class="store-submenu-category">
              <a href="#" class="store-submenu-title">Wallet</a>
            </li>

          </ul>

        </li>

        <li class="store-menu-category">

          <button class="store-accordion-menu" data-accordion-btn>
            <p class="store-menu-title">Women's</p>

            <div>
              <ion-icon name="add-outline" class="store-add-icon"> </ion-icon>
              <ion-icon name="remove-outline" class="store-remove-icon"></ion-icon>

            </div>
          </button>

          <ul class="store-submenu-category-list" data-accordion>

            <li class="store-submenu-category">
              <a href="#" class="store-submenu-title">Dress & Frock</a>
            </li>

            <li class="store-submenu-category">
              <a href="#" class="store-submenu-title">Earrings</a>
            </li>

            <li class="store-submenu-category">
              <a href="#" class="store-submenu-title">Necklace</a>
            </li>

            <li class="store-submenu-category">
              <a href="#" class="store-submenu-title">Makeup Kit</a>
            </li>

          </ul>

        </li>

        <li class="store-menu-category">

          <button class="store-accordion-menu" data-accordion-btn>
            <p class="store-menu-title">Jewelry</p>

            <div>
              <ion-icon name="add-outline" class="store-add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="store-remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="store-submenu-category-list" data-accordion>

            <li class="store-submenu-category">
              <a href="#" class="store-submenu-title">Earrings</a>
            </li>

            <li class="store-submenu-category">
              <a href="#" class="store-submenu-title">Couple Rings</a>
            </li>

            <li class="store-submenu-category">
              <a href="#" class="store-submenu-title">Necklace</a>
            </li>

            <li class="store-submenu-category">
              <a href="#" class="store-submenu-title">Bracelets</a>
            </li>

          </ul>

        </li>

        <li class="store-menu-category">

          <button class="store-accordion-menu" data-accordion-btn>
            <p class="store-menu-title">Perfume</p>

            <div>
              <ion-icon name="add-outline" class="store-add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="store-remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="store-submenu-category-list" data-accordion>

            <li class="store-submenu-category">
              <a href="#" class="store-submenu-title">Clothes Perfume</a>
            </li>

            <li class="store-submenu-category">
              <a href="#" class="store-submenu-title">Deodorant</a>
            </li>

            <li class="store-submenu-category">
              <a href="#" class="store-submenu-title">Flower Fragrance</a>
            </li>

            <li class="store-submenu-category">
              <a href="#" class="store-submenu-title">Air Freshener</a>
            </li>

          </ul>

        </li>

        <li class="store-menu-category">
          <a href="#" class="store-menu-title">Blog</a>
        </li>

        <li class="store-menu-category">
          <a href="#" class="store-menu-title">Hot Offers</a>
        </li>
        <?php  if (!isset($_SESSION['info']['username'])):?>
        <li class="store-menu-category">
          <a href="customers_area/customer_register.php" class="store-menu-title">Register</a>
        </li>
        <li class="store-menu-category">
          <a href="customers_area/customer_login.php"class="store-menu-title">Login</a>
        </li>
        <?php endif;?>
        <?php  if (isset($_SESSION['info']['username'])):?>

        <li class="store-menu-category">
          <a href="customers_area/customer_profile.php"class="store-menu-title">My Account</a>
          <a href="customers_area/customer_logout.php"class="store-menu-title">Logout</a>
        </li>
        <?php endif;?>


      </ul>

      <div class="store-menu-bottom">

        <ul class="store-menu-category-list">

          <li class="store-menu-category">

            <button class="store-accordion-menu" data-accordion-btn>
              <p class="store-menu-title">Language</p>

              <ion-icon name="caret-back-outline" class="store-caret-back"></ion-icon>
            </button>

            <ul class="store-submenu-category-list" data-accordion>

              <li class="store-submenu-category">
                <a href="#" class="store-submenu-title">English</a>
              </li>

              <li class="store-submenu-category">
                <a href="#" class="store-submenu-title">Espa&ntilde;ol</a>
              </li>

              <li class="store-submenu-category">
                <a href="#" class="store-submenu-title">Fren&ccedil;h</a>
              </li>

            </ul>

          </li>

          <li class="store-menu-category">
            <button class="store-accordion-menu" data-accordion-btn>
              <p class="store-menu-title">Currency</p>
              <ion-icon name="caret-back-outline" class="store-caret-back"></ion-icon>
            </button>

            <ul class="store-submenu-category-list" data-accordion>
              <li class="store-submenu-category">
                <a href="#" class="store-submenu-title">USD &dollar;</a>
              </li>

              <li class="store-submenu-category">
                <a href="#" class="store-submenu-title">EUR &euro;</a>
              </li>
            </ul>
          </li>

        </ul>

        <ul class="store-menu-social-container">

          <li>
            <a href="#" class="store-social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="store-social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="store-social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="store-social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>
  

        </ul>

      </div>
  

    </nav>

  </header>





  <!--
    - MAIN
  -->

 <main>

    <!--
      - BANNER
    

    <div class="store-banner">

      <div class="store-container">

        <div class="store-slider-container has-scrollbar">

          <div class="store-slider-item">

            <img src="./assets/images/banner-1.jpg" alt="women's latest fashion sale" class="store-banner-img">

            <div class="store-banner-content">

              <p class="store-banner-subtitle">Trending item</p>

              <h2 class="store-banner-title">Women's latest fashion sale</h2>

              <p class="store-banner-text">
                starting at &dollar; <b>20</b>.00
              </p>

              <a href="#" class="store-banner-btn">Shop now</a>

            </div>

          </div>

          <div class="store-slider-item">

            <img src="./assets/images/banner-2.jpg" alt="modern sunglasses" class="store-banner-img">

            <div class="store-banner-content">

              <p class="store-banner-subtitle">Trending accessories</p>

              <h2 class="store-banner-title">Modern sunglasses</h2>

              <p class="store-banner-text">
                starting at &dollar; <b>15</b>.00
              </p>

              <a href="#" class="store-banner-btn">Shop now</a>

            </div>

          </div>

          <div class="store-slider-item">

            <img src="./assets/images/banner-3.jpg" alt="new fashion summer sale" class="store-banner-img">

            <div class="store-banner-content">

              <p class="store-banner-subtitle">Sale Offer</p>

              <h2 class="store-banner-title">New fashion summer sale</h2>

              <p class="store-banner-text">
                starting at &dollar; <b>29</b>.99
              </p>

              <a href="#" class="store-banner-btn">Shop now</a>

            </div>

          </div>

        </div>

      </div>

    </div>

-->
 


    <!--
      - CATEGORY
   

    <div class="store-category">

      <div class="store-container">

        <div class="store-category-item-container has-scrollbar">

          <div class="store-category-item">

            <div class="store-category-img-box">
              <img src="./assets/images/icons/dress.svg" alt="dress & frock" width="30">
            </div>

            <div class="store-category-content-box">

              <div class="store-category-content-flex">
                <h3 class="store-category-item-title">Dress & frock</h3>

                <p class="store-category-item-amount">(53)</p>
              </div>

              <a href="#" class="store-category-btn">Show all</a>

            </div>

          </div>

          <div class="store-category-item">

            <div class="store-category-img-box">
              <img src="./assets/images/icons/coat.svg" alt="winter wear" width="30">
            </div>

            <div class="store-category-content-box">

              <div class="store-category-content-flex">
                <h3 class="store-category-item-title">Winter wear</h3>

                <p class="store-category-item-amount">(58)</p>
              </div>

              <a href="#" class="store-category-btn">Show all</a>

            </div>

          </div>

          <div class="store-category-item">

            <div class="store-category-img-box">
              <img src="./assets/images/icons/glasses.svg" alt="glasses & lens" width="30">
            </div>

            <div class="store-category-content-box">

              <div class="store-category-content-flex">
                <h3 class="store-category-item-title">Glasses & lens</h3>

                <p class="store-category-item-amount">(68)</p>
              </div>

              <a href="#" class="store-category-btn">Show all</a>

            </div>

          </div>

          <div class="store-category-item">

            <div class="store-category-img-box">
              <img src="./assets/images/icons/shorts.svg" alt="shorts & jeans" width="30">
            </div>

            <div class="store-category-content-box">

              <div class="store-category-content-flex">
                <h3 class="store-category-item-title">Shorts & jeans</h3>

                <p class="store-category-item-amount">(84)</p>
              </div>

              <a href="#" class="store-category-btn">Show all</a>

            </div>

          </div>

          <div class="store-category-item">

            <div class="store-category-img-box">
              <img src="./assets/images/icons/tee.svg" alt="t-shirts" width="30">
            </div>

            <div class="store-category-content-box">

              <div class="store-category-content-flex">
                <h3 class="store-category-item-title">T-shirts</h3>

                <p class="store-category-item-amount">(35)</p>
              </div>

              <a href="#" class="store-category-btn">Show all</a>

            </div>

          </div>

          <div class="store-category-item">

            <div class="store-category-img-box">
              <img src="./assets/images/icons/jacket.svg" alt="jacket" width="30">
            </div>

            <div class="store-category-content-box">

              <div class="store-category-content-flex">
                <h3 class="store-category-item-title">Jacket</h3>

                <p class="store-category-item-amount">(16)</p>
              </div>

              <a href="#" class="store-category-btn">Show all</a>

            </div>

          </div>

          <div class="store-category-item">

            <div class="store-category-img-box">
              <img src="./assets/images/icons/watch.svg" alt="watch" width="30">
            </div>

            <div class="store-category-content-box">

              <div class="store-category-content-flex">
                <h3 class="store-category-item-title">Watch</h3>

                <p class="store-category-item-amount">(27)</p>
              </div>

              <a href="#" class="store-category-btn">Show all</a>

            </div>

          </div>

          <div class="store-category-item">

            <div class="store-category-img-box">
              <img src="./assets/images/icons/hat.svg" alt="hat & caps" width="30">
            </div>

            <div class="store-category-content-box">

              <div class="store-category-content-flex">
                <h3 class="store-category-item-title">Hat & caps</h3>

                <p class="store-category-item-amount">(39)</p>
              </div>

              <a href="#" class="store-category-btn">Show all</a>

            </div>

          </div>

        </div>

      </div>

    </div> -->





    <!--
      - PRODUCT
    -->

    <div class="store-product-container">

      <div class="store-container">


        <!--
          - SIDEBAR
        -->
<!--Side Bar  staart Here!--->

        <div class="store-sidebar  has-scrollbar" data-mobile-menu>

          <div class="store-sidebar-category">

            <div class="store-sidebar-top">
              <h2 class="store-sidebar-title">Category</h2>

              <button class="store-sidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>
         <!--Side Bar Menu  start Here!--->
            <ul class="store-sidebar-menu-category-list">
            <li class="store-sidebar-menu-category">
                     <?php
              getCategories();
                   ?>
               </li>
            </ul>
         <!--Side Bar Menu  End Here!--->
          </div>
<!--Side Bar  End Here!--->

          <div class="store-product-showcase">

            <h3 class="store-showcase-heading">best sellers</h3>

            <div class="store-showcase-wrapper">

              <div class="store-showcase-container">

                <div class="store-showcase">

                  <a href="#" class="store-showcase-img-box">
                    <img src="./images/img/product1/4.jpg" alt="baby fabric shoes" width="75" height="75"
                      class="store-showcase-img">
                  </a>

                  <div class="store-showcase-content">

                    <a href="#">
                      <h4 class="store-showcase-title">Nike Slides</h4>
                    </a>

                    <div class="store-showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="store-price-box">
                      <del>$28.00</del>
                      <p class="store-price">Frw 25,500</p>
                    </div>

                  </div>

                </div>

                <div class="store-showcase">

                  <a href="#" class="store-showcase-img-box">
                    <img src="./images/img/product2/1.jpg" alt="men's hoodies t-shirt" class="store-showcase-img"
                      width="75" height="75">
                  </a>

                  <div class="store-showcase-content">

                    <a href="#">
                      <h4 class="store-showcase-title">Nike Slides</h4>
                    </a>
                    <div class="store-showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="store-price-box">
                      <del>$45.00</del>
                      <p class="store-price">Frw 37,700</p>
                    </div>

                  </div>

                </div>

                <div class="store-showcase">

                  <a href="#" class="store-showcase-img-box">
                    <img src="./images/img/product1/2.jpg" alt="girls t-shirt" class="store-showcase-img" width="75"
                      height="75">
                  </a>

                  <div class="store-showcase-content">

                    <a href="#">
                      <h4 class="store-showcase-title">Nike Slides</h4>
                    </a>
                    <div class="store-showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="store-price-box">
                      <del>$33.00</del>
                      <p class="store-price">Frw 29,000</p>
                    </div>

                  </div>

                </div>

                <div class="store-showcase">

                  <a href="#" class="store-showcase-img-box">
                    <img src="./images/img/product1/3.jpg" alt="woolen hat for men" class="store-showcase-img" width="75"
                      height="75">
                  </a>

                  <div class="store-showcase-content">

                    <a href="#">
                      <h4 class="store-showcase-title">Nike Slides</h4>
                    </a>
                    <div class="store-showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="store-price-box">
                      <del>$35.00</del>
                      <p class="store-price">Frw 30.500</p>
                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>



        <div class="store-product-box">

          <!--
            - PRODUCT MINIMAL
         -->

          <div class="store-product-minimal">

            <div class="store-product-showcase">

              <h2 class="store-title">New Arrivals</h2>

              <div class="store-showcase-wrapper has-scrollbar">
<!------------------ new arrival first list start here--------------->
                <div class="store-showcase-container">
<!------------------  Fetch new arrival first list start here--------------->

                 <?php
                 newarrivals();

                 ?> 
<!------------------  Fetch new arrival first list Ends here--------------->

              </div>
<!------------------ new arrival first list End here--------------->



<!------------------ new arrival second list start here--------------->
               <!--
                <div class="store-showcase-container">
                
                  <div class="store-showcase">
                
                    <a href="#" class="store-showcase-img-box">
                      <img src="./assets/images/products/jacket-5.jpg" alt="men yarn fleece full-zip jacket" class="store-showcase-img"
                        width="70">
                    </a>
                
                    <div class="store-showcase-content">
                
                      <a href="#">
                        <h4 class="store-showcase-title">MEN Yarn Fleece Full-Zip Jacket</h4>
                      </a>
                
                      <a href="#" class="store-showcase-category">Winter wear</a>
                
                      <div class="store-price-box">
                        <p class="store-price">$61.00</p>
                        <del>$11.00</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="store-showcase">
                
                    <a href="#" class="store-showcase-img-box">
                      <img src="./assets/images/products/jacket-1.jpg" alt="mens winter leathers jackets" class="store-showcase-img"
                        width="70">
                    </a>
                
                    <div class="store-showcase-content">
                
                      <a href="#">
                        <h4 class="store-showcase-title">Mens Winter Leathers Jackets</h4>
                      </a>
                
                      <a href="#" class="store-showcase-category">Winter wear</a>
                
                      <div class="store-price-box">
                        <p class="store-price">$32.00</p>
                        <del>$20.00</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="store-showcase">
                
                    <a href="#" class="store-showcase-img-box">
                      <img src="./assets/images/products/jacket-3.jpg" alt="mens winter leathers jackets" class="store-showcase-img"
                        width="70">
                    </a>
                
                    <div class="store-showcase-content">
                
                      <a href="#">
                        <h4 class="store-showcase-title">Mens Winter Leathers Jackets</h4>
                      </a>
                
                      <a href="#" class="store-showcase-category">Jackets</a>
                
                      <div class="store-price-box">
                        <p class="store-price">$50.00</p>
                        <del>$25.00</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="store-showcase">
                
                    <a href="#" class="store-showcase-img-box">
                      <img src="./assets/images/products/shorts-1.jpg" alt="better basics french terry sweatshorts" class="store-showcase-img"
                        width="70">
                    </a>
                
                    <div class="store-showcase-content">
                
                      <a href="#">
                        <h4 class="store-showcase-title">Better Basics French Terry Sweatshorts</h4>
                      </a>
                
                      <a href="#" class="store-showcase-category">Shorts</a>
                
                      <div class="store-price-box">
                        <p class="store-price">$20.00</p>
                        <del>$10.00</del>
                      </div>
                
                    </div>
                
                  </div>
                </div>-->
<!------------------ new arrival second list End here--------------->


              </div>

            </div>

            <div class="store-product-showcase">
            
              <h2 class="store-title">Trending</h2>
            
              <div class="store-showcase-wrapper  has-scrollbar">
<!------------------ new trendeling first  list Start  here--------------->
                <div class="store-showcase-container">
<!------------------FETCHING  new trendeling first  list Start  here--------------->
            <?php 
            
            getTrendingProducts();
            ?>
<!------------------FETCHING  new trendeling first  list End  here--------------->
                </div>
<!------------------ new trendeling first  list End  here--------------->



<!------------------ new trendeling second list start  here--------------->
            
                <!--<div class="store-showcase-container">
            
                  <div class="store-showcase">
            
                    <a href="#" class="store-showcase-img-box">
                      <img src="./assets/images/products/sports-6.jpg" alt="air tekking shoes - white" class="store-showcase-img"
                        width="70">
                    </a>
            
                    <div class="store-showcase-content">
            
                      <a href="#">
                        <h4 class="store-showcase-title">Air Trekking Shoes - white</h4>
                      </a>
            
                      <a href="#" class="store-showcase-category">Sports</a>
            
                      <div class="store-price-box">
                        <p class="store-price">$52.00</p>
                        <del>$55.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="store-showcase">
            
                    <a href="#" class="store-showcase-img-box">
                      <img src="./assets/images/products/shoe-3.jpg" alt="Boot With Suede Detail" class="store-showcase-img" width="70">
                    </a>
            
                    <div class="store-showcase-content">
            
                      <a href="#">
                        <h4 class="store-showcase-title">Boot With Suede Detail</h4>
                      </a>
            
                      <a href="#" class="store-showcase-category">boots</a>
            
                      <div class="store-price-box">
                        <p class="store-price">$20.00</p>
                        <del>$30.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="store-showcase">
            
                    <a href="#" class="store-showcase-img-box">
                      <img src="./assets/images/products/shoe-1.jpg" alt="men's leather formal wear shoes" class="store-showcase-img"
                        width="70">
                    </a>
            
                    <div class="store-showcase-content">
            
                      <a href="#">
                        <h4 class="store-showcase-title">Men's Leather Formal Wear shoes</h4>
                      </a>
            
                      <a href="#" class="store-showcase-category">formal</a>
            
                      <div class="store-price-box">
                        <p class="store-price">$56.00</p>
                        <del>$78.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="store-showcase">
            
                    <a href="#" class="store-showcase-img-box">
                      <img src="./assets/images/products/shoe-2.jpg" alt="casual men's brown shoes" class="store-showcase-img" width="70">
                    </a>
            
                    <div class="store-showcase-content">
            
                      <a href="#">
                        <h4 class="store-showcase-title">Casual Men's Brown shoes</h4>
                      </a>
            
                      <a href="#" class="store-showcase-category">Casual</a>
            
                      <div class="store-price-box">
                        <p class="store-price">$50.00</p>
                        <del>$55.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>-->
<!------------------ new trendeling second list End here--------------->
            
              </div>
            
            </div>

            <div class="store-product-showcase">
            
              <h2 class="store-title">Top Rated</h2>
            
              <div class="store-showcase-wrapper  has-scrollbar">
<!------------------ new top related  first list End here --------------->
                <div class="store-showcase-container">
<!------------------T FETCHING new top related  first list START here --------------->
           <?php
 getTopRatedProducts();
           ?>
<!------------------ TO FETCHING new top related  first list End here --------------->
                </div>
<!------------------ new top related first list End here--------------->


<!------------------ new top related first list Start here--------------->
            
               <!-- <div class="store-showcase-container">
            
                  <div class="store-showcase">
            
                    <a href="#" class="store-showcase-img-box">
                      <img src="./assets/images/products/jewellery-2.jpg" alt="platinum zircon classic ring" class="store-showcase-img"
                        width="70">
                    </a>
            
                    <div class="store-showcase-content">
            
                      <a href="#">
                        <h4 class="store-showcase-title">platinum Zircon Classic Ring</h4>
                      </a>
            
                      <a href="#" class="store-showcase-category">jewellery</a>
            
                      <div class="store-price-box">
                        <p class="store-price">$62.00</p>
                        <del>$65.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="store-showcase">
            
                    <a href="#" class="store-showcase-img-box">
                      <img src="./assets/images/products/watch-1.jpg" alt="smart watche vital plus" class="store-showcase-img" width="70">
                    </a>
            
                    <div class="store-showcase-content">
            
                      <a href="#">
                        <h4 class="store-showcase-title">Smart watche Vital Plus</h4>
                      </a>
            
                      <a href="#" class="store-showcase-category">Watches</a>
            
                      <div class="store-price-box">
                        <p class="store-price">$56.00</p>
                        <del>$78.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="store-showcase">
            
                    <a href="#" class="store-showcase-img-box">
                      <img src="./assets/images/products/shampoo.jpg" alt="shampoo conditioner packs" class="store-showcase-img"
                        width="70">
                    </a>
            
                    <div class="store-showcase-content">
            
                      <a href="#">
                        <h4 class="store-showcase-title">shampoo conditioner packs</h4>
                      </a>
            
                      <a href="#" class="store-showcase-category">cosmetics</a>
            
                      <div class="store-price-box">
                        <p class="store-price">$20.00</p>
                        <del>$30.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="store-showcase">
            
                    <a href="#" class="store-showcase-img-box">
                      <img src="./assets/images/products/jewellery-1.jpg" alt="rose gold peacock earrings" class="store-showcase-img"
                        width="70">
                    </a>
            
                    <div class="store-showcase-content">
            
                      <a href="#">
                        <h4 class="store-showcase-title">Rose Gold Peacock Earrings</h4>
                      </a>
            
                      <a href="#" class="store-showcase-category">jewellery</a>
            
                      <div class="store-price-box">
                        <p class="store-price">$20.00</p>
                        <del>$30.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>-->
<!------------------ new top related Second list End here--------------->
            
              </div>
            
            </div>

          </div> 



          <!--
            - PRODUCT FEATURED
        

          <div class="store-product-featured">

            <h2 class="store-title">Deal of the day</h2>

            <div class="store-showcase-wrapper has-scrollbar">

              <div class="store-showcase-container">

                <div class="store-showcase">
                  
                  <div class="store-showcase-banner">
                    <img src="./assets/images/products/shampoo.jpg" alt="shampoo, conditioner & facewash packs" class="store-showcase-img">
                  </div>

                  <div class="store-showcase-content">
                    
                    <div class="store-showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <a href="#">
                      <h3 class="store-showcase-title">shampoo, conditioner & facewash packs</h3>
                    </a>

                    <p class="store-showcase-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet consectetur Lorem ipsum dolor
                    </p>

                    <div class="store-price-box">
                      <p class="store-price">$150.00</p>

                      <del>$200.00</del>
                    </div>

                    <button class="store-add-cart-btn">add to cart</button>

                    <div class="store-showcase-status">
                      <div class="store-wrapper">
                        <p>
                          already sold: <b>20</b>
                        </p>

                        <p>
                          available: <b>40</b>
                        </p>
                      </div>

                      <div class="store-showcase-status-bar"></div>
                    </div>

                    <div class="store-countdown-box">

                      <p class="store-countdown-desc">
                        Hurry Up! Offer ends in:
                      </p>

                      <div class="store-countdown">

                        <div class="store-countdown-content">

                          <p class="store-display-number">360</p>

                          <p class="store-display-text">Days</p>

                        </div>

                        <div class="store-countdown-content">
                          <p class="store-display-number">24</p>
                          <p class="store-display-text">Hours</p>
                        </div>

                        <div class="store-countdown-content">
                          <p class="store-display-number">59</p>
                          <p class="store-display-text">Min</p>
                        </div>

                        <div class="store-countdown-content">
                          <p class="store-display-number">00</p>
                          <p class="store-display-text">Sec</p>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="store-showcase-container">
              
                <div class="store-showcase">
              
                  <div class="store-showcase-banner">
                    <img src="./assets/images/products/jewellery-1.jpg" alt="Rose Gold diamonds Earring" class="store-showcase-img">
                  </div>
              
                  <div class="store-showcase-content">
              
                    <div class="store-showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>
              
                    <h3 class="store-showcase-title">
                      <a href="#" class="store-showcase-title">Rose Gold diamonds Earring</a>
                    </h3>
              
                    <p class="store-showcase-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet consectetur Lorem ipsum dolor
                    </p>
              
                    <div class="store-price-box">
                      <p class="store-price">$1990.00</p>
                      <del>$2000.00</del>
                    </div>
              
                    <button class="store-add-cart-btn">add to cart</button>
              
                    <div class="store-showcase-status">
                      <div class="store-wrapper">
                        <p> already sold: <b>15</b> </p>
              
                        <p> available: <b>40</b> </p>
                      </div>
              
                      <div class="store-showcase-status-bar"></div>
                    </div>
              
                    <div class="store-countdown-box">
              
                      <p class="store-countdown-desc">Hurry Up! Offer ends in:</p>
              
                      <div class="store-countdown">
                        <div class="store-countdown-content">
                          <p class="store-display-number">360</p>
                          <p class="store-display-text">Days</p>
                        </div>
              
                        <div class="store-countdown-content">
                          <p class="store-display-number">24</p>
                          <p class="store-display-text">Hours</p>
                        </div>
              
                        <div class="store-countdown-content">
                          <p class="store-display-number">59</p>
                          <p class="store-display-text">Min</p>
                        </div>
              
                        <div class="store-countdown-content">
                          <p class="store-display-number">00</p>
                          <p class="store-display-text">Sec</p>
                        </div>
                      </div>
              
                    </div>
              
                  </div>
              
                </div>
              
              </div>

            </div>

          </div>  -->



          <!--
            -  fetch herePRODUCT GRID
          -->

          <div class="store-product-main">

            <h2 class="store-title">New Products</h2>
          
            <div class="store-product-grid">
              
<!--Fetch all products start here-->
            <?php
            getproducts();
            get_unique_category();

            ?>
<!--Fetch all products End here-->
          </div> <!--end of product here grid-->

        </div>

      </div>

    </div><!--end of product main here -->





    <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

    <div>

      <div class="store-container" >

        <div class="store-testimonials-box">

          <!--
            - TESTIMONIALS
          -->

          <div class="store-testimonial">

            <h2 class="store-title">testimonial</h2>

            <div class="store-testimonial-card">

              <img src="./images/iimg/testimonial-1.jpg" alt="alan doe" class="store-testimonial-banner" width="80" height="80">

              <p class="store-testimonial-name">Alan Doe</p>

              <p class="store-testimonial-title">CEO & Founder Invision</p>

              <img src="./images/iimg/icons/quotes.svg" alt="quotation" class="store-quotation-img" width="26">

              <p class="store-testimonial-desc">
                Lorem ipsum dolor sit amet consectetur Lorem ipsum
                dolor dolor sit amet.
              </p>

            </div>

          </div>



          <!--
            - CTA
          

          <div class="store-cta-container">

            <img src="./assets/images/cta-banner.jpg" alt="summer collection" class="store-cta-banner">

            <a href="#" class="store-cta-content">

              <p class="store-discount">25% Discount</p>

              <h2 class="store-cta-title">Summer collection</h2>

              <p class="store-cta-text">Starting @ $10</p>

              <button class="store-cta-btn">Shop now</button>

            </a>

          </div>-->



          <!--
            - SERVICE
         

          <div class="store-service">

            <h2 class="store-title">Our Services</h2>

            <div class="store-service-container">

              <a href="#" class="store-service-item">

                <div class="store-service-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>

                <div class="store-service-content">

                  <h3 class="store-service-title">Worldwide Delivery</h3>
                  <p class="store-service-desc">For Order Over $100</p>

                </div>

              </a>

              <a href="#" class="store-service-item">
              
                <div class="store-service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>
              
                <div class="store-service-content">
              
                  <h3 class="store-service-title">Next Day delivery</h3>
                  <p class="store-service-desc">UK Orders Only</p>
              
                </div>
              
              </a>

              <a href="#" class="store-service-item">
              
                <div class="store-service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>
              
                <div class="store-service-content">
              
                  <h3 class="store-service-title">Best Online Support</h3>
                  <p class="store-service-desc">Hours: 8AM - 11PM</p>
              
                </div>
              
              </a>

              <a href="#" class="store-service-item">
              
                <div class="store-service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>
              
                <div class="store-service-content">
              
                  <h3 class="store-service-title">Return Policy</h3>
                  <p class="store-service-desc">Easy & Free Return</p>
              
                </div>
              
              </a>

              <a href="#" class="store-service-item">
              
                <div class="store-service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>
              
                <div class="store-service-content">
              
                  <h3 class="store-service-title">30% money back</h3>
                  <p class="store-service-desc">For Order Over $100</p>
              
                </div>
              
              </a>

            </div>

          </div> -->

        </div>

      </div>

    </div>





    <!--
      - BLOG
   
    <div class="store-blog">

      <div class="store-container">

        <div class="store-blog-container has-scrollbar">

          <div class="store-blog-card">

            <a href="#">
              <img src="./assets/images/blog-1.jpg" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300" class="store-blog-banner">
            </a>

            <div class="store-blog-content">

              <a href="#" class="store-blog-category">Fashion</a>

              <a href="#">
                <h3 class="store-blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</h3>
              </a>

              <p class="store-blog-meta">
                By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06, 2022</time>
              </p>

            </div>

          </div>

          <div class="store-blog-card">
          
            <a href="#">
              <img src="./assets/images/blog-2.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="store-blog-banner" width="300">
            </a>
          
            <div class="store-blog-content">
          
              <a href="#" class="store-blog-category">Clothes</a>
          
              <h3>
                <a href="#" class="store-blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
              </h3>
          
              <p class="store-blog-meta">
                By <cite>Mr Robin</cite> / <time datetime="2022-01-18">Jan 18, 2022</time>
              </p>
          
            </div>
          
          </div>

          <div class="store-blog-card">
          
            <a href="#">
              <img src="./assets/images/blog-3.jpg" alt="EBT vendors: Claim Your Share of SNAP Online Revenue."
                class="store-blog-banner" width="300">
            </a>
          
            <div class="store-blog-content">
          
              <a href="#" class="store-blog-category">Shoes</a>
          
              <h3>
                <a href="#" class="store-blog-title">EBT vendors: Claim Your Share of SNAP Online Revenue.</a>
              </h3>
          
              <p class="store-blog-meta">
                By <cite>Mr Selsa</cite> / <time datetime="2022-02-10">Feb 10, 2022</time>
              </p>
          
            </div>
          
          </div>

          <div class="store-blog-card">
          
            <a href="#">
              <img src="./assets/images/blog-4.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="store-blog-banner" width="300">
            </a>
          
            <div class="store-blog-content">
          
              <a href="#" class="store-blog-category">Electronics</a>
          
              <h3>
                <a href="#" class="store-blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
              </h3>
          
              <p class="store-blog-meta">
                By <cite>Mr Pawar</cite> / <time datetime="2022-03-15">Mar 15, 2022</time>
              </p>
          
            </div>
          
          </div>

        </div>

      </div>

    </div> -->


  </main>



 <!--
    - FOOTER
  
-->
<footer>

<div class="store-footer-category">



<div class="store-footer-nav">

  <div class="store-container">

    <ul class="store-footer-nav-list">

      <li class="store-footer-nav-item">
        <h2 class="store-nav-title">Popular Categories</h2>
      </li>

      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">Fashion</a>
      </li>

      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">Electronic</a>
      </li>

      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">Cosmetic</a>
      </li>

      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">Health</a>
      </li>

      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">Watches</a>
      </li>

    </ul>

    <ul class="store-footer-nav-list">
    
      <li class="store-footer-nav-item">
        <h2 class="store-nav-title">Products</h2>
      </li>
    
      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">Prices drop</a>
      </li>
    
      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">New products</a>
      </li>
    
      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">Best sales</a>
      </li>
    
      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">Contact us</a>
      </li>
    
      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">Sitemap</a>
      </li>
    
    </ul>

    <ul class="store-footer-nav-list">
    
      <li class="store-footer-nav-item">
        <h2 class="store-nav-title">Our Company</h2>
      </li>
    
      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">Delivery</a>
      </li>
    
      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">Legal Notice</a>
      </li>
    
      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">Terms and conditions</a>
      </li>
    
      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">About us</a>
      </li>
    
      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">Secure payment</a>
      </li>
    
    </ul>

    <ul class="store-footer-nav-list">
    
      <li class="store-footer-nav-item">
        <h2 class="store-nav-title">Services</h2>
      </li>
    
      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">Prices drop</a>
      </li>
    
      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">New products</a>
      </li>
    
      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">Best sales</a>
      </li>
    
      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">Contact us</a>
      </li>
    
      <li class="store-footer-nav-item">
        <a href="#" class="store-footer-nav-link">Sitemap</a>
      </li>
    
    </ul>

    <ul class="store-footer-nav-list">

      <li class="store-footer-nav-item">
        <h2 class="store-nav-title">Contact</h2>
      </li>

      <li class="store-footer-nav-item flex">
        <div class="store-icon-box">
          <ion-icon name="location-outline"></ion-icon>
        </div>

        <address class="store-content">
          World Wide
        </address>
      </li>

      <li class="store-footer-nav-item flex">
        <div class="store-icon-box">
          <ion-icon name="call-outline"></ion-icon>
        </div>

        <a href="tel:+607936-8058" class="store-footer-nav-link">+250785188138</a>
      </li>

      <li class="store-footer-nav-item flex">
        <div class="store-icon-box">
          <ion-icon name="mail-outline"></ion-icon>
        </div>

        <a href="catcherwe@@gmail.com" class="store-footer-nav-link">catcherwe@gmail.com</a>
      </li>

    </ul>

    <ul class="store-footer-nav-list">

      <li class="store-footer-nav-item">
        <h2 class="store-nav-title">Follow Us</h2>
      </li>

      <li>
        <ul class="store-social-link">

          <li class="store-footer-nav-item">
            <a href="#" class="store-footer-nav-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="store-footer-nav-item">
            <a href="#" class="store-footer-nav-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li class="store-footer-nav-item">
            <a href="#" class="store-footer-nav-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li class="store-footer-nav-item">
            <a href="#" class="store-footer-nav-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>
      </li>

    </ul>

  </div>

</div>

<div class="store-footer-bottom">

  <div class="store-container">

    <img src="./assets/images/payment.png" alt="payment method" class="store-payment-img">

    <p class="store-copyright">
      Copyright &copy; <a href="#">2022 p<p>Jean Pierre Author</p></a> .
    </p>

  </div>

</div>

</footer>






<!--
- custom js link
-->
<script src="js/store.js"></script>
<script src="js/product_detail.js"></script>

<!--
- ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
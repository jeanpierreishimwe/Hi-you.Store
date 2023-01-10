<!DOCTYPE html>
   <?php 
require ("includes/connection.php");
require ("functions/common_function.php");
   session_start();
?>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Shopli</title>
   <!-- bootstrap css link-->
   <link rel="stylesheet" href="assets/bootstrap5/css/bootstrap.css"><!--bootstrap v5.1.3-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <!-- font awesome   link-->
   <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
   <!-- font awesome cdn  link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- customer stylisheeet-->
   <link rel="stylesheet" href="cart.css">
   <title>Hi-You.Store-Shopping Cart</title>

   
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
      

      <div class="store-header-user-actions"style=" ">

     <!--   <button class="store-action-btn" style="margin: 2px;">
          <ion-icon name="person-outline"  style="margin: 2px;"></ion-icon>
        </button> 
        <button class="store-action-btn">
          <ion-icon name="heart-outline" ></ion-icon>
          <span class="store-count">0</span>
        </button>


        <button class="store-action-btn">
          <ion-icon name="bag-handle-outline"></ion-icon>
          <span class="store-count">0</span>
        </button>-->
       

      </div>

    </div>

  </div>

  <nav class="store-desktop-navigation-menu">

    <div class="store-container">

      <ul class="store-desktop-menu-category-list">

        <li class="store-menu-category">
          <a href="#" class="store-menu-title">Home</a>
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
          <a href="#" class="store-menu-title">Jewelry</a>

          <ul class="store-dropdown-list">

            <li class="store-dropdown-item">
              <a href="#">Earrings</a>
            </li>

            <li class="store-dropdown-item">
              <a href="#">Couple Rings</a>
            </li>

            <li class="store-dropdown-item">
              <a href="#">Necklace</a>
            </li>

            <li class="store-dropdown-item">
              <a href="#">Bracelets</a>
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

      </ul>

    </div>

  </nav>

  <div class="store-mobile-bottom-navigation">

    <button class="store-action-btn" data-mobile-menu-open-btn>
      <ion-icon name="menu-outline"></ion-icon>
    </button>

    <button class="store-action-btn">
      <ion-icon name="bag-handle-outline"></ion-icon>

      <span class="store-count">0</span>
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

<?php
cart();

?>



<!--
MAIN
-->
<section id="Shopping-cart-home" class=" container">
  <h2 class="font-weight-bold pt-5">Shopping Cart</h2>
  <div class="d-flex">
      <a href="store.php" class=>back on homepage<input type="submit" value="Contineou Shopping" class="home bg-black text-light" style="margin-right: 100px;"></a>
</div>
      <hr>
   </section>

  <section id="cart-container" class="container my-5">
  <form action="" method="post">
  <table width="100%">
    <?php
     $get_ip_add = getIPAddress();
     $total_price_of_item_in_cart=0;
     $cart_query = "select * from `cart_items` where ip_address='$get_ip_add'";
     $result_cart_query = mysqli_query($conn, $cart_query);
    $result_count_cart_items = mysqli_num_rows($result_cart_query);
   if($result_count_cart_items > 0 ) {
       echo '
   <thead>
      <tr>
         <td>Remove</td>
         <td>Image</td>
         <td>Product</td>
         <td>Price</td>
         <td>Quantities</td>
         <td>Operation</td>
      </tr>
    </thead>';
    
    while($row=mysqli_fetch_array($result_cart_query))
    {
          $product_id = $row['product_id'];
          $select_products="select * from `products` where product_id=' $product_id'";
       $result_select_products = mysqli_query($conn, $select_products);
       while($row_product_price=mysqli_fetch_array($result_select_products))
       {
             $product_price = array($row_product_price['product_price']);
            $price_table =$row_product_price['product_price'];
            $product_tittle =$row_product_price['product_tittle'];
            $product_image1 =$row_product_price['product_image1'];
            $product_image2 =$row_product_price['product_image2'];
            $product_image3 =$row_product_price['product_image3'];
            $product_image4 =$row_product_price['product_image4'];
             $product_total_values = array_sum($product_price);
             //calculate 
             $total_price_of_item_in_cart+=$product_total_values; 
    
      ?>
    <tbody>
       <tr>
       <td> <button name="remove_cart_items" ><i class="fa fa-trash" style="cursor:pointer; margin:0 45px;"></i>
       <input type="checkbox" name="removeitem[]"  value="<?=$product_id ?>" class="w-25 pl-1 "></button></td>
       <td><img  src="./admin-area/product_images/<?php echo $product_image1?>"></td>
       <td><h5><?= $product_tittle ?></h5></td>
       <?php
                $get_ip_add = getIPAddress();
                if (isset($_POST['update_cart']))
                 {
                     $quantity_product = $_POST['quantity_value'];
                     $update_cart_quantity_product_query = "update `cart_items` set quantity='$quantity_product' where ip_address='$get_ip_add'";
                     $result_of_update_cart_quantity_product = mysqli_query($conn,$update_cart_quantity_product_query);
                     $total_price_of_item_in_cart = $total_price_of_item_in_cart*$quantity_product;
                     
               }
               ?>
       <td><h5>Frw <?= $price_table?></h5></td>
       <td><input type="number"  name="quantity_value" id="quantity_value" class="w-25 pl-1 " value="1" ></td>
       <td><input type="submit" name="update_cart" value="Update Cart" id="Update_Cart" class="bg-black text-light 
          border-0 " style="margin:0 0 50px ;"></td>
       <!--<td><h5> Frw // $price_table</h5></td>totla price-->
       <!--<td class=" ">
          <input type="submit" name="update_cart" value="Update Cart" id="Update_Cart" class="bg-black text-light 
          border-0  mb-2">
          <input type="submit" name="remove_cart_items" value="Remove Cart" id="Remove_Cart" class="bg-black text-light
          border-0 mb-2">
               </td>-->
  </tr>
  <?php
               }
            }
         }else{
               echo "<h2 class='text-center text-secondary'> No Items added In  Cart </h2>";
         }
            ?>
   </tbody>
  </table>

</section>

<section id="cart-bottom" class="container">
   <div class="row">
 <!--sub totals & coupon-->
 <?php
             $get_ip_add = getIPAddress();
      //$total_price_of_item_in_cart = '';
             $cart_query = "select * from `cart_items` where ip_address='$get_ip_add'";
             $result_cart_query = mysqli_query($conn, $cart_query);
            $result_count_cart_items = mysqli_num_rows($result_cart_query);
           if($result_count_cart_items > 0 )
           {
         echo '
         <div class="cart-coupon col-lg-6 col-md-6 col-12 mb-4">
         <div>
            <h5>COUPON</h5>
            <p> Enter Your Coupon Code If You Have One...</p>
            <form class="d-flex">
               <input type="text" value="" placeholder="Enter Coupon Code">
               <button name="apply_coupon">APPLY COUPON</button>
            </form>
         </div>
      </div> 
      <div class="cart-checkout col-lg-6 col-md-6 col-12 ">
         <div>
            <h5>Cart Total</h5>
            <div class="d-flex justify-content-between">
               <h6>SubTotal</h6>  
               <p>Frw '.$total_price_of_item_in_cart.'</p>
           </div>
           <div class="d-flex justify-content-between">
               <h6>Shipping</h6>  
               <p>Frw '.$total_price_of_item_in_cart.'</p>
           </div>
           <hr class="second-hr" >
           <div class="d-flex justify-content-between">
               <h6>Total</h6>  
               <p>Frw '.$total_price_of_item_in_cart.'</p>
           </div>
           <a href="./customers_area/checkout.php" style="background-color: black;
           color: #fff;
           height: 55px;
           margin-left: 9px;
           margin-bottom: 12px;
           border-radius: 4px;
           padding: 18px;
           width:60%;
           justify-content: flex-end;"><button class="nl-auto"name="proceed_checkout" value="PROCEED TO CHECKOUT" style="color:#fff;">PROCEED TO CHECKOUT</button></a>
         </div>
      </div> '; }else { 
        echo "<input type='submit' name='continue_shopping' value='Continue Shopping' id='Continue_Shopping' class=' text-light bg-black px-3 py-2
        border-0 mx-3 mb-2'>";
          }

          if (isset($_POST['continue_shopping'])) 
          {
       echo "<script>window.open('index.php','_self')</script>";
        // echo header("Location:index.php");
          }
     ?>
  </div>
</section>
</form>
<!--function to remove items in the carts-->
<?php
function remove_cart_item()
{
   global $conn;
   if (isset($_POST['remove_cart_items'])){
        foreach($_POST['removeitem'] as $remove_id){
         echo $remove_id;
         $delete_cart_item_query= "delete  from `cart_items` where product_id=$remove_id";
         $result_0f_delete_cart_item_query = mysqli_query($conn, $delete_cart_item_query);
         if($result_0f_delete_cart_item_query)
         {
            echo "<script>window.open('cart.php','_self')</script>";
         }
      }
   }
}
echo  remove_cart_item();
?>

<!--

   MAIN
-->


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
          419 State 414 Rte
          Beaver Dams, New York(NY), 14812, USA
        </address>
      </li>

      <li class="store-footer-nav-item flex">
        <div class="store-icon-box">
          <ion-icon name="call-outline"></ion-icon>
        </div>

        <a href="tel:+250785188138" class="store-footer-nav-link">+250785188138</a>
      </li>

      <li class="store-footer-nav-item flex">
        <div class="store-icon-box">
          <ion-icon name="mail-outline"></ion-icon>
        </div>

        <a href="catcherwe@gmail.com" class="store-footer-nav-link">Cacherwe@gmail.com</a>
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
      Copyright &copy; <a href="#">2022 <p>Jean Pierre Author</p> </a>
    </p>

  </div>

</div>

</footer>-->






<!--
- custom js link
-->
<script src="js/store.js"></script>

<!--
- ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
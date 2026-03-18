<?php
session_start();

// ── Xoá 1 sản phẩm ───────────────────────────────────────────────
if (isset($_GET['remove'])) {
    unset($_SESSION['CART'][(int)$_GET['remove']]);
    header('Location: cart.php'); exit;
}

// ── Cập nhật số lượng ────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    foreach ($_POST['qty'] as $id => $qty) {
        $qty = (int)$qty;
        if ($qty <= 0) unset($_SESSION['CART'][$id]);
        else           $_SESSION['CART'][$id]['qty'] = $qty;
    }
    header('Location: cart.php'); exit;
}

// ── Xoá toàn bộ giỏ ─────────────────────────────────────────────
if (isset($_GET['clear'])) {
    unset($_SESSION['CART']);
    header('Location: cart.php'); exit;
}

// ── Dùng 1 biến duy nhất $cart cho toàn bộ file ─────────────────
$cart     = $_SESSION['CART'] ?? [];

// ── Tính tiền ────────────────────────────────────────────────────
$subtotal  = 0;
$cartCount = 0;
foreach ($cart as $item) {
    $subtotal  += (float)$item['price'] * (int)$item['qty'];
    $cartCount += (int)$item['qty'];
}
$eco_tax    = 2.00;
$shipping   = 0.00;                          // Free shipping
$total      = $subtotal + $eco_tax + $shipping;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
    <!--=== HEADER (giữ nguyên từ template gốc) ===-->
    <header id="header">
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                                <li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 clearfix">
                        <div class="logo pull-left">
                            <a href="index.php"><img src="images/home/logo.png" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right clearfix">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa"
                                    data-toggle="dropdown">
                                    USA <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="">Canada</a></li>
                                    <li><a href="">UK</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa"
                                    data-toggle="dropdown">
                                    DOLLAR <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="">Canadian Dollar</a></li>
                                    <li><a href="">Pound</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 clearfix">
                        <div class="shop-menu clearfix pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href=""><i class="fa fa-user"></i> Account</a></li>
                                <li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
                                <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                <li>
                                    <a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart
                                        <?php if ($cartCount > 0): ?>
                                        <span class="badge"><?= $cartCount ?></span>
                                        <?php endif; ?>
                                    </a>
                                </li>
                                <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="index.php">Home</a></li>
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="cart.php" class="active">Cart</a></li>
                                        <li><a href="login.html">Login</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--=== /HEADER ===-->


    <!--=== GIỎ HÀNG ===-->
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>

            <div class="table-responsive cart_info">
                <?php if (empty($cart)): ?>
                <!-- Giỏ trống -->
                <div class="alert alert-info">
                    Your cart is empty. <a href="index.php">Continue Shopping</a>
                </div>

                <?php else: ?>
                <!-- Bảng sản phẩm — bọc trong form để Update Cart hoạt động -->
                <form method="post" action="cart.php">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">Item</td>
                                <td class="description"></td>
                                <td class="quantity">Quantity</td>
                                <td class="price">Price</td>
                                <td class="total">Total</td> <!-- subtotal nhỏ -->
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cart as $id => $item):
                                $lineTotal = (float)$item['price'] * (int)$item['qty'];
                            ?>
                            <tr>
                                <!-- ẢNH -->
                                <td class="cart_product">
                                    <a href="#">
                                        <img src="<?= htmlspecialchars($item['img']) ?>"
                                            alt="<?= htmlspecialchars($item['name']) ?>"
                                            style="width:80px;height:80px;object-fit:cover;">
                                    </a>
                                </td>

                                <!-- TÊN SẢN PHẨM -->
                                <td class="cart_description">
                                    <h4><a href="#"><?= htmlspecialchars($item['name']) ?></a></h4>
                                    <p>Product code: P<?= str_pad($id, 3, '0', STR_PAD_LEFT) ?></p>
                                </td>

                                <!-- SỐ LƯỢNG (có thể sửa) -->
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <input class="cart_quantity_input form-control" type="number"
                                            name="qty[<?= $id ?>]" value="<?= (int)$item['qty'] ?>" min="0"
                                            style="width:65px;display:inline-block;">
                                    </div>
                                </td>

                                <!-- ĐƠN GIÁ -->
                                <td class="cart_price">
                                    <p>$<?= number_format((float)$item['price'], 2) ?></p>
                                </td>

                                <!-- THÀNH TIỀN — subtotal nhỏ từng dòng -->
                                <td class="cart_total">
                                    <p class="cart_total_price">
                                        $<?= number_format($lineTotal, 2) ?>
                                    </p>
                                </td>

                                <!-- NÚT XOÁ -->
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="cart.php?remove=<?= $id ?>"
                                        onclick="return confirm('Remove this item?')">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <!-- Nút Update & Clear -->
                    <div class="row" style="margin-bottom:10px;">
                        <div class="col-sm-6">
                            <a href="cart.php?clear=1" class="btn btn-default"
                                onclick="return confirm('Clear entire cart?')">
                                <i class="fa fa-trash"></i> Clear Cart
                            </a>
                        </div>
                        <div class="col-sm-6 text-right">
                            <button type="submit" name="update" class="btn btn-default update">
                                <i class="fa fa-refresh"></i> Update Cart
                            </button>
                        </div>
                    </div>
                </form>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--=== /GIỎ HÀNG ===-->


    <!--=== DO ACTION — Coupon + ORDER SUMMARY ===-->
    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your
                    delivery cost.</p>
            </div>
            <div class="row">

                <!-- Coupon / Shipping estimate -->
                <div class="col-sm-6">
                    <div class="chose_area">
                        <ul class="user_option">
                            <li><input type="checkbox"><label>Use Coupon Code</label></li>
                            <li><input type="checkbox"><label>Use Gift Voucher</label></li>
                            <li><input type="checkbox"><label>Estimate Shipping &amp; Taxes</label></li>
                        </ul>
                        <ul class="user_info">
                            <li class="single_field">
                                <label>Country:</label>
                                <select>
                                    <option>United States</option>
                                    <option>Bangladesh</option>
                                    <option>UK</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>Ukraine</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>
                            </li>
                            <li class="single_field">
                                <label>Region / State:</label>
                                <select>
                                    <option>Select</option>
                                    <option>Dhaka</option>
                                    <option>London</option>
                                    <option>Delhi</option>
                                    <option>Lahore</option>
                                    <option>Alaska</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>
                            </li>
                            <li class="single_field zip-field">
                                <label>Zip Code:</label>
                                <input type="text">
                            </li>
                        </ul>
                        <a class="btn btn-default update" href="">Get Quotes</a>
                        <a class="btn btn-default check_out" href="">Continue</a>
                    </div>
                </div>

                <!-- ORDER SUMMARY — subtotal lớn + grand total -->
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <!-- Subtotal nhỏ từng sản phẩm -->
                            <?php foreach ($cart as $item): ?>
                            <li style="font-size:13px; color:#777;">
                                <?= htmlspecialchars($item['name']) ?> &times; <?= (int)$item['qty'] ?>
                                <span>$<?= number_format((float)$item['price'] * (int)$item['qty'], 2) ?></span>
                            </li>
                            <?php endforeach; ?>

                            <?php if (!empty($cart)): ?>
                            <li>
                                <hr style="margin:6px 0;">
                            </li>
                            <?php endif; ?>

                            <!-- Cart Sub Total lớn -->
                            <li>Cart Sub Total
                                <span>$<?= number_format($subtotal, 2) ?></span>
                            </li>

                            <!-- Eco Tax -->
                            <li>Eco Tax
                                <span>$<?= number_format($eco_tax, 2) ?></span>
                            </li>

                            <!-- Phí ship -->
                            <li>Shipping Cost
                                <span>Free</span>
                            </li>

                            <!-- Grand Total -->
                            <li><strong>Total</strong>
                                <span><strong>$<?= number_format($total, 2) ?></strong></span>
                            </li>
                        </ul>

                        <a class="btn btn-default update" href="cart.php">Update</a>
                        <a class="btn btn-default check_out" href="checkout.html">Check Out</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--=== /DO ACTION ===-->


    <!--=== FOOTER (giữ nguyên từ template gốc) ===-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>e</span>-shopper</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img"><img src="images/home/iframe1.png" alt="" /></div>
                                    <div class="overlay-icon"><i class="fa fa-play-circle-o"></i></div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img"><img src="images/home/iframe2.png" alt="" /></div>
                                    <div class="overlay-icon"><i class="fa fa-play-circle-o"></i></div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img"><img src="images/home/iframe3.png" alt="" /></div>
                                    <div class="overlay-icon"><i class="fa fa-play-circle-o"></i></div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img"><img src="images/home/iframe4.png" alt="" /></div>
                                    <div class="overlay-icon"><i class="fa fa-play-circle-o"></i></div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="images/home/map.png" alt="" />
                            <p>505 S Atlantic Ave Virginia Beach, VA (Virginia)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Online Help</a></li>
                                <li><a href="">Contact Us</a></li>
                                <li><a href="">Order Status</a></li>
                                <li><a href="">Change Location</a></li>
                                <li><a href="">FAQ's</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quick Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">T-Shirt</a></li>
                                <li><a href="">Mens</a></li>
                                <li><a href="">Womens</a></li>
                                <li><a href="">Gift Cards</a></li>
                                <li><a href="">Shoes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Terms of Use</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Refund Policy</a></li>
                                <li><a href="">Billing System</a></li>
                                <li><a href="">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Company Information</a></li>
                                <li><a href="">Careers</a></li>
                                <li><a href="">Store Location</a></li>
                                <li><a href="">Affiliate Program</a></li>
                                <li><a href="">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-arrow-circle-o-right"></i>
                                </button>
                                <p>Get the most recent updates from <br />our site and be updated yourself...</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright &copy; 2013 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank"
                                href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>
    </footer>
    <!--=== /FOOTER ===-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
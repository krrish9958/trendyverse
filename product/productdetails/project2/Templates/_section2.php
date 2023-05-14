<?php
    $products_list = $product->getData();
shuffle($products_list);

// request method post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['featureproduct_submit']))
//    call method addtocart
    $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
}
?>


<section class="section2">
        <h1 class="heading"> Featured Products</h1>
        <h3 class="sub-heading">What our customers loved the most</h3>

        <div class="featureproduct">
            <?php foreach ($products_list as $item){ ?>
            <a id="product-link" href="<?php printf('%s?item_id=%s', 'sproduct.php', $item['item_id']) ?>">

            <div class="product" >
                <div class="productimg">
                    <img src="<?php echo $item['item_image'] ?? "images/f1.jpg"; ?>" alt="">

                </div>
                <div class="product-text">
                    <h2><?php echo $item['item_brand']?? "Unknown"; ?></h2>
                    <h1>
                        <?php echo $item['item_name'] ?? "Unknown"; ?>
                    </h1>
                    <h3>Rs.<?php echo $item['item_price']?? "Unknown"; ?> <span>(30% off)</span></h3>
                    <form method="post">
                        <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                        <input type="hidden" name="user_id" value="<?php echo 1;?>">
                        <button class="btn-cart" type="submit" name="featureproduct_submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                      fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg></button>
                    </form>
                </div>
            </div>  </a>
            <?php } //closing foreach function ?>
        </div>
        <button class="btn"> Explore Now</button>
    </section>
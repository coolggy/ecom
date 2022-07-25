<div id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <h4>Pages</h4>
                <ul>
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="customer_register.php">My Account</a></li>
                </ul>
                
                <h4>User Section</h4>
                <ul>
                    <?php
                        if(!isset($_SESSION['customer_email'])){
                            echo "<a href='checkout.php'>Login</a>";
                        }else{
                            echo "<a href='customer/my_account.php?my_orders'>My Account</a>";
                        }
                    ?>
                    <li><a href="customer_register.php">Register</a></li>
                </ul>
                <hr class="hidden-md hidden-lg hidden-sm">
            </div>
            <div class="com-sm-6 col-md-3">
                <h4>Top Categories</h4>
                <ul>
                    <?php
                    $get_p_cats = "select * from product_categories";
                    $run_p_cats = mysqli_query($db,$get_p_cats);
                    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                        $p_cat_id = $row_p_cats['p_cat_id'];
                        $p_cat_title = $row_p_cats['p_cat_title'];

                        echo "
                        <li>
                            <a href='shop.php?p_cat=$p_cat_id'>
                                $p_cat_title
                            </a>
                        </li>
                        ";
                    }
                    ?>
                </ul>
                <hr class="hidden-md hidden-lg">
            </div>
            <div class="col-sm-6 col-md-3">
                <h4>Find Us</h4>
                <p>
                    <strong>Cloudstrats Technologies Pvt. Ltd.</strong>
                    <br>Office   : 022 6977 1818 || 1800 210 6450
                    <br>www.cloudstrats.com
                    
                </p>
                
                <hr class="hidden-md hidden-lg hidden-sm">
            </div>
            <div class="col-sm-6 col-md-3">
                <h4>Get The News</h4>
                
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="email">
                        <span class="input-group-btn">
                            <input type="submit" value="subscribe" class="btn btn-default">
                        </span>
                    </div>
                </form>
                <hr>
                <h4>Keep In Touch</h4>
                <p class="social">
                    <a href="https://www.linkedin.com/company/cloudstrats/" class="fa fa-linkedin"></a>
                    <a href="https://www.facebook.com/cloudstrats" class="fa fa-facebook"></a>
                    <a href="https://twitter.com/cloudstratsinfo" class="fa fa-twitter"></a>
                    <a href="https://www.youtube.com/c/cloudstrats" class="fa fa-youtube-play"></a>
                </p>
            </div>
        </div>
    </div>
</div>
<div id="copyright">
    <div class="container">
        <div class="col-md-6">
           <center> <p class="pull-left">&copy; Copyright © 2019 Cloudstrats Inc.</p></center>
        </div>
    </div>
</div>
<footer id="footer">
    <!-- top footer -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">About Us</h3>

                        <ul class="footer-links">
                            <li><a href="#"><i class="fa fa-map-marker" style="color :#E6E7E8"></i>address</a></li>
                            <li><a href="#"><i class="fa fa-phone" style="color :#E6E7E8"></i>+21200000000</a></li>
                            <li><a href="#"><i class="fa fa-envelope-o" style="color : #E6E7E8"></i>AsACars@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 text-center" style="margin-top:80px;">
                    <ul class="footer-payments">
                        <li><a href="#"><i class="fa fa-cc-visa" style="color :#E6E7E8"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-paypal" style="color :#E6E7E8"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-mastercard" style="color :#E6E7E8"></i></a></li>

                    </ul>
                    <span class="copyright">

                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved

                    </span>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Privacy policy</h3>
                        <p class="footer-links">
                            Welcome to ASA shopping,
                            your number one source for all cars marques.
                            We're dedicated to giving you the very best of our products,
                            with a focus on your dependability, customer service and uniqueness.
                        </p>
                    </div>
                </div>

                <div class="clearfix visible-xs"></div>


            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /top footer -->


    <!-- bottom footer -->

    <!-- /bottom footer -->
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>
<script src="js/actions.js"></script>
<script src="js/sweetalert.min"></script>
<script src="js/jquery.payform.min.js" charset="utf-8"></script>
<script src="js/script.js"></script>
<script>
    var c = 0;

    function menu() {
        if (c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";
            c++;
        } else {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";
            c++;
        }
    }
</script>
<script type="text/javascript">
    $('.block2-btn-addcart').each(function() {
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function() {
            swal(nameProduct, "is added to cart !", "success");
        });
    });

    $('.block2-btn-addwishlist').each(function() {
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function() {
            swal(nameProduct, "is added to wishlist !", "success");
        });
    });

    
</script>
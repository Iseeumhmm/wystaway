<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WystawayLaser
 */

?>
	</div><!-- #content -->
	    <footer>
            <div class="container-fluid">
                <div class="row px-0 d-flex align-items-center  text-center" style="height: 20vh;">
                    <div class="col-md-3">
                       <h1>WystAway Laser</h1>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <table class="text-left">
                            <tr>
                                <td><i class="fab fa-facebook-f"></i></td>
                                <td class="social">Facebook</td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-twitter"></i></td>
                                <td class="social">Twitter</td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-instagram"></i></td>
                                <td class="social">Instagram</td>
                            </tr>
                        </table>
                    </div>
                    <div class="email col-md-3 d-flex justify-content-center">
                        <div>
                            <p>Get updates on out latest deals</p>
                            <?php es_subbox( $namefield =  "NO", $group = "Mailing List" );?>
                        </div>      
                    </div>
                    
                    <div class="col-md-3 d-flex justify-content-center">
                        <div>
                            <ul class="text-left">
                                <li>
                                    5268 Dorchester Rd. Belmont, Ontario
                                </li>
                                <li>
                                    (519) 521-5304
                                </li>
                                <li>
                                    wystawaylaser.angie@yahoo.com
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
       
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"      crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"                         integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</div><!-- #page -->


</body>
</html>
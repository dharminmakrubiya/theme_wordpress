<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<footer class="section bg-footer">
 
<div class="bg-dark">

<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
echo '<img src="' . esc_url( $logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
}
?>            

    <div class="row">
    <div class="column col-lg-3">
        </div>
        <div class="col-lg-3">    
            <div class="">
                <h6 class="footer-heading text-uppercase text-white">Information</h6>
                <ul class="list-unstyled footer-link mt-4">
                    <li><a href="">Pages</a></li>
                    <li><a href="">Our Team</a></li>
                    <li><a href="">Feuchers</a></li>
                    <li><a href="">Pricing</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="">
                <h6 class="footer-heading text-uppercase text-white">Ressources</h6>
                <ul class="list-unstyled footer-link mt-4">
                    <li><a href="">Monitoring Grader </a></li>
                    <li><a href="">Video Tutorial</a></li>
                    <li><a href="">Term &amp; Service</a></li>
                    <li><a href="">Zeeko API</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="">
                <h6 class="footer-heading text-uppercase text-white">Help</h6>
                <ul class="list-unstyled footer-link mt-4">
                    <li><a href="">Sign Up </a></li>
                    <li><a href="">Login</a></li>
                    <li><a href="">Terms of Services</a></li>
                    <li><a href="">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
        
    
</body>
</html>
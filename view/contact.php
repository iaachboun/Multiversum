<?php
include 'model/connectDatabase.php';

?>
<style>
    .gegevens {
        list-style-type: none;
    }
</style>
<link rel="stylesheet" href="../assets/style/contact_style.css" type="text/css">
<section class="product-overzicht">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <div class="review-pages">

    </div>

    <!--<div class="filter">
       <div class="slidecontainer">
        <form method="post">
            <input name="minimaal" type="text" placeholder="Vanaf">
            <input name="maximaal" type="text" placeholder="Tot">
            <input type="submit" value="Vernieuwen">
            </form>
           <form method="post">
               <input name="Merk" type="text" placeholder="Merk">
               <input type="submit" value="Vernieuwen">
           </form>
       </div>
    </div>-->
    <div class="" id="">
        <section id="review-01">
            <div class="review-container">
                <div class="review">
                    <div class="producten">
                        <div class="row">

                            <div class="headsets">
                                <ul>
                                    <li class="gegevens"><p>Adres:</p>
                                        <p>1861 Jan Pieterszoon Coenstraat</p>
                                        <p>69217 Maasdriel</p></li>
                                    <li class="gegevens"><p>E-mail:</p><a href="mailto:jack.jones@multiversum.com">jack.jones@multiversum.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="100%" height="500" id="gmap_canvas"
                                            src="https://maps.google.com/maps?q=jan%pieterszoon%coenstraat%&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">

                                    </iframe>
                                    <style>
                                        .mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 100%;
                                            width: 100%;
                                        }

                                        }
                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: 100%;
                                            width: 100%;
                                        }
                                    </style>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

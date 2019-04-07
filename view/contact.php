<?php
include 'model/connectDatabase.php';

?>
<style>
.gegevens{
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
    <div class="slider" id="slider">
        <section id="review-01">
            <div class="review-container">
                <div class="review">
                    <div class="producten">
                        <div class="row">

                                <div class="col-6">
                                    <div class="headsets">
                                        <ul>
                                            <li class="gegevens"><p>Adres:</p><p>1861 Jan Pieterszoon Coenstraat</p><p>69217 Maasdriel</p></li>
                                            <li class="gegevens"><p>Telefoon:</p><a href="tel:6569764980">(656)-976-4980</a> </li>
                                            <li class="gegevens"><p>E-mail:</p><a href="mailto:jack.jones@multiversum.com">jack.jones@multiversum.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            <div class="col-6">
                                <div class="headsets">
                                    <?php include 'mail_script.php'; ?>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

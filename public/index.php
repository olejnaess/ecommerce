<?php require_once("../resources/config.php");  ?>
<?php include(TEMPLATE_FRONT .DS. "header.php"); ?>



    <!-- Page Content -->
    <div class="container">

        <div class="row">

        <!-- Ctaegories goes here -->

            <?php include(TEMPLATE_FRONT .DS. "categories.php");?>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <?php include(TEMPLATE_FRONT .DS. "slider.php"); ?>
                    </div>

                </div>

                <div class="row">



                    <?php get_products(); ?>


                </div>

            </div>

        </div>

    </div>


<?php include(TEMPLATE_FRONT .DS. "footer.php"); ?>

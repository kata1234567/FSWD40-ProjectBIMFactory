<?php
    ob_start();
    session_start();
    require_once 'dbconnect.php';
    ?>


<!doctype html>
<html>

<?php include 'head.php';?>

<body>
    <!-- Main container -->
    <div class="page-container">
        <!-- bloc-0 -->
        <div class="bloc sticky-nav bgc-onyx d-bloc" id="bloc-0">
            <div class="container bloc-sm">
                <?php include 'nav.php'; ?>
            </div>
        </div>
        <!-- bloc-0 END -->
        <!-- bloc-24 -->
        <div class="bloc tc-onyx bgc-white l-bloc" id="bloc-24">
            <div class="container bloc-lg">
                <div class="row voffset">
                    <div class="col-sm-12">
                        <h1 class="text-center mg-md">Coding Team</h1>
                        <p class="text-center text-w-50 mg-lg ">Hello. We are happy to create your webpages. We love coding of course.</p>
                        <div class="text-center"><span class="ion ion-flash icon-md"></span></div>
                    </div>
                </div>
                <div class="row voffset-lg">
                    <div class="col-sm-3 col-lg-3 col-md-6"><img src="img/profile 1.jpg" class="img-responsive mg-md center-block" />
                        <p class="mg-sm text-center"><strong>Ahmad</strong></p>
                        <h5 class="text-center">Fullstack Dev</h5>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-md-6"><img src="img/profile 2.jpg" class="img-responsive mg-md center-block" />
                        <p class=" mg-sm text-center"><strong>Maryam</strong></p>
                        <h5 class="text-center">Fullstack Dev</h5>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-md-6"><img src="img/Creativity%2011.jpeg" class="img-responsive mg-md center-block" />
                        <p class=" mg-sm text-center"><strong>Saad</strong></p>
                        <h5 class="text-center">Fullstack Dev</h5>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-md-6"><img src="img/profile 4.jpg" class="img-responsive mg-md center-block" />
                        <p class=" mg-sm text-center"><strong>Hassan</strong></p>
                        <h5 class="text-center">Fullstack Dev</h5>
                    </div>
                    
                    <div class="col-sm-3 col-lg-3 col-md-6"><img src="img/profile 3.jpg" class="img-responsive mg-md center-block" />
                        <p class=" mg-sm text-center"><strong>Kata</strong></p>
                        <h5 class="text-center">Fullstack Dev</h5>
                    </div>
                </div>
            
            </div>
        </div>
        <!-- bloc-24 END -->
        <!-- ScrollToTop Button --><a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span class="fa fa-chevron-up"></span></a>
        <!-- ScrollToTop Button END-->
        <!-- Footer - check-our-portofolio -->
        <div class="bloc bgc-anti-flash-white tc-onyx" id="check-our-portofolio">
            <div class="container bloc-lg">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row voffset">
                            <div class="col-sm-12">
                                <h1 class="text-center mg-md tc-onyx fadeInUp animated">Everybody can code</h1>
                                <h4 class="text-center text-w-50 mg-lg fadeInUp animDelay02 animated">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</h4>
                                <div class="text-center"><a href="contact.php" class="btn  btn-d  btn-lg btn-sq fadeInUp animDelay04 creativity-black-button animated">Get in contact with us</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer - check-our-portofolio END -->
        <!-- Bloc Group -->
        <div class='bloc-group'>
            <!-- Footer - bloc-42 -->
            <div class="bloc bloc-tile-3 bgc-white l-bloc" id="bloc-42">
                <div class="container bloc-lg">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="mg-md text-center tc-onyx">Contact us</h2>
                            <h4 class="text-center mg-lg text-w-80 tc-dark-jungle-green fadeInUp animated">Lorem ipsum sit amet, consectetuer elit. Commodo ligula eget dolor.</h4>
                            <div class="text-center"><a href="contact.php" class="btn  btn-d  btn-lg btn-sq fadeInUp creativity-wire-button animated">Contact us</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer - bloc-42 END -->
            <!-- Footer - bloc-43 -->
            <div class="bloc bloc-tile-3 bgc-golden-yellow l-bloc" id="bloc-43">
                <div class="container bloc-lg">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="mg-md text-center tc-onyx">Singn In for Newsletter</h2>
                            <h4 class="text-center mg-lg text-w-80 fadeInUp animDelay04 tc-dark-jungle-green animated">Lorem ipsum sit amet, consectetuer elit. Commodo ligula eget dolor.</h4>
                            <div class="text-center"><a href="contact.php" class="btn  btn-d  btn-lg btn-sq fadeInUp animDelay04 creativity-wire-button animated" target="_blank">Sign In</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer - bloc-43 END -->
            <!-- Footer - shortcuts -->
            <div class="bloc bloc-tile-3 bgc-white l-bloc" id="shortcuts">
                <div class="container bloc-lg">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="mg-md text-center tc-onyx">Meet us</h2>
                            <h4 class="text-center mg-lg text-w-80 fadeInUp animDelay08 tc-dark-jungle-green animated">Lorem ipsum sit amet, consectetuer elit. Commodo ligula eget dolor.</h4>
                            <div class="text-center"><a href="team.php" class="btn  btn-d  btn-lg btn-sq fadeInUp animDelay08 creativity-wire-button animated">Meet us</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer - shortcuts END -->
        </div>
        <!-- Bloc Group END -->
        <!-- Footer - counts -->
        <?php include 'footer.php';?>
        <!-- Footer - footer END -->
    </div>
    <!-- Main container END -->
</body>

</html>
<?php ob_end_flush(); ?>
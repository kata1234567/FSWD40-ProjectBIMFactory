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
                        <h1 class="text-center mg-md">Creativity Team</h1>
                        <p class="text-center text-w-50 mg-lg ">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <div class="text-center"><span class="ion ion-flash icon-md"></span></div>
                    </div>
                </div>
                <div class="row voffset-lg">
                    <div class="col-sm-4"><img src="img/Creativity%2011.jpeg" class="img-responsive mg-md center-block" />
                        <h5>CEO</h5>
                        <h4 class="mg-md "><strong>James Blocs</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <div class="divider-h"><span class="divider"></span></div>
                    </div>
                    <div class="col-sm-4"><img src="img/Creativity%2011.jpeg" class="img-responsive mg-md center-block" />
                        <h5>Leading Designer</h5>
                        <h4 class="mg-md "><strong>Daniel Blocs</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <div class="divider-h"><span class="divider"></span></div>
                        <h3 class="mg-md  text-left"></h3>
                    </div>
                    <div class="col-sm-4"><img src="img/Creativity%2011.jpeg" class="img-responsive mg-md center-block" />
                        <h5>Creative Designer</h5>
                        <h4 class="mg-md "><strong>Michael Blocs</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <div class="divider-h"><span class="divider"></span></div>
                        <h3 class="mg-md  text-left"></h3>
                    </div>
                </div>
                <div class="row voffset-lg">
                    <div class="col-sm-3"><img src="img/Creativity%209.jpg" class="img-responsive mg-md center-block" />
                        <p class=" mg-sm"><strong>Jeremy Blocs</strong></p>
                        <h5>Job Description</h5>
                    </div>
                    <div class="col-sm-3"><img src="img/Creativity%2011.jpeg" class="img-responsive mg-md center-block" />
                        <p class=" mg-sm"><strong>Alex Blocs</strong></p>
                        <h5>Job Description</h5>
                    </div>
                    <div class="col-sm-3"><img src="img/Creativity%209.jpg" class="img-responsive mg-md center-block" />
                        <p class=" mg-sm"><strong>Roman Blocs</strong></p>
                        <h5>Job Description</h5>
                    </div>
                    <div class="col-sm-3"><img src="img/Creativity%2011.jpeg" class="img-responsive mg-md center-block" />
                        <p class=" mg-sm"><strong>Victor Blocs</strong></p>
                        <h5>Developer</h5>
                    </div>
                </div>
                <div class="row voffset">
                    <div class="col-sm-3"><img src="img/Creativity%2011.jpeg" class="img-responsive mg-md center-block" />
                        <p class=" mg-sm"><strong>Jeremy Blocs</strong></p>
                        <h5>Job Description</h5>
                    </div>
                    <div class="col-sm-3"><img src="img/Creativity%209.jpg" class="img-responsive mg-md center-block" />
                        <p class=" mg-sm"><strong>Alex Blocs</strong></p>
                        <h5>Job Description</h5>
                    </div>
                    <div class="col-sm-3"><img src="img/Creativity%2011.jpeg" class="img-responsive mg-md center-block" />
                        <p class=" mg-sm"><strong>Roman Blocs</strong></p>
                        <h5>Job Description</h5>
                    </div>
                    <div class="col-sm-3"><img src="img/Creativity%209.jpg" class="img-responsive mg-md center-block" />
                        <p class=" mg-sm"><strong>Victor Blocs</strong></p>
                        <h5>Developer</h5>
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
                                <h1 class="text-center mg-md tc-onyx fadeInUp animated">Check out our portfolio</h1>
                                <h4 class="text-center text-w-50 mg-lg fadeInUp animDelay02 animated">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</h4>
                                <div class="text-center"><a href="portfolio.html" class="btn  btn-d  btn-lg btn-sq fadeInUp animDelay04 creativity-black-button animated">View portfolio</a></div>
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
                            <div class="text-center"><a href="contact.html" class="btn  btn-d  btn-lg btn-sq fadeInUp creativity-wire-button animated">Contact us</a></div>
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
                            <h2 class="mg-md text-center tc-onyx">Request a quote</h2>
                            <h4 class="text-center mg-lg text-w-80 fadeInUp animDelay04 tc-dark-jungle-green animated">Lorem ipsum sit amet, consectetuer elit. Commodo ligula eget dolor.</h4>
                            <div class="text-center"><a href="http://blocstemplates.com" class="btn  btn-d  btn-lg btn-sq fadeInUp animDelay04 creativity-wire-button animated" target="_blank">Request</a></div>
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
                            <h2 class="mg-md text-center tc-onyx">Join our team</h2>
                            <h4 class="text-center mg-lg text-w-80 fadeInUp animDelay08 tc-dark-jungle-green animated">Lorem ipsum sit amet, consectetuer elit. Commodo ligula eget dolor.</h4>
                            <div class="text-center"><a href="http://blocstemplates.com" class="btn  btn-d  btn-lg btn-sq fadeInUp animDelay08 creativity-wire-button animated">Join us</a></div>
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
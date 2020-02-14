<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('home.inc.page_bg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('home.inc.page_border', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <header class="nk-header nk-header-opaque">
        <?php echo $__env->make('inc.topNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('inc.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>
    <?php echo $__env->make('inc.rightNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('inc.mobileNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="nk-main">
        <div class="nk-box bg-dark-1">
            <div class="container text-xs-center">
                <div class="nk-gap-6"></div>
                <div class="nk-gap-2"></div>
                <h2 class="nk-title h1">Downloads</h2>
                <div class="nk-gap-3"></div>
                <p class="lead">By downloading ServerName You agree to Our <a href="">Terms of Service and Conditions</a>. If you Violate these terms you can be banned without any warnings and permenantly.</p>
                <div class="container">
                    <div class="nk-gap-4"></div>
                    <div class="row equal-height vertical-gap">
                        <div class="col-md-3"></div>
                        <div class="col-md-4" style="height: 707px;">
                            <div class="nk-vertical-center">
                                <div>
                                    <div class="nk-pricing">
                                        <h3 class="nk-pricing-title">Game Files</h3>
                                        <div class="nk-pricing-price">
                                            <a href="https://mega.nz/#!JIsjVALI!Bo4rUTqhEOJuFlYPXWgwM6a0jQyDuRWgTYPeDQOE2gY" target="_blank" class="nk-btn nk-btn-lg nk-btn-rounded nk-btn-outline nk-btn-color-main-1">Mega</a>
                                            <a href="https://drive.google.com/file/d/1BLzRs-d4ILybCAVHfIX7Ehtj0AtIMHYd/edit" target="_blank" class="nk-btn nk-btn-lg nk-btn-rounded nk-btn-outline nk-btn-color-main-1" style="margin-left:5px">Google Drive</a>
                                        </div>
                                        <div class="nk-pricing-button">
                                            <span>Last Updated On: 3.14.19</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="height: 707px;">
                            <div class="nk-vertical-center">
                                <div>
                                    <div class="nk-pricing">
                                        <h3 class="nk-pricing-title">Patch Files</h3>
                                        <div class="nk-pricing-price">
                                            <a href="#" class="nk-btn nk-btn-lg nk-btn-rounded nk-btn-outline nk-btn-color-main-1">Game.exe</a>
                                            <a href="#" class="nk-btn nk-btn-lg nk-btn-rounded nk-btn-outline nk-btn-color-main-1" style="margin-left:5px">Updater.exe</a>
                                        </div>
                                        <div class="nk-pricing-button">
                                            <span>Last Updated On: 1.27.19</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-gap-2"></div>
                    <div class="nk-gap-6"></div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
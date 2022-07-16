<section class="footer-section">
        <div class="subfooter">
            <div class="container">
                <div class="footer-top">
                    <ul class="ampstart-related-section-items list-reset flex flex-wrap m0 pb4">
                        <li class="grid-item col-12 sm-col-6 md-col-3 lg-col-3 py2">
                            <?php $this->load->view('front/'.$site['theme'].'/home/widget-company-profile'); ?>
                            <?php $this->load->view('front/'.$site['theme'].'/home/widget-pse-kominfo'); ?>
                        </li>
                        <li class="grid-item col-12 sm-col-6 md-col-3 lg-col-3 py2">
                            <?php $this->load->view('front/'.$site['theme'].'/home/widget-company-location'); ?>
                        </li>
                        <li class="grid-item col-12 sm-col-6 md-col-3 lg-col-3 py2">
                            <?php $this->load->view('front/'.$site['theme'].'/home/widget-company-services'); ?>
                        </li>
                        <li class="grid-item col-12 sm-col-6 md-col-3 lg-col-3 py2">
                            <?php $this->load->view('front/'.$site['theme'].'/home/widget-our-partner.php'); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer py2">
            <div class="container flex">
                <div class="col-7 menu">
                    <p>Copyright &copy; 2021 www.optimus.co.id - PT. Optimus Teknologi Pro</p>
                </div>
                <div class="col-5 footer-nav">
                    <nav class="ampstart-footer-nav">
                        <ul class="list-reset flex flex-wrap">
                            <li class="px1"><a class="text-decoration-none" href="https://optimus.co.id/tos">Terms of Service</a></li>
                            |
                            <li class="px1"><a class="text-decoration-none" href="https://optimus.co.id/tos">Privacy Policy</a></li>
                            |
                            <li class="px1"><a class="text-decoration-none" target="_blank" href="https://optimus.co.id/sitemap.xml">Site Map</a></li>
                        </ul>
                    </nav>
                    <ul class="ampstart-social-follow list-reset flex justify-around items-center flex-wrap m0">
                        <?php if($site['facebook']!=""){ ?>
                        <li> 
                            <a href="<?php echo $site['facebook']; ?>" target="_blank" rel="noopener" class="inline-block p1" aria-label="Link to AMP HTML Twitter"> 
                                <amp-img src="<?php echo base_url(); ?>assets/front/default/img/fb.png" srcset="<?php echo base_url(); ?>assets/front/default/img/fb@2x.png 2x, <?php echo base_url(); ?>assets/front/default/img/fb@3x.png 3x" width="23" height="23" alt="fb"></amp-img> 
                            </a> 
                        </li>
                        <?php } ?>
                        <?php if($site['twitter']!=""){ ?>
                        <li> 
                            <a href="<?php echo $site['twitter']; ?>" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML Facebook">
                                <amp-img src="<?php echo base_url(); ?>assets/front/default/img/twitter.png" srcset="<?php echo base_url(); ?>assets/front/default/img/twitter@2x.png 2x,<?php echo base_url(); ?>assets/front/default/img/twitter@3x.png 3x" width="23" height="23" alt="twitter"></amp-img>
                            </a> 
                        </li>
                        <?php } ?>
                        <?php if($site['linkedin']!=""){ ?>
                        <li> 
                            <a href="<?php echo $site['linkedin']; ?>" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML pin trest">
                                <amp-img src="<?php echo base_url(); ?>assets/front/default/img/linkedin.png" srcset="<?php echo base_url(); ?>assets/front/default/img/linkedin@2x.png 2x,<?php echo base_url(); ?>assets/front/default/img/linkedin@3x.png 3x" width="23" height="23" alt="linkedin"></amp-img>
                            </a> 
                        </li>
                        <?php } ?>
                        <?php if($site['instagram']!=""){ ?>
                        <li> 
                            <a href="<?php echo $site['instagram']; ?>" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML E-mail">
                                <amp-img src="<?php echo base_url(); ?>assets/front/default/img/ig.png" srcset="<?php echo base_url(); ?>assets/front/default/img/ig@2x.png 2x,<?php echo base_url(); ?>assets/front/default/img/ig@3x.png 3x" width="23" height="23" alt="ig"></amp-img>
                            </a> 
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="float-wa">
        <nav class="menuShare">
            <input type="checkbox" class="menu-open" name="menu-open" id="menu-open" /> <label class="menu-open-button" for="menu-open"> <i class="share-icon"></i></label>
            <a class="menu-item wa_btn" href="https://wa.me/<?php echo '+62'.str_replace("-", "", $site['phone_number']); ?>?text=Hi%20optimus.co.id" data-open-share="wa"> <i aria-hidden="true"><amp-img src="<?php echo base_url();?>assets/front/default/img/whatsapp.svg" width="35" height="35" alt="wa"></amp-img></i></a>
            <?php if($site['telegram']!=""){ ?>
            <a class="menu-item telegram_btn" href="<?php echo $site['telegram']; ?>" target="_blank" data-open-share="telegram" data-open-share-url="https://t.me/optimus"> <i aria-hidden="true"><amp-img src="<?php echo base_url();?>assets/front/default/img/telegram.svg" width="33" height="31" alt="telegram"></amp-img></i></a>
            <?php } ?>
            <?php if($site['line']!=""){ ?>
            <a class="menu-item line_btn" href="<?php echo $site['line']; ?>" target="_blank" data-open-share="line" data-open-share-url="https://line.me/R/ti/p/@optimus"> <i aria-hidden="true"><amp-img src="<?php echo base_url();?>assets/front/default/img/line.svg" width="31" height="30" alt="line"></amp-img></i></a>
            <?php } ?>
            <?php if($site['messeger']!=""){ ?>
            <a class="menu-item ms_btn" href="<?php echo $site['messeger']; ?>" target="_blank" data-open-share="messanger" data-open-share-url="https://m.me/optimus"> <i aria-hidden="true"><amp-img src="<?php echo base_url();?>assets/front/default/img/messenger.svg" width="29" height="29" alt="messenger"></amp-img></i> </a>
            <?php } ?>
        </nav>
    </div>

<!-- initialize jQuery Library -->
<script src="<?php echo base_url();?>assets/front/default/js/jquery-2.2.3.min.js"></script>

<script>
    $(document).ready(function () {
        $("body").css("background-color", "<?php echo $site['color']; ?>");
        $(".nav-submenu").css("background-color", "<?php echo $site['color_2']; ?>");
        $("li.ampstart-nav-item").mouseover(function() {
           $(this).css("background-color","<?php echo $site['color_2']; ?>");
           $(this).css("color","<?php echo $site['color_3']; ?>");
        }).mouseout(function() {
           $(this).css("background-color","transparent");
           $(this).css("color","#fff");
        });
        $(".nav-submenu .submenu-item").mouseover(function() {
           $(this).css("background-color","<?php echo $site['color']; ?>");
        }).mouseout(function() {
           $(this).css("background-color","transparent")
        });
        
        $(".grid-item-content").css("background-color", "<?php echo $site['color_2']; ?>");
        $(".search-domain-form-content").css("background-color", "<?php echo $site['color_2']; ?>");
        $(".packages-item").css("background-color", "<?php echo $site['color_2']; ?>");
        
        $(".footer-section .subfooter").css("background-color", "<?php echo $site['color_2']; ?>");
        
        $(".btn-red").css("background-color", "<?php echo $site['color_3']; ?>");
        $(".section-eight").css("background-color", "<?php echo $site['color_3']; ?>");
        $(".packages-item").css("color", "<?php echo $site['color_3']; ?>");
        $(".info").css("background-color", "<?php echo $site['color_3']; ?>");
        $(".gl-font-color").css("color", "<?php echo $site['color_3']; ?>");
        
        setTimeout(myResponsive(), 1000);
                
        // PreLoader
        $(".loader").fadeOut(1000);
        
    });

    $(window).resize(function () {
        myResponsive();
    });

    function myResponsive() {
        if ($(window).width() < 481) {
            $(".info").removeClass("col-4");
            
//            $(".header-logo").css("width","100%");
//            $(".header-logo").css("display","block");
//            $(".header-logo-2").css("width","100%");
//            $(".header-logo-2").css("display","block");
//            $(".header-logo-3").css("width","100%");
//            $(".header-logo-3").css("display","block");
//
//            $(".header-logo amp-img").css("width","104px");
//            $(".header-logo amp-img").css("height","29px");
//            $(".header-logo-2 amp-img").css("width","104px");
//            $(".header-logo-2 amp-img").css("height","29px");
//            $(".header-logo-3 amp-img").css("width","104px");
//            $(".header-logo-3 amp-img").css("height","29px");
//            
//            $(".header-logo amp-img").css("margin","18px 3px 3px 3px");
//            $(".header-logo-2 amp-img").css("margin","17px -2px 10px 0px");
//            $(".header-logo-3 amp-img").css("margin","17px 0px 10px -11px");
            
        } else {
            $(".info").addClass("col-4");
            
//            $(".header-logo").css("width","");
//            $(".header-logo").css("display","block");
//            $(".logo amp-img").css("margin","12px 8px 10px 0px");
//            $(".header-logo amp-img").css("width","170px");
//            $(".header-logo amp-img").css("height","45px");
//            $("a.partner::before").css("left","0px");
//            $(".header-logo-2 amp-img").css("margin","10px 3px 10px 3px");
//            $(".header-logo-3 amp-img").css("margin","10px 3px 10px -13px");
        }
    }
</script>
</body>
</html>
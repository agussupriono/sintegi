    <!-- Google Tag Manager -->
    <!--<amp-analytics config="https://www.googletagmanager.com/amp.json?id=&gtm.url=" data-credentials="include"></amp-analytics>-->
    <div class="extend-header xs-hide sm-hide pt1 pb1">
        <div class="container flex">
            <div class="gp col-3"><a target="_blank" href="#"></a></div>
            <div class="extend-nav col-9">
                <ul class="list-reset center m0 p0 flex justify-end nowrap extend-header-content">
<!--                    <li>
                        <a href="<?php echo base_url('blog/detil/').'data-center';?>" rel="noopener">Data Center</a>
                    </li>-->
                    <li>
                        <a href="tel:<?php echo $site['fax']; ?>"><amp-img alt="telephone Optimus Teknologi Pro" src="<?php echo base_url();?>assets/front/default/img/telephonewhite.png" srcset="<?php echo base_url();?>assets/front/default/img/telephonewhite@2x.png 2x,<?php echo base_url();?>assets/front/default/img/telephonewhite@3x.png 3x" width="12" height="12"></amp-img>
                            <?php echo $site['fax']; ?></a>
                    </li>
                    <li>
                        <a href="https://wa.me/<?php echo '+62'.str_replace("-", "", $site['phone_number']); ?>?text=Hi%20Optimuspro" target="_blank" rel="noopener"> <amp-img src="<?php echo base_url();?>assets/front/default/img/live-chat-white.png" width="12" srcset="<?php echo base_url();?>assets/front/default/img/live-chat-white@2x.png 2x,<?php echo base_url();?>assets/front/default/img/live-chat-white@3x.png 3x" height="12" alt="live chat" ></amp-img> Live Chat</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>" rel="noopener">Careers</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Start Navbar -->
    <header class="ampstart-headerbar flex justify-start items-center top-0 left-0 right-0" style="height: 90px; ">
        <div role="button" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger md-hide lg-hide pl2 pr0">☰</div>
        <div class="container flex" style="height: 90px;">
            <a href="<?php echo base_url(); ?>" class="logo my0 mx-auto pt1 col-2 header-logo" ><amp-img src="<?php echo base_url('assets/upload/image/'.$site['logo']);?>" layout="fixed" alt="Optimus Pro" width="164px" height="45px" ></amp-img></a>
            <a href="#" class="partner my0 mx-auto pt1 col-2 header-logo-2" ><amp-img src="<?php echo base_url('assets/upload/image/'.$site['logo1']);?>" layout="fixed" alt="google partner logo" width="164px" height="45px" ></amp-img></a>
            <a href="<?php echo base_url('blog/detil/').'data-center';?>" class="partner my0 mx-auto pt1 col-2 header-logo-3" ><amp-img src="<?php echo base_url('assets/upload/image/'.$site['logo2']);?>" layout="fixed" alt="NDC partner logo" width="164px" height="45px"></amp-img></a>
            
            <?php include 'nav-bar.php'; ?>
            
        </div>
    </header>
    
    <?php include 'side-bar.php'; ?>
    <!-- End Navbar -->
    
    
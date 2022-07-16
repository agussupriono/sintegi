<?php
$secTestimoniHome = $this->mBlogs->listSectionTestimoni();
?>
<style>
    .cid-rc73KjyEBL{
        background-color: #fff;
        padding: 15px;
    }
    .cid-rc73KjyEBL .display-5 {
        font-family: 'Open Sans', sans-serif;
        font-size: 25px;
        margin-bottom: 20px;
        margin-top: 20px;
        font-weight: 700;
    }
    .mbr-black {
        color: #000000;
    }
    .mbr-section-title {
        font-style: normal;
        line-height: 1.2;
    }
    .cid-rc73KjyEBL .section-subtitle {
        color: #7f7e7e;
    }
    .cid-rc73KjyEBL .mbr-text {
        padding: 0;
        margin: 0;
    }
    .display-6 {
        font-family: 'Roboto',sans-serif;
        font-size: 1.3rem;
    }
    .mbr-text {
        font-style: normal;
        line-height: 1.6;
    }
    .cid-rc73KjyEBL .text-content{
        padding: 3rem 4rem;
        word-break: normal;
        overflow: hidden;
        background: transparent;
    }
    .cid-rc73KjyEBL .mbr-text {
        padding: 0;
        margin: 0;
    }
    .display-7 {
        font-family: 'Roboto',sans-serif;
        font-size: 1.1rem;
    }
    
    p.text-inside{
        background:#fff;
        padding:15px;
        border-radius:0px 0px 3px 3px;
        border-left:1px solid #DEDEDE;
        border-right:1px solid #DEDEDE;
        border-bottom:1px solid #DEDEDE;
        font-family:'Tahoma',sans-serif;
        font-size:14px;
        letter-spacing:1px;
        color:#777;
    }
    p.text-inside em,p.text-inside strong,p.text-inside b{
        font-family:'Tahoma',sans-serif;
        font-size:14px;
        letter-spacing:1px;
        color:#444;
    }
    #inner {
      display: table;
      margin: 15px auto;
      border: 0;
      text-align: center;
      float: top;
    }
    .dots-container {
        position:absolute;
        bottom:10vh;
        width:100%;
        z-index:110;
    }
    .dots { 
        text-align: center;
    }
    .dots li {
        width:13px;
        height:13px;
        margin:5px;
        border-radius:10px;
        border:1px solid rgba(0,0,0,0.3);
        background:rgba(255,255,255,0.5);
        display:inline-block;
    }
    .dots li[option][selected] {
        outline:0px solid rgba(0,0,0,0.7);
        border:1px solid <?php echo $site['color_3']; ?>;
        background:<?php echo $site['color_3']; ?>;
    }
    .amp-carousel-button-next{
        display: none;
    }
    .amp-carousel-button-prev{
        display: none;
    }
</style>
<style amp-boilerplate>
    body {
        -webkit-animation: -amp-start 8s 
            steps(1, end) 0s 1 normal both;

        -moz-animation: -amp-start 8s 
            steps(1, end) 0s 1 normal both;

        -ms-animation: -amp-start 8s 
            steps(1, end) 0s 1 normal both;

        animation: -amp-start 8s 
            steps(1, end) 0s 1 normal both
    }

    @-webkit-keyframes -amp-start {
        from {
            visibility: hidden
        }

        to {
            visibility: visible
        }
    }

    @-moz-keyframes -amp-start {
        from {
            visibility: hidden
        }

        to {
            visibility: visible
        }
    }

    @-ms-keyframes -amp-start {
        from {
            visibility: hidden
        }

        to {
            visibility: visible
        }
    }

    @-o-keyframes -amp-start {
        from {
            visibility: hidden
        }

        to {
            visibility: visible
        }
    }

    @keyframes -amp-start {
        from {
            visibility: hidden
        }

        to {
            visibility: visible
        }
    }
</style>
<noscript>
    <style amp-boilerplate>
        body {
            -webkit-animation: none;
            -moz-animation: none;
            -ms-animation: none;
            animation: none
        }
    </style>
</noscript>
<section class="testimonials-slider3 slider cid-rc73KjyEBL" id="testimonials-slider3-jt">
    <div class="container align-center">
        <div class="text-block mbr-col-sm-12 mbr-col-md-10 center">
            <h2 class="mbr-section-title mbr-fonts-style mbr-black display-5">
                Testimoni
            </h2>
<!--            <p class="mbr-fonts-style mbr-text section-subtitle display-6">
                Beberapa testimoni dari client kami
            </p>-->
        </div>
        <amp-carousel id="carouselID" width="auto" height="400" layout="fixed-height" type="slides" autoplay delay="4000"
            on="slideChange:selectorID.toggle(index=event.index, value=true)"
            >
            <?php 
            $order=1;
            foreach ($secTestimoniHome as $secTesti) { ?>
            <div style="color: #000;">
                <amp-img src="<?php echo base_url('assets/upload/image/').$secTesti["image"];?>" height="200"
                         style="height: 200px !important; width: 200px !important; display:block; margin:auto;"
                         >
                </amp-img>
                <div id="inner">
                    <div style="font-size: 13px; font-weight: 600">
                        <?php echo $secTesti["title"]; ?>
                    </div>
                    <div style="font-size: 15px; width: 70%; margin: auto; font-style: italic">
                        <span class="u-icon u-icon-1">
                            <svg class="u-svg-content" viewBox="0 0 95.333 95.332" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M30.512,43.939c-2.348-0.676-4.696-1.019-6.98-1.019c-3.527,0-6.47,0.806-8.752,1.793    c2.2-8.054,7.485-21.951,18.013-23.516c0.975-0.145,1.774-0.85,2.04-1.799l2.301-8.23c0.194-0.696,0.079-1.441-0.318-2.045    s-1.035-1.007-1.75-1.105c-0.777-0.106-1.569-0.16-2.354-0.16c-12.637,0-25.152,13.19-30.433,32.076    c-3.1,11.08-4.009,27.738,3.627,38.223c4.273,5.867,10.507,9,18.529,9.313c0.033,0.001,0.065,0.002,0.098,0.002    c9.898,0,18.675-6.666,21.345-16.209c1.595-5.705,0.874-11.688-2.032-16.851C40.971,49.307,36.236,45.586,30.512,43.939z"></path><path d="M92.471,54.413c-2.875-5.106-7.61-8.827-13.334-10.474c-2.348-0.676-4.696-1.019-6.979-1.019    c-3.527,0-6.471,0.806-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516c0.975-0.145,1.773-0.85,2.04-1.799l2.301-8.23    c0.194-0.696,0.079-1.441-0.318-2.045c-0.396-0.604-1.034-1.007-1.75-1.105c-0.776-0.106-1.568-0.16-2.354-0.16    c-12.637,0-25.152,13.19-30.434,32.076c-3.099,11.08-4.008,27.738,3.629,38.225c4.272,5.866,10.507,9,18.528,9.312    c0.033,0.001,0.065,0.002,0.099,0.002c9.897,0,18.675-6.666,21.345-16.209C96.098,65.559,95.376,59.575,92.471,54.413z"></path>
                            </g></g></svg><img>
                        </span>
                        <span><?php echo preg_replace('#<p(.*?)>(.*?)</p>#is', '$2', $secTesti["content"]); ?></span>
                        <span class="u-icon u-icon-2">
                            <svg class="u-svg-content" viewBox="0 0 98.829 98.829" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M96.76,41.603C91.511,22.831,78.562,9.204,65.975,9.204c-1.011,0-2.021,0.088-3.005,0.262    c-0.558,0.098-1.046,0.426-1.348,0.902c-0.301,0.479-0.386,1.061-0.233,1.605l2.591,9.268c0.25,0.895,1.113,1.5,2.01,1.459    l0.206-0.004c4.668,0,13.199,6.996,17.548,22.545c0.172,0.617,0.335,1.248,0.492,1.906c-4.882-2.416-10.706-2.975-15.98-1.506    C56.358,48.97,49.388,61.356,52.714,73.252c2.696,9.639,11.563,16.373,21.563,16.373c2.037,0,4.071-0.281,6.046-0.834    c7.846-2.193,13.745-8.707,16.611-18.338C99.521,61.764,99.456,51.249,96.76,41.603z"></path><path d="M14.088,9.206c-1.009,0-2.02,0.086-3.003,0.26c-0.557,0.096-1.046,0.426-1.347,0.902    c-0.301,0.479-0.386,1.061-0.234,1.605l2.592,9.268c0.25,0.895,1.097,1.5,2.01,1.459l0.204-0.004    c4.668,0,13.2,6.996,17.549,22.545c0.173,0.621,0.336,1.252,0.492,1.906c-4.884-2.416-10.706-2.975-15.98-1.506    C4.475,48.97-2.497,61.356,0.831,73.252c2.696,9.639,11.563,16.373,21.563,16.373c2.037,0,4.071-0.281,6.047-0.834    c7.845-2.193,13.744-8.707,16.611-18.338c2.586-8.689,2.522-19.205-0.175-28.852C39.625,22.831,26.678,9.206,14.088,9.206z"></path>
                            </g></g></svg><img>
                        </span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </amp-carousel>
        <amp-selector id="selectorID" on="select:carouselID.goToSlide(index=event.targetOption)" layout="container">
            <ul id="carouselDots" class="dots">
                <?php $i=0; ?>
                <?php foreach ($secTestimoniHome as $secTesti) { ?>
                    <li option="<?php echo $i++; ?>"></li>
                <?php } ?> 
            </ul>
        </amp-selector>
    </div>
</section>

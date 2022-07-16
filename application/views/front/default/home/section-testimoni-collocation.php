<style>
section,
.container,
.container-fluid {
    position: relative;
    word-wrap: break-word;
}
@media (min-width: 576px) {
    .row {
        margin-right: -15px;
        margin-left: -15px;
    }
}
@media (min-width: 768px) {
    .row {
        margin-right: -15px;
        margin-left: -15px;
    }
}
@media (min-width: 992px) {
    .row {
        margin-right: -15px;
        margin-left: -15px;
    }
}
@media (min-width: 1200px) {
    .row {
        margin-right: -15px;
        margin-left: -15px;
    }
}
.hidden {
    visibility: hidden;
}
.mbr-z-index20 {
    z-index: 20;
}
.mbr-white {
    color: #ffffff;
}
.mbr-black {
    color: #000000;
}
.mbr-bg-white {
    background-color: #ffffff;
}
.mbr-bg-black {
    background-color: #000000;
}
.align-left {
    text-align: left;
}
.align-center {
    text-align: center;
}
.align-right {
    text-align: right;
}
@media (max-width: 767px) {
    .align-left,
    .align-center,
    .align-right,
    .mbr-section-btn,
    .mbr-section-title {
        text-align: center;
    }
}
.mbr-light {
    font-weight: 300;
}
.mbr-regular {
    font-weight: 400;
}
.mbr-semibold {
    font-weight: 500;
}
.mbr-bold {
    font-weight: 700;
}
.mbr-figure img,
.mbr-figure iframe {
    display: block;
    width: 100%;
}
.card {
    background-color: transparent;
    border: none;
}
.card-img {
    text-align: center;
    flex-shrink: 0;
}
.media {
    max-width: 100%;
    margin: 0 auto;
}
.mbr-figure {
    -ms-flex-item-align: center;
    -ms-grid-row-align: center;
    -webkit-align-self: center;
    align-self: center;
}
.media-container > div {
    max-width: 100%;
}
.mbr-figure img,
.card-img img {
    width: 100%;
}
@media (max-width: 991px) {
    .media-size-item {
        width: auto;
    }
    .media {
        width: auto;
    }
    .mbr-figure {
        width: 100%;
    }
}
* {
    box-sizing: border-box;
}
.mbr-section-title {
    font-style: normal;
    line-height: 1.2;
}
.mbr-section-subtitle {
    line-height: 1.3;
}
.mbr-text {
    font-style: normal;
    line-height: 1.6;
}
.display-1 {
    font-family: "Roboto", sans-serif;
    font-size: 4.5rem;
}
.display-2 {
    font-family: "Roboto", sans-serif;
    font-size: 2.2rem;
}
.display-4 {
    font-family: "Roboto", sans-serif;
    font-size: 0.7rem;
}
.display-5 {
    font-family: "Roboto", sans-serif;
    font-size: 1.8rem;
}
.display-7 {
    font-family: "Roboto", sans-serif;
    font-size: 1.0rem;
}
@media (max-width: 768px) {
    .display-1 {
        font-size: 3.6rem;
        font-size: calc(2.225rem + (4.5 - 2.225) * ((100vw - 20rem) / (48 - 20)));
        line-height: calc(1.4 * (2.225rem + (4.5 - 2.225) * ((100vw - 20rem) / (48 - 20))));
    }
    .display-2 {
        font-size: 1.76rem;
        font-size: calc(1.42rem + (2.2 - 1.42) * ((100vw - 20rem) / (48 - 20)));
        line-height: calc(1.4 * (1.42rem + (2.2 - 1.42) * ((100vw - 20rem) / (48 - 20))));
    }
    .display-4 {
        font-size: 0.7rem;
        font-size: calc(0.965rem + (0.9 - 0.965) * ((100vw - 20rem) / (48 - 20)));
        line-height: calc(1.4 * (0.965rem + (0.9 - 0.965) * ((100vw - 20rem) / (48 - 20))));
    }
    .display-5 {
        font-size: 1.44rem;
        font-size: calc(1.28rem + (1.8 - 1.28) * ((100vw - 20rem) / (48 - 20)));
        line-height: calc(1.4 * (1.28rem + (1.8 - 1.28) * ((100vw - 20rem) / (48 - 20))));
    }
}
.mbr-plan-header.bg-primary .mbr-plan-subtitle,
.mbr-plan-header.bg-primary .mbr-plan-price-desc {
    color: #feffff;
}
.mbr-plan-header.bg-success .mbr-plan-subtitle,
.mbr-plan-header.bg-success .mbr-plan-price-desc {
    color: #acfad9;
}
.mbr-plan-header.bg-info .mbr-plan-subtitle,
.mbr-plan-header.bg-info .mbr-plan-price-desc {
    color: #ffffff;
}
.mbr-plan-header.bg-warning .mbr-plan-subtitle,
.mbr-plan-header.bg-warning .mbr-plan-price-desc {
    color: #b6b6b6;
}
.mbr-plan-header.bg-danger .mbr-plan-subtitle,
.mbr-plan-header.bg-danger .mbr-plan-price-desc {
    color: #e0e0e0;
}
.mbr-container {
    max-width: 800px;
    padding: 0 10px;
    margin: 0 auto;
    position: relative;
}
@media (max-width: 767px) {
    .container {
        max-width: 540px;
    }
}
@media (min-width: 768px) {
    .container {
        max-width: 720px;
    }
}
@media (min-width: 992px) {
    .container {
        max-width: 960px;
    }
}
@media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
}
.mbr-row {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.mbr-justify-content-center {
    justify-content: center;
}
@media (max-width: 767px) {
    .mbr-col-sm-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }
    .mbr-row {
        margin: 0;
    }
}
@media (min-width: 768px) {
    .mbr-col-md-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
        padding-right: 15px;
        padding-left: 15px;
    }
    .mbr-col-md-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
        padding-right: 15px;
        padding-left: 15px;
    }
    .mbr-col-md-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%;
        padding-right: 15px;
        padding-left: 15px;
    }
    .mbr-col-md-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
        padding-right: 15px;
        padding-left: 15px;
    }
    .mbr-col-md-7 {
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%;
        padding-right: 15px;
        padding-left: 15px;
    }
    .mbr-col-md-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
        padding-left: 15px;
        padding-right: 15px;
    }
    .mbr-col-md-10 {
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%;
        padding-left: 15px;
        padding-right: 15px;
    }
    .mbr-col-md-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }
}
@media (min-width: 992px) {
    .mbr-col-lg-2 {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%;
        padding-right: 15px;
        padding-left: 15px;
    }
    .mbr-col-lg-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
        padding-right: 15px;
        padding-left: 15px;
    }
    .mbr-col-lg-4 {
        -ms-flex: 0 0 33.33%;
        flex: 0 0 33.33%;
        max-width: 33.33%;
        padding-right: 15px;
        padding-left: 15px;
    }
    .mbr-col-lg-5 {
        -ms-flex: 0 0 41.666%;
        flex: 0 0 41.666%;
        max-width: 41.666%;
        padding-right: 15px;
        padding-left: 15px;
    }
    .mbr-col-lg-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
        padding-right: 15px;
        padding-left: 15px;
    }
    .mbr-col-lg-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
        padding-left: 15px;
        padding-right: 15px;
    }
    .mbr-col-lg-10 {
        -ms-flex: 0 0 83.3333%;
        flex: 0 0 83.3333%;
        max-width: 83.3333%;
        padding-right: 15px;
        padding-left: 15px;
    }
    .mbr-col-lg-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }
}
@media (min-width: 1200px) {
    .mbr-col-xl-7 {
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%;
        padding-right: 15px;
        padding-left: 15px;
    }
    .mbr-col-xl-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
        padding-left: 15px;
        padding-right: 15px;
    }
}
.cid-qEez0eJngM {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #ffffff;
}
.cid-qEez0eJngM .card {
    margin-bottom: 15px;
    position: relative;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    word-wrap: break-word;
}
@media (max-width: 767px) {
    .cid-qEez0eJngM .card {
        margin-bottom: 30px;
    }
}
.cid-qEez0eJngM .card .card-wrapper {
    position: relative;
    /*border: 1px solid #ededed;*/
    /*background-color: #efefef;*/
    padding: 1rem;
    margin-top: 1rem;
    border-radius: 8px;
    font-family: Calibri, sans-serif;
}
/*
.cid-qEez0eJngM .card .card-wrapper:before {
    transform: rotate(45deg);
    width: 14px;
    height: 14px;
    background-color: #efefef;
    border-color: #ededed;
    border-style: none solid solid none;
    border-width: 0 1px 1px 0;
    top: -8px;
    content: "";
    display: block;
    left: 50px;
    position: absolute;
}
*/
.cid-qEez0eJngM .card .signature {
    padding: 0 1rem;
    display: flex;
}
.cid-qEez0eJngM .card .author-name {
    padding: 0 1rem;
    color: #000;
    font-size: 18px;
    margin-top: 5px;
}
.cid-qEez0eJngM .card .author-title {
    color: #000;
    padding: 0 1rem;
    font-size: 14px;
}
.cid-qEez0eJngM a{
    text-decoration: none !important;
    display: flex;
}
.cid-qEez0eJngM .mbr-text {
    color: #232323;
}
.cid-qEez0eJngM .mbr-section-title {
    padding-bottom: 2rem;
    color: #000;
}
@media (max-width: 767px) {
    .cid-qEez0eJngM .author-name,
    .cid-qEez0eJngM .author-title {
        text-align: center;
    }
}

</style>
<?php
$secTestimoniHome = $this->mBlogs->listSectionTestimoniCat(array(16));
?>
<section class="testimonials-slider3 cid-qEez0eJngM" id="testimonials1-1a">
    <div class="container align-center">
        <div class="mbr-row mbr-justify-content-center">
            <div class="mbr-col-md-12">
                <h2 class="mbr-section-title mbr-fonts-style align-center display-2">TESTIMONI</h2>
            </div>
            <?php foreach ($secTestimoniHome as $secTesti) { ?>
            
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-4">
                <div class="signature">
                    <a href="<?php echo base_url('/testimoni'); ?>" style="display: block; margin: auto;">
                        <amp-img src="<?php echo base_url('assets/upload/image/').$secTesti["image"];?>" height="160"
                                style="height: 160px !important; width: 256px !important; display:block; margin: auto;" >
                        </amp-img>
                    </a>
                </div>
                <div>
                    <div class="author-name mbr-fonts-style mbr-bold display-4 align-center"><?php echo $secTesti["title"]; ?></div>
                    <div class="author-title mbr-fonts-style display-4 align-center"><?php echo $secTesti["content_short"]; ?></div>
                </div>
                
                <div class="card-wrapper">
                    <a href="<?php echo base_url('/testimoni'); ?>" >
                    <p class="mbr-text mbr-fonts-style display-7" style="text-align: justify;">
                        <span class="u-icon u-icon-1">
                            <svg class="u-svg-content" viewBox="0 0 95.333 95.332" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M30.512,43.939c-2.348-0.676-4.696-1.019-6.98-1.019c-3.527,0-6.47,0.806-8.752,1.793    c2.2-8.054,7.485-21.951,18.013-23.516c0.975-0.145,1.774-0.85,2.04-1.799l2.301-8.23c0.194-0.696,0.079-1.441-0.318-2.045    s-1.035-1.007-1.75-1.105c-0.777-0.106-1.569-0.16-2.354-0.16c-12.637,0-25.152,13.19-30.433,32.076    c-3.1,11.08-4.009,27.738,3.627,38.223c4.273,5.867,10.507,9,18.529,9.313c0.033,0.001,0.065,0.002,0.098,0.002    c9.898,0,18.675-6.666,21.345-16.209c1.595-5.705,0.874-11.688-2.032-16.851C40.971,49.307,36.236,45.586,30.512,43.939z"></path><path d="M92.471,54.413c-2.875-5.106-7.61-8.827-13.334-10.474c-2.348-0.676-4.696-1.019-6.979-1.019    c-3.527,0-6.471,0.806-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516c0.975-0.145,1.773-0.85,2.04-1.799l2.301-8.23    c0.194-0.696,0.079-1.441-0.318-2.045c-0.396-0.604-1.034-1.007-1.75-1.105c-0.776-0.106-1.568-0.16-2.354-0.16    c-12.637,0-25.152,13.19-30.434,32.076c-3.099,11.08-4.008,27.738,3.629,38.225c4.272,5.866,10.507,9,18.528,9.312    c0.033,0.001,0.065,0.002,0.099,0.002c9.897,0,18.675-6.666,21.345-16.209C96.098,65.559,95.376,59.575,92.471,54.413z"></path>
                            </g></g></svg><img>
                        </span>
                        <?php echo preg_replace('#<p(.*?)>(.*?)</p>#is', '$2', $secTesti["content"]); ?>
                        <span class="u-icon u-icon-2">
                            <svg class="u-svg-content" viewBox="0 0 98.829 98.829" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M96.76,41.603C91.511,22.831,78.562,9.204,65.975,9.204c-1.011,0-2.021,0.088-3.005,0.262    c-0.558,0.098-1.046,0.426-1.348,0.902c-0.301,0.479-0.386,1.061-0.233,1.605l2.591,9.268c0.25,0.895,1.113,1.5,2.01,1.459    l0.206-0.004c4.668,0,13.199,6.996,17.548,22.545c0.172,0.617,0.335,1.248,0.492,1.906c-4.882-2.416-10.706-2.975-15.98-1.506    C56.358,48.97,49.388,61.356,52.714,73.252c2.696,9.639,11.563,16.373,21.563,16.373c2.037,0,4.071-0.281,6.046-0.834    c7.846-2.193,13.745-8.707,16.611-18.338C99.521,61.764,99.456,51.249,96.76,41.603z"></path><path d="M14.088,9.206c-1.009,0-2.02,0.086-3.003,0.26c-0.557,0.096-1.046,0.426-1.347,0.902    c-0.301,0.479-0.386,1.061-0.234,1.605l2.592,9.268c0.25,0.895,1.097,1.5,2.01,1.459l0.204-0.004    c4.668,0,13.2,6.996,17.549,22.545c0.173,0.621,0.336,1.252,0.492,1.906c-4.884-2.416-10.706-2.975-15.98-1.506    C4.475,48.97-2.497,61.356,0.831,73.252c2.696,9.639,11.563,16.373,21.563,16.373c2.037,0,4.071-0.281,6.047-0.834    c7.845-2.193,13.744-8.707,16.611-18.338c2.586-8.689,2.522-19.205-0.175-28.852C39.625,22.831,26.678,9.206,14.088,9.206z"></path>
                            </g></g></svg><img>
                        </span>
                    </p>
                    </a>
                </div>
            </div>
            <?php } ?>
<!--            <div class="mbr-col-md-12 align-center">
                <div class="btn-red" style="width: 25%; margin: 0 auto; position: relative;"><a href="" target="_blank">View All</a></div>
            </div>-->
        </div>
    </div>
</section>
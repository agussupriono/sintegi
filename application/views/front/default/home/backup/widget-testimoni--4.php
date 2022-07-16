<style>
/*    div,
    span,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    a,
    ol,
    ul,
    li,
figcaption {
    font: inherit;
}*/
/*section {
    background-color: #eeeeee;
}*/
section,
.container,
.container-fluid {
    position: relative;
    word-wrap: break-word;
}
/*a.mbr-iconfont:hover {
    text-decoration: none;
}
.article .lead p,
.article .lead ul,
.article .lead ol,
.article .lead pre,
.article .lead blockquote {
    margin-bottom: 0;
}
a {
    font-style: normal;
    font-weight: 400;
    cursor: pointer;
}
a,
a:hover {
    text-decoration: none;
}*/
/*figure {
    margin-bottom: 0;
}*/
/*h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
.display-1,
.display-2,
.display-3,
.display-4 {
    line-height: 1;
    word-break: break-word;
    word-wrap: break-word;
}*/
/*b,
strong {
    font-weight: bold;
}*/
/*blockquote {
    padding: 10px 0 10px 20px;
    position: relative;
    border-left: 2px solid;
    border-color: #ff3366;
}*/
/*input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
input:-webkit-autofill:active {
    transition-delay: 9999s;
    transition-property: background-color, color;
}*/
/*textarea[type="hidden"] {
    display: none;
}*/
/*body {
    position: relative;
}*/
/*section {
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-size: cover;
}*/
/*section .mbr-background-video,
section .mbr-background-video-preview {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
}*/
/*.row {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}*/
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
.mbr-section-btn {
    margin-left: -0.25rem;
    margin-right: -0.25rem;
    font-size: 0;
}
nav .mbr-section-btn {
    margin-left: 0rem;
    margin-right: 0rem;
}
.btn .mbr-iconfont,
.btn.btn-sm .mbr-iconfont {
    cursor: pointer;
    margin-right: 0.5rem;
}
.btn.btn-md .mbr-iconfont,
.btn.btn-md .mbr-iconfont {
    margin-right: 0.8rem;
}
[type="submit"] {
    -webkit-appearance: none;
}
.mbr-fullscreen .mbr-overlay {
    min-height: 100vh;
}
.mbr-fullscreen {
    display: flex;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    align-items: center;
    -webkit-align-items: center;
    min-height: 100vh;
    box-sizing: border-box;
    padding-top: 3rem;
    padding-bottom: 3rem;
}
amp-img img {
    max-height: 100%;
    max-width: 100%;
}
img.mbr-temp {
    width: 100%;
}
.super-hide {
    display: none;
}
.is-builder .nodisplay + img[async],
.is-builder .nodisplay + img[decoding="async"],
.is-builder amp-img > a + img[async],
.is-builder amp-img > a + img[decoding="async"] {
    display: none;
}
/*html:not(.is-builder) amp-img > a {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1;
}*/
/*.is-builder .temp-amp-sizer {
    position: absolute;
}*/
.is-builder amp-youtube .temp-amp-sizer,
.is-builder amp-vimeo .temp-amp-sizer {
    position: static;
}
* {
    box-sizing: border-box;
}
/*body {
    font-family: Roboto;
    font-style: normal;
    line-height: 1.5;
}*/
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
    font-size: 0.9rem;
}
.display-5 {
    font-family: "Roboto", sans-serif;
    font-size: 1.8rem;
}
.display-7 {
    font-family: "Roboto", sans-serif;
    font-size: 1.1rem;
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
        font-size: 0.72rem;
        font-size: calc(0.965rem + (0.9 - 0.965) * ((100vw - 20rem) / (48 - 20)));
        line-height: calc(1.4 * (0.965rem + (0.9 - 0.965) * ((100vw - 20rem) / (48 - 20))));
    }
    .display-5 {
        font-size: 1.44rem;
        font-size: calc(1.28rem + (1.8 - 1.28) * ((100vw - 20rem) / (48 - 20)));
        line-height: calc(1.4 * (1.28rem + (1.8 - 1.28) * ((100vw - 20rem) / (48 - 20))));
    }
}
/*.btn {
    font-weight: 400;
    border-width: 2px;
    border-style: solid;
    font-style: normal;
    letter-spacing: 2px;
    margin: 0.4rem 0.8rem;
    white-space: normal;
    transition-property: background-color, color, border-color, box-shadow;
    transition-duration: 0.3s, 0.3s, 0.3s, 2s;
    transition-timing-function: ease-in-out;
    padding: 1rem 2rem;
    border-radius: 0px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    word-break: break-word;
}*/
/*.btn-sm {
    border: 1px solid;
    font-weight: 400;
    letter-spacing: 2px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    padding: 0.6rem 0.8rem;
    border-radius: 0px;
}
.btn-md {
    font-weight: 600;
    letter-spacing: 2px;
    margin: 0.4rem 0.8rem;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    padding: 1rem 2rem;
    border-radius: 0px;
}
.bg-primary {
    background-color: #4ea2e3;
}
.bg-success {
    background-color: #0dcd7b;
}
.bg-info {
    background-color: #8282e7;
}
.bg-warning {
    background-color: #767676;
}
.bg-danger {
    background-color: #a0a0a0;
}*/

/*.text-primary {
    color: #4ea2e3;
}
.text-secondary {
    color: #4addff;
}
.text-success {
    color: #0dcd7b;
}
.text-info {
    color: #8282e7;
}
.text-warning {
    color: #767676;
}
.text-danger {
    color: #a0a0a0;
}
.text-white {
    color: #ffffff;
}
.text-black {
    color: #000000;
}
a.text-primary:hover,
a.text-primary:focus {
    color: #1c6faf;
}
a.text-secondary:hover,
a.text-secondary:focus {
    color: #00b8e3;
}
a.text-success:hover,
a.text-success:focus {
    color: #076d41;
}
a.text-info:hover,
a.text-info:focus {
    color: #2c2cd7;
}
a.text-warning:hover,
a.text-warning:focus {
    color: #434343;
}
a.text-danger:hover,
a.text-danger:focus {
    color: #6d6d6d;
}
a.text-white:hover,
a.text-white:focus {
    color: #b3b3b3;
}
a.text-black:hover,
a.text-black:focus {
    color: #4d4d4d;
}
.alert-success {
    background-color: #0dcd7b;
}
.alert-info {
    background-color: #8282e7;
}
.alert-warning {
    background-color: #767676;
}
.alert-danger {
    background-color: #a0a0a0;
}
.btn-form {
    border-radius: 0;
}
.btn-form:hover {
    cursor: pointer;
}
a,
a:hover {
    color: #4ea2e3;
}*/
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
/*blockquote {
    padding: 10px 0 10px 20px;
    position: relative;
    border-color: #4ea2e3;
    border-width: 3px;
}
ul,
ol,
pre,
blockquote {
    margin-bottom: 0;
    margin-top: 0;
}
pre {
    background: #f4f4f4;
    padding: 10px 24px;
    white-space: pre-wrap;
}
.inactive {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    pointer-events: none;
    -webkit-user-drag: none;
    user-drag: none;
}*/
/*html,
body {
    height: auto;
    min-height: 100vh;
}*/
/*.popover-content ul.show {
    min-height: 155px;
}*/
/*#scrollToTop {
    display: none;
}*/
.mbr-container {
    max-width: 800px;
    padding: 0 10px;
    margin: 0 auto;
    position: relative;
}
/*h1,
h2,
h3 {
    margin: auto;
}*/
/*h1,
h3,
p {
    padding: 10px 0;
    margin-bottom: 15px;
}*/
/*p,
li,
blockquote {
    color: #15181b;
    letter-spacing: 0.5px;
    line-height: 1.7;
}*/
/*.container {
    padding-right: 15px;
    padding-left: 15px;
    width: 100%;
    margin-right: auto;
    margin-left: auto;
}*/
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
/*section.sidebar-open:before {
    content: "";
    position: fixed;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.2);
    z-index: 1040;
}
p {
    margin-top: 0;
}*/

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
    border: 1px solid #ededed;
    background-color: #efefef;
    padding: 1rem;
    margin-bottom: 1rem;
    border-radius: 8px;
}
.cid-qEez0eJngM .card .card-wrapper:before {
    transform: rotate(45deg);
    width: 14px;
    height: 14px;
    background-color: #efefef;
    border-color: #ededed;
    border-style: none solid solid none;
    border-width: 0 1px 1px 0;
    bottom: -8px;
    content: "";
    display: block;
    left: 50px;
    position: absolute;
}
.cid-qEez0eJngM .card .signature {
    padding: 0 1rem;
    display: flex;
}
.cid-qEez0eJngM .card .signature .author-name {
    padding: 0.5rem 1rem;
    color: #000;
}
.cid-qEez0eJngM .card .signature .author-title {
    color: #000;
    padding: 0 1rem;
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
        text-align: left;
    }
}

</style>
<section class="testimonials-slider3 cid-qEez0eJngM" id="testimonials1-1a">
    <div class="container align-center">
        <div class="mbr-row mbr-justify-content-center">
            <div class="mbr-col-md-12">
                <h2 class="mbr-section-title mbr-fonts-style align-center display-2">Testimoni</h2>
            </div>
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-4">
                <div class="card-wrapper">
                    <p class="mbr-text mbr-fonts-style align-left display-7">
                        <span class="u-icon u-icon-1">
                            <svg class="u-svg-content" viewBox="0 0 95.333 95.332" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M30.512,43.939c-2.348-0.676-4.696-1.019-6.98-1.019c-3.527,0-6.47,0.806-8.752,1.793    c2.2-8.054,7.485-21.951,18.013-23.516c0.975-0.145,1.774-0.85,2.04-1.799l2.301-8.23c0.194-0.696,0.079-1.441-0.318-2.045    s-1.035-1.007-1.75-1.105c-0.777-0.106-1.569-0.16-2.354-0.16c-12.637,0-25.152,13.19-30.433,32.076    c-3.1,11.08-4.009,27.738,3.627,38.223c4.273,5.867,10.507,9,18.529,9.313c0.033,0.001,0.065,0.002,0.098,0.002    c9.898,0,18.675-6.666,21.345-16.209c1.595-5.705,0.874-11.688-2.032-16.851C40.971,49.307,36.236,45.586,30.512,43.939z"></path><path d="M92.471,54.413c-2.875-5.106-7.61-8.827-13.334-10.474c-2.348-0.676-4.696-1.019-6.979-1.019    c-3.527,0-6.471,0.806-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516c0.975-0.145,1.773-0.85,2.04-1.799l2.301-8.23    c0.194-0.696,0.079-1.441-0.318-2.045c-0.396-0.604-1.034-1.007-1.75-1.105c-0.776-0.106-1.568-0.16-2.354-0.16    c-12.637,0-25.152,13.19-30.434,32.076c-3.099,11.08-4.008,27.738,3.629,38.225c4.272,5.866,10.507,9,18.528,9.312    c0.033,0.001,0.065,0.002,0.099,0.002c9.897,0,18.675-6.666,21.345-16.209C96.098,65.559,95.376,59.575,92.471,54.413z"></path>
                            </g></g></svg><img>
                        </span>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore incidunt molestias, vitae recusandae error ipsam distinctio, ipsum. Quasi optio repellat aliquid odio obcaecati amet odit? Laboriosam, quibusdam autem fugit accusantium!
                        <span class="u-icon u-icon-2">
                            <svg class="u-svg-content" viewBox="0 0 98.829 98.829" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M96.76,41.603C91.511,22.831,78.562,9.204,65.975,9.204c-1.011,0-2.021,0.088-3.005,0.262    c-0.558,0.098-1.046,0.426-1.348,0.902c-0.301,0.479-0.386,1.061-0.233,1.605l2.591,9.268c0.25,0.895,1.113,1.5,2.01,1.459    l0.206-0.004c4.668,0,13.199,6.996,17.548,22.545c0.172,0.617,0.335,1.248,0.492,1.906c-4.882-2.416-10.706-2.975-15.98-1.506    C56.358,48.97,49.388,61.356,52.714,73.252c2.696,9.639,11.563,16.373,21.563,16.373c2.037,0,4.071-0.281,6.046-0.834    c7.846-2.193,13.745-8.707,16.611-18.338C99.521,61.764,99.456,51.249,96.76,41.603z"></path><path d="M14.088,9.206c-1.009,0-2.02,0.086-3.003,0.26c-0.557,0.096-1.046,0.426-1.347,0.902    c-0.301,0.479-0.386,1.061-0.234,1.605l2.592,9.268c0.25,0.895,1.097,1.5,2.01,1.459l0.204-0.004    c4.668,0,13.2,6.996,17.549,22.545c0.173,0.621,0.336,1.252,0.492,1.906c-4.884-2.416-10.706-2.975-15.98-1.506    C4.475,48.97-2.497,61.356,0.831,73.252c2.696,9.639,11.563,16.373,21.563,16.373c2.037,0,4.071-0.281,6.047-0.834    c7.845-2.193,13.744-8.707,16.611-18.338c2.586-8.689,2.522-19.205-0.175-28.852C39.625,22.831,26.678,9.206,14.088,9.206z"></path>
                            </g></g></svg><img>
                        </span>
                    </p>
                    
                </div>
                <div class="signature">
                    <amp-img src="<?php echo base_url('assets/upload/image/businessman.png');?>" height="70"
                            style="height: 70px !important; width: 70px !important; display:block;" >
                    </amp-img>
                    <div>
                        <div class="author-name mbr-fonts-style align-left mbr-bold display-4">John Smith</div>
                        <div class="author-title mbr-fonts-style align-left display-4">User</div>
                    </div>
                </div>
            </div>

            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-4">
                <div class="card-wrapper">
                    <p class="mbr-text mbr-fonts-style align-left display-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore incidunt molestias, vitae recusandae error ipsam distinctio, ipsum. Quasi optio repellat aliquid odio obcaecati amet odit? Laboriosam, quibusdam autem fugit accusantium!</p>
                </div>
                <div class="signature">
                    <amp-img src="<?php echo base_url('assets/upload/image/businessman.png');?>" height="70"
                            style="height: 70px !important; width: 70px !important; display:block;" >
                    </amp-img>
                    <div>
                        <div class="author-name mbr-fonts-style align-left mbr-bold display-4">John Smith</div>
                        <div class="author-title mbr-fonts-style align-left display-4">User</div>
                    </div>
                </div>
            </div>

            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-4">
                <div class="card-wrapper">
                    <p class="mbr-text mbr-fonts-style align-left display-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore incidunt molestias, vitae recusandae error ipsam distinctio, ipsum.</p>
                </div>
                <div class="signature">
                    <amp-img src="<?php echo base_url('assets/upload/image/businessman.png');?>" height="70"
                            style="height: 70px !important; width: 70px !important; display:block;" >
                    </amp-img>
                    <div>
                        <div class="author-name mbr-fonts-style align-left mbr-bold display-4">John Smith</div>
                        <div class="author-title mbr-fonts-style align-left display-4">User</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
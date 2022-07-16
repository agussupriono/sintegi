<style>
    .section-one-content {
        background: url(<?php echo base_url('assets/upload/image/').$homeBG['image']; ?>) no-repeat;
        background-position: center top;
    }
</style>
<section class="section-one">
    <div class="section-one-content">
        <div class="container flex">
            <?php echo $site['about']; ?>
        </div>
    </div>
</section>
<?php
//$strHtml = "Testing {{section-two}} hhhb fgfgfg";
//$arrComponent = split_curly_braces_component($strHtml);
//foreach ($arrComponent as $comp){
//    if(strpos($comp,'{{')!== false){
//        $mycomp = preg_replace('/[{{}}]/', '', $comp);
//        $this->load->view('front/'.$site['theme'].'/home/'.$mycomp);
//    } else {
//        echo $comp;
//    }
//    
//}

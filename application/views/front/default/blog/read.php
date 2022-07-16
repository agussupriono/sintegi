<?php
if(isset($blog['content'])){ ?>
    <style>
        .section-one-content {
            background: url(<?php echo base_url('assets/upload/image/').$blog['image']; ?>) no-repeat;
            background-position: center top;
            min-height: 832px;
        }
    </style>
    <section class="section-one">
        <div class="section-one-content">
            <div class="container flex">
                <?php echo $blog['content_short']; ?>
            </div>
        </div>
    </section>
    <?php 
    $arrComponent = split_curly_braces_component($blog['content']);
    foreach ($arrComponent as $comp){
        if(strpos($comp,'{{')!== false){
            $mycomp = preg_replace('/[{{}}]/', '', $comp);
            if(file_exists(FCPATH.'application/views/front/'.$site['theme'].'/home/'.$mycomp.'.php')){
                $this->load->view('front/'.$site['theme'].'/home/'.$mycomp);
            } else {
                echo "";
            }
        } else {
            echo $comp;
        }

    }
} else { ?>
    <section class="section-one">
    <div class="section-one-content">
        <div class="container flex">
            <h3>Under Construction</h3>
        </div>
    </div>
</section>
<?php }

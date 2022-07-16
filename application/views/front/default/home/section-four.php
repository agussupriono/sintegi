<style>
    .home-content .section-four {
        background: url(<?php echo base_url('assets/upload/image/').$secFour['image']; ?>) no-repeat;
        background-size: cover;
    }
</style>
<?php if(isset($secFour['content'])){ ?>
<section class="section-four my4">
    <div class="container flex">
        <?php 
            echo str_replace('src="/anto/assets/upload/image/','src="'.base_url('assets/upload/image/'),$secFour['content']);
        ?>
    </div>
</section> 
<?php } 


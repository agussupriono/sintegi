<?php 

$secSeven = $this->mBlogs->listSectionSeven();
        
if(isset($secSeven['content'])){ ?>
<section class="section-seven pt4">
    <div class="container">
        <?php 
        echo str_replace('src="/anto/assets/upload/image/','src="'.base_url('assets/upload/image/'),$secSeven['content']); ?>
    </div>
</section>
<?php }
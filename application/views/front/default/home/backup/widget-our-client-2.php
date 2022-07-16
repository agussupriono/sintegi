<?php 
$secSixClientPubs = $this->mClients->listClientsPublish();
$secSix = $this->mBlogs->listSectionSix();
        
if(isset($secSix['content'])){ ?>
<section class="section-six py4">
    <div class="container">
        <?php echo $secSix['content']; ?>
        <div class="customer pt4 center">
        <?php foreach ($secSixClientPubs as $secClientP) { ?>
            <div class="cust-img">
                <img src="<?php echo base_url('/assets/upload/image/').$secClientP['image']; ?>" alt="<?php echo $secClientP['client_name']; ?>" height="70" />
            </div>
        <?php } ?>
        </div>
    </div>
</section>
<?php }
<?php
$secSixClient = $this->mClients->listClientsPublish(); ?>

<div class="container">
    <h3 class="center mt4 pt3 pb1 bold">Our Client</h3>
    <div class="logo center pt2 pb4">
        <?php foreach ($secSixClient as $secClient) { ?>
            <div class="cust-img"><img src="<?php echo base_url('/assets/upload/image/') . $secClient['image']; ?>" alt="<?php echo $secClient['client_name']; ?>" height="70" /></div>
        <?php } ?>
    </div>
</div>

<?php 
$secSixClientPubs = $this->mClients->listClientsPublishByGroup('home');

foreach ($secSixClientPubs as $secClientP) { ?>
    <div style="width: 128px;
                    height: 70px;
                    background: #fff;
                    display: inline-block;
                    border-radius: 6px;
                    margin: 10px 5px;
                    text-align: center;
                    vertical-align: middle; ">
        <div style="height: 100%; display: flex; justify-content: center; align-items: center; ">
            <img src="<?php echo base_url('/assets/upload/image/').$secClientP['image']; ?>" alt="<?php echo $secClientP['client_name']; ?>" style="width: 80%; margin: auto" />
        </div>
    </div>
<?php }

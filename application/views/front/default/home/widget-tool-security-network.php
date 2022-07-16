<style>
    .tools-feature{
        height: 100%;
    }
    .tools-feature-img {
        display: inline-block;
        background: #fff;
        padding: 13px 17px 8px;
        border-radius: 14px;
        float: left;
    }
    .tools-feature-text {
        padding-left: 20px;
        padding-top: 0px;
        height: 100%;
        display: table;
    }
    .tools-feature-text-child{
        display: table-cell;
        vertical-align: middle;
    }
</style>
<?php 
$secToolSecNet = $this->mGalleries->listGalleriesPubPosition('tool-security-network'); 

if(count($secToolSecNet)>0){
    foreach ($secToolSecNet as $ToolSec) {
?>
<div class="col-12 sm-col-6 md-col-4 lg-col-6 px2 pb4">
    <div class="tools-feature">
        <div class="tools-feature-img">
            <amp-img src="<?php echo base_url('/assets/upload/image/').$ToolSec['image']; ?>" width="64" height="64" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" i-amphtml-layout="fixed" style="width: 64px; height: 64px;">
            </amp-img>
        </div>
        <div class="tools-feature-text">
            <div class="tools-feature-text-child">
                <h4><?php echo $ToolSec['gallery_name']; ?></h4>
                <p><?php echo $ToolSec['gallery_description']; ?></p>
            </div>
        </div>
    </div>
</div>
<?php }
}
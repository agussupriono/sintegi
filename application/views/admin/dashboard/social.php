<?php
// Session 
if($this->session->flashdata('sukses')) { 
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
} 
// Error
echo validation_errors('<div class="alert alert-success">','</div>'); 
?>

<form action="<?php echo base_url('admin/dashboard/social') ?>" method="post">

<input type="hidden" name="config_id" value="<?php echo $site['config_id'] ?>">

<div class="col-md-6">
	<h3>General Settings</h3><hr>
    <div class="form-group">
        <label>Facebook</label>
        <input type="text" name="facebook" placeholder="Fanspage Facebook" value="<?php echo $site['facebook'] ?>"  class="form-control">
    </div>
    <div class="form-group">
        <label>Twitter</label>
        <input type="text" name="twitter" placeholder="Account Twitter" value="<?php echo $site['twitter'] ?>" class="form-control">
    </div>
    <div class="form-group">
        <label>Google Plus</label>
        <input type="text" name="google_plus" placeholder="Account Google Plus" value="<?php echo $site['google_plus'] ?>"  class="form-control">
    </div> 
    <div class="form-group">
        <label>Instagram</label>
        <input type="text" name="instagram" placeholder="Account Instagram" value="<?php echo $site['instagram'] ?>" class="form-control">
    </div> 
    <div class="form-group">
        <label>Pinterest</label>    
        <input type="text" name="pinterest" placeholder="Account Pinterest" value="<?php echo $site['pinterest'] ?>" class="form-control">
    </div>   
    <div class="form-group">
        <label>LinkedIn</label>    
        <input type="text" name="linkedin" placeholder="Account LinkedIn" value="<?php echo $site['linkedin'] ?>" class="form-control">
    </div>    
    <div class="form-group">
        <label>WhatsApp</label>    
        <input type="text" name="whatsapp" placeholder="Account WhatsApp" value="<?php echo $site['whatsapp'] ?>" class="form-control">
    </div>     
    <div class="form-group">
        <label>Telegram</label>    
        <input type="text" name="telegram" placeholder="Account Telegram" value="<?php echo $site['telegram'] ?>" class="form-control">
    </div>      
    <div class="form-group">
        <label>Line</label>    
        <input type="text" name="line" placeholder="Account Line" value="<?php echo $site['line'] ?>" class="form-control">
    </div>       
    <div class="form-group">
        <label>FB Messeger</label>    
        <input type="text" name="messeger" placeholder="Account Facebook Messeger" value="<?php echo $site['messeger'] ?>" class="form-control">
    </div>              
</div>

<div class="col-md-6">
    <h3>Notice</h3><hr>
    <div class="alert alert-warning"><label>Important</label><hr>Silahkan cantumkan alamat sosial media yang valid <br> Karena fitur ini di integrasikan langsung menggunakan API Server.<br></div>
</div>

<div class="col-md-12">
	<input type="submit" name="submit" value="Save" class="btn btn-primary">
    <input type="reset" name="reset" value="Reset" class="btn btn-default">
</div>

</form>
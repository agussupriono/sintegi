<?php
    NAMESPACE kcfinder;
?>
<script src="js/index.php" type="text/javascript"></script>
<script src="js_localize.php?lng=<?php echo $this->lang ?>" type="text/javascript"></script>
<?php
    IF ($this->opener['name'] == "tinymce"):
?>
<script src="<?php echo $this->config['_tinyMCEPath'] ?>/tiny_mce_popup.js" type="text/javascript"></script>
<?php
    ENDIF;

    IF (file_exists("themes/{$this->config['theme']}/js.php")):
?>
<script src="themes/<?php echo $this->config['theme'] ?>/js.php" type="text/javascript"></script>
<?php
    ENDIF;
?>
<script type="text/javascript">
var _version = "<?php echo self::VERSION ?>";
var _support_zip = <?php echo (class_exists('ZipArchive') && !$this->config['denyZipDownload']) ? "true" : "false" ?>;
var _support_check4Update = <?php echo ((!isset($this->config['denyUpdateCheck']) || !$this->config['denyUpdateCheck']) && (ini_get("allow_url_fopen") || function_exists("http_get") || function_exists("curl_init") || function_exists('socket_create'))) ? "true" : "false" ?>;
var _lang = "<?php echo text::jsValue($this->lang) ?>";
var _type = "<?php echo text::jsValue($this->type) ?>";
var _theme = "<?php echo text::jsValue($this->config['theme']) ?>";
var _access = <?php echo json_encode($this->config['access']) ?>;
var _dir = "<?php echo text::jsValue($this->session['dir']) ?>";
var _uploadURL = "<?php echo text::jsValue($this->config['uploadURL']) ?>";
var _thumbsURL = _uploadURL + "/<?php echo text::jsValue($this->config['thumbsDir']) ?>";
var _opener = <?php echo json_encode($this->opener) ?>;
var _cms = "<?php echo text::jsValue($this->cms) ?>";
$.$.kuki.domain = "<?php echo text::jsValue($this->config['cookieDomain']) ?>";
$.$.kuki.path = "<?php echo text::jsValue($this->config['cookiePath']) ?>";
$.$.kuki.prefix = "<?php echo text::jsValue($this->config['cookiePrefix']) ?>";
$(function() { _.resize(); _.init(); });
$(window).resize(_.resize);
</script>

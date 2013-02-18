<?php   defined('C5_EXECUTE') or die(_("Access Denied.")); 

if (!$isEditMode) {
?>
<script language="javascript">
var preloaderBaseURL = <?php echo $preloaderBaseURL; ?>;
</script>
<?php
} else {
?><b>jQuery Preloader message - Not activated in edit mode</b>
<?php 
}
?>
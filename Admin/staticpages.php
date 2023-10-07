<?php

include "include/header.php";
include "include/sidebar.php";
?>
<!-- left this blank for future operations -->


<script src="ckeditor/ckeditor.js"></script>
<textarea name="editor_content" id="editor">
<?php
include "../resume.php";
?>
  </textarea>


<script>
  CKEDITOR.replace('editor');
</script>












<?php
include "include/footer.php";
?>
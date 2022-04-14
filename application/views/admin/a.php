<?php $cus_url = 'http';
if (@$_SERVER["HTTPS"] == "on") {
  $config['base_url'] .= "s";
}
$cus_url .= "://";
$cus_url .= $_SERVER['HTTP_HOST'];
$cus_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
echo $cus_url . 'assets/ckfinder/userfiles/';
// die();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


</head>

<!-- <script src="<?php echo base_url() . 'assets_old/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- <script src="<?php echo base_url() . 'assets_old/dist/js/demo.js' ?>"></script> -->
<script src="<?php echo base_url() . 'assets/ckeditor5/ckeditor.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/ckfinder/ckfinder.js' ?>"></script>
</div>
<div class="box-body">

  <textarea id="ckeditor" name="xisi" rows="5" required></textarea>

</div>
<script>
  $(function() {
    ClassicEditor
      .create(document.querySelector('#ckeditor'), {
        ckfinder: {
          uploadUrl: '<?= base_url() ?>assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
        },
        toolbar: {
          items: ['ckfinder', 'imageUpload', '|',
            'heading', '|',
            'fontfamily', 'fontsize', '|',
            'alignment', '|',
            'fontColor', 'fontBackgroundColor', '|',
            'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
            'link', '|',
            'outdent', 'indent', '|',
            'bulletedList', 'numberedList', 'todoList', '|',
            'code', 'codeBlock', '|',
            'insertTable', '|',
            'uploadImage', 'blockQuote', '|',
            'undo', 'redo'
          ],
          shouldNotGroupWhenFull: true
        }
        // toolbar: ['ckfinder', 'imageUpload', '|', 'heading', '|', 'bold', 'italic', '|', 'undo', 'redo', '-', 'numberedList', 'bulletedList'],
        // shouldNotGroupWhenFull: true
      })
      .catch(error => {
        console.error(error);
      });

  });
</script>

</body>

</html>
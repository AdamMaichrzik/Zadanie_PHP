tinymce.init({
    selector: '#myTextarea',
    setup: function (editor) {
      editor.on('init', function (e) {
        editor.setContent('<?php echo $trimmer; ?>');
      });
    }
  });
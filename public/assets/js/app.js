tinymce.init({
  selector: 'textarea',
  height: 400,
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify'
});

imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    img_priv.src = URL.createObjectURL(file)
  }
};


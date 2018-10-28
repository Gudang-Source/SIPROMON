function toggleFullScreen() {
  if (!document.fullscreenElement &&    // alternative standard method
      !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement ) {  // current working methods
    if (document.documentElement.requestFullscreen) {
      document.documentElement.requestFullscreen();
    } else if (document.documentElement.msRequestFullscreen) {
      document.documentElement.msRequestFullscreen();
    } else if (document.documentElement.mozRequestFullScreen) {
      document.documentElement.mozRequestFullScreen();
    } else if (document.documentElement.webkitRequestFullscreen) {
      document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    }
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
  }
}

$(document).ready(function() {

  $("#addPelaksana").click(function (e) {
  //Append a new row of code to the "#items" div
    $("#pelaksana").append('<div class="input-group"><div class="input-group-prepend"><div class="input-group-text"><i class="fa fa-user fa-fw"></i></div></div><input type="text" class="form-control" name="pelaksana[]" value=""></div>');
  });
  $("#addPelaksana2").click(function (e) {
  //Append a new row of code to the "#items" div
    $("#pelaksana2").append('<div class="input-group"><div class="input-group-prepend"><div class="input-group-text"><i class="fa fa-user fa-fw"></i></div></div><input type="text" class="form-control" name="pelaksana[]" value=""></div>');
  });
  $('#tt').tooltip();
  $('[data-toggle="tooltip"]').tooltip();
	jQuery(".standardSelect").chosen({
      disable_search_threshold: 10,
      no_results_text: "Oops, nothing found!",
      width: "100%"
  });
  
  $('#tambahsub').on('show.bs.modal', function(e) {
    //get data-id attribute of the clicked element
    var bookId = $(e.relatedTarget).data('parent');
    $(e.currentTarget).find('input[name="parent"]').val(bookId);
  });
  $('#tambahtahapan').on('show.bs.modal', function(e) {
    //get data-id attribute of the clicked element
    var bookId = $(e.relatedTarget).data('parent');
    $(e.currentTarget).find('input[name="act_id"]').val(bookId);
  });  
  $('span#clock').clock({'langSet':'id'});
  $('.accordion').accordion();

} );

// tinymce.init({
//   selector: 'textarea',
//     theme: 'modern',
//     width: 600,
//     height: 300,
//     plugins: [
//       'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
//       'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
//       'save table contextmenu directionality paste textcolor'
//     ],
//     content_css: 'css/content.css',
//     toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
// });
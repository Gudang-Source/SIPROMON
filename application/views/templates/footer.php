
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="<?=base_url();?>assets/js/accordion.min.js"></script>  
  <script src="<?=base_url();?>assets/js/jqClock.min.js"></script>  
  <script src="<?=base_url();?>assets/js/sweetalert.min.js"></script>  
  <script src="<?=base_url();?>assets/ckeditor/ckeditor.js"></script>
  <script>
   $(".edit_modal").click(function(e) {
    var m = $(this).attr("id");
      $.ajax({
        url: "<?=base_url('RMP/generalEdit') ?>",
        type: "GET",
        data : {modal_id: m,},
        success: function (ajaxData){
          $("#ModalEdit").html(ajaxData);
          $("#ModalEdit").modal('show',{backdrop: 'true'});
         }
       });
    });
  <?php if($this->uri->segment(2) == "enam"){ ?>
  CKEDITOR.replace( 'ta1', {
      height: 200
  } );
  CKEDITOR.replace( 'ta2', {
      height: 200
  } );
  CKEDITOR.replace( 'ta3', {
      height: 200
  } );
  <?php }else if($this->uri->segment(2) == "tujuh"){
   ?>
   var x = <?=$this->uri->segment(4); ?>;
   
   $(document).ready(function(){
    if(x == sdk) $('.nav-pills a[href="#sdk"]').tab('show')
   });
   CKEDITOR.replace( 'ta1', {
      height: 200
  } );
   <?php } ?>
  $('#navigate').change(function(){ 
    var value = $(this).val();
    window.location.replace('<?=base_url(); ?>RMP/'+value+'/<?=$this->uri->segment(3); ?>');
  });

    
  $('#tambahraker').on('show.bs.modal', function(e) {
        var $modal = $(this),
            esseyId = e.relatedTarget.id;
        $("input[name='activity_id'").val(esseyId);
    });
  $('#tambahraker2').on('show.bs.modal', function(e) {
      var $modal = $(this),
          esseyId = e.relatedTarget.id;
      $("input[name='stages_id'").val(esseyId);
  });
  $('#tambahrencanakeu').on('show.bs.modal', function(e) {
      var $modal = $(this),
          esseyId = e.relatedTarget.id,
          money = $(e.relatedTarget).attr("data-money"),
          actkeu = $(e.relatedTarget).attr("data-act"),
          month = $(e.relatedTarget).attr("data-month"),
          fisik = $(e.relatedTarget).attr("data-fisik");
      $.ajax({
        type:"POST",
        url:"<?=site_url('RMP/getSDKAct/')?>"+actkeu,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success:function(data)
        {
          console.log(data);
          function deleteRec(id)
            {
                jQuery.ajax({
                 type: "POST",
                 data: 'id='+id,
                 url: "<?=site_url('RMP/delSDKAct')?>",
                 cache: false,
                 success: function(response)
                 {
                   alert("Record successfully deleted");
                 }
               });
           }        
           $('#realact').text("");
          for (var i = 0; i < data.length; i++) {
            console.log(data);
            $('#realact').append('<tr><td>'+(i+1)+'</td><td>'+data[i].akun+'. '+ data[i].jenis+'</td><td>'+(data[i].biaya).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")+'</td><td>'+data[i].fisik+'</td></tr>')
          }

        }
      });
      $('#paguanggaran').text(''+money+',-');
      $('#actkeu').val(actkeu);
      $('#monthkeu').val(month);
      $('#fisikkeu').text(''+fisik+'');
      // $('#fisik').val(fisik);
  });
  $('#tambahrencanakeustage').on('show.bs.modal', function(e) {
      var $modal = $(this),
          esseyId = e.relatedTarget.id,
          money = $(e.relatedTarget).attr("data-money"),
          actkeu = $(e.relatedTarget).attr("data-act"),
          month = $(e.relatedTarget).attr("data-month"),
          fisik = $(e.relatedTarget).attr("data-fisik");


      $('#paguanggaranstage').text(''+money+',-');
      $('#actkeustage').val(actkeu);
      $('#monthkeustage').val(month);
      $('#fisikstage').text(''+fisik+',-');
      // $('#fisikstage').val(fisik);

  });  

  var url="<?php echo site_url();?>";
  function sign(id){
    swal({
      title: "Terbitkan RMP?",
      text: "Anda akan Menandatangani dan Mengajukan RMP. Silahkan Menunggu Proses Selanjutnya Pada Halaman Ini.",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Ya, Tanda Tangani.",
      closeOnConfirm: false
    },
    function(){
       window.location = url+"RMP/updateStatus/"+id+"/2";
    });
  }
  function check(id){
    swal({
      title: "Tanda Tangan RMP?",
      text: "Anda akan Menandatangani RMP yang telah diajukan. RMP akan diproses kepada Ka PUSAIR.",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Ya, Tanda Tangani.",
      closeOnConfirm: false
    },
    function(){
       window.location = url+"RMP/updateStatus/"+id+"/3";
    });
  }  
    function pass(id){
    swal({
      title: "Sahkan RMP?",
      text: "Anda akan Mengesahkan RMP ini.",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Ya, Sahkan.",
      closeOnConfirm: false
    },
    function(){
       window.location = url+"RMP/updateStatus/"+id+"/4";
    });
  }
  function del(id,loc){
    swal({
      title: "Hapus Data?",
      text: "Data yang telah dihapus tidak dapat dikembalikan lagi.",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Ya, Hapus!",
      closeOnConfirm: false
    },
    function(){
       window.location = url+loc+"/"+id+"/";
    });
  }  
  

  /*MONEV*/
  $('#addLaporan').on('show.bs.modal', function(e) {
      var $modal = $(this),
        type = $(e.relatedTarget).attr("data-type"),
        id_refer = $(e.relatedTarget).attr("data-refer"),
        fisik_real = $(e.relatedTarget).attr("data-fisik"),
        month = $(e.relatedTarget).attr("data-month")-1;


        bulan = [
          "Jan",
          "Jan",
          "Jan",
          "Jan",
          "Feb",
          "Feb",
          "Feb",
          "Feb",
          "Mar",
          "Mar",
          "Mar",
          "Mar",
          "Apr",
          "Apr",
          "Apr",
          "Apr",
          "Mei",
          "Mei",
          "Mei",
          "Mei",
          "Jun",
          "Jun",
          "Jun",
          "Jun",
          "Jul",
          "Jul",
          "Jul",
          "Jul",
          "Agu",
          "Agu",
          "Agu",
          "Agu",
          "Sep",
          "Sep",
          "Sep",
          "Sep",
          "Okt",
          "Okt",
          "Okt",
          "Okt",
          "Nov",
          "Nov",
          "Nov",
          "Nov",
          "Des",
          "Des",
          "Des",
          "Des"
        ];

        $('#bulanItem').text(bulan[month]);
        $('#mingguItem').text(month+1);
        $('#minggu').val(month+1);
        $('#type').val(type);
        $('#id_refer').val(id_refer);
        $('#fisik_real').val(fisik_real);
      // $('#actkeustage').val(actkeu);
      // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
  });

  $('#addKendala').on('show.bs.modal', function(e) {
      var $modal = $(this),
        type = $(e.relatedTarget).attr("data-type"),
        id_refer = $(e.relatedTarget).attr("data-refer"),
        fisik_real = $(e.relatedTarget).attr("data-fisik"),
        month = $(e.relatedTarget).attr("data-month")-1;


        bulan = [
          "Jan",
          "Jan",
          "Jan",
          "Jan",
          "Feb",
          "Feb",
          "Feb",
          "Feb",
          "Mar",
          "Mar",
          "Mar",
          "Mar",
          "Apr",
          "Apr",
          "Apr",
          "Apr",
          "Mei",
          "Mei",
          "Mei",
          "Mei",
          "Jun",
          "Jun",
          "Jun",
          "Jun",
          "Jul",
          "Jul",
          "Jul",
          "Jul",
          "Agu",
          "Agu",
          "Agu",
          "Agu",
          "Sep",
          "Sep",
          "Sep",
          "Sep",
          "Okt",
          "Okt",
          "Okt",
          "Okt",
          "Nov",
          "Nov",
          "Nov",
          "Nov",
          "Des",
          "Des",
          "Des",
          "Des"
        ];

        $('#bulanItemK').text(bulan[month]);
        $('#mingguItemK').text(month+1);
        $('#mingguK').val(month+1);
        $('#typeK').val(type);
        $('#id_referK').val(id_refer);
        $('#fisik_realK').val(fisik_real);
      // $('#actkeustage').val(actkeu);
      // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
  });

  $('#updateLaporan').on('show.bs.modal', function(e) {
      var $modal = $(this),
        type = $(e.relatedTarget).attr("data-type"),
        id_refer = $(e.relatedTarget).attr("data-refer"),
        fisik_real = $(e.relatedTarget).attr("data-fisik"),
        month = $(e.relatedTarget).attr("data-month")-1;

        $('#mingguF').val(month+1);
        $('#typeF').val(type);
        $('#id_referF').val(id_refer);
        $('#fisik_realF').val(fisik_real);
        console.log(fisik_real);
        $.ajax({
          type:"POST",
          url:"<?=site_url('Monev/getFisikDetail/')?>"+id_refer+"/"+(month+1)+"/"+type,
          contentType: "application/json; charset=utf-8",
          dataType: "json",
          success:function(data)
          {
            console.log(data[0]);
           $('#id_mnv_fisik').val(data[0]['id_mnv_fisik']);
           $('#deskripsiF').val(data[0]['deskripsi']);
           $('#outputF').val(data[0]['output']);
           $('#persentaseF').val(data[0]['persentase']);
           // $('#tingkat_kendalaF').val(data[0]['tingkat_kendala']).attr("checked");
            
            // $('#listMoneyKU').append('<div class="row" ><div class="col-md-5">'+data[0]['jenis']+'</div><div class="col-md-7"><input name="jml['+data[0]['id_mnv_keuangan']+']" type="number" value="'+data[0]['jml_uang']+'" class="form-control"></div></div><hr>');
          }
        });

        bulan = [
          "Jan",
          "Jan",
          "Jan",
          "Jan",
          "Feb",
          "Feb",
          "Feb",
          "Feb",
          "Mar",
          "Mar",
          "Mar",
          "Mar",
          "Apr",
          "Apr",
          "Apr",
          "Apr",
          "Mei",
          "Mei",
          "Mei",
          "Mei",
          "Jun",
          "Jun",
          "Jun",
          "Jun",
          "Jul",
          "Jul",
          "Jul",
          "Jul",
          "Agu",
          "Agu",
          "Agu",
          "Agu",
          "Sep",
          "Sep",
          "Sep",
          "Sep",
          "Okt",
          "Okt",
          "Okt",
          "Okt",
          "Nov",
          "Nov",
          "Nov",
          "Nov",
          "Des",
          "Des",
          "Des",
          "Des"
        ];

        $('#bulanItemF').text(bulan[month]);
        $('#mingguItemF').text(month+1);
      // $('#actkeustage').val(actkeu);
      // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
  });

  $('#updateKendala').on('show.bs.modal', function(e) {
      var $modal = $(this),
        type = $(e.relatedTarget).attr("data-type"),
        id_refer = $(e.relatedTarget).attr("data-refer"),
        fisik_real = $(e.relatedTarget).attr("data-fisik"),
        month = $(e.relatedTarget).attr("data-month")-1;

        $('#mingguKk').val(month+1);
        $('#typeKk').val(type);
        $('#id_referKk').val(id_refer);
        $('#fisik_realKk').val(fisik_real);
        console.log(fisik_real);
        $.ajax({
          type:"POST",
          url:"<?=site_url('Monev/getFisikDetail/')?>"+id_refer+"/"+(month+1)+"/"+type,
          contentType: "application/json; charset=utf-8",
          dataType: "json",
          success:function(data)
          {
            console.log(data[0]);
           $('#id_mnv_fisikKk').val(data[0]['id_mnv_fisik']);
           $('#deskripsiKk').val(data[0]['deskripsi']);
           $('#outputKk').val(data[0]['output']);
           $('#persentaseKk').val(data[0]['persentase']);
           $('#kendalaKk').val(data[0]['kendala']);
           $('input[id="tingkat_kendalaKk"][value="'+data[0]['tingkat_kendala']+'"]').attr('checked','checked');
           // $('#tingkat_kendalaF').val(data[0]['tingkat_kendala']).attr("checked");
            
            // $('#listMoneyKU').append('<div class="row" ><div class="col-md-5">'+data[0]['jenis']+'</div><div class="col-md-7"><input name="jml['+data[0]['id_mnv_keuangan']+']" type="number" value="'+data[0]['jml_uang']+'" class="form-control"></div></div><hr>');
          }
        });

        bulan = [
          "Jan",
          "Jan",
          "Jan",
          "Jan",
          "Feb",
          "Feb",
          "Feb",
          "Feb",
          "Mar",
          "Mar",
          "Mar",
          "Mar",
          "Apr",
          "Apr",
          "Apr",
          "Apr",
          "Mei",
          "Mei",
          "Mei",
          "Mei",
          "Jun",
          "Jun",
          "Jun",
          "Jun",
          "Jul",
          "Jul",
          "Jul",
          "Jul",
          "Agu",
          "Agu",
          "Agu",
          "Agu",
          "Sep",
          "Sep",
          "Sep",
          "Sep",
          "Okt",
          "Okt",
          "Okt",
          "Okt",
          "Nov",
          "Nov",
          "Nov",
          "Nov",
          "Des",
          "Des",
          "Des",
          "Des"
        ];

        $('#bulanItemKk').text(bulan[month]);
        $('#mingguItemKk').text(month+1);
      // $('#actkeustage').val(actkeu);
      // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
  });

  $('#updateKeuangan').on('show.bs.modal', function(e) {
      var $modal = $(this),
        money = $(e.relatedTarget).attr("data-money"),
        actkeu = $(e.relatedTarget).attr("data-act"),
        month = $(e.relatedTarget).attr("data-month")-1,
        fisik = $(e.relatedTarget).attr("data-fisik");
        money = JSON.parse(money);
        bulan = [
          "Jan",
          "Jan",
          "Jan",
          "Jan",
          "Feb",
          "Feb",
          "Feb",
          "Feb",
          "Mar",
          "Mar",
          "Mar",
          "Mar",
          "Apr",
          "Apr",
          "Apr",
          "Apr",
          "Mei",
          "Mei",
          "Mei",
          "Mei",
          "Jun",
          "Jun",
          "Jun",
          "Jun",
          "Jul",
          "Jul",
          "Jul",
          "Jul",
          "Agu",
          "Agu",
          "Agu",
          "Agu",
          "Sep",
          "Sep",
          "Sep",
          "Sep",
          "Okt",
          "Okt",
          "Okt",
          "Okt",
          "Nov",
          "Nov",
          "Nov",
          "Nov",
          "Des",
          "Des",
          "Des",
          "Des"
        ];
        $('#listMoneyKU').html("");
        listMoney = '<div class="form-group"><label class=" form-control-label">Input keuangan merupakan nilai total pengajuan yang sudah terealisasi pada minggu ini</label></div><input type="hidden" name="minggu" value="'+(month+1)+'"/>';
        $('#listMoneyKU').append(listMoney);
        for (var i in money) {
          $.ajax({
            type:"POST",
            url:"<?=site_url('Monev/getJmlRmpSdkWeeks/')?>"+(month+1)+"/"+money[i]['id'],
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success:function(data)
            {
              console.log(data[0]);
              
              $('#listMoneyKU').append('<div class="row" ><div class="col-md-5">'+data[0]['jenis']+'</div><div class="col-md-7"><input name="jml['+data[0]['id_mnv_keuangan']+']" type="number" value="'+data[0]['jml_uang']+'" class="form-control"></div></div><hr>');
            }
          });
          
        };

        $('#bulanItemKU').text(bulan[month]);
        $('#mingguItemKU').text(month+1);
      // $('#actkeustage').val(actkeu);
      // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
  });

  $('#addKeuangan').on('show.bs.modal', function(e) {
      var $modal = $(this),
        money = $(e.relatedTarget).attr("data-money"),
        actkeu = $(e.relatedTarget).attr("data-act"),
        month = $(e.relatedTarget).attr("data-month")-1,
        fisik = $(e.relatedTarget).attr("data-fisik");
        money = JSON.parse(money);
        bulan = [
          "Jan",
          "Jan",
          "Jan",
          "Jan",
          "Feb",
          "Feb",
          "Feb",
          "Feb",
          "Mar",
          "Mar",
          "Mar",
          "Mar",
          "Apr",
          "Apr",
          "Apr",
          "Apr",
          "Mei",
          "Mei",
          "Mei",
          "Mei",
          "Jun",
          "Jun",
          "Jun",
          "Jun",
          "Jul",
          "Jul",
          "Jul",
          "Jul",
          "Agu",
          "Agu",
          "Agu",
          "Agu",
          "Sep",
          "Sep",
          "Sep",
          "Sep",
          "Okt",
          "Okt",
          "Okt",
          "Okt",
          "Nov",
          "Nov",
          "Nov",
          "Nov",
          "Des",
          "Des",
          "Des",
          "Des"
        ];
        $('#listMoney').html("");
        listMoney = '<div class="form-group"><label class=" form-control-label">Input keuangan merupakan nilai total pengajuan yang sudah terealisasi pada minggu ini</label></div><input type="hidden" name="minggu" value="'+(month+1)+'"/>';
        for (var i in money) {
          listMoney += '<div class="row" ><div class="col-md-5">'+money[i]['jenis']+'</div><div class="col-md-7"><input name="jml['+money[i]['id']+']" type="number" value="0" class="form-control"></div></div><hr>';
        };
            $('#listMoney').append(listMoney);

        $('#bulanItemK').text(bulan[month]);
        $('#mingguItemK').text(month+1);
      // $('#actkeustage').val(actkeu);
      // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
  });

  /*MONEV END*/  
  // var allEditors = document.querySelectorAll('.froala');
  // for (var i = 0; i < allEditors.length; i++) {
  //   ClassicEditor.create(allEditors[i]).catch( error => {
  //           console.error( error );
  //       } );;
  // }
    // ClassicEditor
  // .create( document.querySelector( '#tujuan' ) );
  </script>
  
  
  
  <!-- <script src="<?=base_url();?>assets/js/lib/tinymce/tinymce.min.js"></script> -->
  <script src="<?=base_url();?>assets/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="assets/js/plugins.js"></script> -->
  
  <!-- Froala -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <!-- End Froala -->
  <script src="<?=base_url();?>assets/js/lib/data-table/datatables.min.js"></script>
  <!-- <script src="assets/js/lib/chart-js/Chart.bundle.js"></script> -->
  <script src="<?=base_url();?>assets/js/main.js"></script> 
  <script src="<?=base_url();?>assets/js/widgets.js"></script>
  <script src="<?=base_url();?>assets/js/dashboard.js"></script>
  <script src="<?=base_url();?>assets/js/lib/chosen/chosen.jquery.min.js"></script>  
  <script src="<?=base_url();?>assets/js/process.js"></script>

</body>
</html>


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

  <?php if($this->uri->segment(4) != NULL){
   ?>

   var x = '<?=$this->uri->segment(4); ?>';
   console.log(x);
   $(document).ready(function(){
    if(x == 'sdk') $('.nav-pills a[href="#sdk"]').tab('show');
    if(x == 'rec') $('.nav-pills a[href="#rekaman"]').tab('show');
    if(x == 'doc') $('.nav-pills a[href="#dokumen"]').tab('show');
    if(x == 'keg') $('.nav-pills a[href="#kegiatan"]').tab('show');

   });
   <?php } ?>
  $('#navigate').change(function(){ 
    var value = $(this).val();
    window.location.replace('<?=base_url(); ?>RMP/'+value+'/<?=$this->uri->segment(3); ?>');
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
        url:"<?=site_url('RMP/getSDKAct/')?>"+actkeu+'/'+month, //edited model
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success:function(data)
        {
              
           $('#realact').text("");
          for (var i = 0; i < data.length; i++) {
            // console.log(data);
            $('#realact').append('<tr><td>'+(i+1)+'</td><td>'+(data[i].biaya).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")+'</td><td>'+data[i].fisik+'</td><td><a class="text-danger" href="<?=base_url(); ?>RMP/deleteActPlan/'+data[i].id+'/'+actkeu+'" title="Hapus Penggunaan Anggaran" onclink="javascript:history.go(-1)"><span class="fa fa-fw fa-trash"></span></a></td></tr>')
          }

        }
      });
      $('#paguanggaran').text(''+money+',-');
      $('#actkeu').val(actkeu);
      $('#monthkeu').val(month);
      $('#fisikkeu').text(''+fisik+'');
      setMaxBiaya();
      // $('#fisik').val(fisik);
  });
  $('#tambahrencanakeustage').on('show.bs.modal', function(e) {
      var $modal = $(this),
          esseyId = e.relatedTarget.id,
          money = $(e.relatedTarget).attr("data-money"),
          actkeu = $(e.relatedTarget).attr("data-act"),
          month = $(e.relatedTarget).attr("data-month"),
          fisik = $(e.relatedTarget).attr("data-fisik");

      $.ajax({
        type:"POST",
        url:"<?=site_url('RMP/getSDKStage/')?>"+actkeu+'/'+month, //edited model
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success:function(data)
        {
              
           $('#realstage').text("");
          for (var i = 0; i < data.length; i++) {
            // console.log(data);
            $('#realstage').append('<tr><td>'+(i+1)+'</td><td>'+(data[i].biaya).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")+'</td><td>'+data[i].fisik+'</td><td><a class="text-danger" href="<?=base_url(); ?>RMP/deleteStagePlan/'+data[i].id+'/'+actkeu+'" title="Hapus Penggunaan Anggaran" onclink="javascript:history.go(-1)"><span class="fa fa-fw fa-trash"></span></a></td></tr>')
          }

        }
      });

      $('#paguanggaranstage').text(''+money+',-');
      $('#actkeustage').val(actkeu);
      $('#monthkeustage').val(month);
      $('#fisikstage').text(''+fisik+',-');
   
      // $('#fisikstage').val(fisik);
      setMaxBiayaStage();

  });  
  
  function checkSisa(){

    var sisaPagu = document.getElementById("sisaPagu").value;
    var sisaFisik = document.getElementById("sisaFisik").value;


    if(sisaPagu == 0 && sisaFisik == 0){
      window.location.href = "<?=base_url(); ?>RMP/end/<?=$this->uri->segment(3)?>";
    }else{
      if(sisaPagu >0 && sisaFisik > 0){
        swal({
        title: "Pagu dan Fisik belum 100%",
        text: "Pagu dan Fisik yang digunakan belum sepenuhnya terisi",
        type: "warning",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Lanjutkan Pengisian!",
        closeOnConfirm: true
        },
        function(){

        });
      }else if(sisaPagu > 0 ){
        swal({
        title: "Pagu belum 100%",
        text: "Pagu yang digunakan belum sepenuhnya terisi",
        type: "warning",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Lanjutkan Pengisian!",
        closeOnConfirm: true
        },
        function(){

        });
      }else if(sisaFisik > 0){
        swal({
        title: "Fisik belum 100%",
        text: "Fisik yang digunakan belum sepenuhnya terisi",
        type: "warning",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Lanjutkan Pengisian!",
        closeOnConfirm: true
        },
        function(){

        });
      }
    }
  }

  function printLamp3(){
    var sisaPagu = document.getElementById("sisaPagu").value;
    var sisaFisik = document.getElementById("sisaFisik").value;


    if(sisaPagu == 0 && sisaFisik == 0){
      window.location.href = "<?=base_url(); ?>Report/lampiran3/<?=$this->uri->segment(3)?>";
    }else{
      swal({
      title: "Pagu atau Fisik belum 100%",
      text: "Apakah Anda yakin ingin mengunduh berkas?",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Print!",
      closeOnConfirm: true
      },
      function(){
        window.location.href = "<?=base_url(); ?>Report/lampiran3/<?=$this->uri->segment(3)?>";
      });
    }
    
  }

  function setMaxBAct(){
     $('#biayaActAdd').val($('#biayaActAdd').attr("max"));
     var biaya = document.getElementById("biayaActAdd").value;
     var pagu = document.getElementById("pagu").value;
      $('#biayaPact').val((biaya/pagu)*100);
  }
  function setMaxFAct(){
    $('#fisikAct').val($('#fisikAct').attr("max"));
  }
  function setMaxBStage(){
     $('#biayaStageAdd').val($('#biayaStageAdd').attr("max"));
     var biaya = document.getElementById("biayaStageAdd").value;
    var pagu = document.getElementById("pagu").value;
    $('#biayaPstage').val((biaya/pagu)*100);  
  }
  function setMaxFStage(){
    $('#fisikStage').val($('#fisikStage').attr("max"));   
  }

  function setMaxBiaya(){
    var month = document.getElementById("monthkeu").value;
    var act_id = document.getElementById("actkeu").value;
    var pagu = document.getElementById("pagu").value;
    var id_kegiatan = document.getElementById("id_kegiatankeu").value;
    // alert(month);
    $.ajax({
        type:"POST",
        url:"<?=site_url('RMP/getSisaPagu/')?>"+pagu+"/"+month+"/"+act_id+"/"+id_kegiatan,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success:function(data)
        {
          $('#biayaActAdd').attr("placeholder","maximum = "+data['sisa']);    
          $('#biayaActAdd').attr("max",data['sisa']);    
          $('#fisikAct').attr("placeholder","maximum = "+data['fisik']);    
          $('#fisikAct').attr("max",data['fisik']);    
        }
      });
  }

  function setFisikAct(){
    var biaya = document.getElementById("biayaActAdd").value;
    var pagu = document.getElementById("pagu").value;

    $('#fisikAct').val((biaya/pagu)*100);
    $('#biayaPact').val((biaya/pagu)*100);


  }

  function setMaxBiayaStage(){
     var pagu = document.getElementById("pagu").value;
    var id_kegiatan = document.getElementById("id_kegiatanstage").value;
    var month = document.getElementById("monthkeustage").value;
    var stage_id = document.getElementById("actkeustage").value;
    // alert(month);
    $.ajax({
        type:"POST",
        url:"<?=site_url('RMP/getSisaPaguStage/')?>"+pagu+"/"+month+"/"+stage_id+"/"+id_kegiatan,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success:function(data)
        {
          $('#biayaStageAdd').attr("placeholder","maximum = "+data['sisa']);    
          $('#biayaStageAdd').attr("max",data['sisa']);
          $('#fisikStage').attr("placeholder","maximum = "+data['fisik']);    
          $('#fisikStage').attr("max",data['fisik']);    

        }
      });
  }

  function setFisikStage(){
    var biaya = document.getElementById("biayaStageAdd").value;
    var pagu = document.getElementById("pagu").value;

    $('#fisikStage').val((biaya/pagu)*100);
    $('#biayaPstage').val((biaya/pagu)*100);


  }
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
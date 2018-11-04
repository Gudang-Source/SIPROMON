
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
          var e = document.getElementById("akunatt3");

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
            $('#realact').append('<tr><td>'+(i+1)+'</td><td>'+data[i].akun+'. '+ data[i].jenis+'</td><td>'+(data[i].biaya).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")+'</td><td>'+data[i].fisik+'</td><td><a class="text-danger" href="<?=base_url(); ?>RMP/deleteActPlan/'+data[i].id+'/'+actkeu+'" title="Hapus Penggunaan Anggaran" onclink="javascript:history.go(-1)"><span class="fa fa-fw fa-trash"></span></a></td></tr>')
          }

        }
      });
      $('#paguanggaran').text(''+money+',-');
      $('#actkeu').val(actkeu);
      $('#monthkeu').val(month);
      $('#fisikkeu').text(''+fisik+'');
      if(e.selectedIndex > 0){
        setMaxBiaya();
      }
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
            $('#realstage').append('<tr><td>'+(i+1)+'</td><td>'+data[i].akun+'. '+ data[i].jenis+'</td><td>'+(data[i].biaya).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")+'</td><td>'+data[i].fisik+'</td><td><a class="text-danger" href="<?=base_url(); ?>RMP/deleteStagePlan/'+data[i].id+'/'+actkeu+'" title="Hapus Penggunaan Anggaran" onclink="javascript:history.go(-1)"><span class="fa fa-fw fa-trash"></span></a></td></tr>')
          }

        }
      });

      $('#paguanggaranstage').text(''+money+',-');
      $('#actkeustage').val(actkeu);
      $('#monthkeustage').val(month);
      $('#fisikstage').text(''+fisik+',-');
      var e = document.getElementById("akunatt3stage");
      if(e.selectedIndex > 0){
        setMaxBiayaStage();
      }
      // $('#fisikstage').val(fisik);

  });  
  
  function setMaxBiaya(){
    var e = document.getElementById("akunatt3");
    var id_rmp_sdk = e.options[e.selectedIndex].value;
    var month = document.getElementById("monthkeu").value;
    var act_id = document.getElementById("actkeu").value;
    // alert(month);
    $.ajax({
        type:"POST",
        url:"<?=site_url('RMP/getSDKsisa/')?>"+id_rmp_sdk+"/"+month+"/"+act_id,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success:function(data)
        {
          $('#biayaActAdd').attr("placeholder","maximum = "+data['sisa']);    
          $('#biayaActAdd').attr("max",data['sisa']);    

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
    var e = document.getElementById("akunatt3stage");
    var id_rmp_sdk = e.options[e.selectedIndex].value;
    var month = document.getElementById("monthkeustage").value;
    var stage_id = document.getElementById("actkeustage").value;
    // alert(month);
    $.ajax({
        type:"POST",
        url:"<?=site_url('RMP/getSDKsisaStage/')?>"+id_rmp_sdk+"/"+month+"/"+stage_id,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success:function(data)
        {
          $('#biayaStageAdd').attr("placeholder","maximum = "+data['sisa']);    
          $('#biayaStageAdd').attr("max",data['sisa']);    

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
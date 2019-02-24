  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="<?=base_url();?>assets/js/accordion.min.js"></script>  
  <script src="<?=base_url();?>assets/js/jqClock.min.js"></script>  
  <script src="<?=base_url();?>assets/js/sweetalert.min.js"></script>  
  <script src="<?=base_url();?>assets/ckeditor/ckeditor.js"></script>
  <script>
            
  /*MONEV*/
  /*MONEV*/
  /*MONEV*/
  /*MONEV*/
  /*MONEV*/
  /*MONEV*/

  const formatter = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'IDR',
    minimumFractionDigits: 0
  });

  $('#addLaporan').on('show.bs.modal', function(e) {
      var $modal = $(this),
        type = $(e.relatedTarget).attr("data-type"),
        id_refer = $(e.relatedTarget).attr("data-refer"),
        money = $(e.relatedTarget).attr("data-money"),
        moneyMax = $(e.relatedTarget).attr("data-moneyAc"),
        kendala = $(e.relatedTarget).attr("data-kendala"),
        subkegiatan = $(e.relatedTarget).attr("data-sub"),
        fisik_acuan = $(e.relatedTarget).attr("data-fisik"),
        month = $(e.relatedTarget).attr("data-month");
        if(moneyMax == 'x'){
          moneyMax = -1;
        }
        
        var id_kegiatan = document.getElementById("id_kegiatan").value;


        // $.ajax({
        //   type:"POST",
        //   url:"<?=site_url('Monev/getSisaOther/')?>"+id_refer+"/"+month+"/"+type+"/"+id_kegiatan,
        //   contentType: "application/json; charset=utf-8",
        //   dataType: "json",
        //   success:function(data)
        //   {
        //     // alert(data['sisaM']);
        //     if(data['sisaM'] == 0){
        //       moneyMax = -1;
        //     }else{
        //       moneyMax = data['sisaM'];
        //     }
        //     if(moneyMax == -1){
        //       $('#biayaA').attr("placeholder","Tidak ada dana untuk digunakan");
        //     }else{
        //       $('#biayaA').attr("placeholder","Maksimal = "+moneyMax);
        //     }
        //     $('#biayaA').attr("min",0);
        //     $('#biayaA').attr("max",moneyMax);

        //   }
        // });
        bulan = [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "Mei",
          "Jun",
          "Jul",
          "Agu",
          "Sep",
          "Okt",
          "Nov",
          "Des"
        
        ];

        $('#bulanItem').text(bulan[(month-1)]);
        $('#month').val(month);
        $('#type').val(type);
        $('#id_refer').val(id_refer);
        $('#kendala_id').val(kendala);
        // alert(kendala);
        // $('#biayaA').attr("placeholder","Minimal = 0");
        $('#fisikA').attr("placeholder","Minimal = 0");
        $('#fisikA').attr("min",0);
        
        $('#fisik_acuan').val(fisik_acuan);
        $('#target_fisik').text(fisik_acuan);
        $('#biaya_acuan').val(money);
        $('#target_biaya').text(money);
        $('#subkegiatanA').text(subkegiatan);
        if(kendala == 1){
          $('#kendalaZero').prop('checked',false);
          $('#kendalaText').val('');
          $('#kendalaL').css("display","block");
        }else{
          $('#kendalaText').val('-');
          $('#kendalaZero').prop('checked',true);
          $('#kendalaL').css("display","none");
        }
      // $('#actkeustage').val(actkeu);
      // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
  });

  function checkRealF(){
    var fisik_P = document.getElementById("fisikA").value;
    var target_fisik = document.getElementById("fisik_acuan").value;
    var kendala_id = document.getElementById("kendala_id").value;

    $('#fisik_realA').val(fisik_P*target_fisik/100);

    var biaya = document.getElementById("biayaA").value;
    var biaya_acuan = document.getElementById("biaya_acuan").value;
    if(((biaya < (9/10)*biaya_acuan) || fisik_P < 90)  && kendala_id == 0){
      $('#kendalaZero').prop('checked',false);
      $('#kendalaText').val('');
      $('#kendalaL').css("display","block");
    }else if(kendala_id == 0){
      $('#kendalaText').val('-');
      $('#kendalaZero').prop('checked',true);
      $('#kendalaL').css("display","none");
    }
  }

  function setBiayaPA(){
    var fisik_P = document.getElementById("fisikA").value;
    var biaya = document.getElementById("biayaA").value;
    var pagu = document.getElementById("pagu").value;
    var biaya_acuan = document.getElementById("biaya_acuan").value;
    $('#biayaPA').val((biaya/pagu)*100);
    var kendala_id = document.getElementById("kendala_id").value;
    // alert(kendala_id);
    if(((biaya < (9/10)*biaya_acuan) || fisik_P < 90)  && kendala_id == 0){
      $('#kendalaZero').prop('checked',false);
      $('#kendalaText').val('');
      $('#kendalaL').css("display","block");
    }else if(kendala_id == 0){
      $('#kendalaText').val('-');
      $('#kendalaZero').prop('checked',true);
      $('#kendalaL').css("display","none");
    }
    
  }

  function setMaxBiayaA(){
    var biaya_acuan = document.getElementById("biaya_acuan").value;
    var pagu = document.getElementById("pagu").value;
    $('#biayaA').val(biaya_acuan);
    biaya = biaya_acuan;
    $('#biayaPA').val((biaya_acuan/pagu)*100);
    var kendala_id = document.getElementById("kendala_id").value;
    var fisik_P = document.getElementById("fisikA").value;
    
    if(((biaya < (9/10)*biaya_acuan) || fisik_P < 90)  && kendala_id == 0){
      $('#kendalaZero').prop('checked',false);
      $('#kendalaText').val('');
      $('#kendalaL').css("display","block");
    }else if(kendala_id == 0){
      $('#kendalaText').val('-');
      $('#kendalaZero').prop('checked',true);
      $('#kendalaL').css("display","none");
    }
  }

  function setMaxFisikA(){
    var target_fisik = document.getElementById("fisik_acuan").value;
    var biaya_acuan = document.getElementById("biaya_acuan").value;
    var biaya = document.getElementById("biayaA").value;
    $('#fisik_realA').val(target_fisik);
    $('#fisikA').val(100);
    var kendala_id = document.getElementById("kendala_id").value;
    
    if(((biaya < (9/10)*biaya_acuan))  && kendala_id == 0){
      $('#kendalaZero').prop('checked',false);
      $('#kendalaText').val('');
      $('#kendalaL').css("display","block");
    }else if(kendala_id == 0){
      $('#kendalaText').val('-');
      $('#kendalaZero').prop('checked',true);
      $('#kendalaL').css("display","none");
    }
  }

  $('#updateLaporan').on('show.bs.modal', function(e) {
      var $modal = $(this),
        type = $(e.relatedTarget).attr("data-type"),
        id_refer = $(e.relatedTarget).attr("data-refer"),
        money = $(e.relatedTarget).attr("data-money"),
        moneyMax = $(e.relatedTarget).attr("data-moneyAc"),
        kendala = $(e.relatedTarget).attr("data-kendala"),
        subkegiatan = $(e.relatedTarget).attr("data-sub"),
        fisik_acuan = $(e.relatedTarget).attr("data-fisik"),
        month = $(e.relatedTarget).attr("data-month"),
        biaya = $(e.relatedTarget).attr("data-t-biaya"),
        biayaP = $(e.relatedTarget).attr("data-t-biayaP");
        fisik = $(e.relatedTarget).attr("data-t-fisik");
        fisik_real = $(e.relatedTarget).attr("data-t-fisik_real");
        output = $(e.relatedTarget).attr("data-t-output");
        deskripsi = $(e.relatedTarget).attr("data-t-deskripsi");
        kendala_text = $(e.relatedTarget).attr("data-t-kendala");
        id_mnv_fisik = $(e.relatedTarget).attr("data-t-id");
        tingkat_kendala = $(e.relatedTarget).attr("data-t-tingkat_kendala");

        if(moneyMax == 'x'){
          moneyMax = -1;
        }
        var id_kegiatan = document.getElementById("id_kegiatanU").value;


        // $.ajax({
        //   type:"POST",
        //   url:"<?=site_url('Monev/getSisaOther/')?>"+id_refer+"/"+month+"/"+type+"/"+id_kegiatan,
        //   contentType: "application/json; charset=utf-8",
        //   dataType: "json",
        //   success:function(data)
        //   {
        //     // alert(data['sisaM']);
        //     if(data['sisaM'] == 0){
        //       moneyMax = -1;
        //     }else{
        //       moneyMax = data['sisaM'];
        //     }
        //     if(moneyMax == -1){
        //       $('#biayaU').attr("placeholder","Tidak ada dana untuk digunakan");
        //     }else{
        //       $('#biayaU').attr("placeholder","Maksimal = "+moneyMax);
        //     }
        //     $('#biayaU').attr("min",0);
        //     $('#biayaU').attr("max",moneyMax);

        //   }
        // });
        

        bulan = [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "Mei",
          "Jun",
          "Jul",
          "Agu",
          "Sep",
          "Okt",
          "Nov",
          "Des"
        
        ];

        $('#bulanItemU').text(bulan[(month-1)]);
        $('#monthU').val(month);
        $('#typeU').val(type);
        $('#id_referU').val(id_refer);
        $('#kendala_idU').val(kendala);
        // alert(kendala);
        // $('#biayaA').attr("placeholder","Minimal = 0");
        $('#fisikU').attr("placeholder","Minimal = 0");
        $('#fisikU').attr("min",0);
       
        $('#fisik_acuanU').val(fisik_acuan);
        $('#target_fisikU').text(fisik_acuan);
        $('#biaya_acuanU').val(money);
        $('#target_biayaU').text(money);
        $('#subkegiatanU').text(subkegiatan);
        if(kendala == 1){
          $('#kendalaZeroU').prop('checked',false);
          $('#kendalaTextU').val('');
          $('#kendalaU').css("display","block");
        }else{
          $('#kendalaTextU').val('-');
          $('#kendalaZeroU').prop('checked',true);
          $('#kendalaU').css("display","none");
        }

        $('#biayaU').val(biaya);
        $('#biayaPU').val(biayaP);
        $('#fisikU').val(fisik);
        $('#fisik_realU').val(fisik_real);
        $('#outputU').val(output);
        $('#deskripsiU').val(deskripsi);
        $('#kendalaTextU').val(kendala_text);
        $('#id_mnv_fisik').val(id_mnv_fisik);
        $('input:radio[name=tingkat_kendala]').filter('[value='+tingkat_kendala+']').prop('checked', true);
      // $('#actkeustage').val(actkeu);
      // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
  });

  function checkRealFU(){
    var fisik_P = document.getElementById("fisikU").value;
    var target_fisik = document.getElementById("fisik_acuanU").value;
    var kendala_id = document.getElementById("kendala_idU").value;

    $('#fisik_realU').val(fisik_P*target_fisik/100);

    var biaya = document.getElementById("biayaU").value;
    var biaya_acuan = document.getElementById("biaya_acuanU").value;
    if(((biaya < (9/10)*biaya_acuan) || fisik_P < 90)  && kendala_id == 0){
      $('#kendalaZeroU').prop('checked',false);
      // $('#kendalaTextU').val('');
      $('#kendalaU').css("display","block");
    }else if(kendala_id == 0){
      $('#kendalaTextU').val('-');
      $('#kendalaZeroU').prop('checked',true);
      $('#kendalaU').css("display","none");
    }
  }

  function setBiayaPU(){
    var fisik_P = document.getElementById("fisikU").value;
    var biaya = document.getElementById("biayaU").value;
    var pagu = document.getElementById("pagu").value;
    var biaya_acuan = document.getElementById("biaya_acuanU").value;
    $('#biayaPU').val((biaya/pagu)*100);
    var kendala_id = document.getElementById("kendala_id").value;
    // alert(kendala_id);
    if(((biaya < (9/10)*biaya_acuan) || fisik_P < 90)  && kendala_id == 0){
      $('#kendalaZeroU').prop('checked',false);
      // $('#kendalaTextU').val('');
      $('#kendalaU').css("display","block");
    }else if(kendala_id == 0){
      $('#kendalaTextU').val('-');
      $('#kendalaZeroU').prop('checked',true);
      $('#kendalaU').css("display","none");
    }
    
  }

  function setMaxBiayaU(){
    var biaya_acuan = document.getElementById("biaya_acuanU").value;
    var pagu = document.getElementById("pagu").value;
    $('#biayaU').val(biaya_acuan);
    $('#biayaPU').val((biaya_acuan/pagu)*100);
    biaya = biaya_acuan;
    var kendala_id = document.getElementById("kendala_idU").value;
    var fisik_P = document.getElementById("fisikU").value;
    
    if(((biaya < (9/10)*biaya_acuan) || fisik_P < 90)  && kendala_id == 0){
      $('#kendalaZeroU').prop('checked',false);
      // $('#kendalaTextU').val('');
      $('#kendalaU').css("display","block");
    }else if(kendala_id == 0){
      $('#kendalaTextU').val('-');
      $('#kendalaZeroU').prop('checked',true);
      $('#kendalaU').css("display","none");
    }
  }

  function setMaxFisikU(){
    var target_fisik = document.getElementById("fisik_acuanU").value;
    var biaya_acuan = document.getElementById("biaya_acuanU").value;
    var biaya = document.getElementById("biayaU").value;
    $('#fisik_realU').val(target_fisik);
    $('#fisikU').val(100);
    var kendala_id = document.getElementById("kendala_idU").value;
    
    if(((biaya < (9/10)*biaya_acuan))  && kendala_id == 0){
      $('#kendalaZeroU').prop('checked',false);
      // $('#kendalaTextU').val('');
      $('#kendalaLU').css("display","block");
    }else if(kendala_id == 0){
      $('#kendalaTextU').val('-');
      $('#kendalaZeroU').prop('checked',true);
      $('#kendalaLU').css("display","none");
    }
  }

  $('#updateKeuangan').on('show.bs.modal', function(e) {
    
      var $modal = $(this),
        money = $(e.relatedTarget).attr("data-money"),
        this_money = $(e.relatedTarget).attr("data-money2"),
        this_kendala = $(e.relatedTarget).attr("data-kendala"),
        this_id = $(e.relatedTarget).attr("data-id"),
        month = $(e.relatedTarget).attr("data-month"),
        money_min = $(e.relatedTarget).attr("data-min"),
        idk = $(e.relatedTarget).attr("data-idk");
        var sisa = document.getElementById("sisaPagu").value;
        // alert(this_id);
        bulan = [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "Mei",
          "Jun",
          "Jul",
          "Agu",
          "Sep",
          "Okt",
          "Nov",
          "Des"
        ];
        // alert(bulan[month]);
        $('#bulanItemUK').text(bulan[month]);
        month++;
        $('#monthUK').val(month);
        $('#paguMonthUK').text(money);
        $('#max_rencanaUK').val(money);
        $('#jml_uangUK').val(this_money);
        $('#jml_uangUK').attr('placeholder',"min = "+formatter.format(money_min)+", max = "+formatter.format(sisa));
        $('#jml_uangUK').attr('min',money_min);
        $('#jml_uangUK').attr('max',sisa);
        $('#kendalaUKF').val(this_kendala);
        $('#id_mnv_keuanganUK').val(this_id);
        checkUTK();
      // $('#actkeustage').val(actkeu);
      // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
  });

  $('#addKeuangan').on('show.bs.modal', function(e) {
      var $modal = $(this),
        money = $(e.relatedTarget).attr("data-money"),
        month = $(e.relatedTarget).attr("data-month"),
        money_min = $(e.relatedTarget).attr("data-min"),
        idk = $(e.relatedTarget).attr("data-idk");
        var sisa = document.getElementById("sisaPagu").value;
        

        bulan = [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "Mei",
          "Jun",
          "Jul",
          "Agu",
          "Sep",
          "Okt",
          "Nov",
          "Des"
        ];
        // alert(bulan[month]);
        $('#bulanItemAK').text(bulan[month]);
        month++;
        $('#monthAK').val(month);
        $('#paguMonth').text(money);
        $('#max_rencanaAK').val(money);
        // $('#jml_uangAK').val(money_min);
        $('#jml_uangAK').attr('placeholder',"min = "+formatter.format(money_min)+", max = "+formatter.format(sisa));
        $('#jml_uangAK').attr('min',money_min);
        $('#jml_uangAK').attr('max',sisa);
        // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
  });

  $('#viewKendala').on('show.bs.modal', function(e) {
      var $modal = $(this),
          kendala = $(e.relatedTarget).attr("data-kendala");
      $('#kendalaView').text(kendala);
      // $('#fisik').val(fisik);
  });

  function setMaxRencana(){

    var max_rencanaAK = document.getElementById("max_rencanaAK").value;
    $('#jml_uangAK').val(max_rencanaAK);
    checkTK();
  }
  function setMaxRencanaU(){
    var max_rencanaAK = document.getElementById("max_rencanaUK").value;
    $('#jml_uangUK').val(max_rencanaAK);
    checkUTK();
  }

  function checkTK(){
    var max_rencanaAK = document.getElementById("max_rencanaAK").value;
    var jml_uangAK = document.getElementById("jml_uangAK").value;
    if(jml_uangAK < (9/10)*max_rencanaAK){
      $('#kendalaAKF').val('');
      $('#kendalaAK').css('display','block');
    }else{
      $('#kendalaAKF').val('-');
      $('#kendalaAK').css('display','none');

    }
  }

  function checkUTK(){
    var max_rencanaAK = document.getElementById("max_rencanaUK").value;
    var jml_uangAK = document.getElementById("jml_uangUK").value;
    if(jml_uangAK < (9/10)*max_rencanaAK){
      $('#kendalaUK').css('display','block');
    }else{
      $('#kendalaUKF').val('-');
      $('#kendalaUK').css('display','none');

    }
  }

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
  <script type="text/javascript">
     $('#bodyHTML').css("min-width",$(window).width()+"px");
  </script>
</body>
</html>
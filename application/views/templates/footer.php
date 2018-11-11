
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
    if(x == 'sdm') $('.nav-pills a[href="#sdm"]').tab('show');
    if(x == 'rec') $('.nav-pills a[href="#rekaman"]').tab('show');
    if(x == 'doc') $('.nav-pills a[href="#dokumen"]').tab('show');
    if(x == 'keg') $('.nav-pills a[href="#kegiatan"]').tab('show');

   });
   <?php } ?>
  $('#navigate').change(function(){ 
    var value = $(this).val();
    window.location.replace('<?=base_url(); ?>RMP/'+value+'/<?=$this->uri->segment(3); ?>');
  });

    
  $('#tambahraker').on('show.bs.modal', function(e) {
        var $modal = $(this),
            esseyId = e.relatedTarget.id;
            sarpras = $(e.relatedTarget).attr("data-sarpras"),
            hasil = $(e.relatedTarget).attr("data-hasil"),
            kriteria = $(e.relatedTarget).attr("data-kriteria"),
            metode = $(e.relatedTarget).attr("data-metode"),
        $("input[name='activity_id']").val(esseyId);
        $("input[name='sarpras']").val(sarpras);
        $("input[name='hasil']").val(hasil);
        $("input[name='kriteria']").val(kriteria);
        $("input[name='metode']").val(metode);
    });
  $('#tambahraker2').on('show.bs.modal', function(e) {
      var $modal = $(this),
          esseyId = e.relatedTarget.id;
          sarpras = $(e.relatedTarget).attr("data-sarpras"),
          hasil = $(e.relatedTarget).attr("data-hasil"),
          kriteria = $(e.relatedTarget).attr("data-kriteria"),
          metode = $(e.relatedTarget).attr("data-metode"),
          console.log(metode);
      $("input[name='stages_id']").val(esseyId);
      $("input[name='sarpras']").val(sarpras);
      $("input[name='hasil']").val(hasil);
      $("input[name='kriteria']").val(kriteria);
      $("input[name='metode']").val(metode);      
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
       window.location = url+loc+id+"/";
    });
  }

  $('#formPejabat').on('show.bs.modal', function(e) {
      var $modal = $(this);
        $("input[name='nip'").val("");
        $("input[name='name'").val("");
        $("input[name='username'").val("");
      // $('#actkeustage').val(actkeu);
      // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
  });
  $('#editPejabat').on('show.bs.modal', function(e) {
      var $modal = $(this),
        nip = $(e.relatedTarget).attr("data-nip"),
        name = $(e.relatedTarget).attr("data-name"),
        username = $(e.relatedTarget).attr("data-username");
        $("input[name='nip'").val(nip);
        $("input[name='name'").val(name);
        $("input[name='username'").val(username);
        $("input[name='id'").val($(e.relatedTarget).attr("data-id"));
      // $('#actkeustage').val(actkeu);
      // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
  });
  $('#editPejabatP').on('show.bs.modal', function(e) {
      var $modal = $(this),
        username = $(e.relatedTarget).attr("data-username");
        $("input[name='username'").val(username);
        $("input[name='id'").val($(e.relatedTarget).attr("data-id"));
      // $('#actkeustage').val(actkeu);
      // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
  }); 
  $('#formUpdateP').on('show.bs.modal', function(e) {
      var $modal = $(this),
        id = $(e.relatedTarget).attr("data-id"),
        name = $(e.relatedTarget).attr("data-name"),
        kompetensi = $(e.relatedTarget).attr("data-kompetensi"),
        tugas = $(e.relatedTarget).attr("data-tugas"),
        tanggungjawab = $(e.relatedTarget).attr("data-tanggungjawab"),
        wewenang = $(e.relatedTarget).attr("data-wewenang");

        $('#idU').val(id);
        $('#nameU').val(name);
        $('#kompetensiU').val(kompetensi);
        $('#tugasU').text(tugas);
        $('#tanggungjawabU').text(tanggungjawab);
        $('#wewenangU').text(wewenang);
      // $('#actkeustage').val(actkeu);
      // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
  });
  $('#formUpdateK').on('show.bs.modal', function(e) {
      var $modal = $(this),
        fullname = $(e.relatedTarget).attr("data-fullname"),
        username = $(e.relatedTarget).attr("data-username"),
        hp = $(e.relatedTarget).attr("data-hp"),
        satker_id = $(e.relatedTarget).attr("data-satker_id"),
        roles_id = $(e.relatedTarget).attr("data-roles_id"),
        email = $(e.relatedTarget).attr("data-email");
        $("input[name='fullname'").val(fullname);
        $("input[name='username'").val(username);
        $("input[name='hp'").val(hp);
        $("input[name='email'").val(email);
        $("#satker_id").val(satker_id);
        $("#roles_id").val(roles_id);
        $("input[name='id'").val($(e.relatedTarget).attr("data-id"));
      // $('#actkeustage').val(actkeu);
      // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
  });  
   $('#formUpdateKP').on('show.bs.modal', function(e) {
      var $modal = $(this),
        username = $(e.relatedTarget).attr("data-username"),
        email = $(e.relatedTarget).attr("data-email");
        $("input[name='username'").val(username);
        $("input[name='email'").val(email);
        $("input[name='id'").val($(e.relatedTarget).attr("data-id"));
      // $('#actkeustage').val(actkeu);
      // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
  }); 
  $('#tambahdoc').on('show.bs.modal', function(e) {
      var $modal = $(this),
        name = $(e.relatedTarget).attr("data-name"),
        num = $(e.relatedTarget).attr("data-num");
        console.log($(e.relatedTarget).attr("data-id"));
        $("input[name='document_name'").val(name);
        $("input[name='document_num'").val(num);
        $("input[name='document_id'").val($(e.relatedTarget).attr("data-id"));
      // $('#actkeustage').val(actkeu);
      // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
  });  
  $('#tambahrec').on('show.bs.modal', function(e) {
      var $modal = $(this),
        name = $(e.relatedTarget).attr("data-name"),
        locarr = $(e.relatedTarget).attr("data-loc");
        console.log(locarr);
        if(locarr != null){
          locarr = locarr.split("<br/>");
        }
        period = $(e.relatedTarget).attr("data-period");
        $("input[name='record_name'").val(name);
        if(locarr != null){
          $("input[name='lemari'").val((locarr[0].split("Lemari No"))[1]);
          $("input[name='pj'").val(locarr[1]);
        }
        $("input[name='period'").val(period);
        $("input[name='record_id'").val($(e.relatedTarget).attr("data-id"));
      // $('#actkeustage').val(actkeu);
      // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
  });  
  $('#tambahsub').on('show.bs.modal', function(e) {

      var $modal = $(this),
        name = $(e.relatedTarget).attr("data-name"),
        desc = $(e.relatedTarget).attr("data-desc");
        parent = $(e.relatedTarget).attr("data-parent");
        $("#keg1").val(name);
        $("#desc1").val(desc);
        $(e.currentTarget).find('input[name="parent"]').val(parent);
        $("input[name='act_id'").val($(e.relatedTarget).attr("data-id"));
  });   

  $('#tambahtahapan').on('show.bs.modal', function(e) {
       
      var $modal = $(this),
        name = $(e.relatedTarget).attr("data-name"),
        desc = $(e.relatedTarget).attr("data-desc");
        parent = $(e.relatedTarget).attr("data-parent");

        $("#keg2").val(name);
        $("#desc2").val(desc);
        $(e.currentTarget).find('input[name="act_id"]').val(parent);
        $("input[name='stages_id'").val($(e.relatedTarget).attr("data-id"));
  });      
  $('#tambahsdk').on('show.bs.modal', function(e) {
       
      var $modal = $(this),
        akun = $(e.relatedTarget).attr("data-akun"),
        jenis = $(e.relatedTarget).attr("data-jenis");
        biaya = $(e.relatedTarget).attr("data-biaya");

        $("input[name='akun'").val(akun);
        $("input[name='jenis'").val(jenis);
        $("input[name='biaya'").val(biaya);
        // $(e.currentTarget).find('input[name="act_id"]').val(parent);
        $("input[name='sdk_id'").val($(e.relatedTarget).attr("data-id"));
  });        
  $('#lengkapi').on('show.bs.modal', function(e) {
       
      var $modal = $(this),
        output = $(e.relatedTarget).attr("data-output"),
        volume = $(e.relatedTarget).attr("data-volume");
        unitof = $(e.relatedTarget).attr("data-unitof");
        rabtitle = $(e.relatedTarget).attr("data-rabtitle");

        $("input[name='output'").val(output);
        $("input[name='volume'").val(volume);
        $("input[name='unitof'").val(unitof);
        $("input[name='rabtitle'").val(rabtitle);
        // $(e.currentTarget).find('input[name="act_id"]').val(parent);
        // $("input[name='rmp_id'").val($(e.relatedTarget).attr("data-id"));
  });          
  $('#dipafill').on('show.bs.modal', function(e) {
       
      var $modal = $(this),
        dipa = $(e.relatedTarget).attr("data-dipa"),
        dipa_date = $(e.relatedTarget).attr("data-date");


        $("input[name='dipa'").val(dipa);
        $("input[name='date'").val(dipa_date);
        // $(e.currentTarget).find('input[name="act_id"]').val(parent);
        // $("input[name='rmp_id'").val($(e.relatedTarget).attr("data-id"));
  });            
  $('#formReview').on('show.bs.modal', function(e) {
       
      var $modal = $(this),
        komentar = $(e.relatedTarget).attr("data-komentar"),
        id = $(e.relatedTarget).attr("data-id");
        bab = $(e.relatedTarget).attr("data-bab");
        sifat = $(e.relatedTarget).attr("data-sifat");
        keterangan = $(e.relatedTarget).attr("data-keterangan");
        kesesuaian = $(e.relatedTarget).attr("data-kesesuaian");
        catatan = $(e.relatedTarget).attr("data-catatan");


        $("input[name='id']").val(id);
        $("input[name='bab']").val(bab);
        $("input[name='komentar']").val(komentar);
        // $("input[name='sifat']").val(sifat);
        $("input[name='keterangan']").val(keterangan);
        // $("input[name='kesesuaian']").val(kesesuaian);
        $("input[name='catatan']").val(catatan);
        // $(e.currentTarget).find('input[name="act_id"]').val(parent);
        // $("input[name='rmp_id'").val($(e.relatedTarget).attr("data-id"));
  });              
  /*MONEV*/
  /*MONEV*/
  /*MONEV*/
  /*MONEV*/
  /*MONEV*/
  /*MONEV*/
  $('#addLaporan').on('show.bs.modal', function(e) {
      var $modal = $(this),
        type = $(e.relatedTarget).attr("data-type"),
        id_refer = $(e.relatedTarget).attr("data-refer"),
        fisik_real = $(e.relatedTarget).attr("data-fisik"),
        month = $(e.relatedTarget).attr("data-month");


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

        $('#bulanItemKk').text(bulan[month]);
        $('#mingguItemKk').text(month+1);
      // $('#actkeustage').val(actkeu);
      // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
  });

  $('#updateKeuangan').on('show.bs.modal', function(e) {
    
      var $modal = $(this),
        money = $(e.relatedTarget).attr("data-money"),
        this_money = $(e.relatedTarget).attr("data-money2"),
        this_kendala = $(e.relatedTarget).attr("data-kendala"),
        this_id = $(e.relatedTarget).attr("data-id"),
        month = $(e.relatedTarget).attr("data-month"),
        idk = $(e.relatedTarget).attr("data-idk");
        var sisa = document.getElementById("sisaPagu").value;
        alert(this_id);
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
        $('#jml_uangUK').attr('placeholder',"max value = "+sisa);
        $('#jml_uangUK').val(this_money);
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
        $('#jml_uangAK').attr('placeholder',"max value = "+sisa);
        $('#jml_uangAK').attr('max',sisa);
        // $('#monthkeustage').val(month);
      // $('#fisikstage').text(''+fisik+',-');
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

</body>
</html>
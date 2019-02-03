<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Report extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->data = array();
  }

  function penyebut($nilai) {
    $nilai = abs($nilai);
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($nilai < 12) {
      $temp = " ". $huruf[$nilai];
    } else if ($nilai <20) {
      $temp = $this->penyebut($nilai - 10). " belas";
    } else if ($nilai < 100) {
      $temp = $this->penyebut($nilai/10)." puluh". $this->penyebut($nilai % 10);
    } else if ($nilai < 200) {
      $temp = " seratus" . $this->penyebut($nilai - 100);
    } else if ($nilai < 1000) {
      $temp = $this->penyebut($nilai/100) . " ratus" . $this->penyebut($nilai % 100);
    } else if ($nilai < 2000) {
      $temp = " seribu" . $this->penyebut($nilai - 1000);
    } else if ($nilai < 1000000) {
      $temp = $this->penyebut($nilai/1000) . " ribu" . $this->penyebut($nilai % 1000);
    } else if ($nilai < 1000000000) {
      $temp = $this->penyebut($nilai/1000000) . " juta" . $this->penyebut($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
      $temp = $this->penyebut($nilai/1000000000) . " milyar" . $this->penyebut(fmod($nilai,1000000000));
    } else if ($nilai < 1000000000000000) {
      $temp = $this->penyebut($nilai/1000000000000) . " trilyun" . $this->penyebut(fmod($nilai,1000000000000));
    }     
    return $temp;
  }
 
  public function terbilang($nilai) {
    if($nilai<0) {
      $hasil = "minus ". trim($this->penyebut($nilai));
    } else {
      $hasil = trim($this->penyebut($nilai));
    }         
    return $hasil;
  }
  public function debug($id){
    $this->data['user'] = $this->ModelRMPSDKPlanAct->getByMonthRMP();
  }
  public function printRMP($id){
    $this->data['user'] = $this->ModelUser->selectById2($this->session->userdata('id'))->row_array();
    $this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
    $this->data['row']['pengesah'] = $this->ModelEmployee->selectById(1)->row_array()['name'];   
    // $data = $this->ModelKegiatan->selectAllKegiatanById($id)->row_array();
    $this->data['acts'] = $this->ModelRMPAct->selectByIdRMP($this->data['row']['id'])->result_array();
    $this->data['stages'] = $this->ModelRMPStages->selectAll()->result_array();
    $this->data['bibs'] = $this->ModelRMPBib->selectByIdRMP($this->data['row']['id'])->result_array();
    $this->data['terbilang'] = $this->terbilang($this->data['row']['pagu']);
    $this->data['kapus'] = $this->ModelEmployee->selectById(1)->row_array(); 
    $this->data['swots'] = $this->ModelRMPSwot->selectByIdRMP($this->data['row']['id'])->result_array();
    $this->data['anals'] = $this->ModelRMPAnalisis->selectByIdRMP($this->data['row']['id'])->result_array();
      $this->data['allsdm'] = $this->ModelRMPSDM->selectByIdRMP($this->data['row']['id'])->result_array();    
    // $docs = $this->ModelRMPDocument->selectByIdRMP($row['id'])->result_array();
    // $roles = $this->ModelRMPRoles->selectByIdRMP($row['id'])->result_array();
    // $sdms = $this->ModelRMPSDM->selectByIdRMP($row['id'])->result_array();
    // $this->data['sdks'] = $this->ModelRMPSDK->selectByIdRMP($this->data['row']['id'])->result_array();
    // $this->data['docs'] = $this->ModelRMPDocument->selectByIdRMP($this->data['row']['id'])->result_array();
    // $this->data['recs'] = $this->ModelRMPRec->selectByIdRMP($this->data['row']['id'])->result_array();
    // var_dump($row);

    $headfoot = '
    <htmlpageheader name="MyHeader1">
        <img src="' . base_url() . 'assets/images/header-pdf.jpg"/>
    </htmlpageheader>

    <htmlpageheader name="MyHeader2">
        <div style="text-align: right; font-size: 9pt; font-style: italic;">
        Rencana Mutu Pelaksanaan TA. '. $this->data['row']['tahun_anggaran'].'
        </div>
    </htmlpageheader>

    <htmlpagefooter name="MyFooter1">
        <div style="text-align: center;">
          <img src="' . base_url() . 'assets/images/footerkan.jpg"/>
        </div>
    </htmlpagefooter>

    <htmlpagefooter name="MyFooter2">

        <div width="100%" style="text-align:right;">
          <i>Hal : {PAGENO}/{nbpg}</i>
        </div>  
    </htmlpagefooter>
    <htmlpagefooter name="MyFooter3">

        <div width="100%" style="text-align:right;">
          <i>Hal : {PAGENO}/{nbpg}</i>
        </div>  
    </htmlpagefooter>
    <sethtmlpageheader name="MyHeader1" value="on" show-this-page="1" />
    <sethtmlpagefooter name="MyFooter1" value="on" show-this-page="1"/>
    <sethtmlpageheader name="MyHeader2" value="on" />
    <sethtmlpagefooter name="MyFooter2" value="on" />
    <sethtmlpagefooter name="MyFooter3" value="on" />
';

     $cover='
         <html>
            <head>
            <style>

            table {
                border-collapse: collapse;
                /*empty-cells: hide;*/
            }

            table, td, th {
                border: 1px solid black;
                vertical-align: text-top;
                padding: 5px;
            }
            th {
                background-color: #e3ece4;
            }

            .noborder {
            border-style: none;
            }

            </style>
            </head>
            <body style="font-family: Calibri;">
                <br>
                <div style="text-align: center; font-family: Calibri; font-size: 14; line-height: 1.5">
                <b>RENCANA MUTU PELAKSANA<br>
                  '.strtoupper( $this->data['row']['judul']).'
                  </b>
                  <div style="text-align: center; font-family: Calibri; font-size: 12;">
                    <b>TAHUN ANGGARAN '. $this->data['row']['tahun_anggaran'].'</b>
                  </div>      
                  <div style="text-align: center; font-family: Calibri; font-size: 12;">
                    <b>SATUAN KERJA '. strtoupper($this->data['row']['satuankerja']).'</b>
                  </div>                        
                  <div style="text-align: center; font-family: Calibri; font-size: 12; font-weight:500;">
                    No.Dok '. $this->data['row']['nodokumen'].';'.date("d M Y").' Rev. 00
                  </div>                                          
              </div>
              <br><br>
              <div style="text-align: center; font-family: Calibri; font-size: 14; line-height: 1.5">
                <b>PENGESAHAN</b>
              </div>  <br>

                  <table width="100%">
                      <col width="20%">
                      <col width="40%">
                      <col width="40%">
                      <tbody>
                      <tr height="50px">
                        <td style="font-weight: bold;" width="33%">Status Dokumen</td>
                        <td width="33%"> </td>
                        <td width="33%"> </td>
                      </tr>
                      <tr height="50px">
                        <td style="font-weight: bold;">Tanggal Distribusi</td>
                        <td> </td>
                        <td> </td>
                      </tr>                     
                      </tbody>
                    </table>                  
                    <h5 class="pull-left" style="font-weight: bold;">Distribusi Ke</h5>
                    <table class="table table-bordered table-sm">
                      <tbody>
                      <tr>
                        <td align="center">No. Urut</td>
                        <td align="center">Nama Jabatan</td>
                        <td align="center">No. Urut</td>
                        <td align="center" width="40%">Nama Jabatan</td>
                      </tr>
                      <tr>
                        <td align="center">1</td>
                        <td>Kepala Pusat Litbang SDA</td>
                        <td align="center">7</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td align="center">2</td>
                        <td>Kepala Bidang Program dan Evaluasi</td>
                        <td align="center">8</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td align="center">3</td>
                        <td>Kepala '.$this->data['row']['satuankerja'].'</td>
                        <td align="center">9</td>
                        <td></td>
                      </tr>                     
                      <tr>
                        <td align="center">4</td>
                        <td>PPK '.$this->data['row']['satuankerja'].'</td>
                        <td align="center">10</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td align="center">5</td>
                        <td>Deputi Pengendali Dokumen</td>
                        <td align="center">11</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td align="center">6</td>
                        <td>Sekretariat SMM (Dokumen Asli)</td>
                        <td align="center">12</td>
                        <td></td>
                      </tr>                     
                      </tbody>
                    </table>      
            </body>
            </html>';

  // $page2 = '<div style="text-align: left; font-family: Calibri; font-size: 12pt; line-height: 2.5">
  //   <b>DISTRIBUSI KE :</b><br>
  //   <table width=100% style="page-break-inside:avoid; text-align: center;">
  //     <tr>
  //       <td width=10%>No. Urut</td>
  //       <td>Nama Jabatan</td>
  //     </tr>
  //   </table>

  //  </div>';

  $page2 = '<div style="text-align: center; font-family: Calibri; font-size: 12pt; line-height: 2.5">
     <b>HALAMAN REKAP KEGIATAN</b>
        <table style="page-break-inside:avoid;" width="100%">
      <col>
      <col width="25%">
      <tr>
        <td colspan="3" align="center" style="font-weight: bold;">'.strtoupper($this->data['row']['judul']) .'</td>
      </tr>
      <tr>
        <td colspan=2>No. Dokumen<br>'.strtoupper($this->data['row']['judul']).'
         </td>
        <td>Nomor DIPA <br>033.11.1.576981/2018</td>
      </tr>
      <tr>
        <td colspan=2>Nama Satker<br>'.strtoupper($this->data['row']['satuankerja']).'</td>
        <td>Tanggal Pengesahan DIPA<br>5 Desember 2018</td>
      </tr>                       
      <tr>
        <td>Tanggal Terbit <br>'.date("d M Y").'</td>
        <td>Rev: 00</td>
        <td>Besaran Anggaran: <br> 
            Rp.'.number_format($this->data['row']['besaran'],0,',','.').'
        </td>
      </tr>
      <tr>
        <td colspan=3 align="justify">Ringkasan Kegiatan <br> '.$this->data['row']['ringkasan'].'
        </td>
      </tr>
      <tr>
        <td colspan=3 align="justify">Lokasi Kegiatan <br>'.$this->data['row']['lokasi'].'</td>
      </tr>
      <tr>
        <td align="justify">Sasaran Output <br> '.$this->data['row']['sasarankeluaran'].'</td>  
        <td colspan=2 align="justify">Sasaran Mutu: <br> '.$this->data['row']['sasaranmutu'].'</td> 
      </tr>
      <tr>
        <td>Konseptor: <br>'.$this->data['row']['konseptor'].'</td>
        <td>Diperiksa: <br>'.$this->data['row']['pemeriksa'].'</td>
        <td>Disahkan: <br>'.$this->data['row']['pengesah'].'</td>
      </tr>
    </table>

   </div>';   

  $page3 = '<div style="text-align: center; font-family: Calibri; font-size: 11pt; line-height: 2.5">
  <b>SEJARAH DOKUMEN</b><br>
    <table style="page-break-inside:avoid;" width="100%" style="font-size: 10pt;">
      <thead>
        <tr>
          <td  align="center" style="font-weight:bold;">TANGGAL</td>
          <td colspan=3  align="center" style="font-weight:bold;">CATATAN PERUBAHAN</td>
          <td  align="center" style="font-weight:bold;">KETERANGAN</td>
        </tr>
      </thead>
      <tbody>
        <tr >
          <td style="height:200px;">'.Date('d M Y') .'</td>
          <td colspan=3>Rencana Mutu Pelaksanaan '.$this->data['row']['judul'] .' ini diterbitkan perdana</td>
          <td>Pelaksanaan untuk Tahun Anggaran 2019</td>
        </tr>
        <tr>
          <td  align="center" style="font-weight:bold;">Tanggal</td>
          <td  align="center" style="font-weight:bold;">Semula</td>
          <td  align="center" style="font-weight:bold;">Menjadi</td>
          <td  align="center" style="font-weight:bold;">Paraf</td>
          <td  align="center" style="font-weight:bold;">Keterangan</td>
        </tr>
        <tr>
          <td style="height:300px;">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </tbody>
    </table>
    <div>
    <b>Keterangan :</b>
    <ol type="a" style="padding-left:15px; text-align:left; line-height:1.2;">
      <li>Catatan revisi dapat ditulis tangan dengan disertai paraf Kepala Balai/Bidang/ Bagian;</li>
      <li>Lembar revisi disisipkan di belakang halaman yang direvisi.</li>
      <li>Jika perubahan mengakibatkan penambahan halaman, penomoran halaman tambahan disisipkan menggunakan notasi abjad (contoh :5a,5b,dst).</li>
      <li>Perubahan (revisi) RMP yang sudah disetujui akan dibubuhkan cap oleh Sub Bidang Program.</li>
    </ol>
    </div>

    </div>';

  $style=' <html>
    <head>
    <style>
    body {font-family: Calibri;
      font-size: 10pt;
    }
    p { font-family: Calibri;
      font-size: 10pt;margin: 0pt; 
      text-align: justify;
      line-height: 1.5;
      text-indent: 50px;
    }
    li { font-family: Calibri;
      font-size: 10pt;margin: 0pt; 
      text-align: justify;
      line-height: 1.5;
    }
    table.items {
      border: 0.1mm solid #000000;
    }
    td { vertical-align: top; }
    .items td {
      border-left: 0.1mm solid #000000;
      border-right: 0.1mm solid #000000;
    }
    table thead td { background-color: #EEEEEE;
      text-align: center;
      border: 0.1mm solid #000000;
      font-variant: small-caps;
    }
    .items td.blanktotal {
      background-color: #EEEEEE;
      border: 0.1mm solid #000000;
      background-color: #FFFFFF;
      border: 0mm none #000000;
      border-top: 0.1mm solid #000000;
      border-right: 0.1mm solid #000000;
    }
    .items td.totals {
      text-align: right;
      border: 0.1mm solid #000000;
    }
    .items td.cost {
      text-align: "." center;
    }
    h1{
      font-size: 12pt;
      text-align: center;
    }
    h2{
      font-size: 10pt;
    }
    h5{
      font-size: 10pt;
      font-weight: normal;
    }
    td{
      font-size:10pt
    }
    </style>
    </head>';

  $toc=' 
      <div style="text-align: center; font-family: Calibri; font-size: 12pt; line-height: 2.5">
     <b>DAFTAR ISI</b>
      </div> 
    ';

    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L', 'default_font' => 'Calibri']);

    
    $mpdf->SetHTMLHeaderByName('MyHeader1');    
    $mpdf->AddPage('P', // L - landscape, P - portrait 
      '', '', '', '',
      30, // margin_left
      25, // margin right
      55, // margin top
     50, // margin bottom
      25, // margin header
      30); // margin footer
     
    $mpdf->WriteHTML($headfoot);
    $mpdf->WriteHTML($cover);
    $mpdf->SetHTMLFooterByName('MyFooter1'); 


    $mpdf->SetHTMLHeaderByName('MyHeader2');
    $mpdf->AddPage('P','','','','',30,25,30,30,15,10);
    $mpdf->SetHTMLFooterByName('MyFooter3'); 
    
    $mpdf->SetTitle("RMP - ".$this->data['row']['judul']);
    $mpdf->SetAuthor("Ketua Kegiatan");
    $mpdf->SetDisplayMode('fullpage');

    $mpdf->WriteHTML($page2); 
    $mpdf->AddPage('P','','','','',30,25,30,30,15,10);
    $mpdf->WriteHTML($page3); 

    //Daftar Isi
    $mpdf->AddPage('P','','','','',30,25,30,30,15,10);
    $mpdf->WriteHTML($toc);
    $mpdf->WriteHTML('<pagebreak resetpagenum="1" pagenumstyle="1" >');

    $mpdf->SetHTMLHeaderByName('MyHeader2');
    $mpdf->SetHTMLFooterByName('MyFooter2'); 

    // Isi
    $content = $this->load->view('report/content',$this->data,true);
    // $mpdf->autoPageBreak = false;
    // $mpdf->AddPage('P','','','','',30,25,30,30,15,10);
    $mpdf->WriteHTML($style); 
    $mpdf->WriteHTML($content);
    // print_r($this->data['row']);
    $pdfFilePath = "RMP_".$this->data['row']['tahun_anggaran'].".pdf";    
    // print_r($this->data['allsdm']);
    $mpdf->Output($pdfFilePath,"D");
  }

  public function printAtt1($idk){
    $satker = $this->ModelSatker->selectByIdUser($this->session->userdata('id'))->row_array();
    $row = $this->ModelRMP->selectByIdKegiatan($idk)->row_array();
    $moneys = $this->ModelRMPSDK->selectByIdRMP($row['id'])->result_array();
    $sdktitles = $this->ModelRMPSDKTitle->selectAll()->result_array();
    $content = '
      <html>
      <body>
        <h2 style="text-align:center;">Rincian Anggaran Biaya</h2>
        <div style="text-align: center; font-family: Calibri; font-size: 14; line-height: 1.5">
          <b>'.$row['judul'].'<br>
          Tahun Anggaran '.$row['tahun_anggaran'].'</b>
        <div>
        <br>
        <table>
          <tr>
            <td>Kementerian Negara</td>
            <td>:</td>
            <td>Kementerian Pekerjaan Umum dan Perumahan Rakyat</td>
          </tr>
          <tr>
            <td>Unit Eselon II/Satker</td>
            <td>:</td>
            <td>'.$satker['name'].'</td>
          </tr>
          <tr>
            <td>Kegiatan</td>
            <td>:</td>
            <td>'.$row['judul'].'</td>
          </tr>
          <tr>
            <td>Keluaran (Output)</td>
            <td>:</td>
            <td>'.$row['output'].'</td>
          </tr>
          <tr>
            <td>Volume</td>
            <td>:</td>
            <td>'.$row['volume'].'</td>
          </tr>
          <tr>
            <td>Satuan Ukur</td>
            <td>:</td>
            <td>'.$row['unitof'].'</td>
          </tr>
          <tr>
            <td>Alokasi Dana</td>
            <td>:</td>
            <td>Rp.'.number_format($row['pagu'],0,',','.').'</td>
          </tr>
          <tr>
            <td>Judul</td>
            <td>:</td>
            <td>'.$row['rabtitle'].'</td>
          </tr>
        </table>
        <br>
        <table border="1" style="border-collapse: collapse;">
          <thead>
            <tr>
              <th rowspan="2" >No.</td>
              <th rowspan="2" colspan="2">Tahapan Pelaksanaan dan Rincian Komponen Biaya</th>
              <th colspan="2">Rincian Perhitungan</th>
              <th rowspan="2">Harga Satuan</th>
              <th rowspan="2">Jumlah</th>
            </tr>
            <tr>
              <th>Detil</th>
              <th>Jml</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td><b>#'.$row['id'].'</b></td>
              <td colspan="5"><b>'.$row['judul'].'</b></td>
            </tr>';
            $no=1; foreach($moneys as $money){
              $content .='
                <tr class="font-weight-bold">
                  <td></td>
                  <td><b>'.$money['akun'].'</b></td>
                  <td colspan="4"><b>'.$money['jenis'].'</b></td>
                  <td style="text-align:right"><b>'.number_format($money['biaya'],0,',','.').'</b></td>
                </tr>';
              $no2=1;foreach($sdktitles as $sdktitle){
                if($sdktitle['rmp_sdk_id'] == $money['id']){
                  $content .='
                      <tr>
                        <td></td>
                        <td style="text-align: right;">'.$no2++.'</td>
                        <td>'.$sdktitle['name'].'</td>
                        <td>'.$sdktitle['details'].'</td>
                        <td style="text-align:center;">'.$sdktitle['jml'].'</td>
                        <td style="text-align:center;">'.number_format($sdktitle['satuan'],0,',','.').'</td>
                        <td style="text-align:right;">'.number_format($sdktitle['total'],0,',','.').'</td>
                      </tr>';
                }
              }
            }
            $content .='
              <tr>
                <td colspan="6" style="text-align:center;"><b>Total</b></td>
                <td style="text-align:right;"><b>'.number_format($row['pagu'],0,',','.').'</b></td>
              </tr>
          </tbody>
        </table>
      </body>
      </html>
    ';

    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L', 'default_font' => 'Calibri']);
    $mpdf->SetTitle("Rancangan Anggaran Biaya");
    $mpdf->SetAuthor("Faisal Syaiful Anwar");
    $mpdf->SetDisplayMode('fullpage');    
    $mpdf->AddPage('P','','','','',30,25,30,30,15,10);
    #$mpdf->WriteHTML($style); 
    $mpdf->WriteHTML($content);
    $mpdf->Output();
  }

  public function printAtt2($idk){
    $this->data['row'] = $this->ModelRMP->selectByIdKegiatan($idk)->row_array();
    $this->data['allAct'] = $this->ModelRMPAct->selectByIdRMP($this->data['row']['id'])->result_array();
    $this->data['allActExe'] = $this->ModelRMPActExe->selectAll()->result_array();
    $this->data['allStages'] = $this->ModelRMPStages->selectAll()->result_array();    
    $this->data['allStageExe'] = $this->ModelRMPStagesExe->selectAll()->result_array();
    // var_dump($this->data['allAct']);
    $content = $this->load->view('report/att2',$this->data,true);
    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L', 'default_font' => 'Calibri']);
    $mpdf->SetTitle("Kerangka dan Rencana Kerja Kegiatan");
    $mpdf->SetAuthor("Faisal Syaiful Anwar");
    $mpdf->SetDisplayMode('fullpage');// Isi
    $mpdf->AddPage('L','','','','',10,10,10,10,5,5);
    $mpdf->WriteHTML($content);
    $mpdf->Output();
  }
  
  public function lampiran3($idk = NULL){
    $this->data['satker'] = $this->ModelSatker->selectByIdUser($this->session->userdata('id'))->row_array();
    $this->data['row'] = $this->ModelRMP->selectByIdKegiatan($idk)->row_array();
    $this->data['sisaFisik'] = 100;
    $this->data['sisa'] = $this->data['row']['pagu'];

    $this->data['allAct'] = $this->ModelRMPAct->selectByIdRMP($this->data['row']['id'])->result_array();
    $this->data['allStages'] = $this->ModelRMPStages->selectByRMP($this->data['row']['id'])->result_array();      
    $this->data['moneys'] = $this->ModelRMPSDK->selectByIdRMP($this->data['row']['id'])->result_array();
    $this->data['sdktitles'] = $this->ModelRMPSDKTitle->selectAll()->result_array();
    $this->data['idk'] = $idk;  //add ahmad 
    $this->data['actTotal'] = array();
    $this->data['stageTotal'] = array();
    $this->data['moneysMonths'] = array();
    $this->data['moneysMonthsP'] = array();
    $this->data['moneysMonthsKumulatif'] = array();
    $this->data['moneysMonthsKumulatifP'] = array();
    $this->data['actMonths'] = array();
    $this->data['fisikMonths'] = array();
    $this->data['fisikMonthsKumulatif'] = array();
    $this->data['stageMonths'] = array();
    $this->data['moneysKumulatif'] = 0;
    $this->data['moneysP'] = 0;
    $this->data['fisikP'] = 0;
    $fisik_kumulatif = 0;
    $moneys_kumulatif = 0;
    $moneys_kumulatifP = 0;

    for ($i=0; $i < 12; $i++) {
      $this->data['fisikMonths'][$i] = 0;
      $this->data['moneysMonths'][$i] = 0;
      $this->data['moneysMonthsP'][$i] = 0;
      foreach($this->data['allAct'] as $act){
        $temp = $this->ModelRMPSDKPlanAct->getByMonthRMP($act['id'],($i+1)); //Model Edited
        if($temp->num_rows() == 0){
          $this->data['actMonths'][$act['id']][$i]['biaya'] = "x";
        }else{
          $temp = $temp->result_array();
          $this->data['actMonths'][$act['id']][$i]['biaya'] = 0;
          $this->data['actMonths'][$act['id']][$i]['fisik'] = 0;
          foreach ($temp as $value) {
            $this->data['actMonths'][$act['id']][$i]['biaya'] += $value['biaya'];
            $this->data['actMonths'][$act['id']][$i]['fisik'] += $value['fisik'];
            $this->data['moneysMonths'][$i] += $value['biaya'];
            $this->data['moneysMonthsP'][$i] += $value['biayaP'];
            $this->data['fisikMonths'][$i] += $value['fisik'];
            $fisik_kumulatif+= $value['fisik'];
            $moneys_kumulatif+= $value['biaya'];
            $moneys_kumulatifP+= $value['biayaP'];
          }
          
        }

      }
      foreach($this->data['allStages'] as $stage){
        $temp = $this->ModelRMPSDKPlanStage->getByMonthRMP($stage['id'],($i+1)); //Model Edited
        
        if($temp->num_rows() != 0){
          $temp = $temp->result_array();
          $this->data['stageMonths'][$stage['id']][$i]['biaya'] = 0;
          $this->data['stageMonths'][$stage['id']][$i]['fisik'] = 0;
          foreach ($temp as $value) {
            $this->data['stageMonths'][$stage['id']][$i]['biaya'] += $value['biaya'];
            $this->data['stageMonths'][$stage['id']][$i]['fisik'] += $value['fisik'];
            $this->data['moneysMonths'][$i] += $value['biaya'];
            $this->data['moneysMonthsP'][$i] += $value['biayaP'];
            $this->data['fisikMonths'][$i] += $value['fisik'];
            $fisik_kumulatif+= $value['fisik'];
            $moneys_kumulatif+= $value['biaya'];
            $moneys_kumulatifP+= $value['biayaP'];
          }
        }else{
          $this->data['stageMonths'][$stage['id']][$i]['biaya'] = "x";
        }
      }

      $this->data['moneysMonthsKumulatif'][$i] = $moneys_kumulatif;
      $this->data['fisikMonthsKumulatif'][$i] = $fisik_kumulatif;
      $this->data['moneysMonthsKumulatifP'][$i] = $moneys_kumulatifP;
    }
    $this->data['moneysP'] = $moneys_kumulatifP;
    $this->data['fisikP'] = $fisik_kumulatif;
    $this->data['sisaFisik'] -= $fisik_kumulatif;
    $this->data['moneysKumulatif'] = $moneys_kumulatif;
    $this->data['sisa'] -= $moneys_kumulatif;
    $convert = array('A'=>0,'B'=>1,'C'=>2);
    for($i=0;$i<3;$i++){
      $this->data['total'][$i] = 0;
      $this->data['totalP'][$i] = 0;
      $this->data['totalF'][$i] = 0;
      $kk=0;
      foreach($this->data['allAct'] as $act){
        
        if($convert[$act['parent']] == $i){
          $temp = $this->ModelRMPSDKPlanAct->getByActTotal($act['id']); //edited model
          if($temp->num_rows() != 0){
            $temp = $temp->result_array();
            $this->data['actTotal'][$act['id']]['biaya'] = $temp[0]['biaya'];
            $this->data['actTotal'][$act['id']]['biayaP'] = $temp[0]['biayaP'];
            $this->data['actTotal'][$act['id']]['fisik'] = $temp[0]['fisik'];
            $this->data['actTotal'][$act['id']]['hchild'] = 0;
            $this->data['total'][$i] += $temp[0]['biaya'];
            $this->data['totalP'][$i] += $temp[0]['biayaP'];
            $this->data['totalF'][$i] += $temp[0]['fisik'];
          }
          foreach($this->data['allStages'] as $stage){
            if($stage['act_id'] == $act['id']){
              $this->data['actTotal'][$act['id']]['hchild'] = 1;
              $temp = $this->ModelRMPSDKPlanStage->getByStageTotal($stage['id']); //edited model
              if($temp->num_rows() != 0){

                $temp = $temp->result_array();
                $this->data['actTotal'][$stage['act_id']]['biaya'] += $temp[0]['biaya'];
                $this->data['actTotal'][$stage['act_id']]['biayaP'] += $temp[0]['biayaP'];
                $this->data['actTotal'][$stage['act_id']]['fisik'] += $temp[0]['fisik'];
                $this->data['stageTotal'][$stage['id']]['biaya'] = $temp[0]['biaya'];
                $this->data['stageTotal'][$stage['id']]['biayaP'] = $temp[0]['biayaP'];
                $this->data['stageTotal'][$stage['id']]['fisik'] = $temp[0]['fisik'];
                $this->data['total'][$i] += $temp[0]['biaya'];
                $this->data['totalP'][$i] += $temp[0]['biayaP'];
                $this->data['totalF'][$i] += $temp[0]['fisik'];
              }
            }
          }
        }
        $kk++;
      }
    }
    // $this->data['satker'] = $this->ModelSatker->selectByIdUser($this->session->userdata('id'))->row_array();
    // $this->data['row'] = $this->ModelRMP->selectByIdKegiatan($idk)->row_array();
    // $this->data['sisa'] = $this->data['row']['pagu'];

    // $this->data['allAct'] = $this->ModelRMPAct->selectByIdRMP($this->data['row']['id'])->result_array();
    // $this->data['allStages'] = $this->ModelRMPStages->selectAll()->result_array();    
    // $this->data['moneys'] = $this->ModelRMPSDK->selectByIdRMP($this->data['row']['id'])->result_array();
    // $this->data['sdktitles'] = $this->ModelRMPSDKTitle->selectAll()->result_array();
    // $this->data['idk'] = $idk;  //add ahmad 
    // $this->data['actTotal'] = array();
    // $this->data['stageTotal'] = array();
    // $this->data['moneysMonths'] = array();
    // $this->data['moneysMonthsP'] = array();
    // $this->data['moneysMonthsKumulatif'] = array();
    // $this->data['moneysMonthsKumulatifP'] = array();
    // $this->data['actMonths'] = array();
    // $this->data['fisikMonths'] = array();
    // $this->data['fisikMonthsKumulatif'] = array();
    // $this->data['stageMonths'] = array();
    // $this->data['moneysKumulatif'] = 0;
    // $this->data['moneysP'] = 0;
    // $this->data['fisikP'] = 0;
    // $fisik_kumulatif = 0;
    // $moneys_kumulatif = 0;
    // $moneys_kumulatifP = 0;

    // for ($i=0; $i < 12; $i++) {
    //   $this->data['fisikMonths'][$i] = 0;
    //   $this->data['moneysMonths'][$i] = 0;
    //   $this->data['moneysMonthsP'][$i] = 0;
    //   foreach($this->data['allAct'] as $act){
    //     $temp = $this->ModelRMPSDKPlanAct->getByMonthRMP($act['id'],($i+1)); //Model Edited
    //     if($temp->num_rows() == 0){
    //       $this->data['actMonths'][$act['id']][$i]['biaya'] = "x";
    //     }else{
    //       $temp = $temp->result_array();
    //       $this->data['actMonths'][$act['id']][$i]['biaya'] = 0;
    //       $this->data['actMonths'][$act['id']][$i]['fisik'] = 0;
    //       foreach ($temp as $value) {
    //         $this->data['actMonths'][$act['id']][$i]['biaya'] += $value['biaya'];
    //         $this->data['actMonths'][$act['id']][$i]['fisik'] += $value['fisik'];
    //         $this->data['moneysMonths'][$i] += $value['biaya'];
    //         $this->data['moneysMonthsP'][$i] += $value['biayaP'];
    //         $this->data['fisikMonths'][$i] += $value['fisik'];
    //         $fisik_kumulatif+= $value['fisik'];
    //         $moneys_kumulatif+= $value['biaya'];
    //         $moneys_kumulatifP+= $value['biayaP'];
    //       }
          
    //     }

    //   }
    //   foreach($this->data['allStages'] as $stage){
    //     $temp = $this->ModelRMPSDKPlanStage->getByMonthRMP($stage['id'],($i+1)); //Model Edited
        
    //     if($temp->num_rows() != 0){
    //       $temp = $temp->result_array();
    //       $this->data['stageMonths'][$stage['id']][$i]['biaya'] = 0;
    //       $this->data['stageMonths'][$stage['id']][$i]['fisik'] = 0;
    //       foreach ($temp as $value) {
    //         $this->data['stageMonths'][$stage['id']][$i]['biaya'] += $value['biaya'];
    //         $this->data['stageMonths'][$stage['id']][$i]['fisik'] += $value['fisik'];
    //         $this->data['moneysMonths'][$i] += $value['biaya'];
    //         $this->data['moneysMonthsP'][$i] += $value['biayaP'];
    //         $this->data['fisikMonths'][$i] += $value['fisik'];
    //         $fisik_kumulatif+= $value['fisik'];
    //         $moneys_kumulatif+= $value['biaya'];
    //         $moneys_kumulatifP+= $value['biayaP'];
    //       }
    //     }else{
    //       $this->data['stageMonths'][$stage['id']][$i]['biaya'] = "x";
    //     }
    //   }

    //   $this->data['moneysMonthsKumulatif'][$i] = $moneys_kumulatif;
    //   $this->data['fisikMonthsKumulatif'][$i] = $fisik_kumulatif;
    //   $this->data['moneysMonthsKumulatifP'][$i] = $moneys_kumulatifP;
    // }
    // $this->data['moneysP'] = $moneys_kumulatifP;
    // $this->data['fisikP'] = $fisik_kumulatif;
    // $this->data['moneysKumulatif'] = $moneys_kumulatif;
    // $this->data['sisa'] -= $moneys_kumulatif;
    // $convert = array('A'=>0,'B'=>1,'C'=>2);
    // for($i=0;$i<3;$i++){
    //   $this->data['total'][$i] = 0;
    //   $this->data['totalP'][$i] = 0;
    //   $this->data['totalF'][$i] = 0;
    //   $kk=0;
    //   foreach($this->data['allAct'] as $act){
        
    //     if($convert[$act['parent']] == $i){
    //       $temp = $this->ModelRMPSDKPlanAct->getByActTotal($act['id']); //edited model
    //       if($temp->num_rows() != 0){
    //         $temp = $temp->result_array();
    //         $this->data['actTotal'][$act['id']]['biaya'] = $temp[0]['biaya'];
    //         $this->data['actTotal'][$act['id']]['biayaP'] = $temp[0]['biayaP'];
    //         $this->data['actTotal'][$act['id']]['fisik'] = $temp[0]['fisik'];
    //         $this->data['actTotal'][$act['id']]['hchild'] = 0;
    //         $this->data['total'][$i] += $temp[0]['biaya'];
    //         $this->data['totalP'][$i] += $temp[0]['biayaP'];
    //         $this->data['totalF'][$i] += $temp[0]['fisik'];
    //       }
    //       foreach($this->data['allStages'] as $stage){
    //         if($stage['act_id'] == $act['id']){
    //           $this->data['actTotal'][$act['id']]['hchild'] = 1;
    //           $temp = $this->ModelRMPSDKPlanStage->getByStageTotal($stage['id']); //edited model
    //           if($temp->num_rows() != 0){

    //             $temp = $temp->result_array();
    //             $this->data['actTotal'][$stage['act_id']]['biaya'] += $temp[0]['biaya'];
    //             $this->data['actTotal'][$stage['act_id']]['biayaP'] += $temp[0]['biayaP'];
    //             $this->data['actTotal'][$stage['act_id']]['fisik'] += $temp[0]['fisik'];
    //             $this->data['stageTotal'][$stage['id']]['biaya'] = $temp[0]['biaya'];
    //             $this->data['stageTotal'][$stage['id']]['biayaP'] = $temp[0]['biayaP'];
    //             $this->data['stageTotal'][$stage['id']]['fisik'] = $temp[0]['fisik'];
    //             $this->data['total'][$i] += $temp[0]['biaya'];
    //             $this->data['totalP'][$i] += $temp[0]['biayaP'];
    //             $this->data['totalF'][$i] += $temp[0]['fisik'];
    //           }
    //         }
    //       }
    //     }
    //     $kk++;
    //   }
    // }   
    // print_r($this->data['actMonths']);
    // $this->load->view('Report/lampiran3',$this->data);

      $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A3-L', 'default_font' => 'Calibri']);
      $mpdf->SetTitle("Lampiran 3");
      $mpdf->SetAuthor("Ahmad Zainal Abiddin");
      $mpdf->SetDisplayMode('fullpage');// Isi
      // $mpdf->AddPage('L','','','','',kiri,kanan,atas,bawah,?,?);
      $mpdf->AddPage('L','','','','',10,15,10,10,5,5);
      #$mpdf->WriteHTML($style);
      $mpdf->SetLineWidth(2);
      $mpdf->SetDrawColor(249, 0, 0);
      $xPastF = 160;
      $yPastF = 225;
      $xPastM = 160;
      $yPastM = 225;
      $yText = 225;
      $pText = 0;
      $x= 0;
      $y= 0;
      $mpdf->Circle($xPastF,$yPastF,1);
      $mpdf->Text(405,$yText,$pText);
      for ($i=0; $i < 12; $i++) {
        $x = $xPastM + 20;;
        $mpdf->SetDrawColor(0, 83, 249);
        // $mpdf->SetDrawColor(249, 0, 0);
        $y = 225-($this->data['moneysMonthsKumulatifP'][$i]/100 * 175);
        $mpdf->Line($xPastM, $yPastM, $x, $y);
        $mpdf->Circle($x,$y,1);
        $xPastM = $x;
        $yPastM = $y;

        $x = $xPastF + 20;;
        $mpdf->SetDrawColor(249, 0, 0);
        $y = 225-($this->data['fisikMonthsKumulatif'][$i]/100 * 175);
        $mpdf->Line($xPastF, $yPastF, $x, $y);
        // $mpdf->SetDrawColor(0, 83, 249);
        $mpdf->Circle($x,$y,1);
        $xPastF = $x;
        $yPastF = $y;
        if($i<10){
          $yText-=17.5;
          $pText+=10;
          $mpdf->Text(405,$yText,$pText);
        }
      }
      // $mpdf->Line(50, 200, 100, 180);
      // $mpdf->Line(100, 180, 150, 30);
      // $mpdf->Line(100, 180, 150, 30);
      // $mpdf->Line(100, 180, 150, 30);
      // $mpdf->Line(100, 180, 150, 30);
      // $mpdf->Line(100, 180, 150, 30);
      // $mpdf->Line(100, 180, 150, 30);
      // $mpdf->Line(100, 180, 150, 30);
      // $mpdf->Line(100, 180, 150, 30);
      // $mpdf->Line(100, 180, 150, 30);
      // $mpdf->Line(255, 200, 400, 50);

      // 410 - 185 = 225 ~ 100
      // 225 - 50 = 175 ~ 100
      // 215/12 = 



      $html = $this->load->view('Report/lampiran3',$this->data, true);
      $mpdf->WriteHTML($html);

      // $mpdf->AddPage('L','','','','',10,10,10,10,5,5);
      // A3 ~ 420mm 370mm
      $pdfFilePath = "Lampiran_3_".$this->session->userdata('id')."_".$idk."_".$this->data['row']['id'].".pdf";
      $mpdf->Output($pdfFilePath,"D");
  }

  public function tampil($id){
    // $row = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
    // $data = $this->ModelKegiatan->selectAllKegiatanById($id)->row_array();
    // $this->load->view('templates/header-tampil');
    $data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
    $data['all'] = $this->ModelRMPRoles->selectByIdRMP($data['row']['id'])->result_array();
    // $this->load->view('tampil');

    // var_dump($data['all']);

    foreach($data['all'] as $row2){
      echo($row2['jabatan']);
    }

  }


}

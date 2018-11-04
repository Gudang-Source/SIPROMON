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
    $this->data['user'] = $this->ModelUser->selectById2($this->session->userdata('id'))->row_array();
    var_dump($this->data['user']);
  }
  public function printRMP($id){
    $this->data['user'] = $this->ModelUser->selectById2($this->session->userdata('id'))->row_array();
    $this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
    $data = $this->ModelKegiatan->selectAllKegiatanById($id)->row_array();
    $this->data['acts'] = $this->ModelRMPAct->selectByIdRMP($this->data['row']['id'])->result_array();
    $this->data['stages'] = $this->ModelRMPStages->selectAll()->result_array();
    $this->data['bibs'] = $this->ModelRMPBib->selectByIdRMP($this->data['row']['id'])->result_array();
    $this->data['terbilang'] = $this->terbilang($this->data['row']['pagu']);
    // $docs = $this->ModelRMPDocument->selectByIdRMP($row['id'])->result_array();
    // $roles = $this->ModelRMPRoles->selectByIdRMP($row['id'])->result_array();
    // $sdms = $this->ModelRMPSDM->selectByIdRMP($row['id'])->result_array();
    $this->data['sdks'] = $this->ModelRMPSDK->selectByIdRMP($this->data['row']['id'])->result_array();
    $this->data['docs'] = $this->ModelRMPDocument->selectByIdRMP($this->data['row']['id'])->result_array();
    $this->data['recs'] = $this->ModelRMPRec->selectByIdRMP($this->data['row']['id'])->result_array();
    // var_dump($row);

    $headfoot = '<html>
        <head>
        <style>
        body {
          font-family: Calibri;
        }
        table {
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
            vertical-align: text-top;
            padding: 5px;
        }
        </style>
        </head>
        <body>
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

        <table border="1" style="font-size: 9pt;" width=100%>
          <tbody style="vertical-align: text-top;">
          <tr>
            <td width=40%>No. Dok.: DSM/PUSAIR/RMP-01/.../...<br>No. Rev. : 00</td>
            <td style="text-align: top" width=40%>Tgl. Diterbitkan : .............</td>
            <td>Hal : {PAGENO}/{nbpg}<br>Paraf :</td>
          </tr>
          </tbody>
        </table>  
           
    </htmlpagefooter>

    <sethtmlpageheader name="MyHeader1" value="on" show-this-page="1" />
    <sethtmlpageheader name="MyHeader2" value="on" />
    <sethtmlpagefooter name="MyFooter1" value="on" show-this-page="1"/>


    <sethtmlpagefooter name="MyFooter2" value="on" />
    </body>
    </html>';

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
              <div style="text-align: center; font-family: Calibri; font-size: 14; line-height: 2.0">
                <b>SATUAN KERJA __SATKER___</b>
              </div>
              <table border="1" style="font-size: 10;" width=100%>
                    <tbody style="vertical-align: text-top;">
                    <tr>
                      <td width=35%>No. Dok.: DSM/PUSAIR/RMP-01/.../...<br>No. Rev. : 00</td>
                      <td style="text-align: top" width=50%>Tgl. Diterbitkan : ................</td>
                      <td>Hal : 1<br>Paraf :</td>
                    </tr>
                    </tbody>
                </table>  
                <br>
                <div style="text-align: center; font-family: Calibri; font-size: 14; line-height: 1.5">
                <b>RENCANA MUTU PELAKSANA<br>
                  '.strtoupper( $this->data['row']['judul']).'
                  </b>
                  <div style="text-align: center; font-family: Calibri; font-size: 12;">
                    <b>TAHUN ANGGARAN '. $this->data['row']['tahun_anggaran'].'</b>
                  </div>      
              </div>
              <br><br>
              <div style="text-align: center; font-family: Calibri; font-size: 12; line-height: 1.5">
                <b>PENGESAHAN</b>
              </div>  <br>

              <table border="1" style="font-size: 10; border-collapse: collapse; empty-cells: hide; border: none; font-family: Calibri; font-size: 12; padding-bottom: 10px;
                padding-top: 7px;" width=100% align="center">
                    <tbody style="vertical-align: text-top;">
                <tr>
                  <td style="border: none"></td>
                  <th ><b>NAMA & JABATAN</b></th>
                  <th width=20%><b>TANDA TANGAN</b></th>
                </tr>
                <tr>
                  <td style="background-color: #e3ece4; width: 25%"><b>Konseptor</b></td>
                  <td>'.$data['konseptor'].'</td>
                  <td></td>
                </tr>
                <tr>
                  <td style="background-color: #e3ece4;"><b>Diperiksa Oleh</b></td>
                  <td>'.$data['pemeriksa'].'</td>
                  <td></td>
                </tr>
                <tr>
                  <td style="background-color: #e3ece4;"><b>Disahkan Oleh</b></td>
                  <td>z</td>
                  <td></td>
                </tr>
                </tbody>
              </table>
              <br>
              <div style="text-align: left; font-family: Calibri; font-size: 12; line-height: 2.5">
                <b>Status Dokumen :</b> <br>
                <table width=100% height=100px>
                  <tr>
                    <td style="height: 100px"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </table>
              </div>  <br>

              <div style="text-align: left; font-family: Calibri; font-size: 12; line-height: 2.5">
                <b>Tanggal Distribusi :</b><br>
                <table width=100%>
                  <tr>
                    <td style="height: 50px"></td>
                    <td></td>
                  </tr>
                </table>

              </div>  <br>
            </body>
            </html>';

  $page2 = '<div style="text-align: left; font-family: Calibri; font-size: 12pt; line-height: 2.5">
    <b>DISTRIBUSI KE :</b><br>
    <table width=100% style="page-break-inside:avoid; text-align: center;">
      <tr>
        <td width=10%>No. Urut</td>
        <td>Nama Jabatan</td>
      </tr>
    </table>

   </div>';

  $page3 = '<div style="text-align: center; font-family: Calibri; font-size: 12pt; line-height: 2.5">
    <b>Sejarah Dokumen</b><br>
    <table width=100% style="page-break-inside:avoid; text-align: center;">
      <tr>
        <td>TANGGAL</td>
        <td>CATATAN PERUBAHAN</td>
        <td>KETERANGAN</td>
      </tr>
      <tr>
        <td style="height:1000px"></td>
        <td></td>
        <td></td>
      </tr>
    </table>

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
    <body>
      <h1 style="text-align: center">        
      Daftar Isi</h1>

    </body>
    </html>';

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
    $mpdf->SetHTMLFooterByName('MyFooter2'); 

    
    $mpdf->SetTitle("Rencana Mutu Pelaksanaan");
    $mpdf->SetAuthor("Faisal Syaiful Anwar");
    $mpdf->SetDisplayMode('fullpage');

    $mpdf->WriteHTML($page2); 
    $no=1;
    for ($i=0; $i <27 ; $i++) { 
      $mpdf->WriteHTML('<table width=100% style="page-break-inside:avoid">
      <tr height=5%>
        <td width=10%></td>
        <td>&nbsp;</td>
      </tr>
    </table>');
     $no++;
    }
    $mpdf->WriteHTML($page3); 

    //Daftar Isi
    $mpdf->AddPage('P','','','','',30,25,30,30,15,10);
    $mpdf->WriteHTML($style);
    $mpdf->WriteHTML($toc);


    // Isi
    $content = $this->load->view('report/content',$this->data,true);
    // $mpdf->autoPageBreak = false;
    $mpdf->AddPage('P','','','','',30,25,30,30,15,10);
    $mpdf->WriteHTML($style); 
    $mpdf->WriteHTML($content);
    $mpdf->Output();
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
    $this->data['sisa'] = $this->data['row']['pagu'];

    $this->data['allAct'] = $this->ModelRMPAct->selectByIdRMP($this->data['row']['id'])->result_array();
    $this->data['allStages'] = $this->ModelRMPStages->selectAll()->result_array();    
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
      $xPastF = 185;
      $yPastF = 225;
      $xPastM = 185;
      $yPastM = 225;
      $yText = 225;
      $pText = 0;
    $mpdf->Circle($xPastF,$yPastF,1);
      $mpdf->Text(405,$yText,$pText);
      for ($i=0; $i < 12; $i++) {
        $x = $xPastM + 18;;
        $mpdf->SetDrawColor(0, 83, 249);
        // $mpdf->SetDrawColor(249, 0, 0);
        $y = 225-($this->data['moneysMonthsKumulatifP'][$i]/100 * 175);
        $mpdf->Line($xPastM, $yPastM, $x, $y);
        $mpdf->Circle($x,$y,1);
        $xPastM = $x;
        $yPastM = $y;

        $x = $xPastF + 18;;
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
      $pdfFilePath = "Lampiran_3".$this->session->userdata('id')."_".$idk."_".$this->data['row']['id'].".pdf";
      $mpdf->Output($pdfFilePath,"D");
    
  }

  public function tampil($id)
  {
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

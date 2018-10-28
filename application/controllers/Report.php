<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Report extends CI_Controller{
  public function __construct(){
    parent::__construct();
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

  public function printRMP($id){
    $user = $this->ModelUser->selectById($this->session->userdata('id'))->row_array();
    $row = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
    $data = $this->ModelKegiatan->selectAllKegiatanById($id)->row_array();
    $acts = $this->ModelRMPAct->selectByIdRMP($row['id'])->result_array();
    $stages = $this->ModelRMPStages->selectAll()->result_array();
    $bibs = $this->ModelRMPBib->selectByIdRMP($row['id'])->result_array();
    $docs = $this->ModelRMPDocument->selectByIdRMP($row['id'])->result_array();
    $roles = $this->ModelRMPRoles->selectByIdRMP($row['id'])->result_array();
    $sdms = $this->ModelRMPSDM->selectByIdRMP($row['id'])->result_array();
    $docs = $this->ModelRMPDocument->selectByIdRMP($row['id'])->result_array();
    $recs = $this->ModelRMPRec->selectByIdRMP($row['id'])->result_array();
    // var_dump($row);

    $headfoot = '<html>
        <head>
        <style>
        body {
          font-family: Arial;
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
        Rencana Mutu Pelaksanaan TA.2018
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
            <td width=40%>No. Dok.: RMP/PUSAIR/BLSUNGAI/01-02<br>No. Rev. : 00</td>
            <td style="text-align: top" width=40%>Tgl. Diterbitkan : 26 Januari 2018</td>
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

     // $mpdf->AliasNbPages('[pagetotal]');
 
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
            <body style="font-family: Arial;">
              <div style="text-align: center; font-family: Arial; font-size: 14; line-height: 2.0">
                <b>SATUAN KERJA BALAI LITBANG SUNGAI</b>
              </div>
              <table border="1" style="font-size: 10;" width=100%>
                    <tbody style="vertical-align: text-top;">
                    <tr>
                      <td width=35%>No. Dok.: RMP/PUSAIR/BLSUNGAI/01-02<br>No. Rev. : 00</td>
                      <td style="text-align: top" width=50%>Tgl. Diterbitkan : 26 Januari 2018</td>
                      <td>Hal : 1<br>Paraf :</td>
                    </tr>
                    </tbody>
                </table>  
                <br>
                <div style="text-align: center; font-family: Arial; font-size: 14; line-height: 1.5">
                <b>RENCANA MUTU PELAKSANA<br>
                  PENGEMBANGAN PERANGKAT LUNAK INSPEKSI<br>
                  SUNGAI DAN PRASARANA INSPEKSI</b>
                  <div style="text-align: center; font-family: Arial; font-size: 12;">
                    <b>TAHUN ANGGARAN 2018</b>
                  </div>      
              </div>
              <br><br>
              <div style="text-align: center; font-family: Arial; font-size: 12; line-height: 1.5">
                <b>PENGESAHAN</b>
              </div>  <br>

              <table border="1" style="font-size: 10; border-collapse: collapse; empty-cells: hide; border: none; font-family: Arial; font-size: 12; padding-bottom: 10px;
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
                  <td></td>
                  <td></td>
                </tr>
                </tbody>
              </table>
              <br>
              <div style="text-align: left; font-family: Arial; font-size: 12; line-height: 2.5">
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

              <div style="text-align: left; font-family: Arial; font-size: 12; line-height: 2.5">
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

  $page2 = '<div style="text-align: left; font-family: Arial; font-size: 12pt; line-height: 2.5">
    <b>Distribusi Ke :</b><br>
    <table width=100% style="page-break-inside:avoid; text-align: center;">
      <tr>
        <td width=10%>No. Urut</td>
        <td>Nama Jabatan</td>
      </tr>
    </table>

   </div>';

  $page3 = '<div style="text-align: center; font-family: Arial; font-size: 12pt; line-height: 2.5">
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
    body {font-family: Arial;
      font-size: 12pt;
    }
    p { font-family: Arial;
      font-size: 12pt;margin: 0pt; 
      text-align: justify;
      line-height: 1.5;
      text-indent: 50px;
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
    }
    h2{
      font-size: 12pt;
    }
    h5{
      font-size: 12pt;
      font-weight: normal;
    }
   
    </style>
    </head>';

  $toc=' 
    <body>
      <h1 style="text-align: center">        
      Daftar Isi</h1>

    </body>
    </html>';

  $tof=' 
    <body>
      <h1 style="text-align: center">        
      Daftar Gambar</h1>
    </body>
    </html>';

  $tof2=' 
    <body>
      <h1 style="text-align: center">        
      Daftar Tabel</h1>
    </body>
    </html>';

  if($row['jenis'] == "Teknologi dan Terapan Terpadu"){

    $content = '
      <body>
      <h1> 1. UMUM </h1>
        <h2> 1.1 Latar Belakang</h2>
        '.$row['latar'].'
        <h2> 1.2 Identifikasi Masalah</h2>
        '.$row['masalah'].'
        <h2> 1.3 Batasan Masalah</h2>
        '.$row['batasan'].'
        <h2> 1.4 Tujuan</h2>
        '.$row['tujuan'].'
        <h2> 1.5 Tinjauan Pustaka</h2>
        '.$row['tinjauan'].'
        <h2> 1.6 Kerangka Pemikiran</h2>
        '.$row['kerangka'].'
        <h2> 1.7 Formulasi Kegiatan dan Hipotesis</h2>
        '.$row['formulasi'].'
        <h2> 1.8 Penerima Manfaat</h2>
        '.$row['manfaat'];
      }else if($row['jenis'] == "Rekomtek"){
    $content = '
      <body>
      <h1> 1. UMUM </h1>
        <h2> 1.1 Latar Belakang</h2>
        '.$row['latar'].'
        <h2> 1.2 Identifikasi Masalah</h2>
        '.$row['masalah'].'
        <h2> 1.3 Batasan Masalah</h2>
        '.$row['batasan'].'
        <h2> 1.4 Tujuan</h2>
        '.$row['tujuan'].'
        <h2> 1.5 Tinjauan Pustaka</h2>
        '.$row['tinjauan'];
      }else if($row['jenis'] == "Layanan Internal"){
    $content = '
      <body>
      <h1> 1. UMUM </h1>
        <h2> 1.1 Latar Belakang</h2>
        '.$row['latar'].'
        <h2> 1.2 Tujuan Kegiatan</h2>
        '.$row['tujuan'];
      }else{
    $content = '
      <body>
      <h1> 1. UMUM </h1>
        <h2> 1.1 Latar Belakang</h2>
        '.$row['latar'].'
        <h2> 1.2 Tujuan Kegiatan</h2>
        '.$row['tujuan'].'
        <h2> 1.3 Penerima Manfaat</h2>
        '.$row['manfaat'];
      }

      if($row['jenis'] == "Layanan Internal"){
        $content .='
          <h1> 2. INFORMASI KEGIATAN </h1>
            <h2> 2.1 Judul Kegiatan dan Sumber Penganggaran</h2>
            '.$row['juduldansumber'].'
            <h2> 2.2 Lingkup Kegiatan</h2>
            '.$row['lingkup'].'
            <h2> 2.3 Lokasi Kegiatan</h2>
            '.$row['lokasi'];
      }else{
        $content .='
          <h1> 2. INFORMASI KEGIATAN </h1>
            <h2> 2.1 Judul Kegiatan dan Sumber Penganggaran</h2>
            '.$row['juduldansumber'].'
            <h2> 2.2 Lingkup Kegiatan</h2>
            '.$row['lingkup'].'
            <h2> 2.3 Metode Pelaksanaan</h2>
            '.$row['metode'].'
            <h2> 2.4 Lokasi Kegiatan</h2>
            '.$row['lokasi'];
      }

    $content .='
      <h1> 3. SASARAN KEGIATAN </h1>
      <h2> 3.1 Sasaran Kegiatan <i>(Output)</i></h2>
      '.$row['sasarankeluaran'].'
      <h2> 3.2 Sasaran Mutu</h2>
      '.$row['sasaranmutu'].'
    <h1> 4. PERSYARATAN TEKNIS DAN ADMINISTRASI </h1>
      <h2> 4.1 Persyaratan Teknis</h2>
      '.$row['persyaratanteknis'].'
      <h2> 4.2 Persyaratan Administrasi</h2>
      '.$row['persyaratanadministrasi'].'
    <h1> 5. STRUKTUR ORGANISASI </h1>
    <div style="text-align: center">
       <img src="' . base_url() . 'assets/uploads/strukturorg/'.$row['strukturorg'].'" style="width: 550px; height: 400px; margin-left: 30px" />
        <h5><b>Gambar 2.</b> Struktur Organisasi Kegiatan</h5>
    </div>
    <h1> 6. TUGAS, TANGGUNG JAWAB DAN WEWENANG  </h1>
    <table border="0">';
    $no = 1;foreach($roles as $role){
      $content .= 
      '<tr>
        <td>'.$no++.')</td>
        <td colspan=3>'.$role['jabatan'].'</td>
      </tr>
      <tr>
        <td></td>
        <td>Tugas</td>
        <td>:</td>
        <td>'.$role['tugas'].'</td>
      </tr>
      <tr>
        <td></td>
        <td>Tanggung Jawab</td>
        <td>:</td>
        <td>'.$role['tanggungjawab'].'</td>
      </tr>
      <tr>
        <td></td>
        <td>Wewenang</td>
        <td>:</td>
        <td>'.$role['wewenang'].'</td>
      </tr>'
      ;
    }
    
    $content .= '</table>
    <h1> 7. KEBUTUHAN SUMBER DAYA  </h1>
    
      <h2> 7.1 Sumber Daya Manusia</h2>
      <p>Sumber Daya Manusia  yang terlibat dalam kegiatan ini berdasarkan jabatan yang ada dalam bagan struktur organisasi dan lengkapi dengan kompetensi yang dibutuhkan. </p>
      <table border="0" width=100%>';
    $no = 1;foreach($sdms as $sdm){
      $content .= 
      '<tr>
        <td>'.$no++.')</td>
        <td colspan=3>'.$sdm['jabatan_org'].'</td>
      </tr>
      <tr>
        <td></td>
        <td>Jumlah</td>
        <td>:</td>
        <td>'.$sdm['jumlah'].'</td>
      </tr>
      <tr>
        <td></td>
        <td>Kompetensi</td>
        <td>:</td>
        <td>'.$sdm['kompetensi'].'</td>
      </tr>'
      ;
    }      
    $content .= '</table>
      <h2> 7.2 Sumber Daya Keuangan</h2>
      <p>Sesuai dokumen anggaran DIPA No. DIPA-033.11.1.636846/2018 Tanggal 05 Desember 2017, biaya pelaksanaan Kegiatan '.$row['judul'].' Tahun '.$row['tahun_anggaran'].' pada Satuan Kerja '.$user['satker'].' sebesar Rp. '.number_format($row['pagu'],0,',','.').',- (terbilang : '.$this->terbilang($row['pagu']).' Rupiah) dengan rincian seperti pada Tabel 1 berikut.</p>
      <table>
      </table>
      <h2> 7.3 Sarana dan Prasarana</h2>
        <p>'.$row['prasarana'].'</p>
      <h2> 7.4 Lingkungan</h2>
        <p>'.$row['lingkungan'].'</p>
    <h1> 8. BAGAN ALIR PELAKSANAAN KEGIATAN </h1>
    Tahap pelaksanaan dari kegiatan ini adalah sebagai berikut: <br>';
    $content .= '
    1) Tahapan Persiapan 
    <ol type="a" style="margin-top:0px;border-top:0px;">';
     if(isset($acts) != NULL){ foreach($acts as $act){if($act['parent'] == 'A'){ 
      $content .=' <li> '.$act['kegiatan'].'</li>';
      $content .='<ol type="1">';
       if(isset($stages) != NULL){ foreach($stages as $stage){if($stage['act_id'] == $act['id']){ 
      $content .= '<li>'.$stage['kegiatan'].'</li>';
       }}} 
      $content.='</ol>';
     }}} 
  $content.= '</ol>';
    $content .= '
    2) Tahapan Pelaksanaan 
    <ol type="a" style="margin-top:0px;border-top:0px;">';
     if(isset($acts) != NULL){ foreach($acts as $act){if($act['parent'] == 'B'){ 
      $content .=' <li> '.$act['kegiatan'].'</li>';
      $content .='<ol type="1">';
       if(isset($stages) != NULL){ foreach($stages as $stage){if($stage['act_id'] == $act['id']){ 
      $content .= '<li>'.$stage['kegiatan'].'</li>';
       }}} 
      $content.='</ol>';
     }}} 
  $content.= '</ol>';
      $content .= '
    3) Tahapan Pelaporan 
    <ol type="a" style="margin-top:0px;border-top:0px;">';
     if(isset($acts) != NULL){ foreach($acts as $act){if($act['parent'] == 'C'){ 
      $content .=' <li> '.$act['kegiatan'].'</li>';
      $content .='<ol type="1">';
       if(isset($stages) != NULL){ foreach($stages as $stage){if($stage['act_id'] == $act['id']){ 
      $content .= '<li>'.$stage['kegiatan'].'</li>';
       }}} 
      $content.='</ol>';
     }}} 
  $content.= '</ol>';
    $content .='<div style="text-align: center">
       <img src="' . base_url() . 'assets/uploads/baganalir/'.$row['baganalir'].'" style="width: 550px; height: 400px; margin-left: 30px" />
        <h5><b>Gambar 3.</b> Bagan Alir</h5>
    </div>
    <h1> 9. JADWAL PELAKSANAAN KEGIATAN </h1>
    <p>Jadwal pelaksanaan kegiatan secara rinci sesuai tahapan kegiatan, disajikan pada Lampiran 2 Kerangka dan Rencana Kerja Kegiatan. Berdasarkan tabel kerangka dan rencana kerja kegiatan disusun Kurva S rencana keuangan dan pelaksanaan fisik kegiatan yang disajikan pada Lampiran 3.</p>
    <h1> 10. JADWAL PERSONIL </h1>
    <p>Jadwal personil dan target kegiatan disajikan pada Lampiran 4.</p>
    <h1> 11. JADWAL PENGGUNAAN PRASARANA DAN SARANA  </h1>
    <p>Jadwal penggunaan prasarana dan sarana kegiatan, disajikan pada Lampiran 5.</p>
    <h1> 12. RENCANA DAN METODE VERIFIKASI, VALIDASI, MONITORING, EVALUASI, INSPEKSI DAN PENGUJIAN DAN KRITERIA PENERIMAANNYA </h1>
    <p>Rencana dan metode verifikasi, validasi, monitoring, evaluasi, inspeksi dan pengujian dan kriteria penerimaan kegiatan, dapat dilihat pada Lampiran 6.</p>
    <h1> 13. DAFTAR DOKUMEN SISTEM MANAJEMEN MUTU</h1>
    <p>Dokumen Sistem Mutu yang digunakan dalam pelaksanaan kegiatan, antara lain sebagaimana dalam Tabel 2.</p>
    <table width=100%>
    
      <tr style="background-color: #e3ece4; text-align:center;">
      <td><b>No.</b></td>
      <td><b>Nama Dokumen</b></td>
      <td><b>Nomor Dokumen</b></td>
      </tr>
    
    <tbody>';
    $no=1;foreach($docs as $doc){
      $content.='
      <tr>
      <td>'.$no++.'</td>
      <td>'.$doc['document_name'].'</td>
      <td>'.$doc['document_num'].'</td>
      </tr>';
    }
    $content.='</tbody></table>
    <h1> 14. DAFTAR INDUK REKAMAN</h1>
    <p>Bukti kerja pelaksanaan kegiatan meliputi rekaman-rekaman seperti pada Tabel 3.</p>
    <table width=100%>
    
      <tr style="background-color: #e3ece4; text-align:center;">
      <td><b>No.</b></td>
      <td><b>Nama Rekaman/Bukti Kerja</b></td>
      <td><b>Lokasi dan Penanggungjawab Penyimpanan Rekaman</b></td>
      <td><b>Masa Simpan</b></td>
      </tr>
    
    <tbody>';
    $no=1;foreach($recs as $rec){
      $content.='
      <tr>
      <td>'.$no++.'</td>
      <td>'.$rec['record_name'].'</td>
      <td>'.$rec['location'].'</td>
      <td>'.$rec['period'].'</td>
      </tr>';
    }
    $content .='</tbody></table>

    <h1 style="page-break-before:always;"> 15. DAFTAR PUSTAKA</h1>';
    $no=1;foreach($bibs as $bib){
      $content.='
      <p style="text-indent:-50px">'.$bib['bib_author'].'. '.$bib['bib_year'].'. '.$bib['bib_title'].'. ';
      if($bib['bib_city'] == NULL){
        $content.=''.$bib['bib_publisher'].'';
      }else{
        $content.= $bib['bib_city'].':'.$bib['bib_publisher'];
      }
      $content.='</p>';
    }
    $content.='
    </body>

    </html>
    ';

    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L', 'default_font' => 'Arial']);

    
    // $mpdf->Image('', 0, 0, 21, 29, '', '', true, true);
    $mpdf->SetHTMLHeaderByName('MyHeader1');    
    // $mpdf->SetHTMLHeader('<img src="' . base_url() . 'assets/images/header-pdf.jpg"/>');
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
    // $mpdf->setFooter('{PAGENO}');

    //Daftar Isi
    $mpdf->AddPage('P','','','','',30,25,30,30,15,10);
    $mpdf->WriteHTML($style);
    

    $mpdf->WriteHTML($toc);


    //Daftar Gambar
    $mpdf->AddPage('P','','','','',30,25,30,30,15,10);
    $mpdf->WriteHTML($style); 
    $mpdf->WriteHTML($tof); 
    
    // Daftar Tabel
    $mpdf->AddPage('P','','','','',30,25,30,30,15,10);
    $mpdf->WriteHTML($style); 
    $mpdf->WriteHTML($tof2); 

    // Isi
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
        <div style="text-align: center; font-family: Arial; font-size: 14; line-height: 1.5">
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

    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L', 'default_font' => 'Arial']);
    $mpdf->SetTitle("Rancangan Anggaran Biaya");
    $mpdf->SetAuthor("Faisal Syaiful Anwar");
    $mpdf->SetDisplayMode('fullpage');    
    $mpdf->AddPage('P','','','','',30,25,30,30,15,10);
    #$mpdf->WriteHTML($style); 
    $mpdf->WriteHTML($content);
    $mpdf->Output();
  }

  public function printAtt2($idk){
    $kapus = $this->ModelEmployee->selectById(1)->row_array(); 
    $satker = $this->ModelSatker->selectByIdUser($this->session->userdata('id'))->row_array();
    $row = $this->ModelRMP->selectByIdKegiatan($idk)->row_array();
    $row2 = $this->ModelKegiatan->selectAllKegiatanById($idk)->row_array();
    $allAct = $this->ModelRMPAct->selectByIdRMP($row['id'])->result_array();
    $allActExe = $this->ModelRMPActExe->selectAll()->result_array();
    $row['sisa'] = $row['pagu'];

    foreach($allAct as $r){
      $row['sisa'] -= $r['anggaran'];
    }

    $allStages = $this->ModelRMPStages->selectAll()->result_array();    
    $allStageExe = $this->ModelRMPStagesExe->selectAll()->result_array();
    
    foreach($allStages as $r){
      $row['sisa'] -= $r['anggaran'];
    }
    
    $moneys = $this->ModelRMPSDK->selectByIdRMP($row['id'])->result_array();
    $sdktitles = $this->ModelRMPSDKTitle->selectAll()->result_array();

    $content = '
      <html>
      <body>
        <h2 style="text-align:center;">Kerangka dan Rencana Kerja Kegiatan</h2>
        <div style="text-align: center; font-family: Arial; font-size: 14; line-height: 1.5">
          <b>'.$row['judul'].'<br>
          Tahun Anggaran '.$row['tahun_anggaran'].'</b>
        <div>
        <br>
        <table border="1" style="border-collapse: collapse;">
          <thead>
            <tr>
              <th rowspan="4" style="text-align: center;">No</th>
              <th rowspan="4" style="text-align: center;">Tahapan Kegiatan</th>
              <th rowspan="2" colspan="2" width="300" style="text-align: center;">Hasil Pelaksanaan Kegiatan</th>
              <th rowspan="4" style="text-align: center;">Prasarana dan Sarana Kegiatan</th>
              <th rowspan="4" style="text-align: center;">Anggaran Kegiatan <br> (Rp.)</th>
              <th rowspan="4" style="text-align: center;">Penanggung Jawab</th>
              <th rowspan="4" style="text-align: center;">Pelaksana</th>
              <th colspan="48" style="text-align: center;">Waktu</th>
            </tr>
            <tr>
              <th colspan="4" style="text-align: center;">RMP</th>
              <th colspan="4" style="text-align: center;">Lap. Awal</th>
              <th colspan="32" style="text-align: center;">Laporan</th>
              <th colspan="4" style="text-align: center;">Konsep</th>
              <th colspan="4" style="text-align: center;">Lap Akhir</th>
            </tr>
            <tr>
              <th rowspan="2" style="text-align: center;">Sub Kegiatan</th>
              <th rowspan="2" style="text-align: center;">Sub Tahapan</th>
              <th colspan="4" style="text-align: center;">Jan</th>
              <th colspan="4" style="text-align: center;">Feb</th>
              <th colspan="4" style="text-align: center;">Mar</th>
              <th colspan="4" style="text-align: center;">Apr</th>
              <th colspan="4" style="text-align: center;">Mei</th>
              <th colspan="4" style="text-align: center;">Jun</th>
              <th colspan="4" style="text-align: center;">Jul</th>
              <th colspan="4" style="text-align: center;">Agust</th>
              <th colspan="4" style="text-align: center;">Sept</th>
              <th colspan="4" style="text-align: center;">Okt</th>
              <th colspan="4" style="text-align: center;">Nop</th>
              <th colspan="4" style="text-align: center;">Des</th>
            </tr>
            <tr>';

    $num=48;
    for($i=1;$i<=$num;$i++){
      $content .= '<th style="text-align: center; width:30px;">'.$i.'</th>';
    }

    $content .='
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td><b>'.$row['judul'].'</b></td>
              <td><b>'.$row['output'].'</b></td>
              <td></td>
              <td></td>
              <td><b>'.number_format($row['pagu'],0,',','.').'</b></td>
              <td></td>
              <td></td>';

    $num=48;
    for($i=1;$i<=$num;$i++){
      $content .= '<td></td>';
    }

    /*======================
        PERSIAPAN
    ======================*/

    $content .='
            </tr>
            <tr>
              <td><b>1.</b></td>
              <td colspan="7"><b>PERSIAPAN</b></td>';

    $num=48;
    for($i=1;$i<=$num;$i++){
      $content .= '<td></td>';
    }

    $content .='
            </tr>';

    if(isset($allAct) != NULL){
      $no=1;
      foreach($allAct as $act){
        if($act['parent'] == 'A'){
          $content .= '
            <tr>
              <td>1.'.$no++.'</td>
              <td>'.$act['kegiatan'].'</td>
              <td>'.$act['hasil'].'</td>
              <td></td>
              <td>'.$act['sarpras'].'</td>
              <td style="text-align:right;">'.number_format($act['anggaran'],0,',','.').'</td>
              <td style="text-align:right;">'.$act['pj'].'</td>
              <td>';

          foreach($allActExe as $key=>$actexe){ 
            if($actexe['rmp_activity_id'] == $act['id']){
              $content .= $actexe['name'].' ';
            }
          }

          $content .='</td>';

          $waktu=explode("-",$act['waktu']);
          $start=0;
          $num=48;

          for($i=1;$i<=$num;$i++){
            if($waktu[0] == $i || $start == 1){ 
              $start=1;
              $content .= '<td style="background-color: #h5h5h5;"></td>';
              if($waktu[1] == $i){
                $start=0;
              }
            }
            else{
              $content .= '<td></td>';
            }
          }

          $content .='
                  </tr>';

          if(isset($allStages) != NULL){
            $no3=1;
            foreach($allStages as $stage){
              if($stage['act_id'] == $act['id']){
                $content .= '
                  <tr>
                    <td>1.'.($no-1).'.'.$no3++.'</td>
                    <td colspan="7">'.$stage['kegiatan'].'</td>';

                $num=48;
                for($i=1;$i<=$num;$i++){
                  $content .= '
                    <td></td>';
                }

                $content .= '
                  </tr>';
              }
            }
          }

        }#close PARENT A
      }
    }

    /*======================
        PELAKSANAAN
    ======================*/

    $content .='
            <tr>
              <td><b>2.</b></td>
              <td colspan="7"><b>PELAKSANAAN</b></td>';

    $num=48;
    for($i=1;$i<=$num;$i++){
      $content .= '<td></td>';
    }

    $content .='
            </tr>';

    if(isset($allAct) != NULL){ 
      $no=1; 
      foreach($allAct as $act){
        if($act['parent'] == 'B'){
          $content .= '
            <tr>
              <td>2.'.$no++.'</td>
              <td>'.$act['kegiatan'].'</td>
              <td>'.$act['hasil'].'</td>
              <td></td>
              <td>'.$act['sarpras'].'</td>
              <td style="text-align:right;">'.number_format($act['anggaran'],0,',','.').'</td>
              <td style="text-align:right;">'.$act['pj'].'</td>
              <td>';

          foreach($allActExe as $key=>$actexe){ 
            if($actexe['rmp_activity_id'] == $act['id']){
              $content .= $actexe['name'].' ';
            }
          }

          $content .='</td>';

          $waktu=explode("-",$act['waktu']);
          $start=0;
          $num=48;

          for($i=1;$i<=$num;$i++){
            if($waktu[0] == $i || $start == 1){ 
              $start=1;
              $content .= '<td style="background-color: #h5h5h5;"></td>';
              if($waktu[1] == $i){
                $start=0;
              }
            }
            else{
              $content .= '<td></td>';
            }
          }

          $content .='
            </tr>';

          if(isset($allStages) != NULL){
            $no3=1;
            foreach($allStages as $stage){
              if($stage['act_id'] == $act['id']){
                $content .='
                  <tr>
                    <td>2.'.($no-1).'.'.$no3++.'</td>
                    <td>'.$stage['kegiatan'].'</td>
                    <td></td>
                    <td>'.$stage['hasil'].'</td>
                    <td>'.$stage['sarpras'].'</td>
                    <td style="text-align:right;">'.number_format($stage['anggaran'],0,',','.').'</td>
                    <td style="text-align:right;">'.$stage['pj'].'</td>
                    <td>';

                foreach($allStageExe as $key=>$stageexe){
                  if($stageexe['rmp_stages_id'] == $stage['id']){
                    $content .= $stageexe['name'].' ';
                  }
                }

                $content .= '
                    </td>';

                $waktu=explode("-",$stage['waktu']);
                $start=0;
                $num=48;

                for($i=1;$i<=$num;$i++){
                  if($waktu[0] == $i || $start == 1){ 
                    $start=1;
                    $content .= '<td style="background-color: #h5h5h5;"></td>';
                    if($waktu[1] == $i){
                      $start=0;
                    }
                  }
                  else{
                    $content .= '<td></td>';
                  }
                }

                $content .= '
                  </tr>';
              }
            }
          }

        }#close PARENT B
      }
    }

    /*======================
        PELAPORAN
    ======================*/

    $content .='
            <tr>
              <td><b>3.</b></td>
              <td colspan="7"><b>PELAPORAN</b></td>';

    $num=48;
    for($i=1;$i<=$num;$i++){
      $content .= '<td></td>';
    }

    $content .='
            </tr>';

    if(isset($allAct) != NULL){
      $no=1;
      foreach($allAct as $act){
        if($act['parent'] == 'C'){
          $content .= '
            <tr>
              <td>3.'.$no++.'</td>
              <td>'.$act['kegiatan'].'</td>
              <td>'.$act['hasil'].'</td>
              <td></td>
              <td>'.$act['sarpras'].'</td>
              <td style="text-align:right;">'.number_format($act['anggaran'],0,',','.').'</td>
              <td style="text-align:right;">'.$act['pj'].'</td>
              <td>';

          foreach($allActExe as $key=>$actexe){ 
            if($actexe['rmp_activity_id'] == $act['id']){
              $content .= $actexe['name'].' ';
            }
          }

          $content .='</td>';

          $waktu=explode("-",$act['waktu']);
          $start=0;
          $num=48;

          for($i=1;$i<=$num;$i++){
            if($waktu[0] == $i || $start == 1){ 
              $start=1;
              $content .= '<td style="background-color: #h5h5h5;"></td>';
              if($waktu[1] == $i){
                $start=0;
              }
            }
            else{
              $content .= '<td></td>';
            }
          }

          $content .='
                  </tr>';

          if(isset($allStages) != NULL){
            $no3=1;
            foreach($allStages as $stage){
              if($stage['act_id'] == $act['id']){
                $content .= '
                  <tr>
                    <td>3.'.($no-1).'.'.$no3++.'</td>
                    <td colspan="7">'.$stage['kegiatan'].'</td>';

                $num=48;
                for($i=1;$i<=$num;$i++){
                  $content .= '
                    <td></td>';
                }

                $content .= '
                  </tr>';
              }
            }
          }

        }#close PARENT C
      }
    }

    $content .='
          </tbody>
        </table>
      </body>
      </html>';


    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A3-L', 'default_font' => 'Arial']);
    $mpdf->SetTitle("Kerangka dan Rencana Kerja Kegiatan");
    $mpdf->SetAuthor("Faisal Syaiful Anwar");
    $mpdf->SetDisplayMode('fullpage');// Isi
    $mpdf->AddPage('L','','','','',10,10,10,10,5,5);
    #$mpdf->WriteHTML($style); 
    $mpdf->WriteHTML($content);
    $mpdf->Output();
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

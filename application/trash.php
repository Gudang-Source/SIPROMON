public function printRMPTTT($id){
    $row = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
    $data = $this->ModelKegiatan->selectAllKegiatanById($id)->row_array();
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
                    <img src="' . base_url() . 'assets/images/footer-pdf.jpg"/> <font face="Brush Script MT">Pertajam Strategi Ciptakan Inovasi</font>
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
            <body>
              <div style="text-align: center; font-family: Arial; font-size: 14; line-height: 2.0">
                <b>SATUAN KERJA BALAI LITBANG SUNGAI</b>
              </div>
              <table border="1" style="font-size: 10;" width=100%>
                    <tbody style="vertical-align: text-top;">
                    <tr>
                      <td width=35%>No. Dok.: RMP/PUSAIR/BLSUNGAI/01-02<br>No. Rev. : 00</td>
                      <td style="text-align: top" width=50%>Tgl. Diterbitkan : 26 Januari 2018</td>
                      <td>Hal : 1/{nb}<br>Paraf :</td>
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
    p { margin: 0pt; 
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


    $content = '
    <body>
    
    <h1> 1. UMUM </h1>
      <h2> 1.1 Latar Belakang</h2>
        <p>'.$row['latar'].'</p>
      <h2> 1.2 Identifikasi Masalah</h2>
        <p>'.$row['masalah'].'</p>
      <h2> 1.3 Tujuan</h2>
        <p>'.$row['tujuan'].'</p>
      <h2> 1.4 Tinjauan Pustaka</h2>
        <p>'.$row['tinjauan'].'</p>
      <h2> 1.5 Kerangka Pemikiran</h2>
        <p>'.$row['kerangka'].'</p>
      <h2> 1.6 Formulasi Kegiatan dan Hipotesis</h2>
        <p>'.$row['formulasi'].'</p>
      <h2> 1.7 Penerima Manfaat</h2>
        <p>'.$row['manfaat'].'</p>
    <h1> 2. INFORMASI KEGIATAN </h1>
      <h2> 2.1 Judul Kegiatan dan Sumber Penganggaran</h2>
        <p>'.$row['juduldansumber'].'</p>
      <h2> 2.2 Lingkup Kegiatan</h2>
        <p>'.$row['lingkup'].'</p>
      <h2> 2.3 Lokasi Kegiatan</h2>
        <p>'.$row['lokasi'].'</p>
      <h1> 3. SASARAN KEGIATAN </h1>
      <h2> 3.1 Sasaran Kegiatan <i>(Output)</i></h2>
        <p>'.$row['sasarankeluaran'].'</p>
      <h2> 3.2 Sasaran Mutu</h2>
        <p>'.$row['sasaranmutu'].'</p>
    <h1> 4. PERSYARATAN TEKNIS DAN ADMINISTRASI </h1>
      <h2> 4.1 Persyaratan Teknis</h2>
        <p>'.$row['persyaratanteknis'].'</p>
      <h2> 4.2 Persyaratan Administrasi</h2>
        <p>'.$row['persyaratanadministrasi'].'</p>
    <h1> 5. STRUKTUR ORGANISASI </h1>
    <div style="text-align: center">
       <img src="' . base_url() . 'assets/uploads/strukturorg/'.$row['strukturorg'].'" style="width: 550px; height: 400px; margin-left: 30px" />
        <h5><b>Gambar 2.</b> Struktur Organisasi Kegiatan</h5>
    </div>
    <h1> 6. TUGAS, TANGGUNG JAWAB DAN WEWENANG  </h1>
    <h1> 7. KEBUTUHAN SUMBER DAYA  </h1>
      <h2> 7.1 Sumber Daya Manusia</h2>
      <h2> 7.2 Sumber Daya Keuangan</h2>
      <h2> 7.3 Sarana dan Prasarana</h2>
        <p>'.$row['prasarana'].'</p>
      <h2> 7.4 Lingkungan</h2>
        <p>'.$row['lingkungan'].'</p>
    <h1> 8. BAGAN ALIR PELAKSANAAN KEGIATAN </h1>
    <div style="text-align: center">
        <img src="' . base_url() . 'assets/uploads/baganalir/'.$row['baganalir'].'" style="width: 550px; height: 400px; margin-left: 30px" />
        <h5><b>Gambar 2.</b> Struktur Organisasi Kegiatan</h5>
    </div>
    <h1> 9. JADWAL PELAKSANAAN KEGIATAN </h1>
    <h1> 10. JADWAL PERSONIL </h1>
    <h1> 11. JADWAL PENGGUNAAN PRASARANA DAN SARANA  </h1>
    <h1> 12. RENCANA DAN METODE VERIFIKASI, VALIDASI, MONITORING, EVALUASI, INSPEKSI DAN PENGUJIAN DAN KRITERIA PENERIMAANNYA </h1>
    <h1> 13. DAFTAR DOKUMEN SISTEM MANAJEMEN MUTU  </h1>
    <h1> 14. DAFTAR INDUK REKAMAN  </h1>
    <h1> 15. DAFTAR PUSTAKA  </h1>
    </body>

    </html>
    ';

    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L', 'default_font' => 'Arial']);

    // $mpdf->showImageErrors = true;
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

    
    $mpdf->SetProtection(array('print'));
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
    
    /*  ADD TABLE OF CONTENT*/ 
    // $mpdf->SetHeaderByName('MyHeader1');
    // $mpdf->WriteHTML('Introduction of document...');
    // $mpdf->TOCpagebreak (
    //     '', '', '', '', '', '', '', '', '', '', '', '', 
    //     'MyTOCHeader', '', 'MyTOCFooter', '', 1, 0 , 1, 0, 
    //     '', '', '', '', '', '', '', '', '', '', '', '', '', 
    //     'MyHeader2', '', 'MyFooter2', '', 1, 0,  1,0
    // );

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

  public function printRMPPilot($id){
    $row = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
    $data = $this->ModelKegiatan->selectAllKegiatanById($id)->row_array();
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
                    <img src="' . base_url() . 'assets/images/footer-pdf.jpg"/> <font face="Brush Script MT">Pertajam Strategi Ciptakan Inovasi</font>
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
            <body>
              <div style="text-align: center; font-family: Arial; font-size: 14; line-height: 2.0">
                <b>SATUAN KERJA BALAI LITBANG SUNGAI</b>
              </div>
              <table border="1" style="font-size: 10;" width=100%>
                    <tbody style="vertical-align: text-top;">
                    <tr>
                      <td width=35%>No. Dok.: RMP/PUSAIR/BLSUNGAI/01-02<br>No. Rev. : 00</td>
                      <td style="text-align: top" width=50%>Tgl. Diterbitkan : 26 Januari 2018</td>
                      <td>Hal : 1/{nb}<br>Paraf :</td>
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
    p { margin: 0pt; 
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


    $content = '
    <body>
    
    <h1> 1. UMUM </h1>
      <h2> 1.1 Latar Belakang</h2>
        <p>'.$row['latar'].'</p>
      <h2> 1.2 Tujuan</h2>
        <p>'.$row['tujuan'].'</p>
      <h2> 1.3 Penerima Manfaat</h2>
        <p>'.$row['manfaat'].'</p>
    <h1> 2. INFORMASI KEGIATAN </h1>
      <h2> 2.1 Judul Kegiatan dan Sumber Penganggaran</h2>
        <p>'.$row['juduldansumber'].'</p>
      <h2> 2.2 Lokasi Kegiatan</h2>
        <p>'.$row['lokasi'].'</p>
      <h1> 3. SASARAN KEGIATAN </h1>
      <h2> 3.1 Sasaran Kegiatan <i>(Output)</i></h2>
        <p>'.$row['sasarankeluaran'].'</p>
      <h2> 3.2 Sasaran Mutu</h2>
        <p>'.$row['sasaranmutu'].'</p>
    <h1> 4. PERSYARATAN TEKNIS DAN ADMINISTRASI </h1>
      <h2> 4.1 Persyaratan Teknis</h2>
        <p>'.$row['persyaratanteknis'].'</p>
      <h2> 4.2 Persyaratan Administrasi</h2>
        <p>'.$row['persyaratanadministrasi'].'</p>
    <h1> 5. STRUKTUR ORGANISASI </h1>
    <div style="text-align: center">
       <img src="' . base_url() . 'assets/uploads/strukturorg/'.$row['strukturorg'].'" style="width: 550px; height: 400px; margin-left: 30px" />
        <h5><b>Gambar 2.</b> Struktur Organisasi Kegiatan</h5>
    </div>
    <h1> 6. TUGAS, TANGGUNG JAWAB DAN WEWENANG  </h1>
    <h1> 7. KEBUTUHAN SUMBER DAYA  </h1>
      <h2> 7.1 Sumber Daya Manusia</h2>
      <h2> 7.2 Sumber Daya Keuangan</h2>
      <h2> 7.3 Sarana dan Prasarana</h2>
        <p>'.$row['prasarana'].'</p>
      <h2> 7.4 Lingkungan</h2>
        <p>'.$row['lingkungan'].'</p>
    <h1> 8. BAGAN ALIR PELAKSANAAN KEGIATAN </h1>
    <div style="text-align: center">
        <img src="' . base_url() . 'assets/uploads/baganalir/'.$row['baganalir'].'" style="width: 550px; height: 400px; margin-left: 30px" />
        <h5><b>Gambar 2.</b> Struktur Organisasi Kegiatan</h5>
    </div>
    <h1> 9. JADWAL PELAKSANAAN KEGIATAN </h1>
    <h1> 10. JADWAL PERSONIL </h1>
    <h1> 11. JADWAL PENGGUNAAN PRASARANA DAN SARANA  </h1>
    <h1> 12. RENCANA DAN METODE VERIFIKASI, VALIDASI, MONITORING, EVALUASI, INSPEKSI DAN PENGUJIAN DAN KRITERIA PENERIMAANNYA </h1>
    <h1> 13. DAFTAR DOKUMEN SISTEM MANAJEMEN MUTU  </h1>
    <h1> 14. DAFTAR INDUK REKAMAN  </h1>
    <h1> 15. DAFTAR PUSTAKA  </h1>
    <h1> LAMPIRAN  </h1>
    </body>

    </html>
    ';

    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L', 'default_font' => 'Arial']);

    // $mpdf->showImageErrors = true;
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

    
    $mpdf->SetProtection(array('print'));
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
    
    /*  ADD TABLE OF CONTENT*/ 
    // $mpdf->SetHeaderByName('MyHeader1');
    // $mpdf->WriteHTML('Introduction of document...');
    // $mpdf->TOCpagebreak (
    //     '', '', '', '', '', '', '', '', '', '', '', '', 
    //     'MyTOCHeader', '', 'MyTOCFooter', '', 1, 0 , 1, 0, 
    //     '', '', '', '', '', '', '', '', '', '', '', '', '', 
    //     'MyHeader2', '', 'MyFooter2', '', 1, 0,  1,0
    // );

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

   public function printRMPRekomtek($id){
    $row = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
    $data = $this->ModelKegiatan->selectAllKegiatanById($id)->row_array();
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
                    <img src="' . base_url() . 'assets/images/footer-pdf.jpg"/> <font face="Brush Script MT">Pertajam Strategi Ciptakan Inovasi</font>
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
            <body>
              <div style="text-align: center; font-family: Arial; font-size: 14; line-height: 2.0">
                <b>SATUAN KERJA BALAI LITBANG SUNGAI</b>
              </div>
              <table border="1" style="font-size: 10;" width=100%>
                    <tbody style="vertical-align: text-top;">
                    <tr>
                      <td width=35%>No. Dok.: RMP/PUSAIR/BLSUNGAI/01-02<br>No. Rev. : 00</td>
                      <td style="text-align: top" width=50%>Tgl. Diterbitkan : 26 Januari 2018</td>
                      <td>Hal : 1/{nb}<br>Paraf :</td>
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
    p { margin: 0pt; 
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


    $content = '
    <body>
    
    <h1> 1. UMUM </h1>
      <h2> 1.1 Latar Belakang</h2>
        <p>'.$row['latar'].'</p>
      <h2> 1.2 Identifikasi Masalah</h2>
        <p>'.$row['masalah'].'</p>
      <h2> 1.3 Batasan Masalah</h2>
        <p>'.$row['batasan'].'</p>
      <h2> 1.4 Tujuan</h2>
        <p>'.$row['tujuan'].'</p>
      <h2> 1.5 Penerima Manfaat</h2>
        <p>'.$row['manfaat'].'</p>
    <h1> 2. INFORMASI KEGIATAN </h1>
      <h2> 2.1 Judul Kegiatan dan Sumber Penganggaran</h2>
        <p>'.$row['juduldansumber'].'</p>
      <h2> 2.2 Lingkup Kegiatan</h2>
        <p>'.$row['lingkup'].'</p>
      <h2> 2.3 Metode Pelaksanaan</h2>
        <p>'.$row['metode'].'</p>
      <h2> 2.4 Lokasi Kegiatan</h2>
        <p>'.$row['lokasi'].'</p>
      <h1> 3. SASARAN KEGIATAN </h1>
      <h2> 3.1 Sasaran Kegiatan <i>(Output)</i></h2>
        <p>'.$row['sasarankeluaran'].'</p>
      <h2> 3.2 Sasaran Mutu</h2>
        <p>'.$row['sasaranmutu'].'</p>
    <h1> 4. PERSYARATAN TEKNIS DAN ADMINISTRASI </h1>
      <h2> 4.1 Persyaratan Teknis</h2>
        <p>'.$row['persyaratanteknis'].'</p>
      <h2> 4.2 Persyaratan Administrasi</h2>
        <p>'.$row['persyaratanadministrasi'].'</p>
    <h1> 5. STRUKTUR ORGANISASI </h1>
    <div style="text-align: center">
       <img src="' . base_url() . 'assets/uploads/strukturorg/'.$row['strukturorg'].'" style="width: 550px; height: 400px; margin-left: 30px" />
        <h5><b>Gambar 2.</b> Struktur Organisasi Kegiatan</h5>
    </div>
    <h1> 6. TUGAS, TANGGUNG JAWAB DAN WEWENANG  </h1>
    <h1> 7. KEBUTUHAN SUMBER DAYA  </h1>
      <h2> 7.1 Sumber Daya Manusia</h2>
      <h2> 7.2 Sumber Daya Keuangan</h2>
      <h2> 7.3 Sarana dan Prasarana</h2>
        <p>'.$row['prasarana'].'</p>
      <h2> 7.4 Lingkungan</h2>
        <p>'.$row['lingkungan'].'</p>
    <h1> 8. BAGAN ALIR PELAKSANAAN KEGIATAN </h1>
    <div style="text-align: center">
        <img src="' . base_url() . 'assets/uploads/baganalir/'.$row['baganalir'].'" style="width: 550px; height: 400px; margin-left: 30px" />
        <h5><b>Gambar 2.</b> Struktur Organisasi Kegiatan</h5>
    </div>
    <h1> 9. JADWAL PELAKSANAAN KEGIATAN </h1>
    <h1> 10. JADWAL PERSONIL </h1>
    <h1> 11. JADWAL PENGGUNAAN PRASARANA DAN SARANA  </h1>
    <h1> 12. RENCANA DAN METODE VERIFIKASI, VALIDASI, MONITORING, EVALUASI, INSPEKSI DAN PENGUJIAN DAN KRITERIA PENERIMAANNYA </h1>
    <h1> 13. DAFTAR DOKUMEN SISTEM MANAJEMEN MUTU  </h1>
    <h1> 14. DAFTAR INDUK REKAMAN  </h1>
    </body>

    </html>
    ';

    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L', 'default_font' => 'Arial']);

    // $mpdf->showImageErrors = true;
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

    
    $mpdf->SetProtection(array('print'));
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
    
    /*  ADD TABLE OF CONTENT*/ 
    // $mpdf->SetHeaderByName('MyHeader1');
    // $mpdf->WriteHTML('Introduction of document...');
    // $mpdf->TOCpagebreak (
    //     '', '', '', '', '', '', '', '', '', '', '', '', 
    //     'MyTOCHeader', '', 'MyTOCFooter', '', 1, 0 , 1, 0, 
    //     '', '', '', '', '', '', '', '', '', '', '', '', '', 
    //     'MyHeader2', '', 'MyFooter2', '', 1, 0,  1,0
    // );

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

  public function printRMPLTeknis($id){
    $row = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
    $data = $this->ModelKegiatan->selectAllKegiatanById($id)->row_array();
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
                    <img src="' . base_url() . 'assets/images/footer-pdf.jpg"/> <font face="Brush Script MT">Pertajam Strategi Ciptakan Inovasi</font>
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
            <body>
              <div style="text-align: center; font-family: Arial; font-size: 14; line-height: 2.0">
                <b>SATUAN KERJA BALAI LITBANG SUNGAI</b>
              </div>
              <table border="1" style="font-size: 10;" width=100%>
                    <tbody style="vertical-align: text-top;">
                    <tr>
                      <td width=35%>No. Dok.: RMP/PUSAIR/BLSUNGAI/01-02<br>No. Rev. : 00</td>
                      <td style="text-align: top" width=50%>Tgl. Diterbitkan : 26 Januari 2018</td>
                      <td>Hal : 1/{nb}<br>Paraf :</td>
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
    p { margin: 0pt; 
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


    $content = '
    <body>
    
    <h1> 1. UMUM </h1>
      <h2> 1.1 Latar Belakang</h2>
        <p>'.$row['latar'].'</p>
      <h2> 1.2 Identifikasi Masalah</h2>
        <p>'.$row['masalah'].'</p>
      <h2> 1.3 Batasan Masalah</h2>
        <p>'.$row['batasan'].'</p>
      <h2> 1.4 Tujuan</h2>
        <p>'.$row['tujuan'].'</p>
      <h2> 1.5 Penerima Manfaat</h2>
        <p>'.$row['manfaat'].'</p>
    <h1> 2. INFORMASI KEGIATAN </h1>
      <h2> 2.1 Judul Kegiatan dan Sumber Penganggaran</h2>
        <p>'.$row['juduldansumber'].'</p>
      <h2> 2.2 Lingkup Kegiatan</h2>
        <p>'.$row['lingkup'].'</p>
      <h2> 2.3 Metode Pelaksanaan</h2>
        <p>'.$row['metode'].'</p>
      <h2> 2.4 Lokasi Kegiatan</h2>
        <p>'.$row['lokasi'].'</p>
      <h1> 3. SASARAN KEGIATAN </h1>
      <h2> 3.1 Sasaran Kegiatan <i>(Output)</i></h2>
        <p>'.$row['sasarankeluaran'].'</p>
      <h2> 3.2 Sasaran Mutu</h2>
        <p>'.$row['sasaranmutu'].'</p>
    <h1> 4. PERSYARATAN TEKNIS DAN ADMINISTRASI </h1>
      <h2> 4.1 Persyaratan Teknis</h2>
        <p>'.$row['persyaratanteknis'].'</p>
      <h2> 4.2 Persyaratan Administrasi</h2>
        <p>'.$row['persyaratanadministrasi'].'</p>
    <h1> 5. STRUKTUR ORGANISASI </h1>
    <div style="text-align: center">
       <img src="' . base_url() . 'assets/uploads/strukturorg/'.$row['strukturorg'].'" style="width: 550px; height: 400px; margin-left: 30px" />
        <h5><b>Gambar 2.</b> Struktur Organisasi Kegiatan</h5>
    </div>
    <h1> 6. TUGAS, TANGGUNG JAWAB DAN WEWENANG  </h1>
    <h1> 7. KEBUTUHAN SUMBER DAYA  </h1>
      <h2> 7.1 Sumber Daya Manusia</h2>
      <h2> 7.2 Sumber Daya Keuangan</h2>
      <h2> 7.3 Sarana dan Prasarana</h2>
        <p>'.$row['prasarana'].'</p>
      <h2> 7.4 Lingkungan</h2>
        <p>'.$row['lingkungan'].'</p>
    <h1> 8. BAGAN ALIR PELAKSANAAN KEGIATAN </h1>
    <div style="text-align: center">
        <img src="' . base_url() . 'assets/uploads/baganalir/'.$row['baganalir'].'" style="width: 550px; height: 400px; margin-left: 30px" />
        <h5><b>Gambar 2.</b> Struktur Organisasi Kegiatan</h5>
    </div>
    <h1> 9. JADWAL PELAKSANAAN KEGIATAN </h1>
    <h1> 10. JADWAL PERSONIL </h1>
    <h1> 11. JADWAL PENGGUNAAN PRASARANA DAN SARANA  </h1>
    <h1> 12. RENCANA DAN METODE VERIFIKASI, VALIDASI, MONITORING, EVALUASI, INSPEKSI DAN PENGUJIAN DAN KRITERIA PENERIMAANNYA </h1>
    <h1> 13. DAFTAR DOKUMEN SISTEM MANAJEMEN MUTU  </h1>
    <h1> 14. DAFTAR INDUK REKAMAN  </h1>
    </body>

    </html>
    ';

    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L', 'default_font' => 'Arial']);

    // $mpdf->showImageErrors = true;
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

    
    $mpdf->SetProtection(array('print'));
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
    
    /*  ADD TABLE OF CONTENT*/ 
    // $mpdf->SetHeaderByName('MyHeader1');
    // $mpdf->WriteHTML('Introduction of document...');
    // $mpdf->TOCpagebreak (
    //     '', '', '', '', '', '', '', '', '', '', '', '', 
    //     'MyTOCHeader', '', 'MyTOCFooter', '', 1, 0 , 1, 0, 
    //     '', '', '', '', '', '', '', '', '', '', '', '', '', 
    //     'MyHeader2', '', 'MyFooter2', '', 1, 0,  1,0
    // );

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

  public function printRMPLInternal($id){
    $row = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
    $data = $this->ModelKegiatan->selectAllKegiatanById($id)->row_array();
    $data2['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
    $data2['all'] = $this->ModelRMPRoles->selectByIdRMP($data2['row']['id'])->result_array();
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
                    <img src="' . base_url() . 'assets/images/footer-pdf.jpg"/> <font face="Brush Script MT">Pertajam Strategi Ciptakan Inovasi</font>
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
            <body>
              <div style="text-align: center; font-family: Arial; font-size: 14; line-height: 2.0">
                <b>SATUAN KERJA BALAI LITBANG SUNGAI</b>
              </div>
              <table border="1" style="font-size: 10;" width=100%>
                    <tbody style="vertical-align: text-top;">
                    <tr>
                      <td width=35%>No. Dok.: RMP/PUSAIR/BLSUNGAI/01-02<br>No. Rev. : 00</td>
                      <td style="text-align: top" width=50%>Tgl. Diterbitkan : 26 Januari 2018</td>
                      <td>Hal : 1/{nb}<br>Paraf :</td>
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
    p { margin: 0pt; 
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


    $content = '
    <body>
    
    <h1> 1. UMUM </h1>
      <h2> 1.1 Latar Belakang</h2>
        <p>'.$row['latar'].'</p>
      <h2> 1.2 Tujuan</h2>
        <p>'.$row['tujuan'].'</p>
    <h1> 2. INFORMASI KEGIATAN </h1>
      <h2> 2.1 Judul Kegiatan dan Sumber Penganggaran</h2>
        <p>'.$row['juduldansumber'].'</p>
      <h2> 2.2 Lingkup Kegiatan</h2>
        <p>'.$row['lingkup'].'</p>
      <h2> 2.3 Lokasi Kegiatan</h2>
        <p>'.$row['lokasi'].'</p>
      <h1> 3. SASARAN KEGIATAN </h1>
      <h2> 3.1 Sasaran Kegiatan <i>(Output)</i></h2>
        <p>'.$row['sasarankeluaran'].'</p>
      <h2> 3.2 Sasaran Mutu</h2>
        <p>'.$row['sasaranmutu'].'</p>
    <h1> 4. PERSYARATAN TEKNIS DAN ADMINISTRASI </h1>
      <h2> 4.1 Persyaratan Teknis</h2>
        <p>'.$row['persyaratanteknis'].'</p>
      <h2> 4.2 Persyaratan Administrasi</h2>
        <p>'.$row['persyaratanadministrasi'].'</p>
    <h1> 5. STRUKTUR ORGANISASI </h1>
    <div style="text-align: center">
       <img src="' . base_url() . 'assets/uploads/strukturorg/'.$row['strukturorg'].'" style="width: 550px; height: 400px; margin-left: 30px" />
        <h5><b>Gambar 2.</b> Struktur Organisasi Kegiatan</h5>
    </div>
    <h1> 6. TUGAS, TANGGUNG JAWAB DAN WEWENANG  </h1>
       <p></p>
    <h1> 7. KEBUTUHAN SUMBER DAYA  </h1>
      <h2> 7.1 Sumber Daya Manusia</h2>
      <h2> 7.2 Sumber Daya Keuangan</h2>
      <h2> 7.3 Sarana dan Prasarana</h2>
        <p>'.$row['prasarana'].'</p>
      <h2> 7.4 Lingkungan</h2>
        <p>'.$row['lingkungan'].'</p>
    <h1> 8. BAGAN ALIR PELAKSANAAN KEGIATAN </h1>
    <div style="text-align: center">
        <img src="' . base_url() . 'assets/uploads/baganalir/'.$row['baganalir'].'" style="width: 550px; height: 400px; margin-left: 30px" />
        <h5><b>Gambar 2.</b> Struktur Organisasi Kegiatan</h5>
    </div>
    <h1> 9. JADWAL PELAKSANAAN KEGIATAN </h1>
    <h1> 10. JADWAL PERSONIL </h1>
    <h1> 11. JADWAL PENGGUNAAN PRASARANA DAN SARANA  </h1>
    <h1> 12. RENCANA DAN METODE VERIFIKASI, VALIDASI, MONITORING, EVALUASI, INSPEKSI DAN PENGUJIAN DAN KRITERIA PENERIMAANNYA </h1>
    <h1> 13. DAFTAR DOKUMEN SISTEM MANAJEMEN MUTU  </h1>
    <h1> 14. DAFTAR INDUK REKAMAN  </h1>
    </body>

    </html>
    ';

    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L', 'default_font' => 'Arial']);

    // $mpdf->showImageErrors = true;
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

    
    $mpdf->SetProtection(array('print'));
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
    
    /*  ADD TABLE OF CONTENT*/ 
    // $mpdf->SetHeaderByName('MyHeader1');
    // $mpdf->WriteHTML('Introduction of document...');
    // $mpdf->TOCpagebreak (
    //     '', '', '', '', '', '', '', '', '', '', '', '', 
    //     'MyTOCHeader', '', 'MyTOCFooter', '', 1, 0 , 1, 0, 
    //     '', '', '', '', '', '', '', '', '', '', '', '', '', 
    //     'MyHeader2', '', 'MyFooter2', '', 1, 0,  1,0
    // );

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
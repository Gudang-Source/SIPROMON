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
        '.strtoupper($row['judul']).'
        </b>
        <div style="text-align: center; font-family: Calibri; font-size: 12;">
          <b>TAHUN ANGGARAN '.$row['tahun_anggaran'].'</b>
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
        <td>'.$kapus.'</td>
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
  </html>
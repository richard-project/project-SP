<html>
    <head>



        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>KARUNIKA</title>
     
      <style type="text/css">
         @page  { margin: .5in; }
         .bg { 
          bottom: -.6in; 
          right: 1in;  
          left: -0.05in; 
          position: absolute; 
          z-index: -1000; 
          min-width: 4in; 
          min-height: 5.6in; 
          opacity: 0.5; 
          width: 100px;
          height: 100px;
        }


  .tb {
  font-family: Comic, sans-serif;
  border-collapse: collapse;
  width: 55%;
}





      </style>

    </head>
   <body> 
   <img class="bg" src="../public/images/karunika.jpg" alt="">

    <table style="width: 55%" style="border-style: hidden;">
        <thead>
             <tr style=" font-family: monospace; font-family:Comic" style="border-style: hidden;">
                <th style="text-decoration: underline;font-family:Comic; font-size:10px;" style="border-style: hidden;">TANDA TERIMA POTONGAN KOPERASI KARUNIKA</th>
                <td style="font-family:Comic; font-size:10px;text-align:right;" style="border-style: hidden;"> 11</td>
              </tr>
              <tr>
                 <th style="font-size: 10px;text-align: " ><i>U N I T</i></th>
                 <td style="font-size: 10px;text-align:right;" > K01803</td>
              </tr>
               <tr>
                 <td style="font-size: 10px" >Telah diterima dari Bp./Ibu: nama lengkap</td>
               </tr>
        </thead>
      </table>
<?php
function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);
  
  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun
 
  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
 
 
?>
  <table class="tb">
  <tr style=" font-family:Comic;font-size: 10px">
                <th colspan="6" style="border: 0.2px solid;padding: 2px;font-size: 10px;text-align: center;background-color: rgb(169,169,169); opacity:0.8" >Daftar Tagihan</th>
            </tr>

            <tr style=" font-family:Comic">
                <td  colspan="5" style="border: 0.2px solid;padding: 2px;font-size: 10px"; >Simpanan Wajib</td>
                <td  colspan="" style="border: 0.2px solid;padding: 2px;font-size: 10px;text-align: right;">200.000 </td>
            </tr>

            <tr style=" font-family:Comic;font-size: 10px">
                <th style="text-align: center;border: 0.2px solid;padding: 2px;background-color: rgb(169,169,169); opacity: 0.8">Ang. Pinjaman</th>
                <th style="text-align: center;border: 0.2px solid;padding: 2px;background-color: rgb(169,169,169); opacity: 0.8">Ke</th>
                <th style="text-align: center;border: 0.2px solid;padding: 2px;background-color: rgb(169,169,169); opacity: 0.8">Dari</th>
                <th style="text-align: center;border: 0.2px solid;padding: 2px;background-color: rgb(169,169,169); opacity: 0.8">Sisa(Rp.)</th>
                <th style="text-align: center;border: 0.2px solid;padding: 2px;background-color: rgb(169,169,169); opacity: 0.8">Bunga(Rp.)</th>
                <th style="text-align: right;border: 0.2px solid;padding: 2px;background-color: rgb(169,169,169); opacity: 0.8">Jumlah(Rp.)</th>
            </tr>

            <tr style=" font-family:Comic;font-size: 10px">
                <td style="text-align: center;border: 0.2px solid;padding: 2px;">-Regular</td>
                <td style="text-align: center;border: 0.2px solid;padding: 2px;">12</td>
                <td style="text-align: center;border: 0.2px solid;padding: 2px;">20</td>
                <td style="text-align: right;border: 0.2px solid;padding: 2px;">9.000.000</td>
                <td style="text-align: right;border: 0.2px solid;padding: 2px;">90.000</td>
                <td style="text-align: right;border: 0.2px solid;padding: 2px;">1.090.000</td>
            </tr>

            <tr style=" font-family:Comic;font-size: 10px">
                <th style="text-align: center;border: 0.2px solid;padding: 2px;background-color: rgb(169,169,169); opacity: 0.8">Kredit Barang</th>
                <th style="text-align: center;border: 0.2px solid;padding: 2px;background-color: rgb(169,169,169); opacity: 0.8">Ke</th>
                <th style="text-align: center;border: 0.2px solid;padding: 2px;background-color: rgb(169,169,169); opacity: 0.8">Dari</th>
                <th style="text-align: center;border: 0.2px solid;padding: 2px;background-color: rgb(169,169,169); opacity: 0.8">Sisa(Rp.)</th>
                <th style="text-align: right;border: 0.2px solid;padding: 2px;background-color: rgb(169,169,169); opacity: 0.8"  colspan="2">Jumlah(Rp.)</th>
            </tr>
            <tr style=" font-family:Comic;font-size: 10px">
                <td style="text-align: center;border: 0.2px solid;padding: 2px;">- Barang 1</td>
                <td style="text-align: center;border: 0.2px solid;padding: 2px;">6</td>
                <td style="text-align: center;border: 0.2px solid;padding: 2px;">24</td>
                <td style="text-align: right;border: 0.2px solid;padding: 2px;">18.337.904 </td>
                <td style="text-align: right;border: 0.2px solid;padding: 2px;"  colspan="2">1.018.766 </td>
            </tr>
            <tr style=" font-family:Comic;font-size: 10px">
                <td style="text-align: center;border: 0.2px solid;padding: 2px;">- Barang 2</td>
                <td style="text-align: center;border: 0.2px solid;padding: 2px;">0</td>
                <td style="text-align: center;border: 0.2px solid;padding: 2px;">0</td>
                <td style="text-align: right;border: 0.2px solid;padding: 2px;">0 </td>
                <td style="text-align: right;border: 0.2px solid;padding: 2px;"  colspan="2">0 </td>
            </tr>

            <tr style=" font-family:Comic;font-size: 10px">
                <th style="text-align: left;border: 0.2px solid;padding: 2px;background-color: rgb(169,169,169); opacity: 0.8" colspan="4">Tagihan Lain</th>
                <th style="text-align: right;border: 0.2px solid;padding: 2px;background-color: rgb(169,169,169); opacity: 0.8" colspan="2">Jumlah(Rp.)</th>
            </tr>

            <tr style=" font-family:Comic;font-size: 10px">
                <td style="text-align: center;border: 0.2px solid;padding: 2px;" colspan="4">-</td>
                <td style="text-align: right;border: 0.2px solid;padding: 2px;" colspan="2">0</td>
            </tr>
            <tr style=" font-family:Comic;font-size: 10px">
                <td style="text-align: center;border: 0.2px solid;padding: 2px;" colspan="4">-</td>
                <td style="text-align: right;border: 0.2px solid;padding: 2px;" colspan="2">0</td>
            </tr>
</table>

<table style="width: 55%" >

 <tr style="font-family: monospace; font-size: 10px ;font-family:Comic;">
                <th style="text-align: right;border-style: ;" colspan="6"></th>
            </tr>

            <tr style="font-family: monospace; font-size: 10px ;font-family:Comic">
                <th style="text-align: right;border-style: hidden;" colspan="1">&nbsp;</th>
                <th style="text-align: right;border-style: hidden;" colspan="1">&nbsp;</th>
                <th style="text-align: right;border-style: hidden;" colspan="1">&nbsp;</th>
                <th style="text-align: right;border-style: hidden;" colspan="3">Jumlah</th>
                <th style="text-align: right;border-style:hidden;text-decoration: underline;" colspan="1">2.308.766</th>
            </tr>

</table>


</table>

      <table >
        <tr style="font-family: monospace; font-size: 10px ;font-family:Comic">
                <td style="text-align: left;border-style: hidden;" colspan="3"><p> Jumlah simpanan s.d <?php echo tgl_indo(date('Y-m-D'));  ?> </td>
            </tr> 

            <tr style="font-family: monospace; font-size: 10px ;font-family:Comic">
                 <td style="text-align: left;border-style: hidden;" colspan="3">* Pokok </td>
                 <td style="text-align: left;border-style: hidden;" colspan="1" >Rp. 20.000</td>
              </tr>

               <tr style="font-family: monospace; font-size: 10px ;font-family:Comic">
                 <td style="text-align: left;border-style: hidden;" colspan="3" >* Wajib</td>
                 <td style="text-align: left;border-style: hidden;" colspan="1" >Rp. 10.000</td>
               </tr>

               <tr style="font-family: monospace; font-size: 10px ;font-family:Comic">
                 <td style="text-align: left;border-style: hidden;" colspan="3">* Sukarela</td>
                  <td style="text-align: left;border-style: hidden;" colspan="1" >Rp. 20.000</td>
               </tr>

               <tr style="font-family: monospace; font-size: 10px ;font-family:Comic">
                  <td style="text-align: left;border-style: hidden;" colspan="3" > </td>
                                </tr>

                <tr style="font-family: monospace; font-size: 10px ;font-family:Comic">
                  
                  <td style="text-align: right;border-style: hidden;" colspan="3" >=&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td style="text-align: left;border-style: hidden;text-decoration: underline;" colspan="1"><p>Rp. 50.000</td>
                    <td style="text-align: left;border-style: hidden;" colspan="2"><p> </td>
                </tr> 
      </table>

<table style="width: 55%" style="border: 1px solid transparent">
        <thead>
             <tr style=" font-family: monospace; font-family:Comic">
                <td colspan="4" style="font-family:Comic; font-size:10px; text-align: right"> Jakarta, <?php echo tgl_indo(date('Y-m-d'));  ?></td>
              </tr>
              <tr>
                <td style="font-size: 10px" ></td>
              </tr>

              <tr>
                <td colspan="4" style="text-decoration: underline;font-size: 10px;text-align: left;" > Catatan:</td>   
              </tr>
              <tr>
                  <td colspan="4" style="font-size: 10px;text-align: left;" > Apabila terdapat kesalahan</td>
              </tr>
               <tr>
                  <td colspan="1" style="font-size: 10px;text-align: left;" > akan diadakan perbaikan</td>
                  <td colspan="3" style="text-decoration: underline;font-size: 10px;text-align: right" >Nama Lengkap S.Kom</td>
               </tr>
               <tr>
                 <td colspan="4" style="font-size: 10px;text-align: right;font-family: Comic" > NIP. 111111111122222222</td>
               </tr>
        </thead>
      </table>




    </body>

    
</html>

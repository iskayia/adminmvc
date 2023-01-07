<script>
  function printDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;

      window.print();

      document.body.innerHTML = originalContents;// kerprint deh o kfinsih
  }
</script>
<div class="container d-flex justify-content-center">
            <div class="row col-md-12 d-flex justify-content-center" id="PRINTLAPORAN"><!-- disini dipakai in id biar tau nnti mau print ID div yang mana-->
                    <div align="center" style="width:100%" >
<!--                                 <table>
                                    <tr>
                                        <td>
                                           <img src="../assets/img/logolp3i2.png" width="7%" style="position: absolute; left: 30px; margin-top: -3px;"> 
                                        </td>
                                    </tr>

                                
                                </table> -->


                        <h3 style="font-weight: bold;" >LAPORAN KEUANGAN</h3>
                        <H3 style="font-weight: bold;">TOKO FITRI PARFUM</H3>
                        <H3 style="font-weight: bold;">TANGERANG</H3>
                        <p>Jalan Blokeng RT 04 RW 03 Serdang Wetan Legok, Kabupaten Tangerang,
                            Serdang Wetan, Kec. Legok, Kabupaten Tangerang, Banten 15820.
                            Office (021) 12345678 </p>
                    
                        <hr>
                    </div>
                    <table class=" table table-bordered display nowrap fixed" id="tabel-data" style="font-size: 16px; " id="tabel-data" >
                                                <col width="90px">
                                                <col width="150px">
                                                <col width="150px">
                                                <col width="150px">
                                                <thead>
                                                    <tr align="center">
                                                        <th>No</th>
                                                        <th>Nama Produk</th>
                                                        <th>Tanggal Penjualan</th>
                                                        <th>Jumlah Penjualan</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1 ?>
                                                    <?php
                                                    foreach ($keuangan as $s) {
                                                    ?>
                                                        <tr>
                                                            <td align="center"><?= $i++; ?></td>
                                                            <td align="center"><?= $s["nama_produk"]; ?></td>
                                                            <td align="center"><?= $s["tgl_penjualan"]; ?></td>
                                                            <td align="center"><?= $s["jumlah_penjualan"]; ?></td>
                                                            
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?> 
                                                    <tr>
                                                            <td align="center"></td>
                                                            <td align="center"></td>
                                                            <td align="center"></td>
                                                            <td align="center"></td>

                                                        </tr>
                                                </tbody>
                                            </table>
                    <br>
                    
                    <table width="100%">
                        <tr>
                            <td></td>
                            <td width="200px">
                                <p>Tangerang, <?php echo date('d F Y'); ?><br>Admin Gudang,</p>
                                <br>
                                <br>
                                <br>
                                <p>_________________________</p>
                            </td>
                        </tr>   
                    </table>
                    <br>
        

            </div>
            
    </div>

</div>
<div align="center" style="margin-bottom: 40px">
                        <a href="#" onclick="printDiv('PRINTLAPORAN');" class="btn btn-primary btn-lg no-print">
                            <i class="fa fa-print" aria-hidden="true"></i> Print 
                        </a> <!-- PRINNYA TAROH DILUAR, div yang id nya PRINTLAPORAN kemudian panggil fungsi printDiv -->
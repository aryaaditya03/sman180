
<!-- Main Content -->
<div id="content-wrapper">
    <div class="container-fluid">
            <?php echo $this->session->flashdata('messageEmail');?>
                <div class="card shadow-sm mb-5">
                    <div class="card-body">
                        <div class="mb-2">
                        </div>
                        <?php 
                            if($current_user->statuspembayaran == 'Lunas')
                            { if($current_user->jurusan == 'IPA') {
                                ?>
                                    <h3 align="center" class="font-weight-bold">JADWAL SEKOLAH IPA</h3>
                                    <hr>
                                    <table border="1" bgcolor="white" width="100%" cellspacing="0" cellpadding="5" class="mb-4">
                                    <tr>
                                        <th rowspan="2"><h5 align="center" class="font-weight-bold">Jam</h5></th>
                                        <th rowspan="2"><h5 align="center" class="font-weight-bold">Waktu</h5></th>
                                        <th colspan="5"><h4 align="center" class="font-weight-bold">Nama Hari</h4></th>
                                        
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td class="font-weight-bold">Senin</td>
                                        <td class="font-weight-bold">Selasa</td>
                                        <td class="font-weight-bold">Rabu</td>
                                        <td class="font-weight-bold">Kamis</td>
                                        <td class="font-weight-bold">Jum'at</td>
                                    </tr>
                                    <tr>
                                        <td >1</td>
                                        <td >06.45 - 07.30</td>
                                        <td >Upacara</td>
                                        <td >Pendidikan Agama Islam</td>
                                        <td >PPKN</td>
                                        <td >Ekonomi</td>
                                        <td >Biologi</td>
                                    </tr>
                                    <tr>
                                        <td >2</td>
                                        <td >07.30 - 08.30</td>
                                        <td >Biologi</td>
                                        <td >Matematika Umum</td>
                                        <td >Prakarya</td>
                                        <td >Kimia</td>
                                        <td >Bahasa Inggris</td>
                                    </tr>
                                    <tr>
                                        <td >3</td>
                                        <td >08.30 - 09.30</td>
                                        <td >Bahasa Indonesia</td>
                                        <td >Kimia</td>
                                        <td >Biologi</td>
                                        <td >Penjaskes</td>
                                        <td >Matematika</td>
                                    </tr>
                                    <tr>
                                        <td >4</td>
                                        <td >09.30 - 10.00</td>
                                        <td colspan="5" class="text-center text-white font-weight-bold bg-info">ISTIRAHAT</td>
                                    </tr>
                                    <tr>
                                        <td >5</td>
                                        <td >10.00 - 11.20</td>
                                        <td >Bahasa Indonesia</td>
                                        <td >Kimia</td>
                                        <td >Biologi</td>
                                        <td >Penjaskes</td>
                                        <td >Bahasa Indonesia</td>
                                    </tr>
                                    <tr>
                                        <td >6</td>
                                        <td >11.20 - 11.50</td>
                                        <td >Bahasa Indonesia</td>
                                        <td >Kimia</td>
                                        <td >Matematika</td>
                                        <td >Pendidikan Agama Islam</td>
                                        <td >Fisika</td>
                                    </tr>
                                    <tr>
                                        <td >7</td>
                                        <td >11.50 - 12.45</td>
                                        <td colspan="5" class="text-center text-white font-weight-bold bg-info">ISOMA</td>
                                    </tr>
                                    <tr>
                                        <td >8</td>
                                        <td >12.45 - 13.45</td>
                                        <td >Fisika</td>
                                        <td >Ekonomi</td>
                                        <td >Biologi</td>
                                        <td >Bimbingan Konseling</td>
                                        <td >Fisika</td>
                                    </tr>
                                    <tr>
                                        <td >9</td>
                                        <td >13.45 - 14.50</td>
                                        <td >Fisika</td>
                                        <td >Ekonomi</td>
                                        <td >Biologi</td>
                                        <td >Matematika Umum</td>
                                        <td >Kimia</td>
                                    </tr>
                                    <tr>
                                        <td >10</td>
                                        <td >15.00</td>
                                        <td colspan="5" class="text-center text-white font-weight-bold bg-info">PULANG</td>
                                    </tr>
                                </table>
                                <?php
                            } else if($current_user->jurusan == 'IPS'){
                                ?>
                                    <h3 align="center" class="font-weight-bold">JADWAL SEKOLAH IPS</h3>
                                    <hr>
                                    <table border="1" bgcolor="white" width="100%" cellspacing="0" cellpadding="5" class="mb-4">
                                    <tr>
                                        <th rowspan="2"><h5 align="center" class="font-weight-bold">Jam</h5></th>
                                        <th rowspan="2"><h5 align="center" class="font-weight-bold">Waktu</h5></th>
                                        <th colspan="5"><h4 align="center" class="font-weight-bold">Nama Hari</h4></th>
                                        
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td class="font-weight-bold">Senin</td>
                                        <td class="font-weight-bold">Selasa</td>
                                        <td class="font-weight-bold">Rabu</td>
                                        <td class="font-weight-bold">Kamis</td>
                                        <td class="font-weight-bold">Jum'at</td>
                                    </tr>
                                    <tr>
                                        <td >1</td>
                                        <td >06.45 - 07.30</td>
                                        <td >Upacara</td>
                                        <td >Pendidikan Agama Islam</td>
                                        <td >PPKN</td>
                                        <td >Ekonomi</td>
                                        <td >Biologi</td>
                                    </tr>
                                    <tr>
                                        <td >2</td>
                                        <td >07.30 - 08.30</td>
                                        <td >Biologi</td>
                                        <td >Matematika Umum</td>
                                        <td >Prakarya</td>
                                        <td >Kimia</td>
                                        <td >Bahasa Inggris</td>
                                    </tr>
                                    <tr>
                                        <td >3</td>
                                        <td >08.30 - 09.30</td>
                                        <td >Bahasa Indonesia</td>
                                        <td >Kimia</td>
                                        <td >Biologi</td>
                                        <td >Penjaskes</td>
                                        <td >Matematika</td>
                                    </tr>
                                    <tr>
                                        <td >4</td>
                                        <td >09.30 - 10.00</td>
                                        <td colspan="5" class="text-center text-white font-weight-bold bg-primary">ISTIRAHAT</td>
                                    </tr>
                                    <tr>
                                        <td >5</td>
                                        <td >10.00 - 11.20</td>
                                        <td >Bahasa Indonesia</td>
                                        <td >Kimia</td>
                                        <td >Biologi</td>
                                        <td >Penjaskes</td>
                                        <td >Bahasa Indonesia</td>
                                    </tr>
                                    <tr>
                                        <td >6</td>
                                        <td >11.20 - 11.50</td>
                                        <td >Bahasa Indonesia</td>
                                        <td >Kimia</td>
                                        <td >Matematika</td>
                                        <td >Pendidikan Agama Islam</td>
                                        <td >Fisika</td>
                                    </tr>
                                    <tr>
                                        <td >7</td>
                                        <td >11.50 - 12.45</td>
                                        <td colspan="5" class="text-center text-white font-weight-bold bg-primary">ISOMA</td>
                                    </tr>
                                    <tr>
                                        <td >8</td>
                                        <td >12.45 - 13.45</td>
                                        <td >Fisika</td>
                                        <td >Ekonomi</td>
                                        <td >Biologi</td>
                                        <td >Bimbingan Konseling</td>
                                        <td >Fisika</td>
                                    </tr>
                                    <tr>
                                        <td >9</td>
                                        <td >13.45 - 14.50</td>
                                        <td >Fisika</td>
                                        <td >Ekonomi</td>
                                        <td >Biologi</td>
                                        <td >Matematika Umum</td>
                                        <td >Kimia</td>
                                    </tr>
                                    <tr>
                                        <td >10</td>
                                        <td >15.00</td>
                                        <td colspan="5" class="text-center text-white font-weight-bold bg-primary">PULANG</td>
                                    </tr>
                                </table>
                                <?php
                            }
                            } else if($current_user->statuspembayaran == 'Belum')
                                {
                                    ?>
                                        <div class="text-center">
                                            <i class="fas fa-lock fa-2x text-dark-300"></i><span class="h3 ml-3">HARAP MELAKUKAN PEMBAYARAN!</span>
                                        </div>
                                    <?php
                                 }
                        ?>
                    
                       

                </div>
</div>
</div>
</div>
</div>
</div>
</div>
    










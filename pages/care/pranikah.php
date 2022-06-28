<div class="content">
                        <section class="parallax-section header-section" data-scrollax-parent="true" id="sec1">
                            <div class="bg"  data-bg="assets/images/bg/gpdi.png" data-scrollax="properties: { translateY: '200px' }"></div>
                           
                            <div class="container big-container">
                                <div class="section-title">
                                    <h3>GPdI Bukit Hermon</h3>
                                    <div class="separator trsp-separator"></div>
                                    <h2>Pra Nikah</h2>
                                    <a href="#sec2" class="custom-scroll-link sect-scroll-link"><i class="fa fa-long-arrow-down"></i> <span>scroll down</span></a>
                                </div>
                            </div>
                        </section>
                        <section id="sec2" data-scrollax-parent="true" >
                            <div class="container">
                                <div class="section-container fl-wrap">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="content-wrap about-wrap">
                                            <h3 class="bold-title">Formulir Pra Nikah</h3>
                                            <form>
                                                <p class="form-group">
                                                    <label for="nama">Nama Lengkap <b>*</b></label><br>
                                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda" autofocus>
                                                </p>
                                                <p class="form-group">
                                                    <label for="alamat">Alamat <b>*</b></label><br>
                                                    <textarea rows=3 class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Anda"></textarea>
                                                </p>
                                                <p class="form-group">
                                                    <label for="telepon">Telepon <b>*</b></label><br>
                                                    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukkan Telepon Anda" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" >
                                                </p>
                                                <p class="form-group">
                                                    <label for="komsel">KeBun (Komsel) <b>*</b></label><br>
                                                    <select class="form-control" id="komsel" name="komsel">
                                                        <?php
                                                            $data = mysqli_query($koneksi,"SELECT * FROM wb_komsel WHERE id=30 AND deleted=0");
                                                            while($d = mysqli_fetch_array($data)){
                                                                echo "<option value='".$d['id']."|".$d['komsel']."'>".$d['komsel']."</option>";
                                                            }

                                                            $data = mysqli_query($koneksi,"SELECT * FROM wb_komsel WHERE id<>30 AND deleted=0 ORDER BY komsel ASC");
                                                            while($d = mysqli_fetch_array($data)){
                                                                echo "<option value='".$d['id']."|".$d['komsel']."'>".$d['komsel']."</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </p>
                                                <p class="form-group">
                                                    <label for="keterangan">Keterangan Permintaan <b>*</b></label><br>
                                                    <textarea rows=5 class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan Permintaan Anda"></textarea>
                                                </p>
                                                <p>
                                                    <button type="button" class='button-submit' onclick="Send()">Kirim</button>
                                                    <a href='index.php?p=care' type="button" class='button-reset'>Kembali</a>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <div class="bg dec-bg left-pos-dec"  data-bg="assets/images/bg/14.jpg"></div> -->
                        </section>
                            <div class="partcile-dec"></div>
                            <div class="border-section-wrap">
                                <div class="border-section"></div>
                            </div>
                        </section>
                        <div class="limit-box fl-wrap"></div>
                    </div>

<script>
    function Send() {
        var nama = $('#nama').val();
        var alamat = $('#alamat').val();
        var telepon = $('#telepon').val();
        var keterangan = $('#keterangan').val();

        var pesan = '';

        if(keterangan == ''){
            pesan = 'Keterangan Permintaan Kosong';
            $('#keterangan').focus();
        }

        if(telepon == ''){
            pesan = 'Telepon Kosong';
            $('#telepon').focus();
        }

        if(alamat == ''){
            pesan = 'Alamat Kosong';
            $('#alamat').focus();
        }

        if(nama == ''){
            pesan = 'Nama Lengkap Kosong';
            $('#nama').focus();
        }

        if(pesan == ''){
            var FormData = "nama="+$('#nama').val();
                FormData += "&alamat="+$('#alamat').val();
                FormData += "&telepon="+$('#telepon').val();
                FormData += "&komsel="+$('#komsel').val();
                FormData += "&keterangan="+$('#keterangan').val();
                
            $.ajax({
                url: "pages/care/simpan_pranikah.php",
                type: "POST",
                cache: false,
                data: FormData,
                dataType:'json',
                beforeSend :function () {
                    Swal.fire({
                            title: 'Loading',
                            html: 'Process data',
                            didOpen: () => {
                                swal.showLoading()
                            }
                        })      
                    },
                success: function(data){
                    console.log(data);
                    if(data.status == 1)
                    {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Berhasil Terkirim',
                            showConfirmButton: false,
                            timer: 1500
                        }).then((result) => {
                            window.location.href="index.php?p=care";
                        })
                    }
                    else 
                    {
                        // 
                    } 
                }
            });
        }else{
            Swal.fire(
                'ERROR',
                pesan,
                'error'
            )
        }
    }
</script>
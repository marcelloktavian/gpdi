<style>
table, td {
  border: 1px solid;
  padding: 3px;
  font-size: 15px;
}

thead {
    background:#292929;
}
table {
  width: 100%;
  border-collapse: collapse;
}
.headernya{
    color:white;
}
</style>
<div class="content">
                        <!--  section --> 
                        <section class="parallax-section header-section" data-scrollax-parent="true" id="sec1">
                            <div class="bg"  data-bg="assets/images/bg/gpdi.png" data-scrollax="properties: { translateY: '200px' }"></div>
                           
                            <div class="container big-container">
                                <div class="section-title">
                                    <h3>GPdI Bukit Hermon</h3>
                                    <div class="separator trsp-separator"></div>
                                    <h2>Our Community</h2>
                                    <!-- <p>Curabitur bibendum mi sed rhoncus aliquet. Nulla blandit porttitor justo, at posuere sem accumsan nec.</p> -->
                                    <a href="#sec2" class="custom-scroll-link sect-scroll-link"><i class="fa fa-long-arrow-down"></i> <span>scroll down</span></a>
                                </div>
                            </div>
                        </section>
                        <!--  section end--> 
                        <!--  section  --> 
                        <section id="sec2" data-scrollax-parent="true" >
                            <div class="container">
                                <div class="section-container fl-wrap">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="content-wrap about-wrap">
                                            <h3 class="bold-title">Our Community</h3>
                                            <p>Keluarga Bukit Hermon atau yang sebelumnya dikenal dengan nama komsel (komunitas sel), biasanya berjumlah kurang lebih sekitar 12-18 orang, dan dipimpin oleh seorang Kepala Keluarga (KK).
												<!-- <a href="index.php?p=lokasikebun"><b>Klik Lokasi KeBun terdekat</b>.</a></p> -->
                                            <table id='tbl-community' class="display" style="width:100%">
                                                <thead>
                                                    <td><span class='headernya'>KeBun</span></td>
                                                    <td><span class='headernya'>Wilayah</span></td>
                                                </thead>
                                               <?php
                                               $no=1;
                                                $data = mysqli_query($koneksi,"select * from wb_komsel where id <> 30 and deleted=0");
                                                while($d = mysqli_fetch_array($data)){
                                                    ?>
                                                    <tr>
                                                        <td><?=$d['komsel']?></td>
                                                        <td><?=$d['wilayah']?></td>
                                                </tr>
                                                    <?php
                                                $no++;

                                                }
                                               ?>
                                            </table>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <!-- <div class="box-item">
                                                <img  src="assets/images/team/6.jpg"  class="respimg" alt="">
                                               
                                                <a href="assets/images/team/6.jpg" class="image-popup popup-image"><i class="fa fa-search"  ></i></a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <div class="bg dec-bg left-pos-dec"  data-bg="assets/images/bg/14.jpg"></div> -->
                        </section>
                        <!--  section end--> 
                        
                            <div class="partcile-dec"></div>
                            <div class="border-section-wrap">
                                <div class="border-section"></div>
                            </div>
                        </section>
                       
                        <!--  section end--> 
                        <div class="limit-box fl-wrap"></div>
                    </div>

<script>
$(document).ready(function() {
    $('#tbl-community').DataTable({"bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false});
} );
</script>
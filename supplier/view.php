 <div class="row">
     <div class="col-12">
         <div class="card">
             <div class="card-header row">
                 <div class="card-title h3 col-8">Data Supplier</div>
                 <div class="col-4">
                     <a href="?m=supplier&s=add" class="btn btn-lg btn-primary float-end">Tambah</a>
                 </div>
             </div>

             <div class="card-body">
                 <table class="table table-bordered table-striped table-hover">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Nama</th>
                             <th>Alamat</th>
                             <th>Nomor Telepon</th>
                             <th>Email</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php
                            include_once('config.php');
                            $sql = "SELECT * FROM suppliers";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result)) {
                                $no = 1;
                                while ($r = mysqli_fetch_assoc($result)) {
                                    echo '<tr>
                                    <td>' . $no . '</td>
                                    <td>' . $r['name'] . '</td>
                                    <td>' . $r['address'] . '</td>
                                    <td>' . $r['phone'] . '</td>
                                    <td>' . $r['email'] . '</td>
                                    <td>
                                        <a href="?m=supplier&s=edit&id=' . $r['id'] . '" class="btn btn-lg btn-warning btn-sm">Edit</a>
                                        <a href="?m=supplier&s=delete&id=' . $r['id'] . '" class="btn btn-lg btn-danger btn-sm" onclick="return confirm(\'Seriussan..!? Oalahhh, yaudah. Tapi, Menghapus supplier akan menghilangkan semua data supplier pada supplier tersebut.\')">Hapus</a>
                                        
                                    </td>
                                </tr>';
                                    $no++;
                                }
                            } else {
                                echo '<tr>
                                    <td colspan="8" align="center">Data Kosong</td>
                                </tr>';
                            }

                            ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>
 </div>

                        <?php
                          include "../../config/config.php";
  open_connection();
  $query="select * from album where status_display=1 order by waktu desc ";
        $result=  mysql_query($query) or die(mysql_error());
           while ($row=  mysql_fetch_object($result)){
                $id_album=$row->id_album;
                $nama_album=  substr($row->nama_album,0,12);
                $waktu=$row->waktu;
               
                $query_jml   = "SELECT COUNT(*) AS jumData FROM foto where album=$id_album and status_display=1";
                            
                  $hasil  = mysql_query($query_jml) or die(mysql_error());
                  $data     = mysql_fetch_array($hasil);

                  $jumData = $data['jumData'];
                  ?>
                          <div class="col-md-4" style="margin-bottom: 10px;">
                        <div class="inaCor-album">
                             <a href="<?php echo $base_url; ?>aboutIna/imaging_ina_view.php?album=<?=$id_album?>" >
                            <img src="<?php echo $base_url; ?>public_assets/album/sample_thumbs.jpg" >
                        </a>
                        <div class="caption_album">
                            <a href="<?php echo $base_url; ?>aboutIna/imaging_ina_view.php?album=<?=$id_album?>"><?=$nama_album?>..</a>
                            <p class="text-muted"><?=$jumData?> photos</p>
                        </div>
                        </div>
                    </div>
                       
                       <?php
           }
                        ?>
                          
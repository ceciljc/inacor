<?php
  include "../../config/config.php";
  open_connection();
  $album=$_GET[album];
  $query="select * from album where id_album='$album' and status_display=1 limit 1";
        $result=  mysql_query($query) or die(mysql_error());
           while ($row=  mysql_fetch_object($result)){
                $id_album=$row->id_album;
                $nama_album=  substr($row->nama_album,0,12);
                $waktu=$row->waktu;
           }
               
                  ?>

<h3>Album <?=$nama_album?></h3>

<?php
$query="select * from foto where album='$album'  and status_display=1";
//echo $query;
        $result=  mysql_query($query) or die(mysql_error());
           while ($row=  mysql_fetch_object($result)){
                $nama_file=$row->nama_file;
                $ket=$row->ket;
                $lokasi=$base_url."/album/$album/$nama_file";
                ?>
                     
                <div id="links">
					<div class="col-md-4">
                        <a href="<?php echo $lokasi; ?>" data-gallery>
                            <img src="<?php echo $lokasi; ?>" class="img-responsive inaCor-gallery">
                        </a>
                    </div>
                    
                </div>
                     <?php
           }
?>
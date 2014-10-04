 <a href="#" class="pull-right more"><i class="glyphicon glyphicon-plus"></i> See all</a>
                    <div class="clearfix"></div>
                    
                    <div class="col-md-4 latest_news">
                        <a href="public_assets/indonesia.jpg" title="Banana">
                            <img src="public_assets/img/indonesia.jpg" class="img-responsive" > 
                        </a>
                        <div class="time-ago"><a href="#">1 hour ago</a></div>
                        <a href="<?=$base_url?>read/news.php">Donec id elit non mi porta gravida at eget metus. Fusce dapibus...</a>
                    </div>
                    
                  <?php
                   $query="select * from destination where status_display=1  order by waktu desc limit 2";
        $result=  mysql_query($query) or die(mysql_error());
        $no=0;
        while ($row=  mysql_fetch_object($result)){
             $short_content=$row->short_content;
             $waktu=$row->waktu;
             $ago=  dateAgo($waktu);
             $image=$row->image;
             $alamat_file="$base_url/img/$image";
             $judul=$row->judul;
             $alamat_lokasi=$base_url;
              echo "<div class=\"col-md-4 latest_news\">
                        <a href=\"$alamat_lokasi\" title=\"$judul\">
                            <img src=\"$alamat_file\" class=\"img-responsive\" > 
                        </a>
                        <div class=\"time-ago\"><a href=\"#\">$ago</a></div>
                        <a href=\"$alamat_lokasi\">$judul</a>
                    </div>";
        }
                  ?>  
                 
                    
                    
                    
                    
                      
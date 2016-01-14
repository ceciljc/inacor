<div class="inaCor-highlights inaCor-box">
      <?php

        $query="select * from attraction where status_display=1 and kategori=1 order by waktu desc limit 2";
        $result=  mysql_query($query) or die(mysql_error());
        $no=0;
        while ($row=  mysql_fetch_object($result)){
             $short_content=$row->short_content;
             $image=$row->image;
             $alamat_file="$base_url/img/$image";
             $judul=$row->judul;
             echo "<img src=\"$alamat_file\" class=\"img-responsive\" />
                        <strong><a href=\"#\">$judul</a></strong>";
        }
        
        ?>
                        
                        <div>
                            <a href="#" class="pull-right more"><i class="glyphicon glyphicon-plus"></i> See all</a>
                            <div class="clearfix"></div>
                        </div>
                        
                    </div>
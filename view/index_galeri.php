<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
#This code provided by:
#Andreas Hadiyono (andre.hadiyono@gmail.com)
#Gunadarma University
?>
   <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom: 25px;">
        <?php
        $query="select * from foto where status_display=1 and status_headline=1 order by waktu desc limit 4";
        $result=  mysql_query($query) or die(mysql_error());
        $no=0;
         $indicator="<ol class=\"carousel-indicators\">";
        $main__item="<div class=\"carousel-inner\">";
     
         while($row=  mysql_fetch_object($result)){
             $album=$row-> album;
             $nama_file=$row->nama_file;
             $ket=$row->ket;
            if($no==0)
            {
                 $indicator.="<li data-target=\"#myCarousel\" data-slide-to=\"$no\" class=\"active\"></li>";
                    $item="<div class=\"item active\">
                      <img src=\"album/$album/$nama_file\" alt=\"$no slide\">
                      <div class=\"container\">
                        <div class=\"carousel-caption\">
                          <p>$ket</p>
                        </div>
                      </div>
                    </div>";
            }
            else{
                  $indicator.="<li data-target=\"#myCarousel\" data-slide-to=\"$no\" ></li>";
                     $item.="\n<div class=\"item\">
                            <img src=\"album/$album/$nama_file\" alt=\"$no slide\">
                      <div class=\"container\">
                        <div class=\"carousel-caption\">
                          <p>$ket</p>
                        </div>
                      </div>
                    </div>";
            }
          
            $no++;
        }
          $indicator.="</ol>";
            $main__item.=$item."</div>";
                 echo $indicator;
                 echo $main__item;
        ?>         
        
        <!-- Indicators -->
                  
              
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
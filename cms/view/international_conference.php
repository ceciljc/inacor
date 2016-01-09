<!DOCTYPE html>
<html>

<head>

   <?php
   include "view/head.php";
   ?>

</head>

<body>

    <div id="wrapper">

        <?php
        include "view/default/right_menu.php";
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Destination :: <?=$title_tab?> </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                          <div class="panel-info">
                             <ul class="breadcrumb">
                                  <li class="active" >Destination :: <?=$title_tab?></li>
                                  
                             </ul>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                              <a class="btn btn-primary" href="<?=$url_rewrite ?>content/destination/tambah" >Add Destination</a>
                              <br/>
                              <br/>
                             
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-today">
                                    <thead>
                                        <tr>
											<th>Id</th>
		
											 
                                            <th>Judul Program</th>
                                            <th>Periode</th>
                                            <th>Tahun</th>
											<th>Content</th>
											<th>Kategori</th>
                                       
                                             <th>Status</th>
                                            <th>Event</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?PHP
										$sql = $DB->query("select deskripsi from kategori_kln where parent='2'");
														while ($row = $DB->fetch_object($sql)) {
															$tes[]['id'] = $row->id;
															$tes[]['deskripsi']= $row->deskripsi;
														}	
										foreach($tes as $key => $val){
											echo "<tr>";
											echo "<td>".$val['id']."</td>";
											echo "<td>".$val['deskripsi']."</td>";
											echo "</tr>";
										}
										
										?>
										
											 
                                     </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
     <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    // $(document).ready(function() {
        // $('#dataTables-today').dataTable(
                // {
                    // "aoColumnDefs": [
                         // { "aTargets": [2] }
                    // ],
                    // "aoColumns":[
                         // {"bSortable": true},
                         // {"bSortable": true},
                         // {"bSortable": true},
                         
                             // {"bSortable": true},
                         // {"bSortable": false}],
   
                    // "bProcessing": true,
                    // "bServerSide": true,
                    // "sAjaxSource": "<?=$url_rewrite?>api/api_destination.php?kategori=<?=$kategori?>"
               // }
                  
                  // );
    // });
    </script>
    
    
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    

    

</body>

</html>

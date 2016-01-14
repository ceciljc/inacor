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
                    <h1 class="page-header">Inbound :: <?=$title_tab?> </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                          <div class="panel-info">
                             <ul class="breadcrumb">
                                  <li class="active" >Inbound :: <?=$title_tab?></li>
                                  
                             </ul>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                              <a class="btn btn-primary" href="<?=$url_rewrite ?>content/inbound/tambah" >Add Information</a>
                              <br/>
                              <br/>
                             
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-Today">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Tanggal</th>
                                            <th>Periode</th>
                                            <th>Content</th>
											<th>Kategori</th>
                                            <th>Status</th>
                                            <th>Event</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
										 <td colspan="5" class="dataTables_empty">Loading data from server</td>
										 </tr>
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
    $(document).ready(function() {
        $('#dataTables-Today').dataTable(
                {
                    "aoColumnDefs": [
                         { "aTargets": [2] }
                    ],
                    "aoColumns":[
                         {"bSortable": true},
                         {"bSortable": true},
                         {"bSortable": false},
                         {"bSortable": false},
						 {"bSortable": false},
                             {"bSortable": false},
                         {"bSortable": false}],
   
                    "bProcessing": true,
                    "bServerSide": true,
                    "sAjaxSource": "<?=$url_rewrite?>api/api_inbound.php?kategori=<?=$kategori?>"
               }
                  
                  );
    });
    </script>
    
    
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    

    

</body>

</html>

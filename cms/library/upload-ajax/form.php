<iframe name="upload-frame" id="upload-frame" style="display:none;"></iframe>
<form name="formupload" method="post" enctype="multipart/form-data" action="upload.php" target="upload-frame" onsubmit="startUpload();">
   Picture : <input name="picture" type="file" />
   <input type="submit" name="upload" value="Upload" />
</form>
<div id="uploaded-picture">
<!-- div tempat photo yang telah diupload ditampilkan -->
</div>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function startUpload(){
  $("#uploaded-picture").html("loading...");
}

function displayPicture(pictureUrl){
  var img = new Image();
  $(img).load(function(){
    $(this).hide();
    $("#uploaded-picture").html($(this));
    $(this).fadeIn();
  }).attr('src', pictureUrl)
  .error(function(){
    alert("gagal menampilkan gambar");
  });
}
</script>
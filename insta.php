<!DOCTYPE html>
 <html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style> 
.btn {float: center ; background-color: dodgerblue; width: 50%; height: 40px; color: #fff; margin: 10px; border-radius: 5px; outline: none; padding: 12px 30px; cursor: pointer; font-size: 10px; } .btn:hover { background-color: #2EE59D; box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4); color: #fff; transform: translateY(-7px); } .btn:active { box-shadow: 0 5px #666; transform: translateY(4px); } #img { padding:1px; border:8px solid #021a40; }
input { padding: 20px;
text-align: center;
width: 80%;
border: 2px solid blue;} 
</style>
</head>
<body>
<h3>// Simple Instagram Downloader //</h3>
<form action="insta.php" method="post">
<center><input type="url" name="url" placeholder="Enter Full URL" required><br>
<input class="btn" type="submit" value="submit"><center>
</form>
<?php
$url = $_REQUEST['url'];
if(strpos($url, 'igshid')){
$url = strstr($url,'?ig', true);
}
echo '<div id="d" style="background: #DCDCDC;margin-bottom:25px;margin-top:15px;width:90%;border-radius:30px;height:100%;border: 5px solid blue" class="container">Results';
echo '<div class="card" style="width:100%">';
echo '<div class="card-body">';
echo '<div class="mypanel"></div><br>';
echo '<div style="background: #DCDCDC" class="panel"></div>';
echo '</div>';
echo '</div>';
echo '</div>';
 ?>
 <script>
    $.getJSON("<?php echo $url;?>?__a=1", function(data) {
        
        var text = `<br><center><img id="img" src="${data.graphql.shortcode_media.display_url}" alt="image" width="150px" height="150px"></center><br>
        <center><video id="img" style="width:200px" height="170px" controls><source src="${data.graphql.shortcode_media.video_url}" type="video/mp4" ></video></center>`
      var btn = `<center><a class="btn" href="${data.graphql.shortcode_media.display_url}&dl=1">Download Image</a></center><br>
     <center><a class="btn" href="${data.graphql.shortcode_media.video_url}&dl=1">Download Video</a></center>`
      
        $(".mypanel").html(text);
        $(".panel").html(btn);
    });
    </script>
    </body>
    </html>  

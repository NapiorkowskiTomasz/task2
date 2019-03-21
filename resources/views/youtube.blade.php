<?php


$api_url = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=PLkqz3S84Tw-QLY2X20kC_9JvgsAU7jW6G&key=AIzaSyAyO-RNjABXsePwnyCpvfePoVgYnHyqAYE";

$data = json_decode(file_get_contents($api_url));

?>
<script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<style>
    li {
        list-style-type: none;
    }
</style>
<div class="container">
    <div class="row" style="margin-top:50px;">
        <div class="col-xs12 col-md-8 col-sm-8 video-container">
            <iframe width="100%" height="450px" src="https://www.youtube.com/embed/<?php echo $data->items[0]->snippet->resourceId->videoId;?>" frameborder="0" allowfullscreen="">
            </iframe>
        </div>

        <div  class="col-xs-12 col-md-4" style="padding:0px;">
            <ul style="padding: 0px;">
                <?php
                foreach($data->items as $video){
                $title = $video->snippet->title;
                $description = $video->snippet->description;
                $thumbnails = $video->snippet->thumbnails;
                $videoId = $video->snippet->resourceId->videoId;
                $date = $video->snippet->publishedAt;

                ?>
                <li>
                        <span style="cursor:pointer; margin-bottom:10px;" onclick="switchVideo('<?php echo $videoId;?>');">
                            <div class="col-xs-12" id="vid-<?php echo $videoId;?>" style="padding-right:0px ;padding-top:8px ;border-bottom:1px solid white;">
                                <div style="padding-left: 0px;" class="image col-md-4 col-lg-4">
                                    <img src="https://i.ytimg.com/vi/<?php echo $videoId;?>/default.jpg">
                                </div>
                                <div class="text col-md-8 col-lg-8">
                                    <?php echo $title;?>
                                    <p class="data"><?php echo date('M,D,Y',strtotime($date));?></p>
                                </div>
                            </div>
                        </span>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
    <a href="createAutor.blade.php" class="btn btn-primary"></a>
</div>

<script>
    $("#vid-<?php echo $data->items[0]->snippet->resourceId->videoId;?>").addClass('selected');

    function switchVideo(videoId){
        $(".video-container iframe").attr('src','https://www.youtube.com/embed/'+videoId);
        $(".selected").removeClass('selected');
        $("#vid-"+videoId).addClass('selected');
    }
</script>

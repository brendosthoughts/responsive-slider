<?php 
$content_id = $_GET['content_id'];
$ajax_msg =' <a href="play_video.php"' . $content_id . '><img class="vid_img" src ="helper/images/'. $content_id. '.jpg"/></a><h3 class="vid_title"> This would be the title for: '. $content_id   .'</h3>
						<div class="heading">
							<span class="type">Types: <a href="type.php?type=Talks.php">Talks </a></span> 
							<span class="tags"><br><br>Tags: <a href="type.php?type=Talks.php">Science</a><a href="type.php?type=Talks.php">Fuck of this works</a></span> 
							<span class="subtags"><br><br>SubTags: <a href="type.php?type=Talks.php">Biometrics</a><a href="type.php?type=Talks.php">Medical Research</a></span> 
						</div>
						<div class="description"> 
						For my purposes this is a short desciption of the video .. or this could be a brief twitter like card review of an article ... or hey this thing will scroll so by fiddling with dialogue css you could make an entire post become revealed here</a>
						</div>
						<div class="ad_bar">
						 There will be a footer add here if I can figure out how to load one with AJAX  ... apparently googles ad sense TOS is against this ... maybe something custom then? or just garbage! 
						</div>';
echo $ajax_msg;





?>
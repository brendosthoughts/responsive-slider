<?php 
$content_id = $_GET['content_id'];
$ajax_msg ='<header> 
<h1>This would be the title for: '. $content_id   .'</h1>
<span class="publisher">Published By: TED </span>
<span class="event">From: TEDx Toronto</span>
<span class="pub_date">On: Jul. 16, 1989</span>
</header> 
<div class="vid_info">
<a href="play_video.php"' . $content_id . '><img class="vid_img" src ="helper/images/'. $content_id. '.jpg"/></a>
						<div class="heading">
							<span class="type">Types: <a href="type.php?type=Talks.php">Talks </a></span> 
							<span class="tags"><br><br>Tags: <a href="type.php?type=Talks.php">Science</a><a href="type.php?type=Talks.php">Fuck of this works</a></span> 
							<span class="subtags"><br><br>SubTags: <a href="type.php?type=Talks.php">Biometrics</a><a href="type.php?type=Talks.php">Medical Research</a></span> 
						</div>
						<div class="description"> 
						For my purposes this is a short desciption of the video .. or this could be a brief twitter like card review of an article ... or hey this thing will scroll so by fiddling with dialogue css you could make an entire post become revealed here</a>
						<br>testing <br>testing <br>testing <br>testing <br>testing <br>testing <br>testing <br>testing <br>testing <br>testing <br>testing <br>testing 
<br>testing <br>testing <br>testing <br>testing <br>testing <br>testing <br>testing <br>testing <br>testing <br>testing <br>testing <br>testing <br>testing 
<br>testing 						
						
						
						</div>
					
</div>
<footer>
Hopefully I can throw some sort of advertisement in her ... we will see
</footer>';
echo $ajax_msg;





?>
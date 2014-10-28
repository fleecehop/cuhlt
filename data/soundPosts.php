<?php

	class soundPost{
		public $embed = '';
		public $artistName ='';
		public $projectName = '';
		public $site ='';
	}

	$soundPosts = array();

	//TIVE decoy
	$sp1 = new soundPost();
	$sp1->embed='<iframe style="border: 0; width: 450px; height: 650px;" 
				 
				 src="https://bandcamp.com/EmbeddedPlayer/album=2464074271/size=large/bgcol=333333/linkcol=ffffff/transparent=true/" seamless>
				 
				 <a href="http://cuhltanese.bandcamp.com/album/d3coy">D3COY by Tive</a>
				 
				 </iframe>';
	
	$sp1->artistName='TIVE';
	$sp1->projectName='d3coy';
	$sp1->site='bandcamp';

	array_push($soundPosts,$sp1);

	//TIVE monolucent
	$sp2 = new soundPost();
	$sp2->embed='<iframe style="border: 0; width: 450px; height: 650px;" 
				 
				 src="https://bandcamp.com/EmbeddedPlayer/album=3739523982/size=large/bgcol=333333/linkcol=ffffff/transparent=true/" seamless>
				 
				 <a href="http://cuhltanese.bandcamp.com/album/monolucent">monolucent by Tive</a>
				
				 </iframe>';
	
	$sp2->artistName='TIVE';
	$sp2->projectName='monolucent';
	$sp2->site='bandcamp';

	array_push($soundPosts,$sp2);


	//wifisfuneral EP-wifisfuneral
	$sp3 = new soundPost();
	$sp3->embed='<iframe width="450px" height="450px" scrolling="no" frameborder="no" 
					
					src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/46432565&amp;color=000000&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false">
				 
				 </iframe>';
	
	$sp3->artistName='wifisfuneral';
	$sp3->projectName='wifisfuneral EP';
	$sp3->site='soundcloud';

	array_push($soundPosts,$sp3);
	

	//fleece-ages ep
	$sp4 = new soundPost();
	$sp4->embed='<iframe style="border: 0; width: 450px; height: 650px;" 
				 
				 src="https://bandcamp.com/EmbeddedPlayer/album=1894143551/size=large/bgcol=333333/linkcol=ffffff/transparent=true/" seamless>
				
				 <a href="http://fleece.bandcamp.com/album/ages">ages by fleece</a>
				
				 </iframe>';
	
	$sp4->artistName='fleece';
	$sp4->projectName='ages';
	$sp4->site='bandcamp';

	array_push($soundPosts,$sp4);
	

?>
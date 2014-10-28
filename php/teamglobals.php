<?php
	//person object to hold all of the attributes
	class person
	{
	    public $name;
	    public $description;
	    public $image;
	 	public $soundcloud;
	    public $twitter;
	    public $youtube;
		  
	}

	$myPerson = new person();

	//Parse returned data into objects to an array
	$myPerson->name 		= 'TIVE';
	$myPerson->description  = 'founder//artist';
	$myPerson->image 		= 'tive.jpg';
	$myPerson->soundcloud 	= 'http://soundcloud.com/cuhlt';
	$myPerson->twitter 		= 'https://twitter.com/HoeStopPlayin';
	$myPerson->youtube 		= '';

	//push onto array	
	$people = array($myPerson);
	

	$myPerson = new person();

	//Parse returned data into objects to an array
	$myPerson->name 		= '6IX';
	$myPerson->description  = 'artist//producer';
	$myPerson->image 		= '6ix.jpg';
	$myPerson->soundcloud 	= 'https://soundcloud.com/based-rob';
	$myPerson->twitter 		= 'https://twitter.com/KingBasedRob';
	$myPerson->youtube 		= '';


	array_push($people,$myPerson);

	$myPerson = new person();

	//Parse returned data into objects to an array
	$myPerson->name 		= 'Tobi';
	$myPerson->description  = 'filming//photography//editing';
	$myPerson->image 		= 'tobi.jpg';
	$myPerson->soundcloud 	= '';
	$myPerson->twitter 		= 'https://twitter.com/rami__rez';
	$myPerson->youtube 		= 'https://www.youtube.com/user/itstobixx';


	array_push($people,$myPerson);

	$myPerson = new person();

	//Parse returned data into objects to an array
	$myPerson->name 		= 'moksha';
	$myPerson->description  = 'producer';
	$myPerson->image 		= 'moksha.jpg';
	$myPerson->soundcloud 	= 'http://soundcloud.com/mxkshv';
	$myPerson->twitter 		= 'http://www.twitter.com/mxkshv';
	$myPerson->youtube 		= '';


	array_push($people,$myPerson);

	$myPerson = new person();

	//Parse returned data into objects to an array
	$myPerson->name 		= 'internet_user';
	$myPerson->description  = 'producer';
	$myPerson->image 		= 'internetuser.jpg';
	$myPerson->soundcloud 	= 'https://soundcloud.com/liftedspirit';
	$myPerson->twitter 		= '';
	$myPerson->youtube 		= '';


	array_push($people,$myPerson);

	$myPerson = new person();

	//Parse returned data into objects to an array
	$myPerson->name 		= 'CROCK';
	$myPerson->description  = 'artist//producer';
	$myPerson->image 		= 'crock.jpg';
	$myPerson->soundcloud 	= 'https://soundcloud.com/crockiscool';
	$myPerson->twitter 		= 'https://twitter.com/CROCKisCOOL';
	$myPerson->youtube 		= '';


	array_push($people,$myPerson);

	$myPerson = new person();

	//Parse returned data into objects to an array
	$myPerson->name 		= 'wifisfuneral';
	$myPerson->description  = 'artist';
	$myPerson->image 		= 'wifi.jpg';
	$myPerson->soundcloud 	= 'https://soundcloud.com/wifisfuneral';
	$myPerson->twitter 		= 'https://twitter.com/wifisfuneral';
	$myPerson->youtube 		= '';

	array_push($people,$myPerson);

	$myPerson = new person();

	//Parse returned data into objects to an array
	$myPerson->name 		= 'mylezgolden.';
	$myPerson->description  = 'producer//artist';
	$myPerson->image 		= 'mylez.png';
	$myPerson->soundcloud 	= 'https://soundcloud.com/mylezgolden';
	$myPerson->twitter 		= 'https://twitter.com/mylezgolden';
	$myPerson->youtube 		= '';

	array_push($people,$myPerson);

	$myPerson = new person();

	//Parse returned data into objects to an array
	$myPerson->name 		= 'tones_';
	$myPerson->description  = 'producer';
	$myPerson->image 		= 'tones.jpg';
	$myPerson->soundcloud 	= 'https://soundcloud.com/tones-1';
	$myPerson->twitter 		= 'https://twitter.com/MeLlamoTones';
	$myPerson->youtube 		= '';

	array_push($people,$myPerson);

	$myPerson = new person();

	//Parse returned data into objects to an array
	$myPerson->name 		= '.smuv';
	$myPerson->description  = 'producer';
	$myPerson->image 		= 'smuv.jpg';
	$myPerson->soundcloud 	= 'https://soundcloud.com/asmuvone';
	$myPerson->twitter 		= '';
	$myPerson->youtube 		= '';

	array_push($people,$myPerson);

	$myPerson = new person();

	//Parse returned data into objects to an array
	$myPerson->name 		= 'manitee';
	$myPerson->description  = 'producer';
	$myPerson->image 		= '';
	$myPerson->soundcloud 	= 'https://soundcloud.com/robert-dingus';
	$myPerson->twitter 		= 'https://twitter.com/RobertDingus';
	$myPerson->youtube 		= '';


	array_push($people,$myPerson);

	$myPerson = new person();

	//Parse returned data into objects to an array
	$myPerson->name 		= 'fleece';
	$myPerson->description  = 'sweatshirt material';
	$myPerson->image 		= 'fleece.jpg';
	$myPerson->soundcloud 	= 'http://soundcloud.com/fleece';
	$myPerson->twitter 		= 'http://www.twitter.com/fleecehop';
	$myPerson->youtube 		= '';

	array_push($people,$myPerson);

	echo json_encode($people);

?>
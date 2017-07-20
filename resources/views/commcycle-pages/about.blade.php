@extends('main.main') 


@section('content') 
	<div class="clear-fix" style="margin:100px;"></div>
	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<h1 class="section-title text-center solid-text">About Us<hr></h1>
				<p class="post-title">CommCycle is an online shopping/recycling platform designed for the community members of the African Leadership Academy. Users of the website are able to either sell/buy second hand items through using shop option or share items they don’t use anymore for the benefit of the community by using the CommCycle option.<hr></p>
			</div>
			<div class="row">
				<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
					<img class="img-responsive solid" id="leroy" autofocus="autofocus" src ="imgs/Lee-2.JPG" style="width:40px; height:30px;" alt="leroy's image">
					<div class="text-center"> 
						<h3 class="solid-text-light">LEROY MWASARU</h3> 
						<h4 class="solid-text-light">Co-founder</h4>
						<p class="post-title admin ">Leroy is a Kenyan social entreprenuer who derives pleasure from solving pressing community needs. His works have been featured by CNN, The Huffington Post, The African Union, Grist, CCTV America and local media houses in Kenya. He has won a number of entrepreneurship awards, fellowships and travelled to different parts of the world to share and connect with like-minded entrepreneurs. His strength lies in buying stakeholders into the vision of CommCyle. When he is not pursuing his entreprenual interests, he can be found writing, reading novels, rooting for Manchester City, his favorite football team or playing rugby. He also blogs for both the Huffington Post US and SA.</p>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
					<img class="img-responsive solid" id="soumaya" src ="{{ asset('imgs/soumaya-2.JPG') }}" style="width:40px; height:30px;" alt="leroy's image">
					<div class="text-center"> 
						<h3 class="solid-text-light">SOUMAYA DAMMAK</h3> 
						<h4 class="solid-text-light">Co-founder</h4>
						<p class="post-title admin">Soumaya is a starting Tunisian social entrepreneur who aims to see the huge disparity between the rich and the poor come to an end. She has been a Scout since a very tender age and ended up becoming the troop’s leader. She was also a young ambassador of her country Tunisia when she was an exchange student in the US. Since then, she has developed a passion for religions and traveling. Soumaya loves learning and teaching people about religions and she also never missed a chance to travel and discover a new place and culture. You can find her stargazing from time to time or always craving days off to hike and camp and sleep on the lights of bonfires.</p>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
					<img class="img-responsive solid" id="frimpong" src ="{{ asset('imgs/Frimpi-2.JPG') }}" style="width:40px; height:30px;" alt="leroy's image">
					<div class="text-center"> 
						<h3 class="solid-text-light">FRIMPONG O.AGYEMANG</h3> 
						<h4 class="solid-text-light">CT0</h4>
						<p class="post-title admin">Frimpong is a young Ghanaian who is very passionate about technology.<br>He is very quick to divert every solution to a problem through technology.<br>Frimpong aims to solve every problem he identifies through out his life with code--because he believes it is a more secure and faster way.<br>He has total grasp over languages like C#, python, Javascript, Ruby, PHP, visual basic and many others.</p>
					</div>
				</div>
			</div>
<hr>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default solid">
					<div class="panel-heading solid" style="background-color:deeppink;">
						<h1 class="panel-title text-center" style="text-shadow: 0px 4px 8px rgba(0,0,0,0.8); font-size:50px;"><i class="fa fa-envelope" style="color:white;"></i> Leave a message</h1><br>
						
					</div>
					<div class="panel-body" style="background-color:orange;">
						<form action="sendmessage" method="get">
						{{ csrf_field() }}
							<div class="form-group">
	                            <div class="input-group">
	                                <span class="input-group-addon solid"><i class="glyphicon glyphicon-user blue"></i></span>
	                                <input type="text" name="Personname" placeholder="Name" class="form-control solid" required>
	                            </div>
                        	</div>
                        	<div class="form-group">
	                            <div class="input-group">
	                                <span class="input-group-addon solid"><i class="glyphicon glyphicon-envelope blue"></i></span>
	                                <input type="email" name="Personemail" placeholder="Email" class="form-control solid" required>
	                            </div>
                        	</div>
	                        <div class="form-group">
	                            <div class="input-group">
	                                <span class="input-group-addon solid"><i class="glyphicon glyphicon-phone blue"></i></span>
	                                <input type="number" name="Personnumber" placeholder="Phone" class="form-control solid" required>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <div class="input-group">
	                                <span class="input-group-addon solid"><i class="glyphicon glyphicon-comment blue"></i></span>
	                                <textarea name="Personmessage" rows="6" class="form-control solid" type="text" required></textarea>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                       	 <small class="text text-muted">@commcycle-colors</small>
	                        	<button type="submit" class="btn btn-info pull-right solid" >Send <i class="glyphicon glyphicon-send"></i> </button>
	                        </div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
<style> 

.admin{
	font-size:15px; 
	border:solid 2px gray; 
	padding:5px; 
	min-height:100px;
	max-height:300px; 
	border-top-color:black;
	overflow-y:scroll;
	
	border-left-width:1px; 
	border-right-width:1px;
	border-top-width:10px;
	/*border-top-right-radius:10px;
	border-top-left-radius:10px; */
	border-bottom-left-radius:10px;
	border-bottom-right-radius:10px;
	margin-bottom:20px;
	box-shadow:0px 2px 4px rgba(0,0,0,0.4);
}



</style>

@endsection
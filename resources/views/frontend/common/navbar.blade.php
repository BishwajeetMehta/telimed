<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="{{url('/')}}"><i class="icofont-support-faq mr-2"></i> {{ $_SESSION['setting']->email ? $_SESSION['setting']->email :'' }}</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>{{ $_SESSION['setting']->address ? $_SESSION['setting']->address :'' }} </li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+23-345-67890" >
							<span>Call Now : </span>
							<span class="h4">{{ $_SESSION['setting']->phone ? $_SESSION['setting']->phone :'' }}</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="{{url('/')}}">
			  	<img src="{{ $_SESSION['setting']->logo ? $_SESSION['setting']->logo :'' }}" alt="" class="img-fluid">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="{{url('/')}}">Home</a>
			 
			   <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
			</ul>
			
		  </div>
		</div>
	</nav>
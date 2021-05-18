@extends('layout')
@section('title', 'Статистика')
@section ('content')

<div class="inner">
<header>
			<h1><a href="#static1" ><button type="button" class="btn btn-primary btn-lg">Просмотреть всех представителей</button></a></h1>
			<h1><a href="#static2" ><button type="button" class="btn btn-primary btn-lg" >Выполняющие аудит в данный момент</button></a></h1>
			<h1><a href="#static3" ><button type="button" class="btn btn-primary btn-lg">Не выполняющие обязанностей</button></a></h1>
			
		</header>
	</div>
	<section id="static1">
		<header>
			<br><h2>Представители</h2>
            <form action="" method="" enctype="multipart/form-data">
           
            
        </form>
            
			<!-- //уволить -->
			<hr />
		</header> 
	</section>
	<section id="static2">
		<header>
			<br><h2>Выполняющие аудит в данный момент</h2>
			
			<hr />
		</header> 
	</section>

    <section id="static3">
		<header>
			<br><h2>Не выполняющие обязанностей</h2>
			
			<hr />
		</header> 
	</section>
			<!-- Footer -->
				@section('footer')
						<div class="row">
							<!-- Tweets -->
							
								<section class="col-4 col-12-mobile">
									<header>
										<h2 class="icon brands fa-twitter circled"><span class="label">Tweets</span></h2>
									</header>
									<ul class="divided">
									
									</ul>
								</section>
							
							<!-- Posts -->
								<section class="col-4 col-12-mobile">
									<header>
										<h2 class="icon solid fa-file circled"><span class="label">Posts</span></h2>
									</header>
									
								</section>

							<!-- Photos -->
								<section class="col-4 col-12-mobile">
									<header>
										<h2 class="icon solid fa-camera circled"><span class="label">Photos</span></h2>
									</header>
									<div class="row gtr-25">
										<div class="col-6">
											<a href="#" class="image fit"><img src="images/services_photo/cut/image_part_001.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="images/services_photo/cut/image_part_002.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="images/services_photo/cut/image_part_003.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="images/services_photo/cut/image_part_004.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="images/services_photo/cut/image_part_005.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="images/services_photo/cut/image_part_006.jpg" alt="" /></a>
										</div>
									</div>
                                </section>
                                </div>
        @endsection
@endsection
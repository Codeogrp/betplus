@include('view-css')

<body>


	<div class="wrapper">



        @include('header')

		<div class="search-sec">
			<div class="container">
				<div class="search-box">
					<form>
						<input type="text" name="search" placeholder="Rechercher un groupe">
						<button type="submit">Search</button>
					</form>
				</div><!--search-box end-->
			</div>
		</div><!--search-sec end-->

		<section class="forum-page">
			<div class="container">
				<div class="forum-questions-sec">
					<div class="row">
						<div class="col-lg-8">
							<div class="forum-questions">
								<div class="usr-question">
									<div class="usr_img">
										<img src="images/resources/usrr-img1.png" alt="">
									</div>
									<div class="usr_quest">
										<h3>Groupe 1</h3>
										<ul class="react-links">
											<li><a href="#" title=""><i class="fas fa-heart"></i> Membres 150</a></li>
										</ul>
										<ul class="quest-tags">
											<li><a href="messages.html" title="">Rejoindre</a></li>
											<li><a class="post_project" href="#" title="">Quitter</a></li>
											<li><a class="post-jb active" href="#" title="">Signaler</a></li>
										</ul>
									</div><!--usr_quest end-->
									<span class="quest-posted-time"><i class="fa fa-clock-o"></i>Date de création</span>
								</div><!--usr-question end-->
								<div class="usr-question">
									<div class="usr_img">
										<img src="images/resources/usrr-img1.png" alt="">
									</div>
									<div class="usr_quest">
										<h3>Groupe 2</h3>
										<ul class="react-links">
											<li><a href="#" title=""><i class="fas fa-heart"></i> Membres 550</a></li>
										</ul>
										<ul class="quest-tags">
											<li><a href="#" title="">Rejoindre</a></li>
											<li><a href="#" title="">Quitter</a></li>
											<li><a href="#" title="">Signaler</a></li>
										</ul>
									</div><!--usr_quest end-->
									<span class="quest-posted-time"><i class="fa fa-clock-o"></i>Date de création</span>
								</div><!--usr-question end-->
								<div class="usr-question">
									<div class="usr_img">
										<img src="images/resources/usrr-img1.png" alt="">
									</div>
									<div class="usr_quest">
										<h3>Groupe 3</h3>
										<ul class="react-links">
											<li><a href="#" title=""><i class="fas fa-heart"></i> Membres 50</a></li>
										</ul>
										<ul class="quest-tags">
											<li><a href="#" title="">Rejoindre</a></li>
											<li><a href="#" title="">Quitter</a></li>
											<li><a href="#" title="">Signaler</a></li>
										</ul>
									</div><!--usr_quest end-->
									<span class="quest-posted-time"><i class="fa fa-clock-o"></i>Date de création</span>
								</div><!--usr-question end-->
								<div class="usr-question">
									<div class="usr_img">
										<img src="images/resources/usrr-img1.png" alt="">
									</div>
									<div class="usr_quest">
										<h3>Groupe 4</h3>
										<ul class="react-links">
											<li><a href="#" title=""><i class="fas fa-heart"></i> Membres 150</a></li>
										</ul>
										<ul class="quest-tags">
											<li><a href="#" title="">Rejoindre</a></li>
											<li><a href="#" title="">Quitter</a></li>
											<li><a href="#" title="">Signaler</a></li>
										</ul>
									</div><!--usr_quest end-->
									<span class="quest-posted-time"><i class="fa fa-clock-o"></i>Date de création</span>
								</div><!--usr-question end-->
								<div class="usr-question">
									<div class="usr_img">
										<img src="images/resources/usrr-img1.png" alt="">
									</div>
									<div class="usr_quest">
										<h3>Groupe 5</h3>
										<ul class="react-links">
											<li><a href="#" title=""><i class="fas fa-heart"></i> Membres 1500</a></li>
										</ul>
										<ul class="quest-tags">
											<li><a href="#" title="">Rejoindre</a></li>
											<li><a href="#" title="">Quitter</a></li>
											<li><a href="#" title="">Signaler</a></li>
										</ul>
									</div><!--usr_quest end-->
									<span class="quest-posted-time"><i class="fa fa-clock-o"></i>Date de création</span>
								</div><!--usr-question end-->




							</div><!--forum-questions end-->
							<nav aria-label="Page navigation example" class="full-pagi">
							<ul class="pagination">
								<li class="page-item"><a class="page-link pvr" href="#">Previous</a></li>
								<li class="page-item"><a class="page-link active" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">4</a></li>
								<li class="page-item"><a class="page-link" href="#">5</a></li>
								<li class="page-item"><a class="page-link" href="#">6</a></li>
								<li class="page-item"><a class="page-link pvr" href="#">Next</a></li>
							</ul>
							</nav>
						</div>
						<div class="col-lg-4">
							<div class="widget widget-user">
								<h3 class="title-wd">Meilleurs groupes du mois</h3>
								<ul>
									<li>
										<div class="usr-msg-details">
											<div class="usr-ms-img">
												<img src="images/resources/m-img1.png" alt="">
											</div>
											<div class="usr-mg-info">
												<h3>Jessica William</h3>
												<p>Graphic Designer </p>
											</div><!--usr-mg-info end-->
										</div>
										<span><img src="images/price1.png" alt="">1185</span>
									</li>
									<li>
										<div class="usr-msg-details">
											<div class="usr-ms-img">
												<img src="images/resources/m-img2.png" alt="">
											</div>
											<div class="usr-mg-info">
												<h3>John Doe</h3>
												<p>PHP Developer</p>
											</div><!--usr-mg-info end-->
										</div>
										<span><img src="images/price2.png" alt="">1165</span>
									</li>
									<li>
										<div class="usr-msg-details">
											<div class="usr-ms-img">
												<img src="images/resources/m-img3.png" alt="">
											</div>
											<div class="usr-mg-info">
												<h3>Poonam</h3>
												<p>Wordpress Developer </p>
											</div><!--usr-mg-info end-->
										</div>
										<span><img src="images/price3.png" alt="">1120</span>
									</li>
									<li>
										<div class="usr-msg-details">
											<div class="usr-ms-img">
												<img src="images/resources/m-img4.png" alt="">
											</div>
											<div class="usr-mg-info">
												<h3>Bill Gates</h3>
												<p>C & C++ Developer </p>
											</div><!--usr-mg-info end-->
										</div>
										<span><img src="images/price4.png" alt="">1009</span>
									</li>
								</ul>
							</div><!--widget-user end-->
							<div class="widget widget-adver">
								<img src="images/resources/adver-img.png" alt="">
							</div><!--widget-adver end-->
						</div>
					</div>
				</div><!--forum-questions-sec end-->
			</div>
		</section><!--forum-page end-->

		<footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<ul>
						<li><a href="help-center.html" title="">Help Center</a></li>
						<li><a href="about.html" title="">About</a></li>
						<li><a href="#" title="">Privacy Policy</a></li>
						<li><a href="#" title="">Community Guidelines</a></li>
						<li><a href="#" title="">Cookies Policy</a></li>
						<li><a href="#" title="">Career</a></li>
						<li><a href="forum.html" title="">Forum</a></li>
						<li><a href="#" title="">Language</a></li>
						<li><a href="#" title="">Copyright Policy</a></li>
					</ul>
					<p><img src="images/copy-icon2.png" alt="">Copyright 2019</p>
					<img class="fl-rgt" src="images/logo2.png" alt="">
				</div>
			</div>
		</footer>

		<div class="post-popup pst-pj">
			<div class="post-project">
				<h3>Etes vous sûr de vouloir quitter ce groupe ?</h3>
				<div class="post-project-fields">
					<form>
						<div class="row">
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Confirmer</button></li>
									<li><a href="#" title="">Annuler</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->

		<div class="post-popup job_post">
			<div class="post-project">
				<h3>Qu'avez vous à reprocher à ce groupe ?</h3>
				<div class="post-project-fields">
					<form>
						<div class="row">
							<div class="col-lg-12">
								<textarea name="description" placeholder="Détails De La Plainte"></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Envoyer</button></li>
									<li><a href="#" title="">Annuler</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->

		<div class="overview-box" id="question-box">
			<div class="overview-edit">
				<h3>Ask a Question</h3>
				<form>
					<input type="text" name="question" placeholder="Type Question Here">
					<input type="text" name="tags" placeholder="Tags">
					<textarea placeholder="Description"></textarea>
					<button type="submit" class="save">Submit</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

	</div><!--theme-layout end-->


@include('view-js')

@include('view-css')

<body class="sign-in">


	<div class="wrapper">

		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						<div class="col-lg-6">
							<div class="cmp-info">
								<div class="cm-logo">
									<img src="images/cm-logo.png" alt="">
									<p> Bet + vous permet de découvrir les paris sportifs sous un autre angle et surtout de vous aider à vous faire chaque semaine, un peu d’argent de poche en plus. </p>
								</div><!--cm-logo end-->
								<img src="images/cm-main-img.png" alt="">
							</div><!--cmp-info end-->
						</div>
						<div class="col-lg-6">
							<br>
							<br>
							<div class="login-sec">
								<ul class="sign-control">
									<li data-tab="tab-1" class="current"><a href="#" title="">Se connecter</a></li>
									<li data-tab="tab-2"><a href="#" title="">S'inscrire</a></li>
								</ul>
								<div class="sign_in_sec current" id="tab-1">

									<h3>Se connecter</h3>
									<form>
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="text" name="username" placeholder="Nom d'utilisateur">
													<i class="la la-user"></i>
												</div><!--sn-field end-->
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" name="password" placeholder="Mot de passe">
													<i class="la la-lock"></i>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
													<div class="fgt-sec">
														<input type="checkbox" name="cc" id="c1">
														<label for="c1">
															<span></span>
														</label>
														<small>Se rappeller de moi</small>
													</div><!--fgt-sec end--><br>
													<a href="#" title="">Mot de passe oublié?</a>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<button type="submit" value="submit">Se connecter</button>
											</div>
										</div>
									</form>
									<!--login-resources end-->
								</div><!--sign_in_sec end-->
								<div class="sign_in_sec" id="tab-2">
									<div class="signup-tab">
										<ul>
											<li data-tab="tab-3" class="current"><a href="#" title="">Parieur</a></li>
											<li data-tab="tab-4"><a href="#" title="">Pronostiqueur</a></li>
										</ul>
									</div><!--signup-tab end-->
									<div class="dff-tab current" id="tab-3">
										<form>
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="name" placeholder="Nom d'utilisateur">
														<i class="la la-user"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="country" placeholder="E-mail">
														<i class="la la-dropbox"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<select>
															<option>Selectionner les préférences</option>
															<option>Category 1</option>
															<option>Category 2</option>
															<option>Category 3</option>
															<option>Category 4</option>
														</select>
														<i class="la la-building"></i>
														<span><i class="fa fa-ellipsis-h"></i></span>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="password" placeholder="Mot de passe">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="repeat-password" placeholder="Confirmer le mot de passe">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="checky-sec st2">
														<div class="fgt-sec">
															<input type="checkbox" name="cc" id="c2">
															<label for="c2">
																<span></span>
															</label>
															<small>J'ai lu et j'accepte les termes et conditions.</small>
														</div><!--fgt-sec end-->
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">S'inscrire</button>
												</div>
											</div>
										</form>
									</div><!--dff-tab end-->
									<div class="dff-tab" id="tab-4">
										<form>
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="company-name" placeholder="Choisir un nom pour votre chaîne">
														<i class="la la-building"></i>
													</div>
												</div>

												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="name" placeholder="Nom d'utilisateur">
														<i class="la la-user"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="country" placeholder="E-mail">
														<i class="la la-dropbox"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<select>
															<option>Selectionner les préférences</option>
															<option>Category 1</option>
															<option>Category 2</option>
															<option>Category 3</option>
															<option>Category 4</option>
														</select>
														<i class="la la-building"></i>
														<span><i class="fa fa-ellipsis-h"></i></span>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="password" placeholder="Mot de passe">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="repeat-password" placeholder="Confirmer le mot de passe">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="checky-sec st2">
														<div class="fgt-sec">
															<input type="checkbox" name="cc" id="c2">
															<label for="c2">
																<span></span>
															</label>
															<small>J'ai lu et j'accepte les termes et conditions.</small>
														</div><!--fgt-sec end-->
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">S'inscrire</button>
												</div>
											</div>
										</form>
									</div><!--dff-tab end-->
								</div>
							</div><!--login-sec end-->
						</div>
					</div>
				</div><!--signin-pop end-->
			</div><!--signin-popup end-->
			<div class="footy-sec">
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
					<p><img src="images/copy-icon.png" alt="">Copyright 2019</p>
				</div>
			</div><!--footy-sec end-->
		</div><!--sign-in-page end-->


	</div><!--theme-layout end-->


@include('view-js')

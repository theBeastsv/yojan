<div class="container">
	<div class="row">

		<!-- Main Content -->

		<main class="col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-xs-12">

			<? 
			$uid=$_SESSION['yojan_user_id'];
			 $_SESSION['timeLineId']=$_SESSION['yojan_user_id'];
				  include("incfiles/postnewsfeed.php");?>

			<div id="newsfeed-items-grid">
				<div id="stories-wrapper">
                
                <?
                
				$mytweets=getTimeLineforme($_SESSION['timeLineId'],'');
				echo $mytweets;
				?>
				
 

			</div>
</div>

			 


		</main>

		<!-- ... end Main Content -->


		<!-- Left Sidebar -->

		<aside class="col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="widget w-wethear">
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>

					<div class="wethear-now inline-items">
						<div class="temperature-sensor">34°</div>
						<div class="max-min-temperature">
							<span>38°</span>
							<span>36°</span>
						</div>

						<svg class="olymp-weather-partly-sunny-icon"><use xlink:href="icons/icons-weather.svg#olymp-weather-partly-sunny-icon"></use></svg>
					</div>

					<div class="wethear-now-description">
						<div class="climate">Warm</div>
						<span>Real Feel: <span>37°</span></span>
						<span>Chance of Humidity: <span>49%</span></span>
					</div>

					<ul class="weekly-forecast">

						<li>
							<div class="day">sun</div>
							<svg class="olymp-weather-sunny-icon"><use xlink:href="icons/icons-weather.svg#olymp-weather-sunny-icon"></use></svg>

							<div class="temperature-sensor-day">20°</div>
						</li>

						<li>
							<div class="day">mon</div>
							<svg class="olymp-weather-partly-sunny-icon"><use xlink:href="icons/icons-weather.svg#olymp-weather-partly-sunny-icon"></use></svg>
							<div class="temperature-sensor-day">28°</div>
						</li>

						<li>
							<div class="day">tue</div>
							<svg class="olymp-weather-cloudy-icon"><use xlink:href="icons/icons-weather.svg#olymp-weather-cloudy-icon"></use></svg>

							<div class="temperature-sensor-day">34°</div>
						</li>

						<li>
							<div class="day">wed</div>
							<svg class="olymp-weather-rain-icon"><use xlink:href="icons/icons-weather.svg#olymp-weather-rain-icon"></use></svg>

							<div class="temperature-sensor-day">36°</div>
						</li>

						<li>
							<div class="day">thu</div>
							<svg class="olymp-weather-storm-icon"><use xlink:href="icons/icons-weather.svg#olymp-weather-storm-icon"></use></svg>

							<div class="temperature-sensor-day">30°</div>
						</li>

						<li>
							<div class="day">fri</div>
							<svg class="olymp-weather-snow-icon"><use xlink:href="icons/icons-weather.svg#olymp-weather-snow-icon"></use></svg>

							<div class="temperature-sensor-day">32°</div>
						</li>

						<li>
							<div class="day">sat</div>

							<svg class="olymp-weather-wind-icon-header"><use xlink:href="icons/icons-weather.svg#olymp-weather-wind-icon-header"></use></svg>

							<div class="temperature-sensor-day">29°</div>
						</li>

					</ul>

					<div class="date-and-place">
						<h5 class="date">Thuseday, March 28th</h5>
						<div class="place">Indore,Madhya Pradesh </div>
					</div>

				</div>
			</div>


			<div class="ui-block">
				<div class="calendar-container">
					<div class="calendar">
						<header>
							<h6 class="month">March</h6>
							<a class="calendar-btn-prev fontawesome-angle-left" href="#"></a>
							<a class="calendar-btn-next fontawesome-angle-right" href="#"></a>
						</header>
						<table>
							<thead>
							<tr><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td><td>San</td></tr>
							</thead>
							<tbody>
							<tr>
								<td date-month="12" date-day="1">1</td>
								<td date-month="12" date-day="2" class="event-uncomplited event-complited event">
									2
								</td>
								<td date-month="12" date-day="3">3</td>
								<td date-month="12" date-day="4">4</td>
								<td date-month="12" date-day="5">5</td>
								<td date-month="12" date-day="6">6</td>
								<td date-month="12" date-day="7">7</td>
							</tr>
							<tr>
								<td date-month="12" date-day="8">8</td>
								<td date-month="12" date-day="9">9</td>
								<td date-month="12" date-day="10" class="event-complited event">10</td>
								<td date-month="12" date-day="11">11</td>
								<td date-month="12" date-day="12">12</td>
								<td date-month="12" date-day="13">13</td>
								<td date-month="12" date-day="14">14</td>
							</tr>
							<tr>
								<td date-month="12" date-day="15" class="event-complited-2 event">15</td>
								<td date-month="12" date-day="16">16</td>
								<td date-month="12" date-day="17" class="current-day">17</td>
								<td date-month="12" date-day="18">18</td>
								<td date-month="12" date-day="19">19</td>
								<td date-month="12" date-day="20">20</td>
								<td date-month="12" date-day="21">21</td>
							</tr>
							<tr>
								<td date-month="12" date-day="22">22</td>
								<td date-month="12" date-day="23">23</td>
								<td date-month="12" date-day="24">24</td>
								<td date-month="12" date-day="25">25</td>
								<td date-month="12" date-day="26">26</td>
								<td date-month="12" date-day="27">27</td>
								<td date-month="12" date-day="28" class="event-uncomplited event">28</td>
							</tr>
							<tr>
								<td date-month="12" date-day="29">29</td>
								<td date-month="12" date-day="30">30</td>
								<td date-month="12" date-day="31">31</td>
							</tr>
							</tbody>
						</table>
						<div class="list">


							<div id="accordion-1" role="tablist" aria-multiselectable="true" class="day-event" date-month="12" date-day="2">
								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">TODAY’S EVENTS</h6>
								</div>
								<div class="card">
									<div class="card-header" role="tab" id="headingOne-1">
										<div class="event-time">
											<span class="circle"></span>
											<time datetime="2004-07-24T18:18"></time>
											<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
										</div>
										<h5 class="mb-0">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-1" aria-expanded="true" aria-controls="collapseOne-1">
												Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
											</a>
										</h5>
									</div>

									<div id="collapseOne-1" class="collapse" role="tabpanel">
										<div class="card-body">
											Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
										</div>
										<div class="place inline-items">
											<svg class="olymp-add-a-place-icon"><use xlink:href="icons/icons.svg#olymp-add-a-place-icon"></use></svg>
											<span>Daydreamz Agency</span>
										</div>

										<ul class="friends-harmonic inline-items">
											<li>
												<a href="#">
													<img src="img/friend-harmonic5.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic10.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic7.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic8.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic2.jpg" alt="friend">
												</a>
											</li>
											<li class="with-text">
												Will Assist
											</li>
										</ul>
									</div>
								</div>

								<div class="card">
									<div class="card-header" role="tab" id="headingTwo-1">
										<div class="event-time">
											<span class="circle"></span>
											<time datetime="2004-07-24T18:18">9:00am</time>
											<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
										</div>
										<h5 class="mb-0">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo-1" aria-expanded="true" aria-controls="collapseTwo-1">
												Send the new “Olympus” project files to the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
											</a>
										</h5>
									</div>

									<div id="collapseTwo-1" class="collapse" role="tabpanel">
										<div class="card-body">
											Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
										</div>
									</div>

								</div>

								<div class="card">
									<div class="card-header" role="tab" id="headingThree-1">
										<div class="event-time">
											<span class="circle"></span>
											<time datetime="2004-07-24T18:18">6:30am</time>
											<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
										</div>
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false">
												Take Querty to the Veterinarian
											</a>
										</h5>
									</div>
									<div class="place inline-items">
										<svg class="olymp-add-a-place-icon"><use xlink:href="icons/icons.svg#olymp-add-a-place-icon"></use></svg>
										<span>Daydreamz Agency</span>
									</div>
								</div>

								<a href="#" class="check-all">Check all your Events</a>
							</div>

							<div id="accordion-2" role="tablist" aria-multiselectable="true" class="day-event" date-month="12" date-day="10">
								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">TODAY’S EVENTS</h6>
								</div>
								<div class="card">
									<div class="card-header" role="tab" id="headingOne-2">
										<div class="event-time">
											<span class="circle"></span>
											<time datetime="2004-07-24T18:18">9:00am</time>
											<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
										</div>
										<h5 class="mb-0">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2">
												Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
											</a>
										</h5>
									</div>

									<div id="collapseOne-2" class="collapse" role="tabpanel">
										<div class="card-body">
											Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
										</div>
										<div class="place inline-items">
											<svg class="olymp-add-a-place-icon"><use xlink:href="icons/icons.svg#olymp-add-a-place-icon"></use></svg>
											<span>Daydreamz Agency</span>
										</div>

										<ul class="friends-harmonic inline-items">
											<li>
												<a href="#">
													<img src="img/friend-harmonic5.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic10.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic7.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic8.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic2.jpg" alt="friend">
												</a>
											</li>
											<li class="with-text">
												Will Assist
											</li>
										</ul>
									</div>

								</div>

								<a href="#" class="check-all">Check all your Events</a>
							</div>

							<div id="accordion-3" role="tablist" aria-multiselectable="true" class="day-event" date-month="12" date-day="15">
								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">TODAY’S EVENTS</h6>
								</div>
								<div class="card">
									<div class="card-header" role="tab" id="headingOne-3">
										<div class="event-time">
											<span class="circle"></span>
											<time datetime="2004-07-24T18:18">9:00am</time>
											<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
										</div>
										<h5 class="mb-0">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-3" aria-expanded="true" aria-controls="collapseOne-3">
												Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
											</a>
										</h5>
									</div>

									<div id="collapseOne-3" class="collapse" role="tabpanel">
										<div class="card-body">
											Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
										</div>

										<div class="place inline-items">
											<svg class="olymp-add-a-place-icon"><use xlink:href="icons/icons.svg#olymp-add-a-place-icon"></use></svg>
											<span>Daydreamz Agency</span>
										</div>

										<ul class="friends-harmonic inline-items">
											<li>
												<a href="#">
													<img src="img/friend-harmonic5.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic10.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic7.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic8.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic2.jpg" alt="friend">
												</a>
											</li>
											<li class="with-text">
												Will Assist
											</li>
										</ul>
									</div>

								</div>

								<div class="card">
									<div class="card-header" role="tab" id="headingTwo-3">
										<div class="event-time">
											<span class="circle"></span>
											<time datetime="2004-07-24T18:18">12:00pm</time>
											<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
										</div>
										<h5 class="mb-0">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo-3" aria-expanded="true" aria-controls="collapseTwo-3">
												Send the new “Olympus” project files to the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
											</a>
										</h5>
									</div>

									<div id="collapseTwo-3" class="collapse" role="tabpanel">
										<div class="card-body">
											Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
										</div>
									</div>

								</div>

								<div class="card">
									<div class="card-header" role="tab" id="headingThree-3">
										<div class="event-time">
											<span class="circle"></span>
											<time datetime="2004-07-24T18:18">6:30pm</time>
											<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
										</div>
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false">
												Take Querty to the Veterinarian
											</a>
										</h5>
									</div>
									<div class="place inline-items">
										<svg class="olymp-add-a-place-icon"><use xlink:href="icons/icons.svg#olymp-add-a-place-icon"></use></svg>
										<span>Daydreamz Agency</span>
									</div>
								</div>

								<a href="#" class="check-all">Check all your Events</a>
							</div>

							<div id="accordion-4" role="tablist" aria-multiselectable="true" class="day-event" date-month="12" date-day="28">
								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">TODAY’S EVENTS</h6>
								</div>
								<div class="card">
									<div class="card-header" role="tab" id="headingOne-4">
										<div class="event-time">
											<span class="circle"></span>
											<time datetime="2004-07-24T18:18">9:00am</time>
											<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
										</div>
										<h5 class="mb-0">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-4" aria-expanded="true" aria-controls="collapseOne-4">
												Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
											</a>
										</h5>
									</div>

									<div id="collapseOne-4" class="collapse" role="tabpanel" aria-labelledby="headingOne-4">
										<div class="card-body">
											Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
										</div>
										<div class="place inline-items">
											<svg class="olymp-add-a-place-icon"><use xlink:href="icons/icons.svg#olymp-add-a-place-icon"></use></svg>
											<span>Daydreamz Agency</span>
										</div>

										<ul class="friends-harmonic inline-items">
											<li>
												<a href="#">
													<img src="img/friend-harmonic5.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic10.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic7.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic8.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic2.jpg" alt="friend">
												</a>
											</li>
											<li class="with-text">
												Will Assist
											</li>
										</ul>
									</div>

								</div>

								<a href="#" class="check-all">Check all your Events</a>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Pages You May Like</h6>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>

				<ul class="widget w-friend-pages-added notification-list friend-requests">
					<li class="inline-items">
						<div class="author-thumb">
							<img src="img/avatar41-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">The Marina Bar</a>
							<span class="chat-message-item">Restaurant / Bar</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>

					</li>

					<li class="inline-items">
						<div class="author-thumb">
							<img src="img/avatar42-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Tapronus Rock</a>
							<span class="chat-message-item">Rock Band</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
					</li>

					<li class="inline-items">
						<div class="author-thumb">
							<img src="img/avatar43-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Pixel Digital Design</a>
							<span class="chat-message-item">Company</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
					</li>

					<li class="inline-items">
						<div class="author-thumb">
							<img src="img/avatar44-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Thompson’s Custom Clothing Boutique</a>
							<span class="chat-message-item">Clothing Store</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
					</li>

					<li class="inline-items">
						<div class="author-thumb">
							<img src="img/avatar45-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Crimson Agency</a>
							<span class="chat-message-item">Company</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
					</li>

					<li class="inline-items">
						<div class="author-thumb">
							<img src="img/avatar46-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Mannequin Angel</a>
							<span class="chat-message-item">Clothing Store</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
					</li>

				</ul>

			</div>
		</aside>

		<!-- ... end Left Sidebar -->


		<!-- Right Sidebar -->

		<aside class="col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-xs-12">

			<div class="ui-block">
				<div class="widget w-birthday-alert">
					<div class="icons-block">
						<svg class="olymp-cupcake-icon"><use xlink:href="icons/icons.svg#olymp-cupcake-icon"></use></svg>
						<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
					</div>

					<div class="content">
						<div class="author-thumb">
							<img src="img/avatar48-sm.jpg" alt="author">
						</div>
						<span>Today is</span>
						<a href="#" class="h4 title">Marina Valentine’s Birthday!</a>
						<p>Leave her a message with your best wishes on her profile page!</p>
					</div>
				</div>
			</div>


			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Friend Suggestions</h6>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>

				<ul class="widget w-friend-pages-added notification-list friend-requests">
					<li class="inline-items">
						<div class="author-thumb">
							<img src="img/avatar38-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Francine Smith</a>
							<span class="chat-message-item">8 Friends in Common</span>
						</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>

					</li>

					<li class="inline-items">
						<div class="author-thumb">
							<img src="img/avatar39-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Hugh Wilson</a>
							<span class="chat-message-item">6 Friends in Common</span>
						</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>

					</li>

					<li class="inline-items">
						<div class="author-thumb">
							<img src="img/avatar40-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Karen Masters</a>
							<span class="chat-message-item">6 Friends in Common</span>
						</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>

					</li>

				</ul>

			</div>

			<div class="ui-block">

				<div class="ui-block-title">
					<h6 class="title">Activity Feed</h6>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>

				<ul class="widget w-activity-feed notification-list">
					<li>
						<div class="author-thumb">
							<img src="img/avatar49-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Marina Polson</a> commented on Jason Mark’s <a href="#" class="notification-link">photo.</a>.
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 mins ago</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="img/avatar9-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Jake Parker </a> liked Nicholas Grissom’s <a href="#" class="notification-link">status update.</a>.
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">5 mins ago</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="img/avatar50-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Mary Jane Stark </a> added 20 new photos to her <a href="#" class="notification-link">gallery album.</a>.
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">12 mins ago</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="img/avatar51-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Nicholas Grissom </a> updated his profile <a href="#" class="notification-link">photo</a>.
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">1 hour ago</time></span>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img src="img/avatar48-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Marina Valentine </a> commented on Chris Greyson’s <a href="#" class="notification-link">status update</a>.
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">1 hour ago</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="img/avatar52-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Green Goo Rock </a> posted a <a href="#" class="notification-link">status update</a>.
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">1 hour ago</time></span>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img src="img/avatar10-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Elaine Dreyfuss  </a> liked your <a href="#" class="notification-link">blog post</a>.
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 hours ago</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="img/avatar10-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Elaine Dreyfuss  </a> commented on your <a href="#" class="notification-link">blog post</a>.
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 hours ago</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="img/avatar53-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Bruce Peterson </a> changed his <a href="#" class="notification-link">profile picture</a>.
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">15 hours ago</time></span>
						</div>
					</li>

				</ul>
			</div>


			<div class="ui-block">
				<div class="widget w-action">

					<img src="img/logo.png" alt="Olympus">
					<div class="content">
						<h4 class="title">OLYMPUS</h4>
						<span>THE BEST SOCIAL NETWORK THEME IS HERE!</span>
						<a href="01-LandingPage.html" class="btn btn-bg-secondary btn-md">Register Now!</a>
					</div>
				</div>
			</div>

		</aside>

		<!-- ... end Right Sidebar -->

	</div>
</div>
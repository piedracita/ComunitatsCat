<!DOCTYPE html>
<html lang="ca">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Demo Construction | Porto - Multipurpose Website Template</title>	

		<meta name="keywords" content="comunitat, administrador, pressupost, veïns, lleida, tarrega, bellpuig, mollerussa" />
		<meta name="description" content="Administració de Comunitats. Gestió de Finques. Troba'ns a Lleida, Mollerussa, Tàrrega i Bellpuig" />
		<meta name="author" content="comunitats.cat">

		<!-- COMMON-HEAD-STYLE -->
		<?php include "common-php/head-style.html"; ?>
		<!-- COMMON-HEAD-STYLE END -->

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	
	<body data-plugin-scroll-spy data-plugin-options="{'target': '#sidebar'}">

		<div class="body">
			<!-- COMMON-HEADER-CA -->
			<?php include "common-php/header/ca.html"; ?>
			<!-- COMMON-HEADER-CA END -->

			<div role="main" class="main">

				<section class="section section-height-3 border-0 m-0">
				    <div class="container position-relative pt-5 pb-5-5 mt-5 mb-5">
				        <div class="row justify-content-end pt-1 mt-lg-5">
				            <div class="col-7 col-md-5 position-relative">
				                <ul class="breadcrumb d-block ps-2 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="200">
									<li><a href="/">Inici</a></li>
									<li class="active">Contacta'ns</li>
								</ul>
				                <h1 class="position-absolute top-100 left-0 text-color-light font-weight-bold text-6 line-height-3 text-end mt-5-5">
				                    <span class="d-block position-relative z-index-1 pb-5 ps-lg-3 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="800">Contacta'ns</span>
				                    <span class="custom-svg-position-1 custom-svg-position-1-variation">
				                        <svg class="svg-fill-color-dark mt-1 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="400" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 859.45 88.44" xml:space="preserve" preserveAspectRatio="none">
				                            <polyline points="7.27,84.78 855.17,84.78 855.17,4.79 84.74,4.79 "/>
				                        </svg>
				                    </span>
				                </h1>
				            </div>
				        </div>
				    </div>
				</section>

				<div class="container pt-4 pb-5 pb-sm-0 my-5">
					<div class="row pb-2 mb-5">
						<div class="col-lg-6 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1200">
							<div class="row">
								<div class="col-auto">
									<h3 class="d-block text-color-grey positive-ls-3 font-weight-medium text-2 mb-1">Trucan's</h3>
									<a href="tel:+34625171701" target="_blank" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5">
										<img width="23" height="23" src="img/icons/phone.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark me-2'}" />
										625 171 701
									</a>
								</div>
								<div class="col-auto">
									<h3 class="d-block text-color-grey positive-ls-3 font-weight-medium text-2 mb-1">ENVIAR E-MAIL</h3>
									<a href="mailto:admin@comunitats.cat" target="_blank" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5">
										<img width="23" height="23" src="img/icons/email.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark me-2'}" />
										admin@comunitats.cat
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1600">
							<h3 class="d-block text-color-grey positive-ls-3 font-weight-medium text-2 mb-1">TROBA'NS</h3>
							<span class="d-flex align-items-center text-color-dark font-weight-bold text-3-5">
								<img width="23" height="23" src="img/icons/location.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark me-2'}" />Alcalde Sala 2 | Bellpuig, 25250 | Lleida
							</span><br>
							<span class="d-flex align-items-center text-color-dark font-weight-bold text-3-5">
								<img width="23" height="23" src="img/icons/location.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark me-2'}" />Roger de Llúria 13-15 | Tarragona, 43004 | Tarragona
							</span><br>
							<span class="d-flex align-items-center text-color-dark font-weight-bold text-3-5">
								<img width="23" height="23" src="img/icons/location.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark me-2'}" />Carrer del Sol 60 | Salou, 43840 | Salou
							</span>
						</div>
					</div>

					<!-- <div class="row">
						<div class="col-lg-6 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1400">
							<h2 class="font-weight-bold text-color-dark text-6 mb-0">Send Us a Message</h2>
							<p class="text-3-5 font-weight-light mb-5-5">Contact us or give us a call to discover how we can help.</p>
							<form class="contact-form form-style-3" action="php/contact-form.php" method="POST">
								<div class="contact-form-success alert alert-success d-none mt-4">
									<strong>Success!</strong> Your message has been sent to us.
								</div>

								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>

								<div class="row">
									<div class="form-group col mb-3-5">
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-3-5" name="name" placeholder="Your Name" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col mb-3-5">
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-3-5" name="email" placeholder="Your E-mail Address" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col mb-3-5">
										<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-3-5" name="subject" placeholder="Subject" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col mb-3-5">
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-3-5" name="message" placeholder="Message" required></textarea>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<button type="submit" class="custom-view-more d-inline-flex align-items-center btn btn-primary font-weight-semibold rounded-0 text-3-5 btn-px-4 btn-py-2" data-loading-text="Loading...">
											Submit
											<img width="27" height="27" src="img/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light ms-2'}" />
										</button>
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-6 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1800">
							<h2 class="font-weight-bold text-color-dark text-6 mb-0">Corporate Headquarters</h2>
							<p class="text-3-5 font-weight-light mb-5-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							<div id="googlemaps" class="google-map m-0" style="min-height: 450px;"></div>
						</div>
					</div> -->
				</div>

				<div class="position-relative pb-5 d-none d-xl-block">
					<div class="position-absolute transform3dy-n50 left-0">
						<div class="appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1500" data-appear-animation-duration="1500ms">
							<div class="custom-square-1 bg-primary mt-0 mb-5"></div>
						</div>
					</div>
				</div>

			</div>

			<!-- COMMON-FOOTER-CA -->
			<?php include "common-php/footer/ca.html"; ?>
			<!-- COMMON-FOOTER-CA END -->

		</div>

		<!-- COMMON-BODY-SCRIPTS -->
		<?php include "common-php/body-scripts.html"; ?>
		<!-- COMMON-BODY-SCRIPTS END -->

	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- https://www.latlong.net/
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			function initializeGoogleMaps() {
				// Map Markers
				var mapMarkers = [{
					address: "New York, NY 10017",
					html: "<strong>Corporate Headquarters</strong><br>New York, NY 10017",
					icon: {
						image: "img/pin.png",
						iconsize: [26, 46],
						iconanchor: [12, 46]
					},
					popup: true
				}];

				// Map Initial Location
				var initLatitude = 40.75198;
				var initLongitude = -73.96978;

				// Map Extended Settings
				var mapSettings = {
					controls: {
						draggable: (($.browser.mobile) ? false : true),
						panControl: true,
						zoomControl: true,
						mapTypeControl: true,
						scaleControl: true,
						streetViewControl: true,
						overviewMapControl: true
					},
					scrollwheel: false,
					markers: mapMarkers,
					latitude: initLatitude,
					longitude: initLongitude,
					zoom: 16
				};

				var map = $('#googlemaps').gMap(mapSettings),
					mapRef = $('#googlemaps').data('gMap.reference');

				// Create an array of styles.
				var mapColor = "#cfa968";

				var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

				var styledMap = new google.maps.StyledMapType(styles, {
					name: 'Styled Map'
				});

				mapRef.mapTypes.set('map_style', styledMap);
				mapRef.setMapTypeId('map_style');
			}

			// Initialize Google Maps when element enter on browser view
			theme.fn.intObs( '.google-map', 'initializeGoogleMaps()', {} );

			// Map text-center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

		</script>

	</body>
</html>
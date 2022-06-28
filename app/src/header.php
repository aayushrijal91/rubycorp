<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./assets/images/favicon.png" type="image/png">
	<title><?= $site ?></title>
	<link rel="stylesheet" href="./assets/css/main.css?v=0.1">

	<!-- Recaptcha Here -->
	<script src="https://www.google.com/recaptcha/api.js?render=<?= $recaptcha_client_secret ?>"></script>
	<script>
		grecaptcha.ready(function() {
			grecaptcha.execute('<?= $recaptcha_client_secret ?>', {
				action: 'contact'
			}).then(function(token) {
				document.getElementById('recaptchaResponse').value = token;
			});
		});
	</script>
</head>

<body>
	<header>
		<div class="header-top-bar">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-12 col-xxl-11">
						<div class="row justify-content-center justify-content-lg-between align-items-center">
							<div class="col-10 col-md-auto pb-3 pb-md-4 pb-lg-0">
								<a href="./">
									<?= renderImg("logo.png", "logo") ?>
								</a>
							</div>
							<div class="col-12 col-lg col-xl-auto btn-wrapper">
								<div class="row justify-content-center justify-content-md-between justify-content-lg-end no-gutters align-items-center">
									<div class="col-12 col-md-auto d-none d-md-block d-lg-none d-xl-block">
										<div class="row no-gutters justify-content-center py-2 px-3 h25">
											<div class="col-auto pr-4 pr-lg-5">
												<div class="pulse pulsating-circle"></div>
											</div>
											<div class="col-auto">
												<div class="opening-status text-uppercase">We are Open</div>
											</div>
											<div class="col-auto px-2">|</div>
											<div class="col-auto">
												<div class="current-time">3:11 PM</div>
											</div>
										</div>
									</div>
									<div class="col-6 col-md-auto pr-1 px-md-2">
										<a href="#form-quote" class="btn btn-block h24 fw-500 line-height-1 px-lg-6">
											Get A Quote
										</a>
									</div>
									<div class="col-6 col-md-auto pl-1 px-md-2">
										<a href="tel:<?= $phone_number ?>" class="btn px-lg-4">
											<div class="pr-3 d-md-none">
												<svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
													<g clip-path="url(#clip0_22_711)">
														<path d="M20.0373 18.951C19.9748 18.3456 19.6363 17.8054 19.1083 17.4678L15.5281 15.1798C14.6959 14.6501 13.576 14.754 12.8674 15.4331L11.9253 16.3353C11.3725 16.259 10.0583 15.9438 8.71039 14.652C7.3625 13.3603 7.03362 12.1008 6.95393 11.5711L7.89532 10.6683C8.60328 9.98982 8.71451 8.91727 8.159 8.11775L5.77221 4.68742C5.41995 4.18137 4.85623 3.85699 4.2245 3.79711C3.59276 3.73853 2.97411 3.94976 2.52575 4.37948L1.03367 5.80871C0.323043 6.48982 -0.0518635 7.42029 0.00579274 8.36194C0.118386 10.1952 0.947183 13.8835 5.22978 17.9877C9.51307 22.0918 13.361 22.8861 15.274 22.994C16.2361 23.0516 17.2185 22.6994 17.9375 22.0089L19.4296 20.579C19.878 20.1493 20.0998 19.5558 20.0373 18.951Z" fill="white" />
														<path d="M13.4531 6.10352e-05C13.0645 6.10352e-05 12.75 0.301442 12.75 0.673889C12.75 1.04634 13.0645 1.34772 13.4531 1.34772C18.4931 1.34772 22.5938 5.27748 22.5938 10.1075C22.5938 10.4799 22.9082 10.7813 23.2969 10.7813C23.6855 10.7813 24 10.4799 24 10.1075C24 4.53394 19.269 6.10352e-05 13.4531 6.10352e-05ZM13.4531 2.69537C13.0645 2.69537 12.75 2.99675 12.75 3.3692C12.75 3.74165 13.0645 4.04303 13.4531 4.04303C16.9426 4.04303 19.7813 6.76336 19.7813 10.1075C19.7813 10.4799 20.0957 10.7813 20.4844 10.7813C20.873 10.7813 21.1875 10.4799 21.1875 10.1075C21.1875 6.02045 17.7179 2.69537 13.4531 2.69537ZM13.4531 5.39069C13.0645 5.39069 12.75 5.69207 12.75 6.06451C12.75 6.43696 13.0645 6.73834 13.4531 6.73834C15.3915 6.73834 16.9688 8.24983 16.9688 10.1075C16.9688 10.4799 17.2832 10.7813 17.6719 10.7813C18.0605 10.7813 18.375 10.4799 18.375 10.1075C18.375 7.50691 16.1667 5.39069 13.4531 5.39069ZM13.4531 8.086C13.0645 8.086 12.75 8.38738 12.75 8.75983C12.75 9.13227 13.0645 9.43365 13.4531 9.43365C13.8411 9.43365 14.1563 9.73571 14.1563 10.1075C14.1563 10.4799 14.4707 10.7813 14.8594 10.7813C15.248 10.7813 15.5625 10.4799 15.5625 10.1075C15.5625 8.99279 14.6163 8.086 13.4531 8.086Z" fill="white" />
													</g>
													<defs>
														<clipPath id="clip0_22_711">
															<rect width="24" height="23" fill="white" />
														</clipPath>
													</defs>
												</svg>
											</div>
											<div class="pr-3 d-none d-md-block">
												<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
													<g clip-path="url(#clip0_12_145)">
														<path d="M33.0229 32.4164C32.9208 31.3837 32.3673 30.4621 31.5041 29.8862L25.6511 25.983C24.2906 25.0794 22.4597 25.2567 21.3012 26.4152L19.761 27.9542C18.8574 27.824 16.7088 27.2863 14.5052 25.0827C12.3016 22.8791 11.764 20.7306 11.6337 19.8269L13.1727 18.2867C14.3301 17.1294 14.512 15.2997 13.6038 13.9357L9.70178 8.08388C9.12588 7.22061 8.20429 6.66724 7.17151 6.56509C6.13872 6.46516 5.12732 6.82549 4.39432 7.55856L1.95502 9.99672C0.79326 11.1586 0.180348 12.7459 0.274607 14.3523C0.45868 17.4798 1.81363 23.7717 8.81498 30.773C15.8175 37.7744 22.1083 39.1294 25.2357 39.3134C26.8086 39.4117 28.4146 38.8109 29.5901 37.6329L32.0294 35.1936C32.7625 34.4606 33.1251 33.4481 33.0229 32.4164Z" fill="white" />
														<path d="M22.2589 0.0875854C21.6235 0.0875854 21.1094 0.601717 21.1094 1.23708C21.1094 1.87245 21.6235 2.38658 22.2589 2.38658C30.4984 2.38658 37.2023 9.09044 37.2023 17.33C37.2023 17.9654 37.7165 18.4795 38.3518 18.4795C38.9872 18.4795 39.5013 17.9654 39.5013 17.33C39.5012 7.82201 31.7669 0.0875854 22.2589 0.0875854ZM22.2589 4.68557C21.6235 4.68557 21.1094 5.1997 21.1094 5.83507C21.1094 6.47043 21.6235 6.98456 22.2589 6.98456C27.9637 6.98456 32.6043 11.6252 32.6043 17.33C32.6043 17.9654 33.1185 18.4795 33.7538 18.4795C34.3892 18.4795 34.9033 17.9654 34.9033 17.33C34.9033 10.3579 29.231 4.68557 22.2589 4.68557ZM22.2589 9.28356C21.6235 9.28356 21.1094 9.79769 21.1094 10.4331C21.1094 11.0684 21.6235 11.5826 22.2589 11.5826C25.4279 11.5826 28.0064 14.161 28.0064 17.33C28.0064 17.9654 28.5205 18.4795 29.1559 18.4795C29.7912 18.4795 30.3053 17.9654 30.3053 17.33C30.3053 12.8937 26.6952 9.28356 22.2589 9.28356ZM22.2589 13.8815C21.6235 13.8815 21.1094 14.3957 21.1094 15.031C21.1094 15.6664 21.6235 16.1805 22.2589 16.1805C22.8931 16.1805 23.4084 16.6958 23.4084 17.33C23.4084 17.9654 23.9225 18.4795 24.5579 18.4795C25.1932 18.4795 25.7074 17.9654 25.7074 17.33C25.7074 15.4285 24.1604 13.8815 22.2589 13.8815Z" fill="white" />
													</g>
													<defs>
														<clipPath id="clip0_12_145">
															<rect width="39.2361" height="39.2361" fill="white" transform="translate(0.265137 0.0875244)" />
														</clipPath>
													</defs>
												</svg>
											</div>
											<div class="text-left">
												<div class="h34">Call Us Today</div>
												<div class="h24 line-height-1 fw-700"><?= $phone_number ?></div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="banner">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-12 col-xxl-11">
						<div class="row align-items-center">
							<div class="col-lg-6 pt-5 pb-4 py-md-5">
								<div class="text-white fw-800 h2 line-height-1"><span class="text-primary">We've Got You Covered On</span> All of Your Sydney Plumbing Needs.</div>
								<div class="text-white h31 pt-4 pb-3 pb-md-4">Our expert technicians come with a wealth of knowledge to take on any job no matter how<br class="d-none d-xl-block"> large or small the job is.</div>
								<?php
								$cta = [
									["24 Hour Emergency Service", "Anytime You Need Us, We Will Be There"],
									["Flexible Payment Options", "Payment Plans with Brighte"],
									["5 Star Google Reviews", "Providing Ourselves With Happy Clients"],
									["Fully Licensed & Insured", "Fully Licensed And Insured Plumber In Sydney"]
								];

								foreach ($cta as $c) {
								?>
									<div class="row no-gutters align-items-center py-3">
										<div class="col-2 col-md-auto pr-3 pr-md-4"><?= renderImg("droplet.png", "icons") ?></div>
										<div class="col">
											<div class="fw-600 h16 text-white line-height-1"><?= $c[0] ?></div>
											<div class="fw-300 h26 text-primary"><?= $c[1] ?></div>
										</div>
									</div>
								<?php
								}
								?>
							</div>
							<div class="col-lg-6 d-flex justify-content-center align-items-center banner-right-wrapper">
								<div class="banner-right">
									<?= renderImg("banner-promo.png", "lib") ?>
									<div class="row no-gutters justify-content-center banner-buttons">
										<div class="col-8 col-md-6 col-lg-9 col-xl-6">
											<div class="row no-gutters">
												<div class="col-6 pr-1">
													<a href="tel: <?= $phone_number ?>" class="btn btn-block btn-white text-secondary rounded-pill h28 fw-500 line-height-1 py-2 py-md-3">Call Now</a>
												</div>
												<div class="col-6 pl-1">
													<a href="#form" class="btn btn-block btn-secondary text-white border-white rounded-pill h28 fw-500 line-height-1 py-2 py-md-3">Enquire Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
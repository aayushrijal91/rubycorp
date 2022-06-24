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
					<div class="col-12 col-lg-11">
						<div class="row justify-content-center justify-content-lg-between align-items-center">
							<div class="col-auto">
								<a href="./">
									<?= renderImg("logo.png", "logo") ?>
								</a>
							</div>
							<div class="col-auto">
								<div class="row justify-content-center justify-content-lg-end no-gutters align-items-center">
									<div class="col-12 col-md-auto">
										<div class="row no-gutters justify-content-center py-2 px-3 h25">
											<div class="col-auto pr-5">
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
									<div class="col-12 col-md-auto px-2">
										<a href="#form-quote" class="btn h24 fw-500 line-height-1 px-6">
											Get A Quote
										</a>
									</div>
									<div class="col-12 col-md-auto px-2">
										<a href="tel:<?= $phone_number ?>" class="btn px-4">
											<div class="pr-3">
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
												<div class="h33">Call Us Today</div>
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
					<div class="col-12 col-lg-11">
						<div class="row">
							<div class="col-lg-6"></div>
							<div class="col-lg-6"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
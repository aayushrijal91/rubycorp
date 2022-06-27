<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<section class="cta">
    <div class="container-fluid">
        <div class="row justify-content-end">
            <div class="col-12 col-xl-11 pr-5">
                <div class="row no-gutters justify-content-between align-items-center">
                    <div class="col-auto text-white py-3">
                        <div class="fw-400 h20">Check Out Our</div>
                        <div class="fw-800 h11 line-height-1">5 Star Reviews</div>
                    </div>
                    <div class="col-auto">
                        <?= renderImg("ratings.png", "lib") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xxl-11">
                <div class="main-container">
                    <div class="row no-gutters justify-content-between align-items-center pb-3">
                        <div>
                            <div class="fw-700 h2 line-height-1">Book A Plumber</div>
                            <div class="h15 line-height-1">Same Day Service or <span class="text-primary fw-700 text-uppercase">$50 off your job</span></div>
                        </div>
                        <?= renderImg("logo.png", "logo") ?>
                    </div>
                    <div class="text-capitalize text-grey h30 fw-300 pt-3">Please fill in the 3-Step form & submit your job to be contacted in return. We are available 24/7 for emergency call-outs.</div>
                    <hr class="bg-light-grey">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-choose">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xxl-11">
                <div class="h3 text-center line-height-1 pb-4"><span class="fw-800 text-primary">Why Choose</span> RubyCorp Plumbing</div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-4 py-3"><?= renderImg("pensioners-seniors.png", "lib", "w-100") ?></div>
                    <div class="col-12 col-md-6 col-lg-4 py-3"><?= renderImg("servicing-sydney.png", "lib", "w-100") ?></div>
                    <div class="col-12 col-md-6 col-lg-4 py-3"><?= renderImg("free-safety-inspections.png", "lib", "w-100") ?></div>
                    <div class="col-12 col-md-6 col-lg-6 py-3"><?= renderImg("highly-reviewed.png", "lib", "w-100") ?></div>
                    <div class="col-12 col-md-6 col-lg-6 py-3"><?= renderImg("professional-plumbers.png", "lib", "w-100") ?></div>
                    <div class="col-12 pt-3"><?= renderImg("24-hrs-emergency-service.png", "lib", "w-100") ?></div>
                    <div class="col-12 col-md-4 col-lg-3 col-xl-2 why-choose-btn">
                        <a href="tel: <?= $phone_number ?>" class="btn btn-block btn-primary rounded-pill h24">Call Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 text-center h4 fw-700 line-height-1 text-dark-grey"><span class="text-primary">We Offer</span> Competitive Rates <span class="text-primary">And</span> Fast Service.</div>
            <div class="col-12 text-center text-dark-grey h32 pb-5">Our plumbers service Sydney-wide including Western Sydney, Eastern Sydney, Sydney CBD, and Greater Sydney.</div>
        </div>
        <?php $services = [
            [
                "img" => "leaking-tap-repair",
                "title" => "Leaking Tap Repair",
                "subtitle" => "Priding Ourselves With Happy Clients",
            ],
            [
                "img" => "burst-leaking-pipes",
                "title" => "Burst and Leaking Pipes",
                "subtitle" => "Priding Ourselves With Happy Clients",
            ],
            [
                "img" => "blocked-toilets-drains",
                "title" => "Blocked Toilets and Drains",
                "subtitle" => "Priding Ourselves With Happy Clients",
            ],
            [
                "img" => "hot-water-systems",
                "title" => "Hot Water Systems",
                "subtitle" => "Priding Ourselves With Happy Clients",
            ],
            [
                "img" => "gas-plumbing",
                "title" => "Gas Plumbing",
                "subtitle" => "Priding Ourselves With Happy Clients",
            ],
            [
                "img" => "shower-issues",
                "title" => "Shower Issues",
                "subtitle" => "Priding Ourselves With Happy Clients",
            ]
        ] ?>

        <div class="row">
            <?php foreach ($services as $service) { ?>
                <div class="col-12 col-md-6 col-lg-4 py-3">
                    <div class="service-card">
                        <?= renderImg($service["img"] . ".png", "lib", "w-100") ?>
                        <div class="title">
                            <div class="help">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="icon">
                                            <?= renderImg($service["img"] . ".svg", "icons") ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="tel: <?= $phone_number ?>" class="btn btn-white rounded-pill call-btn">Call Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="letter-spacing-n02 fw-700 h18 pt-3"><?= $service["title"] ?></div>
                            <div class="h30"><?= $service["subtitle"] ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="quick-contact mt-3">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="letter-spacing-n02 fw-800 line-height-1 h7"><span class="text-primary">24 Hour</span> Emergency Service</div>
                    <div class="letter-spacing-n02 fw-400 h33"><span class="fw-600">Our Team Are On Stand By For The Event Of An Emergency</span> You Can Count On RubyCrop For Rapid Response.</div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="row no-gutters">
                        <div class="col-6 pr-1">
                            <a href="tel: <?= $phone_number ?>" class="btn btn-block btn-primary text-white rounded-pill fw-800 h24 line-height-1 py-3">Call Now</a>
                        </div>
                        <div class="col-6 pl-1">
                            <a href="#form" class="btn btn-block btn-secondary text-white rounded-pill fw-800 h24 line-height-1 py-3">Enquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
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
                    <form id="regForm" action="form.php" method="POST">
                        <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                        <div class="row justify-content-between align-items-end">
                            <div class="col-12">
                                <hr class="separator d-md-none">
                                <div class="tab">
                                    <div class="form-row form-wrapper">
                                        <div class="col-12 col-md-6">
                                            <label for="">First Name</label>
                                            <input type="text" class="form-control" placeholder="e.g. John" oninput="this.className = 'form-control rounded-0 '" name="firstName" required>
                                        </div>
                                        <div class="col-12 col-md-6 pt-2 pt-md-0">
                                            <label for="">Last Name</label>
                                            <input type="text" class="form-control" placeholder="e.g. Smith" oninput="this.className = 'form-control rounded-0'" name="lastName" required>
                                        </div>
                                        <div class="col-12 col-md-6 pt-2 pt-md-4">
                                            <label for="">Contact Number</label>
                                            <input type="tel" class="form-control" placeholder="e.g. 0400 000 000" oninput="this.className = 'form-control rounded-0'" name="phone">
                                        </div>
                                        <div class="col-12 col-md-6 pt-2 pt-md-4">
                                            <label for="">Contact Email Address</label>
                                            <input type="email" class="form-control" placeholder="e.g. example@email.com" oninput="this.className = 'form-control rounded-0'" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="form-row form-wrapper">
                                        <div class="col-12 col-md-6">
                                            <label for="">Street Number &amp; Name</label>
                                            <input type="text" class="form-control" placeholder="e.g. 123 George St" oninput="this.className = 'form-control rounded-0 '" name="street" required>
                                        </div>
                                        <div class="col-12 col-md-6 pt-2 pt-md-0">
                                            <label for="">Suburb</label>
                                            <input type="text" class="form-control" placeholder="e.g. Suburb" oninput="this.className = 'form-control rounded-0'" name="suburb" required>
                                        </div>
                                        <div class="col-12 col-md-6 pt-2 pt-md-4">
                                            <label for="">Postcode</label>
                                            <input type="tel" class="form-control" placeholder="e.g. 1234" oninput="this.className = 'form-control rounded-0'" name="postcode">
                                        </div>
                                        <div class="col-12 col-md-6 pt-2 pt-md-4">
                                            <label for="">State</label>
                                            <select class="form-control rounded-0" name="state" required>
                                                <option selected>NSW</option>
                                                <option>ACT</option>
                                                <option>Queensland</option>
                                                <option>Victoria</option>
                                                <option>Western Australia</option>
                                                <option>Northern Territory</option>
                                                <option>South Australia</option>
                                                <option>Tasmania</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="form-row form-wrapper">
                                        <div class="col-12 col-md-6">
                                            <label for="">Service Required</label>
                                            <select class="form-control rounded-0" name="service" required>
                                                <option selected disabled>Select a Service</option>
                                                <option>Leaking Tap Repairs</option>
                                                <option>Burst & Leaking Pipes</option>
                                                <option>Blocked Toilets & Drains</option>
                                                <option>Hot Water Systems, Repairs & Replacements</option>
                                                <option>Gas Plumbing</option>
                                                <option>Shower Issues</option>
                                                <option>Stormwater Drains</option>
                                                <option>24 Hour Emergency Plumbing Services</option>
                                                <option>Gas Installation & Repairs</option>
                                                <option>Toilet Installation & Repairs</option>
                                                <option>Tap Installation & Repairs</option>
                                                <option>Jet Blasting</option>
                                                <option>Pipe Relining</option>
                                                <option>CCTV Drain Inspections</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 pt-2 pt-md-0">
                                            <label for="">Message (Optional)</label>
                                            <input type="text" class="form-control" placeholder="Message" oninput="this.className = 'form-control rounded-0'" name="message" required>
                                        </div>
                                        <div class="col-12 pt-2 pt-md-4">
                                            <label for="">Upload Photos You Think May help prior to visiting</label>
                                            <input type="tel" class="form-control" placeholder="e.g. 1234" oninput="this.className = 'form-control rounded-0'" name="postcode">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <div class="row no-gutters justify-content-between">
                                    <div class="col-12 col-lg-5 d-flex align-items-center">
                                        <svg width="31" height="38" viewBox="0 0 31 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0266 0.490936C13.2027 0.611616 11.9014 0.93122 11.1997 1.18531C6.76985 2.78881 3.49902 6.61211 2.48805 11.3682C2.24766 12.4992 2.16076 14.6089 2.30681 15.7689L2.41441 16.6239L2.16438 16.8143C1.35304 17.4323 0.704107 18.5229 0.54656 19.5335C0.427471 20.2968 0.428002 33.4201 0.547179 34.2441C0.801005 36.0001 2.29302 37.4965 4.0362 37.7432C4.88185 37.863 26.2788 37.8616 27.1113 37.7418C27.4517 37.6929 27.9818 37.5351 28.2894 37.3915C28.9695 37.0737 29.8614 36.2151 30.1949 35.557C30.6907 34.5786 30.6893 34.6028 30.6893 26.8715C30.6893 19.1076 30.6896 19.1125 30.1812 18.1777C29.9355 17.7258 29.1878 16.8856 28.8927 16.7296C28.7422 16.65 28.7369 16.5925 28.8264 16.0158C28.9636 15.1313 28.9463 13.1005 28.7931 12.107C27.9051 6.34821 23.75 1.88366 18.1377 0.657767C17.4935 0.517106 14.6389 0.4012 14.0266 0.490936ZM17.5093 5.56321C21.8151 6.61715 24.649 11.0737 23.9184 15.6423L23.8617 15.997H15.5624C8.98285 15.997 7.26283 15.9741 7.26159 15.8865C7.26071 15.8258 7.22242 15.4181 7.17636 14.9807C6.89699 12.3243 7.91662 9.57324 9.87862 7.68966C11.1885 6.43211 12.4762 5.76603 14.249 5.42892C15.1071 5.2658 16.5345 5.32459 17.5093 5.56321ZM16.499 21.3488C17.6276 21.6428 18.5341 22.4039 19.0482 23.489C19.3132 24.0487 19.3312 24.1483 19.3312 25.0591C19.3312 25.9675 19.3128 26.0705 19.0514 26.6222C18.7494 27.2597 18.2065 27.9092 17.7291 28.2043L17.4304 28.3889L17.4284 30.0394C17.4262 31.9132 17.3619 32.1726 16.7714 32.6912C16.3596 33.0526 16.1158 33.1487 15.6094 33.1487C14.792 33.1487 14.0707 32.6274 13.8474 31.8752C13.755 31.5642 13.717 30.9983 13.7168 29.9277L13.7164 28.4187L13.2273 28.0409C11.8771 26.9982 11.3871 25.0129 12.1039 23.4899C12.9062 21.7853 14.7417 20.8911 16.499 21.3488Z" fill="#939393" />
                                        </svg>
                                        <div class="text-grey font-roboto pl-3">
                                            <div class="fw-500 h30 line-height-1">All Information Provided Will Be Kept 100% Secure.</div>
                                            <div class="fw-300 h37">If You Have Any Concerns You Are Free To Call Us On <?= $phone_number ?></div>
                                        </div>
                                    </div>
                                    <div class="col d-flex">
                                        <button type="button" class="btn bg-light btn-block text-primary rounded-5 fw-700 text-uppercase mt-0 mr-2" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                        <button type="button" class="btn bg-secondary btn-block text-white rounded-5 fw-700 text-uppercase mt-0 ml-2" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters pt-5 pt-md-7">
                            <div class="col-12 d-md-none text-center pb-4 fw-600 text-secondary text-uppercase" id="progress-question-number"></div>
                            <div class="col-4 step"><span class="d-none text-uppercase text-secondary fw-600">Question 1 of
                                    3</span></div>
                            <div class="col-4 step"><span class="d-none text-uppercase text-secondary fw-600">Question 2 of
                                    3</span></div>
                            <div class="col-4 step"><span class="d-none text-uppercase text-secondary fw-600">Question 3 of
                                    3</span></div>
                        </div>
                    </form>
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

<section class="projects">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 px-5">
                <div class="text-center text-white text-uppercase h3 fw-700 pt-5">Our Projects</div>
                <div class="text-dark-grey text-center h30 pb-4">With over <span class="fw-700">10 Years</span> in the maintenance industry we have provided a leading plumbing service across Sydney and surrounding areas.</div>
                <div class="project active" d-name="recent-projects">
                    <div class="row justify-content-between">
                        <div class="col-auto">Our Recent</div>
                        <div class="col-auto">
                            <svg width="18" height="29" viewBox="0 0 18 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.43066 26.1006L15.2081 14.1611L2.43066 2.22136" stroke="currentColor" stroke-width="4.05564" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="project" d-name="hot-water-systems">
                    <div class="row justify-content-between">
                        <div class="col-auto">Hot Water Systems</div>
                        <div class="col-auto">
                            <svg width="18" height="29" viewBox="0 0 18 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.43066 26.1006L15.2081 14.1611L2.43066 2.22136" stroke="currentColor" stroke-width="4.05564" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="project" d-name="gas-installations">
                    <div class="row justify-content-between">
                        <div class="col-auto">Gas Installations</div>
                        <div class="col-auto">
                            <svg width="18" height="29" viewBox="0 0 18 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.43066 26.1006L15.2081 14.1611L2.43066 2.22136" stroke="currentColor" stroke-width="4.05564" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="project" d-name="leaking-taps-toilets">
                    <div class="row justify-content-between">
                        <div class="col-auto">Leaking Taps &amp; Toilets</div>
                        <div class="col-auto">
                            <svg width="18" height="29" viewBox="0 0 18 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.43066 26.1006L15.2081 14.1611L2.43066 2.22136" stroke="currentColor" stroke-width="4.05564" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="project" d-name="burst-pipes">
                    <div class="row justify-content-between">
                        <div class="col-auto">Burst Pipes</div>
                        <div class="col-auto">
                            <svg width="18" height="29" viewBox="0 0 18 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.43066 26.1006L15.2081 14.1611L2.43066 2.22136" stroke="currentColor" stroke-width="4.05564" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="project-images active" id="recent-projects">
                    <div class="row no-gutters">
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-1.png", "lib", "w-100") ?></div>
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-2.png", "lib", "w-100") ?></div>
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-3.png", "lib", "w-100") ?></div>
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-4.png", "lib", "w-100") ?></div>
                    </div>
                </div>
                <div class="project-images" id="hot-water-systems">
                    <div class="row no-gutters">
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-2.png", "lib", "w-100") ?></div>
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-1.png", "lib", "w-100") ?></div>
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-4.png", "lib", "w-100") ?></div>
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-3.png", "lib", "w-100") ?></div>
                    </div>
                </div>
                <div class="project-images" id="gas-installations">
                    <div class="row no-gutters">
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-3.png", "lib", "w-100") ?></div>
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-4.png", "lib", "w-100") ?></div>
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-1.png", "lib", "w-100") ?></div>
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-2.png", "lib", "w-100") ?></div>
                    </div>
                </div>
                <div class="project-images" id="leaking-taps-toilets">
                    <div class="row no-gutters">
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-4.png", "lib", "w-100") ?></div>
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-2.png", "lib", "w-100") ?></div>
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-3.png", "lib", "w-100") ?></div>
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-1.png", "lib", "w-100") ?></div>
                    </div>
                </div>
                <div class="project-images" id="burst-pipes">
                    <div class="row no-gutters">
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-2.png", "lib", "w-100") ?></div>
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-1.png", "lib", "w-100") ?></div>
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-4.png", "lib", "w-100") ?></div>
                        <div class="col-md-6 p-3"><?= renderImg("project-recent-3.png", "lib", "w-100") ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="brands">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-11">
                <div class="row align-items-center justify-content-between">
                    <div class="col-2">
                        <div class="h27 fw-700">Proud Suppliers <br>
                            & Partners</div>
                    </div>
                    <div class="col overflow-hidden">
                        <div class="brands-slider">
                            <div><?= renderImg("rheem.png", "logo") ?></div>
                            <div><?= renderImg("aquamax.png", "logo") ?></div>
                            <div><?= renderImg("vulcan.png", "logo") ?></div>
                            <div><?= renderImg("rinnai.png", "logo") ?></div>
                            <div><?= renderImg("stiebel.png", "logo") ?></div>
                            <div><?= renderImg("thermann.png", "logo") ?></div>
                            <div><?= renderImg("chromagen.png", "logo") ?></div>
                            <div><?= renderImg("bosch.png", "logo") ?></div>
                            <div><?= renderImg("reece.png", "logo") ?></div>
                            <div><?= renderImg("everhot.png", "logo") ?></div>
                            <div><?= renderImg("braemar.png", "logo") ?></div>
                            <div><?= renderImg("dux.png", "logo") ?></div>
                            <div><?= renderImg("caroma.png", "logo") ?></div>
                            <div><?= renderImg("bonaire.png", "logo") ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="payments">
    <div class="container-fluid px-0">
        <div class="row no-gutters justify-content-between align-items-center">
            <div class="col-auto">
                <div class="brighte text-center">
                    <?= renderImg("brighte.png", "logo", "pb-3") ?>
                    <div class="text-white h9 line-height-1">Get Started With</div>
                    <div class="text-white h9 fw-800 line-height-1">Payment Plans with Brighte</div>
                </div>
            </div>
            <div class="col-auto text-white line-height-1 h10">
                We Accept All<br> Forms <span class="fw-700">Of Payments</span>
            </div>
            <div class="col-4">
                <?= renderImg("payment-medium.png", "lib") ?>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
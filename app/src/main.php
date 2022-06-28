<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<section class="cta">
    <div class="container-fluid">
        <div class="row justify-content-end">
            <div class="col-12 col-xxl-11 pr-xxl-5">
                <div class="row no-gutters justify-content-center justify-content-lg-between align-items-center">
                    <div class="col-auto text-white py-3 text-center text-lg-left">
                        <div class="fw-400 h20">Check Out Our</div>
                        <div class="fw-800 h11 line-height-1">5 Star Reviews</div>
                    </div>
                    <div class="col-12 col-lg-8 col-xl-9 col-xxl-auto d-none d-md-block">
                        <a href="https://www.google.com/maps/place/Rubycorp+Plumbing+Services+Pty+Ltd/@-33.9296035,151.0885434,15z/data=!4m2!3m1!1s0x0:0x4bfc6c5fa2b59e95?sa=X&ved=2ahUKEwjLi9y4q8_4AhVBUGwGHTW5CjUQ_BJ6BAg3EAU" target="_blank"><?= renderImg("ratings.png", "lib") ?></a>
                    </div>
                    <div class="col-12 col-md-auto d-md-none pb-4">
                    <a href="https://www.google.com/maps/place/Rubycorp+Plumbing+Services+Pty+Ltd/@-33.9296035,151.0885434,15z/data=!4m2!3m1!1s0x0:0x4bfc6c5fa2b59e95?sa=X&ved=2ahUKEwjLi9y4q8_4AhVBUGwGHTW5CjUQ_BJ6BAg3EAU" target="_blank"><?= renderImg("ratings-sm.png", "lib", "w-100") ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form" id="form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xxl-11">
                <div class="main-container">
                    <div class="row no-gutters justify-content-between align-items-center pb-3">
                        <div>
                            <div class="fw-700 h2 line-height-1">Book A Plumber</div>
                            <div class="h15 line-height-1">Same Day Service or <span class="text-primary fw-700 text-uppercase">$50 off your job</span></div>
                        </div>
                        <?= renderImg("logo.png", "logo", "d-none d-lg-block") ?>
                    </div>
                    <div class="text-capitalize text-grey h30 fw-300 pt-3">Please fill in the 3-Step form & submit your job to be contacted in return. We are available 24/7 for emergency call-outs.</div>
                    <hr class="bg-light-grey">
                    <form id="regForm" action="./src/form" method="POST">
                        <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                        <div class="row justify-content-between align-items-end">
                            <div class="col-12">
                                <div class="tab">
                                    <div class="form-row form-wrapper">
                                        <div class="col-12 col-md-6">
                                            <label for="">First Name</label>
                                            <input type="text" class="form-control" placeholder="e.g. John" oninput="this.className = 'form-control rounded-0 '" name="firstName" required>
                                        </div>
                                        <div class="col-12 col-md-6 pt-3 pt-md-0">
                                            <label for="">Last Name</label>
                                            <input type="text" class="form-control" placeholder="e.g. Smith" oninput="this.className = 'form-control rounded-0'" name="lastName" required>
                                        </div>
                                        <div class="col-12 col-md-6 pt-3 pt-md-4">
                                            <label for="">Contact Number</label>
                                            <input type="tel" class="form-control" placeholder="e.g. 0400 000 000" oninput="this.className = 'form-control rounded-0'" name="phone">
                                        </div>
                                        <div class="col-12 col-md-6 pt-3 pt-md-4">
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
                                        <div class="col-12 col-md-6 pt-3 pt-md-0">
                                            <label for="">Suburb</label>
                                            <input type="text" class="form-control" placeholder="e.g. Suburb" oninput="this.className = 'form-control rounded-0'" name="suburb" required>
                                        </div>
                                        <div class="col-12 col-md-6 pt-3 pt-md-4">
                                            <label for="">Postcode</label>
                                            <input type="tel" class="form-control" placeholder="e.g. 1234" oninput="this.className = 'form-control rounded-0'" name="postcode">
                                        </div>
                                        <div class="col-12 col-md-6 pt-3 pt-md-4">
                                            <label for="">State</label>
                                            <select class="form-control" name="state" required>
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
                                            <select class="form-control" name="service" required>
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
                                        <div class="col-12 col-md-6 pt-3 pt-md-0">
                                            <label for="">Message (Optional)</label>
                                            <input type="text" class="form-control" placeholder="Message" oninput="this.className = 'form-control rounded-0'" name="message" required>
                                        </div>
                                        <div class="col-12 pt-3 pt-md-4">
                                            <div class="row no-gutters justify-content-between align-items-center">
                                                <div class="col-12 col-md-auto pr-4">
                                                    <label for="file-upload" class="my-0" id="file-label">
                                                        <div class="bg-light rounded-0 line-height-2 h30 fw-600 font-poppins py-3 px-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 20 20">
                                                                <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z" />
                                                            </svg> Attach File
                                                        </div>
                                                    </label>
                                                    <input id="file-upload" class="form-control rounded-0" type="file" name="uploadedFile">
                                                </div>
                                                <div class="col-12 col-md pt-3 pt-md-0">
                                                    <div class="h30 font-poppins">Improved Quote Accuracy (optional)</div>
                                                    <div class="text-dark-grey h35 font-poppins fw-300" id="uploaded-file-name">Send
                                                        us an image of your problem, so we can provide you an accurate quote
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <div class="row no-gutters justify-content-between">
                                    <div class="col-12 col-md-6 col-lg-7 col-xl-5 d-none d-md-flex align-items-center">
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
                                        <button type="button" class="btn bg-secondary btn-block text-white rounded-5 fw-700 text-uppercase mt-0 ml-md-2" id="nextBtn" onclick="nextPrev(1)">Next</button>
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
                <div class="d-none d-md-block h3 text-center line-height-1 pb-4"><span class="fw-800 text-primary">Why Choose</span> RubyCorp Plumbing</div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-4 py-1 py-md-2 py-lg-3"><?= renderImg("pensioners-seniors.png", "lib", "w-100") ?></div>
                    <div class="col-12 col-md-4 py-1 py-md-2 py-lg-3"><?= renderImg("servicing-sydney.png", "lib", "w-100") ?></div>
                    <div class="col-12 col-md-4 py-1 py-md-2 py-lg-3"><?= renderImg("free-safety-inspections.png", "lib", "w-100") ?></div>
                    <div class="col-12 col-md-6 py-1 py-md-2 py-lg-3"><?= renderImg("highly-reviewed.png", "lib", "w-100") ?></div>
                    <div class="col-12 col-md-6 py-1 py-md-2 py-lg-3"><?= renderImg("professional-plumbers.png", "lib", "w-100") ?></div>
                    <div class="col-12 pt-3 d-md-none"><?= renderImg("24-hrs-emergency-service-sm.jpg", "lib", "w-100") ?></div>
                    <div class="col-12 pt-md-2 pt-lg-3 d-none d-md-block"><?= renderImg("24-hrs-emergency-service.png", "lib", "w-100") ?></div>
                    <div class="col-8 col-md-4 col-lg-3 col-xl-2 why-choose-btn">
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
            <div class="col-md-9 col-xl-7 col-xxl-6 text-center h4 fw-700 line-height-1 text-dark-grey"><span class="text-primary">We Offer</span> Competitive Rates <span class="text-primary">And</span> Fast Service.</div>
            <div class="col-12 text-center text-dark-grey h32 pt-3 pb-4 pb-md-5">Our plumbers service Sydney-wide including Western Sydney, Eastern Sydney, Sydney CBD, and Greater Sydney.</div>
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
                <div class="col-12 col-md-6 col-xl-4 py-3">
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
                <div class="col col-xl-auto">
                    <div class="letter-spacing-n02 fw-800 line-height-1 h7"><span class="text-primary">24 Hour</span> Emergency Service</div>
                    <div class="letter-spacing-n02 fw-400 h33"><span class="fw-600">Our Team Are On Stand By For The Event Of An Emergency</span> You Can Count On RubyCrop For Rapid Response.</div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row no-gutters">
                        <div class="col-xl-6 pr-xl-1">
                            <a href="tel: <?= $phone_number ?>" class="btn btn-block btn-primary text-white rounded-pill fw-800 h24 line-height-1 py-3">Call Now</a>
                        </div>
                        <div class="col-xl-6 pt-2 pt-xl-0 pl-xl-1">
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
            <div class="col-12 col-lg-6 px-md-5">
                <div class="text-center text-white text-uppercase h3 fw-700 pb-4 pb-md-0 pt-xxl-5">Our Projects</div>
                <div class="text-dark-grey text-center h30 pb-4 d-none d-md-block">With over <span class="fw-700">10 Years</span> in the maintenance industry we have provided a leading plumbing service across Sydney and surrounding areas.</div>
                <div class="project active" d-name="recent-projects">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">Our Recent</div>
                        <div class="col-auto">
                            <svg width="18" height="29" viewBox="0 0 18 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.43066 26.1006L15.2081 14.1611L2.43066 2.22136" stroke="currentColor" stroke-width="4.05564" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="project" d-name="hot-water-systems">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">Hot Water Systems</div>
                        <div class="col-auto">
                            <svg width="18" height="29" viewBox="0 0 18 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.43066 26.1006L15.2081 14.1611L2.43066 2.22136" stroke="currentColor" stroke-width="4.05564" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="project" d-name="gas-installations">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">Gas Installations</div>
                        <div class="col-auto">
                            <svg width="18" height="29" viewBox="0 0 18 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.43066 26.1006L15.2081 14.1611L2.43066 2.22136" stroke="currentColor" stroke-width="4.05564" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="project" d-name="leaking-taps-toilets">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">Leaking Taps &amp; Toilets</div>
                        <div class="col-auto">
                            <svg width="18" height="29" viewBox="0 0 18 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.43066 26.1006L15.2081 14.1611L2.43066 2.22136" stroke="currentColor" stroke-width="4.05564" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="project" d-name="burst-pipes">
                    <div class="row justify-content-between align-items-center">
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
            <div class="col-12 col-xxl-11">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-2 pb-4 pb-lg-0">
                        <div class="h27 fw-400 line-height-1">Proud <span class="fw-700">Suppliers <br class="d-none d-lg-block">& Partners</span></div>
                    </div>
                    <div class="col-12 col-md overflow-hidden">
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
            <div class="col-xl-auto">
                <div class="brighte text-center">
                    <?= renderImg("brighte.png", "logo", "pb-3") ?>
                    <div class="text-white h9 line-height-1">Get Started With</div>
                    <div class="text-white h9 fw-800 line-height-1">Payment Plans with Brighte</div>
                </div>
            </div>
            <div class="col col-xxl-auto text-white line-height-1 h10 p-4 py-xl-0">
                We Accept All<br> Forms <span class="fw-700">Of Payments</span>
            </div>
            <div class="col-6 col-xl-3 col-xxl-4 p-4 py-xl-0 px-xxl-0">
                <?= renderImg("payment-medium.png", "lib") ?>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container px-0 px-lg-3">
        <div class="h3 text-center d-none d-md-block">What Our <span class="text-primary fw-800">Clients Say</span></div>
        <div class="main-wrapper">
            <div class="row no-gutters justify-content-end justify-content-lg-between align-items-lg-end align-items-xl-start">
                <div class="col-lg-7 col-xl-6 col-xxl-7 testimonial-main">
                    <div class="row no-gutters align-items-xxl-center">
                        <div class="col-auto pr-4">
                            <svg width="57" height="50" viewBox="0 0 57 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.375 50H2.375C1.06341 50 0 48.9351 0 47.619V23.8095C0 11.8001 4.48908 3.85045 13.342 0.180193C14.5538 -0.319712 15.942 0.255764 16.4453 1.47067C16.9462 2.68672 16.3699 4.07831 15.158 4.58172C8.72535 7.2475 5.32867 12.7697 4.81842 21.4286H21.375C22.6866 21.4286 23.75 22.4946 23.75 23.8095V47.619C23.75 48.9351 22.6866 50 21.375 50Z" fill="#28A3E7" />
                                <path d="M54.625 50H35.625C34.3134 50 33.25 48.9351 33.25 47.619V23.8095C33.25 11.8001 37.7391 3.85045 46.592 0.180193C47.8004 -0.319712 49.192 0.255764 49.6953 1.47065C50.1962 2.68669 49.6199 4.07829 48.408 4.58169C41.9753 7.2475 38.5787 12.7697 38.0684 21.4286H54.625C55.9366 21.4286 57 22.4946 57 23.8095V47.619C57 48.9351 55.9366 50 54.625 50Z" fill="#28A3E7" />
                            </svg>
                        </div>
                        <div class="col col-xxl-auto sub_heading">Clients Testimonials</div>
                    </div>
                    <div class="testimonial-slider">
                        <div class="testimonial-slider-content">
                            <div class="quote">“well priced and definitely someone you can trust”</div>
                            <div class="h35">
                                <p>Justin is a great bloke to deal with, very professional, honest, on time and his work is top notch unlike most of the dodgy plumbers you find in Sydney. He is also well priced and definitely someone you can trust to do an honest and great job. He went a long way in clearing the blockage in my sewer line from both sides of the entry points, even went the extra mile to remove the toilet.</p>

                                <p>And confirmed the pipes are free from both sides by having the camera in and flushing toilet. I am well versed in the construction trade and I can fully vouch for him, its rare for me to be fully satisfied with tradies, he is one of the very few good ones. Thanks a lot mate, legend.</p>
                            </div>
                            <div class="username">James</div>
                            <div class="">
                                <svg width="105" height="18" viewBox="0 0 105 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.83837 0.000488281L11.5398 5.12065L17.2442 6.10765L13.2094 10.2591L14.0334 15.9892L8.83837 13.4348L3.6433 15.9892L4.46736 10.2591L0.43258 6.10765L6.13693 5.12065L8.83837 0.000488281Z" fill="#FAE056" />
                                    <path d="M30.6692 0L33.3706 5.12016L39.075 6.10716L35.0402 10.2586L35.8642 15.9888L30.6692 13.4343L25.4741 15.9888L26.2982 10.2586L22.2634 6.10716L27.9677 5.12016L30.6692 0Z" fill="#FAE056" />
                                    <path d="M52.5 0L55.2014 5.12016L60.9058 6.10716L56.871 10.2586L57.695 15.9888L52.5 13.4343L47.3049 15.9888L48.129 10.2586L44.0942 6.10716L49.7986 5.12016L52.5 0Z" fill="#FAE056" />
                                    <path d="M74.331 0L77.0325 5.12016L82.7368 6.10716L78.702 10.2586L79.5261 15.9888L74.331 13.4343L69.136 15.9888L69.96 10.2586L65.9253 6.10716L71.6296 5.12016L74.331 0Z" fill="#FAE056" />
                                    <path d="M96.1616 0L98.863 5.12016L104.567 6.10716L100.533 10.2586L101.357 15.9888L96.1616 13.4343L90.9665 15.9888L91.7906 10.2586L87.7558 6.10716L93.4602 5.12016L96.1616 0Z" fill="#FAE056" />
                                </svg>
                            </div>
                        </div>
                        <div class="testimonial-slider-content">
                            <div class="quote">“well priced and definitely someone you can trust”</div>
                            <div class="h35">
                                <p>Justin is a great bloke to deal with, very professional, honest, on time and his work is top notch unlike most of the dodgy plumbers you find in Sydney. He is also well priced and definitely someone you can trust to do an honest and great job. He went a long way in clearing the blockage in my sewer line from both sides of the entry points, even went the extra mile to remove the toilet.</p>

                                <p>And confirmed the pipes are free from both sides by having the camera in and flushing toilet. I am well versed in the construction trade and I can fully vouch for him, its rare for me to be fully satisfied with tradies, he is one of the very few good ones. Thanks a lot mate, legend.</p>
                            </div>
                            <div class="username">Charles</div>
                            <div class="">
                                <svg width="105" height="18" viewBox="0 0 105 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.83837 0.000488281L11.5398 5.12065L17.2442 6.10765L13.2094 10.2591L14.0334 15.9892L8.83837 13.4348L3.6433 15.9892L4.46736 10.2591L0.43258 6.10765L6.13693 5.12065L8.83837 0.000488281Z" fill="#FAE056" />
                                    <path d="M30.6692 0L33.3706 5.12016L39.075 6.10716L35.0402 10.2586L35.8642 15.9888L30.6692 13.4343L25.4741 15.9888L26.2982 10.2586L22.2634 6.10716L27.9677 5.12016L30.6692 0Z" fill="#FAE056" />
                                    <path d="M52.5 0L55.2014 5.12016L60.9058 6.10716L56.871 10.2586L57.695 15.9888L52.5 13.4343L47.3049 15.9888L48.129 10.2586L44.0942 6.10716L49.7986 5.12016L52.5 0Z" fill="#FAE056" />
                                    <path d="M74.331 0L77.0325 5.12016L82.7368 6.10716L78.702 10.2586L79.5261 15.9888L74.331 13.4343L69.136 15.9888L69.96 10.2586L65.9253 6.10716L71.6296 5.12016L74.331 0Z" fill="#FAE056" />
                                    <path d="M96.1616 0L98.863 5.12016L104.567 6.10716L100.533 10.2586L101.357 15.9888L96.1616 13.4343L90.9665 15.9888L91.7906 10.2586L87.7558 6.10716L93.4602 5.12016L96.1616 0Z" fill="#FAE056" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters justify-content-between align-items-end">
                        <div class="col-3">
                            <div class="slick-slider-dots"></div>
                        </div>
                        <div class="col-auto">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto d-flex pr-3">
                                    <div id="arrow-prev" class="testimonial-arrow pr-1">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.0488 9L11.2166 15.8321L18.0488 22.6643" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <rect x="0.5" y="0.5" width="30.2656" height="30.2656" rx="4.5" stroke="currentColor" />
                                        </svg>
                                    </div>
                                    <div id="arrow-next" class="testimonial-arrow">
                                        <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13 9L19.8322 15.8321L13 22.6643" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <rect x="1.29785" y="0.5" width="30.2656" height="30.2656" rx="4.5" stroke="currentColor" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <a href="https://www.google.com/maps/place/Rubycorp+Plumbing+Services+Pty+Ltd/@-33.9296035,151.0885434,15z/data=!4m2!3m1!1s0x0:0x4bfc6c5fa2b59e95?sa=X&ved=2ahUKEwjLi9y4q8_4AhVBUGwGHTW5CjUQ_BJ6BAg3EAU"><?= renderImg("google.png", "icons") ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto col-lg col-xxl-auto testimonial-img">
                    <?= renderImg("testimonial.png", "lib", "w-100") ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gmb">
    <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13241.7920543475!2d151.0885434!3d-33.9296035!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4bfc6c5fa2b59e95!2sRubycorp%20Plumbing%20Services%20Pty%20Ltd!5e0!3m2!1sen!2sau!4v1656394877328!5m2!1sen!2sau" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="social-links">
        <div class="row no-gutters">
            <div class="col-auto">
                <div class="gmb-wrapper">
                    <div class="gmb-img"><?= renderImg("gmb.png", "lib") ?></div>
                    <div class="row no-gutters p-3 text-white justify-content-between">
                        <div class="col-auto fw-700 h27">Follow Us</div>
                        <div class="col-auto d-flex align-items-center">
                            <a href="https://www.facebook.com/RubycorpPlumbing/" target="_blank" class="px-2">
                                <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.69145 0.032458C5.33825 0.192334 4.26254 0.81309 3.59733 1.81802C3.3797 2.14673 3.19182 2.5645 3.07587 2.97744C2.89924 3.60646 2.87472 3.90598 2.87443 5.43675L2.87418 6.68859H1.43709H0V8.60845V10.5283H1.43709H2.87418V14.8396V19.1509H4.79404H6.71391V14.8396V10.5283H8.18468C9.5915 10.5283 9.65545 10.5265 9.65545 10.4875C9.65545 10.465 9.69113 10.1392 9.73474 9.76333C9.77837 9.38749 9.8288 8.94864 9.84683 8.78809C9.86486 8.62754 9.89958 8.3244 9.92396 8.11445C9.99469 7.50609 10.0821 6.72842 10.0821 6.70765C10.0821 6.69717 9.32357 6.68859 8.39652 6.68859H6.71092L6.72031 5.41429C6.73066 4.00709 6.73479 3.96126 6.87535 3.69753C6.99477 3.47348 7.20638 3.3229 7.51104 3.24521C7.76554 3.18031 8.08375 3.16323 9.03723 3.16323H9.99258L9.98681 1.64193L9.98104 0.120637L9.68139 0.0936915C8.64039 7.8537e-05 7.213 -0.0291573 6.69145 0.032458Z" fill="white" />
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/rubycorpplumbing/?hl=en" target="_blank" class="px-2">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.21966 0.273466C3.80926 0.425645 2.65552 0.96642 1.69771 1.92423C0.824782 2.79716 0.301348 3.83037 0.0842622 5.10883C0.0217173 5.47738 0.0217173 15.603 0.0842622 15.9715C0.301348 17.25 0.824782 18.2832 1.69771 19.1561C2.57064 20.0291 3.60385 20.5525 4.88231 20.7696C5.25087 20.8321 15.3765 20.8321 15.745 20.7696C17.0235 20.5525 18.0567 20.0291 18.9296 19.1561C19.8026 18.2832 20.326 17.25 20.5431 15.9715C20.6056 15.603 20.6056 5.47738 20.5431 5.10883C20.326 3.83037 19.8026 2.79716 18.9296 1.92423C18.0697 1.06429 17.1217 0.57715 15.7956 0.313712C15.6452 0.283823 14.2761 0.27188 10.4655 0.267124C7.64522 0.263615 5.2846 0.266483 5.21966 0.273466ZM15.3249 2.10964C16.217 2.19944 16.9871 2.56864 17.6362 3.2177C18.2852 3.86677 18.6544 4.63684 18.7442 5.52893C18.7955 6.03867 18.7955 15.0417 18.7442 15.5514C18.6544 16.4435 18.2852 17.2136 17.6362 17.8627C16.9871 18.5117 16.217 18.8809 15.3249 18.9707C14.8152 19.022 5.81215 19.022 5.30242 18.9707C4.41032 18.8809 3.64025 18.5117 2.99119 17.8627C2.34212 17.2136 1.97292 16.4435 1.88312 15.5514C1.83184 15.0417 1.83184 6.03867 1.88312 5.52893C1.94567 4.9076 2.14916 4.33906 2.50466 3.79245C2.7152 3.46872 3.24221 2.94171 3.56593 2.73117C4.08788 2.39173 4.69792 2.16746 5.2534 2.11085C5.69398 2.06595 14.8798 2.06487 15.3249 2.10964ZM15.5052 3.74083C14.9889 3.88323 14.6252 4.28157 14.5275 4.81155C14.4236 5.37564 14.7226 5.9514 15.2614 6.22492C15.5185 6.35537 15.906 6.3963 16.1741 6.32123C16.8162 6.14143 17.2413 5.50549 17.1581 4.84883C17.1109 4.47596 16.8041 4.02212 16.4916 3.86299C16.1708 3.69957 15.8148 3.65548 15.5052 3.74083ZM9.65584 5.28263C8.79161 5.37881 7.85016 5.7641 7.10883 6.32498C4.78644 8.08204 4.33304 11.4116 6.09846 13.745C7.49415 15.5898 9.93695 16.3039 12.1423 15.5117C13.5593 15.0027 14.7762 13.7858 15.2852 12.3688C15.9924 10.4 15.5208 8.26566 14.0545 6.79936C12.892 5.63692 11.3256 5.09678 9.65584 5.28263ZM11.1739 7.18081C12.3938 7.49549 13.3472 8.44776 13.6761 9.67994C13.7552 9.97661 13.7661 10.0803 13.7661 10.5402C13.7661 11 13.7552 11.1038 13.6761 11.4004C13.5141 12.0074 13.1341 12.6548 12.7044 13.0561C12.2806 13.4518 11.7376 13.7521 11.1739 13.9026C10.8773 13.9817 10.7735 13.9926 10.3137 13.9926C9.85383 13.9926 9.75009 13.9817 9.45343 13.9026C8.88971 13.7521 8.34671 13.4518 7.92296 13.0561C7.49324 12.6548 7.11329 12.0074 6.95129 11.4004C6.87211 11.1038 6.86125 11 6.86125 10.5402C6.86125 10.0803 6.87211 9.97661 6.95129 9.67994C7.30719 8.34649 8.35838 7.3764 9.72854 7.11705C10.1215 7.04266 10.745 7.07016 11.1739 7.18081Z" fill="white" />
                                </svg>
                            </a>
                            <a href="https://www.google.com/maps/place/Rubycorp+Plumbing+Services+Pty+Ltd/@-33.9296035,151.0885434,15z/data=!4m2!3m1!1s0x0:0x4bfc6c5fa2b59e95?sa=X&ved=2ahUKEwjLi9y4q8_4AhVBUGwGHTW5CjUQ_BJ6BAg3EAU" target="_blank" class="px-2">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.86231 0.395804C8.56478 0.41366 8.48025 0.419889 8.33058 0.435001C7.74031 0.494617 7.15445 0.612537 6.59239 0.784872C6.5285 0.80447 6.45611 0.82657 6.43153 0.834006C6.40696 0.841432 6.303 0.877492 6.20052 0.914132C4.1985 1.62987 2.51263 3.01485 1.41581 4.84484C0.689032 6.05742 0.25192 7.40486 0.13586 8.79039C0.0985937 9.23531 0.0985937 9.84683 0.13586 10.2917C0.342395 12.7574 1.56928 15.0747 3.50033 16.6464C4.45994 17.4275 5.57426 18.0096 6.74878 18.3434C7.43846 18.5394 8.09953 18.6476 8.83103 18.6841C9.065 18.6958 9.69349 18.6904 9.92131 18.6747C11.2177 18.5855 12.3354 18.2994 13.3753 17.7907C14.3488 17.3144 15.1883 16.6747 15.8864 15.8772C17.0489 14.549 17.7605 12.8411 17.9639 10.8905C18.0002 10.5423 18.0107 10.3378 18.0155 9.88752C18.0213 9.33075 18.0063 9.02215 17.9501 8.54016C17.929 8.35923 17.8897 8.07744 17.8793 8.033L17.8746 8.0129H13.5673H9.25999V9.73321V11.4535H11.7231H14.1861L14.1799 11.496C14.1705 11.5602 14.1008 11.829 14.0635 11.945C13.9541 12.2852 13.752 12.7039 13.5589 12.9906C13.2536 13.4439 12.8414 13.8556 12.3789 14.1693C11.7234 14.6139 10.9277 14.9062 10.078 15.0146C9.76838 15.0542 9.67404 15.0595 9.28234 15.0595C8.88773 15.0595 8.79967 15.0542 8.51825 15.0141C7.1222 14.8151 5.84853 14.0537 4.97654 12.8968C4.7611 12.611 4.58246 12.3215 4.42498 12.0031C3.84546 10.8314 3.69283 9.57712 3.97805 8.33015C4.17257 7.47966 4.56298 6.68271 5.11609 6.00699C5.96802 4.96622 7.1622 4.27614 8.45569 4.07715C8.7233 4.03597 8.85086 4.02579 9.16169 4.0208C9.8167 4.01028 10.34 4.08575 10.9178 4.27407C11.5341 4.47496 12.1689 4.84353 12.6415 5.27484C12.6947 5.32342 12.745 5.36809 12.7532 5.37411C12.7662 5.38365 12.9349 5.21821 14.0726 4.08003L15.3772 2.77501L15.3446 2.74646C15.3267 2.73076 15.2604 2.67156 15.1972 2.61489C14.2543 1.76961 13.134 1.13833 11.9309 0.774219C11.232 0.562697 10.5086 0.439362 9.72917 0.398825C9.57785 0.390961 8.97797 0.38887 8.86231 0.395804Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
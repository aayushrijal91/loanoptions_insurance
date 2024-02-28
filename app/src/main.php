<header>
    <div class="navigation_bar py-md-4 py-2">
        <div class="container-fluid">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-4">
                <div class="col-auto">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col-auto d-none d-xl-block">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <p class="text-white fw-700">In partnership with</p>
                        </div>
                        <div class="col-auto">
                            <?= renderImg('acubed-logo.png', 'logo') ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="row justify-content-center align-items-center py-2 py-lg-0">
                        <div class="col-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn btn-primary text-white">
                                <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.8554 14.3002L14.9345 12.3862C14.5466 12.1974 14.113 12.1547 13.7008 12.2646C13.2887 12.3744 12.9209 12.6308 12.6547 12.9939L11.471 14.6233C9.55282 13.2809 7.92591 11.4916 6.70511 9.38188L8.185 8.08115C8.51624 7.78856 8.75026 7.38372 8.85063 6.92963C8.951 6.47554 8.91209 5.99769 8.73996 5.57045L6.99884 1.25716C6.81388 0.799033 6.48707 0.428012 6.07665 0.210199C5.66623 -0.00761358 5.19885 -0.0580721 4.75776 0.0678128L1.44302 1.01517C0.985711 1.14659 0.588098 1.45794 0.325492 1.89025C0.0628867 2.32256 -0.0464734 2.8458 0.0181268 3.36087C0.631973 8.05944 2.61287 12.4129 5.66419 15.7693C8.71552 19.1257 12.6731 21.3045 16.9443 21.9794C17.0321 21.993 17.1206 21.9999 17.2093 22C17.6361 21.9997 18.0507 21.8438 18.3883 21.5567C18.726 21.2696 18.9676 20.8675 19.0754 20.4133L19.9353 16.7655C20.0514 16.2804 20.0065 15.7657 19.8085 15.3138C19.6106 14.8619 19.2726 14.5025 18.8554 14.3002Z" fill="#9159E8" />
                                    <ellipse cx="16.9204" cy="4.71415" rx="3.07669" ry="3.14286" fill="#F33829" />
                                </svg>
                                <span class="ps-2">Talk to a Human</span>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="#form" class="btn btn-secondary rounded-pill">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner" id="form">
        <div class="container">
            <div class="row gy-md-5">
                <div class="col-xl-8">
                    <div class="banner_left">

                        <div class="row justify-content-center align-items-center d-xl-none py-4">
                            <div class="col-auto">
                                <p class="text-white fw-700">In partnership with</p>
                            </div>
                            <div class="col-auto">
                                <?= renderImg('acubed-logo.png', 'logo') ?>
                            </div>
                        </div>
                        <p class="fs-96 lh-1 text-white font-articulat-heavy ls-2 mb-3 text-center text-md-start">More <span class="text-secondary-light">Options.</span> More <span class="text-blue">Insurance.</span></p>
                        <p class="text-white fs-32 fw-700 ls-2 text-capitalize text-center text-md-start">Compare Tailored Insurance Loans Online</p>
                        <p class="text-white fs-20 pb-5 pt-3 text-center text-md-start">Compare realistic insurance loans with powerful data & AI matching technology</p>

                        <form action="#" method="POST" class="form_wrapper rounded-20 bg-white" id="insuranceWidgetForm">
                            <input type="hidden" name="request" value="insurance_form_enquiry">

                            <div class="form-tab" id="form-tab-1" data-currentTab="1">
                                <p class="fw-900 fs-32 mb-4">Select Your Insurance Solution<span class="text-quaternary">.</span></p>

                                <div class="row g-2">
                                    <div class="col-md-6 col-lg-4">
                                        <input type="radio" class="insuranceType" name="insuranceType" id="insurance_business_owners" value="Business Owners" />
                                        <label for="insurance_business_owners" class="insurance_option">
                                            <p class="fw-800 lh-1">Business Owners</p>
                                        </label>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <input type="radio" class="insuranceType" name="insuranceType" id="insurance_auto" value="Auto" />
                                        <label for="insurance_auto" class="insurance_option">
                                            <p class="fw-800 lh-1">Auto</p>
                                        </label>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <input type="radio" class="insuranceType" name="insuranceType" id="insurance_commercial_auto" value="Commercial Auto" />
                                        <label for="insurance_commercial_auto" class="insurance_option">
                                            <p class="fw-800 lh-1">Commercial Auto</p>
                                        </label>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <input type="radio" class="insuranceType" name="insuranceType" id="insurance_workers_compensation" value="Worker's Compensation" />
                                        <label for="insurance_workers_compensation" class="insurance_option">
                                            <p class="fw-800 lh-1">Worker's Compensation</p>
                                        </label>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <input type="radio" class="insuranceType" name="insuranceType" id="insurance_home_owners" value="Home Owners" />
                                        <label for="insurance_home_owners" class="insurance_option">
                                            <p class="fw-800 lh-1">Home Owners</p>
                                        </label>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <input type="radio" class="insuranceType" name="insuranceType" id="insurance_general_public_liability" value="General/Public Liability" />
                                        <label for="insurance_general_public_liability" class="insurance_option">
                                            <p class="fw-800 lh-1">General/Public Liability</p>
                                        </label>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <input type="radio" class="insuranceType" name="insuranceType" id="insurance_cyber" value="Cyber" />
                                        <label for="insurance_cyber" class="insurance_option">
                                            <p class="fw-800 lh-1">Cyber</p>
                                        </label>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <input type="radio" class="insuranceType" name="insuranceType" id="insurance_professional_indeminity" value="Professional Indeminity" />
                                        <label for="insurance_professional_indeminity" class="insurance_option">
                                            <p class="fw-800 lh-1">Professional Indeminity</p>
                                        </label>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <input type="radio" class="insuranceType" name="insuranceType" id="insurance_others" value="Others" />
                                        <label for="insurance_others" class="insurance_option">
                                            <p class="fw-800 lh-1">Others</p>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-tab" id="form-tab-2" data-currentTab="2">
                                <p class="fw-900 fs-32">Enter Business Information<span class="text-quaternary">.</span></p>

                                <div class="row gy-4 my-4">
                                    <div class="col-lg-6">
                                        <label for="companyName" class="fs-20 text-dark fw-800">What’s your <span class="text-tertiary-light">company name?</span></label>
                                        <input id="companyName" type="text" name="company_name" class="form-control" placeholder="Company" required>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="abnNumber" class="fs-20 text-dark fw-800">What’s your <span class="text-tertiary-light">abn?</span></label>
                                        <input id="abnNumber" type="text" name="abn_number" class="form-control" placeholder="ABN" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-auto">
                                        <button type="button" class="goToNextTab btn btn-quaternary text-white fw-700 rounded-pill px-xl-5">Next</button>
                                    </div>

                                    <div class="col-auto">
                                        <button type="button" class="goToPrevTab btn text-primary px-4 py-2 border-none">Go Back</buttton>
                                    </div>
                                </div>
                            </div>

                            <div class="form-tab" id="form-tab-3" data-currentTab="3">
                                <p class="fw-900 fs-32">Enter your Details<span class="text-quaternary">.</span></p>

                                <div class="row gy-4 my-4">
                                    <div class="col-lg-6">
                                        <label for="firstName" class="fs-20 text-dark fw-800">What’s your human <span class="text-tertiary-light">first name?</span></label>
                                        <input id="firstName" type="text" name="first_name" class="form-control" placeholder="First Name" required>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="lastName" class="fs-20 text-dark fw-800">What’s your human <span class="text-tertiary-light">last name?</span></label>
                                        <input id="lastName" type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-auto">
                                        <button type="button" class="goToNextTab btn btn-quaternary text-white fw-700 rounded-pill px-xl-5">Next</button>
                                    </div>

                                    <div class="col-auto">
                                        <button type="button" class="goToPrevTab btn text-primary px-4 py-2 border-none">Go Back</buttton>
                                    </div>
                                </div>
                            </div>

                            <div class="form-tab" id="form-tab-4" data-currentTab="4">
                                <p class="fw-900 fs-32">How can we Contact You<span class="text-quaternary">.</span></p>

                                <div class="row gy-4 my-4">
                                    <div class="col-lg-6">
                                        <label for="emailAddress" class="fs-20 text-dark fw-800">What’s your <span class="text-tertiary-light">email address?</span></label>
                                        <input id="emailAddress" type="text" name="email_address" class="form-control" placeholder="Email" required>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="phoneNumber" class="fs-20 text-dark fw-800">What’s your <span class="text-tertiary-light">contact number?</span></label>
                                        <input id="phoneNumber" type="text" name="phone_number" class="form-control" placeholder="Number" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-auto">
                                        <button type="button" class="goToNextTab btn btn-quaternary text-white fw-700 rounded-pill px-xl-5">Next</button>
                                    </div>

                                    <div class="col-auto">
                                        <button type="button" class="goToPrevTab btn text-primary px-4 py-2 border-none">Go Back</buttton>
                                    </div>
                                </div>
                            </div>

                            <div class="form-tab" id="form-tab-5" data-currentTab="5">
                                <p class="fw-900 fs-32">Best Method of Contact<span class="text-quaternary">.</span></p>

                                <div class="row g-2 my-4">
                                    <div class="col-md-6 col-lg-4">
                                        <input type="radio" class="contactMethod" name="contactMethod" id="contactMethod_email" value="Email" />
                                        <label for="contactMethod_email" class="contact_method_option">
                                            <p class="fw-800 lh-1">Email</p>
                                        </label>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <input type="radio" class="contactMethod" name="contactMethod" id="contactMethod_phone" value="Phone" />
                                        <label for="contactMethod_phone" class="contact_method_option">
                                            <p class="fw-800 lh-1">Phone</p>
                                        </label>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <input type="radio" class="contactMethod" name="contactMethod" id="contactMethod_either" value="Either" checked />
                                        <label for="contactMethod_either" class="contact_method_option">
                                            <p class="fw-800 lh-1">Either</p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-auto">
                                        <button type="submit" class="insuranceSubmitBtn btn btn-quaternary text-white fw-700 rounded-pill px-xl-5">Submit</button>
                                    </div>

                                    <div class="col-auto">
                                        <button type="button" class="goToPrevTab btn text-primary px-4 py-2 border-none">Go Back</buttton>
                                    </div>
                                </div>
                            </div>

                            <div class="form-tab" id="form-tab-6" data-currentTab="6">
                                <p class="fw-900 fs-48 text-center text-tertiary-light">Thankyou For Enquiring!</p>
                                <p class="fw-900 fs-20 text-dark text-center py-3">Our team will get back to you as soon as we can!</p>
                                <p class="text-light-grey text-center pt-5">Made a mistake? <a href="./" class="text-decoration-none fw-800 text-quaternary">Reapply Here</a></p>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="banner_right h-100 rounded-20">
                        <div class="text-center">
                            <p class="font-articulat-heavy ls-2 fs-48 lh-1 text-dark text-capitalize">A Modular Approach to <span class="text-secondary">Insurance & Risk Management</span></p>
                            <p class="py-4 fs-20 text-dark fw-800">Simplify the risk process into smaller, manageable components.</p>
                            <div class="col-auto">
                                <a href="#form" class="btn btn-secondary d-inline-flex rounded-pill rounded-0 text-white px-4 lh-1">Visit A-Cubed</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cta_slider" id="cta_slider">
                <div>
                    <div class="row h-100 align-items-center justify-content-around">
                        <div class="col-auto">
                            <svg width="54" height="50" viewBox="0 0 54 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M38.6072 0.405194C38.2339 0.800751 38.2024 1.02382 38.2024 3.27692V5.71992H22.2153C6.96384 5.71992 6.21407 5.73548 5.92001 6.05878C5.26969 6.77356 5.65482 7.99636 6.60255 8.22647C6.82584 8.28056 14.4433 8.30169 23.5301 8.27297C39.086 8.22406 40.0708 8.20182 40.3841 7.89112C40.6429 7.63415 40.7372 7.15504 40.8096 5.7277L40.9027 3.89424L45.4654 7.13262C47.9749 8.91364 50.1315 10.4725 50.2579 10.5965C50.4391 10.7745 49.4986 11.5251 45.8012 14.1533C43.2236 15.9857 41.0461 17.5125 40.9622 17.5464C40.8783 17.5805 40.8096 16.8555 40.8096 15.9356C40.8096 14.4657 40.7588 14.2054 40.3906 13.7869L39.9716 13.3107L23.7193 13.3105C9.48263 13.3103 7.39851 13.3455 6.91505 13.5942C5.78164 14.1772 5.79803 14.0134 5.79803 24.7022V34.4392L4.55959 35.3181C1.99741 37.1369 0.322998 38.4307 0.137511 38.7349C-0.347623 39.5314 0.106969 39.9317 7.28882 45.0377C11.2209 47.8332 14.4433 50 14.6686 50C14.8884 50 15.2662 49.8409 15.508 49.6463C15.9248 49.311 15.9508 49.1613 16.0086 46.7746L16.0696 44.2566H31.8848C47.452 44.2566 47.706 44.2508 48.0727 43.886C48.6086 43.3528 48.5548 42.5165 47.9544 42.0468C47.4663 41.6648 47.3747 41.6627 30.9393 41.6627C11.366 41.6627 13.4335 41.3548 13.4335 44.2701C13.4335 45.2817 13.395 46.1093 13.3477 46.1093C13.1864 46.1093 3.84278 39.4169 3.78673 39.2612C3.73439 39.1158 12.6512 32.6581 13.1866 32.4538C13.3812 32.3795 13.4335 32.7373 13.4335 34.1394C13.4335 36.9691 11.3395 36.6604 30.5417 36.6604C46.8536 36.6604 46.9067 36.6591 47.3994 36.2735C48.466 35.4389 48.4448 35.6651 48.45 25.1365L48.4546 15.4467L51.1969 13.4976C53.7513 11.6822 53.9427 11.5045 53.9939 10.9038C54.0239 10.5492 53.9401 10.125 53.8077 9.9608C53.6086 9.71457 43.0228 2.13212 40.5508 0.465037C39.6591 -0.136357 39.1341 -0.152476 38.6072 0.405194ZM12.0433 16.4135C11.7586 17.5421 10.046 19.2459 8.91145 19.5292L8.40528 19.6555V17.7826V15.9099H10.2877H12.1703L12.0433 16.4135ZM38.2024 18.2771C38.2024 21.0065 38.373 21.4681 39.3825 21.4681C39.8453 21.4681 40.6018 21.0304 42.6835 19.5586C44.1689 18.5083 45.4863 17.5864 45.6111 17.5097C45.7872 17.4013 45.8379 18.5085 45.8379 22.4689V27.5678L45.0475 27.7795C42.4418 28.4775 40.1096 30.7276 39.487 33.1439L39.2494 34.0666H27.6451H16.0408V31.7757C16.0408 29.7386 15.998 29.4307 15.6547 28.9966C14.9847 28.1492 14.4146 28.3187 11.8817 30.1186C10.6354 31.004 9.34351 31.9311 9.01053 32.1785L8.40528 32.6283V27.5328V22.437L9.38299 22.1232C10.8071 21.6659 11.7327 21.0773 12.8104 19.9438C13.8442 18.8563 14.3915 17.9279 14.7249 16.6962L14.9377 15.9099H26.5702H38.2024V18.2771ZM25.2593 17.2829C22.9299 17.858 20.9022 19.4819 19.9284 21.552C17.6632 26.3678 20.5046 31.8231 25.7818 32.7904C30.4806 33.6518 35.032 29.8129 35.032 24.9882C35.032 19.9375 30.1376 16.0785 25.2593 17.2829ZM29.1651 20.0644C30.9693 20.8144 32.4292 23.0166 32.4292 24.9882C32.4292 26.9447 30.9701 29.1617 29.1975 29.8985C25.2946 31.5208 21.0417 28.1284 21.822 24.0156C22.4442 20.7355 26.077 18.7809 29.1651 20.0644ZM45.8379 32.2139V34.0666H43.87C41.9157 34.0666 41.9028 34.0636 42.0289 33.6497C42.3499 32.5946 43.3148 31.4785 44.5343 30.7513C45.7522 30.0249 45.8379 30.121 45.8379 32.2139Z" fill="#1AE1FF" />
                            </svg>
                        </div>
                        <p class="col">Flexible Terms & Payment Options</p>
                    </div>
                </div>
                <div>
                    <div class="row h-100 align-items-center justify-content-around">
                        <div class="col-auto">
                            <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M25 12V25H12V22.1739H22.1739V12H25Z" fill="#D30012" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M30 40.6383V34H32.9269V40.6383C32.9269 41.2073 33.4528 42.0945 35.2038 42.9219C36.8673 43.7079 39.268 44.234 42 44.234C44.732 44.234 47.1327 43.7079 48.7962 42.9219C50.5472 42.0945 51.0731 41.2073 51.0731 40.6383V34H54V40.6383C54 42.8192 52.1675 44.4213 50.1051 45.3959C47.9553 46.4117 45.0877 47 42 47C38.9123 47 36.0447 46.4117 33.8949 45.3959C31.8325 44.4213 30 42.8192 30 40.6383Z" fill="#D30012" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M30 47.6383V41H32.9269V47.6383C32.9269 48.2073 33.4528 49.0945 35.2038 49.9219C36.8673 50.7079 39.268 51.234 42 51.234C44.732 51.234 47.1327 50.7079 48.7962 49.9219C50.5472 49.0945 51.0731 48.2073 51.0731 47.6383V41H54V47.6383C54 49.8192 52.1675 51.4213 50.1051 52.3959C47.9553 53.4117 45.0877 54 42 54C38.9123 54 36.0447 53.4117 33.8949 52.3959C31.8325 51.4213 30 49.8192 30 47.6383Z" fill="#D30012" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M35.204 31.1669C33.4528 32.0123 32.9269 32.9189 32.9269 33.5C32.9269 34.0811 33.4528 34.9877 35.204 35.8331C36.8676 36.6363 39.2683 37.1739 42 37.1739C44.7317 37.1739 47.1324 36.6363 48.796 35.8331C50.5472 34.9877 51.0731 34.0811 51.0731 33.5C51.0731 32.9189 50.5472 32.0123 48.796 31.1669C47.1324 30.3637 44.7317 29.8261 42 29.8261C39.2683 29.8261 36.8676 30.3637 35.204 31.1669ZM33.8951 28.6391C36.0449 27.6012 38.9125 27 42 27C45.0875 27 47.9551 27.6012 50.1049 28.6391C52.1673 29.6348 54 31.2717 54 33.5C54 35.7283 52.1673 37.3652 50.1049 38.3609C47.9551 39.3988 45.0875 40 42 40C38.9125 40 36.0449 39.3988 33.8951 38.3609C31.8327 37.3652 30 35.7283 30 33.5C30 31.2717 31.8327 29.6348 33.8951 28.6391Z" fill="#D30012" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4807 2.83137C12.0746 2.83137 2.82904 12.0845 2.82904 23.5C2.82904 34.9155 12.0746 44.1686 23.4807 44.1686C24.0146 44.1686 24.5459 44.148 25.0712 44.1081L26.4817 44.0012L26.6954 46.8245L25.285 46.9314C24.69 46.9765 24.0874 47 23.4807 47C10.5122 47 0 36.4792 0 23.5C0 10.5208 10.5122 0 23.4807 0C35.8412 0 45.9715 9.55906 46.8928 21.6939L47 23.1056L44.1791 23.3201L44.0719 21.9085C43.2619 11.2388 34.3508 2.83137 23.4807 2.83137Z" fill="#D30012" />
                            </svg>
                        </div>
                        <p class="col">Quick Decisions &amp; Funding</p>
                    </div>
                </div>
                <div>
                    <div class="row h-100 align-items-center justify-content-around">
                        <div class="col-auto">
                            <svg width="40" height="57" viewBox="0 0 40 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6894 0.722168L19.6953 2.69658L19.701 0.722168C22.8512 0.731298 25.9218 1.71554 28.4937 3.54052C31.0656 5.3655 33.0133 7.94228 34.071 10.9191L30.3631 12.245C29.5774 10.034 28.1307 8.12007 26.2205 6.76456C24.3118 5.41016 22.0332 4.6792 19.6954 4.67123C16.6971 4.68173 13.8245 5.88124 11.7043 8.00824C9.58338 10.1359 8.3876 13.0189 8.3779 16.0278V19.9992C11.6535 17.6564 15.6657 16.2777 20 16.2777C31.0457 16.2777 40 25.232 40 36.2777C40 47.3234 31.0457 56.2777 20 56.2777C8.9543 56.2777 0 47.3234 0 36.2777C0 31.5166 1.66368 27.144 4.44141 23.7096V16.0247L4.44141 16.0189C4.45348 11.9656 6.06384 8.0819 8.92079 5.21584C11.7777 2.34977 15.6491 0.734274 19.6894 0.722168ZM3.87097 36.2777C3.87097 27.3699 11.0922 20.1487 20 20.1487C28.9078 20.1487 36.129 27.3699 36.129 36.2777C36.129 45.1855 28.9078 52.4067 20 52.4067C11.0922 52.4067 3.87097 45.1855 3.87097 36.2777ZM21.481 41.9571V45.9074H17.7773V41.9584C14.7881 41.1462 12.5898 38.4133 12.5898 35.1669C12.5898 31.2805 15.7404 28.1299 19.6269 28.1299C23.5133 28.1299 26.6639 31.2805 26.6639 35.1669C26.6639 38.4116 24.4679 41.1434 21.481 41.9571ZM16.4282 35.1669C16.4282 33.4004 17.8603 31.9683 19.6269 31.9683C21.3934 31.9683 22.8255 33.4004 22.8255 35.1669C22.8255 36.9335 21.3934 38.3656 19.6269 38.3656C17.8603 38.3656 16.4282 36.9335 16.4282 35.1669Z" fill="#1AE1FF" />
                            </svg>
                        </div>
                        <p class="col">Fast Unsecured Business Loans</p>
                    </div>
                </div>
                <div>
                    <div class="row h-100 align-items-center justify-content-around">
                        <div class="col-auto">
                            <svg width="49" height="50" viewBox="0 0 49 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.2197 18.6955L16.1098 0L0 18.6955H10.349V50H18.615V47.175H13.189V15.8705H6.17478L16.1098 4.34085L26.0449 15.8705H19.0306V23.0133H21.8706V18.6955H32.2197Z" fill="#D30012" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0482 23.4262C24.8665 23.4262 22.2873 25.9917 22.2873 29.1565C22.2873 32.3213 24.8665 34.8869 28.0482 34.8869C31.2298 34.8869 33.809 32.3213 33.809 29.1565C33.809 25.9917 31.2298 23.4262 28.0482 23.4262ZM25.1273 29.1565C25.1273 27.5519 26.435 26.2511 28.0482 26.2511C29.6613 26.2511 30.969 27.5519 30.969 29.1565C30.969 30.7611 29.6613 32.0619 28.0482 32.0619C26.435 32.0619 25.1273 30.7611 25.1273 29.1565Z" fill="#D30012" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M37.4784 44.2696C37.4784 41.1048 40.0576 38.5392 43.2392 38.5392C46.4208 38.5392 49 41.1048 49 44.2696C49 47.4344 46.4208 49.9999 43.2392 49.9999C40.0576 49.9999 37.4784 47.4344 37.4784 44.2696ZM43.2392 41.3642C41.6261 41.3642 40.3184 42.665 40.3184 44.2696C40.3184 45.8742 41.6261 47.1749 43.2392 47.1749C44.8523 47.1749 46.16 45.8742 46.16 44.2696C46.16 42.665 44.8523 41.3642 43.2392 41.3642Z" fill="#D30012" />
                                <path d="M27.1823 49.4934L46.3197 25.6981L44.102 23.9333L24.9646 47.7286L27.1823 49.4934Z" fill="#D30012" />
                            </svg>
                        </div>
                        <p class="col">Competitive Variable Interest Rates</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="equipment_loan">
    <div class="container">
        <p class="fs-96 lh-3 ls-2 text-dark font-articulat-heavy text-capitalize text-center">Types of insurance<span class="text-quaternary">.</span></p>

        <div class="row g-3 pt-4 pt-md-7">
            <div class="col-6 col-lg-4">
                <div class="loan_card">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="36" y="39" width="7" height="6" fill="#C8A9F9" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.9982 21.1992C27.9982 17.8854 30.6844 15.1992 33.9982 15.1992H45.1982C48.512 15.1992 51.1982 17.8854 51.1982 21.1992V22.3992H61.1982C64.512 22.3992 67.1982 25.0854 67.1982 28.3992V36.3739C67.1985 36.3913 67.1985 36.4085 67.1982 36.426V58.7993C67.1982 62.1131 64.512 64.7993 61.1982 64.7993H17.9982C14.6844 64.7993 11.9982 62.1131 11.9982 58.7993V36.4266C11.998 36.4089 11.998 36.3915 11.9982 36.3743V28.3996C11.9982 25.0858 14.6844 22.3996 17.9982 22.3996H27.9982V21.1992ZM48.7982 21.1992V22.3992H30.3982V21.1992C30.3982 19.211 32.01 17.5992 33.9982 17.5992H45.1982C47.1865 17.5992 48.7982 19.211 48.7982 21.1992ZM17.9982 24.7992H61.1982C63.1865 24.7992 64.7982 26.411 64.7982 28.3992V36.1246C63.2425 39.2285 60.0638 41.1993 56.5769 41.1993H44.7982V38.7993C44.7982 37.6946 43.9029 36.7993 42.7982 36.7993H36.3982C35.2936 36.7993 34.3982 37.6946 34.3982 38.7993V41.1993H22.6196C19.1328 41.1993 15.9542 39.2285 14.3982 36.1246V28.3992C14.3982 26.411 16.01 24.7992 17.9982 24.7992ZM34.3982 43.5992H22.6196C19.48 43.5992 16.5383 42.332 14.3982 40.182V58.7994C14.3982 60.7876 16.01 62.3993 17.9982 62.3993H61.1982C63.1865 62.3993 64.7982 60.7876 64.7982 58.7994V40.182C62.6586 42.332 59.7167 43.5992 56.5769 43.5992H44.7982V44.3992C44.7982 45.5039 43.9029 46.3992 42.7982 46.3992H36.3982C35.2936 46.3992 34.3982 45.5039 34.3982 44.3992V43.5992ZM36.7982 42.3992V39.1992H42.3982V43.9992H36.7982V42.3992Z" fill="#320873" />
                            </svg>

                        </div>
                        <p class="col">Business Owners Insurance</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="loan_card">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="30" y="43" width="20" height="5" rx="2.5" fill="#C8A9F9" />
                                <path d="M68.1086 38.6585L65.7383 35.7036L67.7657 35.337C69.307 35.0586 70.4243 33.6784 70.4243 32.0564V31.3934C70.4243 29.5578 68.9851 28.0628 67.2145 28.0628L67.2145 28.0629H61.6994L59.5191 19.6745C59.5191 19.6745 59.5191 19.6745 59.5191 19.6745C58.9366 17.4207 56.9653 15.8461 54.7239 15.8461H25.2791C23.0377 15.8461 21.0664 17.4207 20.4845 19.6731L18.3039 28.0626H12.7884C11.0178 28.0626 9.57852 29.5574 9.57852 31.3931V32.0562C9.57852 33.6781 10.6958 35.0584 12.2371 35.3368L14.2645 35.7034L11.8913 38.6623L11.8912 38.6624C11.236 39.4876 10.8755 40.5262 10.8755 41.5877V50.7477C10.8755 53.5903 12.8469 55.9569 15.4356 56.4417V60.6893C15.4356 62.6 16.9904 64.1548 18.9011 64.1548H26.7263C28.6327 64.1548 30.1829 62.6 30.1829 60.6893V56.5379H49.82V60.6893C49.82 62.6 51.3703 64.1548 53.2766 64.1548H61.1018C63.0125 64.1548 64.5673 62.6 64.5673 60.6893V56.4417C67.1561 55.9568 69.1274 53.5903 69.1274 50.7477V41.5877C69.1274 40.5262 68.7669 39.4878 68.1087 38.6586L68.1086 38.6585ZM22.4946 20.1943L22.4947 20.1939C22.8405 18.8557 23.9866 17.9229 25.2792 17.9229H54.7246C56.0173 17.9229 57.1633 18.8557 57.5096 20.1954L57.5096 20.1954L60.2926 30.9021L19.7114 30.9023L22.4945 20.1949L22.4946 20.1946L22.4946 20.1943ZM17.1535 32.1022L17.1533 32.1024L15.7428 33.8609L12.6066 33.2937L12.5849 33.2898C12.0466 33.1808 11.6554 32.6672 11.6554 32.0564V31.3934C11.6554 30.6997 12.166 30.1393 12.7887 30.1393H17.7645L17.3679 31.6651C17.3678 31.6652 17.3678 31.6653 17.3678 31.6653C17.3195 31.8402 17.2481 31.9873 17.1535 32.1022ZM67.0519 41.572L67.0517 41.5719V41.5879V50.7479C67.0517 52.797 65.4976 54.4619 63.5303 54.4619H63.5301H63.5299L16.4741 54.4621C16.4648 54.4621 16.4568 54.4646 16.4522 54.466L16.4516 54.4662C16.4468 54.4677 16.4451 54.4681 16.4439 54.4682C16.4433 54.4682 16.4425 54.468 16.4412 54.4677C16.4399 54.4674 16.4383 54.4669 16.4359 54.4662L16.4353 54.466C16.4307 54.4646 16.4226 54.4621 16.4133 54.4621C14.5067 54.4621 12.9523 52.7978 12.9523 50.7481V41.5882C12.9523 40.9936 13.1533 40.4133 13.5149 39.9575L18.764 33.413C18.764 33.413 18.7641 33.4129 18.7641 33.4129C18.8732 33.2811 18.9629 33.1309 19.048 32.9784H60.955C61.0382 33.1275 61.1258 33.2749 61.2307 33.4016C61.2308 33.4016 61.2308 33.4016 61.2308 33.4017L66.4864 39.9532C66.8478 40.4087 67.0485 40.9829 67.0519 41.572ZM62.2397 30.1392H67.2152C67.8379 30.1392 68.3485 30.6996 68.3485 31.3933V32.0562H68.3485C68.3485 32.6752 67.9468 33.1942 67.397 33.2937L64.2612 33.8608L62.8414 32.091L62.8412 32.0907C62.7559 31.9873 62.6845 31.8402 62.6402 31.6801C62.6402 31.68 62.6402 31.6799 62.6401 31.6799L62.2397 30.1392ZM28.1069 60.6898C28.1069 61.456 27.4876 62.0788 26.7268 62.0788H18.9017C18.1357 62.0788 17.5127 61.4556 17.5127 60.6898V56.5385H28.1067L28.1069 60.6898ZM62.4916 60.6898C62.4916 61.4558 61.8684 62.0788 61.1026 62.0788H53.2775C52.5167 62.0788 51.8974 61.4558 51.8974 60.6898V56.5385H62.4914L62.4916 60.6898Z" fill="#320873" stroke="#320873" stroke-width="0.05" />
                                <path d="M16.597 40.1926L16.597 40.1926C15.5699 40.9529 14.9809 42.1306 14.9809 43.4237V45.0994C14.9809 47.0053 16.5041 48.5567 18.3778 48.5567H24.2439C26.1175 48.5567 27.6408 47.0053 27.6408 45.0994V44.4974C27.6408 42.9593 26.6685 41.6284 25.221 41.1862L25.2214 41.1852H25.217L20.0261 39.5986C18.8435 39.2365 17.5949 39.4542 16.597 40.1926ZM25.5636 45.1264C25.5498 45.8766 24.9619 46.4802 24.2435 46.4802H18.3773C17.6505 46.4802 17.057 45.8621 17.057 45.0994V43.4237C17.057 42.7952 17.3394 42.2262 17.8321 41.8617C18.149 41.6273 18.5193 41.5058 18.8964 41.5058C19.071 41.5058 19.2467 41.5322 19.4189 41.5849L19.4189 41.5849L24.6134 43.1726L24.6134 43.1726C25.1723 43.3429 25.5634 43.8874 25.5634 44.4974V45.0995V45.1264L25.5636 45.1264Z" fill="#320873" stroke="#320873" stroke-width="0.05" />
                                <path d="M55.3845 43.1726L55.3845 43.1726C54.825 43.343 54.4339 43.8874 54.4339 44.4974V45.0995C54.4339 45.8621 55.0275 46.4802 55.7543 46.4802H61.6204C62.3474 46.4802 62.9408 45.8621 62.9408 45.0995V43.4238C62.9408 42.7977 62.6605 42.2309 62.1713 41.866L62.1626 41.8652L62.1652 41.8617C61.8484 41.6273 61.478 41.5058 61.101 41.5058C60.9264 41.5058 60.7509 41.5322 60.578 41.585L55.3845 43.1726ZM55.3845 43.1726L60.578 41.585L55.3845 43.1726ZM59.9788 39.5966V39.5964L59.9715 39.5987L54.778 41.1864C54.778 41.1864 54.778 41.1864 54.778 41.1864C53.3299 41.6285 52.3578 42.9594 52.3578 44.4975V45.0995C52.3578 47.0055 53.8811 48.5568 55.7547 48.5568H61.6209C63.4944 48.5568 65.0178 47.0055 65.0178 45.0995V43.4238C65.0178 42.1307 64.4287 40.953 63.4016 40.1927L63.4016 40.1927C62.4056 39.4567 61.1598 39.2389 59.9788 39.5966Z" fill="#320873" stroke="#320873" stroke-width="0.05" />
                                <path d="M47.2623 41.7172H32.7398C30.6045 41.7172 28.8676 43.4541 28.8676 45.5894C28.8676 47.7248 30.6045 49.4617 32.7398 49.4617H47.2623C49.3976 49.4617 51.1345 47.7247 51.1345 45.5894C51.1345 43.4541 49.3976 41.7172 47.2623 41.7172ZM47.2623 47.385H32.7398C31.7499 47.385 30.9441 46.5793 30.9441 45.5893C30.9441 44.5994 31.7499 43.7936 32.7398 43.7936H47.2623C48.2522 43.7936 49.058 44.5994 49.058 45.5893C49.058 46.5793 48.2522 47.385 47.2623 47.385Z" fill="#320873" stroke="#320873" stroke-width="0.05" />
                            </svg>
                        </div>
                        <p class="col">Auto Insurance</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="loan_card">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="67" y="41" width="6" height="3" fill="#C8A9F9" />
                                <path d="M66.8344 34.1658H62.7681L51.4499 18.3199C51.2306 18.0129 50.8765 17.8306 50.499 17.8311H6.16094C5.8515 17.8311 5.5547 17.9541 5.33591 18.1728C5.11714 18.3916 4.99414 18.6884 4.99414 18.9979V51.668C4.99414 52.5963 5.3629 53.4868 6.01948 54.143C6.67581 54.7996 7.56618 55.1684 8.49451 55.1684H12.0882C12.4633 57.7803 14.0788 60.0495 16.4243 61.2588C18.7696 62.4681 21.5553 62.4681 23.9005 61.2588C26.246 60.0494 27.8615 57.7803 28.2366 55.1684H51.7591C52.1342 57.7803 53.7497 60.0495 56.0952 61.2588C58.4405 62.4681 61.2262 62.4681 63.5714 61.2588C65.9168 60.0494 67.5324 57.7803 67.9075 55.1684H71.5012C72.4295 55.1684 73.32 54.7996 73.9762 54.143C74.6328 53.4867 75.0016 52.5963 75.0016 51.668V42.3337C74.9991 40.1683 74.1379 38.0921 72.6068 36.5609C71.0756 35.0297 68.9994 34.1686 66.834 34.1661L66.8344 34.1658ZM72.6683 42.3334V43.5002H68.0011V41.1666H72.5516C72.6297 41.5507 72.6688 41.9415 72.6683 42.3334ZM44.6653 24.8315H53.2318L59.9002 34.1658H44.6653V24.8315ZM42.3318 34.1658H11.9952V24.8315H42.3318V34.1658ZM7.32804 51.6677V50.5009H10.8284V48.1673H7.32804V20.1644H49.8982L51.5655 22.4979H10.828C10.5185 22.4979 10.2217 22.6209 10.003 22.8397C9.78418 23.0585 9.66118 23.3553 9.66118 23.6647V35.3326C9.66118 35.6421 9.78418 35.9389 10.003 36.1577C10.2217 36.3764 10.5185 36.4994 10.828 36.4994H42.3313V52.8345H28.2365C27.8614 50.2226 26.2459 47.9534 23.9004 46.7441C21.5551 45.5348 18.7694 45.5348 16.4242 46.7441C14.0788 47.9535 12.4632 50.2226 12.0881 52.8345H8.4944C8.18495 52.8345 7.88815 52.7115 7.66937 52.4927C7.4506 52.274 7.3276 51.9772 7.3276 51.6677L7.32804 51.6677ZM20.1627 59.8352C18.6155 59.8352 17.1315 59.2205 16.0374 58.1266C14.9435 57.0325 14.3288 55.5485 14.3288 54.0013C14.3288 52.4541 14.9435 50.97 16.0374 49.8759C17.1315 48.7821 18.6155 48.1673 20.1627 48.1673C21.7099 48.1673 23.194 48.7821 24.2881 49.8759C25.3819 50.97 25.9967 52.4541 25.9967 54.0013C25.9947 55.548 25.3795 57.0308 24.2859 58.1244C23.1923 59.218 21.7095 59.8333 20.1627 59.8352ZM59.8336 59.8352C58.2864 59.8352 56.8024 59.2205 55.7083 58.1266C54.6144 57.0325 53.9997 55.5485 53.9997 54.0013C53.9997 52.4541 54.6144 50.97 55.7083 49.8759C56.8024 48.7821 58.2864 48.1673 59.8336 48.1673C61.3808 48.1673 62.8648 48.7821 63.9589 49.8759C65.0528 50.97 65.6676 52.4541 65.6676 54.0013C65.6656 55.548 65.0504 57.0308 63.9568 58.1244C62.8632 59.218 61.3804 59.8333 59.8336 59.8352ZM71.5015 52.8345H67.9078C67.5327 50.2226 65.9172 47.9534 63.5717 46.7441C61.2264 45.5347 58.4407 45.5347 56.0955 46.7441C53.7501 47.9534 52.1345 50.2226 51.7594 52.8345H44.6653V36.4994H66.8344C68.6609 36.5048 70.3785 37.3692 71.4712 38.833H68.0011C67.3823 38.833 66.7887 39.0788 66.3511 39.5165C65.9133 39.9541 65.6676 40.5477 65.6676 41.1666V43.5002C65.6676 44.119 65.9133 44.7126 66.3511 45.1502C66.7886 45.588 67.3822 45.8337 68.0011 45.8337H72.6683V48.1673H69.1679V50.5009H72.6683V51.6677C72.6683 51.9771 72.5453 52.2739 72.3265 52.4927C72.1078 52.7115 71.811 52.8345 71.5015 52.8345Z" fill="#320873" />
                                <path d="M47.002 38.833H51.6691V41.1666H47.002V38.833Z" fill="#320873" />
                                <path d="M19 52.8345H21.3336V55.1681H19V52.8345Z" fill="#320873" />
                                <path d="M58.6699 52.8345H61.0035V55.1681H58.6699V52.8345Z" fill="#320873" />
                            </svg>
                        </div>
                        <p class="col">Commercial Auto Insurance</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="loan_card">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="19" cy="51" r="3" fill="#C8A9F9" />
                                <circle cx="28" cy="44" r="3" fill="#C8A9F9" />
                                <circle cx="28" cy="58" r="3" fill="#C8A9F9" />
                                <path d="M51.9976 43.7801L51.9977 43.7802C52.2723 44.2637 52.8872 44.4335 53.3708 44.1586C53.8544 43.884 54.0239 43.2695 53.7493 42.7857C52.808 41.1275 51.2597 40.2775 49.6845 40.012V36.9116C49.6845 36.3554 49.2337 35.9045 48.6774 35.9045C48.1213 35.9045 47.6704 36.3554 47.6704 36.9116V39.9775C47.3835 40.0155 47.1044 40.0715 46.8373 40.144L46.8373 40.144C44.4114 40.8042 42.8548 42.6845 42.8884 44.9414L42.8884 44.9414C42.9142 46.6504 43.6421 47.8023 44.6756 48.6532C45.7034 49.4994 47.0347 50.0489 48.2708 50.5591L48.2762 50.5613C49.5129 51.0719 50.5003 51.5101 51.2052 52.0381C51.906 52.563 52.3234 53.1734 52.4249 54.0309C52.535 54.9622 52.3273 55.7239 51.8162 56.3037L51.8161 56.3037C51.1676 57.0399 49.9937 57.4938 48.6697 57.5048L48.6695 57.5048C48.6533 57.5049 48.637 57.5049 48.62 57.5049C46.9027 57.5049 45.3974 56.8023 44.7625 55.7281C44.4797 55.2493 43.8624 55.0908 43.3833 55.3735L43.3832 55.3736C42.9044 55.6566 42.7458 56.2741 43.0286 56.7528L43.0286 56.7529C43.9086 58.2418 45.6384 59.2294 47.6707 59.4643V62.5177C47.6707 63.0738 48.1215 63.5247 48.6777 63.5247C49.2339 63.5247 49.6848 63.0739 49.6848 62.5177V59.4451C51.1743 59.2404 52.4702 58.6076 53.3274 57.635C54.2238 56.6179 54.6016 55.2879 54.4253 53.7939L54.4253 53.7939C54.2461 52.281 53.4827 51.2466 52.4727 50.4713C51.467 49.6993 50.2137 49.182 49.0493 48.7014L49.0449 48.6996L48.9946 48.6789L48.9945 48.679C47.7234 48.1533 46.7116 47.6966 46.0105 47.1309C45.3056 46.5621 44.9172 45.8849 44.9024 44.9113C44.8791 43.3374 46.1471 42.4192 47.3662 42.0876C48.9045 41.6692 51.0032 42.028 51.9976 43.7801Z" fill="#320873" stroke="#320873" stroke-width="0.15" />
                                <path d="M60.2472 10.1165C59.9055 10.0533 59.5555 10.1717 59.3214 10.4281L59.3768 10.4786L59.3214 10.4281C57.1682 12.7867 52.9855 14.0887 49.1597 12.0095C47.846 11.2956 46.1156 10.7311 44.3643 10.5025C42.6138 10.2739 40.8339 10.3799 39.4253 11.0159L39.4561 11.0843L39.4253 11.0159C38.0964 11.6161 37.2286 12.6405 36.9231 13.9778C36.8121 14.4627 37.0721 14.9559 37.5345 15.1387C39.4729 15.9049 40.7292 17.8241 41.3656 20.0255C41.9983 22.214 42.0129 24.6647 41.4854 26.4947C37.9151 28.4865 34.6408 31.953 32.2286 36.2994L32.2942 36.3358L32.2286 36.2994C31.8864 36.9162 31.5665 37.5417 31.2687 38.1729C29.4118 37.3152 27.3459 36.8355 25.17 36.8355C17.1226 36.8355 10.5754 43.3827 10.5754 51.4306C10.5754 59.4785 17.1226 66.0257 25.17 66.0257C28.3595 66.0257 31.3127 64.9963 33.7168 63.2537C37.413 67.335 42.7513 69.9035 48.6783 69.9035C59.8103 69.9035 68.8664 60.8474 68.8664 49.7154C68.8664 45.4057 67.5382 40.642 65.1286 36.2998C63.1574 32.7475 60.6102 29.7839 57.7967 27.7325C59.8506 27.6107 62.0749 27.9378 63.9104 28.4064C64.8588 28.6485 65.7017 28.928 66.3621 29.202C67.0261 29.4774 67.4957 29.7432 67.7068 29.9544L67.7599 29.9014C67.942 30.0835 68.1803 30.1744 68.4192 30.1744C68.6576 30.1744 68.8961 30.0833 69.0778 29.9014L69.1308 29.9544C69.1308 29.9544 69.1309 29.9544 69.1309 29.9544C69.5244 29.5612 69.5244 28.9236 69.1311 28.5302C68.7778 28.1768 68.1741 27.8103 67.4019 27.4636C66.628 27.116 65.6787 26.7856 64.6288 26.5068C62.5755 25.9614 60.1317 25.6119 57.8544 25.7197C58.8955 24.2024 59.7635 22.2837 60.348 20.5827C60.6653 19.6591 61.1577 18.033 61.4068 16.2219C61.6557 14.4123 61.6629 12.4092 61.0016 10.7367L61.0016 10.7367C60.8736 10.4137 60.5886 10.1793 60.2472 10.1165ZM60.2472 10.1165L60.2335 10.1903L60.2471 10.1165C60.2471 10.1165 60.2472 10.1165 60.2472 10.1165ZM66.8524 49.7155C66.8524 59.7099 58.7421 67.8464 48.7569 67.8888H48.6785C43.3715 67.8888 38.589 65.6023 35.2634 61.9624C38.0356 59.3044 39.7649 55.5654 39.7649 51.4304C39.7649 46.282 37.0851 41.7484 33.0478 39.1494C35.2988 34.3509 38.8326 30.1613 42.793 28.0769L42.793 28.0769C44.6528 27.0962 46.5579 26.5836 48.4604 26.5469C51.5066 28.0094 54.9802 31.3945 56.0345 35.7975C56.1453 36.2598 56.558 36.5702 57.0131 36.5702C57.0908 36.5702 57.1697 36.5612 57.2484 36.5423C57.7893 36.4129 58.1229 35.8693 57.9933 35.3283C57.2065 32.0439 55.3649 29.4046 53.313 27.4917C53.7325 27.6637 54.1503 27.8585 54.5656 28.0775L54.5656 28.0776C57.948 29.8581 61.0204 33.1745 63.2477 37.096C65.4746 41.0172 66.8524 45.5361 66.8524 49.7155ZM25.2452 38.85V38.8497C32.1478 38.8902 37.7506 44.5184 37.7506 51.4304C37.7506 58.3674 32.1067 64.0113 25.1702 64.0113C18.2332 64.0113 12.5893 58.3674 12.5893 51.4309C12.5893 44.4939 18.2332 38.85 25.1702 38.85H25.2452ZM56.7643 23.6641C56.1591 24.7099 55.5281 25.5352 54.9514 26.0174L54.8875 26.0699C52.8685 25.1025 50.7938 24.6093 48.7103 24.6045L48.7131 24.5295C48.7127 24.5295 48.7122 24.5295 48.7118 24.5295C48.7054 24.5293 48.6993 24.5293 48.6946 24.5293L48.6879 24.5292L48.6785 24.5291C47.0215 24.5291 45.3703 24.8369 43.7488 25.4432C43.9949 23.6013 43.8652 21.5271 43.3516 19.6466C42.6029 16.9041 41.1451 14.8292 39.1888 13.706C39.4248 13.3503 39.7759 13.0672 40.2539 12.8515L40.2539 12.8515C41.2975 12.3801 42.7342 12.3124 44.1902 12.5147C45.6446 12.7168 47.1072 13.1867 48.1972 13.779C52.2429 15.9777 56.6221 15.1097 59.4845 12.9784C59.7019 14.8329 59.3441 17.3043 58.4426 19.9282C57.9691 21.3065 57.3816 22.5974 56.7643 23.6641Z" fill="#320873" stroke="#320873" stroke-width="0.15" />
                                <path d="M18.8214 55.0625L18.8211 55.0637H18.9167C19.8867 55.0637 20.7799 54.7291 21.4879 54.1699L23.7567 55.9246C23.4787 56.5167 23.3229 57.1771 23.3229 57.8733C23.3229 60.4092 25.3858 62.4722 27.922 62.4722C30.4579 62.4722 32.5209 60.4092 32.5209 57.8733C32.5209 55.3372 30.4579 53.274 27.922 53.274C26.8089 53.274 25.7873 53.6724 24.9907 54.3329L22.7208 52.5772C22.9461 52.066 23.0723 51.5014 23.0723 50.9079C23.0723 50.3163 22.9469 49.7537 22.7231 49.2437L25.6845 46.9596C26.2873 47.4034 27.0315 47.6664 27.8362 47.6664C29.8425 47.6664 31.4748 46.0343 31.4748 44.0281C31.4748 42.022 29.8425 40.3898 27.8362 40.3898C25.83 40.3898 24.1981 42.0219 24.1981 44.0281C24.1981 44.5002 24.2888 44.9513 24.4532 45.3655L21.4924 47.6493C20.7839 47.088 19.8887 46.7521 18.9167 46.7521C16.6251 46.7521 14.7609 48.6162 14.7609 50.9078C14.7609 53.1676 16.5736 55.0117 18.8214 55.0625ZM18.9167 48.7663C20.0973 48.7663 21.0581 49.7272 21.0581 50.9079C21.0581 52.0885 20.0973 53.0493 18.9167 53.0493C17.7359 53.0493 16.7751 52.0887 16.7751 50.9079C16.7751 49.7272 17.7359 48.7663 18.9167 48.7663ZM27.9218 55.2884C29.3471 55.2884 30.5066 56.4481 30.5066 57.8735C30.5066 59.2988 29.3469 60.4583 27.9218 60.4583C26.4966 60.4583 25.3369 59.2986 25.3369 57.8735C25.3369 56.4481 26.4966 55.2884 27.9218 55.2884ZM26.2123 44.0284C26.2123 43.1329 26.9409 42.4043 27.8362 42.4043C28.732 42.4043 29.4608 43.1329 29.4608 44.0284C29.4608 44.9239 28.732 45.6525 27.8362 45.6525C26.9407 45.6525 26.2123 44.924 26.2123 44.0284Z" fill="#320873" stroke="#320873" stroke-width="0.15" />
                            </svg>
                        </div>
                        <p class="col">Worker's Compensation Insurance</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="loan_card">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="23" y="43" width="13" height="15" fill="#C8A9F9" />
                                <path d="M68.5254 61.0707C68.5269 61.026 68.5278 60.9815 68.5278 60.9375C68.5265 59.817 68.081 58.7426 67.2885 57.9503C66.4962 57.1579 65.4218 56.7123 64.3013 56.711V37.1633L68.1052 34.3104C68.3731 34.1095 68.5298 33.7934 68.5278 33.4585C68.5256 33.1237 68.3649 32.8096 68.0946 32.6121L59.0184 25.9794V14.4462C59.2986 14.4462 59.5674 14.3348 59.7655 14.1367C59.9636 13.9386 60.075 13.6698 60.075 13.3895V9.16307C60.075 8.88285 59.9636 8.61407 59.7655 8.41595C59.5674 8.21783 59.2986 8.10645 59.0184 8.10645H48.4522C48.172 8.10645 47.9032 8.21783 47.7051 8.41595C47.507 8.61406 47.3956 8.88284 47.3956 9.16307V13.3895C47.3956 13.6698 47.507 13.9386 47.7051 14.1367C47.9032 14.3348 48.172 14.4462 48.4522 14.4462V18.2582L40.6225 12.5367C40.4416 12.4044 40.2232 12.333 39.9992 12.333C39.7751 12.333 39.5567 12.4044 39.3758 12.5367L11.9037 32.6124C11.6334 32.8099 11.4727 33.124 11.4705 33.4588C11.4685 33.7936 11.6252 34.1098 11.8931 34.3107L15.697 37.1636V56.7113C14.5765 56.7126 13.5021 57.1582 12.7098 57.9506C11.9174 58.7429 11.4718 59.8173 11.4705 60.9378C11.4705 60.9818 11.4714 61.0263 11.4729 61.071C10.1323 61.4157 9.04534 62.3948 8.56347 63.6925C8.08138 64.9901 8.26519 66.4415 9.05568 67.5778C9.84614 68.7141 11.1429 69.3914 12.5271 69.3907H67.4713C68.8554 69.3914 70.1522 68.7141 70.9427 67.5778C71.7332 66.4415 71.917 64.9901 71.4349 63.6925C70.9531 62.3949 69.8661 61.4157 68.5255 61.071L68.5254 61.0707ZM49.5085 10.22H57.9615V12.3332H49.5085V10.22ZM50.5651 19.7296V14.4465H56.9049V24.4356L50.4654 19.7297L50.5651 19.7296ZM39.999 14.6985L65.6954 33.4765L63.235 35.3218L40.6205 18.8746C40.4398 18.7432 40.2223 18.6726 39.9989 18.6726C39.7755 18.6726 39.558 18.7432 39.3773 18.8746L16.7628 35.3218L14.3025 33.4765L39.999 14.6985ZM10.4137 65.1643C10.4143 64.6096 10.6327 64.0771 11.0221 63.6817C11.4115 63.2866 11.9405 63.0601 12.4952 63.0511H12.4976C12.5516 63.0586 12.6057 63.0652 12.6608 63.0687C13.0165 63.0912 13.3596 62.9327 13.5732 62.6474C13.7869 62.3621 13.8422 61.9883 13.7204 61.6533C13.633 61.4248 13.5866 61.1826 13.5835 60.9379C13.5842 60.3776 13.8069 59.8405 14.2032 59.4443C14.5994 59.0481 15.1365 58.8253 15.6967 58.8246V67.2776H12.5269C11.9667 67.2769 11.4295 67.0541 11.0333 66.6579C10.6371 66.2617 10.4143 65.7246 10.4137 65.1643ZM55.8482 67.2776H43.1688V44.032H55.8482V67.2776ZM57.9615 67.2776V42.9753C57.9615 42.6951 57.8501 42.4263 57.652 42.2282C57.4539 42.0301 57.1851 41.9187 56.9048 41.9187H42.1122C41.832 41.9187 41.5632 42.0301 41.3651 42.2282C41.1669 42.4263 41.0556 42.6951 41.0556 42.9753V67.2776H17.81V37.1738L39.9989 21.0366L62.1879 37.1738V67.2776H57.9615ZM67.471 67.2776H64.3012V58.8246C64.8614 58.8253 65.3985 59.048 65.7948 59.4443C66.191 59.8405 66.4137 60.3776 66.4144 60.9379C66.4113 61.1826 66.3649 61.4252 66.2775 61.6539C66.1558 61.9888 66.211 62.3625 66.4248 62.6481C66.6383 62.9333 66.9815 63.0916 67.3372 63.0692C67.3922 63.0656 67.4464 63.059 67.5003 63.0516H67.5027C68.2577 63.0573 68.9523 63.4654 69.3249 64.122C69.6974 64.7787 69.6915 65.5841 69.3091 66.2353C68.9267 66.8862 68.226 67.2837 67.471 67.278L67.471 67.2776Z" fill="#320873" />
                                <path d="M35.7732 41.9185H23.0937C22.8135 41.9185 22.5447 42.0298 22.3466 42.228C22.1485 42.4261 22.0371 42.6949 22.0371 42.9751V57.7677C22.0371 58.048 22.1485 58.3167 22.3466 58.5149C22.5447 58.713 22.8135 58.8244 23.0937 58.8244H35.7732C36.0534 58.8244 36.3222 58.713 36.5203 58.5149C36.7184 58.3168 36.8298 58.048 36.8298 57.7677V42.9751C36.8298 42.6949 36.7184 42.4261 36.5203 42.228C36.3222 42.0298 36.0534 41.9185 35.7732 41.9185ZM34.7165 49.3148H30.4901V44.0317H34.7165V49.3148ZM28.3768 44.0317V49.3148H24.1504V44.0317H28.3768ZM24.1504 51.428H28.3768V56.7111H24.1504V51.428ZM30.4901 56.7111V51.428H34.7165V56.7111H30.4901Z" fill="#320873" />
                                <path d="M46.7444 53.6217C47.2835 53.8451 47.5395 54.4632 47.3163 55.0023C47.0929 55.5414 46.475 55.7974 45.9357 55.5742C45.3966 55.3508 45.1406 54.7326 45.364 54.1935C45.5872 53.6544 46.2054 53.3985 46.7444 53.6217Z" fill="#320873" />
                            </svg>
                        </div>
                        <p class="col">Home Owners Insurance</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="loan_card">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="38" cy="26" r="5" fill="#C8A9F9" />
                                <path d="M37.3206 26.0694L37.3668 26.0503C37.322 25.9417 37.3467 25.8169 37.4297 25.7342L37.4297 25.7342C37.5127 25.6511 37.6375 25.6262 37.746 25.6712L37.7461 25.6713C37.8543 25.716 37.925 25.8219 37.925 25.9392C37.925 26.0994 37.795 26.2292 37.6349 26.2294C37.5175 26.2294 37.4118 26.1588 37.3668 26.0502L37.3206 26.0694ZM37.3206 26.0694C37.3733 26.1966 37.4973 26.2794 37.635 26.2794C37.8226 26.2792 37.975 26.127 37.975 25.9392C37.975 25.8017 37.8921 25.6776 37.7652 25.625C37.638 25.5723 37.4917 25.6015 37.3943 25.6988C37.297 25.7959 37.2681 25.9422 37.3206 26.0694ZM37.635 24.5491H37.635C37.2663 24.5491 36.9126 24.6956 36.6519 24.9563L36.6519 24.9563C36.3914 25.217 36.2449 25.5707 36.2449 25.9394C36.2449 26.3081 36.3914 26.6615 36.6521 26.9222C36.9128 27.183 37.2665 27.3294 37.6352 27.3294C38.0039 27.3294 38.3573 27.1829 38.618 26.9222C38.8788 26.6615 39.0252 26.3078 39.0252 25.9391V25.9391C39.0247 25.5707 38.8783 25.2173 38.6176 24.9565L38.6175 24.9565C38.3569 24.6961 38.0034 24.5494 37.635 24.5491Z" fill="#320873" stroke="#320873" stroke-width="0.1" />
                                <path d="M37.6369 29.7922L37.6191 29.7922C36.5676 29.7876 35.5604 29.3679 34.8164 28.6242C34.0684 27.876 33.6483 26.8616 33.6483 25.8037C33.6483 24.7457 34.0684 23.7314 34.8164 22.9832C35.5646 22.2352 36.5789 21.8151 37.6369 21.8151C38.6946 21.8151 39.7092 22.2353 40.4571 22.9832C41.2053 23.7314 41.6255 24.7457 41.6255 25.8036C41.6243 26.8611 41.2037 27.875 40.456 28.6227C39.7083 29.3705 38.6944 29.7911 37.6369 29.7922ZM44.63 24.9136H43.3369C43.0533 23.0913 41.915 21.5132 40.2731 20.6698C38.6183 19.8195 36.6552 19.8195 35.0004 20.6698C33.3585 21.5132 32.2202 23.0913 31.9369 24.9136H30.6526C30.1611 24.9136 29.7625 25.3121 29.7625 25.8037C29.7625 26.2952 30.1611 26.6938 30.6526 26.6938H31.9369C32.2203 28.516 33.3585 30.0941 35.0004 30.9376C36.6552 31.7879 38.6183 31.7879 40.2731 30.9376C41.915 30.0941 43.0533 28.516 43.3369 26.6938H44.63C45.1215 26.6938 45.5201 26.2952 45.5201 25.8037C45.5201 25.3121 45.1215 24.9136 44.63 24.9136Z" fill="#320873" stroke="#320873" stroke-width="0.1" />
                                <mask id="path-4-outside-1_12117_51758" maskUnits="userSpaceOnUse" x="6.39258" y="7.49463" width="67" height="65" fill="black">
                                    <rect fill="white" x="6.39258" y="7.49463" width="67" height="65" />
                                    <path d="M60.2388 44.2652C60.2339 44.2566 60.2287 44.2484 60.2238 44.24C59.8997 43.7189 59.4737 43.2687 58.9713 42.9161V39.4355C59.6546 39.9013 60.4863 40.0978 61.306 39.9872C62.1256 39.8765 62.8755 39.4665 63.4108 38.8364C63.9464 38.206 64.2297 37.3997 64.2063 36.5731C64.1893 35.9805 64.0115 35.4039 63.692 34.9046H67.0433C67.5072 34.9046 67.8834 34.5287 67.8834 34.0645V29.2089C67.8832 28.8745 67.6846 28.572 67.3779 28.4387L38.4777 15.8787L38.478 14.4733L43.7413 14.4273C44.0592 14.4245 44.3483 14.2423 44.4884 13.9568C44.6282 13.6712 44.595 13.3311 44.4025 13.0782L43.2575 11.5748L44.4338 9.79874C44.6046 9.54086 44.62 9.20993 44.4737 8.93735C44.3274 8.66476 44.0431 8.49463 43.7336 8.49463H37.6379C37.1737 8.49463 36.7978 8.87083 36.7978 9.33476V15.878L7.8976 28.438C7.59095 28.5713 7.39258 28.8738 7.39258 29.2082V34.0641C7.39258 34.528 7.76855 34.9042 8.2327 34.9042H11.5672C10.9492 35.9061 10.9018 37.1588 11.4425 38.2048C11.9833 39.2506 13.0328 39.9362 14.2076 40.0111C14.2799 40.0156 14.3518 40.0179 14.4234 40.0179C15.0095 40.0186 15.5849 39.8641 16.0916 39.5698V57.6455H15.2573C14.939 57.6455 14.648 57.8254 14.5058 58.1099L13.6685 59.7849C13.6101 59.9015 13.5798 60.0301 13.5798 60.1606V60.9949H9.86606C9.40211 60.9949 9.02593 61.3709 9.02593 61.8351V66.2587C9.02593 66.7227 9.40214 67.0988 9.86606 67.0988H40.1183C40.1437 67.8235 40.3418 68.5313 40.6959 69.164C41.0856 69.8776 41.6613 70.4721 42.362 70.8844C43.0626 71.2966 43.8621 71.511 44.675 71.505H68.047C69.1324 71.505 70.1824 71.1171 71.0069 70.411C71.8317 69.705 72.3766 68.7274 72.544 67.6548C72.7111 66.5822 72.4891 65.4851 71.9183 64.5616L60.2388 44.2652ZM38.478 10.1744H42.1696L41.5271 11.1439C41.3294 11.4419 41.3423 11.8323 41.5588 12.1168L42.0499 12.7621L38.478 12.7932L38.478 10.1744ZM56.3601 42.0947C55.8768 42.0942 55.3963 42.1703 54.9368 42.3204V37.5074H57.2908V42.1911C56.9847 42.1274 56.6728 42.0951 56.3601 42.0947ZM62.0539 37.8325C61.743 38.1522 61.3171 38.3343 60.8711 38.3385C60.4251 38.3424 59.996 38.1683 59.6792 37.8542C59.3623 37.5403 59.184 37.1128 59.1843 36.6668C59.1843 36.2028 58.8081 35.8267 58.3441 35.8267H54.0967C53.6327 35.8267 53.2565 36.2029 53.2565 36.6668C53.2565 37.1289 53.0652 37.5704 52.7279 37.8864C52.3907 38.2024 51.9377 38.3648 51.4766 38.335C51.0728 38.3051 50.6934 38.131 50.407 37.8446C50.1207 37.5585 49.9468 37.1788 49.9167 36.7751C49.8868 36.3139 50.0493 35.861 50.3653 35.5238C50.6813 35.1866 51.1228 34.9952 51.5849 34.9952H60.8035C61.2448 34.9912 61.6707 35.1581 61.9918 35.4607C62.313 35.7637 62.5046 36.1789 62.5267 36.6195C62.5407 37.0713 62.3699 37.5094 62.0539 37.8326L62.0539 37.8325ZM48.2397 36.8794V36.8792C48.2913 37.6932 48.6379 38.4606 49.2148 39.0372C49.7914 39.6139 50.5588 39.9604 51.3726 40.012C51.4449 40.0164 51.5168 40.0188 51.5884 40.0188H51.5887C52.1744 40.0195 52.75 39.865 53.2566 39.5707V43.3161C52.9642 43.5899 52.7089 43.901 52.497 44.241C52.4918 44.2491 52.4867 44.2575 52.482 44.2659L42.9002 60.9179V60.1618C42.9002 60.0313 42.8699 59.9027 42.8118 59.786L41.9744 58.1116C41.832 57.8269 41.541 57.6472 41.2229 57.6472H40.3886V39.4359C41.0719 39.9017 41.9036 40.0982 42.7233 39.9876C43.5429 39.8769 44.2928 39.4669 44.8281 38.8365C45.3637 38.2062 45.647 37.4001 45.6236 36.5732C45.6066 35.9809 45.4288 35.4043 45.1093 34.905H48.732C48.3656 35.4957 48.1936 36.186 48.2396 36.8794L48.2397 36.8794ZM31.7843 35.5223C32.0991 35.1844 32.5407 34.9935 33.0026 34.9951H42.2211C42.6625 34.9911 43.0882 35.158 43.4093 35.4607C43.7304 35.7636 43.9222 36.1788 43.9442 36.6194C43.9573 37.0668 43.7902 37.5009 43.4807 37.8241C43.171 38.1474 42.7446 38.3329 42.2972 38.3394C41.8496 38.3457 41.4181 38.1723 41.0995 37.8582C40.7807 37.5438 40.6015 37.1149 40.6017 36.6673C40.6017 36.2033 40.2255 35.8271 39.7616 35.8271H35.5141C35.0502 35.8271 34.674 36.2033 34.674 36.6673C34.674 37.1294 34.4829 37.5709 34.1456 37.8869C33.8084 38.2029 33.3554 38.3653 32.8943 38.3354C32.4905 38.3053 32.1109 38.1315 31.8247 37.8451C31.5384 37.5588 31.3643 37.1793 31.3344 36.7756C31.3029 36.3132 31.466 35.8591 31.7843 35.5223ZM36.3543 37.5074H38.7083L38.7086 57.6461H36.3543L36.3543 37.5074ZM40.704 59.3267L41.2202 60.3594V60.9954H33.843V60.3594L34.3592 59.3267H40.704ZM9.07289 29.7598L37.6379 17.3443L66.2029 29.7598V33.2245H9.07229L9.07289 29.7598ZM30.1501 34.9048C29.5319 35.9069 29.4848 37.1597 30.0253 38.2054C30.566 39.2514 31.6155 39.9371 32.7906 40.012C32.8629 40.0164 32.9348 40.0188 33.0067 40.0188C33.5924 40.0195 34.168 39.865 34.6744 39.5707V57.6464H33.84H33.8403C33.5219 57.6464 33.2312 57.8263 33.0888 58.1108L32.2514 59.7852V59.7855C32.1931 59.9022 32.1627 60.0307 32.1627 60.1612V60.9955L24.3183 60.9953V60.161V60.1612C24.3181 60.0307 24.2877 59.9022 24.2294 59.7855L23.3922 58.111V58.1108C23.2499 57.8263 22.9591 57.6464 22.6408 57.6464H21.8064V39.4357C22.4898 39.9015 23.3215 40.098 24.1411 39.9874C24.9608 39.8767 25.7104 39.4667 26.2459 38.8366C26.7815 38.2062 27.0648 37.3999 27.0415 36.5733C27.0245 35.9807 26.8466 35.4041 26.5271 34.9048L30.1501 34.9048ZM15.5647 37.8855C15.228 38.2034 14.7741 38.3663 14.3119 38.3352C13.9082 38.3053 13.5285 38.1312 13.2424 37.8451C12.956 37.5588 12.7819 37.1791 12.7521 36.7753C12.7222 36.3142 12.8846 35.8612 13.2006 35.524C13.5166 35.187 13.9582 34.9956 14.4202 34.9956H23.6388C24.0801 34.9914 24.5058 35.1583 24.8272 35.461C25.1483 35.7639 25.3399 36.1791 25.3619 36.6199C25.3735 37.0664 25.2057 37.4988 24.8963 37.8209C24.5868 38.143 24.1614 38.3278 23.7149 38.3341C23.2683 38.3406 22.8377 38.1679 22.5193 37.8547C22.2008 37.5418 22.0208 37.1142 22.0194 36.6675C22.0194 36.2036 21.6435 35.8274 21.1793 35.8274H16.9321C16.4679 35.8274 16.092 36.2036 16.092 36.6675C16.0936 37.1294 15.9025 37.5707 15.5648 37.8856L15.5647 37.8855ZM17.772 37.5074H20.126L20.1263 57.6461H17.7722L17.772 37.5074ZM15.2604 60.3597L15.7768 59.327H22.1217L22.6382 60.3597V60.9957H15.2603L15.2604 60.3597ZM40.8035 64.5626C40.6362 64.8331 40.4969 65.1201 40.3879 65.4191H10.7068V62.6755H41.8893L40.8035 64.5626ZM70.5569 68.3487C70.3114 68.7988 69.9482 69.1738 69.5062 69.4339C69.0642 69.6938 68.5601 69.8292 68.0474 69.8255H44.6753C43.9895 69.8255 43.3262 69.5799 42.8057 69.133C42.2853 68.6863 41.942 68.0681 41.8382 67.3902C41.7341 66.7122 41.8762 66.0196 42.2389 65.4372C42.244 65.4291 42.2489 65.4207 42.2538 65.4123L53.9321 45.1165C54.4576 44.2814 55.375 43.7748 56.3615 43.7748C57.348 43.7748 58.2656 44.2815 58.791 45.1165L70.4692 65.4123C70.4741 65.4209 70.479 65.4291 70.4842 65.4372C70.7586 65.8706 70.9101 66.3703 70.9229 66.883C70.9357 67.3957 70.8093 67.9022 70.557 68.3486L70.5569 68.3487Z" />
                                </mask>
                                <path d="M60.2388 44.2652C60.2339 44.2566 60.2287 44.2484 60.2238 44.24C59.8997 43.7189 59.4737 43.2687 58.9713 42.9161V39.4355C59.6546 39.9013 60.4863 40.0978 61.306 39.9872C62.1256 39.8765 62.8755 39.4665 63.4108 38.8364C63.9464 38.206 64.2297 37.3997 64.2063 36.5731C64.1893 35.9805 64.0115 35.4039 63.692 34.9046H67.0433C67.5072 34.9046 67.8834 34.5287 67.8834 34.0645V29.2089C67.8832 28.8745 67.6846 28.572 67.3779 28.4387L38.4777 15.8787L38.478 14.4733L43.7413 14.4273C44.0592 14.4245 44.3483 14.2423 44.4884 13.9568C44.6282 13.6712 44.595 13.3311 44.4025 13.0782L43.2575 11.5748L44.4338 9.79874C44.6046 9.54086 44.62 9.20993 44.4737 8.93735C44.3274 8.66476 44.0431 8.49463 43.7336 8.49463H37.6379C37.1737 8.49463 36.7978 8.87083 36.7978 9.33476V15.878L7.8976 28.438C7.59095 28.5713 7.39258 28.8738 7.39258 29.2082V34.0641C7.39258 34.528 7.76855 34.9042 8.2327 34.9042H11.5672C10.9492 35.9061 10.9018 37.1588 11.4425 38.2048C11.9833 39.2506 13.0328 39.9362 14.2076 40.0111C14.2799 40.0156 14.3518 40.0179 14.4234 40.0179C15.0095 40.0186 15.5849 39.8641 16.0916 39.5698V57.6455H15.2573C14.939 57.6455 14.648 57.8254 14.5058 58.1099L13.6685 59.7849C13.6101 59.9015 13.5798 60.0301 13.5798 60.1606V60.9949H9.86606C9.40211 60.9949 9.02593 61.3709 9.02593 61.8351V66.2587C9.02593 66.7227 9.40214 67.0988 9.86606 67.0988H40.1183C40.1437 67.8235 40.3418 68.5313 40.6959 69.164C41.0856 69.8776 41.6613 70.4721 42.362 70.8844C43.0626 71.2966 43.8621 71.511 44.675 71.505H68.047C69.1324 71.505 70.1824 71.1171 71.0069 70.411C71.8317 69.705 72.3766 68.7274 72.544 67.6548C72.7111 66.5822 72.4891 65.4851 71.9183 64.5616L60.2388 44.2652ZM38.478 10.1744H42.1696L41.5271 11.1439C41.3294 11.4419 41.3423 11.8323 41.5588 12.1168L42.0499 12.7621L38.478 12.7932L38.478 10.1744ZM56.3601 42.0947C55.8768 42.0942 55.3963 42.1703 54.9368 42.3204V37.5074H57.2908V42.1911C56.9847 42.1274 56.6728 42.0951 56.3601 42.0947ZM62.0539 37.8325C61.743 38.1522 61.3171 38.3343 60.8711 38.3385C60.4251 38.3424 59.996 38.1683 59.6792 37.8542C59.3623 37.5403 59.184 37.1128 59.1843 36.6668C59.1843 36.2028 58.8081 35.8267 58.3441 35.8267H54.0967C53.6327 35.8267 53.2565 36.2029 53.2565 36.6668C53.2565 37.1289 53.0652 37.5704 52.7279 37.8864C52.3907 38.2024 51.9377 38.3648 51.4766 38.335C51.0728 38.3051 50.6934 38.131 50.407 37.8446C50.1207 37.5585 49.9468 37.1788 49.9167 36.7751C49.8868 36.3139 50.0493 35.861 50.3653 35.5238C50.6813 35.1866 51.1228 34.9952 51.5849 34.9952H60.8035C61.2448 34.9912 61.6707 35.1581 61.9918 35.4607C62.313 35.7637 62.5046 36.1789 62.5267 36.6195C62.5407 37.0713 62.3699 37.5094 62.0539 37.8326L62.0539 37.8325ZM48.2397 36.8794V36.8792C48.2913 37.6932 48.6379 38.4606 49.2148 39.0372C49.7914 39.6139 50.5588 39.9604 51.3726 40.012C51.4449 40.0164 51.5168 40.0188 51.5884 40.0188H51.5887C52.1744 40.0195 52.75 39.865 53.2566 39.5707V43.3161C52.9642 43.5899 52.7089 43.901 52.497 44.241C52.4918 44.2491 52.4867 44.2575 52.482 44.2659L42.9002 60.9179V60.1618C42.9002 60.0313 42.8699 59.9027 42.8118 59.786L41.9744 58.1116C41.832 57.8269 41.541 57.6472 41.2229 57.6472H40.3886V39.4359C41.0719 39.9017 41.9036 40.0982 42.7233 39.9876C43.5429 39.8769 44.2928 39.4669 44.8281 38.8365C45.3637 38.2062 45.647 37.4001 45.6236 36.5732C45.6066 35.9809 45.4288 35.4043 45.1093 34.905H48.732C48.3656 35.4957 48.1936 36.186 48.2396 36.8794L48.2397 36.8794ZM31.7843 35.5223C32.0991 35.1844 32.5407 34.9935 33.0026 34.9951H42.2211C42.6625 34.9911 43.0882 35.158 43.4093 35.4607C43.7304 35.7636 43.9222 36.1788 43.9442 36.6194C43.9573 37.0668 43.7902 37.5009 43.4807 37.8241C43.171 38.1474 42.7446 38.3329 42.2972 38.3394C41.8496 38.3457 41.4181 38.1723 41.0995 37.8582C40.7807 37.5438 40.6015 37.1149 40.6017 36.6673C40.6017 36.2033 40.2255 35.8271 39.7616 35.8271H35.5141C35.0502 35.8271 34.674 36.2033 34.674 36.6673C34.674 37.1294 34.4829 37.5709 34.1456 37.8869C33.8084 38.2029 33.3554 38.3653 32.8943 38.3354C32.4905 38.3053 32.1109 38.1315 31.8247 37.8451C31.5384 37.5588 31.3643 37.1793 31.3344 36.7756C31.3029 36.3132 31.466 35.8591 31.7843 35.5223ZM36.3543 37.5074H38.7083L38.7086 57.6461H36.3543L36.3543 37.5074ZM40.704 59.3267L41.2202 60.3594V60.9954H33.843V60.3594L34.3592 59.3267H40.704ZM9.07289 29.7598L37.6379 17.3443L66.2029 29.7598V33.2245H9.07229L9.07289 29.7598ZM30.1501 34.9048C29.5319 35.9069 29.4848 37.1597 30.0253 38.2054C30.566 39.2514 31.6155 39.9371 32.7906 40.012C32.8629 40.0164 32.9348 40.0188 33.0067 40.0188C33.5924 40.0195 34.168 39.865 34.6744 39.5707V57.6464H33.84H33.8403C33.5219 57.6464 33.2312 57.8263 33.0888 58.1108L32.2514 59.7852V59.7855C32.1931 59.9022 32.1627 60.0307 32.1627 60.1612V60.9955L24.3183 60.9953V60.161V60.1612C24.3181 60.0307 24.2877 59.9022 24.2294 59.7855L23.3922 58.111V58.1108C23.2499 57.8263 22.9591 57.6464 22.6408 57.6464H21.8064V39.4357C22.4898 39.9015 23.3215 40.098 24.1411 39.9874C24.9608 39.8767 25.7104 39.4667 26.2459 38.8366C26.7815 38.2062 27.0648 37.3999 27.0415 36.5733C27.0245 35.9807 26.8466 35.4041 26.5271 34.9048L30.1501 34.9048ZM15.5647 37.8855C15.228 38.2034 14.7741 38.3663 14.3119 38.3352C13.9082 38.3053 13.5285 38.1312 13.2424 37.8451C12.956 37.5588 12.7819 37.1791 12.7521 36.7753C12.7222 36.3142 12.8846 35.8612 13.2006 35.524C13.5166 35.187 13.9582 34.9956 14.4202 34.9956H23.6388C24.0801 34.9914 24.5058 35.1583 24.8272 35.461C25.1483 35.7639 25.3399 36.1791 25.3619 36.6199C25.3735 37.0664 25.2057 37.4988 24.8963 37.8209C24.5868 38.143 24.1614 38.3278 23.7149 38.3341C23.2683 38.3406 22.8377 38.1679 22.5193 37.8547C22.2008 37.5418 22.0208 37.1142 22.0194 36.6675C22.0194 36.2036 21.6435 35.8274 21.1793 35.8274H16.9321C16.4679 35.8274 16.092 36.2036 16.092 36.6675C16.0936 37.1294 15.9025 37.5707 15.5648 37.8856L15.5647 37.8855ZM17.772 37.5074H20.126L20.1263 57.6461H17.7722L17.772 37.5074ZM15.2604 60.3597L15.7768 59.327H22.1217L22.6382 60.3597V60.9957H15.2603L15.2604 60.3597ZM40.8035 64.5626C40.6362 64.8331 40.4969 65.1201 40.3879 65.4191H10.7068V62.6755H41.8893L40.8035 64.5626ZM70.5569 68.3487C70.3114 68.7988 69.9482 69.1738 69.5062 69.4339C69.0642 69.6938 68.5601 69.8292 68.0474 69.8255H44.6753C43.9895 69.8255 43.3262 69.5799 42.8057 69.133C42.2853 68.6863 41.942 68.0681 41.8382 67.3902C41.7341 66.7122 41.8762 66.0196 42.2389 65.4372C42.244 65.4291 42.2489 65.4207 42.2538 65.4123L53.9321 45.1165C54.4576 44.2814 55.375 43.7748 56.3615 43.7748C57.348 43.7748 58.2656 44.2815 58.791 45.1165L70.4692 65.4123C70.4741 65.4209 70.479 65.4291 70.4842 65.4372C70.7586 65.8706 70.9101 66.3703 70.9229 66.883C70.9357 67.3957 70.8093 67.9022 70.557 68.3486L70.5569 68.3487Z" fill="#320873" />
                                <path d="M60.2388 44.2652C60.2339 44.2566 60.2287 44.2484 60.2238 44.24C59.8997 43.7189 59.4737 43.2687 58.9713 42.9161V39.4355C59.6546 39.9013 60.4863 40.0978 61.306 39.9872C62.1256 39.8765 62.8755 39.4665 63.4108 38.8364C63.9464 38.206 64.2297 37.3997 64.2063 36.5731C64.1893 35.9805 64.0115 35.4039 63.692 34.9046H67.0433C67.5072 34.9046 67.8834 34.5287 67.8834 34.0645V29.2089C67.8832 28.8745 67.6846 28.572 67.3779 28.4387L38.4777 15.8787L38.478 14.4733L43.7413 14.4273C44.0592 14.4245 44.3483 14.2423 44.4884 13.9568C44.6282 13.6712 44.595 13.3311 44.4025 13.0782L43.2575 11.5748L44.4338 9.79874C44.6046 9.54086 44.62 9.20993 44.4737 8.93735C44.3274 8.66476 44.0431 8.49463 43.7336 8.49463H37.6379C37.1737 8.49463 36.7978 8.87083 36.7978 9.33476V15.878L7.8976 28.438C7.59095 28.5713 7.39258 28.8738 7.39258 29.2082V34.0641C7.39258 34.528 7.76855 34.9042 8.2327 34.9042H11.5672C10.9492 35.9061 10.9018 37.1588 11.4425 38.2048C11.9833 39.2506 13.0328 39.9362 14.2076 40.0111C14.2799 40.0156 14.3518 40.0179 14.4234 40.0179C15.0095 40.0186 15.5849 39.8641 16.0916 39.5698V57.6455H15.2573C14.939 57.6455 14.648 57.8254 14.5058 58.1099L13.6685 59.7849C13.6101 59.9015 13.5798 60.0301 13.5798 60.1606V60.9949H9.86606C9.40211 60.9949 9.02593 61.3709 9.02593 61.8351V66.2587C9.02593 66.7227 9.40214 67.0988 9.86606 67.0988H40.1183C40.1437 67.8235 40.3418 68.5313 40.6959 69.164C41.0856 69.8776 41.6613 70.4721 42.362 70.8844C43.0626 71.2966 43.8621 71.511 44.675 71.505H68.047C69.1324 71.505 70.1824 71.1171 71.0069 70.411C71.8317 69.705 72.3766 68.7274 72.544 67.6548C72.7111 66.5822 72.4891 65.4851 71.9183 64.5616L60.2388 44.2652ZM38.478 10.1744H42.1696L41.5271 11.1439C41.3294 11.4419 41.3423 11.8323 41.5588 12.1168L42.0499 12.7621L38.478 12.7932L38.478 10.1744ZM56.3601 42.0947C55.8768 42.0942 55.3963 42.1703 54.9368 42.3204V37.5074H57.2908V42.1911C56.9847 42.1274 56.6728 42.0951 56.3601 42.0947ZM62.0539 37.8325C61.743 38.1522 61.3171 38.3343 60.8711 38.3385C60.4251 38.3424 59.996 38.1683 59.6792 37.8542C59.3623 37.5403 59.184 37.1128 59.1843 36.6668C59.1843 36.2028 58.8081 35.8267 58.3441 35.8267H54.0967C53.6327 35.8267 53.2565 36.2029 53.2565 36.6668C53.2565 37.1289 53.0652 37.5704 52.7279 37.8864C52.3907 38.2024 51.9377 38.3648 51.4766 38.335C51.0728 38.3051 50.6934 38.131 50.407 37.8446C50.1207 37.5585 49.9468 37.1788 49.9167 36.7751C49.8868 36.3139 50.0493 35.861 50.3653 35.5238C50.6813 35.1866 51.1228 34.9952 51.5849 34.9952H60.8035C61.2448 34.9912 61.6707 35.1581 61.9918 35.4607C62.313 35.7637 62.5046 36.1789 62.5267 36.6195C62.5407 37.0713 62.3699 37.5094 62.0539 37.8326L62.0539 37.8325ZM48.2397 36.8794V36.8792C48.2913 37.6932 48.6379 38.4606 49.2148 39.0372C49.7914 39.6139 50.5588 39.9604 51.3726 40.012C51.4449 40.0164 51.5168 40.0188 51.5884 40.0188H51.5887C52.1744 40.0195 52.75 39.865 53.2566 39.5707V43.3161C52.9642 43.5899 52.7089 43.901 52.497 44.241C52.4918 44.2491 52.4867 44.2575 52.482 44.2659L42.9002 60.9179V60.1618C42.9002 60.0313 42.8699 59.9027 42.8118 59.786L41.9744 58.1116C41.832 57.8269 41.541 57.6472 41.2229 57.6472H40.3886V39.4359C41.0719 39.9017 41.9036 40.0982 42.7233 39.9876C43.5429 39.8769 44.2928 39.4669 44.8281 38.8365C45.3637 38.2062 45.647 37.4001 45.6236 36.5732C45.6066 35.9809 45.4288 35.4043 45.1093 34.905H48.732C48.3656 35.4957 48.1936 36.186 48.2396 36.8794L48.2397 36.8794ZM31.7843 35.5223C32.0991 35.1844 32.5407 34.9935 33.0026 34.9951H42.2211C42.6625 34.9911 43.0882 35.158 43.4093 35.4607C43.7304 35.7636 43.9222 36.1788 43.9442 36.6194C43.9573 37.0668 43.7902 37.5009 43.4807 37.8241C43.171 38.1474 42.7446 38.3329 42.2972 38.3394C41.8496 38.3457 41.4181 38.1723 41.0995 37.8582C40.7807 37.5438 40.6015 37.1149 40.6017 36.6673C40.6017 36.2033 40.2255 35.8271 39.7616 35.8271H35.5141C35.0502 35.8271 34.674 36.2033 34.674 36.6673C34.674 37.1294 34.4829 37.5709 34.1456 37.8869C33.8084 38.2029 33.3554 38.3653 32.8943 38.3354C32.4905 38.3053 32.1109 38.1315 31.8247 37.8451C31.5384 37.5588 31.3643 37.1793 31.3344 36.7756C31.3029 36.3132 31.466 35.8591 31.7843 35.5223ZM36.3543 37.5074H38.7083L38.7086 57.6461H36.3543L36.3543 37.5074ZM40.704 59.3267L41.2202 60.3594V60.9954H33.843V60.3594L34.3592 59.3267H40.704ZM9.07289 29.7598L37.6379 17.3443L66.2029 29.7598V33.2245H9.07229L9.07289 29.7598ZM30.1501 34.9048C29.5319 35.9069 29.4848 37.1597 30.0253 38.2054C30.566 39.2514 31.6155 39.9371 32.7906 40.012C32.8629 40.0164 32.9348 40.0188 33.0067 40.0188C33.5924 40.0195 34.168 39.865 34.6744 39.5707V57.6464H33.84H33.8403C33.5219 57.6464 33.2312 57.8263 33.0888 58.1108L32.2514 59.7852V59.7855C32.1931 59.9022 32.1627 60.0307 32.1627 60.1612V60.9955L24.3183 60.9953V60.161V60.1612C24.3181 60.0307 24.2877 59.9022 24.2294 59.7855L23.3922 58.111V58.1108C23.2499 57.8263 22.9591 57.6464 22.6408 57.6464H21.8064V39.4357C22.4898 39.9015 23.3215 40.098 24.1411 39.9874C24.9608 39.8767 25.7104 39.4667 26.2459 38.8366C26.7815 38.2062 27.0648 37.3999 27.0415 36.5733C27.0245 35.9807 26.8466 35.4041 26.5271 34.9048L30.1501 34.9048ZM15.5647 37.8855C15.228 38.2034 14.7741 38.3663 14.3119 38.3352C13.9082 38.3053 13.5285 38.1312 13.2424 37.8451C12.956 37.5588 12.7819 37.1791 12.7521 36.7753C12.7222 36.3142 12.8846 35.8612 13.2006 35.524C13.5166 35.187 13.9582 34.9956 14.4202 34.9956H23.6388C24.0801 34.9914 24.5058 35.1583 24.8272 35.461C25.1483 35.7639 25.3399 36.1791 25.3619 36.6199C25.3735 37.0664 25.2057 37.4988 24.8963 37.8209C24.5868 38.143 24.1614 38.3278 23.7149 38.3341C23.2683 38.3406 22.8377 38.1679 22.5193 37.8547C22.2008 37.5418 22.0208 37.1142 22.0194 36.6675C22.0194 36.2036 21.6435 35.8274 21.1793 35.8274H16.9321C16.4679 35.8274 16.092 36.2036 16.092 36.6675C16.0936 37.1294 15.9025 37.5707 15.5648 37.8856L15.5647 37.8855ZM17.772 37.5074H20.126L20.1263 57.6461H17.7722L17.772 37.5074ZM15.2604 60.3597L15.7768 59.327H22.1217L22.6382 60.3597V60.9957H15.2603L15.2604 60.3597ZM40.8035 64.5626C40.6362 64.8331 40.4969 65.1201 40.3879 65.4191H10.7068V62.6755H41.8893L40.8035 64.5626ZM70.5569 68.3487C70.3114 68.7988 69.9482 69.1738 69.5062 69.4339C69.0642 69.6938 68.5601 69.8292 68.0474 69.8255H44.6753C43.9895 69.8255 43.3262 69.5799 42.8057 69.133C42.2853 68.6863 41.942 68.0681 41.8382 67.3902C41.7341 66.7122 41.8762 66.0196 42.2389 65.4372C42.244 65.4291 42.2489 65.4207 42.2538 65.4123L53.9321 45.1165C54.4576 44.2814 55.375 43.7748 56.3615 43.7748C57.348 43.7748 58.2656 44.2815 58.791 45.1165L70.4692 65.4123C70.4741 65.4209 70.479 65.4291 70.4842 65.4372C70.7586 65.8706 70.9101 66.3703 70.9229 66.883C70.9357 67.3957 70.8093 67.9022 70.557 68.3486L70.5569 68.3487Z" stroke="#320873" stroke-width="0.2" mask="url(#path-4-outside-1_12117_51758)" />
                                <path d="M56.3616 50.4344C55.87 50.4344 55.4715 50.833 55.4715 51.3245V61.3478C55.4715 61.8394 55.8701 62.238 56.3616 62.238C56.8534 62.238 57.2517 61.8394 57.2517 61.3478V51.3245C57.2517 50.8329 56.8534 50.4344 56.3616 50.4344Z" fill="#320873" stroke="#320873" stroke-width="0.1" />
                                <path d="M56.3616 63.7732C55.87 63.7732 55.4715 64.1718 55.4715 64.6634V65.6156C55.4715 66.1071 55.8701 66.5057 56.3616 66.5057C56.8534 66.5057 57.2517 66.1071 57.2517 65.6156V64.6634C57.2517 64.1718 56.8534 63.7732 56.3616 63.7732Z" fill="#320873" stroke="#320873" stroke-width="0.1" />
                            </svg>
                        </div>
                        <p class="col">General / Public Liability</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="loan_card">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="33" y="37" width="14" height="11" fill="#C8A9F9" />
                                <path d="M60.7284 30.672C60.9209 30.6724 61.1096 30.6191 61.2733 30.5177C61.4371 30.4163 61.5689 30.2712 61.6541 30.0985L63.1603 27.0931C64.6019 27.4203 66.1122 27.0162 67.1973 26.0124C68.2827 25.0089 68.8036 23.5349 68.59 22.072C68.3763 20.6095 67.4556 19.3459 66.1284 18.6949C64.8014 18.0437 63.2386 18.0883 61.951 18.8143C60.6633 19.5403 59.8162 20.8542 59.6864 22.3269C59.5566 23.7993 60.1609 25.2412 61.3019 26.181L60.0859 28.5992H58.3102V25.7249C58.3084 24.6555 57.8827 23.6302 57.1264 22.874C56.3702 22.1176 55.3449 21.6919 54.2754 21.6901H51.4011V19.9145L53.8193 18.6984C54.783 19.8641 56.26 20.479 57.766 20.3416C59.2721 20.2042 60.6135 19.3322 61.3503 18.0113C62.0871 16.6905 62.1244 15.0912 61.4501 13.7375C60.7756 12.3838 59.4766 11.45 57.9785 11.2426C56.4804 11.035 54.9762 11.5804 53.9592 12.6998C52.9424 13.8194 52.5434 15.3686 52.8936 16.8401L49.8882 18.3463H49.888C49.7179 18.4333 49.5756 18.5662 49.4768 18.7297C49.3779 18.8932 49.3266 19.081 49.3284 19.272V21.6902H41.0375V20.184C42.478 19.8423 43.6576 18.8125 44.1909 17.4313C44.7239 16.0502 44.542 14.495 43.7047 13.274C42.8671 12.0532 41.4817 11.3234 40.0012 11.3234C38.5206 11.3234 37.1352 12.0532 36.2977 13.274C35.4603 14.495 35.2784 16.0502 35.8114 17.4313C36.3447 18.8125 37.5243 19.8423 38.9648 20.184V21.6902H30.6739V19.272C30.6744 19.0794 30.6211 18.8908 30.5197 18.727C30.4182 18.5633 30.2732 18.4315 30.1004 18.3463L27.095 16.8401C27.4223 15.3984 27.0181 13.8882 26.0143 12.803C25.0108 11.7176 23.5368 11.1968 22.074 11.4104C20.6114 11.6241 19.3479 12.5448 18.6968 13.872C18.0457 15.1989 18.0903 16.7618 18.8162 18.0494C19.5422 19.337 20.8562 20.1842 22.3288 20.314C23.8013 20.4437 25.2431 19.8394 26.183 18.6985L28.6149 19.9145V21.6901H25.7269C24.6575 21.6919 23.6321 22.1177 22.876 22.874C22.1196 23.6302 21.6939 24.6555 21.6921 25.7249V28.5992H19.9165L18.7004 26.1811C19.8661 25.2173 20.481 23.7404 20.3436 22.2344C20.2061 20.7282 19.3342 19.3869 18.0133 18.6501C16.6924 17.9133 15.0931 17.876 13.7394 18.5502C12.3857 19.2247 11.452 20.5238 11.2446 22.0219C11.037 23.52 11.5824 25.0242 12.7018 26.0412C13.8213 27.058 15.3705 27.457 16.842 27.1068L18.3482 30.1122V30.1124C18.4352 30.2824 18.5682 30.4248 18.7317 30.5235C18.8952 30.6225 19.083 30.6738 19.2739 30.672H21.6921V38.9629H20.1859C19.8443 37.5223 18.8145 36.3427 17.4333 35.8095C16.0522 35.2764 14.4969 35.4584 13.2759 36.2957C12.0551 37.1333 11.3253 38.5186 11.3253 39.9992C11.3253 41.4798 12.0551 42.8651 13.2759 43.7027C14.4969 44.54 16.0522 44.722 17.4333 44.1889C18.8144 43.6557 19.8443 42.4761 20.1859 41.0355H21.6921V49.3264H19.2739C19.0814 49.326 18.8927 49.3793 18.729 49.4807C18.5652 49.5821 18.4335 49.7272 18.3482 49.8999L16.842 52.9053C15.4004 52.5781 13.8901 52.9822 12.805 53.986C11.7196 54.9896 11.1988 56.4636 11.4124 57.9264C11.626 59.3889 12.5468 60.6525 13.8739 61.3035C15.2009 61.9547 16.7637 61.9101 18.0514 61.1841C19.339 60.4581 20.1861 59.1442 20.3159 57.6715C20.4457 56.1991 19.8414 54.7572 18.7004 53.8174L19.9165 51.3855H21.6921V54.2598V54.2596C21.6939 55.3292 22.1196 56.3543 22.876 57.1107C23.6321 57.8671 24.6574 58.2926 25.7269 58.2946H28.6012V60.0702L26.183 61.3C25.2193 60.1343 23.7423 59.5194 22.2364 59.6568C20.7302 59.7942 19.3888 60.6662 18.652 61.9871C17.9152 63.3079 17.8779 64.9073 18.5522 66.2609C19.2267 67.6147 20.5257 68.5484 22.0238 68.7558C23.5219 68.9634 25.0261 68.418 26.0431 67.2986C27.0599 66.1791 27.4589 64.6299 27.1087 63.1583L30.1141 61.6522H30.1144C30.2844 61.5651 30.4268 61.4322 30.5255 61.2687C30.6244 61.1052 30.6757 60.9174 30.6739 60.7264V58.3083H38.9648V59.8145C37.5243 60.1561 36.3447 61.1859 35.8114 62.5671C35.2784 63.9482 35.4603 65.5034 36.2976 66.7245C37.1352 67.9452 38.5206 68.6751 40.0011 68.6751C41.4817 68.6751 42.8671 67.9452 43.7047 66.7245C44.542 65.5034 44.7239 63.9482 44.1909 62.5671C43.6576 61.186 42.478 60.1561 41.0375 59.8145V58.3083H49.3284V60.7264C49.3279 60.919 49.3812 61.1077 49.4827 61.2714C49.5841 61.4351 49.7292 61.5669 49.9019 61.6522L52.9073 63.1583C52.58 64.6 52.9842 66.1102 53.988 67.1954C54.9915 68.2808 56.4655 68.8016 57.9283 68.588C59.3909 68.3744 60.6544 67.4536 61.3055 66.1264C61.9566 64.7995 61.9121 63.2366 61.1861 61.949C60.4601 60.6614 59.1462 59.8142 57.6735 59.6844C56.2011 59.5547 54.7592 60.159 53.8193 61.3L51.4011 60.0839V58.3083H54.2754C55.3448 58.3065 56.3702 57.8807 57.1264 57.1244C57.8827 56.3683 58.3084 55.343 58.3102 54.2735V51.3992H60.0859L61.3019 53.8174C60.1362 54.7811 59.5213 56.2581 59.6588 57.764C59.7962 59.2702 60.6681 60.6115 61.989 61.3483C63.3099 62.0851 64.9092 62.1224 66.2629 61.4482C67.6166 60.7737 68.5504 59.4747 68.7577 57.9765C68.9653 56.4784 68.4199 54.9743 67.3006 53.9572C66.181 52.9405 64.6318 52.5415 63.1603 52.8916L61.6541 49.8862V49.886C61.5671 49.716 61.4342 49.5736 61.2706 49.4749C61.1071 49.3759 60.9193 49.3246 60.7284 49.3265H58.3102V41.0355H59.8164C60.158 42.4761 61.1879 43.6557 62.569 44.189C63.9502 44.722 65.5054 44.54 66.7264 43.7027C67.9472 42.8652 68.677 41.4798 68.677 39.9992C68.677 38.5187 67.9472 37.1333 66.7264 36.2957C65.5054 35.4584 63.9502 35.2765 62.569 35.8095C61.1879 36.3427 60.1581 37.5224 59.8164 38.9629H58.3102V30.672L60.7284 30.672ZM64.1829 20.3084C64.8244 20.3084 65.4392 20.5632 65.8929 21.0166C66.3463 21.4702 66.6011 22.0851 66.6011 22.7265C66.6011 23.3679 66.3463 23.9828 65.8929 24.4365C65.4392 24.8899 64.8243 25.1447 64.1829 25.1447C63.5415 25.1447 62.9266 24.8899 62.473 24.4365C62.0196 23.9829 61.7648 23.3679 61.7648 22.7265C61.7648 22.0851 62.0196 21.4702 62.473 21.0166C62.9266 20.5632 63.5415 20.3084 64.1829 20.3084ZM57.2739 13.3993C57.9153 13.3993 58.5302 13.6541 58.9838 14.1075C59.4372 14.5611 59.692 15.1761 59.692 15.8175C59.692 16.4588 59.4372 17.0738 58.9838 17.5274C58.5302 17.9808 57.9152 18.2356 57.2739 18.2356C56.6325 18.2356 56.0176 17.9808 55.5639 17.5274C55.1105 17.0738 54.8557 16.4588 54.8557 15.8175C54.8557 15.1761 55.1105 14.5612 55.5639 14.1075C56.0175 13.6541 56.6325 13.3993 57.2739 13.3993ZM22.7284 18.2356C22.087 18.2356 21.4721 17.9808 21.0185 17.5274C20.5651 17.0738 20.3102 16.4588 20.3102 15.8175C20.3102 15.1761 20.5651 14.5612 21.0185 14.1075C21.4721 13.6541 22.087 13.3993 22.7284 13.3993C23.3698 13.3993 23.9847 13.6541 24.4384 14.1075C24.8918 14.5611 25.1466 15.1761 25.1466 15.8175C25.1466 16.4588 24.8918 17.0738 24.4384 17.5274C23.9847 17.9808 23.3698 18.2356 22.7284 18.2356ZM15.8193 25.1447C15.1779 25.1447 14.563 24.8899 14.1094 24.4365C13.656 23.9829 13.4012 23.3679 13.4012 22.7265C13.4012 22.0851 13.656 21.4702 14.1094 21.0166C14.563 20.5632 15.1779 20.3084 15.8193 20.3084C16.4607 20.3084 17.0756 20.5632 17.5293 21.0166C17.9827 21.4702 18.2375 22.0851 18.2375 22.7265C18.2375 23.3679 17.9827 23.9828 17.5293 24.4365C17.0756 24.8899 16.4607 25.1447 15.8193 25.1447ZM15.8193 42.4174C15.1779 42.4174 14.563 42.1626 14.1094 41.7092C13.656 41.2556 13.4012 40.6407 13.4012 39.9993C13.4012 39.3579 13.656 38.743 14.1094 38.2893C14.563 37.8359 15.1779 37.5811 15.8193 37.5811C16.4607 37.5811 17.0756 37.8359 17.5293 38.2893C17.9827 38.743 18.2375 39.3579 18.2375 39.9993C18.2375 40.6407 17.9827 41.2556 17.5293 41.7092C17.0756 42.1626 16.4607 42.4174 15.8193 42.4174ZM15.8193 59.6902C15.1779 59.6902 14.563 59.4353 14.1094 58.9819C13.656 58.5283 13.4012 57.9134 13.4012 57.272C13.4012 56.6306 13.656 56.0157 14.1094 55.562C14.563 55.1086 15.1779 54.8538 15.8193 54.8538C16.4607 54.8538 17.0756 55.1086 17.5293 55.562C17.9827 56.0157 18.2375 56.6306 18.2375 57.272C18.2375 57.9134 17.9827 58.5283 17.5293 58.9819C17.0756 59.4353 16.4607 59.6902 15.8193 59.6902ZM22.7284 66.5992C22.087 66.5992 21.4721 66.3444 21.0185 65.891C20.5651 65.4374 20.3102 64.8225 20.3102 64.1811C20.3102 63.5397 20.5651 62.9248 21.0185 62.4711C21.4721 62.0177 22.087 61.7629 22.7284 61.7629C23.3698 61.7629 23.9847 62.0177 24.4384 62.4711C24.8918 62.9248 25.1466 63.5397 25.1466 64.1811C25.1466 64.8225 24.8918 65.4374 24.4384 65.891C23.9847 66.3444 23.3698 66.5992 22.7284 66.5992ZM57.2739 61.7629C57.9153 61.7629 58.5302 62.0177 58.9838 62.4711C59.4372 62.9248 59.692 63.5397 59.692 64.1811C59.692 64.8225 59.4372 65.4374 58.9838 65.891C58.5302 66.3444 57.9152 66.5992 57.2739 66.5992C56.6325 66.5992 56.0176 66.3444 55.5639 65.891C55.1105 65.4374 54.8557 64.8225 54.8557 64.1811C54.8557 63.5397 55.1105 62.9248 55.5639 62.4711C56.0175 62.0177 56.6325 61.7629 57.2739 61.7629ZM37.583 15.8175C37.583 15.176 37.8378 14.5612 38.2912 14.1075C38.7448 13.6541 39.3597 13.3993 40.0011 13.3993C40.6425 13.3993 41.2574 13.6541 41.7111 14.1075C42.1645 14.5611 42.4193 15.1761 42.4193 15.8175C42.4193 16.4588 42.1645 17.0738 41.7111 17.5274C41.2574 17.9808 40.6425 18.2356 40.0011 18.2356C39.3597 18.2356 38.7448 17.9808 38.2912 17.5274C37.8378 17.0738 37.583 16.4588 37.583 15.8175ZM42.4193 64.1811C42.4193 64.8225 42.1645 65.4374 41.7111 65.891C41.2574 66.3444 40.6425 66.5992 40.0011 66.5992C39.3597 66.5992 38.7448 66.3444 38.2912 65.891C37.8378 65.4374 37.583 64.8225 37.583 64.1811C37.583 63.5397 37.8378 62.9248 38.2912 62.4711C38.7448 62.0177 39.3597 61.7629 40.0011 61.7629C40.6425 61.7629 41.2574 62.0177 41.7111 62.4711C42.1645 62.9248 42.4193 63.5397 42.4193 64.1811ZM56.2375 54.2734C56.2375 54.7936 56.0308 55.2929 55.6629 55.6609C55.2949 56.0289 54.7957 56.2355 54.2754 56.2355H25.7271C25.2068 56.2355 24.7076 56.0288 24.3396 55.6609C23.9716 55.2929 23.765 54.7937 23.765 54.2734V25.7251C23.765 25.2049 23.9716 24.7056 24.3396 24.3376C24.7075 23.9697 25.2068 23.763 25.7271 23.763H54.2754C54.7956 23.763 55.2949 23.9697 55.6629 24.3376C56.0308 24.7056 56.2375 25.2048 56.2375 25.7251V54.2734ZM64.1829 54.8537C64.8244 54.8537 65.4392 55.1085 65.8929 55.5619C66.3463 56.0156 66.6011 56.6305 66.6011 57.2719C66.6011 57.9133 66.3463 58.5282 65.8929 58.9818C65.4392 59.4352 64.8243 59.69 64.1829 59.69C63.5415 59.69 62.9266 59.4352 62.473 58.9818C62.0196 58.5282 61.7648 57.9133 61.7648 57.2719C61.7648 56.6305 62.0196 56.0156 62.473 55.5619C62.9266 55.1085 63.5415 54.8537 64.1829 54.8537ZM64.1829 37.581C64.8244 37.581 65.4392 37.8358 65.8929 38.2892C66.3463 38.7428 66.6011 39.3577 66.6011 39.9991C66.6011 40.6405 66.3463 41.2554 65.8929 41.7091C65.4392 42.1625 64.8243 42.4173 64.1829 42.4173C63.5415 42.4173 62.9266 42.1625 62.473 41.7091C62.0196 41.2555 61.7648 40.6405 61.7648 39.9991C61.7648 39.3577 62.0196 38.7428 62.473 38.2892C62.9266 37.8358 63.5415 37.581 64.1829 37.581Z" fill="#320873" />
                                <path d="M45.7003 36.1296H45.4239V32.7788C45.4239 30.841 44.3902 29.0505 42.7122 28.0816C41.034 27.1128 38.9666 27.1128 37.2884 28.0816C35.6103 29.0505 34.5767 30.841 34.5767 32.7788V36.1296H34.3003C33.6289 36.1314 32.9857 36.3993 32.5119 36.8747C32.0377 37.3499 31.7715 37.9939 31.7715 38.6652V46.9078C31.7715 47.5784 32.038 48.2216 32.5123 48.6958C32.9864 49.1701 33.6296 49.4366 34.3003 49.4366H45.7003C46.371 49.4366 47.0142 49.1701 47.4883 48.6958C47.9627 48.2217 48.2292 47.5785 48.2292 46.9078V38.6168C48.2163 37.954 47.9447 37.3223 47.4719 36.8574C46.9994 36.3925 46.3634 36.1312 45.7003 36.1296L45.7003 36.1296ZM36.6494 32.7788C36.6494 31.5816 37.2881 30.4753 38.3247 29.8769C39.3616 29.2782 40.639 29.2782 41.6758 29.8769C42.7124 30.4754 43.3511 31.5816 43.3511 32.7788V36.1296H36.6493L36.6494 32.7788ZM46.1563 46.9079C46.1581 47.0293 46.1106 47.1465 46.0247 47.2324C45.9388 47.3183 45.8216 47.3658 45.7002 47.364H34.3002C34.1787 47.3658 34.0616 47.3183 33.9757 47.2324C33.8897 47.1465 33.8423 47.0293 33.8441 46.9079V38.617C33.8423 38.4948 33.8895 38.377 33.9752 38.29C34.0609 38.2031 34.1781 38.1541 34.3002 38.1541H45.7002C45.8223 38.1541 45.9395 38.2031 46.0252 38.29C46.1109 38.377 46.1581 38.4948 46.1563 38.617L46.1563 46.9079Z" fill="#320873" />
                                <path d="M40.0012 40.5176C39.7264 40.5176 39.4628 40.6267 39.2685 40.8212C39.0739 41.0155 38.9648 41.2791 38.9648 41.554V43.2743C38.9648 43.6447 39.1623 43.9868 39.483 44.1719C39.8037 44.357 40.1987 44.357 40.5194 44.1719C40.8401 43.9868 41.0376 43.6447 41.0376 43.2743V41.554C41.0376 41.2791 40.9285 41.0155 40.734 40.8212C40.5396 40.6267 40.2761 40.5176 40.0012 40.5176Z" fill="#320873" />
                            </svg>
                        </div>
                        <p class="col">Cyber Insurance</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="loan_card">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M31 59L32.5 46C37 46 39.5 43.5 40 43.5C40.4 44.7 45.1667 45.6667 47.5 46L49.5 59L47 61.5L39.5 64.5L34.5 62.5L31 59Z" fill="#C8A9F9" />
                                <path d="M40.9294 49.391V47.3979H39.0712V49.391C37.998 49.7311 37.2129 50.7243 37.2129 51.908C37.2129 52.9188 37.774 53.8267 38.679 54.28L40.4899 55.1859C40.7612 55.3208 40.9295 55.5929 40.9295 55.8959C40.9295 56.3326 40.5727 56.6893 40.136 56.6893H39.8656C39.4279 56.6893 39.0712 56.3326 39.0712 55.8959V54.8311H37.2129V55.8959C37.2129 57.0805 37.998 58.0737 39.0712 58.4129V60.4059H40.9295V58.4129C42.0026 58.0728 42.7877 57.0796 42.7877 55.8959C42.7877 54.8851 42.2266 53.9772 41.3216 53.5239L39.5108 52.618C39.2394 52.4831 39.0712 52.2109 39.0712 51.908C39.0712 51.4713 39.4279 51.1145 39.8646 51.1145H40.135C40.5727 51.1145 40.9294 51.4713 40.9294 51.908V52.0437H42.7877V51.908C42.7877 50.7243 42.0026 49.7311 40.9294 49.391Z" fill="#320873" />
                                <path d="M65.0854 39.129V20.6558L50.2192 16.9402V10.9565L29.7781 15.0448V20.4521H14.9119V39.1285C12.7944 39.5606 11.1953 41.4375 11.1953 43.6803V64.1214C11.1953 66.6831 13.2793 68.7671 15.841 68.7671H64.1563C66.718 68.7671 68.802 66.6831 68.802 64.1214V43.6803C68.802 41.4374 67.2028 39.5606 65.0854 39.1285V39.129ZM48.3609 33.4605H46.5026V22.3109H40.9278V33.4605H39.0695V22.3109H33.4947V33.4605H31.6364V20.4526H48.3609V33.4605ZM44.6443 33.4605H42.7861V24.1692H44.6443V33.4605ZM37.2112 33.4605H35.3529V24.1692H37.2112V33.4605ZM30.7072 35.3188H49.29C50.8268 35.3188 52.0774 36.5695 52.0774 38.1062V39.0354H27.9198V38.1062C27.9198 36.5695 29.1705 35.3188 30.7072 35.3188ZM50.2192 33.5545V26.0277H63.2271V39.0356H53.9357V38.1065C53.9357 35.8636 52.3366 33.9867 50.2192 33.5547V33.5545ZM63.2271 22.1075V24.1692H50.2192V18.8545L63.2271 22.1075ZM48.3609 13.2239V18.5946H31.6364V16.568L48.3609 13.2239ZM29.7781 22.3111V33.5545C27.6607 33.9865 26.0615 35.8624 26.0615 38.1062V39.0354H16.7701V22.3109L29.7781 22.3111ZM15.841 40.8939H64.1563C65.6355 40.8939 66.8368 42.0544 66.927 43.5114C63.9269 50.3092 57.3586 54.9871 49.9751 55.6516C49.4807 51.635 48.4058 45.6957 48.3464 45.3736L48.2078 44.6107H46.1368C44.1298 44.6107 42.1852 44.0217 40.5143 42.9084L39.9987 42.5647L39.483 42.9084C37.8125 44.0217 35.8686 44.6107 33.8616 44.6107H31.7906L31.6532 45.3736C31.5937 45.6969 30.5177 51.6353 30.0245 55.6516C22.6404 54.9863 16.0735 50.3082 13.0725 43.5114C13.1606 42.0544 14.3619 40.8939 15.8411 40.8939H15.841ZM48.3609 58.5476C48.3609 59.4117 46.2249 61.1472 41.5338 62.9164C40.5609 63.2835 39.4367 63.2835 38.4621 62.9164C33.7726 61.1472 31.6365 59.4116 31.6365 58.5476C31.6365 56.3093 32.9168 48.881 33.3434 46.4687H33.8618C36.0332 46.4687 38.1424 45.8861 39.9985 44.7796C41.8549 45.8861 43.965 46.4687 46.1353 46.4687H46.6537C47.0803 48.8808 48.3606 56.3092 48.3606 58.5476H48.3609ZM64.1563 66.9098H15.841C14.3042 66.9098 13.0536 65.6592 13.0536 64.1224V47.3582C16.7589 53.0649 22.9674 56.8726 29.8291 57.5C29.7966 57.9078 29.778 58.2646 29.778 58.548C29.778 60.5901 32.4791 62.6455 37.8068 64.655C38.5046 64.9181 39.2413 65.0518 39.9986 65.0518C40.7558 65.0518 41.4925 64.9181 42.1894 64.655C47.518 62.6453 50.2192 60.59 50.2192 58.548C50.2192 58.2646 50.2006 57.9078 50.1681 57.5C57.0298 56.8728 63.2384 53.0651 66.9436 47.3582V64.1224C66.9436 65.6592 65.693 66.9098 64.1562 66.9098H64.1563Z" fill="#320873" />
                                <path d="M52.0801 27.8862H53.9384V29.7445H52.0801V27.8862Z" fill="#320873" />
                                <path d="M59.5117 27.8862H61.37V29.7445H59.5117V27.8862Z" fill="#320873" />
                                <path d="M55.7969 27.8862H57.6552V29.7445H55.7969V27.8862Z" fill="#320873" />
                                <path d="M26.0645 24.1694H27.9227V26.0277H26.0645V24.1694Z" fill="#320873" />
                                <path d="M22.3477 24.1694H24.2059V26.0277H22.3477V24.1694Z" fill="#320873" />
                                <path d="M18.6309 24.1694H20.4891V26.0277H18.6309V24.1694Z" fill="#320873" />
                                <path d="M26.0645 27.8862H27.9227V29.7445H26.0645V27.8862Z" fill="#320873" />
                                <path d="M22.3477 27.8862H24.2059V29.7445H22.3477V27.8862Z" fill="#320873" />
                                <path d="M18.6309 27.8862H20.4891V29.7445H18.6309V27.8862Z" fill="#320873" />
                                <path d="M55.7969 31.6021H57.6552V33.4603H55.7969V31.6021Z" fill="#320873" />
                                <path d="M59.5117 31.6021H61.37V33.4603H59.5117V31.6021Z" fill="#320873" />
                                <path d="M55.7969 35.3188H57.6552V37.1771H55.7969V35.3188Z" fill="#320873" />
                                <path d="M59.5117 35.3188H61.37V37.1771H59.5117V35.3188Z" fill="#320873" />
                                <path d="M18.6309 31.6021H20.4891V33.4603H18.6309V31.6021Z" fill="#320873" />
                                <path d="M22.3477 31.6021H24.2059V33.4603H22.3477V31.6021Z" fill="#320873" />
                                <path d="M18.6309 35.3188H20.4891V37.1771H18.6309V35.3188Z" fill="#320873" />
                                <path d="M22.3477 35.3188H24.2059V37.1771H22.3477V35.3188Z" fill="#320873" />
                                <path d="M55.7969 65.049H65.0883V59.4741H55.7969V65.049ZM57.6552 61.3324H63.23V63.1907H57.6552V61.3324Z" fill="#320873" />
                                <path d="M14.9121 59.4766H22.3452V61.3348H14.9121V59.4766Z" fill="#320873" />
                                <path d="M14.9121 63.1953H22.3452V65.0536H14.9121V63.1953Z" fill="#320873" />
                            </svg>
                        </div>
                        <p class="col">Professional Indemnity</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="loan_card">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="29" cy="40" r="3" fill="#C8A9F9" />
                                <circle cx="40" cy="40" r="3" fill="#C8A9F9" />
                                <circle cx="51" cy="40" r="3" fill="#C8A9F9" />
                                <path d="M28.6308 35.9933L28.6309 35.9931L28.6246 35.9933C23.2751 36.1649 23.2867 43.9103 28.6246 44.0819L28.6246 44.0821L28.631 44.0819C33.9681 43.9105 33.9741 36.1572 28.6308 35.9933ZM26.7273 41.1632L26.7273 41.1632C26.3401 40.4628 26.3401 39.6125 26.7273 38.9122L26.7273 38.9122C27.1136 38.2133 27.8311 37.7616 28.6278 37.715C29.4245 37.7616 30.142 38.2133 30.5283 38.9122L30.5283 38.9122C30.9154 39.6125 30.9154 40.4628 30.5283 41.1632L30.5283 41.1632C30.142 41.862 29.4245 42.3138 28.6278 42.3604C27.8311 42.3138 27.1136 41.862 26.7273 41.1632Z" fill="#320873" stroke="#320873" stroke-width="0.2" />
                                <path d="M39.9512 35.9933L39.9512 35.9931L39.9449 35.9933C34.5984 36.1648 34.6039 43.9181 39.945 44.0819L39.945 44.0821L39.9513 44.0819C45.2884 43.9105 45.2944 36.1572 39.9512 35.9933ZM38.0476 41.1632L38.0476 41.1632C37.6604 40.4628 37.6604 39.6125 38.0476 38.9122L38.0476 38.9122C38.4339 38.2133 39.1514 37.7616 39.9481 37.715C40.7448 37.7616 41.4623 38.2133 41.8486 38.9122L41.8486 38.9122C42.2357 39.6125 42.2357 40.4628 41.8486 41.1632L41.8486 41.1632C41.4623 41.862 40.7448 42.3138 39.9481 42.3604C39.1514 42.3138 38.4339 41.862 38.0476 41.1632Z" fill="#320873" stroke="#320873" stroke-width="0.2" />
                                <path d="M51.2703 35.9933L51.2703 35.9931L51.264 35.9933C45.9166 36.1648 45.9168 43.9102 51.264 44.0819L51.264 44.0821L51.2704 44.0819C56.6075 43.9105 56.6135 36.1572 51.2703 35.9933ZM49.3668 41.1632L49.3668 41.1632C48.9796 40.4628 48.9796 39.6125 49.3668 38.9122L49.3668 38.9122C49.753 38.2133 50.4705 37.7616 51.2672 37.715C52.064 37.7616 52.7815 38.2133 53.1677 38.9122L53.1677 38.9122C53.5549 39.6125 53.5549 40.4628 53.1677 41.1632L53.1677 41.1632C52.7815 41.862 52.064 42.3138 51.2672 42.3604C50.4705 42.3138 49.753 41.862 49.3668 41.1632Z" fill="#320873" stroke="#320873" stroke-width="0.2" />
                                <path d="M40.0425 18.5652L40.0423 18.565H40.0012C34.3255 18.565 28.8825 20.8197 24.8691 24.833C20.8557 28.8463 18.6012 34.2894 18.6012 39.965H18.6011L18.6013 39.9692C19.7781 68.3573 60.2314 68.3502 61.4011 39.9692L61.4012 39.9692V39.965C61.4012 36.2086 60.4124 32.5182 58.5341 29.265C56.6559 26.0119 53.9541 23.3101 50.7013 21.4322C47.46 19.5609 43.7849 18.5724 40.0425 18.5652ZM40.0012 59.6436C34.7822 59.6436 29.7768 57.5703 26.0865 53.8797C22.3966 50.1897 20.3231 45.1853 20.3226 39.9671C21.407 13.8604 58.6032 13.8684 59.6797 39.9671C59.6792 45.1853 57.6059 50.1899 53.9158 53.8797C50.2253 57.5701 45.2201 59.6436 40.0012 59.6436Z" fill="#320873" stroke="#320873" stroke-width="0.2" />
                            </svg>
                        </div>
                        <p class="col">Other</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tailored_insurance">
    <div class="container">
        <div class="row align-items-center gx-xxl-6 gy-5">
            <div class="col-lg-6">
                <div class="fs-96 text-white font-articulat-heavy lh-3 ls-2">Craft Tailored Insurance Solutions</div>
                <div class="fs-20 text-secondary-light py-md-5 pt-4 description">
                    <p>The cube represents our definitive approach, in challenging complacency to deliver a distinctive service and eliminate the pitfall of a one-size-fits-all approach to insurance and risk management.</p>
                    <p class="pt-4">We have access to a network of over 150 Insurers and a licensed member of the Steadfast group, Australasia's largest independent insurance broker network. Our team has a diverse mix of skills, with combined industry experience in excess of 50 years.</p>
                </div>

                <div class="row">
                    <div class="col-auto">
                        <a href="#form" class="btn btn-blue d-inline-flex rounded-pill rounded-0 text-primary px-4 lh-1">Get A Quote</a>
                    </div>
                    <div class="col-auto">
                        <?= renderImg('acubed-logo.png', 'logo') ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-6"><?= renderImg("insurance_solutions.jpg", 'lib', 'rounded-20 w-100') ?></div>
        </div>
    </div>
</section>

<section class="tailored_insurance bg-primary">
    <div class="container">
        <div class="row align-items-center gx-xxl-6 gy-5">
            <div class="col-lg-6"><?= renderImg("family-running.jpg", 'lib', 'rounded-20 w-100') ?></div>

            <div class="col-lg-6">
                <p class="fs-96 lh-1 text-white font-articulat-heavy ls-2 mb-3 text-center text-md-start">More Options. <br />More <span class="text-secondary-light">You.</span></p>
                <div class="fs-20 text-secondary-light py-md-5 pt-4 description">
                    <p>Explore a world of possibilities with our comprehensive range of lenders. Whether you're safeguarding your family's future, protecting your assets, or securing your business, we've got you covered. With more options at your fingertips, you can tailor your loan options to suit your unique needs and aspirations.</p>

                    <p class="pt-4">Achieving peace of mind has never been more accessible. Enquire today and discover how we can help you navigate life's uncertainties with confidence.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="right-loan">
    <div class="container">
        <p class="fs-96 fw-800 text-white font-articulat-heavy lh-1 col-xxl-8">How do I know what is right for me?</p>

        <p class="text-light-grey fs-20 pt-4">
            As a business owner you need to be on top of it all. If you’re not, then it's pretty much chaos. Finding the right loan can also be just that if you don’t know what you are looking for. Don’t disappear down the rabbit hole searching through endless financial product descriptions, interest rate offers and advertisements. The best way to find the right personal loan for you is to compare what is out in the market right now. Compare, Compare, Compare! Comparing your options will get you the best deal for your circumstances. You can also consider the below to give you a headstart when you start your search.
        </p>
        <div class="bg-white shadow py-md-5 py-xl-8 py-4 px-xl-7 px-md-5 px-4 rounded-20 my-5 mt-lg-7">
            <div class="row gx-xl-6 gx-xxl-8">
                <div class="col-xl-6">
                    <p class="fs-64 fw-800 lh-1">The Right<br class="d-none d-xl-block" /> Interest Rate<span class="text-quaternary">.</span></p>

                    <div class="text-dark-grey fs-20 py-4 description">
                        <p>These days on the news all you hear about is interest rates rising. You can thank the Reserve Bank of Australia (RBA) for that. Interest rates play a vital role, as they dictate the amount you pay on a loan in any given year. When you are looking to get a business loan, be sure to be smart about it, don’t be a dummy and go with the first loan you see. Use LoanOptions to compare and find yourself (without any need to contact anyone else) the best loan for you! More Options. More You.</p>
                    </div>
                </div>

                <div class="col-xl-6">
                    <p class="fs-64 fw-800 lh-1">More Return (ROI)<span class="text-quaternary">.</span></p>

                    <div class="text-dark-grey fs-20 py-4 description">
                        <p>Cashflow is King! If you have a proper financing solution in place, you can see your business grow and generate additional (ROI). The saying you have to spend money to make money rings true. The money spent on marketing or other growth opportunities could lead to additional revenue that offsets any interest paid. It allows for more rapid expansion when cashflow would otherwise not allow it. There are many options these days when it comes to structuring your finance, including Overdrafts, lines of credit, working capital loans and invoice/debtor financing. Talk to our Customer Service professionals at LoanOptions today!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="loan_security">
    <div class="container">
        <div class="row align-items-end mb-4">
            <div class="col-lg-9 col-xl-7">
                <p class="fs-96 lh-3 ls-2 text-white font-articulat-heavy">To secure, or not secure your loan?</p>
            </div>
            <div class="col-auto">
                <p class="animated_text">That is the<br>question</p>
            </div>
        </div>
        <p class="description fs-20 text-white mb-xl-7 mb-md-5 mb-4">We have said it before, and we’ll say it again, not every loan is the same! When you are applying for a loan it can be either an unsecured or secured loan.
            Finding the right loan can be confusing and to make it easier we’ve defined the below.</p>
        <div class="loans-slider-wrapper" id="loans">
            <ul class="loans-slider-nav">
                <li class="active"><a href="javascript:void(0)" class="btn fw-600 text-white loan-slider-btn" slideTarget="0">Secured Loans</a></li>
                <li><a href="javascript:void(0)" class="btn fw-600 border-1 text-white loan-slider-btn" slideTarget="1">Unsecured Loans</a></li>
                <li class="slide"></li>
            </ul>

            <div class="loans_slider" id="loans_slider">
                <div class="loan-slider-content">
                    <div class="row justify-content-between align-items-md-center h-100 gx-xl-5">
                        <div class="col-lg-7">
                            <div class="fs-64 ls-2 fw-800 lh-1 pb-3">Secured<span class="text-quaternary">.</span></div>
                            <p class="fs-20 text-dark-grey pt-md-4 description">A secured loan uses the asset being purchased meaning collateral, in this case the equipments, as security for the loan. If you the borrower can’t repay the loan, the lender can reclaim the asset to cover the costs. Although if the sale of the asset doesn’t cover the full amount owing, the borrower must pay the difference.</p>
                            <p class="fs-20 text-dark-grey description">The benefits of a secured loan is that usually it comes with a lower and fixed rates, as the risk to your lender is lower.</p>
                        </div>
                        <div class="col">
                            <div class="rounded-20 bg-grey w-100 h-100 py-4 d-flex justify-content-center"><?= renderImg("secured-lock.png", "lib") ?></div>
                        </div>
                    </div>
                </div>
                <div class="loan-slider-content">
                    <div class="row justify-content-between align-items-md-center h-100 gx-xl-5">
                        <div class="col-lg-7">
                            <div class="fs-64 ls-2 fw-800 lh-1 pb-3">Unsecured<span class="text-quaternary">.</span></div>
                            <p class="fs-20 text-dark-grey pt-md-4 description">In an unsecured loan scenario the lender does not use any assets as a security
                                (no collateral). This comes with a higher charge interest rates when compared to secured as the risk is more for the lender.</p>
                            <p class="fs-20 text-dark-grey description">These types of loans are not generally for beauty equipments, because you can usually save money by using the vehicle as security. Some situations that an unsecured loan might be useful for a beauty equipment, is if the equipment being purchased is not an acceptable asset for that specific lender, if the asset is too old or even if you wish to borrow more than the actual purchase price by a substantial amount to cover costs or customisations to the equipment.</p>
                        </div>
                        <div class="col">
                            <div class="rounded-20 bg-grey w-100 h-100 py-4 d-flex justify-content-center"><?= renderImg("unsecure-lock.png", "lib") ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-xl-10 py-md-6 py-5 bg-tertiary-light">
    <div class="container">
        <div class="row align-items-center gx-xxl-6 gy-5 gy-lg-0">
            <div class="col-lg-6">
                <p class="fs-96 text-white font-articulat-heavy lh-3 ls-2">No bull#@*% here.</p>
                <p class="fs-20 text-white py-md-5 py-4 description">
                    We’ll tell you what you need to know, enquire with LoanOptions and take one step closer to getting your insurance loan.
                </p>
            </div>
            <div class="col-lg"><?= renderImg("60-lenders.png", 'lib', 'w-100') ?></div>
        </div>
    </div>
</section>

<section class="vision">
    <div class="container">
        <div class="row align-items-center pb-5 pb-md-7 gy-4">
            <div class="col-xl-5">
                <p class="fs-96 text-primary font-articulat-heavy text-center text-xl-start lh-3 ls-2">Our <span class="vision_heading_prefix">Vision</span><span class="text-green">.</span></p>
            </div>
            <div class="col-xl-6">
                <p class="fs-32 ls-2 fw-500 text-center text-xl-start description">Empowering customers to find the right loan with <span class="fw-800">fairness, accuracy & speed</span></p>
            </div>
        </div>
        <div class="row gy-3 gy-md-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="vision_card fairness">
                    <div>
                        <p class="fancyText">Justice!</p>
                        <p class="fs-72 font-articulat-heavy lh-1 text-white">Fairness</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="vision_card accuracy">
                    <div>
                        <p class="fancyText">See That!</p>
                        <p class="fs-72 font-articulat-heavy lh-1 text-white">Accuracy</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="vision_card speed">
                    <div>
                        <p class="fancyText">Hella Fast!</p>
                        <p class="fs-72 font-articulat-heavy lh-1 text-white">Speed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $testimonials = [
    [
        'title' => 'Vicki Fraser',
        'timeline' => '4 days ago',
        'content' => 'Chantelle is amazing to deal with, nothing was too much trouble, she was thorough and extremely helpful and accommodating to my requests. Chantelle worked out the best solution for my personal needs to move forward with my life and she ensured I was informed every step of the way.😊 I cannot recommend Chantelle highly enough. A huge thank you Chantelle 🙏',
        'smile_no' => '371',
        'image' => 'https://loanoptions.ai/uploads/testimonials/ts1.png',
    ],
    [
        'title' => 'Mary Ann Luague',
        'timeline' => '4 days ago',
        'content' => "<p>Pan Bhandge was very efficient and professional. The transaction was seamless and fast I never have to worry about anything. I'm very very busy so that matters. Not only did I get a good fair deal, it saves me from looking around.</p><p>Thank you Pan. You deserve the five star</p>",
        'smile_no' => '372',
        'image' => 'https://loanoptions.ai/uploads/testimonials/ts2.png',
    ],
    [
        'title' => 'Mrskat Charman',
        'timeline' => '4 days ago',
        'content' => 'Pan was a great help in finding me the right personal loan. He always kept me up to date with the process and was alway available should I have any questions. I really recommend Loan Options. Excellent service thanks again Pan?',
        'smile_no' => '373',
        'image' => 'https://loanoptions.ai/uploads/testimonials/ts3.png',
    ],
    [
        'title' => 'Paul Ciantar',
        'timeline' => '4 days ago',
        'content' => 'Great service quick and easy so much better than a big bank ???',
        'smile_no' => '374',
        'image' => 'https://loanoptions.ai/uploads/testimonials/ts4.png',
    ],
]; ?>
<section class="testimonials">
    <div class="container">
        <div class="row align-items-center mb-4 mb-md-5 gy-4">
            <div class="col-12 col-lg">
                <p class="fs-96 font-articulat-heavy lh-1 ls-2 text-tertiary">The cool people.</p>
            </div>
            <div class="col-12 col-lg-auto">
                <div class="row align-items-center gx-5">
                    <div class="col-auto d-none d-md-block">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 5.744L8 0L6 5.744H0L4.89 9.572L2.968 15.488L8 11.832L13.032 15.488L11.11 9.572L16 5.744H10Z" fill="#C8A9F9" />
                        </svg>
                        <span class="fw-600 ls-2 ps-2 lh-1">5/5 Rating</span>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.6828 2.03539L10.9646 0.317191C10.7615 0.114094 10.4859 0 10.1987 0C9.91141 0 9.63591 0.114094 9.43275 0.317191L7.96697 1.78297L11.217 5.03302L12.6828 3.56725C12.8859 3.36409 13 3.08858 13 2.80132C13 2.51405 12.8859 2.23855 12.6828 2.03539Z" fill="#C8A9F9" />
                            <path d="M7.19996 2.54998L1.08335 8.66659L0 13L4.33341 11.9166L10.45 5.80004L7.19996 2.54998Z" fill="#C8A9F9" />
                        </svg>
                        <span class="fw-600 ls-2 ps-2">374 reviews</span>
                    </div>
                    <div class="col-auto">
                        <a href="https://www.google.com/search?q=loanoptions+review&rlz=1C1ONGR_enAU1010AU1010&sxsrf=ALiCzsZV3OzoOBJlKjezMPtOZ12yTHhxMg%3A1664943498089&ei=igU9Y7iWBe7Fz7sPqv2zuAs&ved=0ahUKEwi4g5nuncj6AhXu4nMBHar-DLcQ4dUDCA8&uact=5&oq=loanoptions+review&gs_lcp=Cgdnd3Mtd2l6EAMyCAgAEB4QFhAKMggIABAeEA0QBTIICAAQHhANEAUyCAgAEB4QCBANMgUIABCGAzIFCAAQhgMyBQgAEIYDOgoIABBHENYEELADOg0ILhCABBDHARCvARAKOgcIABCABBAKOgoIABCABBDJAxAKOgYIABAeEBY6CAgAEB4QDxAWSgQIQRgASgQIRhgAUK4FWP8bYMgdaAFwAXgAgAGxAYgB7wiSAQMwLjeYAQCgAQHIAQjAAQE&sclient=gws-wiz#lrd=0x6b12bde29f9771c7:0xc077907404b9b979,1,,," target="_blank" class="btn btn-primary-light text-secondary rounded-pill">All Google Reviews</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="about_testimonials">
            <div class="section_left">
                <div class="row gy-5">
                    <div class="col-lg-12 d-lg-none">
                        <?= renderImg('hanging-superhero.png', 'lib', 'w-100') ?>
                    </div>
                    <div class="col-lg-7">
                        <div class="row align-items-center gx-3 gx-md-4">
                            <div class="col col-md-auto"><?= renderImg('google.png', 'logo') ?></div>
                            <div class="col-auto">
                                <svg width="126" height="22" viewBox="0 0 126 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2151 7.32361L14.7252 6.38043L11.8213 0.493756C11.7372 0.349449 11.6168 0.229727 11.472 0.146522C11.3273 0.0633158 11.1633 0.0195312 10.9963 0.0195312C10.8294 0.0195312 10.6654 0.0633158 10.5207 0.146522C10.3759 0.229727 10.2555 0.349449 10.1714 0.493756L7.27476 6.38043L0.784913 7.32361C0.615609 7.34822 0.456564 7.41976 0.325771 7.53015C0.194978 7.64053 0.0976564 7.78534 0.0448168 7.94821C-0.00802275 8.11108 -0.0142716 8.28549 0.0267772 8.45173C0.067826 8.61797 0.154534 8.76939 0.277092 8.88887L4.97398 13.4764L3.86301 19.9466C3.834 20.1154 3.85281 20.289 3.9173 20.4477C3.98179 20.6064 4.08939 20.7439 4.22792 20.8445C4.36644 20.9452 4.53035 21.005 4.70109 21.0172C4.87182 21.0294 5.04256 20.9935 5.19397 20.9136L11 17.8528L16.806 20.9081C16.937 20.9777 17.0831 21.0136 17.2313 21.0127C17.3649 21.013 17.497 20.9841 17.6182 20.9279C17.7394 20.8718 17.847 20.7898 17.9332 20.6877C18.0195 20.5857 18.0824 20.4659 18.1176 20.337C18.1528 20.208 18.1594 20.0729 18.137 19.941L17.026 13.4709L21.7229 8.88336C21.8455 8.76389 21.9322 8.61246 21.9732 8.44623C22.0143 8.27999 22.008 8.10557 21.9552 7.94271C21.9023 7.77984 21.805 7.63502 21.6742 7.52464C21.5434 7.41426 21.3844 7.34272 21.2151 7.31811V7.32361Z" fill="#F6C042" />
                                    <path d="M47.2151 7.32361L40.7252 6.38043L37.8213 0.493756C37.7372 0.349449 37.6168 0.229727 37.472 0.146522C37.3273 0.0633158 37.1633 0.0195312 36.9963 0.0195312C36.8294 0.0195312 36.6654 0.0633158 36.5207 0.146522C36.3759 0.229727 36.2555 0.349449 36.1714 0.493756L33.2748 6.38043L26.7849 7.32361C26.6156 7.34822 26.4566 7.41976 26.3258 7.53015C26.195 7.64053 26.0977 7.78534 26.0448 7.94821C25.992 8.11108 25.9857 8.28549 26.0268 8.45173C26.0678 8.61797 26.1545 8.76939 26.2771 8.88887L30.974 13.4764L29.863 19.9466C29.834 20.1154 29.8528 20.289 29.9173 20.4477C29.9818 20.6064 30.0894 20.7439 30.2279 20.8445C30.3664 20.9452 30.5304 21.005 30.7011 21.0172C30.8718 21.0294 31.0426 20.9935 31.194 20.9136L37 17.8528L42.806 20.9081C42.937 20.9777 43.0831 21.0136 43.2313 21.0127C43.3649 21.013 43.497 20.9841 43.6182 20.9279C43.7394 20.8718 43.847 20.7898 43.9332 20.6877C44.0195 20.5857 44.0824 20.4659 44.1176 20.337C44.1528 20.208 44.1594 20.0729 44.137 19.941L43.026 13.4709L47.7229 8.88336C47.8455 8.76389 47.9322 8.61246 47.9732 8.44623C48.0143 8.27999 48.008 8.10557 47.9552 7.94271C47.9023 7.77984 47.805 7.63502 47.6742 7.52464C47.5434 7.41426 47.3844 7.34272 47.2151 7.31811V7.32361Z" fill="#F6C042" />
                                    <path d="M73.2151 7.32361L66.7252 6.38043L63.8213 0.493756C63.7372 0.349449 63.6168 0.229727 63.472 0.146522C63.3273 0.0633158 63.1633 0.0195312 62.9963 0.0195312C62.8294 0.0195312 62.6654 0.0633158 62.5207 0.146522C62.3759 0.229727 62.2555 0.349449 62.1714 0.493756L59.2748 6.38043L52.7849 7.32361C52.6156 7.34822 52.4566 7.41976 52.3258 7.53015C52.195 7.64053 52.0977 7.78534 52.0448 7.94821C51.992 8.11108 51.9857 8.28549 52.0268 8.45173C52.0678 8.61797 52.1545 8.76939 52.2771 8.88887L56.974 13.4764L55.863 19.9466C55.834 20.1154 55.8528 20.289 55.9173 20.4477C55.9818 20.6064 56.0894 20.7439 56.2279 20.8445C56.3664 20.9452 56.5304 21.005 56.7011 21.0172C56.8718 21.0294 57.0426 20.9935 57.194 20.9136L63 17.8528L68.806 20.9081C68.937 20.9777 69.0831 21.0136 69.2313 21.0127C69.3649 21.013 69.497 20.9841 69.6182 20.9279C69.7394 20.8718 69.847 20.7898 69.9332 20.6877C70.0195 20.5857 70.0824 20.4659 70.1176 20.337C70.1528 20.208 70.1594 20.0729 70.137 19.941L69.026 13.4709L73.7229 8.88336C73.8455 8.76389 73.9322 8.61246 73.9732 8.44623C74.0143 8.27999 74.008 8.10557 73.9552 7.94271C73.9023 7.77984 73.805 7.63502 73.6742 7.52464C73.5434 7.41426 73.3844 7.34272 73.2151 7.31811V7.32361Z" fill="#F6C042" />
                                    <path d="M99.2151 7.32361L92.7252 6.38043L89.8213 0.493756C89.7372 0.349449 89.6168 0.229727 89.472 0.146522C89.3273 0.0633158 89.1633 0.0195312 88.9963 0.0195312C88.8294 0.0195312 88.6654 0.0633158 88.5207 0.146522C88.3759 0.229727 88.2555 0.349449 88.1714 0.493756L85.2748 6.38043L78.7849 7.32361C78.6156 7.34822 78.4566 7.41976 78.3258 7.53015C78.195 7.64053 78.0977 7.78534 78.0448 7.94821C77.992 8.11108 77.9857 8.28549 78.0268 8.45173C78.0678 8.61797 78.1545 8.76939 78.2771 8.88887L82.974 13.4764L81.863 19.9466C81.834 20.1154 81.8528 20.289 81.9173 20.4477C81.9818 20.6064 82.0894 20.7439 82.2279 20.8445C82.3664 20.9452 82.5304 21.005 82.7011 21.0172C82.8718 21.0294 83.0426 20.9935 83.194 20.9136L89 17.8528L94.806 20.9081C94.937 20.9777 95.0831 21.0136 95.2313 21.0127C95.3649 21.013 95.497 20.9841 95.6182 20.9279C95.7394 20.8718 95.847 20.7898 95.9332 20.6877C96.0195 20.5857 96.0824 20.4659 96.1176 20.337C96.1528 20.208 96.1594 20.0729 96.137 19.941L95.026 13.4709L99.7229 8.88336C99.8455 8.76389 99.9322 8.61246 99.9732 8.44623C100.014 8.27999 100.008 8.10557 99.9552 7.94271C99.9023 7.77984 99.805 7.63502 99.6742 7.52464C99.5434 7.41426 99.3844 7.34272 99.2151 7.31811V7.32361Z" fill="#F6C042" />
                                    <path d="M125.215 7.32361L118.725 6.38043L115.821 0.493756C115.737 0.349449 115.617 0.229727 115.472 0.146522C115.327 0.0633158 115.163 0.0195312 114.996 0.0195312C114.829 0.0195312 114.665 0.0633158 114.521 0.146522C114.376 0.229727 114.255 0.349449 114.171 0.493756L111.275 6.38043L104.785 7.32361C104.616 7.34822 104.457 7.41976 104.326 7.53015C104.195 7.64053 104.098 7.78534 104.045 7.94821C103.992 8.11108 103.986 8.28549 104.027 8.45173C104.068 8.61797 104.155 8.76939 104.277 8.88887L108.974 13.4764L107.863 19.9466C107.834 20.1154 107.853 20.289 107.917 20.4477C107.982 20.6064 108.089 20.7439 108.228 20.8445C108.366 20.9452 108.53 21.005 108.701 21.0172C108.872 21.0294 109.043 20.9935 109.194 20.9136L115 17.8528L120.806 20.9081C120.937 20.9777 121.083 21.0136 121.231 21.0127C121.365 21.013 121.497 20.9841 121.618 20.9279C121.739 20.8718 121.847 20.7898 121.933 20.6877C122.019 20.5857 122.082 20.4659 122.118 20.337C122.153 20.208 122.159 20.0729 122.137 19.941L121.026 13.4709L125.723 8.88336C125.845 8.76389 125.932 8.61246 125.973 8.44623C126.014 8.27999 126.008 8.10557 125.955 7.94271C125.902 7.77984 125.805 7.63502 125.674 7.52464C125.543 7.41426 125.384 7.34272 125.215 7.31811V7.32361Z" fill="#F6C042" />
                                </svg>
                            </div>
                            <p class="col-auto fs-24 text-secondary-light fw-600 lh-1 description">
                                5 star reviews
                            </p>
                        </div>
                        <div class="hero_heading fs-96 font-articulat-heavy lh-3 ls-2 text-white">More than <span class="text-secondary-light">370</span> smiles, laughs & warcries</div>
                        <a href="javascript:void(0)" id="seeTestimonials" class="btn d-inline-flex rounded-pill btn-green text-white">See Testimonials</a>
                    </div>
                </div>
                <?= renderImg('hanging-superhero.png', 'lib', 'hanging_superhero') ?>
            </div>
            <?php if (!empty($testimonials)) { ?>
                <div class="section_right">
                    <div class="text-center d-xl-none pt-5 pb-4">
                        <p class="fs-96 font-articulat-heavy lh-1 ls-2 text-tertiary">More Smiles.</p>
                        <p class="fw-500 pt-3">Hear from our customers</p>
                    </div>
                    <div id="testimonial_slider">
                        <?php foreach ($testimonials as $key => $testimonial) { ?>
                            <div class="">
                                <div>
                                    <div class="d-flex align-items-center mb-4">
                                        <img src="<?= $testimonial['image'] ?>" class="lazy me-3 entered loaded" alt="Loan Option ">
                                        <div>
                                            <div class="fs-32 fw-700 ls-2"><?= $testimonial['title'] ?></div>
                                            <div class="fs-14 text-light-grey ls-2"><?= $testimonial['timeline'] ?></div>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-4">
                                        <svg width="126" height="22" viewBox="0 0 126 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.2151 7.32361L14.7252 6.38043L11.8213 0.493756C11.7372 0.349449 11.6168 0.229727 11.472 0.146522C11.3273 0.0633158 11.1633 0.0195312 10.9963 0.0195312C10.8294 0.0195312 10.6654 0.0633158 10.5207 0.146522C10.3759 0.229727 10.2555 0.349449 10.1714 0.493756L7.27476 6.38043L0.784913 7.32361C0.615609 7.34822 0.456564 7.41976 0.325771 7.53015C0.194978 7.64053 0.0976564 7.78534 0.0448168 7.94821C-0.00802275 8.11108 -0.0142716 8.28549 0.0267772 8.45173C0.067826 8.61797 0.154534 8.76939 0.277092 8.88887L4.97398 13.4764L3.86301 19.9466C3.834 20.1154 3.85281 20.289 3.9173 20.4477C3.98179 20.6064 4.08939 20.7439 4.22792 20.8445C4.36644 20.9452 4.53035 21.005 4.70109 21.0172C4.87182 21.0294 5.04256 20.9935 5.19397 20.9136L11 17.8528L16.806 20.9081C16.937 20.9777 17.0831 21.0136 17.2313 21.0127C17.3649 21.013 17.497 20.9841 17.6182 20.9279C17.7394 20.8718 17.847 20.7898 17.9332 20.6877C18.0195 20.5857 18.0824 20.4659 18.1176 20.337C18.1528 20.208 18.1594 20.0729 18.137 19.941L17.026 13.4709L21.7229 8.88336C21.8455 8.76389 21.9322 8.61246 21.9732 8.44623C22.0143 8.27999 22.008 8.10557 21.9552 7.94271C21.9023 7.77984 21.805 7.63502 21.6742 7.52464C21.5434 7.41426 21.3844 7.34272 21.2151 7.31811V7.32361Z" fill="#F6C042" />
                                            <path d="M47.2151 7.32361L40.7252 6.38043L37.8213 0.493756C37.7372 0.349449 37.6168 0.229727 37.472 0.146522C37.3273 0.0633158 37.1633 0.0195312 36.9963 0.0195312C36.8294 0.0195312 36.6654 0.0633158 36.5207 0.146522C36.3759 0.229727 36.2555 0.349449 36.1714 0.493756L33.2748 6.38043L26.7849 7.32361C26.6156 7.34822 26.4566 7.41976 26.3258 7.53015C26.195 7.64053 26.0977 7.78534 26.0448 7.94821C25.992 8.11108 25.9857 8.28549 26.0268 8.45173C26.0678 8.61797 26.1545 8.76939 26.2771 8.88887L30.974 13.4764L29.863 19.9466C29.834 20.1154 29.8528 20.289 29.9173 20.4477C29.9818 20.6064 30.0894 20.7439 30.2279 20.8445C30.3664 20.9452 30.5304 21.005 30.7011 21.0172C30.8718 21.0294 31.0426 20.9935 31.194 20.9136L37 17.8528L42.806 20.9081C42.937 20.9777 43.0831 21.0136 43.2313 21.0127C43.3649 21.013 43.497 20.9841 43.6182 20.9279C43.7394 20.8718 43.847 20.7898 43.9332 20.6877C44.0195 20.5857 44.0824 20.4659 44.1176 20.337C44.1528 20.208 44.1594 20.0729 44.137 19.941L43.026 13.4709L47.7229 8.88336C47.8455 8.76389 47.9322 8.61246 47.9732 8.44623C48.0143 8.27999 48.008 8.10557 47.9552 7.94271C47.9023 7.77984 47.805 7.63502 47.6742 7.52464C47.5434 7.41426 47.3844 7.34272 47.2151 7.31811V7.32361Z" fill="#F6C042" />
                                            <path d="M73.2151 7.32361L66.7252 6.38043L63.8213 0.493756C63.7372 0.349449 63.6168 0.229727 63.472 0.146522C63.3273 0.0633158 63.1633 0.0195312 62.9963 0.0195312C62.8294 0.0195312 62.6654 0.0633158 62.5207 0.146522C62.3759 0.229727 62.2555 0.349449 62.1714 0.493756L59.2748 6.38043L52.7849 7.32361C52.6156 7.34822 52.4566 7.41976 52.3258 7.53015C52.195 7.64053 52.0977 7.78534 52.0448 7.94821C51.992 8.11108 51.9857 8.28549 52.0268 8.45173C52.0678 8.61797 52.1545 8.76939 52.2771 8.88887L56.974 13.4764L55.863 19.9466C55.834 20.1154 55.8528 20.289 55.9173 20.4477C55.9818 20.6064 56.0894 20.7439 56.2279 20.8445C56.3664 20.9452 56.5304 21.005 56.7011 21.0172C56.8718 21.0294 57.0426 20.9935 57.194 20.9136L63 17.8528L68.806 20.9081C68.937 20.9777 69.0831 21.0136 69.2313 21.0127C69.3649 21.013 69.497 20.9841 69.6182 20.9279C69.7394 20.8718 69.847 20.7898 69.9332 20.6877C70.0195 20.5857 70.0824 20.4659 70.1176 20.337C70.1528 20.208 70.1594 20.0729 70.137 19.941L69.026 13.4709L73.7229 8.88336C73.8455 8.76389 73.9322 8.61246 73.9732 8.44623C74.0143 8.27999 74.008 8.10557 73.9552 7.94271C73.9023 7.77984 73.805 7.63502 73.6742 7.52464C73.5434 7.41426 73.3844 7.34272 73.2151 7.31811V7.32361Z" fill="#F6C042" />
                                            <path d="M99.2151 7.32361L92.7252 6.38043L89.8213 0.493756C89.7372 0.349449 89.6168 0.229727 89.472 0.146522C89.3273 0.0633158 89.1633 0.0195312 88.9963 0.0195312C88.8294 0.0195312 88.6654 0.0633158 88.5207 0.146522C88.3759 0.229727 88.2555 0.349449 88.1714 0.493756L85.2748 6.38043L78.7849 7.32361C78.6156 7.34822 78.4566 7.41976 78.3258 7.53015C78.195 7.64053 78.0977 7.78534 78.0448 7.94821C77.992 8.11108 77.9857 8.28549 78.0268 8.45173C78.0678 8.61797 78.1545 8.76939 78.2771 8.88887L82.974 13.4764L81.863 19.9466C81.834 20.1154 81.8528 20.289 81.9173 20.4477C81.9818 20.6064 82.0894 20.7439 82.2279 20.8445C82.3664 20.9452 82.5304 21.005 82.7011 21.0172C82.8718 21.0294 83.0426 20.9935 83.194 20.9136L89 17.8528L94.806 20.9081C94.937 20.9777 95.0831 21.0136 95.2313 21.0127C95.3649 21.013 95.497 20.9841 95.6182 20.9279C95.7394 20.8718 95.847 20.7898 95.9332 20.6877C96.0195 20.5857 96.0824 20.4659 96.1176 20.337C96.1528 20.208 96.1594 20.0729 96.137 19.941L95.026 13.4709L99.7229 8.88336C99.8455 8.76389 99.9322 8.61246 99.9732 8.44623C100.014 8.27999 100.008 8.10557 99.9552 7.94271C99.9023 7.77984 99.805 7.63502 99.6742 7.52464C99.5434 7.41426 99.3844 7.34272 99.2151 7.31811V7.32361Z" fill="#F6C042" />
                                            <path d="M125.215 7.32361L118.725 6.38043L115.821 0.493756C115.737 0.349449 115.617 0.229727 115.472 0.146522C115.327 0.0633158 115.163 0.0195312 114.996 0.0195312C114.829 0.0195312 114.665 0.0633158 114.521 0.146522C114.376 0.229727 114.255 0.349449 114.171 0.493756L111.275 6.38043L104.785 7.32361C104.616 7.34822 104.457 7.41976 104.326 7.53015C104.195 7.64053 104.098 7.78534 104.045 7.94821C103.992 8.11108 103.986 8.28549 104.027 8.45173C104.068 8.61797 104.155 8.76939 104.277 8.88887L108.974 13.4764L107.863 19.9466C107.834 20.1154 107.853 20.289 107.917 20.4477C107.982 20.6064 108.089 20.7439 108.228 20.8445C108.366 20.9452 108.53 21.005 108.701 21.0172C108.872 21.0294 109.043 20.9935 109.194 20.9136L115 17.8528L120.806 20.9081C120.937 20.9777 121.083 21.0136 121.231 21.0127C121.365 21.013 121.497 20.9841 121.618 20.9279C121.739 20.8718 121.847 20.7898 121.933 20.6877C122.019 20.5857 122.082 20.4659 122.118 20.337C122.153 20.208 122.159 20.0729 122.137 19.941L121.026 13.4709L125.723 8.88336C125.845 8.76389 125.932 8.61246 125.973 8.44623C126.014 8.27999 126.008 8.10557 125.955 7.94271C125.902 7.77984 125.805 7.63502 125.674 7.52464C125.543 7.41426 125.384 7.34272 125.215 7.31811V7.32361Z" fill="#F6C042" />
                                        </svg>
                                    </div>
                                    <div class="fs-20 mb-7 description">
                                        <?= $testimonial['content'] ?>
                                    </div>
                                </div>
                                <p class="mt-auto text-palepurple font-articulat-heavy text-end">
                                    Smile No. <span class="display-2 fw-bolder"><?= $testimonial['smile_no'] ?>
                                </p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="footer_contact">
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-8">
                <div class="more_options h-100">
                    <div class="row justify-content-between align-items-end h-100">
                        <div class="col-6">
                            <p class="fs-40 font-articulat-heavy lh-3 text-dark text-capitalize">A Modular Approach to <span class="text-secondary">Insurance & Risk Management</span></p>
                        </div>
                        <div class="col-auto">
                            <a href="#form" id="seeTestimonials" class="btn d-inline-flex rounded-pill btn-secondary text-white">Visit A-Cubed</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="h-100 bg-tertiary-light rounded-20 text-center d-flex align-items-center flex-column justify-content-center py-5 py-md-4 px-md-4">
                    <p class="fs-32 ls-2 text-white fw-700 lh-1 pb-3">Compare Insurance Loans Online</p>
                    <a href="#form" id="seeTestimonials" class="btn d-inline-flex rounded-pill btn-quaternary text-white">Get Started</a>
                </div>
            </div>
        </div>

        <!-- <div class="text-center text-white pt-5 fw-300 lh-2">
            <p class="fs-20 fw-700">Disclaimer:</p>
            <p class="">It's Simple Finance may receive benefits from this partnership. Each nurse is at liberty to choose their own loan provider.</p>
            <p class=""><span class="fw-800">It’s Simple Pty Ltd. Trading</span> as It’s Simple Finance (Credit Representative 522885) is authorised under Australian Credit Licence 390261 | ABN: 22 637 831 157 | ACN: 637 831 157.</p>
            <p class=""><span class="fw-800">Loan Options AI Pty Ltd</span> as loanoptions.ai | ABN: 75 641 873 716 | Australian Credit License Number: 543631</p>
        </div> -->
    </div>
</section>

<footer class="py-4">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center gy-4 gy-lg-0">
            <div class="col-auto">
                <a href="./">
                    <?= renderImg("logo.png", "logo") ?>
                </a>
            </div>
            <div class="col-12 col-md-auto">
                <div class="row gx-2 gx-md-3 justify-content-between justify-content-md-center">
                    <div class="col-auto text-center">Copyright <?= date('Y') ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center"><?= $site ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center">All Rights Reserved</div>
                </div>
            </div>
            <div class="col-auto">
                <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                    <?= renderImg("aiims.png", "logo") ?>
                </a>
            </div>
        </div>
    </div>
</footer>
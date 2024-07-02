<?php include "header.php" ?>

        <main class="wrapper">
        <!-- Page Header -->
        <div class="wptb-page-heading" style="background-image: url('assets/custom/Become A Dealer.webp');">
            <div class="container">
                <div class="wptb-item--inner">
                    <h2 class="wptb-item--title ">Become A Dealer</h2>
                    <div class="wptb-breadcrumb-wrap">
                        <ul class="wptb-breadcrumb">
                            <li><a href="https://www.luminorr.com/">Home</a></li>
                            <li><span>Become A Dealer</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ's -->
            <section class="wptb-faq-one pd-top-more mr-bottom-100">
                <div class="container mr-bottom-100">
                    <!-- FAQ's -->
                    <div class="wptb-faq--inner">
                        <div class="wptb-heading">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="wptb-item--inner">
                                        <h6 class="wptb-item--subtitle">
                                            FREQUENTLY ASKED QUESTIONS
                                        </h6>
                                        <h1 class="wptb-item--title">Questions Mostly Asked</h1>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 ps-md-5">
                                    <p class="wptb-item--description ms-md-4">When you bring your vehicle to Luminorr Car Mechanic Center, you can rest easy knowing that your vehicle is in professional hands. We take every possible step to ensure that your experience with us is pleasant and efficient.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="wptb-accordion wptb-accordion1 wow fadeInUp">
                                    <div class="wptb--item active">
                                        <h6 class="wptb-item-title"><span><span class="wptb-item--number">Q1.</span> How is Luminorr’s PPF different from others?</span> <i class="bi bi-chevron-down"></i></h6>
                                        <div class="wptb-item--content">
                                            Luminorr’s PPF features advanced self-healing technology, superior hydrophobic properties, and UV protection to maintain your vehicle’s pristine condition. Our film is custom-fit for each vehicle, ensuring seamless coverage and optimal protection.                                        
                                        </div>
                                    </div>
            
                                    <div class="wptb--item">
                                        <h6 class="wptb-item-title"><span><span class="wptb-item--number">Q2.</span> How long does the PPF last?</span> <i class="bi bi-chevron-down"></i></h6>
                                        <div class="wptb-item--content">
                                            Luminorr’s PPF is designed to last several years, depending on the care and maintenance. Our top-quality materials and expert application ensure long-lasting protection and performance.
                                        </div>
                                    </div>
            
                                    <div class="wptb--item">
                                        <h6 class="wptb-item-title"><span><span class="wptb-item--number">Q3.</span> How do I care for my vehicle after PPF application?</span> <i class="bi bi-chevron-down"></i></h6>
                                        <div class="wptb-item--content">
                                            You can wash your vehicle as usual, but it’s recommended to avoid abrasive cleaning tools and harsh chemicals. For best results, follow our specific care guidelines provided at the time of application.
                                        </div>
                                    </div>
            
                                    <div class="wptb--item">
                                        <h6 class="wptb-item-title"><span><span class="wptb-item--number">Q4.</span> How long does it take to apply PPF to my vehicle?</span> <i class="bi bi-chevron-down"></i></h6>
                                        <div class="wptb-item--content">
                                            The time required can vary depending on the vehicle size and the areas you want to cover. Typically, it can take anywhere from a few hours to a full day. We strive to ensure that every application is done meticulously and efficiently.
                                        </div>
                                    </div>

                                    <div class="wptb--item">
                                        <h6 class="wptb-item-title"><span><span class="wptb-item--number">Q5.</span> What parts of my vehicle should I protect with PPF?</span> <i class="bi bi-chevron-down"></i></h6>
                                        <div class="wptb-item--content">
                                            Common areas include the hood, front bumper, side mirrors, door edges, and rear bumper. However, you can choose to protect any part of your vehicle’s exterior. We offer customized solutions to meet your specific needs.
                                        </div>
                                    </div>

                                    <div class="wptb-item--button">
                                        <!-- <a class="btn" href="#">
                                            <span class="btn-readmore--text"> View More Faq’s <i class="bi bi-chevron-double-right"></i> </span>
                                        </a> -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 ps-lg-5 mt-5 mt-lg-0">
                                <div class="wptb-appointment-form-one ms-lg-4">
                                    <div class="wptb-form--wrapper">
                                        <form class="wptb-form" action="dealermail.php" method="post">
                                            <div class="wptb-form--inner">
                                                <div class="wptb-heading mr-bottom-0">
                                                    <div class="wptb-item--inner text-center mr-bottom-0">
                                                        <h2 class="wptb-item--title mr-bottom-0">Join Our Network of Exclusive Dealers</h2>
                                                    </div>
                                                </div>

                                                <div class="row">                                                    
                                                    <div class="col-md-6 col-lg-6 mb-4">
                                                        <div class="form-group">
                                                            <label>Your Name *</label>
                                                            <input type="text" name="name" id="name" class="form-control" placeholder="" required=""
                                                                pattern="^\S.*$" title="Name cannot be blank or consist of only white spaces.">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-lg-6 mb-4">
                                                        <div class="form-group">
                                                            <label>Email Address *</label>
                                                            <input type="email" name="email" id="email" class="form-control" placeholder="" required="" inputmode="email">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-lg-6 mb-4">
                                                        <div class="form-group">
                                                            <label>Phone No</label>
                                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="" required="" maxlength="10" minlength="10" pattern="[0-9]+"
                            title="Please enter a valid phone number consisting of digits only."
                            inputmode="numeric">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-lg-6 mb-4">
                                                        <div class="form-group">
                                                            <label>Category</label>
                                                            <select name="category" class="form-control" required="">
                                                                <option value selected disabled>Select Category</option>
                                                                <option value="Studio Owner">Studio Owner</option>
                                                                <option value="Dealer/Distributor">Dealer/Distributor</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 mt-2">
                                                        <div class="wptb-item--button text-center">
                                                            <button type="submit" class="btn-three black w-100">
                                                                <span class="btn-wrap">
                                                                    <span class="text-first">Send</span>
                                                                    <span class="text-second">Send</span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </main>

<?php include "footer.php" ?>
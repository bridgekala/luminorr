<form class="wptb-form"
    action="contactmail.php"
    method="post">
    <div class="wptb-form--inner">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control"
                        placeholder="Name*" required=""
                            pattern="^\S.*$" title="Name cannot be blank or consist of only white spaces.">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 mb-4">
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control"
                        placeholder="E-mail*" required inputmode="email">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 mb-4">
                <div class="form-group">
                    <input type="text" name="phone" id="phone" class="form-control"
                        placeholder="Contact" required maxlength="10" minlength="10" pattern="[0-9]+"
                            title="Please enter a valid phone number consisting of digits only."
                            inputmode="numeric">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="form-group">
                    <input type="text" name="subject" id="subject" class="form-control"
                        placeholder="Subject" required=""
                            pattern="^\S.*$" title="Name cannot be blank or consist of only white spaces.">
                </div>
            </div>

            <div class="col-md-12 col-lg-12 mb-4">
                <div class="form-group">
                    <textarea name="message" id="message" class="form-control"
                        placeholder="Your Message" ></textarea>
                </div>
            </div>

            <div class="col-md-12 col-lg-12">
                <div class="wptb-item--button">
                    <button class="btn-two white" type="submit">
                        <div class="btn-wrap">
                            <span class="text-first"> Send Mail </span>
                            <span class="text-second"> <i class="bi bi-plus"></i>
                            </span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

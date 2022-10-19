<div>
        <!-- Ec breadcrumb start -->
        <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row ec_breadcrumb_inner">
                            <div class="col-md-6 col-sm-12">
                                <h2 class="ec-breadcrumb-title">Contact Us</h2>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <!-- ec-breadcrumb-list start -->
                                <ul class="ec-breadcrumb-list">
                                    <li class="ec-breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="ec-breadcrumb-item active">Contact Us</li>
                                </ul>
                                <!-- ec-breadcrumb-list end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec breadcrumb end -->

        <!-- Ec Contact Us page -->
        <section class="ec-page-content section-space-p">
            <div class="container">
                <div class="row">
                    <div class="ec-common-wrapper">
                        <div class="ec-contact-leftside">
                            <div class="ec-contact-container">
                                <div class="ec-contact-form">
                                    <form wire:submit.prevent="sendMessage">
                                        <span class="ec-contact-wrap">
                                            <label>Full Name*</label>
                                            <input
                                            type="text"
                                            name="name"
                                            placeholder="Enter your name"
                                            wire:model="name"
                                            />
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </span>
                                        <span class="ec-contact-wrap">
                                            <label>Email*</label>
                                            <input
                                            type="email"
                                            name="email"
                                            placeholder="Enter your email"
                                            wire:model="email"
                                            />
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </span>
                                        <span class="ec-contact-wrap">
                                            <label>Phone Number*</label>
                                            <input
                                            type="text"
                                            name="phone"
                                            placeholder="Enter your phone number"
                                            wire:model="phone"
                                            />
                                            @error('phone')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </span>
                                        <span class="ec-contact-wrap">
                                            <label>Subject*</label>
                                            <input
                                            type="text"
                                            name="subject"
                                            placeholder="Subject"
                                            wire:model="subject"
                                            />
                                            @error('subject')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </span>
                                        <span class="ec-contact-wrap">
                                            <label>Comments/Questions*</label>
                                            <textarea
                                            name="message"
                                            cols="30"
                                            rows="10"
                                            placeholder="Your message"
                                            wire:model="comment"
                                            ></textarea>

                                            @error('comment')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </span>
                                        {{-- <span class="ec-contact-wrap ec-recaptcha">
                                            <span class="g-recaptcha"
                                                data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S"
                                                data-callback="verifyRecaptchaCallback"
                                                data-expired-callback="expiredRecaptchaCallback"></span>
                                        <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                                        <span class="help-block with-errors"></span>
                                        </span> --}}
                                        <span class="ec-contact-wrap ec-contact-btn">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </span>
                                    </form>
                                        @if (Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                        @endif
                                </div>
                            </div>
                        </div>
                        <div class="ec-contact-rightside">
                            <div class="ec_contact_map">
                                <div class="ec_map_canvas">
                                    <iframe id="ec_map_canvas" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d71263.65594328841!2d144.93151478652146!3d-37.8734290780509!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1615963387757!5m2!1sen!2sus"></iframe>
                                    <a href="https://sites.google.com/view/maps-api-v2/mapv2"></a>
                                </div>
                            </div>
                            <div class="ec_contact_info">
                                <h1 class="ec_contact_info_head">Contact us</h1>
                                <ul class="align-items-center">
                                    <li class="ec-contact-item"><i class="ecicon eci-map-marker" aria-hidden="true"></i><span>Address :</span>{{ $setting->address }}</li>
                                    <li class="ec-contact-item align-items-center"><i class="ecicon eci-phone" aria-hidden="true"></i><span>Call Us :</span><a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a></li>
                                    @if ($setting->phone2)
                                    <li class="ec-contact-item align-items-center"><i class="ecicon eci-phone" aria-hidden="true"></i><span>OR Call Us :</span><a href="tel:{{ $setting->phone2 }}">{{ $setting->phone2 }}</a></li>
                                    @endif
                                    <li class="ec-contact-item align-items-center"><i class="ecicon eci-envelope" aria-hidden="true"></i><span>Email :</span><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>

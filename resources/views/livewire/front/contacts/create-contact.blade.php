<div>
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ __('Contact Us') }}</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row ">
                <div class="col-lg-4 col-xl-5">
                    <div class="card border-0">
                        <div class="card-body p-3">
                            <div>
                                <h5><i class="fa fa-location-dot"></i> {{ __('messages.app_name') }} {{ __('Location') }}</h5>
                                <p>
                                    {{ __('messages.address_1') }}
                                    <br />
                                    <br />
                                    {{ __('messages.address_2') }}
                                </p>
                            </div>
                            <div>
                                <p><span class="text-info">{{ __('Phone') }}:</span> +982632554120 ({{ __('Iran') }})</p>
                                <p><span class="text-info">{{ __('Phone') }}:</span> +39097122999  ({{ __('Italy') }})</p>
                                <p><span class="text-info">{{ __('Mobile No.') }}:</span> +989127179262 ({{ __('Iran') }})</p>
                                <p><span class="text-info">{{ __('Mobile No.') }}:</span> +393516520568 ({{ __('Italy') }})</p>
                                <p><span class="text-info">{{ __('Email') }}:</span> persianfoodproducts@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-7">
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">{{ __('Full name') }}</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">{{ __('A name is required.') }}</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">{{ __('Email address') }}</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">{{ __('An email is required.') }}</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">{{ __('Email is not valid.') }}</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">{{ __('Phone number') }}</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">{{ __('A phone number is required.') }}</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">{{ __('Message') }}</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">{{ __('A message is required.') }}</div>
                        </div>

                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        <!-- Submit Button-->
                        <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="contact-one" id="contact">
    <div class="contact-one_pattern" style="background-image:url(images/contact-bg.png)"></div>
    <div class="contact-one_bg-layer" style="background-image:url(assets/images/background/moringa_bg.png)">
    </div>
    <div class="auto-container">

        <div class="row clearfix">
            @php
            $hasContactInfo = $shortcode->title || $shortcode->subtitle || $shortcode->name_1 || $shortcode->address_1 || $shortcode->name_2 || $shortcode->address_2 || $shortcode->name_3 || $shortcode->address_3;
            @endphp

            @if ($hasContactInfo)
            <div class="contact-one_title-column col-lg-4 col-md-12 col-sm-12">
                <div class="contact-one_title-outer">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="sec-title_title">Get info Now</div>
                        <h2 class="sec-title_heading tx-split-text split-in-right">Contact Info</h2>
                        <div class="sec-title_text">For any queries, reach us by call, email, or fill the form
                            and our team will get back to you promptly.
                        </div>
                    </div>
                    <ul class="contact-one_info-list">
                        <li>
                            <span class="icon flaticon-location"></span>
                            Visit anytime
                            <strong>Door no: 5-106/SY227AA1, Street No 2, Green Lands
                                Manchiravula, Gandipet,
                                Hyderabad, Telangana, India - 500075.</strong>
                        </li>
                        <li>
                            <span class="icon flaticon-open"></span>
                            Write email
                            <strong>tetraelements@gmail.com</strong>
                        </li>
                        <li>
                            <span class="icon flaticon-phone-call"></span>
                            Have any question?
                            <strong>+91 9090-7070-85</strong>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contact-one_form-column col-lg-8 col-md-12 col-sm-12">
                <div class="contact-one_form-outer">
                    <!-- Sec Title -->
                    <div class="sec-title centered">
                        <div class="sec-title_title">Have Questions?</div>
                        <h2 class="sec-title_heading tx-split-text split-in-right">Send us a Message</h2>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact-form">
                        {!! Theme::partial('shortcodes.contact-form', compact('shortcode', 'form')) !!}
                    </div>
                </div>
            </div>
            <section class="map-one">
                <iframe
                    src="https://www.google.com/maps?q=Sunseaz+Technologies+Madhapur+Hyderabad+Telangana+500081&output=embed"
                    allowfullscreen=""></iframe>
            </section>
            
            @endif
        </div>
    </div>
    </div>
</section>
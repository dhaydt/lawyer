@extends('layout.frontend.app')
@section('content')
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- section begin -->
    <section id="subheader" class="jarallax text-white">
        <img src="{{ asset('storage/banner/'. $web_config['hero_banner']) }}" class="jarallax-img" alt="amaradvokat">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Contact Us</h1>
                        <p>Reputation. Respect. Result.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->
    <section aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/misc/p1.jpg') }}" alt="amaradvokat" class="img-fluid mb30">
                    <h3>US Office</h3>
                    <address class="s1">
                        <span><i class="id-color fa fa-map-marker fa-lg"></i>08 W 36th St, New York, NY 10001</span>
                        <span><i class="id-color fa fa-phone fa-lg"></i>+1 333 9296</span>
                        <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contact@example.com</a></span>
                        <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span>
                    </address>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/misc/p2.jpg') }}" alt="amaradvokat" class="img-fluid mb30">
                    <h3>UK Office</h3>
                    <address class="s1">
                        <span><i class="id-color fa fa-map-marker fa-lg"></i>100 Mainstreet Center, Sydney</span>
                        <span><i class="id-color fa fa-phone fa-lg"></i>+61 333 9296</span>
                        <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contact@example.com</a></span>
                        <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span>
                    </address>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/misc/p3.jpg') }}" alt="amaradvokat" class="img-fluid mb30">
                    <h3>AU Office</h3>
                    <address class="s1">
                        <span><i class="id-color fa fa-map-marker fa-lg"></i>100 Mainstreet Center, Sydney</span>
                        <span><i class="id-color fa fa-phone fa-lg"></i>+61 333 9296</span>
                        <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contact@example.com</a></span>
                        <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span>
                    </address>
                </div>
            </div>
        </div>
    </section>
    <section aria-label="section" class="text-light" data-bgcolor="#111111">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 mb-sm-30 text-center">
                    <h3>Do you have any question?</h3>
                    <form name="contactForm" id="contact_form" class="form-border" method="post" action="https://www.designesia.com/themes/justica/email.php">
                        <div class="field-set">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" />
                        </div>
                        <div class="field-set">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" />
                        </div>
                        <div class="field-set">
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" />
                        </div>
                        <div class="field-set">
                            <textarea name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
                        </div>
                        <div class="spacer-half"></div>
                        <div id="submit">
                            <input type="submit" id="send_message" value="Submit Form" class="btn btn-custom" />
                        </div>
                        <div id="mail_success" class="success">Your message has been sent successfully.</div>
                        <div id="mail_fail" class="error">Sorry, error occured this time sending your message.</div>
                    </form>
                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>
    </section>
    <section class="jarallax text-light">
        <img src="{{ asset('assets/images/background/2.jpg') }}" class="jarallax-img" alt="amaradvokat">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-delay=".2s">
                    <div class="de_count ultra-big s2 border-light text-center">
                        <h3 class="timer" data-to="20" data-speed="1000">20</h3>
                        <span class="id-color">Years of Experience</span>
                    </div>
                </div>
                <div class="col-lg-4 p-lg-5  mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
                    <span class="p-title">About Us</span><br>
                    <h2>Justica is Your Best Partner for Legal Solutions</h2>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-delay=".6s">
                    <p>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

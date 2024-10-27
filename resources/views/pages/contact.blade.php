<x-app-layout>
    <div class="offcanvas-overlay"></div>
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row breadcrumb_box  align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-start">
                            <h2 class="breadcrumb-title">Contact Us</h2>
                        </div>
                        {{-- <div class="col-lg-6  col-md-6 col-sm-12">
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list text-center text-md-end">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->


    <!-- contact area start -->
    <div class="contact-area pb-100px pt-100px">
        <div class="container">
            <div class="contact-map mb-5">
                <div id="mapid" data-aos="fade-up" data-aos-delay="200">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15956.506626620365!2d37.13793023390719!3d-1.0668781786392947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f5047e81f3497%3A0x706fb90c6e00bf8e!2sHappy%20Valley%20Estate%2C%20Thika!5e0!3m2!1sen!2ske!4v1722528659576!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                            <a href="https://sites.google.com/view/maps-api-v2/mapv2"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-row-2 row">
                <div class="col-lg-4 col-md-5 mb-lm-60px col-sm-12 col-xs-12 w-sm-100">
                    <div class="contact-info-wrap">
                        <h2 class="title" data-aos="fade-up" data-aos-delay="200">Contact Info</h2>
                        <div class="single-contact-info" data-aos="fade-up" data-aos-delay="200">
                            <div class="contact-info-inner">
                                <span class="sub-title">Phone:</span>
                            </div>
                            <div class="contact-info-dec">
                                <p><a href="tel:+012345678102">+254 345 678 102</a></p>
                                <p><a href="tel:+254345678102">+254 345 678 102</a></p>
                            </div>
                        </div>
                        <div class="single-contact-info" data-aos="fade-up" data-aos-delay="200">
                            <div class="contact-info-inner">
                                <span class="sub-title">Email:</span>
                            </div>
                            <div class="contact-info-dec">
                                <p><a href="mailto://urname@email.com">winter@email.com</a></p>
                                <p><a href="mailto://urwebsitenaem.com">winter.com</a></p>
                            </div>
                        </div>
                        <div class="single-contact-info" data-aos="fade-up" data-aos-delay="200">
                            <div class="contact-info-inner">
                                <span class="sub-title">Address:</span>
                            </div>
                            <div class="contact-info-dec">
                                <p>Address Pin,</p>
                                <p>Thika 123.</p>
                            </div>
                        </div>
                        <div class="contact-social">
                            <h3 class="title" data-aos="fade-up" data-aos-delay="200">Follow Us</h3>
                            <div class="social-info" data-aos="fade-up" data-aos-delay="200">
                                <ul class="d-flex">
                                    <li>
                                        <a href="#"><i class="ion-social-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-social-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-social-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-social-google"></i></a>
                                    </li>
                                    <li>
                                        <a class="m-0" href="#"><i class="ion-social-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                    <div class="contact-form">
                        <div class="contact-title mb-30">
                            <h2 class="title" data-aos="fade-up" data-aos-delay="200">Get In Touch</h2>
                        </div>
                        <form class="contact-form-style" id="contact-form" action="https://whizthemes.com/nazmul/php/mail.php" method="post">
                            <div class="row">
                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                    <input name="name" placeholder="Name*" type="text" />
                                </div>
                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                    <input name="email" placeholder="Email*" type="email" />
                                </div>
                                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                                    <input name="subject" placeholder="Subject*" type="text" />
                                </div>
                                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                                    <textarea name="message" placeholder="Your Message*"></textarea>
                                    <button class="btn btn-primary btn-hover-dark mt-4" data-aos="fade-up" data-aos-delay="200" type="submit">SEND</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->
</x-app-layout>
@extends('giaodien.index')

@section('title', 'giới thiệu')

@section('main')
<div id="main-content" class="main-content">
    <div class="page-header">
        <figure class="post-thumbnail">
            <img alt="" src="../images/contact/contact.jpg">
        </figure>
        <h1 class="title">
            <span class="line-title">Contacts<i class="fa">&#xf111;</i></span>
        </h1>
    </div>
    <div class="page-content">
        <div class="container">

            <div class="row">

                <div class="col-md-3 col-md-push-9">
                    <div class="sidebar">
                        <div class="widget">
                            <div class="widget-inner">
                                <h3 class="title">Contacts Info</h3>
                                <div class="widget-text">
                                    <p>Cleatskins are revolutionary footwear accessory designed to allow athletes to move swiftly.</p>
                                    <p>
                                    Email: <a href="mailto:noreply@gmail.com">noreply@gmail.com</a><br>
                                    Phone: +800 - 568 - 8989
                                    </p>
                                    <p>96 Isabella ST, London, SE 1 8DD</p>
                                </div>
                            </div>
                        </div>

                        <div class="widget">
                            <div class="widget-inner">
                                <h3 class="title">Store Hours</h3>
                                <div class="widget-text">
                                    <div class="row">
                                        <div class="col-xs-8 col-sm-7">Monday - Thursday</div>
                                        <div class="col-xs-4 col-sm-5">8 am - 5 pm</div>

                                        <div class="col-xs-8 col-sm-7">Friday</div>
                                        <div class="col-xs-4 col-sm-5">8 am - 6 pm</div>

                                        <div class="col-xs-8 col-sm-7">Saturday</div>
                                        <div class="col-xs-4 col-sm-5">9 am - 5 pm</div>

                                        <div class="col-xs-8 col-sm-7">Sunday &amp; Holidays</div>
                                        <div class="col-xs-4 col-sm-5">Closed</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9  col-md-pull-3">
                    <div class="contact-content">
                        <h3 class="title contact-title">Contacts Form</h3>
                        <p class="contact-desc">The film is an initiative taken on
                            by professional snowboarder Marie-France Roy and directed by
                            Filmmaker Darcy Turenne in which all the riders are bringing to
                            life the importance of protecting and living in balance with
                            our environment.</p>
                        <form action="https://htmltemplate.akatheme.com/retation/php/contact.php" method="post" id="contactform"
                            class="contact-form">
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="contact-form-author">
                                        <input type="text" required="required" size="30" value=""
                                            name="author" id="author" placeholder="Name">
                                    </p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="contact-form-email">
                                        <input type="email" required="required" size="30" value=""
                                            name="email" id="email" placeholder="Email">
                                    </p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="contact-form-subject">
                                        <input type="text" required="required" size="30" value=""
                                            name="subject" id="subject" placeholder="Subject">
                                    </p>
                                </div>
                            </div>

                            <p class="contact-form-message">
                                <textarea required="required" rows="3" cols="45"
                                    name="message" id="message" placeholder="Your message"></textarea>
                            </p>
                            <p class="form-submit button">
                                <button class="hvr-rectangle-out" type="submit" id="submit"
                                    name="submit">Send Message</button>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div class="maps">
            <div ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29793.980453123586!2d105.81636411023665!3d21.022778419226142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1739414379525!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>

    </div>

</div>
@endsection

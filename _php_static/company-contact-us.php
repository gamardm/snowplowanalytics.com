    <?php include_once('header.php'); ?>
    <link href="assets/css/snowplow-company-contact-us/contact-us.css" rel="stylesheet" type="text/css">
    </head>

    <body class="contact-us">

        <?php include_once ('header.menu.php') ?>

        <!--
            MAIN AREA
        -->

        <section class="hero no-gutter-vertical">
            <div class="container text-center">
                <h5 class="text-uppercase">Get in Touch</h5>
                <h1>Let us know from you</h1>
            </div>
            <div class="container spacer-top-50">
                <form class="col-md-8 col-md-push-2 well">
                    <div class="clearfix no-gutter">
                        <div class="form-group col-md-6">
                            <label class="control-label" for="form-name">First Name</label>
                            <input type="text" class="form-control" id="form-name" aria-describedby="name" placeholder="Your first name">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="form-company">Company</label>
                            <input type="text" class="form-control" id="form-company" aria-describedby="company" placeholder="Your company">
                        </div>
                    </div>
                    <div class="clearfix no-gutter spacer-top-30">
                        <div class="form-group col-md-6">
                            <label class="control-label" for="form-email">Email</label>
                            <input type="email" class="form-control" id="form-email" aria-describedby="email" placeholder="Your email">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="form-phone">Phone</label>
                            <input type="tel" class="form-control" id="form-phone" aria-describedby="phone" placeholder="Your phone number">
                        </div>
                    </div>
                    <div class="clearfix no-gutter spacer-top-30">
                        <div class="form-group col-md-12">
                            <label class="control-label" for="form-subject">Subject</label>
                            <select class="form-control selectpicker" id="form-subject" title="Choose a subject">
                                <option value="1">Subject one</option>
                                <option value="2">Subject two</option>
                                <option value="3">Subject three</option>
                                <optgroup label="Group">
                                    <option value="3.1">Subject three - one</option>
                                    <option value="3.2">Subject three - two</option>
                                    <option value="3.3">Subject three - three</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix no-gutter spacer-top-30">
                        <div class="form-group col-md-12">
                            <label class="control-label" for="form-message">Leave your message</label>
                            <textarea class="form-control" id="form-message" rows="4" aria-describedby="message" placeholder="Your message" noresize-w></textarea>
                        </div>
                    </div>
                    <div class="clearfix spacer-top-30">
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary spacer-top-30">Request a Demo</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>


        <section class="bg-primary-lighter text-center">
            <h5 class="text-uppercase">Find us</h5>
            <h2 class="h1">Our Office</h2>
            <p>The Roma Building, 32-38 Scrutton Street<br/>EC2A 4RQ London, UK</p>
        </section>


        <section class="map" data-map-zoom="17,5" data-map-lat="51.5231402" data-map-lng="-0.0826067" data-map-marker-lat="51.5231402" data-map-marker-lng="-0.0826067" data-map-marker="assets/img/common/icon-marker.png"></section>




        <?php include_once('footer.php'); ?>
        <?php include_once('footer-scripts.php'); ?>

    </body>
</html>
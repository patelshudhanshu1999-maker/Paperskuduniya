<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Papers Ki Duniya...</title>
</head>

<style>
    .news-detail-header-section-contact {
        background-image: url(../images/banner/banner.png);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        padding-top: 150px;
        padding-bottom: 150px;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
        width: 100%;
    }
</style>

<?php include 'header.php'; ?>

<body>
    <main>

        <section class="news-detail-header-section-contact text-center">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h1 class="text-white">Contact Us</h1>
                    </div>

                </div>
            </div>
        </section>

        <section class="contact-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                        <div class="contact-info-wrap">
                            <h2>Get in touch</h2>

                            <div class="contact-image-wrap d-flex flex-wrap">
                                <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg"
                                    class="img-fluid avatar-image" alt="">

                                <div class="d-flex flex-column justify-content-center ms-3">
                                    <p class="mb-0">Clara Barton</p>
                                    <p class="mb-0"><strong>HR & Office Manager</strong></p>
                                </div>
                            </div>

                            <div class="contact-info">
                                <h5 class="mb-3">Contact Infomation</h5>

                                <p class="d-flex mb-2">
                                    <i class="bi-geo-alt me-2"></i>
                                    Akershusstranda 20, 0150 Oslo, Norway
                                </p>

                                <p class="d-flex mb-2">
                                    <i class="bi-telephone me-2"></i>
                                    <a href="tel: 120-240-9600">
                                        120-240-9600
                                    </a>
                                </p>

                                <p class="d-flex">
                                    <i class="bi-envelope me-2"></i>
                                    <a href="mailto:info@yourgmail.com">
                                        donate@charity.org
                                    </a>
                                </p>

                                <a href="#" class="custom-btn btn mt-3">Get Direction</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mx-auto">
                        <form class="custom-form contact-form" action="send-contact.php" method="post" role="form">
                            <h2>Contact form</h2>

                            <p class="mb-4">Or, you can just send an email:
                                <a href="#">info@charity.org</a>
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="first-name" id="first-name" class="form-control"
                                        placeholder="Jack" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="last-name" id="last-name" class="form-control"
                                        placeholder="Doe" required>
                                </div>
                            </div>

                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                                placeholder="Jackdoe@gmail.com" required>

                             <input type="tel" name="mobno" id="mobno" class="form-control"
                                placeholder="123-456-7890" required>

                            <input type="text" name="subject" id="subject" class="form-control"
                                placeholder="Subject" required>

                            <textarea name="message" rows="5" class="form-control" id="message"
                                placeholder="What can we help you?" required></textarea>

                            <button type="submit" class="form-control">Send Message</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <?php include 'footer.php'; ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Late Bloomers | Contact us</title>
    <meta description="This is the description">
    <?php include 'includes/head.php'; ?>
    <?php $currentPage = "Contact"; ?>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <div class="container">
            <article>
                <h2 class="section-hdr page-title">Contact Us</h2>
                <div class="content-area">
                    <section>
                        <iframe src="http://mapbuildr.com/frame/j7om0y" frameborder="0" height="400" width="100%"></iframe>
                    </section>
                    <section>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success hide"><strong><span class="glyphicon glyphicon-send"></span> Success! Message sent. (If form ok!)</strong></div>
                                <div class="alert alert-danger hide"><span class="glyphicon glyphicon-alert"></span><strong> Error! Please check the inputs. (If form error!)</strong></div>
                            </div>
                            <form role="form" action="" method="post">
                                <div class="col-md-7 content">
                                    <h3>Send your queries</h3>
                                    <span class="input input--minoru">
                                        <input class="input__field input__field--yoko" type="text" id="name" />
                                        <label class="input__label input__label--yoko" for="name">
                                            <span class="input__label-content input__label-content--yoko">Your Name *</span>
                                        </label>
                                    </span>
                                    <span class="input input--minoru">
                                        <input class="input__field input__field--yoko" type="email" id="email" />
                                        <label class="input__label input__label--yoko" for="email">
                                            <span class="input__label-content input__label-content--yoko">Your email *</span>
                                        </label>
                                    </span>
                                    <span class="input input--minoru">
                                        <textarea class="input__field input__field--yoko textarea-yoko-message"></textarea>
                                        <label class="input__label input__label--yoko textarea-yoko" for="input-18">
                                            <span class="input__label-content input__label-content--yoko">Your message *</span>
                                        </label>
                                    </span>
                                    <span class="input input--minoru">
                                        <input class="input__field input__field--yoko" type="email" id="InputReal" />
                                        <label class="input__label input__label--yoko" for="InputReal">
                                            <span class="input__label-content input__label-content--yoko">What is 4+3? (Simple Spam Checker) *</span>
                                        </label>
                                    </span>
                                    
                                    <div class="input">
                                        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info btn-block">
                                    </div>
                                </div>
                            </form>
                            <hr class="featurette-divider hidden-lg">
                            <div class="col-md-5">
                                <address>
                                    <h3>Office Location</h3>
                                    <section class="office-location"> 
                                        <div>
                                            <i class="fa fa-map-marker"></i>
                                            <p>A/5, Laxmin Narayan Colony, Kolkata 700047</p>
                                        </div>
                                        <div>
                                            <i class="fa fa-phone"></i>
                                            <p>+91 33 65112777, +91 9748785539, +91 9874552536</p>
                                        </div>
                                        <div>
                                            <i class="fa fa-envelope"></i>
                                            <p><a href="mailto:support@latebloomersrehab.com">support@latebloomersrehab.com</a></p>
                                        </div>
                                    </section>
                                </address>
                            </div>
                        </div>
                    </section>
            </article>
            </div>
    </main>
    <?php include 'includes/newsletter.php'; ?>
    
    <!-- Footer section starts -->
    <?php include 'includes/footer.php'; ?>
    
</body>

</html>

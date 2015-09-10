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
                            
                        <div class="col-md-7 content">       
                           
                        <?php
                            if (!array_key_exists('Submitted',$_POST)) {
                        ?>
                            <form role="form" action="contact.php" method="post" id="contact-form">
                                
                                    <h3>Send your queries</h3>
                                    <input type="hidden" name="Submitted" value="true">
                                    <span class="input input--minoru">
                                        <input class="input__field input__field--yoko" type="text" id="name" name="name"/>
                                        <label class="input__label input__label--yoko" for="name">
                                            <span class="input__label-content input__label-content--yoko">Your Name *</span>
                                        </label>
                                    </span>
                                    <span class="input input--minoru">
                                        <input class="input__field input__field--yoko" type="email" id="email" name="email" />
                                        <label class="input__label input__label--yoko" for="email">
                                            <span class="input__label-content input__label-content--yoko">Your email *</span>
                                        </label>
                                    </span>
                                    <span class="input input--minoru">
                                        <textarea class="input__field input__field--yoko textarea-yoko-message" name="message"></textarea>
                                        <label class="input__label input__label--yoko textarea-yoko" for="input-18">
                                            <span class="input__label-content input__label-content--yoko">Your message *</span>
                                        </label>
                                    </span>
                                    <span class="input input--minoru">
                                        <input class="input__field input__field--yoko" type="text" id="InputReal" />
                                        <label class="input__label input__label--yoko" for="InputReal">
                                            <span class="input__label-content input__label-content--yoko">What is 4+3? (Simple Spam Checker) *</span>
                                        </label>
                                    </span>
                                    
                                    <div class="input">
                                        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info btn-block">
                                    </div>
                                
                            </form>
                             <?php
                            } else {
                                require("PHPMailer/class.phpmailer.php");
                                $to = "contact@latebloomersrehab.org";
                                $from = $_POST['email'];
                                $fromName = $_POST['name'];
                                $subject = "Query from website";
                                $message = $_POST['message'];
                                 
                                if (array_key_exists('HTML',$_POST))
                                {
                                    $html = true;
                                }
                                else
                                {
                                    $html = false;
                                }
                                 
                                 
                                $mail = new PHPMailer();

                                $mail->IsSMTP();                                      // set mailer to use SMTP
                                $mail->Host = "smtp.net4india.com";  // specify main and backup server
                                $mail->SMTPAuth = true;     // turn on SMTP authentication
                                $mail->Username = "contact@latebloomersrehab.org";  // SMTP username
                                $mail->Password = "lord_1959"; // SMTP password
                                 
                                /*$mail->From = $from;
                                $mail->FromName = $fromName;
                                $mail->AddAddress($to);*/
                                
                                $mail->From = "contact@latebloomersrehab.org";
                                $mail->FromName = $fromName;
                                
                                $mail->AddAddress("contact@latebloomersrehab.org", "Late Bloomers Rehabilitation"); 
                                $mail->AddAddress("latebloomersrc@gmail.com", "Late Bloomers Rehabilitation"); 
                                $mail->WordWrap = 200; // set word wrap
                                $mail->IsHTML($html);
                                 
                                $mail->Subject  = $subject;
                                $mail->Body = "Mr/Mrs. ". $fromName . "\n email: " . $from . " has send you a query, which is as follows: \n\n" . $message;
                                 
                                if($mail->Send())
                                {
                                    echo '<div class="successMsg"><div class="da-icon da-success animateErrorIcon">
                                          <span class="da-line da-tip"></span>
                                          <span class="da-line da-long"></span>

                                          <div class="da-placeholder"></div>
                                          <div class="da-fix"></div>
                                        </div>Message has been sent successfully.</div>';
                                    ?>
                                        <script>swal("Done !", "Your message sent successfully!", "success")</script>
                                    <?php
                                }
                                else
                                {
                                    echo '<div class="errorMsg"><div class="da-icon da-error">
                                           <span class="da-x-mark animateXMark">
                                            <span class="da-line da-left"></span>
                                            <span class="da-line da-right"></span>
                                          </span>
                                          <div class="da-fix"></div>
                                        </div>Message could not be sent.</div>';
                                    ?>
                                        <script>swal("Sorry !", "Message Not Sent!", "error")</script>
                                    <?php
                                     echo "Message Not Sent<br>";
                                     echo "Mailer Error: " . $mail->ErrorInfo;
                                }
                            }
                        ?>
                        </div>
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
    <script type="text/javascript">
        $(function() {
            window.onload = function(){
                if(location.hash){
                    var target = $('#contact-form');
              
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top - 200
                }, 1000);
                return false;
              }
                }
              
            }
          });
    </script>
    
</body>

</html>

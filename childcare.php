<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Late Bloomers | Child Care</title>
 <meta description="This is the description">
    <?php include 'includes/head.php'; ?>
    <?php $currentPage = "ChildCare"; ?>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <div class="container">
            <article>
                <h2 class="section-hdr page-title">Child Care</h2>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="box-child">
                            <i style="background-image: url('<?php echo $baseUrl; ?>/images/ranjit.jpg');background-position: 44% 31%;"></i>
                            <h2>Ranajit</h2>
                            <p>
                                Father's Name: Gadadhar Santra <br/>
                                Village: Kamdahari <br/>
                                Age: 18 yrs <br/>
                                
                            </p>
                            
                            <div class="collapse" id="collapseExample">
                              <div class="well">
                               Currently persuing his study in std 12 with commerce stream in the BORAL HIGH SCHOOL in Garia region.He is mentally challenged.His father is a daily wage labour.He wishes to become a teacher in future. He also dreams of giving his father a sort of financially comfortable life. His favourite pass time is playing cricket, Sachin Tendulkar is his idol.
                              </div>
                            </div>
                            <a class="btn btn-primary collapsed" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                              See <span class="more">more</span><span class="less">less</span>
                            </a>
                        </div>
                    </div>
                </div>
                   
            </article>
            
        </div>
    </main>
        <?php include 'includes/newsletter.php'; ?>
    
    <?php include 'includes/footer.php'; ?>
</body>

</html>

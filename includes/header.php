<nav class="header-wrap navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
                    <h1 class="navbar-brand"><a href="<?php echo $baseUrl; ?>" class="logo">Late Bloomers <span>Rehabiliation Centre</span></a></h1>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li <?php if ($currentPage=="Home") echo "class=\"active\""; ?>><a href="<?php echo $baseUrl; ?>/index">Home</a></li>
                    <li <?php if ($currentPage=="Aboutus") echo "class=\"active\""; ?>><a href="<?php echo $baseUrl; ?>/aboutus">About Us</a></li>
                    <li <?php if ($currentPage=="Treatment") echo "class=\"active\""; ?>><a href="<?php echo $baseUrl; ?>/treatment">Treatment</a></li>
                    <li <?php if ($currentPage=="ChildCare") echo "class=\"active\""; ?>><a href="<?php echo $baseUrl; ?>/childcare">Child care</a></li>
                    <li <?php if ($currentPage=="Contact") echo "class=\"active\""; ?>><a href="<?php echo $baseUrl; ?>/contact">Contact Us</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
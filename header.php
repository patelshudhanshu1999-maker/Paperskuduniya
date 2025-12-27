<!-- CSS FILES -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-XXXXXXXXXXXXXXXX"
     crossorigin="anonymous"></script>
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/bootstrap-icons.css" rel="stylesheet">
<link href="/css/templatemo-kind-heart-charity.css" rel="stylesheet">
<link rel="shortcut icon" href="https://paperskiduniya.com/images/favicon.png" defer>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    integrity="sha512-...HASH..." crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Open Graph / SEO -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://paperskiduniya.com<?php echo $_SERVER['REQUEST_URI']; ?>">
<meta property="og:site_name" content="Papers Ki Duniya">
<meta property="og:image" content="https://paperskiduniya.com/images/logo.png">

<?php if (isset($page_title)) { ?>
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta name="twitter:title" content="<?php echo $page_title; ?>">
<?php } else { ?>
    <meta property="og:title" content="Papers Ki Duniya | Study Materials">
<?php } ?>

<?php if (isset($page_description)) { ?>
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta name="twitter:description" content="<?php echo $page_description; ?>">
<?php } ?>

<link rel="canonical" href="https://paperskiduniya.com<?php echo $_SERVER['REQUEST_URI']; ?>">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Papers Ki Duniya",
  "url": "https://paperskiduniya.com",
  "logo": "https://paperskiduniya.com/images/logo.png",
  "sameAs": [
    "https://www.youtube.com/@CoderskiDuniyaa",
    "#"
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Papers Ki Duniya",
  "url": "https://paperskiduniya.com",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://paperskiduniya.com/search?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<!-- CSS FILES -->
<style>
    .dropdown-item {
        padding-top: 4px;
        padding-bottom: 4px;
        padding-left: 10px;
        font-size: 12px;
        text-align: justify;
    }

    .dropdown-menu-light {
        top: 75% !important;
        left: 14px !important;
    }

    @media screen and (min-width: 992px) {
        .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
    }

    @media screen and (max-width: 400px) {
        .navbar-brand span {
            font-size: 15px;
        }

        .logo {
            width: 60px;
            height: auto;
        }

        .navbar-toggler .navbar-toggler-icon,
        .navbar-toggler .navbar-toggler-icon:before,
        .navbar-toggler .navbar-toggler-icon:after {
            width: 23px;
        }
    }
</style>
<header class="site-header">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 d-flex flex-wrap">
                <p class="d-flex mb-0">
                    <i class="bi-envelope me-2"></i>

                    <a href="mailto:info@paperskiduniya.com">
                        info@paperskiduniya.com
                    </a>
                </p>
            </div>

            <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                <ul class="social-icon">
                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-twitter"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-facebook"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-instagram"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="https://www.youtube.com/@CoderskiDuniyaa" rel="noopener noreferrer" target="_blank"
                            class="social-icon-link bi-youtube" aria-label="YouTube"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-whatsapp"></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg bg-light shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="https://paperskiduniya.com">
            <img src="/images/logo.png" class="logo img-fluid" alt="Paper ki Duniya">
            <span>
                Papers Ki Duniya
                <small>Every Paper Has Value</small>
            </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://paperskiduniya.com">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/about.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/news/">News</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/blog/">Blog</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link click-scroll dropdown-toggle">Exams</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="/all-exams">All Exams</a></li>
                        <li><a class="dropdown-item" href="/central-exams/">Central Exams</a></li>
                        <li><a class="dropdown-item" href="/state-exams/">State Exams</a></li>
                        <li><a class="dropdown-item" href="/school-exams/">School Exams</a></li>
                        <li><a class="dropdown-item" href="/computer-exams/">Computer Exams</a></li>
                        <!-- <li><a class="dropdown-item" href="">University Exams</a></li> -->
                        <!-- <li><a class="dropdown-item" href="">Board Exams</a></li> -->
                        <li><a class="dropdown-item" href="/upcoming-exams/">Upcoming Exam</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link click-scroll dropdown-toggle">Current Affairs</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="/quiz">Current Affairs</a></li>
                        <li><a class="dropdown-item" href="/quiz">One Liner Current Affairs</a></li>
                        <!-- <li><a class="dropdown-item" href="">Weekly Current Affairs</a></li> -->
                        <li><a class="dropdown-item" href="/quiz/current-affairs-quiz-for-august-2025.php">Monthly
                                Current Affairs</a></li>
                        <li><a class="dropdown-item" href="/quiz/current-affairs-quiz-for-september-2025.php">Current
                                Affairs - QnA</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="/contact-us.php">Contact Us</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
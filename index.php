<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Papers Ki Duniya is your one-stop platform for accessing academic papers, study materials, and educational resources to boost your learning.">
    <meta name="keywords"
        content="education, academic papers, study materials, online resources, exams, learning platform">
    <title>Papers Ki Duniya | Study Materials, Daily Quiz & Current Affairs</title>
    <link href="css/index.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <h1 class="visually-hidden">Papers Ki Duniya - Free Previous Year Papers, Quizzes & Current Affairs</h1>
    <style>
        .visually-hidden {
            position: absolute !important;
            height: 1px;
            width: 1px;
            overflow: hidden;
            clip: rect(1px 1px 1px 1px);
            clip: rect(1px, 1px, 1px, 1px);
            white-space: nowrap;
        }
        .input-group-text {
            width: 92%;
            cursor: pointer;
        }
    </style>

</head>
<?php
include 'header.php';
$examsData = json_decode(file_get_contents('data/exams.json'), true);
?>

<body id="section_1">
    <main>
        <section class="hero-section hero-section-full-height">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-12 p-0">
                        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/images/slide/banner-1.png" class="carousel-image img-fluid"
                                        alt="Papers Ki Duniya Login Banner">
                                    <!--<div class="carousel-caption d-flex flex-column justify-content-end">-->
                                    <!-- <h1>be Aware</h1>-->
                                    <!-- <p>Professional charity theme based on Bootstrap 5.2.2</p>-->
                                    <!--</div>-->
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/slide/banner.png" class="carousel-image img-fluid"
                                        alt="Papers Ki Duniya Exam Preparation Banner">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true">
                                </span>
                                <span class="visually-hidden">
                                    Previous
                                </span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true">
                                </span>
                                <span class="visually-hidden">
                                    Next
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper py-4">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="/previous-papers/ssc-cgl-previous-year-question-paper.php" class="d-block">
                                    <img src="images/icons/exam.png" class="featured-block-image img-fluid"
                                        alt="SSC MTS">
                                    <p class="featured-block-text">SSC CGL <strong>2025</strong></p>
                                </a>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="/previous-papers/ibps-clerk-question-paper.php" class="d-block">
                                    <img src="images/icons/sbi-clerk-exam.png" class="featured-block-image img-fluid"
                                        alt="IBPS Clerk">
                                    <p class="featured-block-text">IBPS Clerk <strong>(2025)</strong></p>
                                </a>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="/previous-papers/sbi-clerk.php" class="d-block">
                                    <img src="images/icons/sbi-clerk-exam.png" class="featured-block-image img-fluid"
                                        alt="SBI Clerk">
                                    <p class="featured-block-text">SBI Clerk <strong>(2025)</strong></p>
                                </a>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="/previous-papers/uppsc-gic-lecturer-previous-year-question-papers.php"
                                    class="d-block">
                                    <img src="images/icons/uttar_pradesh-logo.png"
                                        class="featured-block-image img-fluid" alt="UPPSC GIC">
                                    <p class="featured-block-text">UPPSC <strong>GIC</strong></p>
                                </a>
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="swiper-slide">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="/previous-papers/up-lt-grade-previous-year-question-papers.php"
                                    class="d-block">
                                    <img src="images/icons/uttar_pradesh-logo.png"
                                        class="featured-block-image img-fluid" alt="UP LT Grade">
                                    <p class="featured-block-text">UP LT <strong>Grade</strong></p>
                                </a>
                            </div>
                        </div>

                        <!-- Slide 6 -->
                        <div class="swiper-slide">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="/previous-papers/up-police-si-previous-year-question-papers.php"
                                    class="d-block">
                                    <img src="images/icons/uttar_pradesh-logo.png"
                                        class="featured-block-image img-fluid" alt="UP Police SI">
                                    <p class="featured-block-text">UP Police <strong>SI</strong></p>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="/previous-papers/up-tgt-pgt-previous-year-question-paper.php" class="d-block">
                                    <img src="images/icons/uttar_pradesh-logo.png"
                                        class="featured-block-image img-fluid" alt="UP Police SI">
                                    <p class="featured-block-text">UP TGT <strong>PGT</strong></p>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="/previous-papers/bssc-office-attendant-previous-year-question-paper.php"
                                    class="d-block">
                                    <img src="images/icons/bihar.png" class="featured-block-image img-fluid"
                                        alt="Bihar Exams">
                                    <p class="featured-block-text">BSSC <strong> Office Attendant</strong></p>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="/previous-papers/lic-aao-syllabus.php" class="d-block">
                                    <img src="images/icons/sbi-clerk-exam.png" class="featured-block-image img-fluid"
                                        alt="RRB NTPC">
                                    <p class="featured-block-text">LIC AAO / AE <strong>(2025)</strong></p>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="/previous-papers/ssc-cpo.php" class="d-block">
                                    <img src="images/icons/exam.png" class="featured-block-image img-fluid"
                                        alt="SSC MTS">
                                    <p class="featured-block-text">SSC CPO <strong>2025</strong></p>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="/previous-papers/bssc-stenographer-previous-year-papers.php" class="d-block">
                                    <img src="/images/icons/bihar.png" class="featured-block-image img-fluid"
                                        alt="BSSC Stenographer">
                                    <p class="featured-block-text">SBSSC <strong>Stenographer</strong></p>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="/previous-papers/dda-previous-year-question-papers.php" class="d-block">
                                    <img src="/images/icons/dda-logo.png" class="featured-block-image img-fluid"
                                        alt="Delhi Development Authority">
                                    <p class="featured-block-text">Delhi Development Authority <strong>DDA</strong></p>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="/previous-papers/rrb-ntpc-previous-year-question-paper.php" class="d-block">
                                    <img src="images/icons/exam.png" class="featured-block-image img-fluid"
                                        alt="RRB NTPC">
                                    <p class="featured-block-text">RRB NTPC <strong>2025</strong></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding section-bg" id="section_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2 class="heading-bar-left-right">
                            Exam Categories
                        </h2>
                        <p>
                            Prepare for 150+ exams including Central and State Government Exams
                        </p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="clickable-tab">
                            <button class="tablinks active" onclick="openCity(event, 'ue')" id="defaultOpen">
                                <i class="fa-solid fa-book-open-reader">
                                </i>
                                Upcoming Exams
                            </button>
                            <button class="tablinks" onclick="openCity(event, 'se')">
                                <i class="fa-solid fa-book-open-reader">
                                </i>
                                State Exams
                            </button>
                            <button class="tablinks" onclick="openCity(event, 'ce')">
                                <i class="fa-solid fa-book-open-reader">
                                </i>
                                Central Exams
                            </button>
                            <button class="tablinks" onclick="openCity(event, 'dl')">
                                <i class="fa-solid fa-book-open-reader">
                                </i>
                                Computer Exams
                            </button>
                            <button class="tablinks" onclick="openCity(event, 'sce')">
                                <i class="fa-solid fa-book-open-reader">
                                </i>
                                School Exams
                            </button>
                        </div>
                        <div id="ue" class="tabcontent" style="display: block;">
                            <div class="exam-categories-box">
                                <div class="exam-categories-details">
                                    <h4>
                                        Upcoming Exams
                                    </h4>
                                    <p>
                                        Latest updates on upcoming government exams 2025...
                                    </p>
                                    <ul>
                                        <?php if (!empty($examsData['upcoming'])): ?>
                                            <?php foreach ($examsData['upcoming'] as $exam): ?>
                                                <li>
                                                    <a href="<?php echo htmlspecialchars($exam['link']); ?>">
                                                        <img src="<?php echo htmlspecialchars($exam['image']); ?>"
                                                            class="img-fluid"
                                                            alt="<?php echo htmlspecialchars($exam['title']); ?>">
                                                        <div>
                                                            <h3><?php echo htmlspecialchars($exam['title']); ?></h3>
                                                            <?php if (!empty($exam['date'])): ?>
                                                                <h6><?php echo htmlspecialchars($exam['date']); ?></h6>
                                                            <?php endif; ?>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                    <button class="view-all-btn">
                                        <a href="/upcoming-exams/">
                                            View all upcoming exams
                                            <i class="fa fa-right-long">
                                            </i>
                                        </a>
                                    </button>
                                </div>
                                <img src="/images/homepage/upcoming-exams.png" class="img-fluid"
                                    alt="Upcoming Exams Icon">
                            </div>
                        </div>
                        <div id="se" class="tabcontent" style="display: none;">
                            <div class="exam-categories-box">
                                <img src="/images/homepage/state-exams.png" class="img-fluid" alt="Computer Exams">
                                <div class="exam-categories-details state-exam-tabs-ul" style="padding-left: 2em;">
                                    <h4>
                                        State Exams
                                    </h4>
                                    <p>
                                        All the latest updates on various upcoming state government exams 2025.
                                        Multilingual practice tests for state exams are provided in many languages
                                        such as hindi, english, bengali, marathi, gujarati and many more to be
                                        added soon.
                                    </p>
                                    <ul>
                                        <?php if (!empty($examsData['state'])): ?>
                                            <?php foreach ($examsData['state'] as $exam): ?>
                                                <li class="state">
                                                    <a href="<?php echo htmlspecialchars($exam['link']); ?>">
                                                        <img src="<?php echo htmlspecialchars($exam['image']); ?>"
                                                            alt="<?php echo htmlspecialchars($exam['title']); ?>">
                                                        <div>
                                                            <h3><?php echo htmlspecialchars($exam['title']); ?></h3>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                    <button class="view-all-btn">
                                        <a href="/state-exams/">
                                            View all state exams
                                            <i class="fa fa-right-long">
                                            </i>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="ce" class="tabcontent" style="display: none;">
                            <div class="exam-categories-box">
                                <div class="exam-categories-details">
                                    <h4>
                                        Central Exams
                                    </h4>
                                    <p>
                                        Latest updates on upcoming government exams 2025...
                                    </p>
                                    <ul>
                                        <?php if (!empty($examsData['central'])): ?>
                                            <?php foreach ($examsData['central'] as $exam): ?>
                                                <li>
                                                    <a href="<?php echo htmlspecialchars($exam['link']); ?>">
                                                        <img src="<?php echo htmlspecialchars($exam['image']); ?>"
                                                            class="img-fluid"
                                                            alt="<?php echo htmlspecialchars($exam['title']); ?>">
                                                        <div>
                                                            <h3><?php echo htmlspecialchars($exam['title']); ?></h3>
                                                            <?php if (!empty($exam['date'])): ?>
                                                                <h6><?php echo htmlspecialchars($exam['date']); ?></h6>
                                                            <?php endif; ?>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                    <button class="view-all-btn">
                                        <a href="/central-exams/">
                                            View all central exams
                                            <i class="fa fa-right-long">
                                            </i>
                                        </a>
                                    </button>
                                </div>
                                <img src="/images/homepage/upcoming-exams.png" class="img-fluid" alt="Computer Exams">
                            </div>
                        </div>
                        <div id="dl" class="tabcontent" style="display: none;">
                            <div class="exam-categories-box">
                                <div class="exam-categories-details">
                                    <h4>
                                        Computer Exams
                                    </h4>
                                    <p>
                                        Latest updates on upcoming government exams 2025...
                                    </p>
                                    <ul>
                                        <?php if (!empty($examsData['computer'])): ?>
                                            <?php foreach ($examsData['computer'] as $exam): ?>
                                                <li>
                                                    <a href="<?php echo htmlspecialchars($exam['link']); ?>">
                                                        <img src="<?php echo htmlspecialchars($exam['image']); ?>"
                                                            class="img-fluid"
                                                            alt="<?php echo htmlspecialchars($exam['title']); ?>">
                                                        <div>
                                                            <h3><?php echo htmlspecialchars($exam['title']); ?></h3>
                                                            <?php if (!empty($exam['date'])): ?>
                                                                <h6><?php echo htmlspecialchars($exam['date']); ?></h6>
                                                            <?php endif; ?>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                    <button class="view-all-btn">
                                        <a href="/computer-exams/">
                                            View all computer exams
                                            <i class="fa fa-right-long"></i>
                                        </a>
                                    </button>
                                </div>
                                <img src="/images/homepage/state-exams.png" class="img-fluid" alt="School Exams">
                            </div>
                        </div>
                        <div id="sce" class="tabcontent" style="display: none;">
                            <div class="exam-categories-box">
                                <img src="/images/homepage/state-exams.png" alt="Computer Exams">
                                <div class="exam-categories-details state-exam-tabs-ul" style="padding-left: 2em;">
                                    <h4>
                                        School Exams
                                    </h4>
                                    <p>
                                        All the latest updates on various upcoming state government exams 2025.
                                        Multilingual practice tests for state exams are provided in many languages
                                        such as hindi, english, bengali, marathi, gujarati and many more to be
                                        added soon.
                                    </p>
                                    <ul>
                                        <?php if (!empty($examsData['school'])): ?>
                                            <?php foreach ($examsData['school'] as $exam): ?>
                                                <li>
                                                    <a href="<?php echo htmlspecialchars($exam['link']); ?>">
                                                        <img src="<?php echo htmlspecialchars($exam['image']); ?>"
                                                            class="img-fluid"
                                                            alt="<?php echo htmlspecialchars($exam['title']); ?>">
                                                        <div>
                                                            <h3><?php echo htmlspecialchars($exam['title']); ?></h3>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                    <button class="view-all-btn">
                                        <a href="/school-exams/">
                                            View all school exams
                                            <i class="fa fa-right-long"></i>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'contributorform.php'; ?>
        <section class="news-section section-padding" id="section_5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 mb-5">
                        <h2>
                            Latest News
                        </h2>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="news-block">
                            <div class="news-block-top">
                                <a
                                    href="/news/donald-trump-tariffs-updates-trump-imposes-additional-25-tariff-on-india-total-goes-up-to-50.php">
                                    <img src="images/news/modi-trump.jpg" class="news-image img-fluid"
                                        alt="Rajasthan school Tragedy">
                                </a>
                                <div class="news-category-block">
                                    <a href="#" class="category-block-link">
                                        Trump India Tariffs 2025 Live Updates: Trump Warns Of Secondary Sanctions, India
                                        Refuses To Budge
                                    </a>
                                </div>
                            </div>
                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            Aug 7, 2025
                                        </p>
                                    </div>
                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            By Admin
                                        </p>
                                    </div>
                                    <div class="news-block-comment">
                                        <p>
                                            <i class="bi-chat-left custom-icon me-1"></i>
                                            32 Comments
                                        </p>
                                    </div>
                                </div>
                                <div class="news-block-title mb-2">
                                    <h4>
                                        <a href="/news/donald-trump-tariffs-updates-trump-imposes-additional-25-tariff-on-india-total-goes-up-to-50.php"
                                            class="news-block-title-link">
                                            Trump India Tariffs 2025 Live Updates: Trump Warns Of Secondary Sanctions,
                                            India Refuses To Budge
                                        </a>
                                    </h4>
                                </div>
                                <div class="news-block-body">
                                    <p>
                                        US President Donald Trump has imposed steeper tariffs on Indian goods over New
                                        Delhi's continued purchase of Russian oil, opening a new front in his trade wars
                                        hours before another wave of duties takes effect.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-block">
                            <div class="news-block-top">
                                <a
                                    href="/news/sscvendorfailure-protests-erupt-over-exam-cancellations-glitches-in-ssc-phase-13-recruitment-test.php">
                                    <img src="images/news/staff-selection-commission.jpeg" class="news-image img-fluid"
                                        alt="Rajasthan school Tragedy">
                                </a>
                                <div class="news-category-block">
                                    <a href="#" class="category-block-link">
                                        The ongoing Staff Selection Commission (SSC) Selection Post Phase 13 recruitment
                                        exam has triggered widespread protests across the country, with aspirants
                                        alleging mismanagement, repeated cancellations, and technical failures.
                                    </a>
                                </div>
                            </div>
                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            July 31, 2025
                                        </p>
                                    </div>
                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            By Admin
                                        </p>
                                    </div>
                                    <div class="news-block-comment">
                                        <p>
                                            <i class="bi-chat-left custom-icon me-1"></i>
                                            32 Comments
                                        </p>
                                    </div>
                                </div>
                                <div class="news-block-title mb-2">
                                    <h4>
                                        <a href="/news/sscvendorfailure-protests-erupt-over-exam-cancellations-glitches-in-ssc-phase-13-recruitment-test.php"
                                            class="news-block-title-link">
                                            SSCVendorFailure: Protests Erupt Over Exam Cancellations, Glitches in SSC
                                            Phase 13 Recruitment Test
                                        </a>
                                    </h4>
                                </div>
                                <div class="news-block-body">
                                    <p>
                                        A government school building collapsed in Jhalawar, Rajasthan, on Friday
                                        morning, leaving at least four children dead and many others trapped. This
                                        tragic incident occurred around 8:30 am at Piplodi Government School in Manohar
                                        Thana. Approximately 40 children, teachers, and staff were present when the roof
                                        collapsed.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-block mt-3">
                            <div class="news-block-top">
                                <a
                                    href="/news/tcs-layoffs-why-is-tcs-firing-12-000-employees-ceo-reveals-the-real-reason.php">
                                    <img src="https://www.hindustantimes.com/ht-img/img/2025/07/28/550x309/TCS_layoff_1753686741150_1753686764424.png"
                                        rel="nofollow" class="news-image img-fluid" alt="TCS Workforce">
                                </a>
                                <div class="news-category-block">
                                    <a href="#" class="category-block-link">
                                        TCS has announced that it will lay off about 12,000 employees of its global
                                        workforce this year.(AI-generated image)
                                    </a>
                                </div>
                            </div>
                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            July 28, 2025
                                        </p>
                                    </div>
                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            By Admin
                                        </p>
                                    </div>
                                    <div class="news-block-comment">
                                        <p>
                                            <i class="bi-chat-left custom-icon me-1"></i>
                                            35 Comments
                                        </p>
                                    </div>
                                </div>
                                <div class="news-block-title mb-2">
                                    <h4>
                                        <a href="/news/tcs-layoffs-why-is-tcs-firing-12-000-employees-ceo-reveals-the-real-reason.php"
                                            class="news-block-title-link">
                                            Why is TCS firing 12,000 employees? CEO reveals the real reason
                                        </a>
                                    </h4>
                                </div>
                                <div class="news-block-body">
                                    <p>
                                        Tata Consultancy Services (TCS), India’s largest IT services firm, is set to
                                        fire nearly 12,000 employees - around 2% of its global workforce - in what is
                                        being described as one of the most significant workforce restructurings in the
                                        company's history. Contrary to industry speculation, the layoffs are not driven
                                        by artificial intelligence (AI)-induced automation or productivity gains, the
                                        tech giant said.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 mx-auto">
                        <form class="custom-form search-form" action="#" method="get" role="form">
                            <input name="search" type="search" class="form-control" id="search" placeholder="Search"
                                aria-label="Search">
                            <button type="submit" class="form-control">
                                <i class="bi-search">
                                </i>
                            </button>
                        </form>
                        <h5 class="mt-5 mb-3">
                            Recent Blogs
                        </h5>
                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="/blog/reactnative/react-native-project-structure.php">
                                    <img src="/images/blog/react-native-project-structure.png"
                                        class="news-image img-fluid" alt="React Native Project Structure">
                                </a>
                            </div>
                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6>
                                        <a href="/blog/reactnative/react-native-project-structure.php"
                                            class="news-block-title-link">
                                            React Native Project Structure
                                        </a>
                                    </h6>
                                </div>
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        August 31, 2025
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="/blog/reactjs/what-is-webpack-and-how-it-use.php">
                                    <img src="/images/blog/webpack.png" class="news-image img-fluid"
                                        alt="What Is Webpack">
                                </a>
                            </div>
                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6>
                                        <a href="/blog/reactjs/what-is-webpack-and-how-it-use.php"
                                            class="news-block-title-link">
                                            What Is Webpack?
                                        </a>
                                    </h6>
                                </div>
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        August 25, 2025
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="/blog/reactnative/react-native-enduring-relevance-in-modern-app-economy.php">
                                    <img src="/images/blog/react-native-in-2025.png" class="news-image img-fluid"
                                        alt="React Native in 2025">
                                </a>
                            </div>
                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6>
                                        <a href="/blog/reactnative/react-native-enduring-relevance-in-modern-app-economy.php"
                                            class="news-block-title-link">
                                            React Native in 2025
                                        </a>
                                    </h6>
                                </div>
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        July 14, 2025
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="/blog/reactnative/react-natvie-project-setup.php">
                                    <img src="/images/blog/Command.png" class="news-image img-fluid"
                                        alt="React Native Installation Guide">
                                </a>
                            </div>
                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6>
                                        <a href="/blog/reactnative/react-natvie-project-setup.php"
                                            class="news-block-title-link">
                                            Installation Guide
                                        </a>
                                    </h6>
                                </div>
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        July 27, 2025
                                    </p>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-5 mb-3">
                            Recent News
                        </h5>

                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a
                                    href="/news/donald-trump-tariffs-updates-trump-imposes-additional-25-tariff-on-india-total-goes-up-to-50.php">
                                    <img src="/images/news/modi-trump.jpg" alt="" class="news-image img-fluid"
                                        alt="Modi & Trump">
                                </a>
                            </div>
                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6>
                                        <a href="/news/donald-trump-tariffs-updates-trump-imposes-additional-25-tariff-on-india-total-goes-up-to-50.php"
                                            class="news-block-title-link">
                                            Trump India Tariffs
                                        </a>
                                    </h6>
                                </div>
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        Aug 7, 2025
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a
                                    href="/news/sscvendorfailure-protests-erupt-over-exam-cancellations-glitches-in-ssc-phase-13-recruitment-test.php">
                                    <img src="/images/news/staff-selection-commission.jpeg" class="news-image img-fluid"
                                        alt="SSC Vendor Failure">
                                </a>
                            </div>
                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6>
                                        <a href="/news/sscvendorfailure-protests-erupt-over-exam-cancellations-glitches-in-ssc-phase-13-recruitment-test.php"
                                            class="news-block-title-link">
                                            SSCVendorFailure
                                        </a>
                                    </h6>
                                </div>
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        July 31, 2025
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tags-block">
                            <h5 class="mb-3">
                                Tags
                            </h5>
                            <a href="#" class="tags-block-link">
                                National
                            </a>
                            <a href="#" class="tags-block-link">
                                Sports
                            </a>
                            <a href="#" class="tags-block-link">
                                Food
                            </a>
                            <a href="#" class="tags-block-link">
                                Children
                            </a>
                            <a href="#" class="tags-block-link">
                                Education
                            </a>
                            <a href="#" class="tags-block-link">
                                Poverty
                            </a>
                            <a href="#" class="tags-block-link">
                                Clean Water
                            </a>
                        </div>
                        <form class="custom-form subscribe-form" action="#" method="get" role="form">
                            <h5 class="mb-4">
                                Newsletter Form
                            </h5>
                            <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*"
                                class="form-control" placeholder="Email Address" required>
                            <div class="col-lg-12 col-12">
                                <button type="submit" class="form-control">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                        <div class="contact-info-wrap">
                            <h2>
                                Get in touch
                            </h2>
                            <div class="contact-image-wrap d-flex flex-wrap">
                                <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg"
                                    class="img-fluid avatar-image" alt="User Review">
                                <div class="d-flex flex-column justify-content-center ms-3">
                                    <p class="mb-0">
                                        Neha Singh
                                    </p>
                                    <p class="mb-0">
                                        <strong>
                                            HR & Office Manager
                                        </strong>
                                    </p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <h5 class="mb-3">
                                    Contact Infomation
                                </h5>
                                <p class="d-flex mb-2">
                                    <i class="bi-geo-alt me-2">
                                    </i>
                                    Sector 23 , Noida
                                </p>
                                <p class="d-flex mb-2">
                                    <i class="bi-telephone me-2">
                                    </i>
                                    <a href="tel: 120-240-9600">
                                        120-240-9600
                                    </a>
                                </p>
                                <p class="d-flex">
                                    <i class="bi-envelope me-2">
                                    </i>
                                    <a href="mailto:info@yourgmail.com">
                                        info@paperskiduniya.com
                                    </a>
                                </p>
                                <a href="#" class="custom-btn btn mt-3">
                                    Get Direction
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12 mx-auto">
                        <form class="custom-form contact-form" action="#" method="post" role="form">
                            <h2>
                                Contact form
                            </h2>
                            <p class="mb-4">
                                Or, you can just send an email:
                                <a href="#">
                                    info@paperskiduniya.com
                                </a>
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="first-name" id="first-name" class="form-control"
                                        placeholder="First Name" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="last-name" id="last-name" class="form-control"
                                        placeholder="Last Name" required>
                                </div>
                            </div>
                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                                placeholder="info@paperskiduniya.com" required>
                            <textarea name="message" rows="5" class="form-control" id="message"
                                placeholder="What can we help you?">
                  </textarea>
                            <button type="submit" class="form-control">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>

<script>
    function openCity(evt, cityName) {
        const tabcontent = document.getElementsByClassName("tabcontent");
        for (let i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        const tablinks = document.getElementsByClassName("tablinks");
        for (let i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove("active");
        }

        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.classList.add("active");
    }

    document.addEventListener("DOMContentLoaded", () => {
        // Open default tab
        document.getElementById("defaultOpen").click();

        // Initialize EmailJS
        emailjs.init("2BNKbRzXgHZoExmm4"); // Your Public Key


    });
</script>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 6,
            },
        },
    });
</script>

</html>
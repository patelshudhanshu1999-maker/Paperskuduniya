<?php
$page_title = "About Us | Papers Ki Duniya";
$page_description = "About Papers Ki Duniya - Your one-stop platform for academic resources, previous year papers, and exam updates.";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="author" content="">
    <title><?php echo $page_title; ?></title>

    <style>
        .header-section-about {
            background-image: url('images/slide/banner.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            padding-top: 150px;
            padding-bottom: 150px;
        }

        .section-overlay {
            background: rgba(0, 0, 0, 0.4);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .about-content-section {
            padding: 80px 0;
        }

        .feature-card {
            padding: 30px;
            border: 1px solid #eee;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: #5bc1ac;
            /* Assuming theme color based on contact-us form button or similar */
            margin-bottom: 20px;
        }
    </style>
</head>

<?php include 'header.php'; ?>

<body>
    <main>
        <!-- Header Banner -->
        <section class="header-section-about text-center">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 position-relative">
                        <h1 class="text-white display-3 fw-bold">About Us</h1>
                        <p class="text-white lead">Empowering Education, Simplifying Success</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Who We Are Section -->
        <section class="about-content-section section-padding" id="who-we-are">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                        <img src="images/group-people-volunteering-foodbank-poor-people.jpg"
                            class="img-fluid rounded-3 shadow-sm" alt="Students studying">
                    </div>
                    <div class="col-lg-6 col-12">
                        <h6 class="text-secondary text-uppercase mb-2">Our Story</h6>
                        <h2 class="mb-4">Who We Are</h2>
                        <p class="lead text-muted">Papers Ki Duniya is India's premier online platform dedicated to
                            helping students and aspirants achieve their academic and career goals.</p>
                        <p>We understand the struggle of finding reliable study materials, previous year papers, and
                            accurate exam updates. That's why we created a centralized hub where you can access
                            everything you need to prepare for Central and State government exams, school boards, and
                            competitive tests.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission & Vision -->
        <section class="section-padding bg-light" id="mission-vision">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-12 text-center mb-5">
                        <h2>Our Mission & Vision</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12 mb-4">
                        <div class="feature-card text-center p-5">
                            <div class="feature-icon"><i class="bi bi-bullseye"></i></div>
                            <h3>Our Mission</h3>
                            <p>To democratize access to high-quality educational resources by providing free and easy
                                access to previous year question papers, quizzes, and real-time exam notifications to
                                every student in every corner of the country.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-4">
                        <div class="feature-card text-center p-5">
                            <div class="feature-icon"><i class="bi bi-eye"></i></div>
                            <h3>Our Vision</h3>
                            <p>To become the most trusted and comprehensive digital associate for students, fostering a
                                community of learners who support and inspire each other towards excellence.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- What We Offer -->
        <section class="about-content-section section-padding" id="what-we-offer">
            <div class="container">
                <div class="row text-center mb-5">
                    <div class="col-12">
                        <h2>What We Offer</h2>
                        <p class="text-muted">A complete ecosystem for your exam preparation</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="feature-card text-center">
                            <div class="feature-icon"><i class="bi bi-file-earmark-text"></i></div>
                            <h5>Previous Year Papers</h5>
                            <p class="small">Access a vast repository of solved and unsolved papers for SSC, Banking,
                                Railways, and more.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="feature-card text-center">
                            <div class="feature-icon"><i class="bi bi-laptop"></i></div>
                            <h5>Daily Quizzes</h5>
                            <p class="small">Test your knowledge with our subject-wise daily quizzes designed to boost
                                your speed and accuracy.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="feature-card text-center">
                            <div class="feature-icon"><i class="bi bi-newspaper"></i></div>
                            <h5>Current Affairs</h5>
                            <p class="small">Stay updated with the latest national and international news, summarized
                                for exam relevance.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="feature-card text-center">
                            <div class="feature-icon"><i class="bi bi-bell"></i></div>
                            <h5>Exam Updates</h5>
                            <p class="small">Get instant notifications about admit cards, results, and syllabus changes
                                for major exams.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="section-padding section-bg text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-12">
                        <h2>Join Our Community</h2>
                        <p class="mb-4">Have resources to share? Become a contributor and help thousands of students.
                        </p>
                        <a href="contact-us.php" class="custom-btn btn">Become a Contributor</a>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php include 'footer.php'; ?>
</body>

</html>
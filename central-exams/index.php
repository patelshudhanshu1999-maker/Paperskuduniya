<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Central Government Exams 2025 - Papers Ki Duniya">
    <meta name="author" content="">
    <title>Central Exams | Papers Ki Duniya</title>

    <style>
        .header-section-exams {
            background-image: url('../images/slide/banner.png');
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

        .exam-card {
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            align-items: center;
        }

        .exam-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .exam-icon {
            width: 60px;
            height: 60px;
            object-fit: contain;
            margin-right: 20px;
        }

        .exam-details h3 {
            font-size: 1.25rem;
            margin-bottom: 5px;
            font-weight: 700;
            color: #2c3e50;
        }

        .exam-details h6 {
            font-size: 0.9rem;
            color: #7f8c8d;
            margin-bottom: 0;
        }

        .exam-link {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>

<?php include '../header.php'; ?>

<body>
    <main>
        <!-- Header Banner -->
        <section class="header-section-exams text-center">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 position-relative">
                        <h1 class="text-white display-3 fw-bold">Central Exams</h1>
                        <p class="text-white lead">Find previous papers and details for various Central Government Exams
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Exam List Section -->
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 mb-4">
                        <h2>Central Exams 2025</h2>
                        <p class="text-muted">Click on an exam to view details.</p>
                    </div>
                </div>

                <div class="row">
                    <?php
                    $jsonFile = '../data/exams.json';
                    $examsData = [];
                    if (file_exists($jsonFile)) {
                        $jsonData = file_get_contents($jsonFile);
                        $examsData = json_decode($jsonData, true);
                    }

                    if (!empty($examsData['central'])) {
                        foreach ($examsData['central'] as $exam) {
                            ?>
                            <!-- Exam Item -->
                            <div class="col-lg-6 col-12">
                                <a href="<?php echo htmlspecialchars($exam['link']); ?>" class="exam-link">
                                    <div class="exam-card">
                                        <img src="<?php echo htmlspecialchars($exam['image']); ?>" class="exam-icon"
                                            alt="<?php echo htmlspecialchars($exam['title']); ?>">
                                        <div class="exam-details">
                                            <h3><?php echo htmlspecialchars($exam['title']); ?></h3>
                                            <?php if (!empty($exam['date'])): ?>
                                                <h6><i
                                                        class="bi bi-calendar-event me-2"></i><?php echo htmlspecialchars($exam['date']); ?>
                                                </h6>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                    } else {
                        echo '<div class="col-12"><p class="text-center text-muted">No central exams found.</p></div>';
                    }
                    ?>
                </div>
            </div>
        </section>

    </main>
    <?php include '../footer.php'; ?>
</body>

</html>
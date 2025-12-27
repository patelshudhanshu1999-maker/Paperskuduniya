<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>April Quiz Challenge - Test Your Knowledge with Latest Questions</title>
    <meta name="description" content="Take the April Quiz Challenge! Answer multiple choice questions on current topics and boost your knowledge with our fun and interactive quiz." />
    <link rel="stylesheet" href="./css/style.css" />
</head>

<style>
    main {
        width: 100%;
        max-width: 90%;
        padding: 30px;
        border-radius: 12px;
        margin: auto;
    }

    .wp_quiz_question_options {
        margin-bottom: 5px;
    }

    .sques_quiz {
        margin-top: 10px;
    }

    .sques_quiz>p {
        margin-bottom: 5px;
    }
    
    .wp_basic_quiz_showans_btn {
        cursor: pointer;
    }
    /* Pagination styles */
    #pagination {
      margin-top: 20px;
      text-align: center;
    }

    #pagination button {
      margin: 0 5px;
      padding: 5px 10px;
      cursor: pointer;
      border: 1px solid #ccc;
      background: #fff;
      color: #000;
      border-radius: 5px;
    }

    #pagination button.active {
      background: #007bff;
      color: #fff;
    }
</style>

<?php include '../header.php'; ?>

<body>
 
     <div class="container my-4">
      <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
          <!-- Quiz container -->
          <div id="quiz-container">
            <div class="sques_quiz">
              <div class="wp_quiz_question testclass">
                <span class="quesno">1. </span>Which institution has launched
                the AI-powered climate advisory project for small farmers in
                Hyderabad?
              </div>

              <div type="B" class="wp_quiz_question_options">
                [A] International Crops Research Institute for the Semi-Arid
                Tropics (ICRISAT)<br />[B] Food Corporation of India (FCI)<br />[C]
                Central Research Institute for Dryland Agriculture (CRIDA)<br />[D]
                National Institute of Agricultural Marketing (NIAM)
              </div>

              <p>
                <a
                  class="wp_basic_quiz_showans_btn"
                  data-target=".ques_answer_297239"
                  >Show Answer</a
                >
              </p>

              <div
                class="wp_basic_quiz_answer ques_answer_297239"
                style="display: none"
              >
                <div class="ques_answer">
                  <b>Correct Answer:</b> A [International Crops Research
                  Institute for the Semi-Arid Tropics (ICRISAT)]
                </div>
                <div class="answer_hint">
                  <b>Notes:</b>
                  Recently, International Crops Research Institute for the
                  Semi-Arid Tropics (ICRISAT) launched AI-powered climate
                  advisory services for farmers on July 30, 2025, in Hyderabad.
                  The initiative is named “AI-powered Context-Specific Agromet
                  Advisory Services for Climate-Resilient Agriculture at Scale.”
                  It is a joint project by International Crops Research
                  Institute for the Semi-Arid Tropics (ICRISAT) and Indian
                  Council of Agricultural Research (ICAR). It uses Artificial
                  Intelligence (AI) and Machine Learning (ML) to deliver
                  real-time, personalised climate and weather advisories.
                </div>
              </div>
            </div>

            <div class="sques_quiz">
              <div class="wp_quiz_question testclass">
                <span class="quesno">2. </span>What is the base year for the
                Reserve Bank of India - Digital Payments Index (RBI-DPI)?
              </div>

              <div type="A" class="wp_quiz_question_options">
                [A] 2016<br />[B] 2017<br />[C] 2018<br />[D] 2019
              </div>

              <p>
                <a
                  class="wp_basic_quiz_showans_btn"
                  data-target=".ques_answer_297238"
                  >Show Answer</a
                >
              </p>

              <div
                class="wp_basic_quiz_answer ques_answer_297238"
                style="display: none"
              >
                <div class="ques_answer"><b>Correct Answer:</b> C [2018]</div>
                <div class="answer_hint">
                  <b>Notes:</b>
                  Recently, the Reserve Bank of India (RBI) announced that its
                  Digital Payments Index (RBI-DPI) rose to 493.22 in March 2025.
                  This is a sharp increase from 465.33 recorded in September
                  2024, showing rapid growth in digital transactions. The
                  Digital Payments Index is a tool created by RBI to measure the
                  extent of digitisation of payments across India. It was first
                  launched in January 2021 to track and encourage the adoption
                  of digital payment systems. It is the first-of-its-kind index
                  to map the nationwide spread of digital transactions. The base
                  year for the index is March 2018, with the score for that year
                  set at 100.
                </div>
              </div>
            </div>

            <div class="sques_quiz">
              <div class="wp_quiz_question testclass">
                <span class="quesno">3. </span>Which country has adopted Assam’s
                ‘Hargila Army’ Model for biodiversity conservation?
              </div>

              <div type="A" class="wp_quiz_question_options">
                [A] Nepal<br />[B] Malaysia<br />[C] Indonesia<br />[D] Cambodia
              </div>

              <p>
                <a
                  class="wp_basic_quiz_showans_btn"
                  data-target=".ques_answer_1"
                  >Show Answer</a
                >
              </p>

              <div
                class="wp_basic_quiz_answer ques_answer_1"
                style="display: none"
              >
                <div class="ques_answer">
                  <b>Correct Answer:</b> D [Cambodia]
                </div>
                <div class="answer_hint">
                  <b>Notes:</b>
                  Recently, Assam’s successful ‘Hargila Army’ model was
                  introduced in Cambodia’s Tonle Sap Biosphere Reserve for stork
                  conservation. The model is led by Purnima Devi Barman, United
                  Nations Environment Programme (UNEP) Champion of the Earth and
                  biologist at Aaranyak. A training was held on July 28 for 20
                  Cambodian women conservationists and park rangers at Prek Toal
                  Bird Sanctuary. The training focused on protecting the
                  endangered greater adjutant stork using community-led,
                  women-centric strategies.
                </div>
              </div>
            </div>
          </div>

          <!-- Pagination -->
          <div id="pagination"></div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
          <?php include './column-right.php'; ?>
        </div>
      </div>
    </div>

    <script src="./js/script.js"></script>
    <?php include '../footer.php'; ?>
</body>

</html>
<section class="volunteer-section section-padding" id="section_4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <form class="custom-form volunteer-form mb-5 mb-lg-0" action="send-email.php" method="POST"
                    enctype="multipart/form-data" role="form" id="volunteer-form">
                    <h3 class="mb-4">
                        Become a contributor today
                    </h3>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <input type="text" name="volunteer-name" id="volunteer-name" class="form-control"
                                placeholder="Full Name" required>
                        </div>
                        <div class="col-lg-6 col-12">
                            <input type="email" name="volunteer-email" id="volunteer-email" pattern="[^ @]*@[^ @]*"
                                class="form-control" placeholder="email@gmail.com" required>
                        </div>
                        <div class="col-lg-6 col-12">
                            <input type="text" name="volunteer-subject" id="volunteer-subject" class="form-control"
                                placeholder="Subject" required>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="input-group input-group-file">
                                <input type="file" name="cv" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">
                                    Upload your CV
                                </label>
                                <i class="bi-cloud-arrow-up ms-auto">
                                </i>
                            </div>
                        </div>
                    </div>
                    <textarea name="volunteer-message" rows="3" class="form-control" id="volunteer-message"
                        placeholder="Comment (Optional)"></textarea>
                    <button type="submit" class="form-control">
                        Submit
                    </button>
                    <div id="form-message" class="mt-3"></div>
                </form>
            </div>
            <div class="col-lg-6 col-12">
                <img src="images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg"
                    class="volunteer-image img-fluid" alt="About Contributor">
                <div class="custom-block-body text-center">
                    <h4 class="text-white mt-lg-3 mb-lg-3">
                        About Contributor
                    </h4>
                    <p class="text-white">
                        Become A someone who actively adds value to a project, team, or community
                        through skills, ideas, or resources.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById('volunteer-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        var form = this;
        var formData = new FormData(form);
        var messageDiv = document.getElementById('form-message');
        var submitBtn = form.querySelector('button[type="submit"]');
        
        // Disable button and show loading state
        submitBtn.disabled = true;
        submitBtn.innerText = 'Sending...';
        messageDiv.innerHTML = '';
        messageDiv.className = 'mt-3';

        fetch('send-email.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                messageDiv.innerHTML = '<div class="alert alert-success">' + data.message + '</div>';
                form.reset();
            } else {
                messageDiv.innerHTML = '<div class="alert alert-danger">' + data.message + '</div>';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            messageDiv.innerHTML = '<div class="alert alert-danger">An error occurred. Please try again.</div>';
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.innerText = 'Submit';
        });
    });
</script>
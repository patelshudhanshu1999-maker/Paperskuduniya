<style>
    /* Related Blogs Section */
    .related-blogs {
        padding: 60px 0;
    }

    .related-blogs h2 {
        font-weight: 700;
        margin-bottom: 40px;
        text-align: center;
        position: relative;
    }

    .related-blogs h2::after {
        content: "";
        display: block;
        width: 60px;
        height: 3px;
        background-color: #0d6efd;
        margin: 10px auto 0;
        border-radius: 2px;
    }

    .blog-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .blog-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .blog-card-body {
        padding: 20px;
    }

    .blog-card-body h5 {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 10px;
        color: #333;
    }

    .blog-card-body p {
        color: #666;
        font-size: 0.95rem;
    }

    .blog-card-body .btn {
        margin-top: 10px;
    }
</style>
</head>

<body>
    <section class="related-blogs">
        <div class="container">
            <h2>Related Blog</h2>

            <div class="row g-4">
                <!-- Blog 1 -->
                <div class="col-md-4">
                    <div class="blog-card">
                        <img src="/images/blog/react-native-project-structure.png" alt="React Native Project">
                        <div class="blog-card-body">
                            <h5>React Native Project Structure: Understand the project structure</h5>
                            <p>Understand the React Native project structure. How React Native organizes code.</p>
                            <a href="/blog/reactnative/react-native-project-structure.php"
                                class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog 2 -->
                <div class="col-md-4">
                    <div class="blog-card">
                        <img src="/images/blog/react-native-in-2025.png" alt="React Native in 2025">
                        <div class="blog-card-body">
                            <h5>React Native in 2025: A Strategic Deep Dive into its Evolving Landscape</h5>
                            <p>A Strategic Deep Dive into its Evolving Landscape and Market Leadership.</p>
                            <a href="/blog/reactnative/react-native-enduring-relevance-in-modern-app-economy.php"
                                class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="blog-card">
                        <img src="/images/blog/Command.png" alt="React Native Installation Guide">
                        <div class="blog-card-body">
                            <h5>React Native Installation Guide</h5>
                            <p>Completed the React Native setup. Start coding and building your mobile app!</p>
                            <a href="/blog/reactnative/react-natvie-project-setup.php"
                                class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
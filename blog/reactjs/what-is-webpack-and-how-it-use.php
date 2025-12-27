<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Learn what Webpack is, how it works, and how to set it up for modern JavaScript and React projects. A simple guide for beginners by Papers Ki Duniya.">
    <meta name="author" content="">
    <title>What is Webpack? A Beginner’s Guide to Setup and Usage - Papers Ki Duniya</title>
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <?php include_once __DIR__ . '/../../header.php'; ?>
</head>

<style>
    h1,h2,h3 {
        color: #5bc1ac;
    }
    h1 {
        font-size: 40px !important;
    }
    h2 {
        font-size: 32px !important;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 1rem 0;
    }
    table,th,td {
        border: 1px solid #ccc;
    }
    th,td {
        padding: 0.75rem;
        text-align: left;
    }
    pre {
        background: #f5f5f5;
        padding: 1rem;
        overflow-x: auto;
    }
    code {
        font-family: Consolas, monospace;
        background: #f5f5f5;
        padding: 0.2rem 0.4rem;
        border-radius: 3px;
    }
    ul {
        padding-left: 1.2rem;
    }
</style>

<body>

    <div class="container" style="margin-top: 20px;">

        <h1>What is Webpack?</h1>
        <!--<h2>Executive Summary</h2>-->
        <p>Webpack is a module bundler for modern JavaScript applications.</p>
        <p>It takes all your project’s files and dependencies (JavaScript, CSS, images, etc.), processes them, and
            bundles them into one or more optimized files (usually bundle.js) for the browser.</p>

        <h2>Why Webpack Is Used</h2>
        <p>Modern web apps often have:</p>
        <ul>
            <li>Multiple JavaScript files/modules</li>
            <li>CSS stylesheets</li>
            <li>Assets like images and fonts</li>
            <li>Tools like React or Vue</li>
        </ul>

        <p>Webpack helps:</p>
        <ul>
            <li><strong>Bundle everything</strong> together for the browser</li>
            <li><strong>Transform code</strong> (e.g., from JSX or ES6+ to browser-compatible JS)</li>
            <li><strong>Optimize performance</strong> (minify, split code, cache)</li>
        </ul>

        <h2>key features of Webpack:</h2>
        <ul>
            <li><strong>Code Bundling:</strong> Combines multiple JavaScript (and other asset) files into a single or
                smaller set of bundles for efficient delivery.</li>
            <li><strong>Code Splitting:</strong> Splits code into smaller chunks, loading only what’s necessary when
                it’s needed (improves performance and reduces initial load time).</li>
            <li><strong>Loaders:</strong> Transforms non-JS files (CSS, images, fonts, TypeScript, JSX, etc.) into valid
                modules that Webpack can bundle.</li>
            <li><strong>Plugins:</strong> Extend Webpack’s functionality (e.g., optimizing assets, minifying code,
                injecting environment variables, generating HTML).</li>
            <li><strong>Tree Shaking:</strong> Automatically removes unused code from bundles, reducing file size.</li>
            <li><strong>Hot Module Replacement (HMR):</strong> Updates modules in real time without refreshing the whole
                page, making development faster.</li>
            <li><strong>Asset Management:</strong> Handles static assets like images, fonts, and CSS as part of the
                dependency graph.</li>
            <li><strong>Development & Production Modes:</strong> Provides built-in optimizations for different
                environments (development for debugging, production for performance).</li>
            <li><strong>Configuration Flexibility:</strong> Highly configurable through webpack.config.js, enabling
                custom setups for different projects.</li>
            <li><strong>Ecosystem & Community Support:</strong> Large plugin ecosystem, strong documentation, and wide
                adoption in modern front-end development.</li>
        </ul>

        <?php include_once __DIR__ . '/../related-blog.php'; ?>

    </div>
    <!-- Your page content goes here -->
    <script src="./js/script.js"></script>
    <?php include_once __DIR__ . '/../../footer.php'; ?>

</body>
</html>
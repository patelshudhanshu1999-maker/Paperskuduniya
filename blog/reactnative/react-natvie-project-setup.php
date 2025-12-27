<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Step-by-step guide to install and initialize React Native in 2025" />
    <meta name="author" content="Shudhanshu Patel" />
    <title>How to initialize React Native in 2025</title>
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <?php include_once __DIR__ . '/../../header.php'; ?>
    <style>
      h1, h2, h3 {
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
      table, th, td {
        border: 1px solid #ccc;
      }
      th, td {
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
      .blog-img {
          width: 70%;
          margin: 20px auto;
      }
    </style>
  </head>

  <body>
    <div class="container" style="margin-top: 20px;">
      <h1>📘 React Native Installation Guide</h1>

      <h2>✅ Step 1: Install Node.js & Watchman</h2>
      <p>Why?<br />React Native requires Node.js to run JavaScript code and manage packages.</p>
      <p>Steps:</p>
      <ul>
        <li>Go to: <a href="https://nodejs.org" target="_blank" rel="noopener noreferrer">https://nodejs.org</a></li>
        <li>Download the LTS version and install it normally</li>
      </ul>
      <h3>Check Installation:</h3>
      <pre><code>node -v</code></pre>
      <pre><code>npm -v</code></pre>
       <div class="blog-img">
    <img src="https://paperskiduniya.com/images/blog/Version.png" class="img-fluid" alt="React Native Version">
    </div>
      <h3>macOS Only (Install Watchman):</h3>
      <pre><code>brew install watchman</code></pre>

      <h2>✅ Step 2: Install Java JDK 17</h2>
      <p>Why?<br />React Native requires Java Development Kit (JDK) 17 for Android development.</p>
      <p>
        Download JDK 17 from
        <a href="https://www.oracle.com/java/technologies/javase/jdk17-archive-downloads.html" target="_blank" rel="noopener noreferrer">Oracle</a>
        or
        <a href="https://jdk.java.net/17/" target="_blank" rel="noopener noreferrer">OpenJDK</a>
      </p>
      <p>
        Set JAVA_HOME environment variable:<br />
        macOS/Linux:
      </p>
      <pre><code>export JAVA_HOME=$(/usr/libexec/java_home)</code></pre>
      <p>Windows:</p>
      <pre><code>Go to Control Panel → System → Environment Variables → Add JAVA_HOME</code></pre>

      <h2>✅ Step 3: Install Android Studio</h2>
      <p>
        Why?<br />Android Studio provides the Android SDK and emulator tools for Android development.
      </p>
      <p>
        Download from:
        <a href="https://developer.android.com/studio" target="_blank" rel="noopener noreferrer">https://developer.android.com/studio</a>
      </p>
      <p>During installation, ensure these are selected:</p>
      <ul>
        <li>Android SDK</li>
        <li>Android Emulator</li>
        <li>Android Virtual Device</li>
        <li>Android SDK Platform 35</li>
        <li>Intel x86 Emulator Accelerator (HAXM)</li>
      </ul>

      <h2>✅ Step 4: Set Up Environment Variables</h2>
      <p>Why?<br />Environment variables help React Native find Android SDK tools.</p>
      <p>macOS/Linux (add to ~/.zshrc or ~/.bash_profile):</p>
      <pre><code><br/>export ANDROID_HOME=$HOME/Library/Android/sdk<br/>export PATH=$PATH:$ANDROID_HOME/emulator<br/>export PATH=$PATH:$ANDROID_HOME/platform-tools</code></pre>
       <div class="blog-img">
    <img src="https://paperskiduniya.com/images/blog/Enviornment.png" class="img-fluid" alt="React Native Enviornment">
    </div>
      <p>Then run:</p>
      <pre><code>source ~/.zshrc</code></pre>

      <p>Windows:</p>
      <pre><code>ANDROID_HOME = %LOCALAPPDATA%\Android\Sdk</code></pre>
       <div class="blog-img">
    <img src="https://paperskiduniya.com/images/blog/Sdk.png" class="img-fluid" alt="React Native Sdk">
    </div>
      <p>Update Path:</p>
      <pre><code>%LOCALAPPDATA%\Android\Sdk\platform-tools
%LOCALAPPDATA%\Android\Sdk\emulator</code></pre>
 


      <h2>✅ Step 5: Install React Native CLI</h2>
      <p>Why?<br />It allows project creation and build commands from terminal.</p>
      <pre><code>npm install -g react-native-cli</code></pre>
      <p>
        Or follow the latest steps via
        <a href="https://reactnative.dev/docs/environment-setup" target="_blank" rel="noopener noreferrer">official docs</a>
      </p>

      <h2>✅ Step 6: Create a New React Native Project</h2>
      <p>Run:</p>
      <pre><code>npx react-native init MyApp</code></pre>

      <h2>✅ Step 7: Run Your React Native App</h2>
      <p>Navigate to your app folder:</p>
      <pre><code>cd MyApp</code></pre>
      <pre><code>npx react-native run-android</code></pre>
      <pre><code>npx react-native run-ios  # macOS only</code></pre>
      <div class="blog-img">
        <img src="https://paperskiduniya.com/images/blog/Command.png" class="img-fluid" alt="NPM Command">
      </div>
      <h2>✅ Step 8: Verify Your Setup</h2>
      <p>If you see the welcome screen on your emulator/device, you're done!</p>

      <h2>✅ Summary of Steps</h2>
      <table>
        <tr>
          <th>Step</th>
          <th>Why</th>
          <th>Command</th>
        </tr>
        <tr>
          <td>1</td>
          <td>Install Node.js & Watchman</td>
          <td><a href="https://nodejs.org" target="_blank" rel="noopener noreferrer">Download Node.js</a></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Install Java JDK 17</td>
          <td>
            <a href="https://jdk.java.net/17/" target="_blank" rel="noopener noreferrer">OpenJDK 17</a>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Install Android Studio</td>
          <td><a href="https://developer.android.com/studio" target="_blank" rel="noopener noreferrer">Android Studio</a></td>
        </tr>
        <tr>
          <td>4</td>
          <td>Set Up Env Variables</td>
          <td>ANDROID_HOME and PATH</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Install React Native CLI</td>
          <td>npm install -g react-native-cli</td>
        </tr>
        <tr>
          <td>6</td>
          <td>Create Project</td>
          <td>npx react-native init MyApp</td>
        </tr>
        <tr>
          <td>7</td>
          <td>Run Project</td>
          <td>npx react-native run-android / run-ios</td>
        </tr>
        <tr>
          <td>8</td>
          <td>Verify Setup</td>
          <td>Open App in Emulator or Device</td>
        </tr>
      </table>

      <h2>🚀 Conclusion</h2>
      <p>
        Congratulations! You’ve completed the React Native setup. Start coding and building your mobile app!
      </p>
      <p>
        Facing issues? Check the
        <a href="https://reactnative.dev/docs/environment-setup" target="_blank" rel="noopener noreferrer">official docs</a>
        or visit forums like
        <a href="https://stackoverflow.com/questions/tagged/react-native" target="_blank" rel="noopener noreferrer">Stack Overflow</a>.
      </p>
      
      <?php include_once __DIR__ . '/../related-blog.php'; ?>
    </div>

    <script src="./js/script.js"></script>
    <?php include_once __DIR__ . '/../../footer.php'; ?>
  </body>
</html>

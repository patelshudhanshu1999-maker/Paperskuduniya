<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Complete guide to React Native project structure in 2025" />
    <meta name="author" content="Shudhanshu Patel" />
    <title>React Native Project Structure Explained (2025)</title>
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <?php include_once __DIR__ . '/../../header.php'; ?>
    <style>
        h1,
        h2,
        h3 {
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

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        th,
        td {
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

        .pro-structure {
            height: 400px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container" style="margin-top: 20px;">
        <h1>📂 React Native Project Structure (2025)</h1>
        <p>
            After installing React Native and running your first app, the next step is to
            <strong>understand the project structure</strong>. Knowing where files live, what they do, and
            how React Native organizes code will save you hours of confusion as your project grows.
        </p>

        <h2>✅ Default Project Structure</h2>
        <p>When you run <code>npx react-native init MyFirstApp</code>, you get a folder layout like this:</p>

        <img src="images/screenshot-2025-08-30.jpg" class="img-fluid pro-structure"
            alt="React Native Project Structure in VS Code">

        <pre><code>MyFirstApp/
│
├── android/         # Native Android code (Gradle, Java/Kotlin)
├── ios/             # Native iOS code (Xcode, Swift/Obj-C)
├── node_modules/    # Installed npm dependencies
├── index.js         # Entry point of the app
├── App.js           # Main React component (your app starts here)
├── package.json     # Project metadata + dependencies
├── app.json         # Basic app configuration
├── babel.config.js  # Babel compiler configuration
└── metro.config.js  # Metro bundler configuration (optional)</code></pre>

        <p>Let’s go through each of these step by step 👇</p>

        <h2>📌 android/ Folder</h2>
        <ul>
            <li>Contains everything needed to run your app on Android.</li>
            <li>Uses <code>Gradle</code> for builds, and code can be written in Java or Kotlin.</li>
            <li>You usually don’t touch this folder unless:
                <ul>
                    <li>You’re integrating custom native modules.</li>
                    <li>You want to tweak Android-specific settings (permissions, splash screens, signing).</li>
                </ul>
            </li>
        </ul>

        <h2>📌 ios/ Folder</h2>
        <ul>
            <li>Contains all native iOS code, managed via <code>Xcode</code>.</li>
            <li>Code can be written in Swift or Objective-C.</li>
            <li>You use this folder when:
                <ul>
                    <li>Adding custom native iOS code.</li>
                    <li>Modifying app icons, launch screens, or permissions (Info.plist).</li>
                </ul>
            </li>
        </ul>

        <h2>📌 App.js</h2>
        <p>This is the heart of your React Native app. All your React components eventually connect here.</p>
        <pre><code>import React from "react";
import { Text, View } from "react-native";

export default function App() {
  return (
    <View>
      <Text>Hello, React Native 🚀</Text>
    </View>
  );
}</code></pre>

        <h2>📌 index.js</h2>
        <p>Acts as the entry point. It tells React Native which component to start with.</p>
        <pre><code>import { AppRegistry } from 'react-native';
import App from './App';
import { name as appName } from './app.json';

AppRegistry.registerComponent(appName, () => App);</code></pre>

        <h2>📌 package.json</h2>
        <p>Defines project metadata, dependencies, and useful scripts.</p>
        <pre><code>{
  "name": "MyFirstApp",
  "version": "0.0.1",
  "scripts": {
    "start": "react-native start",
    "android": "react-native run-android",
    "ios": "react-native run-ios"
  },
  "dependencies": {
    "react": "18.x",
    "react-native": "0.79.x"
  }
}</code></pre>

        <h2>📌 app.json</h2>
        <p>Basic config file that defines the app’s <code>name</code> and <code>displayName</code>.</p>
        <pre><code>{
  "name": "MyFirstApp",
  "displayName": "My First App"
}</code></pre>

        <h2>📌 babel.config.js</h2>
        <p>Controls how modern JavaScript is compiled into code React Native can understand.</p>

        <h2>📌 metro.config.js</h2>
        <p>
            Configuration for Metro (the JavaScript bundler used by React Native).
            Useful when you need to add support for images, custom fonts, or file types.
        </p>

        <h2>🔄 React Native CLI vs Expo Project Structure</h2>
        <p>If you use <strong>Expo</strong> instead of React Native CLI, the structure is simpler:</p>
        <pre><code>MyExpoApp/
├── App.js
├── package.json
├── app.json
└── node_modules/</code></pre>
        <p>No <code>android/</code> or <code>ios/</code> folders — Expo manages native code for you.</p>

        <h2>💡 Best Practices for Organizing Code</h2>
        <ul>
            <li>Create a <code>src/</code> folder for your actual code.</li>
            <li>Inside <code>src/</code>, create:
                <ul>
                    <li><code>components/</code> → Reusable UI pieces</li>
                    <li><code>screens/</code> → Full-screen pages</li>
                    <li><code>assets/</code> → Images, fonts, icons</li>
                    <li><code>utils/</code> → Helper functions</li>
                </ul>
            </li>
        </ul>

        <h2>📋 Summary Table</h2>
        <table>
            <tr>
                <th>Folder/File</th>
                <th>Purpose</th>
            </tr>
            <tr>
                <td><code>android/</code></td>
                <td>Native Android code (Gradle, Java, Kotlin)</td>
            </tr>
            <tr>
                <td><code>ios/</code></td>
                <td>Native iOS code (Xcode, Swift, Objective-C)</td>
            </tr>
            <tr>
                <td><code>App.js</code></td>
                <td>Main React component, app UI starts here</td>
            </tr>
            <tr>
                <td><code>index.js</code></td>
                <td>Entry point (registers the root component)</td>
            </tr>
            <tr>
                <td><code>package.json</code></td>
                <td>Dependencies, scripts, metadata</td>
            </tr>
            <tr>
                <td><code>app.json</code></td>
                <td>Basic app configuration</td>
            </tr>
            <tr>
                <td><code>babel.config.js</code></td>
                <td>Transpiler configuration</td>
            </tr>
            <tr>
                <td><code>metro.config.js</code></td>
                <td>Bundler configuration</td>
            </tr>
        </table>

        <h2>🚀 Conclusion</h2>
        <p>
            By understanding the React Native project structure, you’ll be more confident in navigating
            and scaling your app. In the next step, we’ll dive into <strong>Core Components and Styling</strong>
            — the building blocks of every React Native application.
        </p>
        
        <?php include_once __DIR__ . '/../related-blog.php'; ?>
    </div>

    <script src="./js/script.js"></script>
    <?php include_once __DIR__ . '/../../footer.php'; ?>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Basics</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
        }
    </style>
</head>
<body>

    <header>
        <h1>Welcome to HTML Basics</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#html-basics">HTML Basics</a></li>
            <li><a href="#html-tags">HTML Tags</a></li>
            <li><a href="#structure">Document Structure</a></li>
        </ul>
    </nav>

    <main>

        <section id="html-basics">
            <h2>HTML Basics</h2>
            <p>HTML (Hypertext Markup Language) is the standard markup language for creating web pages.</p>
        </section>

        <section id="html-tags">
            <h2>HTML Tags</h2>
            <p>HTML consists of various tags that define the structure and content of a web page. Here are some basic tags:</p>
            <ul>
                <li>html&gt: The root element</li>
                <li><code>&lt;head&gt;</code>: Contains meta-information about the HTML document</li>
                <li><code>&lt;title&gt;</code>: Sets the title of the HTML document (shown in the browser tab)</li>
                <li><code>&lt;body&gt;</code>: Contains the content of the HTML document</li>
                <li><code>&lt;h1&gt;</code> to <code>&lt;h6&gt;</code>: Headings of different levels</li>
                <li><code>&lt;p&gt;</code>: Paragraph</li>
                <li><code>&lt;a&gt;</code>: Anchor (used for links)</li>
                <li><code>&lt;ul&gt;</code>: Unordered list</li>
                <li><code>&lt;li&gt;</code>: List item</li>
            </ul>
        </section>

        <section id="structure">
            <h2>Document Structure</h2>
            <p>The basic structure of an HTML document includes <code>&lt;!DOCTYPE html&gt;</code>, <code>&lt;html&gt;</code>, <code>&lt;head&gt;</code>, and <code>&lt;body&gt;</code> elements.</p>
            <pre>
                <code>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
                        &lt;title&gt;Document Title&lt;/title&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;h1&gt;Hello, World!&lt;/h1&gt;
                        &lt;p&gt;This is a basic HTML document.&lt;/p&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                </code>
            </pre>
        </section>

    </main>

    <footer>
        <p>HTML Basics. Code Crafter Academy.</p>
    </footer>
    <a href= "javascript:history.go(-1)"> Back to Courses </a>
</body>
</html>
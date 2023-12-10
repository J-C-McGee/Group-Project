<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>CSS Basics</title>
</head>
<body>

    <header>
        <h1>CSS Basics</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#css-basics">CSS Basics</a></li>
            <li><a href="#css-structure">CSS Structure</a></li>
        </ul>
    </nav>

    <main>

        <section id="css-basics">
            <h2>CSS Basics</h2>
            <p>CSS (Cascading Style Sheets) is a style sheet language used for describing the look and formatting of a document written in HTML.</p>
            <ul>
                <li>CSS is used to control the layout and appearance of multiple web pages all at once.</li>
                <li>It allows you to style HTML elements, control spacing, colors, fonts, and more.</li>
                <li>CSS can be applied inline, internally, or externally.</li>
            </ul>
        </section>

        <section id="css-structure">
            <h2>CSS Structure</h2>
            <p>The basic structure of a CSS rule includes a selector and a declaration block:</p>
            <pre>
                <code>
                    selector {
                        property: value;
                    }
                </code>
            </pre>
            <p>Here's a breakdown:</p>
            <ul>
                <li><strong>Selector:</strong> Targets HTML elements that you want to style.</li>
                <li><strong>Property:</strong> Specifies the style attribute you want to change (e.g., color, font-size).</li>
                <li><strong>Value:</strong> Specifies the value for the chosen property (e.g., blue, 16px).</li>
            </ul>
            <p>Example:</p>
            <pre>
                <code>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        color: #333;
                    }
                </code>
            </pre>
        </section>

    </main>

    <footer>
        <p>CSS Basics. Code Crafter Academy.</p>
    </footer>
<a href= "javascript:history.go(-1)"> Back to Courses </a>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Basics</title>
</head>
<body>

    <header>
        <h1>JavaScript Basics</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#js-basics">JavaScript Basics</a></li>
            <li><a href="#js-structure">JavaScript Structure</a></li>
        </ul>
    </nav>

    <main>

        <section id="js-basics">
            <h2>JavaScript Basics</h2>
            <p>JavaScript is a versatile scripting language that allows you to add interactivity, manipulate the DOM (Document Object Model), and handle events on web pages. Here are some key points:</p>
            <ul>
                <li>JavaScript is often used to enhance the user experience by making web pages dynamic and responsive.</li>
                <li>It can be executed both on the client side (in the browser) and on the server side.</li>
                <li>JavaScript is an essential component of modern web development, often used in conjunction with HTML and CSS.</li>
            </ul>
        </section>

        <section id="js-structure">
            <h2>JavaScript Structure</h2>
            <p>The basic structure of a JavaScript script includes defining variables, functions, and statements. Here's a simple example:</p>
            <pre>
                <code>
                    // Variables
                    let greeting = "Hello, ";
                    let name = "John";

                    // Function
                    function greetUser(userName) {
                        return greeting + userName;
                    }

                    // Call the function
                    let message = greetUser(name);

                    // Output the result
                    console.log(message);
                </code>
            </pre>
            <p>Here's a breakdown:</p>
            <ul>
                <li><strong>Variables:</strong> Used to store data.</li>
                <li><strong>Functions:</strong> Blocks of reusable code.</li>
                <li><strong>Statements:</strong> Individual instructions that make up a script.</li>
            </ul>
        </section>

    </main>

    <footer>
        <p>JavaScript Basics. Code Crafter Academy.</p>
    </footer>
    <a href= "javascript:history.go(-1)"> Back to Courses </a>
</body>
</html>
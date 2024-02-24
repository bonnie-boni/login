<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Heading</title>
</head>
<body>
    <h1 id="dynamic-heading">Hello</h1>

    <script>
        // Function to change the text of the heading
        function changeHeading() {
            var heading = document.getElementById('dynamic-heading');
            var greetings = ['Hello', 'Bonjour'];
            var currentGreetingIndex = 0;
            var currentLetterIndex = 0;
            var interval = 100; // Time interval in milliseconds
            var letterInterval;
            var greetingInterval;

            // Function to print text letter by letter
            function printText() {
                var currentGreeting = greetings[currentGreetingIndex];
                if (currentLetterIndex < currentGreeting.length) {
                    heading.textContent += currentGreeting[currentLetterIndex];
                    currentLetterIndex++;
                    letterInterval = setTimeout(printText, interval); // Repeat with a delay
                } else {
                    clearTimeout(letterInterval); // Stop printing letters
                    currentLetterIndex = 0;
                    greetingInterval = setTimeout(removeText, 2000); // Delay before removing the text
                }
            }

            // Function to remove text letter by letter
            function removeText() {
                if (heading.textContent.length > 0) {
                    heading.textContent = heading.textContent.substring(0, heading.textContent.length - 1);
                    letterInterval = setTimeout(removeText, interval); // Repeat with a delay
                } else {
                    clearTimeout(letterInterval); // Stop removing letters
                    currentGreetingIndex = (currentGreetingIndex + 1) % greetings.length; // Switch to the next greeting
                    currentLetterIndex = 0;
                    printText(); // Start printing the next greeting
                }
            }

            // Start printing the text
            printText();
        }

        // Call the changeHeading function
        changeHeading();
    </script>
</body>
</html>

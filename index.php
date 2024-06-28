<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Feedback Form</h2>
        <form id="feedbackForm">
            <input type="text" name="name" id="name" placeholder="Your Name" required>
            <input type="email" name="email" id="email" placeholder="Your Email" required>
            <textarea name="feedback" id="feedback" placeholder="Your Feedback" required></textarea>
            <input type="number" name="rating" id="rating" placeholder="Rating (1-5)" required>
            <button type="submit">Submit Feedback</button>
        </form>
        <div id="feedbackList">
            <h2>Feedback Received</h2>
            <table id="feedbackTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Feedback</th>
                        <th>Rating</th>
                        <th>Submission Date</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Feedback data will be inserted here -->
                </tbody>
            </table>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

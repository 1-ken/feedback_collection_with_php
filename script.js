document.addEventListener("DOMContentLoaded", function() {
    // Load feedback on page load
    loadFeedback();

    // Handle form submission
    document.getElementById("feedbackForm").addEventListener("submit", function(event) {
        event.preventDefault();

        var formData = new FormData(this);

        fetch("submit_feedback.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            loadFeedback();
            this.reset();
        })
        .catch(error => console.error('Error:', error));
    });
});

function loadFeedback() {
    fetch("fetch_feedback.php")
    .then(response => response.json())
    .then(data => {
        var feedbackTableBody = document.querySelector("#feedbackTable tbody");
        feedbackTableBody.innerHTML = "";

        data.forEach(feedback => {
            var row = document.createElement("tr");
            row.innerHTML = `
                <td>${feedback.id}</td>
                <td>${feedback.name}</td>
                <td>${feedback.email}</td>
                <td>${feedback.feedback}</td>
                <td>${feedback.rating}</td>
                <td>${feedback.submission_date}</td>
            `;
            feedbackTableBody.appendChild(row);
        });
    })
    .catch(error => console.error('Error:', error));
}

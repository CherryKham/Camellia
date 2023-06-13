
function viewUser() {
    var button = document.getElementById("viewuser");

    // Add onclick event listener to the button
    button.addEventListener("click", function() {
        // Perform action on button click
        fetchData();
    });
}

function fetchData() {
    // Create a new XMLHttpRequest object
    var ViewUser = new XMLHttpRequest();

    // Configure the request
    ViewUser.open('GET', 'Fmock.php', true);

    // Set the response type to JSON
    ViewUser.responseType = 'json';

    // Handle the response
    ViewUser.onload = function() {
        if (ViewUser.status === 200) {
            var data = ViewUser.response;
            // Process the retrieved data
            displayData(data);
        }
    };

    // Send the request
    ViewUser.send();
}

function displayData(data) {
    var container = document.getElementById('dataContainer');
    var html = '';

    // Generate HTML markup for displaying the data
    html += "<table>";
    html += "<tr><th>name</th><th>email</th><th>password</th><th>conpass</th><th>gender</th></tr>";
    for (var i = 0; i < data.length; i++) {
        html += "<tr>";
        html += "<td>" + data[i].name + "</td>";
        html += "<td>" + data[i].email + "</td>";
        html += "<td>" + data[i].password + "</td>";
        html += "<td>" + data[i].conpass + "</td>";
        html += "<td>" + data[i].gender + "</td>";
        html += "</tr>";
    }
    html += "</table>";

    // Update the container with the generated HTML
    container.innerHTML = html;
}

const menu = document.querySelector("#mobile-menu")
const menuLinks = document.querySelector(".navbar__menu")

menu.addEventListener("click", function() {
    menu.classList.toggle("is-active");

})

document.getElementById("scroll__button").addEventListener("click", function() {
    document.getElementById("services").scrollIntoView({ behavior: "smooth" });
});

const reports = JSON.parse(localStorage.getItem('reports')) || [];

document.getElementById('issueForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const street = document.getElementById('street').value;
    const area = document.getElementById('area').value;
    const issueType = document.getElementById('issue-type').value;
    const description = document.getElementById('description').value;

    const newReport = { street, area, issueType, description };

    reports.push(newReport);
    localStorage.setItem('reports', JSON.stringify(reports));

    displayReports();

    // Clear the form inputs after submission
    document.getElementById('issueForm').reset();
});

function displayReports(filter = '') {
    const submittedData = document.getElementById('submittedData');
    submittedData.innerHTML = '';

    reports.forEach((report, index) => {
        if (filter && !Object.values(report).some(value => value.toLowerCase().includes(filter.toLowerCase()))) {
            return;
        }
        const reportElement = `
            <div class="report">
                <h2 id="Text">Report</h2>
                <p id="Text"><strong>Street:</strong> ${report.street}</p>
                <p id="Text"><strong>Area:</strong> ${report.area}</p>
                <p id="Text"><strong>Issue Type:</strong> ${report.issueType}</p>
                <p id="Text"><strong>Description:</strong> ${report.description}</p>
                <button id="delete__btn" onclick="deleteReport(${index})">Delete</button>
                <br>
            </div>
        `;
        submittedData.innerHTML += reportElement;
    });
}

function filterReports() {
    const filter = document.getElementById('searchBar').value.toLowerCase().trim();
    displayReports(filter);
}

function deleteReport(index) {
    reports.splice(index, 1);
    localStorage.setItem('reports', JSON.stringify(reports));
    displayReports();
}

// Load the reports when the page is loaded
window.onload = displayReports;

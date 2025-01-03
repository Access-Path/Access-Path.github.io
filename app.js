const menu = document.querySelector("#mobile-menu")
const menuLinks = document.querySelector(".navbar__menu")

menu.addEventListener("click", function() {
    menu.classList.toggle("is-active");

})
//Report scroll button
document.getElementById("scroll__button").addEventListener("click", function() {
    document.getElementById("services").scrollIntoView({ behavior: "smooth" });
});

// Filter reports based on user input
// Select the search input and report container elements
const searchInput = document.querySelector('#searchBar'); 
const reportContainer = document.querySelector('#reportContainer'); 

// Add an event listener to handle input changes
searchInput.addEventListener('input', (event) => {
    const searchTerm = event.target.value.toLowerCase(); // Get the search term and convert to lowercase

    // Get all report elements
    const reports = reportContainer.querySelectorAll('.report-item');

    // Loop through each report and filter based on the search term
    reports.forEach((report) => {
        const reportContent = report.textContent.toLowerCase(); // Get text content of the report
        if (reportContent.includes(searchTerm)) {
            report.style.display = 'block'; // Show report if it matches
        } else {
            report.style.display = 'none'; // Hide report if it doesn't match
        }
    });
});

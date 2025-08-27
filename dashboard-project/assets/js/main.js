// filepath: dashboard-project/assets/js/main.js

document.addEventListener('DOMContentLoaded', function() {
    // Event listener for search input
    const searchInput = document.getElementById('search');
    searchInput.addEventListener('keyup', function() {
        FilterkeyWord();
    });

    // Function to filter products based on search input
    function FilterkeyWord() {
        const filter = searchInput.value.toLowerCase();
        const table = document.getElementById('table');
        const tr = table.getElementsByTagName('tr');

        for (let i = 1; i < tr.length; i++) {
            const td = tr[i].getElementsByTagName('td');
            let found = false;
            for (let j = 1; j < td.length - 1; j++) {
                if (td[j]) {
                    const txtValue = td[j].textContent || td[j].innerText;
                    if (txtValue.toLowerCase().indexOf(filter) > -1) {
                        found = true;
                        break;
                    }
                }
            }
            tr[i].style.display = found ? "" : "none";
        }
    }
});
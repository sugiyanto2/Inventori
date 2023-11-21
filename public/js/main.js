document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('search');
    const searchButton = document.getElementById('searchButton');

    searchButton.addEventListener('click', function () {
        performSearch(searchInput.value);
    });

    searchInput.addEventListener('keydown', function (event) {
        if (event.key === "Enter") {
            performSearch(searchInput.value);
        }
    });

    function performSearch(query) {
        // Gantilah URL berikut dengan URL hasil pencarian yang sesuai
        const searchUrl = 'https://example.com/search?q=' + query;
        
        // Redirect ke hasil pencarian
        window.location.href = searchUrl;
    }
});


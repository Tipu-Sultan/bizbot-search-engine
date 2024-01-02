function displayResults(response) {
    var resultsContainer = document.getElementById('resultsContainer');
    resultsContainer.innerHTML = response.html;
}

function searchProducts() {
    var input = document.getElementById('searchInput').value;

    if (input.length >= 2) {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'api/api.php?query=' + input, true);

        xhr.onload = function () {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                displayResults(response);
            }
        };

        xhr.send();
    } else {
        resultsContainer.innerHTML = '';
    }
}

<!doctype html>
<html lang="en">
    <head>
        <title>RMDB - Review Movies DataBase</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
            crossorigin="anonymous"
        >
    </head>

    <body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">RMDB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/kategoriler.php">Kategoriler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Popüler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Yeni Çıkanlar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kategoriler</a>
                    </li>
                </ul>
                <form class="d-flex">
                        <a class="btn btn-outline-light" href="/giris-yap.php">Giriş Yap</a>
                </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <h1>kategoriler</h1>
    </main>
    
    <footer>

    </footer>


    <!-- <h1>Movie Reviews</h1>

    <div id="movie-container"></div>

    <script>
        const apiKey = "6a0f3fc4";

        function fetchMovieData(title) {
            const url = `http://www.omdbapi.com/?t=${title}&apikey=${apiKey}&r=json`;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    if (data.Response === "True") {
                        displayMovie(data);
                    } else {
                        console.log("Movie not found:", data.Error);
                    }
                })
                .catch(error => console.error("Error fetching movie data:", error));
        }

        function displayMovie(data) {
            const movieContainer = document.getElementById('movie-container');
            
            // Create a new div to display movie info
            const movieDiv = document.createElement('div');
            movieDiv.classList.add('movie');

            // Display movie title, genre, description, and poster
            movieDiv.innerHTML = `
                <h2>${data.Title}</h2>
                <img src="${data.Poster}" alt="${data.Title} Poster">
                <p><strong>Genre:</strong> ${data.Genre}</p>
                <p><strong>Description:</strong> ${data.Plot}</p>
            `;
            
            // Append the new movie div to the movie container
            movieContainer.appendChild(movieDiv);
        }

        // Fetch data for a few example movies
        fetchMovieData("Inception");
        fetchMovieData("The Dark Knight");
        fetchMovieData("The Godfather");
    </script> -->
    

        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" 
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" 
            crossorigin="anonymous">
        </script>

        <script src="script.js" type="text/Javascript"></script>
    </body>
</html>

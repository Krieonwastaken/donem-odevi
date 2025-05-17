fetch("https://corsproxy.io/?https://www.imdb.com/rss/topmovies/")
    .then(response => response.text())
    .then(str => new window.DOMParser().parseFromString(str, "text/xml"))
    .then(xml => {
        let movies = xml.getElementsByTagName("item");
        for (let i = 0; i < 5; i++) {
            console.log(movies[i].getElementsByTagName("title")[0].textContent);
        }
    })
    .catch(error => console.error("Error fetching IMDb data:", error));

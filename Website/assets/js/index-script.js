let key = "1d78fa8";
let searchName = "";
let searchMethod = "t";
let moviesFront = ["Frozen", "Spongebob", "das boot", "Robots", "sex and the city", "Ready player one"];

function movieDisplay(movie) {
    let div = document.querySelector(".product-list");
    let movieTitle = movie["Title"];
    let movieImg = movie["Poster"];
    let movieYear = movie["Year"];
    let movieDesc = movie["Plot"];
    let movieId = movie["imdbID"];
    let movieRating = movie["Ratings"][0]["Value"];
    div.innerHTML += `
        <div class="col-sm-6 col-md-4 product-item animation-element slide-top-left">
            <div class="product-container">
                <div class="row">
                    <div class="col-12"><img src="${movieImg}"></div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h2><a href="#">${movieTitle}</a></h2>
                    </div>
                </div>
                <div class="product-rating"><span>Rating: </span><a class="small-text" href="#">${movieRating}</a>
                <span>Year: </span><a class="small-text" href="#">${movieYear}</a></div>
                <div class="row">
                    <div class="col-12">
                        <p class="product-description">${movieDesc}</p>
                        <div class="row">
                            <div class="col-6"><button class="btn btn-light" type="button">Watch Now!</button></div>
                            <div class="col-6"><button class="${movieId} btn btn-light" type="button">WishList!</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`
}

function api() {
    let searchData = `${searchMethod}=${searchName}`;
    fetch(`http://www.omdbapi.com/?apikey=${key}&${searchData}`).then(result => {
        return result.json();
    })
        .then(function (items) {
            movieDisplay(items)
        })
}

window.onload = function () {
    moviesFront.forEach(name => {
        searchName = name;
        api()
    });
}
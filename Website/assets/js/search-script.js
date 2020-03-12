let key = "1d78fa8";
let searchName = "";
let searchMethod = "t";
let check = false;

function movieDisplay(movie) {
    let div = document.querySelector(".gift");
    if (movie["Response"] ==  "True") {
        if (searchMethod == "s") {
            movie.Search.forEach(item => {
                console.log("Item", item);

                let movieTitle = item["Title"];
                let movieImg = item["Poster"];
                let movieYear = item["Year"];
                let movieId = item["imdbID"];
                div.innerHTML += `
            <div class="col-12 col-sm-6">
            <div class="gift__img col-12"><img src="${movieImg}">
                <div class="gift__rating">${movieYear}</div>
            </div>
            <div class="gift__info col-12">
                <h4>${movieTitle}</h4>
                <div class="gift__bottom row">
                    <div class="gift__cta-wrap col-12"><a class="flux_cta gift__cta"
                        href="Movie.php">WatchNow!</a><a class="${movieId} flux_cta gift__cta" href="Wishlist.php">Add To
                        WishList!</a><span class="gift__cta-note"></span></div>
                    </div>
                </div>
            </div>`
            })
        }
        if (searchMethod == "t") {
            console.log(movie["Title"]);
        }
    } if(movie["Response"] == "False") {
        div.innerHTML = "No movies found!";
    }

}

function search() {
    let input = document.querySelector(".form-control").value;
    let div = document.querySelector(".gift");
    div.innerHTML = "";
    searchName = input;
    searchMethod = "s";
    api()
    check = true;
}


function api() {
    let searchData = `${searchMethod}=${searchName}`;
    fetch(`http://www.omdbapi.com/?apikey=${key}&${searchData}`).then(result => {
        return result.json();
    })
        .then(function (movies) {
            if(check == true){
                movieDisplay(movies);
            }
        })
        .catch(function (error) {
            console.error(error);
        })
}

window.onload = function () {
    api()
    let input = document.getElementById("SearchRequest");
    input.addEventListener("keyup", function (event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            document.getElementById("SearchButton").click();
        }
    });
}
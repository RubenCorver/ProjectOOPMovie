let key = "1d78fa8";
let searchName = "";
let searchMethod = "t";
let check = false;

function movieDisplay(movie) {
    console.log("movies", movie);
    let div = document.querySelector(".gift");


    if (!movie["response"] == "False") {
        if (searchMethod == "s") {
            movie.Search.forEach(item => {
                console.log("Item", item);

                let movieTitle = item["Title"];
                let movieImg = item["Poster"];
                let movieYear = item["Year"];
                div.innerHTML += `
            <div class="col-12 col-sm-6">
            <div class="gift__img col-12"><img src="${movieImg}">
                <div class="gift__rating">${movieYear}</div>
            </div>
            <div class="gift__info col-12">
                <h4 class="gift__name">${movieTitle}</h4>
                <div class="gift__bottom row">
                    <div class="gift__cta-wrap col-12"><a class="flux_cta gift__cta" target="_blank"
                        href="#">WatchNow!</a><a class="flux_cta gift__cta" target="_blank" href="#">Add To
                        WishList!</a><span class="gift__cta-note"></span></div>
                    </div>
                </div>
            </div>`
            })
        }
        if (searchMethod == "t") {
            console.log(movie["Title"]);
        }
    } else {
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
    console.log(input);
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
}
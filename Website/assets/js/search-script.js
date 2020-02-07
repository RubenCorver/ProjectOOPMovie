let key = "1d78fa8";
let searchName = "";
let searchMethod = "t";

function movieDisplay(movie) {
    console.log("movies", movie);
    if (searchMethod == "s") {
        movie.Search.forEach(item => {
            console.log("Item",item);
            let div = document.querySelector(".gift");
            let filmTitle = item["Title"];
            let filmImg = item["Poster"];
            div.innerHTML += `
            <div class="col-12 col-sm-6">
            <div class="gift__img col-12"><img src="${filmImg}">
                <div class="gift__rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star fa-star-half-o"></i><i
                    class="fa fa-star fa-star-o"></i><span class="gift__rating-number">921</span></div>
            </div>
            <div class="gift__info col-12">
                <h4 class="gift__name">${filmTitle}</h4>
                <div class="gift__details">
                    <p>Klein Beetje info over le film</p>
                </div>
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
    

}

function search() {
    let input = document.querySelector(".form-control").value;
    let div = document.querySelector(".gift");
    div.innerHTML = "";
    searchName = input;
    searchMethod = "s";
    api()

    console.log(input);
}


function api() {
    let searchData = `${searchMethod}=${searchName}`;
    fetch(`http://www.omdbapi.com/?apikey=${key}&${searchData}`).then(result => {
        return result.json();
    })
        .then(function (movies) {
            movieDisplay(movies);
        })
        .catch(function (error) {
            console.error(error);
        })
}

window.onload = function () {
    api()
}
let key = "1d78fa8";
let searchName = "Winnie the pooh";
let searchMethod = "t";
let moviesFront = ["Frozen"];

function movieDisplay(movie) {
    let div = document.querySelector(".test");
    let movieTitle = movie["Title"];
    let movieImg = movie["Poster"];
    let movieYear = movie["Year"];
    let movieDesc = movie["Plot"];
    let movieRating = movie["Ratings"][0]["Value"];
    div.innerHTML += `
    <div class="overlayWrapper"><img class="img-fluid" src="${movieImg}">
        <div class="centered">
            <h1 class="ccontainer">${movieTitle}</h1>
        </div>
    </div>
        <div class="row"><div class="col-md-8 d-block item fcard" id="fcard1" style=" margin-left: 20em;margin-top: 10px;margin-bottom: 10px;">
            <h3 style="text-align: center;"><br/>${movieRating}, ${movieYear}</h3><br/>
            <p>${movieDesc}</p>
        </div>
    </div>`
}




function search() {
    let input = document.querySelector(".form-control").value;
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
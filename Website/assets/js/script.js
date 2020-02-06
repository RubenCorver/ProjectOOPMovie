let key = "1d78fa8";
let searchName = "Winnie the pooh";
let searchMethod = "t";
let searchData = `${searchMethod}=${searchName}`;

function search() {
    let input = document.querySelector(".form-control").value;
    console.log(input);
}

function api() {
    fetch(`http://www.omdbapi.com/?apikey=${key}&${search}`).then(result => {
        return result.json();
    })
    .then(function (items){
        console.log(items)
    })
}

window.onload = function () {
    api()
}
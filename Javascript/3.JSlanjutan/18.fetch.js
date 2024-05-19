// fetch = sebuah api pada js modern tujuannya untuk mengambil data secara asyncronous menggunakan method ajax
// sebelumnya menggunakan method ajax yang mengamdalkan library external seperti jquery cdn, sangat tidak recomended
// fetch = sebuah method pada API javascript untuk mengambil resourches dari jaringan, dan mengembalikan promise yang selesai (fullfilled) ketika ada response yang tersedia
// fetch(resources[url], init[configurasi tambahan])
// configurasi tambahan berbentuk object=method, headers, body, mode,cache,referrer, referrerPolicy,integrity,keepalive,signal

const searchButton = document.querySelector(".search-button");
searchButton.addEventListener("click", async function () {
  //tuliskan async sebelim ketika ingin menjalankan asynconous menggunakan fetch, jika ingin menjalankan nya maka letak await
  const inputKeyword = document.querySelector("#input-keyword");
  const movies = await getMovies(inputKeyword.value);
  updateMoviesContainer(movies);
});

// mengambil data movies.json lewat fetch API
function getMovies(keyword) {
  return fetch("http://www.omdbapi.com/?apikey=ea800c47&s=" + keyword)
    .then((response) => response.json()) //menjalani promise
    .then((response) => response.Search);
}

function updateMoviesContainer(movies) {
  let cards = "";
  movies.forEach((movie) => (cards += showCards(movie)));
  const moviesContainer = document.querySelector("#movies-container");
  moviesContainer.innerHTML = cards;
}

function showCards(movie) {
  return `<div class="col-md-3 my-2">
            <div class="card">
              <img src="${movie.Poster}" class="card-img-top" alt="" />
              <div class="card-body">
                <h5 class="card-title">${movie.Title}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">${movie.Year}</h6>
                <a href="#" data-imdbid="${movie.imdbID}" data-bs-toggle="modal" data-bs-target="#movieDetailModal" class="btn btn-primary modal-detail-button">Show Details</a>
              </div>
            </div>
          </div>`;
}

// ketika tombol detail di klik menggunakan event binding
// karna modal-detail-button ada etika search button di jalankan
document.addEventListener("click", async function (e) {
  if (e.target.classList.contains("modal-detail-button")) {
    const imdbid = e.target.dataset.imdbid; //mengambil data data-imdbid="${movie.imdbID}"
    const movieDetail = await getMoviesDetail(imdbid); //mengambil data data
    updateModalMoviesDetail(movieDetail);
  }
});

function getMoviesDetail(imdbid) {
  return fetch("http://www.omdbapi.com/?apikey=ea800c47&i=" + imdbid)
    .then((response) => response.json())
    .then((response) => response);
}

function updateModalMoviesDetail(imdbid) {
  const movieDetail = showMovieDetail(imdbid);
  const modalBody = document.querySelector(".modal-body");
  modalBody.innerHTML = movieDetail;
}

function showMovieDetail(movie) {
  return `<div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
                <img src="${movie.Poster}" alt="" class="img-fluid" />
              </div>
              <div class="col-md">
                  <ul class="list-group">
                    <li class="list-group-item"><h4>${movie.Title} (${movie.Year})</h4></li>
                    <li class="list-group-item">
                      <strong>Director: </strong>
                      ${movie.Director}
                    </li>
                    <li class="list-group-item">
                      <strong>Actors: </strong>
                      ${movie.Actors}
                    </li>
                    <li class="list-group-item">
                      <strong>Writer: </strong>
                      ${movie.Writer}
                    </li>
                    <li class="list-group-item">
                      <strong>Plot: </strong><br />
                      ${movie.Plot}
                    </li>
                  </ul>
                </div>
            </div>
          </div>`;
}

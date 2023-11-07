const apiUrl = "https://yrgo.github.io/api/movies/mean-girls.json";

const fetchData = async () => {
  try {
    const response = await fetch(apiUrl);
    const data = await response.json();

    let movieTitleContainerDiv = document.querySelector(
      ".movie-information-container"
    );
    let actorContainerDiv = document.querySelector(".actor-container");

    let movieTitle = document.createElement("div");
    movieTitle.classList.add("movie-title");
    movieTitle.innerHTML =
      "<a href='" + data.trailer_url + "'>" + data.title + "</a>";

    movieTitleContainerDiv.appendChild(movieTitle);

    data.actors.forEach((actor) => {
      let actorDiv = document.createElement("div");
      let actorImage = document.createElement("img");
      let actorName = document.createElement("div");
      let characterName = document.createElement("div");
      let a = document.createElement("a");

      actorDiv.classList.add("actor-div");
      actorImage.classList.add("actor-image");
      actorName.classList.add("actor-name");
      characterName.classList.add("character-name");
      a.classList.add("actor-link");

      actorImage.src = actor.image_url;
      actorName.textContent = actor.name;
      characterName.textContent = actor.character;
      a.href = actor.profile_url;

      actorDiv.appendChild(actorImage);
      actorDiv.appendChild(actorName);
      actorDiv.appendChild(characterName);
      a.appendChild(actorDiv);
      actorContainerDiv.appendChild(a);
    });
  } catch (error) {
    console.error(error);
  }
};

fetchData();

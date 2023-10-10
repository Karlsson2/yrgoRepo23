let fullName = "Britney Jane Spears";
let splitName = fullName.split(" ");
console.log(splitName);

const songs = [
  "Toxic",
  "...Baby one more time",
  "Everytime",
  "Circus",
  "Oops! I did it again",
  "Lucky",
  "I'm not a girl, not yet a woman",
];

splitName.forEach((name, index) => {
  if (index == 0) {
    console.log(`Firstname: ${name}`);
  } else if (index == 1) {
    console.log(`Middlename: ${name}`);
  } else {
    console.log(`Lastname: ${name}`);
  }
});

let shortName = splitName[0] + " " + splitName[2];

//console.log(shortName);

//songs.push("Hit me baby one more time");

//console.log(songs);

//songs.splice(songs.indexOf("Circus"), 1);

//console.log(songs);

songs.forEach((name, index) => {
  console.log(`${index + 1}. ${name}`);
});

for (i = 0; i < songs.length; i++) {
  console.log(songs[i].split("").reverse().join(""));
}

i = 0;
while (i < songs.length) {
  if (songs[i] == "Lucky") {
    console.log("Stop! Here's Lucky!");
    break;
  }
  console.log(songs[i]);
  i++;
}

let newSongs = [];

songs.map((song) => {
  newSongs.push(song.toUpperCase());
});

console.log(newSongs);

const person = {
  name: "Britney Jean Spears",
  birthdate: "2 December, 1981",
  from: "McComb, Mississippi, USA",
  length: 163,
  children: ["Sean Federline", "Jayden James Federline"],
  description:
    "Britney Spears has been one of the most successful — and sometimes controversial — solo acts in popular music. Six of her first seven albums reached No. 1 on the Billboard 200.",
};

console.log(
  `Her name is ${person["name"]} ans she was born ${person["birthdate"]}.`
);

person["children"].forEach((child) => {
  console.log(child);
});

const albums = [
  { title: "...Baby One More Time", year: 1999, label: "Jive" },
  { title: "Oops!... I Did It Again", year: 2000, label: "Jive" },
  { title: "Britney", year: 2001, label: "Jive" },
  { title: "In the zone", year: 2003, label: "Jive, Zomba" },
  { title: "Blackout", year: 2007, label: "Jive, Zomba" },
  { title: "Circus", year: 2008, label: "Jive, Zomba" },
  { title: "Femme Fatale", year: 2011, label: "Jive" },
  { title: "Britney Jean", year: 2013, label: "RCA" },
  { title: "Glory", year: 2016, label: "RCA" },
];

albums.forEach((album) => {
  console.log(album["title"] + "," + album["year"]);
});

const getAlbumsFrom = (array, year) => {
  return array.filter((album) => album["year"] >= year);
};

let albumsFromX = getAlbumsFrom(albums, 2000);
console.log(albumsFromX);

const counts = albums.reduce((accumulator, current) => {
  if ((accumulator[current["label"]] = accumulator[current["label"]])) {
    accumulator[current["label"]] += 1;
  } else {
    accumulator[current["label"]] = 1;
  }
  return accumulator;
}, {});

console.log(counts);

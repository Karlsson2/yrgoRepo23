const data = `
	{
		"name": "Steve Carell",
		"character": "Michael Scott",
		"profile_url": "https://www.imdb.com/name/nm0136797/?ref_=tt_cl_t_1",
		"image_url": "https://m.media-amazon.com/images/M/MV5BMjMyOTM2OTk1Ml5BMl5BanBnXkFtZTgwMTI3MzkyNjM@._V1_QL75_UX280_CR0,2,280,414_.jpg"
	}
`;
const obj = JSON.parse(data);
let body = document.getElementsByTagName("body");
let actorName = document.createElement("div");
let actorImage = document.createElement("div");

actorName.textContent = obj.name;
actorImage.src = obj.image_url;
document.body.appendChild(actorName);
document.body.appendChild(actorImage);

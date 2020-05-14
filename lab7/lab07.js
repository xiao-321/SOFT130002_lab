const works = [
    { author: "Micheal Jackson",lifetime:"1022-1055",tips: "Human", photos: ["human1.jpg","human2.jpg","human3.jpg"] },
    { author: "Maria JK",lifetime:"1920-2001", tips: "Classical", photos: ["classical1.jpg","classical2.jpg"] },
    { author: "John Herry UY", lifetime:"1894-1928",tips: "Abstract", photos: ["abstract1.jpg","abstract2.jpg","abstract3.jpg","abstract4.jpg","abstract5.jpg"] },
    { author: "Coco",lifetime:"1777-1799", tips: "Beauty",  photos: ["beauty1.jpg","beauty2.jpg"] }
];

function display(number) {
    var container = document.createElement("div");
    container.className="item";

    var Tips = document.createElement("p");
    Tips.innerText = "Genre:" + works[number].tips;
    Tips.style.padding = "0 0 10px 0";

    var Inner_box1 = document.createElement("div");
    Inner_box1.className = "inner-box";
    var Author = document.createElement("h3");
    Author.innerText = works[number].author;
    Author.style.display = "inline";
    Author.style.padding = "0 10px 0 0";
    Inner_box1.appendChild(Author);
    var Lifetime = document.createElement("h4");
    Lifetime.innerText = "lifetime:" + works[number].lifetime;
    Lifetime.style.display = "inline";
    Inner_box1.appendChild(Lifetime);

    var Inner_box2 = document.createElement("div");
    Inner_box2.className = "inner-box";
    var PopularPhotos = document.createElement("h3");
    PopularPhotos.innerText="Popular Photos";
    Inner_box2.appendChild(PopularPhotos);

    for(var i = 0;i < works[number].photos.length;i++){
        var img = document.createElement("img");
        img.className = "photo";
        img.src = works[number].photos[i];
        Inner_box2.appendChild(img);
    }

    var Button = document.createElement("button");
    Button.textContent = "visit";

    container.appendChild(Tips);
    container.appendChild(Inner_box1);
    container.appendChild(Inner_box2);
    container.appendChild(Button);

    document.body.appendChild(container);
}

for(var j = 0;j < works.length;j ++) {
    display(j);
}
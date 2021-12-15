function appendImageElem(Keyword, index) {
    const imgElem = document.createElement('img');
    imgElem.src = 'https://source.unsplash.com/400x255/?${Keyword}$sig={index}';

    const galleryElem = document.querySelector('.gallery');
    galleryElem.appendChild(imgElem);

}

function run() {
    for (let i = 1; i < 9; i++) {
        appendImageElem('d', i)
    }
}

run();


const processing = document.getElementsByClassName('processing-bar');

let i = 0;

while (i < processing.length) {
    console.log(processing[i]);
    processing[i].style.opacity = 1;
    processing[i].style.width = processing[i].getAttribute('data-bar') + '%';
    i++;
}


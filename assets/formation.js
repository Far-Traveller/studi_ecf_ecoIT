function responsiveList(windowWidth) {
    let listDiv = document.getElementById('list-div');
    let collapseFormation = document.getElementById('collapseFormation');
    let lessonDiv = document.getElementById('lesson-div');

    if (windowWidth.matches) {
        listDiv.classList.add('col-4');
        lessonDiv.classList.add('col-8');
        collapseFormation.classList.add('show');
    } else {
        listDiv.classList.remove('col-4');
        lessonDiv.classList.remove('col-8');
        collapseFormation.classList.remove('show');
    }
}

let windowWidth = window.matchMedia("(min-width: 768px)")
responsiveList(windowWidth)
windowWidth.addEventListener('change', responsiveList)


function showLesson(event) {
    //to avoid showing json response :
    event.preventDefault();

    const url = this.href;
    let lessonTitle = document.getElementById('lesson-h2');
    let lessonVideo = document.getElementById('lesson-video');
    let lessonText = document.getElementById('lesson-text');

    fetch(url)
        .then(response => response.json())
        .then(function(result) {
            lessonTitle.innerText = result.title;
            lessonVideo.innerText = result.video;
            lessonText.innerText = result.text;
        });
}

let btnShow = document.querySelectorAll('.show_lesson');
btnShow.forEach(function (url) {
    url.addEventListener('click', showLesson);
});

function lessonDone(event) {
    event.preventDefault();

    const url = this.href;

    fetch(url)
        .then(response => response.json());

    setTimeout(function () { location.reload(); }, 100);
}

let btnDone = document.querySelectorAll('.check-lesson-done');
btnDone.forEach(function (url) {
    url.addEventListener('click', lessonDone);
});
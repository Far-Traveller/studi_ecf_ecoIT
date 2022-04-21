let listDiv = document.getElementById('list-div');
let collapseFormation = document.getElementById('collapseFormation');
let lessonDiv = document.getElementById('lesson-div');

function responsiveList(windowWidth) {
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


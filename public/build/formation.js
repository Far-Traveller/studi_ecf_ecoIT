(self["webpackChunk"] = self["webpackChunk"] || []).push([["formation"],{

/***/ "./assets/formation.js":
/*!*****************************!*\
  !*** ./assets/formation.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");

__webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");

function responsiveList(windowWidth) {
  var listDiv = document.getElementById('list-div');
  var collapseFormation = document.getElementById('collapseFormation');
  var lessonDiv = document.getElementById('lesson-div');

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

var windowWidth = window.matchMedia("(min-width: 768px)");
responsiveList(windowWidth);
windowWidth.addEventListener('change', responsiveList);

function showLesson(event) {
  //to avoid showing json response :
  event.preventDefault();
  var url = this.href;
  var lessonTitle = document.getElementById('lesson-h2');
  var lessonVideo = document.getElementById('lesson-video');
  var lessonText = document.getElementById('lesson-text');
  fetch(url).then(function (response) {
    return response.json();
  }).then(function (result) {
    lessonTitle.innerText = result.title;
    lessonVideo.innerText = result.video;
    lessonVideo.href = result.video;
    lessonText.innerText = result.text;
  });
}

var btnShow = document.querySelectorAll('.show_lesson');
btnShow.forEach(function (url) {
  url.addEventListener('click', showLesson);
});

function lessonDone(event) {
  event.preventDefault();
  var url = this.href;
  fetch(url).then(function (response) {
    return response.json();
  });
  setTimeout(function () {
    location.reload();
  }, 100);
}

var btnDone = document.querySelectorAll('.check-lesson-done');
btnDone.forEach(function (url) {
  url.addEventListener('click', lessonDone);
});

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_internals_a-constructor_js-node_modules_core-js_internals_array--34436a","vendors-node_modules_core-js_modules_es_array_for-each_js-node_modules_core-js_modules_es_pro-c46c0a"], () => (__webpack_exec__("./assets/formation.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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R0FVLEVBQUFBLFVBQVUsQ0FBQyxZQUFZO0FBQUVDLElBQUFBLFFBQVEsQ0FBQ0MsTUFBVDtBQUFvQixHQUFuQyxFQUFxQyxHQUFyQyxDQUFWO0FBQ0g7O0FBRUQsSUFBSUMsT0FBTyxHQUFHbkMsUUFBUSxDQUFDNkIsZ0JBQVQsQ0FBMEIsb0JBQTFCLENBQWQ7QUFDQU0sT0FBTyxDQUFDTCxPQUFSLENBQWdCLFVBQVVoQixHQUFWLEVBQWU7QUFDM0JBLEVBQUFBLEdBQUcsQ0FBQ0osZ0JBQUosQ0FBcUIsT0FBckIsRUFBOEJxQixVQUE5QjtBQUNILENBRkQiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvZm9ybWF0aW9uLmpzIl0sInNvdXJjZXNDb250ZW50IjpbImZ1bmN0aW9uIHJlc3BvbnNpdmVMaXN0KHdpbmRvd1dpZHRoKSB7XG4gICAgbGV0IGxpc3REaXYgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbGlzdC1kaXYnKTtcbiAgICBsZXQgY29sbGFwc2VGb3JtYXRpb24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY29sbGFwc2VGb3JtYXRpb24nKTtcbiAgICBsZXQgbGVzc29uRGl2ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2xlc3Nvbi1kaXYnKTtcblxuICAgIGlmICh3aW5kb3dXaWR0aC5tYXRjaGVzKSB7XG4gICAgICAgIGxpc3REaXYuY2xhc3NMaXN0LmFkZCgnY29sLTQnKTtcbiAgICAgICAgbGVzc29uRGl2LmNsYXNzTGlzdC5hZGQoJ2NvbC04Jyk7XG4gICAgICAgIGNvbGxhcHNlRm9ybWF0aW9uLmNsYXNzTGlzdC5hZGQoJ3Nob3cnKTtcbiAgICB9IGVsc2Uge1xuICAgICAgICBsaXN0RGl2LmNsYXNzTGlzdC5yZW1vdmUoJ2NvbC00Jyk7XG4gICAgICAgIGxlc3NvbkRpdi5jbGFzc0xpc3QucmVtb3ZlKCdjb2wtOCcpO1xuICAgICAgICBjb2xsYXBzZUZvcm1hdGlvbi5jbGFzc0xpc3QucmVtb3ZlKCdzaG93Jyk7XG4gICAgfVxufVxuXG5sZXQgd2luZG93V2lkdGggPSB3aW5kb3cubWF0Y2hNZWRpYShcIihtaW4td2lkdGg6IDc2OHB4KVwiKVxucmVzcG9uc2l2ZUxpc3Qod2luZG93V2lkdGgpXG53aW5kb3dXaWR0aC5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCByZXNwb25zaXZlTGlzdClcblxuXG5mdW5jdGlvbiBzaG93TGVzc29uKGV2ZW50KSB7XG4gICAgLy90byBhdm9pZCBzaG93aW5nIGpzb24gcmVzcG9uc2UgOlxuICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG5cbiAgICBjb25zdCB1cmwgPSB0aGlzLmhyZWY7XG4gICAgbGV0IGxlc3NvblRpdGxlID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2xlc3Nvbi1oMicpO1xuICAgIGxldCBsZXNzb25WaWRlbyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdsZXNzb24tdmlkZW8nKTtcbiAgICBsZXQgbGVzc29uVGV4dCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdsZXNzb24tdGV4dCcpO1xuXG4gICAgZmV0Y2godXJsKVxuICAgICAgICAudGhlbihyZXNwb25zZSA9PiByZXNwb25zZS5qc29uKCkpXG4gICAgICAgIC50aGVuKGZ1bmN0aW9uKHJlc3VsdCkge1xuICAgICAgICAgICAgbGVzc29uVGl0bGUuaW5uZXJUZXh0ID0gcmVzdWx0LnRpdGxlO1xuICAgICAgICAgICAgbGVzc29uVmlkZW8uaW5uZXJUZXh0ID0gcmVzdWx0LnZpZGVvO1xuICAgICAgICAgICAgbGVzc29uVmlkZW8uaHJlZiA9IHJlc3VsdC52aWRlbztcbiAgICAgICAgICAgIGxlc3NvblRleHQuaW5uZXJUZXh0ID0gcmVzdWx0LnRleHQ7XG4gICAgICAgIH0pO1xufVxuXG5sZXQgYnRuU2hvdyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5zaG93X2xlc3NvbicpO1xuYnRuU2hvdy5mb3JFYWNoKGZ1bmN0aW9uICh1cmwpIHtcbiAgICB1cmwuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBzaG93TGVzc29uKTtcbn0pO1xuXG5mdW5jdGlvbiBsZXNzb25Eb25lKGV2ZW50KSB7XG4gICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcblxuICAgIGNvbnN0IHVybCA9IHRoaXMuaHJlZjtcblxuICAgIGZldGNoKHVybClcbiAgICAgICAgLnRoZW4ocmVzcG9uc2UgPT4gcmVzcG9uc2UuanNvbigpKTtcblxuICAgIHNldFRpbWVvdXQoZnVuY3Rpb24gKCkgeyBsb2NhdGlvbi5yZWxvYWQoKTsgfSwgMTAwKTtcbn1cblxubGV0IGJ0bkRvbmUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuY2hlY2stbGVzc29uLWRvbmUnKTtcbmJ0bkRvbmUuZm9yRWFjaChmdW5jdGlvbiAodXJsKSB7XG4gICAgdXJsLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgbGVzc29uRG9uZSk7XG59KTsiXSwibmFtZXMiOlsicmVzcG9uc2l2ZUxpc3QiLCJ3aW5kb3dXaWR0aCIsImxpc3REaXYiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiY29sbGFwc2VGb3JtYXRpb24iLCJsZXNzb25EaXYiLCJtYXRjaGVzIiwiY2xhc3NMaXN0IiwiYWRkIiwicmVtb3ZlIiwid2luZG93IiwibWF0Y2hNZWRpYSIsImFkZEV2ZW50TGlzdGVuZXIiLCJzaG93TGVzc29uIiwiZXZlbnQiLCJwcmV2ZW50RGVmYXVsdCIsInVybCIsImhyZWYiLCJsZXNzb25UaXRsZSIsImxlc3NvblZpZGVvIiwibGVzc29uVGV4dCIsImZldGNoIiwidGhlbiIsInJlc3BvbnNlIiwianNvbiIsInJlc3VsdCIsImlubmVyVGV4dCIsInRpdGxlIiwidmlkZW8iLCJ0ZXh0IiwiYnRuU2hvdyIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJmb3JFYWNoIiwibGVzc29uRG9uZSIsInNldFRpbWVvdXQiLCJsb2NhdGlvbiIsInJlbG9hZCIsImJ0bkRvbmUiXSwic291cmNlUm9vdCI6IiJ9
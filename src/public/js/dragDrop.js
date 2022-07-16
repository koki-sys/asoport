/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/dragDrop.js ***!
  \**********************************/
var fileArea = document.getElementById('dragDropArea');
var fileInput = document.getElementById('fileInput');

function photoPreview(event) {
  var f = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;
  var file = f;

  if (file === null) {
    file = event.target.files[0];
  }

  var reader = new FileReader();
  var preview = document.getElementById("previewArea");
  var previewImage = document.getElementById("previewImage");

  if (previewImage != null) {
    preview.removeChild(previewImage);
  }

  reader.onload = function (event) {
    var img = document.createElement("img");
    img.setAttribute("src", reader.result);
    img.setAttribute("id", "previewImage");
    img.classList.add('preview-size');
    preview.appendChild(img);
  };

  reader.readAsDataURL(file);
}

fileArea.addEventListener('dragover', function (evt) {
  evt.preventDefault();
  fileArea.classList.add('dragover');
});
fileArea.addEventListener('dragleave', function (evt) {
  evt.preventDefault();
  fileArea.classList.remove('dragover');
});
fileArea.addEventListener('drop', function (evt) {
  evt.preventDefault();
  fileArea.classList.remove('dragenter');
  var files = evt.dataTransfer.files;
  console.log("DRAG & DROP");
  console.table(files);
  fileInput.files = files;
  photoPreview('onChenge', files[0]);
});
/******/ })()
;
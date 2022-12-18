var fileArea = document.getElementById('dragDropArea');
var fileInput = document.getElementById('fileInput');
const dragDropIcon = document.getElementById('drag-drop-icon');
const dragDropInfo = document.getElementById('drag-drop-info');

const isLandscape = (element) => {
    const imgWidth = element.width;
    const imgHeight = element.height;

    // 横幅÷縦幅の値をaspectRatioに代入
    aspectRatio = imgWidth / imgHeight;

    // aspectRatioが1以上の場合、横長画像でそれ以外は縦長画像
    if (aspectRatio >= 1) {
        return true;
    }
    return false;
}

function photoPreview(event, f = null) {
    var file = f;
    if (file === null) {
        file = event.target.files[0];
    }
    const reader = new FileReader();
    const preview = document.getElementById("previewArea");
    const previewImage = document.getElementById("previewImage");

    // 画像を入れてないときは、プレビューを表示しない
    if (previewImage != null) {
        preview.removeChild(previewImage);
    }

    // 画像のプレビューを表示
    reader.onload = function (event) {
        const img = document.createElement("img");
        img.setAttribute("src", reader.result);
        img.setAttribute("id", "previewImage");
        // 縦横比を調べてサイズを変更する
        if (isLandscape(img)) {
            img.classList.add('preview-size-landscape');
        } else {
            img.classList.add('preview-size-portrait');
        }
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
    dragDropIcon.remove();
    dragDropInfo.remove();
    var files = evt.dataTransfer.files;
    console.log("DRAG & DROP");
    console.table(files);
    fileInput.files = files;
    photoPreview('onChenge', files[0]);
});

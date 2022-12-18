const fileArea = document.getElementById('dragDropArea');
const fileInput = document.getElementById('fileInput');
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

const checkAspect = (result, imageElement) => {
    const imageObj = new Image();
    imageObj.setAttribute("src", result);
    imageObj.onload = () => {
        // 縦横比を調べてサイズを変更する
        if (isLandscape(imageObj)) {
            imageElement.classList.add('preview-size-landscape');
        } else {
            imageElement.classList.add('preview-size-portrait');
        }
    };
}

const photoPreview = (file) => {
    const reader = new FileReader();
    const preview = document.getElementById("previewArea");
    const previewImage = document.getElementById("previewImage");

    reader.readAsDataURL(file);
    // 画像を入れてないときは、プレビューを表示しない
    if (previewImage != null) {
        preview.removeChild(previewImage);
    }

    // 画像のプレビューを表示
    reader.onload = () => {
        const img = document.createElement("img");
        img.setAttribute("src", reader.result);
        img.setAttribute("id", "previewImage");
        checkAspect(reader.result, img);
        preview.appendChild(img);
    };
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
    fileInput.files = evt.dataTransfer.files;
    photoPreview(fileInput.files[0]);
});

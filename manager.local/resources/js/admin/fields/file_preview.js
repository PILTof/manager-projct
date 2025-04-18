import { FileUploadWithPreview, Events } from "file-upload-with-preview";
import jQuery from "jquery";
import "file-upload-with-preview/dist/style.css";

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll("[data-upload-id]").forEach((element) => {
        element.closest("form").enctype = "multipart/form-data";
        let id = element.dataset.uploadId;
        /**
         * @type {String} - url файла
         */
        let value = element.dataset.value;
        const upload = new FileUploadWithPreview(id);
        if (value) {
            if(value.includes('.svg')) {
                $.ajax({
                    type: "GET",
                    url: value,
                    dataType: "html",
                    success: function (response) {
                        upload.imagePreview.innerHTML = response;
                        upload.addImagesFromPath([
                            '/storage/images/i.webp'
                        ])
                    }
                });
            } else {

            }
            upload.addImagesFromPath([value]);
        }

        element.querySelector(".label-container > label").textContent =
            element.dataset.label ?? element.dataset.uploadId;

        upload.imagePreview.style += ";" + element.dataset.imgStyle;
    });
});

window.addEventListener(Events.IMAGE_ADDED, (e) => {
    const { detail } = e;
    /**
     * @type {HTMLInputElement}
     */
    let input = document.querySelector(`input[name="${detail.uploadId}"][type="file"]`);
    let dt = new DataTransfer();
    detail.cachedFileArray.forEach((file) => {
        dt.items.add(file);
    });
    input.files = dt.files;
    document.querySelector(`input[name="${input.name}"][data-empty]`)?.remove();
});

window.addEventListener(Events.CLEAR_BUTTON_CLICKED, ({detail}) => {
    /**
     * @type {HTMLInputElement}
     */
    let input = document.querySelector(`input[name="${detail.uploadId}"][type="file"]`);
    let dt = new DataTransfer();
    input.files = dt.files;
    let cloneEmpty = document.createElement('input')
    cloneEmpty.type = "hidden";
    cloneEmpty.name = input.name;
    cloneEmpty.dataset.empty="true";
    input.after(cloneEmpty)
})

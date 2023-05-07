import TOASTR from "./toastr.js";
import COMMON from "./common.js";

/*
* Common preview image upload
*/
$('#image-upload').change(function (data) {
    $('#image-preview').removeClass('d-none');
    COMMON.previewImage(data, '#image-preview');
});

/*
* Common ajax
*/
$('.btn__submit__form__ajax').on('click', function (e) {
    e.preventDefault();
    const form = $('.form__submit__ajax');
    const type = form.attr('method');
    const formData = new FormData(form.get(0));

    $.ajax({
        type: type,
        url: form.attr('action'),
        data: formData,
        dataType: 'json',
        contentType: false,
        processData: false,
        beforeSend: function () {

        },
        success: function (response) {
            TOASTR(response.status, response.msg);
            COMMON.clearValidate('.form__submit__ajax');
            COMMON.resetForm('.form__submit__ajax');
        },
        error: function (response) {
            COMMON.showValidateMessage('.form__submit__ajax', response);
        },
        complete: function () {
        }
    });
});

$('.clear__form').on('click', function (e) {
    e.preventDefault();
    COMMON.resetForm('.form__submit__ajax');
    COMMON.clearValidate('.form__submit__ajax');
});

$('.btn__show_modal').on('click', function (e) {

});

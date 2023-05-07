import TOASTR from "./toastr.js";

const COMMON = (function () {
    let modules = {};

    modules.confirmDelete = handle => {

    };

    modules.loading = (isLoading, delay = 0) => {
        if (isLoading) {
            $('.loading').removeClass('d-none')
        } else {
            setTimeout(() => $('.loading').addClass('d-none'), delay);
        }
    };

    modules.showValidateMessage = (parent, response) => {
        modules.clearValidate(parent);

        if ('status' in response && response.status === 422) {
            $.each(response.responseJSON.errors, function (nameOld, message) {
                $(parent).find(`.error_${nameOld}`).text(message[0]).show();
                $(parent).find(`input[name="${nameOld}"]`).addClass('is-invalid');
            });
        } else {
            TOASTR('error', 'An error has occurred');
        }
    };

    modules.clearValidate = form => {
        $(form).find('.is-invalid').removeClass('is-invalid');
        $(form).find('.error-message').text('').hide();
    };

    modules.previewImage = (previewIn, previewOut) => {
        let imageFile = previewIn.target.files[0];
        let reader = new FileReader();
        reader.readAsDataURL(imageFile);
        reader.onload = function (evt) {
            $(previewOut).attr('src', evt.target.result);
            $(previewOut).hide();
            $(previewOut).fadeIn(650);
        }
    };

    modules.resetForm = form => {
        $(form).trigger("reset");
        $(form).find('img').addClass('d-none');
    }

    return modules;
})();


export default COMMON;

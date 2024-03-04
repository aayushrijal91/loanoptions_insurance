var SITE_URL = "https://loanoptions.ai/insurance";

$('input[type="radio"].insuranceType').on('change', function () {
    if ($(this).is(':checked')) {
        let checkedValue = $(this).val();

        $('#form-tab-1').hide();
        $('#form-tab-2').fadeIn();

        $('.checkedValue').html(checkedValue);
        $(`.unusedoption`).fadeIn();
        $(`.unusedoption[data-src="${checkedValue}"]`).hide();
        $('.loanSvg').hide();
        $(`.loanSvg[data-src="${checkedValue}"]`).fadeIn();
    }
});

$('.goToNextTab').on('click', function (e) {
    e.preventDefault();

    const currentTab = $(this).parents('.form-tab');
    let isValid = true;

    currentTab.find('input[required], textarea[required], select[required]').each(function () {
        if (!$(this).val()) {
            isValid = false;
            $(this).addClass('is-invalid');
        } else {
            $(this).removeClass('is-invalid');
        }
    });

    if (isValid) {
        const nextTabId = parseInt(currentTab.attr('data-currentTab')) + 1;
        $('.form-tab').hide();
        $(`#form-tab-${nextTabId}`).fadeIn();
    } else {
        currentTab.find('.is-invalid:first').focus();
    }
});

$('.goToPrevTab').on('click', function (e) {
    e.preventDefault();

    const currentTab = parseInt($(this).parents('.form-tab').attr('data-currentTab'));

    $('.form-tab').hide();
    $(`#form-tab-${currentTab - 1}`).fadeIn();
});

$('#insuranceWidgetForm').on('submit', function (e) {
    e.preventDefault();
    $(".insuranceSubmitBtn").addClass("disabled");
    
    $.ajax({
        url: SITE_URL + "/ajax.php",
        data: $("#insuranceWidgetForm").serialize(),
        method: "POST",
        success: function (e) {
            (e = e.trim()),
                $(".insuranceSubmitBtn").removeClass("disabled"),
                "success" == e
                    ? ($(".form-tab").hide(), $("#form-tab-6").fadeIn(), window.location.href = SITE_URL + '/thankyou.php')
                    : "fail" == e && alert("Failed, Something went wrong.");
        },
    });
})
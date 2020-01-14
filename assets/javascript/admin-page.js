$(document).ready(function () {
    var elementLength = document.getElementsByClassName('ActiePrijs').length;
    for (i = 0; i < elementLength; i++) {
        var el = document.getElementsByClassName('ActiePrijs')[i];
        if (el.innerHTML == '1') {
            el.innerHTML = "<i class='fas fa-check vinkje'></i>"
        } else {
            el.innerHTML = "<i class='fas fa-times kruisje'></i>"
        }
    }

    $('.actie-button').click(function () {
        $('.actie-settings-closed').toggleClass('actie-settings-open');
        console.log(this.id);
        $('.hidden_id').attr('value', this.id)
    });

    $('.close').click(function () {
        $('.actie-settings-closed').toggleClass('actie-settings-open');
    });
});
// <i class="fas fa-check"></i>

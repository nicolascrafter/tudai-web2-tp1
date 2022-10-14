document.addEventListener("DOMContentLoaded", function(e) {
    let modify_buttons = document.querySelectorAll(".modify-button");
    for (let button of modify_buttons) {
        button.addEventListener("click", function(e) {
            e.target.nextElementSibling.showModal();
        })
    }
})
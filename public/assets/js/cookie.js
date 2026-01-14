document.addEventListener("DOMContentLoaded", function () {
    const cookieBox = document.getElementById("cookieConsent");
    const acceptBtn = document.getElementById("acceptCookies");
    const declineBtn = document.getElementById("declineCookies");

    // Check if user has already made a choice
    if (!localStorage.getItem("cookieConsent")) {
        cookieBox.style.display = "block";
    }

    acceptBtn.addEventListener("click", function () {
        localStorage.setItem("cookieConsent", "accepted");
        cookieBox.style.display = "none";
    });

    declineBtn.addEventListener("click", function () {
        localStorage.setItem("cookieConsent", "declined");
        cookieBox.style.display = "none";
    });
});
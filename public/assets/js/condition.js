document.getElementById('termsCheck').addEventListener('change', function () {
    const button = document.getElementById('buyBtn');

    if (this.checked) {
        button.classList.remove('disabled');
        button.style.pointerEvents = "auto";
        button.style.opacity = "1";
    } else {
        button.classList.add('disabled');
        button.style.pointerEvents = "none";
        button.style.opacity = "0.6";
    }
});
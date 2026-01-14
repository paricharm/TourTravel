let childCount = 0;

// Add Child
document.getElementById("addChildBtn").onclick = function () {
    childCount++; // Increase counter every time a child is added

    let box = `
        <div class="child-card">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <label>Child Name</label>
                    <input type="text" class="form-control" name="childname[]">
                </div>
                <div class="col-md-4 mb-2">
                    <label>Child Age</label>
                    <input type="number" class="form-control" name="childage[]">
                </div>
                <div class="col-md-2 d-flex justify-content-center align-items-center mt-2 mt-sm-0">
                    <button type="button" class="btn btn-danger btn-sm removeChild w-100">X</button>
                </div>
            </div>
        </div>`;

    $("#childrenContainer").append(box);
};

// Remove child (using delegated event so it works for all)
$(document).on("click", ".removeChild", function () {
    $(this).closest(".child-card").remove();
});

document
    .querySelectorAll('input[name="payment_method"]')
    .forEach(function (el) {
        el.addEventListener("change", function () {
            if (this.value === "online") {
                document.getElementById("onlinePaymentBtn").style.display =
                    "block";
                document.getElementById("cashMessage").style.display = "none";
            } else if (this.value === "cash") {
                document.getElementById("onlinePaymentBtn").style.display =
                    "none";
                document.getElementById("cashMessage").style.display = "block";
            }
        });
    });
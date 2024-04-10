import "./bootstrap";
import Swal from "sweetalert2";

// or via CommonJS
// const Swal = require("sweetalert2");
window.showToast = function showToast(message) {
    const Toast = Swal.mixin({
        toast: true,
        position: "bottom-start",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        },
    });
    Toast.fire({
        icon: "success",
        title: message,
    });
};

window.showError = function showError(message) {
    const Toast = Swal.mixin({
        toast: true,
        position: "bottom-start",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        },
    });
    Toast.fire({
        icon: "warning",
        title: message,
    });
};

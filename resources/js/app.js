import "./bootstrap";
import Swal from "sweetalert2";
import jQuery from "jquery";
import DataTable from "datatables.net-bs5";

// var navbarHeight = document.getElementById("top_nav_bar").offsetHeight;
// document.getElementById("main_content").style.paddingTop = navbarHeight + "px";
// document.getElementById("side_bar").style.paddingTop = navbarHeight + "px";

new DataTable("#data_table");

// or via CommonJS
// const Swal = require("sweetalert2");
window.showToast = function showToast(message) {
    const Toast = Swal.mixin({
        toast: true,
        position: "bottom-end",
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

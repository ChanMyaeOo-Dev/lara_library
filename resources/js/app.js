import "./bootstrap";
import Swal from "sweetalert2";
import jQuery, { data } from "jquery";
import DataTable from "datatables.net-bs5";
// Chart
import Chart from "chart.js/auto";

const book_count_chart = document.getElementById("book_count_chart");
window.showBookCountChart = function showBookCountChart(category_titles) {
    new Chart(book_count_chart, {
        type: "bar",
        data: {
            datasets: [
                {
                    data: category_titles,
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(255, 159, 64, 0.2)",
                        "rgba(255, 205, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(201, 203, 207, 0.2)",
                    ],
                    borderColor: [
                        "rgb(255, 99, 132)",
                        "rgb(255, 159, 64)",
                        "rgb(255, 205, 86)",
                        "rgb(75, 192, 192)",
                        "rgb(54, 162, 235)",
                        "rgb(153, 102, 255)",
                        "rgb(201, 203, 207)",
                    ],
                    borderWidth: 1,
                },
            ],
        },
        options: {
            plugins: {
                legend: {
                    display: false,
                },
            },
            scales: {
                y: {
                    beginAtZero: false,
                },
            },
        },
    });
};

function getLastSixMonths() {
    var months = [];
    var currentDate = new Date();

    // Array of month names
    var monthNames = [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
    ];

    for (var i = 0; i < 6; i++) {
        var month = monthNames[currentDate.getMonth()];
        months.unshift(month);

        // Move to the previous month
        currentDate.setMonth(currentDate.getMonth() - 1);
    }

    return months;
}

const transaction_count_chart = document.getElementById(
    "transaction_count_chart"
);
window.showTransactionCountChart = function showTransactionCountChart(
    transactionCountsInLastSixMonth
) {
    const data = Object.keys(transactionCountsInLastSixMonth)
        .reverse()
        .reduce((acc, key) => {
            acc[key] = transactionCountsInLastSixMonth[key];
            return acc;
        }, {});
    new Chart(transaction_count_chart, {
        type: "line",
        data: {
            // labels: getLastSixMonths(),
            datasets: [
                {
                    data: data,
                    fill: false,
                    borderColor: "rgb(75, 192, 192)",
                    tension: 0.1,
                },
            ],
        },
        options: {
            plugins: {
                legend: {
                    display: false,
                },
            },
            scales: {
                y: {
                    beginAtZero: false,
                },
            },
        },
    });
};

new DataTable("#data_table");
new DataTable("#data_table_history");

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

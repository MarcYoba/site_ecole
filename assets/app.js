/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import 'slick-carousel/slick/slick.js';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import '@fortawesome/fontawesome-free/css/all.min.css';

// start the Stimulus application
import './bootstrap';
import $ from 'jquery';
import DataTable from 'datatables.net-bs5';

// Importation du CSS de DataTables version Bootstrap 5
import 'datatables.net-bs5/css/dataTables.bootstrap5.min.css';

// Rendre jQuery global (parfois nécessaire selon votre config)
window.$ = window.jQuery = $;

global.$ = global.jQuery = $;

$(document).ready(function() {
  console.log('jQuery 3.4.1 est chargé !');
});

document.addEventListener('DOMContentLoaded', function() {
    const dataTable = document.getElementById('dataTable');
    if (dataTable) {
        $(dataTable).DataTable();
    }
});

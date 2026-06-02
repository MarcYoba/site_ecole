// CSS
import 'bootstrap/dist/css/bootstrap.min.css';
import '@fortawesome/fontawesome-free/css/all.min.css';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import 'datatables.net-bs5/css/dataTables.bootstrap5.min.css';
import 'datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css';
import './styles/app.css';

// jQuery
import $ from 'jquery';

window.$ = $;
window.jQuery = $;

// Librairies
import 'bootstrap';
import '@fortawesome/fontawesome-free/js/all.js';
import 'chart.js/auto';
import 'jquery.easing';
import 'slick-carousel';

// DataTables
import 'datatables.net-bs5';
import 'datatables.net-fixedheader-bs5';

// Stimulus
import './bootstrap';

// Initialisation
$(function () {

    const table = $('#dataTable');

    if (table.length) {

        table.DataTable({
            pageLength: 25,
            order: [[0, 'desc']],
            fixedHeader: true,
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/fr-FR.json'
            }
        });

    }

});
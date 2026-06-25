// CSS
import 'bootstrap/dist/css/bootstrap.min.css';
import '@fortawesome/fontawesome-free/css/all.min.css';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import 'datatables.net-bs5/css/dataTables.bootstrap5.min.css';
import 'datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css';
import frTranslation from 'datatables.net-plugins/i18n/fr-FR.json';
import './styles/app.css';

// jQuery (Doit être configuré TOUT EN HAUT avant les autres scripts)
import $ from 'jquery';
window.$ = $;
window.jQuery = $;
global.$ = global.jQuery = $; // Ajouté pour une compatibilité maximale avec Webpack / Stimulus

// Librairies
import 'bootstrap';
import '@fortawesome/fontawesome-free/js/all.js';
import 'chart.js/auto';
import 'jquery.easing';
import 'slick-carousel';

// DataTables (Correction de l'ordre d'importation)
import 'datatables.net'; // Import du cœur d'abord
import 'datatables.net-bs5'; // Puis du style Bootstrap 5
import 'datatables.net-fixedheader-bs5';

// Stimulus
import './bootstrap';

// Initialisation
$(document).ready(function () {
    // CORRECTION : Utilisation de '#tableactif' pour correspondre à votre HTML
    const table = $('#tableactif');

    if (table.length) {
        table.DataTable({
            pageLength: 25,
            order: [[0, 'desc']],
            fixedHeader: true,
            language: frTranslation
        });
    }
});
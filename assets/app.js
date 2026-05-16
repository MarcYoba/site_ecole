// 1. Vos imports CSS habituels...
import 'bootstrap/dist/css/bootstrap.min.css';
import '@fortawesome/fontawesome-free/css/all.min.css';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import 'datatables.net-bs5/css/dataTables.bootstrap5.min.css';
import './styles/app.css';

// 2. Initialisation et globalisation de jQuery immédiate
import $ from 'jquery';
window.$ = window.jQuery = $;

// 3. Imports des scripts tiers
import 'bootstrap';
import '@fortawesome/fontawesome-free/js/all.js';
import Chart from 'chart.js/auto';
import 'jquery.easing';
import 'slick-carousel';

// 4. CORRECTION ICI : Importation combinée de DataTables avec son plugin Bootstrap 5
// On passe directement jQuery au module pour qu'il s'injecte correctement dedans.
import DataTable from 'datatables.net-bs5';
import 'datatables.net-fixedheader-bs5'; // Optionnel (si vous l'utilisez)

// 5. Initialisation de Stimulus
import './bootstrap';

// 6. Votre code d'initialisation
$(document).ready(function() {
    if ($('#dataTable').length) {
        // Sécurité : On s'assure d'appeler l'instance via jQuery ou via l'objet DataTable
        $('#dataTable').DataTable({
            pageLength: 25,
            order: [[0, 'desc']],
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/fr-FR.json'
            }
        });
    }
});
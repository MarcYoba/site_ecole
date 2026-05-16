// 1. Vos imports CSS habituels
import 'bootstrap/dist/css/bootstrap.min.css';
import '@fortawesome/fontawesome-free/css/all.min.css';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import 'datatables.net-bs5/css/dataTables.bootstrap5.min.css';
import 'datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css'; 
import './styles/app.css';

// 2. Initialisation Globale de jQuery (Indispensable en premier)
import $ from 'jquery';
window.$ = window.jQuery = $;

// 3. Librairies tierces
import 'bootstrap';
import '@fortawesome/fontawesome-free/js/all.js';
import Chart from 'chart.js/auto';
import 'jquery.easing';
import 'slick-carousel';

// 4. SOLUTION RADICALE POUR DATATABLES & FIXEDHEADER
// Au lieu d'importer les versions "-bs5" qui s'entre-tuent, on charge le cœur
// et on applique manuellement l'extension sur l'instance jQuery globale.
import DataTable from 'datatables.net';
import 'datatables.net-bs5'; 

// On force l'extension FixedHeader à se greffer manuellement sur le cœur
import fixedHeader from 'datatables.net-fixedheader';
fixedHeader(window, $);

// On rend accessible globalement au cas où d'autres scripts le cherchent
window.DataTable = DataTable;

// 5. Stimulus
import './bootstrap';

// 6. Votre code d'initialisation
$(document).ready(function() {
    if ($('#dataTable').length) {
        $('#dataTable').DataTable({
            pageLength: 25,
            order: [[0, 'desc']],
            fixedHeader: true, // Désormais parfaitement reconnu !
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/fr-FR.json'
            }
        });
    }
});
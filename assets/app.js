import './styles/app.css';

// 1. Imports CSS (Laissez Webpack gérer les fichiers sources si possible)
import 'bootstrap/dist/css/bootstrap.min.css';
import '@fortawesome/fontawesome-free/css/all.min.css';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import 'datatables.net-bs5/css/dataTables.bootstrap5.min.css';

// 2. JS - Importez Bootstrap proprement
// "bootstrap" seul suffit car le package.json pointe déjà vers le bundle avec Popper
import 'bootstrap'; 

// 3. jQuery & Plugins
import $ from 'jquery';
import 'slick-carousel';
import DataTable from 'datatables.net-bs5';

// Rendre jQuery global pour les plugins à l'ancienne
window.$ = window.jQuery = $;

// 4. Initialisation
$(document).ready(function() {
    if ($('#dataTable').length > 0) {
        $('#dataTable').DataTable();
    }
})

// Start Stimulus
import './bootstrap';
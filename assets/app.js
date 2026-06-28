// ==========================================
// 1. CSS & TRADUCTION
// ==========================================
import 'bootstrap/dist/css/bootstrap.min.css';
import '@fortawesome/fontawesome-free/css/all.min.css';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import 'datatables.net-bs5/css/dataTables.bootstrap5.min.css';
import 'datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css';
import './styles/app.css';

import frTranslation from 'datatables.net-plugins/i18n/fr-FR.json';

// ==========================================
// 2. JQUERY (Configuration Globale)
// ==========================================
import $ from 'jquery';
window.$ = window.jQuery = global.$ = global.jQuery = $;

// ==========================================
// 3. LIBRAIRIES TIERS
// ==========================================
import 'bootstrap';
import '@fortawesome/fontawesome-free/js/all.js';
import 'chart.js/auto';
import 'jquery.easing';
import 'slick-carousel';

// ==========================================
// 4. DATATABLES (Syntaxe auto-exécutable)
// ==========================================
// On importe le cœur et les extensions. Elles vont détecter d'elles-mêmes le window.$ global.
import DataTable from 'datatables.net-bs5';
import 'datatables.net-fixedheader-bs5';

// ==========================================
// 5. STIMULUS
// ==========================================
import './bootstrap';

// ==========================================
// 6. INITIALISATION
// ==========================================
$(document).ready(function () {
    const table = $('#tableactif');

    if (table.length) {
        // Sous les versions récentes, on initialise directement via la variable DataTable importée
        new DataTable('#tableactif', {
            pageLength: 25,
            order: [[0, 'desc']],
            fixedHeader: true,
            language: frTranslation
        });
    }
});
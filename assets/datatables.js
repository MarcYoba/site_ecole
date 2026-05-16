import $ from 'jquery';
import 'datatables.net';
import 'datatables.net-bs5'; // Changé de bs4 à bs5
import 'datatables.net-bs5/css/dataTables.bootstrap5.css'; 

// Initialisation globale
$(document).ready(function() {
    $('.datatable').DataTable();
});
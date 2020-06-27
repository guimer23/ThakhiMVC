
<!-- jQuery  -->
    <script src="public/js/jquery-3.2.1.min.js"></script>
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/metisMenu.min.js"></script>
    <script src="public/js/waves.min.js"></script>
    <script src="public/js/jquery.slimscroll.min.js"></script>

    <!-- Required datatable js -->
    <script src="public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="public/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="public/plugins/peity-chart/jquery.peity.min.js"></script>

    <script src="public/pages/jquery.ana_customers.inity.js"></script>

    <!-- Required dropify js -->
    <script src="public/plugins/dropify/js/dropify.min.js"></script>
    <script src="public/pages/jquery.form-upload.init.js"></script>

    <script src="public/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="public/pages/jquery.analytics_dashboard.init.js"></script>

    

    <!-- App js -->
    <script src="public/js/app.js"></script>

   <script src="public/js/jquery.anexsoft-validator.js"></script>
   <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"></script>

<!-- Script para Validacion de Formularios -->
<script type="text/javascript">
(function() {
    'use strict';
    window.addEventListener('load', function() {
        var form = document.getElementById('needs-validation');
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                form.classList.add('was-validated');
                Swal.fire({
                    type: 'error',
                    title: 'Error!',
                    text: 'Tiene que llenar todo los campos!'
                });
                event.preventDefault();
                event.stopPropagation();
            } else if (form.checkValidity() === true) {
                event.preventDefault();
                form.classList.add('was-validated');                
                $(document).on('click', '#btn-submit', function(e) {                    
                    Swal.fire({
                        type: 'success',
                        title: 'Muy Bien!',
                        text: 'Se guardo con éxito!'
                    }).then(function(result) {
                        var dato = form[0];
                        form.submit();
                    });                    
                });
            }
        }, false);
    }, false);
})();
</script>
<!-- Script para paginacion de tablas en español -->
<script>
$(function(e) {
    $('#TablaUsuario').DataTable({
        "aLengthMenu": [
            [5, 10, 25, 50, 100, -1],
            [5, 10, 25, 50, 100, "Todos"]
        ],
        "bDestroy": true,
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningun dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "?ltimo",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
});
</script>
</body>

</html>
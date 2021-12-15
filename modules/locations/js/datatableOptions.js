$(document).ready(function(){
  $('#datatable').DataTable({
    "language": {
      "lengthMenu": "Mostrando _MENU_ registros por página",
        "zeroRecords": "No se encontraron datos",
        "info": "Página _PAGE_ de _PAGES_",
        "infoEmpty": "No se encontraron registros",
        "infoFiltered": "(Datos filtrados de _MAX_ registros)",
        "search": "Buscar: ",
        "paginate": {
          "next": ">",
          "previous": "<"
      }
    },
    "lengthMenu": [[5, 10, 15, 20, -1], [5, 10, 15, 20, "Todo"]]
  });
});

$(document).on('init.dt', function(e, settings){
  $('#loader').addClass("d-none");
  $('#datatable').removeClass("d-none");
  $('#add').removeClass("d-none");
});
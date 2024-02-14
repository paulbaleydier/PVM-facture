function initDataTable() {
    $('#dtFactures').DataTable({
        language: {
          url: "//cdn.datatables.net/plug-ins/1.10.21/i18n/French.json" 
        },
        order: [[0, 'desc']], 
        paging: true,
        lengthChange: false,
        searching: true,
        info: true, 
        responsive: true,
        select: {
            style: 'multi',
            selector: 'td:not(:last-child)' 
          },
        initComplete: function () {
            var api = this.api();
  
            api.columns().indexes().flatten().each(function (i) {
                var column = api.column(i);
                var select = $('<select class="form-control select2"><option value=""></option></select>')
                  .appendTo($('.filter-container').eq(i))
                  .on('change', function () {
                    var val = $.fn.dataTable.util.escapeRegex($(this).val());
      
                    column
                      .search(val ? '^' + val + '$' : '', true, false)
                      .draw();
                  });
      
                column.data().unique().sort().each(function (d, j) {
                  select.append('<option value="' + d + '">' + d + '</option>');
                });
              });
  
          }
      });
}
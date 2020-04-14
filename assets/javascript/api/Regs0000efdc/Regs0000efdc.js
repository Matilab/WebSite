"uses strict";
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }
var DTRegs0000efdc =
function () {
  function DTRegs0000efdc() {
    _classCallCheck(this, DTRegs0000efdc);
    this.init();
  }

  _createClass(DTRegs0000efdc, [{
    key: "init",
    value: function init() {
      this.table = this.table();
      this.searchRecords();
      this.selecter();
      this.clearSelected();
      this.table.buttons().container().appendTo('#dt-buttons').unwrap();
    }
  }, {
    key: "table",
    value: function table() {
      return $('#myTable').DataTable({
        dom: "<'text-muted'Bi>\n        <'table-responsive'tr>\n        <'mt-4'p>",
        buttons: ['copyHtml5', {
          extend: 'print', 
          autoPrint: false
        }],
        language: {
          paginate: {
            previous: '<i class="fa fa-lg fa-angle-left"></i>',
            next: '<i class="fa fa-lg fa-angle-right"></i>'
          }
        },
        autoWidth: false,
        ajax: url_get,
        deferRender: true,
        order: [14, 'desc'],
        columns: [
  				{
					data: '0000_Id',
					className: 'col-checker align-middle',
					orderable: false,
					searchable: false
				},
				{
					data: '0000_Reg',
					className: 'align-middle',
				},
				{
					data: '0000_Ref311Id',
					className: 'align-middle',
				},
				{
					data: '0000_TipoEscrit',
					className: 'align-middle',
				},
				{
					data: '0000_IndSitEsp',
					className: 'align-middle',
				},
				{
					data: '0000_NumRecAnterior',
					className: 'align-middle',
				},
				{
					data: '0000_DtIni',
					className: 'align-middle',
				},
				{
					data: '0000_DtFin',
					className: 'align-middle',
				},
				{
					data: '0000_IndNatPj',
					className: 'align-middle',
				},
				{
					data: '0000_IndAtiv',
					className: 'align-middle',
				},
				{
					data: '0000_PessoaJuridicaId',
					className: 'align-middle',
				},
				{
					data: '0000_UsersId',
					className: 'align-middle',
				},
				{
					data: '0000_Reg0001EFDCId',
					className: 'align-middle',
				},
				{
					data: '0000_Regs0110EFDCId',
					className: 'align-middle',
				},
				{
					data: '0000_Id',
					className: 'align-middle text-right',
					orderable: false,
					searchable: false
				}

        ],
        columnDefs: [{
          targets: 0,
          render: function render(data, type, row, meta) {
            return `
            <div class='custom-control custom-control-nolabel custom-checkbox'>
              <input type='checkbox' class='custom-control-input' name='selectedRow[]' id='p${row['0000_Id']}' value='${row['0000_Id']}'>
              <label class='custom-control-label' for='p${row['0000_Id']}'></label>
            </div>`;
          }
        },{
          targets: 14,
          render: function render(data, type, row, meta) {
            return `
            <a class='btn btn-sm btn-icon btn-secondary' href='${url_upd}/${data}'>
              <i class='fa fa-pencil-alt'></i>
            </a>
            <a class='btn btn-sm btn-icon btn-secondary' href='#${data}'>
              <i class='far fa-trash-alt'></i>
            </a>`;
          }
        }]
      });
    }
  },{
    key: 'setbtnFloatedAdd',
    value: function setbtnFloatedAdd(){
      var self = this;
      $('#btnFloatedAdd').on('click', function(e){
        self.table.ajax.reload();
      })
    }
  },{
    key: "searchRecords",
    value: function searchRecords() {
      var self = this;
      $('#table-search, #filterBy').on('keyup change focus', function (e) {
        var filterBy = $('#filterBy').val();
        var hasFilter = filterBy !== '';
        var value = $('#table-search').val(); // clear selected rows

        if (value.length && (e.type === 'keyup' || e.type === 'change')) {
          self.clearSelectedRows();
        } // reset search term


        self.table.search('').columns().search('').draw();

        if (hasFilter) {
          self.table.columns(filterBy).search(value).draw();
        } else {
          self.table.search(value).draw();
        }
      });
    }
  }, {
    key: "getSelectedInfo",
    value: function getSelectedInfo() {
      var $selectedRow = $('input[name="selectedRow[]"]:checked').length;
      var $info = $('.thead-btn');
      var $badge = $('<span/>').addClass('selected-row-info text-muted pl-1').text("".concat($selectedRow, " selected")); // remove existing info

      $('.selected-row-info').remove(); // add current info

      if ($selectedRow) {
        $info.prepend($badge);
      }
    }
  }, {
    key: "selecter",
    value: function selecter() {
      var self = this;
      $(document).on('change', '#check-handle', function () {
        var isChecked = $(this).prop('checked');
        $('input[name="selectedRow[]"]').prop('checked', isChecked); // get info

        self.getSelectedInfo();
      }).on('change', 'input[name="selectedRow[]"]', function () {
        var $selectors = $('input[name="selectedRow[]"]');
        var $selectedRow = $('input[name="selectedRow[]"]:checked').length;
        var prop = $selectedRow === $selectors.length ? 'checked' : 'indeterminate'; // reset props

        $('#check-handle').prop('indeterminate', false).prop('checked', false);

        if ($selectedRow) {
          $('#check-handle').prop(prop, true);
        } // get info


        self.getSelectedInfo();
      });
    }
  }, {
    key: "clearSelected",
    value: function clearSelected() {
      var self = this; // clear selected rows

      $('#myTable').on('page.dt', function () {
        self.clearSelectedRows();
      });
      $('#clear-search').on('click', function () {
        self.clearSelectedRows();
      });
    }
  }, {
    key: "clearSelectedRows",
    value: function clearSelectedRows() {
      $('#check-handle').prop('indeterminate', false).prop('checked', false).trigger('change');
    }
  }]);

  return DTRegs0000efdc;
}();

$(document).on('theme:init', function () {
  new DTRegs0000efdc();
});

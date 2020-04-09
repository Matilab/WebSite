"uses strict";
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }
var DTRegs0111efdc =
function () {
  function DTRegs0111efdc() {
    _classCallCheck(this, DTRegs0111efdc);
    this.init();
  }

  _createClass(DTRegs0111efdc, [{
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
        order: [1, 'asc'],
        columns: [
  				{
					data: '0111_Id',
					className: 'col-checker align-middle',
					orderable: false,
					searchable: false
				},
				{
					data: '0111_Reg',
					className: 'align-middle',
				},
				{
					data: '0111_RecBruNCumTribMI',
					className: 'align-middle',
				},
				{
					data: '0111_RecBruNCumNaoTribMI',
					className: 'align-middle',
				},
				{
					data: '0111_RecBruNCumExp',
					className: 'align-middle',
				},
				{
					data: '0111_RecBruNCum',
					className: 'align-middle',
				},
				{
					data: '0111_RecBruNCumTotal',
					className: 'align-middle',
				},
				{
					data: '0111_Id',
					className: 'align-middle text-right',
					orderable: false,
					searchable: false
				}

        ],
        columnDefs: [{
          targets: 8,
          render: function render(data, type, row, meta) {
            return `
            <a class='btn btn-sm btn-icon btn-secondary' href='#${data}'>
              <i class='fa fa-pencil-alt'></i>
            </a>
            <a class='btn btn-sm btn-icon btn-secondary' href='#${data}'>
              <i class='far fa-trash-alt'></i>
            </a>`;
          }
        }]
      });
    }
  }, {
    
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

  return DTRegs0111efdc;
}();

$(document).on('theme:init', function () {
  new DTRegs0111efdc();
});

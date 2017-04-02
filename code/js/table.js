/*
 *
 *Table.js
 *
 *By Mauricio Besson
 */

function Table(){
    var DEBUG = true;
    var self = this;
    this.data = {header: [], body: [[], [], []]};
    this.viewId = '';//Solo colocar texto ya que el "#" ya esta añadido
    this.border = "solid";
    this.selectedRowLocalStorageKey = "";
    this.indexPositionColumn = 0;//para indicarle de que columna tomar el index
                                // por defecto es cero ya que tomaria el id o code de cada elento

    //GETTER y SETTER
    this.setData = function(data){
        self.data = data;
    };

    this.getData = function(){
        return self.data;
    };

    this.setViewId = function(viewId){
        self.viewId = viewId;
    };

    this.getViewId = function(){
        return self.viewId;
    };

    this.setSelectedRowLocalStorageKey = function(selectedRowLocalStorageKey){
        self.selectedRowLocalStorageKey = selectedRowLocalStorageKey + '-' + self.viewId;
    };

    this.getSelectedRowLocalStorageKey = function(){
        return self.selectedRowLocalStorageKey;
    };

    this.setIndexPositionColumn = function(indexPositionColumn){
        self.indexPositionColumn = indexPositionColumn;
    };

    this.getIndexPositionColumn = function(){
        return self.indexPositionColumn;
    };
    //Fin GETTER y SETTER
    //Genera la tabla con datos cargados
    this.genetateHtml = function(){
        var html = '';

        html += '<table class="table table-bordered table-hover">';
        html += '<thead>'
        html += '   <tr>';

        var lengthHesder = self.data.header.length;

        for (var i = 0; i < lengthHesder; i++) {
            html += '       <th>';
            html += self.data.header[i];
            html += '       </th>';
        }
        html += '   </tr>';
        html += '</thead>';
        html += '<tbody>';

        if (self.data.body.length > 0) {

            var lengthBody = self.data.body.length;

            for (var x = 0; x < lengthBody; x++) {
                html += '<tr data-index="' + self.data.body[x][self.getIndexPositionColumn()] + '">';
                for (var j = 0; j < self.data.body[x].length; j++) {
                    html += '   <td>';
                    html += self.data.body[x][j];
                    html += '   </td>';
                }
                html += '</tr>';
            }
        }
        html += '</tbody>';
        html += '</table>';

        if (DEBUG)
            console.log(html);
        return html;
    };

    this.show = function(){
        $('#' + self.viewId).append(self.genetateHtml());
    };

    this.refresh = function(){
        $('#' + self.viewId).append(self.genetateHtml());
    };


    this.storageSelectedRow = function(value){
        var key = self.getSelectedRowLocalStorageKey();

        if (typeof (Storage) != "undefined")
        {
            localStorage.setItem(key, value);
        }
    };

    this.clearStorageSelectedRow = function(){ 
        var key = self.getSelectedRowLocalStorageKey();

        if (typeof (Storage) != "undefined")
        {
            localStorage.setItem(key, "");
        }
    };

    this.saveSelectedRow = function(){
        $('#' + self.viewId + ' table tr').on('click', function(){
            self.storageSelectedRow($(this).attr('data-index'));
            self.getSelectedRow();
            $('#' + self.viewId + ' table tr.table-row-selected').removeClass('table-row-selected');
            $(this).addClass('table-row-selected');
        });
    };

    this.getSelectedRow = function(){
        if (typeof (Storage) != "undefined")
        {
            return localStorage.getItem(self.getSelectedRowLocalStorageKey());
        }
    };


    //Metodo principal
    this.init = function(){
        self.setSelectedRowLocalStorageKey("SelectedRow");
        self.clearStorageSelectedRow();
        self.show();
        self.saveSelectedRow();
    };

};


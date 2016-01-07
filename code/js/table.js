/*
 *
 *Table.js
 *
 *By Mauricio Besson
 */

function Table() {
    var self = this;
    this.data = {header: [], body: [[], [], []]};    
    this.viewId = '';//Solo colocar texto ya que el "#" ya esta añadido
    this.border = "solid";

    //GETTER y SETTER
    this.setData = function (data) {
        self.data = data;
    };

    this.getData = function () {
        return self.data;
    };

    this.setViewId = function (viewId) {
        self.viewId = viewId;
    };

    this.getViewId = function () {
        return self.viewId;
    };
    //Fin GETTER y SETTER


  
    //Genera la tabla con datos cargados
    this.genetateHtml = function () {
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
                html += '<tr>';
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


        return html;
    };

    this.show = function () {       
        $('#' + self.viewId).append(self.genetateHtml());
    };

    this.refresh = function () {
        $('#' + self.viewId).append(self.genetateHtml());
    };

};


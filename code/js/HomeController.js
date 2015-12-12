/* 
 * Controlador javascript de la vista del home
 * 
 */

function HomeController() {
    this.tableSelector;
    this.searchSelector;
    this.dataTable = [];

    var self = this;

    this.getTableSelector = function () {
        return self.tableSelector;
    };

    this.setTableSelector = function (tableSelector) {
        self.tableSelector = tableSelector;
    };

    this.getSearchSelector = function () {
        return self.searchSelector;
    };

    this.setSearchSelector = function (searchSelector) {
        self.searchSelector = searchSelector;
    };

    this.getDataTable = function(){
        return self.dataTable;
    };
    this.setDataTable = function(data){
        self.dataTable = data; 
    }; 
    
    this.init = function(){
    };
}















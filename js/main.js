$(document).ready(function () {
    console.log('ready');
    $('#submit').on('click', function (event) {
        event.preventDefault();
        var myTable = $('#myTable');
        myTable.empty();
        myTable.html(
            "<i class='fa fa-circle-o-notch fa-spin fa-3x fa-fw'></i><span class='sr-only'>Loading...</span>");
        var items = $('#ore').val();
        $.post('calculator.php', {items: items}, function (data, status) {
            $('#myTable').empty();
            console.log(data, status);
            data = JSON.parse(data);
            var itemsTable = data.itemsTable;
            var grandTotal = data.grandTotal;
            var buyBackRate = data.buyBackRate;
            $('#grandTotal').text(grandTotal);
            $('#buyBackRate').text(buyBackRate);
            var mydata = eval(itemsTable);
            var table = $.makeTable(mydata);
            $(table).appendTo('#myTable');
        });
        $.makeTable = function (mydata) {
            var table = $('<table id="itemsTable" border=1 class="table table-striped">');
            var tblHeader = "<tr>";
            for (var k in mydata[0]) tblHeader += "<th>" + k + "</th>";
            tblHeader += "</tr>";
            $(tblHeader).appendTo(table);
            $.each(mydata, function (index, value) {
                var TableRow = "<tr>";
                $.each(value, function (key, val) {
                    TableRow += "<td>" + val + "</td>";
                });
                TableRow += "</tr>";
                $(table).append(TableRow);
            });
            return ($(table));
        };
    })
});

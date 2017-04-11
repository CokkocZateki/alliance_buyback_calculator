$(document).ready(function () {
    const computeBuybackButton = $('#computeBuybackButton');
    const resultTable = $('#myTable');
    const grandTotalSpan = $('#grandTotal');
    const buyBackRateSpan = $('#buyBackRate');
    let itemsTable, grandTotal, buyBackRate, mydata, table, items;
    console.log('ready');
    computeBuybackButton.on('click', function (event) {
        event.preventDefault();
        console.log('submit clicked');
        $('#results').show();
        $('#grandTotalLabel').show();
        $('#buyBackRateLabel').show();
        resultTable.empty();
        resultTable.html(
            "<i class='fa fa-circle-o-notch fa-spin fa-3x fa-fw'></i><span class='sr-only'>Loading...</span>");
        items = $('#ore').val();
        $.post('calculator.php', {items: items}, function (data, status) {
            resultTable.empty();
            console.log(data, status);
            data = JSON.parse(data);
            itemsTable = data.itemsTable;
            grandTotal = data.grandTotal;
            buyBackRate = data.buyBackRate;
            grandTotalSpan.text(grandTotal);
            buyBackRateSpan.text(buyBackRate);
            mydata = eval(itemsTable);
            table = $.makeTable(mydata);
            $(table).appendTo('#myTable');
        });
        $.makeTable = function (mydata) {
            let table = $('<table id="itemsTable" border=1 class="table table-striped">');
            let tblHeader = "<tr>";
            for (let k in mydata[0]) tblHeader += "<th>" + k + "</th>";
            tblHeader += "</tr>";
            $(tblHeader).appendTo(table);
            $.each(mydata, function (index, value) {
                let TableRow = "<tr>";
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

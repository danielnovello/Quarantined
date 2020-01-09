<div id="Quarantined-tab"></div>
<h2 data-i18n="Quarantined.title"></h2>

<table>
    <tr>
        <th>Item 1</th>
        <td id="Quarantined_item1"></td>
    </tr>
    <tr>
        <th>Item 2</th>
        <td id="Quarantined_item2"></td>
    </tr>
</table>

<script>
$(document).on('appReady', function(){
    $.getJSON(appUrl + '/module/Quarantined/get_data/' + serialNumber, function(data){
        $('#Quarantined_item1').text(data['item1'])
        $('#Quarantined_item2').text(data['item2'])
    });
});
</script>

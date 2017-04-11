$(document).ready(function (event) {
    $('#configForm').on('submit', function (event) {
        event.preventDefault();
        console.log('ready');
        let config = $('#configForm').serializeArray();
        config = JSON.stringify(config);
        console.log(config);
        $.ajax('updateConfig.php', {
            'data': config,
            'type': 'POST',
            'processData': false,
            'success': function (data) {
                console.log(data)
            },
            'contentType': 'application/json'
        });
    });
    $('#memberManagementForm').on('submit', function (event) {
        event.preventDefault();
        let characterName = $('#characterName').val();
        let characterId = $('#characterId').val();
        let createUrl = "memberManagement.php?action=create&characterName="+characterName+"&characterId="+characterId;
        console.log('adding %s', characterName);
        $.post(createUrl, function (status, response) {
            $.notify('Added new member', 'success');
            console.log(status, response);
        });
    });
    $('.delete').on('click', function (event) {
        event.preventDefault();
        let characterId = $(this).data('characterid');
        console.log('deleting %s', characterId);
        let deleteUrl = "memberManagement.php?action=delete&characterId="+characterId;
        $.post(deleteUrl, function (status, response) {
            console.log(status, response);
            $.notify('Deleted', 'success');
        })
    })
});

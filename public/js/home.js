// 
// Created by Olivier Brassard on 13-07-18.
// Copyright © 2018 Olivier Brassard. All rights reserved.
//

$(document).ready(function () {
    $('#btn-start').click(function () {
        $('#pan-1').fadeOut(function () {
            $('#pan-2').fadeIn();
        });
    });

    $('ul.clickable li').click(function () {
        $id = $(this).attr('id');
        window.location.replace('./'+$id)
    })
});
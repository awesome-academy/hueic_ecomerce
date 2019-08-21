window._ = require('lodash');
const feather = require('feather-icons');
feather.replace();
try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (e) {}

$(document).ready(function(){
    $("#logout").click( function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "logout",
            async: false,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function(data){
                if(data.success){
                    window.location.href = '/';
                }
            }
        })
    });
})

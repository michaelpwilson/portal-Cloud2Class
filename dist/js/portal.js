$(document).ready(function() {
$(window).bind('beforeunload', function(){
  return 'Are you sure you want to leave?';
});

$( ".panel-exit" ).click(function() {
$(".panel-body").hide();
$(".panel-footer").hide();
$(".panel-exit").hide();
$(".panel-open").show();
$(".panel-heading .dropdown-toggle").hide();
});
$( ".panel-open" ).click(function() {
$(".panel-body").show();
$(".panel-footer").show();
$(".panel-exit").show();
$(".panel-open").hide();
$(".panel-heading .dropdown-toggle").show();
});
$(".show-sidebar").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("active");
    });

       	$('#loadfiles').click(function(){
        $.get('showfiles.php', function(data) {
            $("#files-modal #files").html(data);
    });
       	$("#files-modal").modal();
});
});
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'blueimp.github.io' ?
                '//jquery-file-upload.appspot.com/' : 'server/php/';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text('congrats').appendTo('#files');
                $("#files:has(p)").addClass("has-paragraph");
if ($("#files").is(".has-paragraph")) {
        $.get('showfiles.php', function(data) {
            $("#files-modal #files").html(data);
    });
       	$("#files-modal").modal();
}
  });
     	},
	progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
	}
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});


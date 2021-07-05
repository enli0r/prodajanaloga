var receiver_id = '';
var my_id = "{{ Auth::id() }}";


$(document).ready(function(){
    $('.user').click(function () {
        $('.user').removeClass('active');
        $(this).addClass('active');
        $(this).find('.pending').remove();
        receiver_id = $(this).attr('id');
        $.ajax({
            type: "get",
            url: "chat/message/" + receiver_id, // need to create this route
            data: "",
            cache: false,
            success: function (data) {
                $('#messages').html(data);
                scrollToBottomFunc();
            }
        });
    });
});



function show() {
    $(".chatbot").hide();
    $(".content-body").show();

}

function send() {
    const socket = io("http://localhost:80");
    var message = {
        msg: $("#txtMessage").val(),
        userId: 1,
    };
    socket.emit('admin-send-message', message);
}
$(document).ready(function () {

    $(".content-body").hide();

});
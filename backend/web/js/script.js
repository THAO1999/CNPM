
$(document).ready(function () {
    $(".content-messenger").hide();
});

const socket = io("http://localhost:4000")
socket.on('server-send-clients', function (data) {
    var userFromID = parseInt($("#txtUserToID").val());
    var roomID = parseInt($("#txtUserFromID").val()) + parseInt($("#txtUserToID").val());
    if (roomID === data.roomID) {
        if (data.userToID == userFromID) {
            $(".scroll").append("<div class='content-chat'> <p class='content-chat-To' >" + data.msg + "</p> </div>")
        }
        else {
            $(".scroll").append("<div class='content-chat'> <p class='content-chat-From'>" + data.msg + "</p> </div>")
        }
    }

});


function showUsersName() {
    //  $(".content-messenger").hide();
    $(".list-user").show();
    $.ajax({
        url: "student/show-user",
        dataType: 'json',
    }).done(function (students) {
        $(".list-user-content").empty();
        students.forEach((student) => {
            $(".list-user-content").append(
                '<a class="dropdown-item d-flex align-items-center" href="#"onclick="showChatBot(' + '' + student.id + '' + ')" >' +
                '<div class="dropdown-list-image mr-3" >' +
                '<img src="http://localhost/SE04-Nhom27.1/frontend/web/../../uploads/' + student.imageFile + '"' +
                'alt="Avatar"class="rounded-circle"' +
                '></img>' +
                ' <div class="status-indicator bg-success"></div>' +
                '</div> <div>' +
                '<div class="small' + student.id + '">' + student.name +
                '</div>' +
                '</div>' +
                '</a>'
            )
        });
    }).fail(function (xhr, textStatus, errorThrown) {
        console.log(000);
    });
}

function sendMessage() {
    // get name of user send data
    var roomID = parseInt($("#txtUserFromID").val()) + parseInt($("#txtUserToID").val());
    var UserToID = parseInt($("#txtUserToID").val());
    var UserFromID = parseInt($("#txtUserFromID").val());
    var d = new Date();
    var data = {
        msg: $("#txtMessage").val(),
        time: d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds(),
        roomID: roomID,
        userToID: UserToID,
        userFromID: UserFromID,
    };
    socket.emit('client-send-message', data);
    $("#txtMessage").val('');
    $.ajax({
        url: "student/save-massage",
        type: "post",
        data: {
            roomID: data.roomID,
            userToID: data.userToID,
            userFromID: data.userFromID,
            msg: data.msg,
        },
        success: function (result) {
            console.log(result);
        },
    });
}

function showChatBot(userToId) {
    $(".content-messenger").show()

    var userName = $('.small' + userToId).text();
    // set name of user for default name admin
    $(".user-name").text(userName);

    // set name of user get data
    $("#txtUserToID").val(userToId);
    // get name of user send data
    var userFromId = $("#txtUserFromID").val();
    // create roomID
    var roomID = parseInt(userFromId) + parseInt(userToId);
    // request create room
    socket.emit('client-request-create-room', roomID);
}
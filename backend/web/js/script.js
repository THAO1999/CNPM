
$(document).ready(function () {
    $(".content-messenger").hide();
    // $("txtMessage").focusOut(function () {
    //     alert(444)
    // })
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
var count = 0;
var userFromID;
socket.on('server-notification-client', function (data) {
    count = 1;
    userFromID = data.userFromID;
});
function setCount() {

    var value_fact = (parseInt(userFromID) - 14) * 60 + 80;

    $('#notification-user' + userFromID).text(count);

    $('#notification-user' + userFromID).css({ top: value_fact + 'px' });
}
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
                '<b><span class="badge badge-danger badge-counter notification" id="notification-user' + student.id + '">'
                + '</span></b>' +
                '</div>' +
                '</a>'
            )
        });
        setCount();
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
        url: "student/save-message",
        type: "post",
        data: {
            roomID: data.roomID,
            userToID: data.userToID,
            userFromID: data.userFromID,
            msg: data.msg,
            _csrf: yii.getCsrfToken(),
        },
        success: function (result) {
            console.log(result);
        }, error: function (errormessage) {
            console.log(2222)
        }
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
    $.ajax({
        url: "student/get-data-message",
        type: "post",
        data: {
            roomID: roomID,
            _csrf: yii.getCsrfToken(),
        },
        success: function (result) {
            $(".scroll").empty();
            var messages = JSON.parse(result);
            var userFromID = parseInt($("#txtUserFromID").val());
            messages.forEach((message) => {
                if (message.user_id_to == userFromID) {
                    $(".scroll").append("<div class='content-chat'> <p class='content-chat-From' >" + message.content + "</p> </div>")
                }
                else {
                    $(".scroll").append("<div class='content-chat'> <p class='content-chat-To'>" + message.content + "</p> </div>")
                }
            });
        }, error: function (errormessage) {
            console.log(2222)
        }
    });


    socket.emit('client-request-create-room', roomID);
}

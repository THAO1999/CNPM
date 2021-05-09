
$(document).ready(function () {
  $(".list-user").hide();
  $(".content-body").hide();
  const socket = io("http://localhost:4000");
  $("#btnMessage").click(function () {
    var roomID = parseInt($("#txtUserFromID").val()) + parseInt($("#txtUserToID").val());
    var UserToID = parseInt($("#txtUserToID").val());
    var UserFromID = parseInt($("#txtUserFromID").val());
    var d = new Date();
    var data = {
      msg: $("#txtMessage").val(),
      time: d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds(),
      roomID: roomID,
      userToID: UserToID,
      userFromID: UserFromID
    };
    socket.emit('client-send-message', data);
    //client thông báo tin nhắn mới
    socket.emit('client-notification-new-message', data);
    $.ajax({
      url: "../message/save-message",
      type: "GET",
      contentType: "application/json; charset=utf-8",
      data: {
        roomID: data.roomID,
        userToID: data.userToID,
        userFromID: data.userFromID,
        msg: data.msg,
        _csrf: yii.getCsrfToken(),
      },
      success: function (messages) {

      }, error: function (errormessage) {
        console.log(2222)
      }
    });
    $("#txtMessage").val('');
  });
  socket.on('server-send-clients', function (data) {
    var userFromID = parseInt($("#txtUserFromID").val());
    var roomID = parseInt($("#txtUserFromID").val()) + parseInt($("#txtUserToID").val());
    if (roomID === data.roomID) {
      if (data.userToID == userFromID) {
        $(".scroll").append("<div class='content-chat'> <p class='content-chat-From' >" + data.msg + "</p> </div>")
      }
      else {
        $(".scroll").append("<div class='content-chat'> <p class='content-chat-To'>" + data.msg + "</p> </div>")
      }
    }
  });
});

// hien thi thong tin khach hang theo id_kh
function studentRegister(request_id, student_id, enterprise_id) {
  // goi ajax
  $.ajax({
    url: "detail-request-enterprise/student-register",
    type: "post",
    data: {
      studentID: student_id,
      requestID: request_id,
      enterpriseID: enterprise_id,
      _csrf: yii.getCsrfToken(),
    },
    success: function (result) {
      console.log(result);
      if (result) {
        swal("Chúc Mừng!", "Bạn đã đăng ki thành công!", "success");
      } else {
        swal("Rất tiếc", "Bạn đã đăng kí Job này rồi", "error");
      }
    },
  });
  setTimeout(function () {
    location.reload();
  }, 5000);
}

function showUsersName() {
  $(".list-user").show();
  $.ajax({
    url: "../message/show-user",
    dataType: 'json',
  }).done(function (students) {
    $(".list-user-content").empty();
    students.forEach((student) => {
      $(".list-user-content").append(
        '<div class="content-messenger" onclick="showChatBot(' + student.id + ',' + '\'' + student.name + '\'' + ')" > ' + // mất 3 tiếng để tim ra cách giải quyết
        '<a href="#">' +
        '<img src="http://localhost/SE04-Nhom27.1/frontend/web/../../uploads/' + student.imageFile + '"' +
        'alt="Avatar"class="image-user"' +
        ' style="width:50px; height:50px;border-radius:50%;margin-left:-120px"></img>' +
        '<span id="name-user' + student.id + '">' + student.name +
        '</span>' +
        ' <input type="hidden" id="txtUserToID' + student.id + '" value="' + student.name + '" />' +
        '</a>' +
        '</div>'
      )
    });
  }).fail(function (xhr, textStatus, errorThrown) {
    console.log(1111);
  });
}

function showChatBot(userToId, username) {
  //var userToId = student.userToId
  $(".list-user").hide();
  $(".content-body").show();
  $(".scroll").empty();
  // get name of user selected
  var userName = username;
  // set name of user for default name admin
  $("#user-name").text(userName);
  // set name of user get data
  $("#txtUserToID").val(userToId);
  // get name of user send data
  var userFromId = $("#txtUserFromID").val();
  // create roomID
  var roomID = parseInt(userFromId) + parseInt(userToId);
  // request create room
  $.ajax({
    url: "../message/get-data-message",
    type: "GET",
    data: {
      roomID: roomID,
      _csrf: yii.getCsrfToken(),
    },
    success: function (result) {
      console.log(1111)
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
      console.log('bug')
    }
  });
}

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
  // await sleep(2000);

  //  sleep(2000).then(() => {  });
}
// connect server


function showUsersName() {
  $(".list-user").show();
  $.ajax({
    url: "../message/show-user",
    dataType: 'json',
  }).done(function (students) {
    $(".list-user-content").empty();
    students.forEach((student) => {
      $(".list-user-content").append(
        '<div class="content-messenger" onclick="showChatBot(' + '' + student.id + '' + ')">' +
        '<a href="#">' +
        '<img src="http://localhost/SE04-Nhom27.1/frontend/web/../../uploads/' + student.imageFile + '"' +
        'alt="Avatar"class="image-user"' +
        ' style="width:50px; height:50px;border-radius:50%;margin-left:-120px"></img>' +
        '<span class="name-user' + student.id + '">' + student.name +
        '</span> ' +
        '</a>' +
        '</div>'
      )
    });
  }).fail(function (xhr, textStatus, errorThrown) {
    console.log(000);
  });
}

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
    $.ajax({
      url: "../message/save-message",
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
      },
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

function showChatBot(userToId) {
  const socket = io("http://localhost:4000")
  $(".list-user").hide();
  $(".content-body").show();
  // get name of user selected
  var userName;
  if ($('.name-user' + userToId).text()) {
    userName = $('.name-user' + userToId).text()
  }
  else {
    userName = "Admin"
  }
  // set name of user for default name admin
  $("#user-name").text(userName);
  // set name of user get data
  $("#txtUserToID").val(userToId);
  // get name of user send data
  var userFromId = $("#txtUserFromID").val();
  // create roomID
  var roomID = parseInt(userFromId) + parseInt(userToId);
  // request create room
  socket.emit('client-request-create-room', roomID);
}


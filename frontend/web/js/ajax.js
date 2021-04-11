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

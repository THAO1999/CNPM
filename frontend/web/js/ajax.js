// hien thi thong tin khach hang theo id_kh
function studentRegister(request_id, student_id) {

    // goi ajax
    $.ajax({
        url: 'detail-request-enterprise/student-register',
        type: 'post',
        data: { studentID: student_id, requestID: request_id, _csrf: yii.getCsrfToken() },
        dataType: 'json',
        success: function(result) {
        console.log(result)
            if (result)
            swal("Chúc Mừng!", "Bạn đã đăng ki thành công!", "success");
            else
                swal("Rất tiếc", "Bạn đã đăng kí Job này rồi", "error");
        },
    });
}
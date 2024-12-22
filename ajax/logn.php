<script type="text/javascript">
		$(document).ready(function() {
            $('#login_button').on('click', function() {
                this.disabled = true;
                error = '';
                mm_account = $("input[name='mm_account']").val();
                mm_password = $("input[name='mm_password']").val();
                captcha_word = $("input[name='captcha_word']").val();
                if (mm_account == '' || mm_account == null) {
                    error += '聯絡人\n';
                }
                if (mm_password == '' || mm_password == null) {
                    error += '聯絡電話\n';
                }
                if (captcha_word == '' || captcha_word == null) {
                    error += '驗證碼錯誤!\n';
                }
                if (error != '') {
                    this.disabled = false;
                    alert(error);
                    return;
                }
                location.href = 'member.php'; return;
                var btn = this;
                var btn_txt = $(this).text();
                $(this).text('處理中');
                $.ajax({
                    url: "route.php?func=login",
                    type: "POST",
                    dataType: "json",
                    data: new FormData($('#login_form')[0]),
                    contentType: false,
                    processData: false,
                    cache: false,
                    timeout: 5000,
                    error: function() {
                        $(btn).text(btn_txt);
                        btn.disabled = false;
                        alert('目前系統忙碌中，請稍後再試!');
                    },
                    success: function(json) {
                        $(btn).text(btn_txt);
                        btn.disabled = false;
                        if (json.success) {
                            alert(json.msg);
                            if (json.go) parent.window.location.replace(json.go);
                        } else {
                            alert("送出失敗!" + json.msg);
                            // location.reload();
                        }
                    }
                });
                return false;
            });
        });
	</script>
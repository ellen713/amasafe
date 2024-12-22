<script type="text/javascript">
		$(document).ready(function() {
            $('#coop_button').on('click', function() {
                this.disabled = true;
                error = '';
                company = $("input[name='company']").val();
                name = $("input[name='name']").val();
                phone = $("input[name='phone']").val();
                email = $("input[name='email']").val();
                coop = $("select[name='coop']").val();
                message = $("textarea[name='message']").val();
                captcha_word = $("input[name='captcha_word']").val();
                if (name == '' || name == null) {
                    error += '您的姓名\n';
                }
                if (email == '' || email == null) {
                    error += '聯絡電話 \n';
                }
                if (email == '' || email == null) {
                    error += '電子信箱 \n';
                }
                if (message == '' || message == null) {
                    error += '詢問內容\n';
                }
                if (captcha_word == '' || captcha_word == null) {
                    error += '驗證碼錯誤!\n';
                }
                if (error != '') {
                    this.disabled = false;
                    alert(error);
                    return;
                }
                location.href = 'index.php'; return;
                var btn = this;
                var btn_txt = $(this).text();
                $(this).text('處理中');
                $.ajax({
                    url: "route.php?func=coop",
                    type: "POST",
                    dataType: "json",
                    data: new FormData($('#coop_form')[0]),
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
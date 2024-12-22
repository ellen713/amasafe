<script>
        $('#forget').on('click', function(){
            error ='';
            mm_mail = $("input[name=mm_mail]").val();
            captcha_word = $("input[name=captcha_word]").val();
            
            if(mm_mail==''){error +='請輸入信箱\n';}
            if (captcha_word == '' || captcha_word == null) {
                    error += '驗證碼錯誤!\n';
                }
            if(error!=''){alert(error);return;}
            $.ajax({
                url:"route.php?func=forget",
                type:"POST",
                dataType:"json",
                data:{
                    mm_mail  : mm_mail,
                    captcha_word : captcha_word,
                    mm_edit  : "forget",
                    f:'msgForm'
                },
                timeout:5000,
                error:function(){
                    alert('目前系統忙碌中，請稍後再試。');
                },
                    success:function(json)
                    {
                        alert(json.msg);
                        if (json.go) window.location.replace(json.go);
                    }
            });
            return false;
        });
    </script>
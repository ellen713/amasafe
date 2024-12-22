<script src="js/tw-city.js"></script> 
    <script>
        var def_pay_city = '';
        var def_pay_county = '';
        var pay_city = '<option value="">請選擇</option>';
        area.counties.forEach(function(i){
            var selected = (i == def_pay_city) ? 'selected':'';
            pay_city+= '<option value="'+i+'" '+selected+'>'+i+'</option>';
        });
        $('#pay_city').html(pay_city);
        if (def_pay_county != '') {
            var pay_county = '<option value="">請選擇</option>';
            var cid = $('#pay_city')[0].selectedIndex - 1;
            var districts = area.districts[cid];
            districts[0].forEach(function(i){
                var selected = (i == def_pay_county) ? 'selected':'';
                pay_county+= '<option value="'+i+'" '+selected+'>'+i+'</option>';   
            });
            $('#pay_county').html(pay_county);
            var zip = districts[1][$('#pay_county')[0].selectedIndex -1];
            $('#pay_zip').val(zip);
        }   
        $('#pay_city').on('change', function(){
            var pay_county = '<option value="">請選擇</option>';
            if (this.value != '') {
                var districts = area.districts[(this.selectedIndex - 1)];
                districts[0].forEach(function(i){
                    pay_county+= '<option value="'+i+'">'+i+'</option>';    
                });
            }
            $('#pay_zip').val('');
            $('#pay_county').html(pay_county);
        });
        $('#pay_county').on('change', function(){
            if (this.value != '') {
                var cid = $('#pay_city')[0].selectedIndex - 1;
                var zip = area.districts[cid][1][this.selectedIndex -1];
                $('#pay_zip').val(zip);
            }
        });

        var def_receive_city = '';
        var def_receive_county = '';
        var receive_city = '<option value="">請選擇</option>';
        area.counties.forEach(function(i){
            var selected = (i == def_receive_city) ? 'selected':'';
            receive_city+= '<option value="'+i+'" '+selected+'>'+i+'</option>';
        });
        $('#receive_city').html(receive_city);
        if (def_receive_county != '') {
            var receive_county = '<option value="">請選擇</option>';
            var cid = $('#receive_city')[0].selectedIndex - 1;
            var districts = area.districts[cid];
            districts[0].forEach(function(i){
                var selected = (i == def_receive_county) ? 'selected':'';
                receive_county+= '<option value="'+i+'" '+selected+'>'+i+'</option>';   
            });
            $('#receive_county').html(receive_county);
            var zip = districts[1][$('#receive_county')[0].selectedIndex -1];
            $('#receive_zip').val(zip);
        }   
        $('#receive_city').on('change', function(){
            var receive_county = '<option value="">請選擇</option>';
            if (this.value != '') {
                var districts = area.districts[(this.selectedIndex - 1)];
                districts[0].forEach(function(i){
                    receive_county+= '<option value="'+i+'">'+i+'</option>';    
                });
            }
            $('#receive_zip').val('');
            $('#receive_county').html(receive_county);
        });
        $('#receive_county').on('change', function(){
            if (this.value != '') {
                var cid = $('#receive_city')[0].selectedIndex - 1;
                var zip = area.districts[cid][1][this.selectedIndex -1];
                $('#receive_zip').val(zip);
            }
        });
        function atm_show(v)
        {
            if (v == 'atm') {
                $('#atm_div').removeClass('hidden');
            } else {
                $('#atm_div').addClass('hidden');	
            }
        }
        atm_show($('input[name=payment]:checked').val());
        $('input[name=payment]').on('change', function(){
            atm_show(this.value);
            $.ajax({
                url: 'cart/cart_payment',
                type:"POST",
                data: {payment: this.value},
                dataType:'json',
                success: function(msg){
                    cart_list();
                },
                error:function(xhr, ajaxOptions, thrownError){ 
                    alert(xhr.status); 
                    alert(thrownError); 
                }
            });
        });
        function copy_addr(obj)
        {
            if (!obj.checked) return;
            $('#receive_name').val($('#memder_name').val());
            $('#receive_mobile').val($('#pay_mobile').val());
            $('#receive_email').val($('#pay_email').val());
            $('#receive_note').val($('#pay_note').val());
            $('#receive_city').val($('#pay_city').val());
            $('#receive_city').trigger('change');
            $('#receive_county').val($('#pay_county').val());
            $('#receive_county').trigger('change');
            $('#receive_addr').val($('#pay_addr').val());
        }
    </script>
<script type="text/javascript">
			$(document).ready(function() {
		$('#register_button').on('click', function() {
			this.disabled = true;
			error = '';
			mm_tel = $("input[name='mm_tel']").val();
			mm_password = $("input[name='mm_password']").val();
			confirm_mm_password = $("input[name='confirm_mm_password']").val();
			mm_name = $("input[name='mm_name']").val();
			mm_phone = $("input[name='mm_phone']").val();
			sex = $("input[name='sex']").val();
			captcha_word = $("input[name='captcha_word']").val();
			if (mm_tel == '' || mm_tel == null) {
				error += '請輸入電子信箱\n';
			}
			if (mm_password == '' || mm_password == null) {
				error += '請輸入密碼\n';
			}
			if (confirm_mm_password == '' || confirm_mm_password == null) {
				error += '請輸入確認密碼\n';
			}
			if (mm_name == '' || mm_name == null) {
				error += '請輸入姓名\n';
			}
			if (mm_phone == '' || mm_phone == null) {
				error += '行動電話\n';
			}
			if (sex == '' || sex == null) {
				error += '性別\n';
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
				url: "route.php?func=register",
				type: "POST",
				dataType: "json",
				data: new FormData($('#register_form')[0]),
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

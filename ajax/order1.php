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
            $('#receive_name').val($('#pay_name').val());
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
        $('#cart_order_button').on('click', function() {
            /*alert('資料送出中，請稍後!');*/
            error = '';
            pay_name = $("input[name='pay_name']").val();
            pay_mobile = $("input[name='pay_mobile']").val();
            pay_email = $("input[name='pay_email']").val();
            pay_zip = $("input[name='pay_zip']").val();
            pay_city = $("select[name='pay_city']").val();
            pay_county = $("select[name='pay_county']").val();
            pay_addr = $("input[name='pay_addr']").val();
            pay_note = $("textarea[name='pay_note']").val();
            receive_name = $("input[name='receive_name']").val();
            receive_mobile = $("input[name='receive_mobile']").val();
            receive_email = $("input[name='receive_email']").val();
            receive_zip = $("input[name='receive_zip']").val();
            receive_city = $("select[name='receive_city']").val();
            receive_county = $("select[name='receive_county']").val();
            receive_addr = $("input[name='receive_addr']").val();
            receive_note = $("textarea[name='receive_note']").val();
            invoice_type = $("input[name='invoice_type']:checked").val();
            invoice_id = $("input[name='invoice_id']").val();
            invoice_title = $("input[name='invoice_title']").val();
            payment = $("input[name='payment']:checked").val();
            if (pay_name == '' || pay_name == null) {
                error += '訂購人 姓名 必填\n';
            }
            if (pay_mobile == '' || pay_mobile == null) {
                error += '訂購人 聯絡電話 必填\n';
            }
            if (pay_email == '' || pay_email == null) {
                error += '訂購人 電子信箱 必填\n';
            }
            if (pay_zip == '' || pay_zip == null) {
                error += '訂購人 郵遞區號 必填\n';
            }
            if (pay_city == '' || pay_city == null) {
                error += '訂購人 縣市 必填\n';
            }
            if (pay_county == '' || pay_county == null) {
                error += '訂購人 鄉鎮 必填\n';
            }
            if (pay_addr == '' || pay_addr == null) {
                error += '訂購人 地址 必填\n';
            }
            if (receive_name == '' || receive_name == null) {
                error += '收件人 姓名 必填\n';
            }
            if (receive_mobile == '' || receive_mobile == null) {
                error += '收件人 聯絡電話 必填\n';
            }
            if (receive_email == '' || receive_email == null) {
                error += '收件人 電子信箱 必填\n';
            }
            if (receive_zip == '' || receive_zip == null) {
                error += '收件人 郵遞區號 必填\n';
            }
            if (receive_city == '' || receive_city == null) {
                error += '收件人 縣市 必填\n';
            }
            if (receive_county == '' || receive_county == null) {
                error += '收件人 鄉鎮 必填\n';
            }
            if (receive_addr == '' || receive_addr == null) {
                error += '收件人 地址 必填\n';
            }
            if (payment == '' || payment == null) {
                error += '付款方式 必填\n';
            }
            if (error != '') {
                alert(error);
                return;
            }
            $.ajax({
                url: "cart/cart_order",
                type: "POST",
                dataType: "json",
                data: {
                    pay_name: $("input[name='pay_name']").val(),
                    pay_mobile: $("input[name='pay_mobile']").val(),
                    pay_email: $("input[name='pay_email']").val(),
                    pay_zip: $("input[name='pay_zip']").val(),
                    pay_city: $("select[name='pay_city']").val(),
                    pay_county: $("select[name='pay_county']").val(),
                    pay_addr: $("input[name='pay_addr']").val(),
                    pay_note: $("textarea[name='pay_note']").val(),
                    receive_name: $("input[name='receive_name']").val(),
                    receive_mobile: $("input[name='receive_mobile']").val(),
                    receive_email: $("input[name='receive_email']").val(),
                    receive_zip: $("input[name='receive_zip']").val(),
                    receive_city: $("select[name='receive_city']").val(),
                    receive_county: $("select[name='receive_county']").val(),
                    receive_addr: $("input[name='receive_addr']").val(),
                    receive_note: $("textarea[name='receive_note']").val(),
                    invoice_type: $("input[name='invoice_type']:checked").val(),
                    invoice_id: $("input[name='invoice_id']").val(),
                    invoice_title: $("input[name='invoice_title']").val(),
                    payment: $("input[name='payment']:checked").val(),
                    f: 'msgForm'
                },
                timeout: 5000,
                error: function() {
                    alert('目前系統忙碌中，請稍後再試!');
                },
                success: function(json) {
                    if (json.success) {
                        if (json['go']) window.location.replace(json['go']);
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
$(document).ready(function(){
    $('#captcha_form').on('submit', function(event){
        event.preventDefault();
        if($('#captcha_form').val()==''){
            alert('Entre captcha code !');
            $('#register').attr('disabled', 'disabled');
            return false;
        }else{
            alert("form has been validated with captcha Code !");
            $('#captcha_form')[0].reset();
            $('#captcha-image').attr('src', 'http://localhost:7070/users/php/image.php');
        }   
    });
    $('#captcha_code').on('blur', function(){
        let code = $('captcha_code').val();
        if(code == ''){
            alert('captcha code');
            $('#registre').attr('disabled', 'disabled');
        }else{
            $.ajax({
                url:"check_code.php",
                method:"POST",
                data:{code:code},
                success:function(data){
                    if(data == 'success'){
                        $('#registre').attr('disabled', false);
                    }else{
                        $('#registre').attr('disabled', 'disabled');
                        alert('invalid code');
                    }
                }
            });
        }
    });
});
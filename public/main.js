$(function(){
    $("#save").on('submit',function(e){
        e.prevetDefaut();
        let name=$('#name').val();
        let surname=$('#surname').val();
        let patronymic=$('#patronymic').val();
        let login=$('#login').val();
        let email=$('#email').val();
        let password=$('#password').val();
        let password_confirm =$('#password_confirm').val();
            if(name.length<6){
                allert('Введите полное имя');
            }
        $.ajax({
            url:"/rerister",
            method:'post',
            data:{"name":name,"surname":surname,"patronymic":patronymic,"login":login,"email":email,"password":password,"password-confirm":password_confirm},
            dataType:'json',
            contentType:false,
            success:function(data){
                if(data.status==0){

                    alert("ты незарегился");
                }else{
                   
                    alert('Вы зареган');
                }
            
            }
            
        });
    });
});
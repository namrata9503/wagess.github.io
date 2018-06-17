$(function()
{
    $('#login').click(function(){

        var username=$('#username').val();
        var password=$('#password').val();

        $.post('login.php', {username:username, password:password})
        .done(function(data){
            if(data=='success'){
                window.location='show.php';
            }
            else{
                alert('invalid data')
            }
        })
    });
});

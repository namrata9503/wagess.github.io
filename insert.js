


    var form=$('#formid');
    $('#submit').click(function(){
        $.ajax({
            url: form.attr('action'),
            type:'post',
            data:$('#formid input').serialize(),
            success:function(data){
               // console.log(data);
              //alert("Registered Successfully..!!!");
            }
        });
    });
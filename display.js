
//show();
//  $(document).ready(function(){


    $('#show').click(function(){
  
        $.ajax({
            url:'display.php',
            type:'post',
          
            success:function(data){
                console.log(data);
                $('#response').html(data);
               // alert(data);
            }
        });
    
    });
//  });
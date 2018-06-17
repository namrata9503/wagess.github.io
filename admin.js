$('button').click(function(){

    $.getJSON('admin.json',function(obj){
        $.each(obj, function(key, value){
           var a= $('#name').val();
           if(a== value.name)
           {
            var u= $('#username').val();
            var p= $('#password').val();
            if(u==value.username && p== value.password)
            {
                window.location="list.php";
                console.log("success");

            }
            else{
                console.log("invalid");
            }

           }
         if(a!= value.name && u!=value.username && p!= value.password){
            // console.log("invalid data..");
            document.getElementById('data').innerHTML='invalid data..';
           }

          
        });
    });
});
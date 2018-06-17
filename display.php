<?php
 $servername = "localhost";
 $usernam = "root";
 $passwor = "";
 $dbname = "angular";
 
 // Create connection
 $conn =  mysqli_connect($servername, $usernam);
 mysqli_select_db($conn, $dbname);
 echo $dbname. "  " ;
 // Check connection
// if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }
    
    extract($_POST);
    $sql="select * from user";
    $query=mysqli_query($conn,$sql);

    if (mysqli_num_rows($query) > 0) {
        // output data of each row
        
        while($result = mysqli_fetch_array($query)) {?>
        <tr>
            <td><?php echo $result['id']?>&nbsp;&nbsp;<input name='row' type="checkbox" class="c" checked="checked" ></td>
            <td><?php echo $result['name']?></td>

            <td><?php echo $result['username']?></td>

            <!-- <td><?php echo $result['password']?></td> -->
            <td class="nr"><?php echo $result['salary']?></td>
            <td><input type="number"  min="1" class="num"> &nbsp;&nbsp;&nbsp;</td>
            <td class="total"> <?php echo $result['salary']?></td>

        </tr>


<?php
        }}
?>
<script>
$(function()
{
    $('.c').change(function(){
        var check=this.checked;
        if(!check){
            $(this).closest('tr').css("text-decoration", "line-through");
            $(this).closest('tr').css("background-color","#e0e0e0");
            $(this).closest('tr').find(":input:not(:first)").attr('disabled', !this.checked);
        }
        else{
            $(this).closest('tr').css("text-decoration", "none");
            $(this).closest('tr').css("background-color","white")
$(this).closest('tr').find(":input:not(:first)").attr('disabled', !this.checked);
        }       
        //$('tr').disabled();
        //alert(check);
    })
  
 
});
   
 //Click
 $(".num").change(function() {
    var $row = $(this).closest("tr");    // Find the row
    var $text = $row.find(".nr").text(); // Find the text
    var bla =  $(this).val();
        console.log(bla);
        var total= $text * bla;
        var t=$row.find(".total").text(total);
        //$('.total').closest("tr").text(total);


    console.log($text);
    console.log(t);


});
</script>
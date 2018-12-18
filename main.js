// function SubmitFormData() {
    // var fname = $("#fname").val();
    // var lname = $("#lname").val();
    // var tel = $("#tel").val();
    // var email = $("#mail").val();
    // var usertype = $("#user").val();
    // var username = $("#username").val();
    // var passwd = $("#password").val();
//     $.post("queries_handle.php", { fname: fname, lname: lname, email: email, phone: tel, type: usertype, name: username, pswd: passwd },
//     function(data) {
// 	 $('#results').html(data);
// 	 $('#admin-form')[0].reset();
//     });
// }
$(document).ready(function() {

    $('#submit').click(function(){
        $.post("pages/admin/new_user.php",{
            fname: $('#fname').val(),
            lname: $('#lname').val(),
            phone: $('#tel').val(),
            email: $('#mail').val(),
            type: $('#user').val(),
            name: $('#username').val(),
            passwd: $('#password').val()
        },function(data){
            
            $('#admin-notify').html(data).show();
            $('#fname').val('');
            $('#lname').val('');
            $('#tel').val('');
            $('#mail').val('');
            $('#user').val('');
            $('#username').val('');
            $('#password').val('');
            $('#admin-notify').html(data).hide(3000);
        });

    });

});
$(document).ready(function(){
    setInterval(function(){
        $('#admin-data').load('pages/admin/select_user.php')},500);
});
$(document).ready(function() {
    $('#drv_submit').click(function(){
        $.post("pages/driver/new_driver.php",{
            fname: $('#drvfname').val(),
            lname: $('#drvlname').val(),
            phone: $('#drvtel').val(),
            permit: $('#drvpermit').val(),
            plate_num: $('#drvcarnumber').val()
        },function(data){
            
            $('#driver-notify').html(data).show();
            $('#drvfname').val('');
            $('#drvlname').val('');
            $('#drvtel').val('');
            $('#drvpermit').val('');
            $('#drvcarnumber').val('');
            $('#driver-notify').html(data).hide(5000);
        });
    });
});
$(document).ready(function(){
    setInterval(function(){
        $('#driver-data').load('pages/driver/select_driver.php'); 
    },500);
});

$(document).ready(function() {
    $('#psubmit').click(function(){
        $.post("pages/parent/new_parent.php",{
            fname: $('#pfname').val(),
            lname: $('#plname').val(),
            phone: $('#ptel').val(),
            email: $('#pmail').val(),
            village: $('#pvillage').val()
        },function(data){
            
            $('#parent-notify').html(data).show();
            $('#pfname').val('');
            $('#plname').val('');
            $('#ptel').val('');
            $('#pmail').val('');
            $('#pvillage').val('');
            // $('#parent-notify').html(data).hide(5000);
        });
    });

});
$(document).ready(function(){  
    $('#chsubmit').click(function(){
        $.post("pages/child/new_child.php",{
            fname: $('#chfname').val(),
            lname: $('#chlname').val(),
            school: $('#chschool').val(),
            level: $('#chclass').val(),
            parent: $('#chparent').val(),
            village: $('#chvillage').val()
        },function(data){
            
            $('#child-notify').html(data).show();
            $('#chfname').val('');
            $('#chlname').val('');
            $('#chschool').val('');
            $('#chclass').val('');
            $('#chparent').val('');
            $('#chvillage').val('');
            // $('#parent-notify').html(data).hide(5000);
        });
    });
});
$(document).ready(function(){
    // setInterval(function(){
        $('.chparent').load('pages/other/select/select_parent.php'); 
    // },500);
});
$(document).ready(function(){
    // setInterval(function(){
        $('.district').load('pages/other/select/select_district.php'); 
    // },500);
});
$(document).ready(function(){
    // setInterval(function(){
        $('.division').load('pages/other/select/select_division.php'); 
    // },500);
});
$(document).ready(function(){
    // setInterval(function(){
        $('.cell').load('pages/other/select/select_village.php'); 
    // },500);
});
$(document).ready(function(){
    // setInterval(function(){
        $('.school').load('pages/other/select/select_school.php'); 
    // },500);
});
$(document).ready(function(){
    setInterval(function(){
        $('#parent-data').load('pages/parent/select_parent.php'); 
    },500);
});
$(document).ready(function(){
    setInterval(function(){
        $('#child-data').load('pages/child/select_child.php'); 
    },500);
});
$(document).ready(function() {
    $('#close').click(function(){
            $('.alert').hide();
    });
});










































// var ajax = new XMLHTTPRequest();
// var method = "GET";
// var url = "pages/admin/select_user.php";
// var asynchronous = "true";
// ajax.open(method,url,asynchronous);
// //send request
// ajax.send();
// //receive response
// ajax.onreadystatechange = function(){
//     if(this.readyState == 4 && this.status == 200){
//         // alert(this.responseText);
//         var data = JSON.parse(this.responseText);
//         var html = ""
//         for(var a = 0; a < data.length; a++){
//             var firstName = data[a].fname;
//             var lastName = data[a].lname;
//             var phone = data[a].telephone;
//             html +="<tr>";
//             html+= "<td>"+firstName+"<td>";
//             html+= "<td>"+lastName+"<td>";
//             html+= "<td>"+phone+"<td>";
//             html+="</tr>";
//         }
//         document.getElementById("admin-data").innerHTML = html;
//     }
// }
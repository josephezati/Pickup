$(document).ready(function() {
     $('#submit').click(function() {
        $.post("pages/admin/new_user.php", {
            fname: $('#fname').val(),
            lname: $('#lname').val(),
            phone: $('#tel').val(),
            email: $('#mail').val(),
            type: $('#user').val(),
            name: $('#username').val(),
            passwd: $('#password').val(),
            idschool: $('#userschool').val()
        }, function(data) {

            $('#admin-notify').html(data).show();
            $('#fname').val('');
            $('#lname').val('');
            $('#tel').val('');
            $('#mail').val('');
            $('#user').val('');
            $('#username').val('');
            $('#password').val('');
            // $('#admin-notify').html(data).fadeOut(3000);
        });

    });
     $('#drv_submit').click(function() {
        $.post("pages/driver/new_driver.php", {
            fname: $('#drvfname').val(),
            lname: $('#drvlname').val(),
            phone: $('#drvtel').val(),
            permit: $('#drvpermit').val(),
            plate_num: $('#drvcarnumber').val()
        }, function(data) {

            $('#driver-notify').html(data).show();
            $('#drvfname').val('');
            $('#drvlname').val('');
            $('#drvtel').val('');
            $('#drvpermit').val('');
            $('#drvcarnumber').val('');
            // $('#driver-notify').html(data).fadeOut(3000);
        });
    });
     $('#psubmit').click(function() {
        $.post("pages/parent/new_parent.php", {
            fname: $('#pfname').val(),
            lname: $('#plname').val(),
            phone: $('#ptel').val(),
            email: $('#pmail').val(),
            village: $('#pvillage').val()
        }, function(data) {

            $('#parent-notify').html(data).show();
            $('#pfname').val('');
            $('#plname').val('');
            $('#ptel').val('');
            $('#pmail').val('');
            $('#pvillage').val('');
            // $('#parent-notify').html(data).fadeOut(3000);
        });
    });
     $('#chsubmit').click(function() {
        $.post("pages/child/new_child.php", {
            fname: $('#chfname').val(),
            lname: $('#chlname').val(),
            school: $('#childschool').val(),
            level: $('#chclass').val(),
            parent: $('#childparent').val(),
            village: $('#chvillage').val()
        }, function(data) {

            $('#child-notify').html(data).show();
            $('#chfname').val('');
            $('#chlname').val('');
            $('#childschool').val('');
            $('#chclass').val('');
            $('#childparent').val('');
            $('#chdistrict').val('');
            $('#chdivision').val('');
            $('#chvillage').val('');
            // $('#child-notify').html(data).fadeOut(3000);
        });
    });
     $('#schoolsubmit').click(function() {
        $.post("pages/settings/system/new_school.php", {
            name: $('#idnewschool').val()
        }, function(data) {
            $('#school-notify').html(data).show();
            $('#idnewschool').val('');
            // $('#school-notify').html(data).fadeOut(3000);
        });
    });
     $('#divisionsubmit').click(function() {
        $.post("pages/settings/system/new_division.php", {
            dist: $('#sub_dist').val(),
            division: $('#subcty').val()
        }, function(data) {
            $('#division-notify').html(data).show();
            $('#sub_dist').val('');
            $('#subcty').val('');
        });
    });
     $('#villagesubmit').click(function() {
        $.post("pages/settings/system/new_village.php", {
            dist: $('#vil_dist').val(),
            division: $('#vil_sub').val(),
            village: $('#vil').val()
        }, function(data) {
            $('#village-notify').html(data).show();
            $('#vil_dist').val('');
            $('#vil_sub').val('');
            $('#vil').val('');
        });
    });
     $('.known-schools').load('pages/settings/system/select_school.php');

    /*========================Load data when window loads============================*/
    $('#admin-data').load('pages/admin/select_user.php');
    $('#driver-data').load('pages/driver/select_driver.php');
    $('.chparent').load('pages/other/select/select_parent.php');
    $('.district').load('pages/other/select/select_district.php');
    $('.division').load('pages/other/select/select_division.php');
    $('.cell').load('pages/other/select/select_village.php');
    $('.school').load('pages/other/select/select_school.php');

    /*========================Refresh page after every 5 seconds*/
    setInterval(function() {
        $('#admin-data').load('pages/admin/select_user.php');
        $('#driver-data').load('pages/driver/select_driver.php');
        $('#parent-data').load('pages/parent/select_parent.php');
        $('.user-accounts').load('pages/settings/administrator/select_users.php');
        $('.driver-data').load('pages/settings/driver/select_driver.php');
        $('.parent-account-data').load('pages/settings/parent/select_parent.php');
        $('.location-data').load('pages/settings/system/select_location.php');
        $('.child-data').load('pages/child/select_child.php');
    }, 5000);
    $('.alert').click(function() {
        $(this).hide();
    });
$('a[data-toggle="tab"]').on('show.bs.tab', function(e) {

        localStorage.setItem('activeTab', $(e.target).attr('href'));

    });
    var activeTab = localStorage.getItem('activeTab');

    if(activeTab){

        $('#myTab a[href="' + activeTab + '"]').tab('show');

    };






    
   
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
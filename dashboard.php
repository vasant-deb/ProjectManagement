<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Digidiya">
    <meta name="author" content="Digidiya">

    <title>Profile Digidiya</title>

    <!-- vendor css -->
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    
    <!-- azia CSS -->
    <link rel="stylesheet" href="css/azia.css">
     <link rel="stylesheet" href="css/custom.css">
     
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
<script src="js/cities.js"></script>


<style>


#calendar {
    width: 100%;
    margin: 0 auto;
}

.response {
    height: 60px;
}

.success {
    background: #cdf3cd;
    padding: 10px 60px;
    border: #c3e6c3 1px solid;
    display: inline-block;
    position: fixed;
    bottom: 0;
    right: 0;
}
</style>
  </head>
  <body class="az-body">
<?php 
session_start();

$db = mysqli_connect('localhost','nkbsatak_digiconsole','{7E*h*Ai#R}?','nkbsatak_digiconsole');

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
  $email=$_SESSION["sname"];
 $records = mysqli_query($db,"select * from users where email = '$email'"); // fetch data from database


 $fetch_data=mysqli_fetch_array($records);
  extract($fetch_data);

?>
    <div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="dashboard.php" class="az-logo"><img width="125px" src="images/logo.png"/></a>
          <a href="" id="azNavShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div>
        <!-- az-header-left 
        <div class="az-header-center">
          <input type="search" class="form-control" placeholder="Search for anything...">
          <button class="btn"><i class="fas fa-search"></i></button>
        </div> az-header-center -->
        <div class="az-header-right">
          <!-- <div class="az-header-message">
            <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
          </div>
         
          <div class="dropdown az-header-notification">
            <a href="" class="new"><i class="typcn typcn-bell"></i></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header mg-b-20 d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <h6 class="az-notification-title">Notifications</h6>
              <p class="az-notification-text">You have 2 unread notification</p>
              <div class="az-notification-list">
                <div class="media new">
                  <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                  <div class="media-body">
                    <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                    <span>Mar 15 12:32pm</span>
                  </div>
                </div>
                <div class="media new">
                  <div class="az-img-user online"><img src="https://via.placeholder.com/500x500" alt=""></div>
                  <div class="media-body">
                    <p><strong>Joyce Chua</strong> just created a new blog post</p>
                    <span>Mar 13 04:16am</span>
                  </div>
                </div>
                <div class="media">
                  <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                  <div class="media-body">
                    <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                    <span>Mar 13 02:56am</span>
                  </div>
                </div>
                <div class="media">
                  <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                  <div class="media-body">
                    <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                    <span>Mar 12 10:40pm</span>
                  </div>
                </div>
              </div>
              <div class="dropdown-footer"><a href="">View All Notifications</a></div>
            </div>
          </div><!-- az-header-notification -->
          <div class="" style="font-family: 'Yellowtail', cursive;color: goldenrod;font-size: 18px;"><img src="images/18.png" width="40px"> X <?=$rp;?></div>
          <div class="dropdown az-header-notification">
            <a href="" class="new"><i class="typcn typcn-bell"></i></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header mg-b-20 d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <h6 class="az-notification-title">Notifications</h6>
              <p class="az-notification-text">You have 2 unread notification</p>
              <div class="az-notification-list">
                <div class="media new">
                  <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                  <div class="media-body">
                    <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                    <span>Mar 15 12:32pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media new">
                  <div class="az-img-user online"><img src="https://via.placeholder.com/500x500" alt=""></div>
                  <div class="media-body">
                    <p><strong>Joyce Chua</strong> just created a new blog post</p>
                    <span>Mar 13 04:16am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                  <div class="media-body">
                    <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                    <span>Mar 13 02:56am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                  <div class="media-body">
                    <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                    <span>Mar 12 10:40pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </div><!-- az-notification-list -->
              <div class="dropdown-footer"><a href="">View All Notifications</a></div>
            </div><!-- dropdown-menu -->
          </div>
          
          <div class="dropdown az-profile-menu">
            <a href="" class="az-img-user"><img src="api/<?=$profile;?>" alt=""></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                  <img src="api/<?=$profile;?>" alt="">
                </div><!-- az-img-user -->
                <h6><?=$fullname;?></h6>
                <span><?=$designation;?></span>
              </div><!-- az-header-profile -->

              <a href="api/logout.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->

   
    <div class="az-content az-content-profile">
      <div class="container mn-ht-100p">
        <div class="az-content-left az-content-left-profile">

          <div class="az-profile-overview">
            <div class="az-img-user">
              <img src="api/<?=$profile;?>" alt="">
            </div><!-- az-img-user -->
            <div class="d-flex justify-content-between mg-b-20">
              <div>
                <h5 class="az-profile-name"><?=$fullname;?></h5>
                <p class="az-profile-name-text"><?=$designation;?></p>
              </div>
              <div class="btn-icon-list">
                <!--<button class="btn btn-indigo btn-icon"><i class="typcn typcn-plus-outline"></i></button>-->
                <a href="api/logout.php" class="btn btn-primary btn-icon"><i style="color:white;font-size: 30px;line-height: 28px" class="typcn typcn-power"></i></a>
              </div>
            </div>

            <div class="az-profile-bio">
             	<span class="secs"></span> seconds. 


            </div><!-- az-profile-bio -->

         
           

  <hr class="mg-y-30">
  
             <div class="az-content-label tx-13 mg-b-25">Contact Information</div>
                <div class="az-profile-contact-list">
                  <div class="media">
                    <div class="media-icon"><i class="icon ion-md-phone-portrait"></i></div>
                    <div class="media-body">
                      <span>Mobile</span>
                      <div><?=$phone;?></div>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="media-icon"><i class="icon ion-logo-slack"></i></div>
                    <div class="media-body">
                      <span>Slack</span>
                      <div><?=$slack;?></div>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="media-icon"><i class="icon ion-md-locate"></i></div>
                    <div class="media-body">
                      <span>Current Address</span>
                      <div><?=$address;?></div>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- az-profile-contact-list -->


          </div><!-- az-profile-overview -->

        </div><!-- az-content-left -->
        <div class="az-content-body az-content-body-profile">
          <nav class="nav az-nav-line">
            <a href="" class="nav-link active tab1" data-toggle="tab">Overview</a>
            <a href="" class="nav-link tab2"  data-toggle="tab">ID CARD</a>
            <a href="" class="nav-link tab3" data-toggle="tab">Daily Report</a>
            <a href="" class="nav-link tab4" data-toggle="tab">Tasks</a>
            <a href="" class="nav-link tab5" data-toggle="tab">Document Verification</a>
          </nav>

          <div class="az-profile-body">

          <div class="row mg-b-20" id="learnMore">
   <div class="col-md-6 col-xl-6">
      <div class="az-profile-view-chart">
         <?php 
            $email=$_SESSION["sname"];
            $records1 = mysqli_query($db,"select * from stats where email = '$email' order by id DESC Limit 5"); // fetch data from database
            $i=1;
            while($data1 = mysqli_fetch_array($records1))
            {
            
            $time = strtotime($data1['login_time']);
            
            $currentd = date('l d M Y',$time);
            
            $time1 = strtotime($data1['login_time']);
            
            $currentd1 = date('H : i : s a',$time1);
            
            $time2 = strtotime($data1['logout_time']);
            
            $currentd2 = date('H : i : s a',$time2);
            ?>
         <span class="date<?=$i;?>"><?=$currentd;?></span><span class="logintime">Login time : <?=$currentd1;?></span>
         <span class="logouttime">Logout time : <?=$currentd2;?></span><br>
         <?php $i++;} ?>
      </div>
   </div>
   <!-- col -->
   <div class="col-md-6 col-xl-6">
      <div id='calendar'></div>
   </div>
</div>
<!-- row -->
          
          
<div class="row mg-b-20" id="learnMore1">
   <div class="col-md-12 col-xl-12">
      <div class="az-profile-view-chart">
          
          <?php if($status==1) { ?>
          <div class="id-card-wrapper">
  <div class="id-card">
    <div class="profile-row">
      <div class="dp">
        <div class="dp-arc-outer"></div>
        <div class="dp-arc-inner"></div>
        <img src="api/<?=$profile;?>">
      </div>
      <div class="desc">
        <h1><?=$fullname;?></h1><br>
        <p>DOB: <?=$dob;?></p>
        <p>Phone No. : <?=$phone;?></p>
        <p>Emergency Phone No. : <?=$emergency_phone;?></p>
            <p>Designation: <?=$designation;?></p>
            
            <p>Blood Group : <?=$blood_group;?></p>
      </div>
    </div>
  </div>
</div>
          <?php } else{ ?>
          
         <form  method="post" action="api/idcard.php" id="idcard" enctype="multipart/form-data">
            <div class="card card-outline-secondary">
               <div class="card-body">
                  <div class="row mt-4">
                     <div class="col-sm-6 pb-3">
                        <label for="exampleFirst">Full Name</label> 
                        <input class="form-control"  name="fullname" id="fullname" value="<?=$fullname;?>" type="text" disabled>
                         <input class="form-control"  name="email" id="email" value="<?=$email;?>" type="hidden">
                     </div>
                     <div class="col-sm-6 pb-3">
                        <label for="exampleLast">DOB</label> 
                        <input class="form-control" id="exampleLast" name="dob" type="date" required>
                     </div>
                     <div class="col-sm-12 pb-3">
                        <label for="exampleCity">Address</label> <input class="form-control" id="exampleCity" name="address" type="text" required>
                     </div>
                     <div class="col-sm-4 pb-3">
                        <label for="exampleSt">State</label> 
                        <select onchange="print_city('state', this.selectedIndex);" id="sts"  class="form-control" name ="stt" class="form-control" required></select>
                     </div>
                     <div class="col-sm-4 pb-3">
                        <label for="exampleSt">City</label>
                        <select class="form-control custom-select" name="city"  id ="state" class="form-control" required></select>
                        <script language="javascript">print_state("sts");</script>
                     </div>
                     <div class="col-sm-4 pb-3">
                        <label for="exampleZip">Postal Code</label> 
                        <input class="form-control" id="exampleZip" name="pincode" type="text" required>
                     </div>
                     <div class="col-md-6 pb-3">
                        <label for="exampleAccount">Profile Picture</label>
                         <div id="preview"><img width="150px" src="api/uploads/placeholder-user.jpg" /></div><br>
                        <input id="uploadImage" type="file" accept="image/*" name="image" />
                       
                     </div>
                     <div class="col-md-6 pb-3">
                        <label for="exampleAccount">Emergency Phone</label> 
                        <input type="text" id="ephone" name="ephone" class="form-control"  onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57 || event.charCode == 43 || event.charCode == 45 || event.charCode == 0" minlength="10" maxlength="10" placeholder="10 Digit Mobile No." required>
                     </div>
                     <div class="col-sm-6 pb-3">
                        <label for="exampleCtrl">Joining Date</label> 
                        <input class="form-control" id="exampleCtrl" name="joindate" placeholder="" type="date" required>
                     </div>
                     <div class="col-sm-6 pb-3">
                        <label for="exampleAmount">Slack</label>
                        <div class="input-group">
                           <input class="form-control" id="exampleAmount" placeholder="" name="slack" type="text" required>
                        </div>
                     </div>
                     <div class="col-sm-5 pb-3">
                        <label for="exampleAccount">Account #</label> 
                        <input class="form-control" id="exampleAccount" name="account" placeholder="XXXXXXXXXXXXXXXX" type="text" required>
                     </div>
                     <div class="col-sm-3 pb-3">
                        <label for="exampleCtrl">IFSC #</label> 
                        <input class="form-control" id="exampleCtrl" name="ifsc" placeholder="0000" type="text" required>
                     </div>
                     <div class="col-sm-4 pb-3">
                        <label for="exampleAmount">Blood Group</label>
                        <div class="input-group">
                           <input class="form-control" id="exampleAmount" placeholder="O+" name="bloodgroup" type="text" required>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-footer">
                  <div class="float-right">
                     <input class="btn btn-secondary" type="reset" value="Cancel"> 
                     <input class="btn btn-primary" type="submit" value="Submit">
                  </div>
               </div>
            </div>
         </form>
         <?php } ?>
      </div>
   </div>
   <!-- col -->
</div>
<!-- row -->


 <div class="row mg-b-20" id="learnMore3">
   <div class="col-md-12 col-xl-12">
      <div class="az-profile-view-chart">
        
        <form method="post" action="api/workreport.php" id="workreport">
        <textarea class="form-control" name="message" rows="8">Your Today's Work Report</textarea>
        <br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
      </div>
   </div>
   <!-- col -->
  
</div>
<!-- row -->


<div class="row mg-b-20" id="learnMore4">
   <div class="col-md-12 col-xl-12">
<div class="az-profile-view-chart">
<div class="card p-3">
    
   <div class="card-block">
      <div class="light-font">
         
         <div class="list-group">
         
          <?php
       $query = mysqli_query($db,"SELECT * FROM tasks WHERE email = '".$_SESSION["sname"]."' ORDER BY id DESC");

    while($row = mysqli_fetch_array($query)){


      
        $style = '';
        if($row["task_status"] == 'yes')
        {
         $style = 'text-decoration: line-through';
        }
        echo '<h3>'.$row['project_name'].'</h3><a href="#" style="'.$style.'" class="list-group-item" id="list-group-item-'.$row["id"].'" data-id="'.$row["id"].'">'.$row["project_task_description"].'</a>';
      
      

    }
    
       ?>
         
         </div>
         
         
      </div>
      
   </div>
   
   <!-- Grid row -->
</div>
<!--MDB -->
 </div>
   </div>
   <!-- col -->
  
</div>

            <hr class="mg-y-40">
            <div class="mg-b-20"></div>

          </div><!-- az-profile-body -->
        </div><!-- az-content-body -->
      </div><!-- container -->
    </div><!-- az-content -->
<?php  mysqli_close($db); // Close connection ?>
    <div class="response"></div>
    <div class="az-footer">
      <div class="container">
        <span>&copy; 2021 Copyright All Rights Reserved</span>
       
      </div><!-- container -->
    </div><!-- az-footer -->

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/ionicons/ionicons.js"></script>
    <script src="lib/chart.js/Chart.bundle.min.js"></script>

    <script src="js/azia.js"></script>
    <script>
      $(function(){
 $('#learnMore1').hide(); 
  $('#learnMore3').hide(); 
   $('#learnMore4').hide(); 
$(".tab2").on('click', function(event){
		    $('#learnMore1').show(); 
		     $('#learnMore').hide(); 
		      $('#learnMore4').hide();
		      $('#learnMore3').hide(); 
});
$(".tab1").on('click', function(event){
		    $('#learnMore').show(); 
		     $('#learnMore1').hide(); 
		      $('#learnMore3').hide(); 
		       $('#learnMore4').hide();
});
$(".tab3").on('click', function(event){
		    $('#learnMore3').show(); 
		     $('#learnMore1').hide();
		     $('#learnMore').hide();
		      $('#learnMore4').hide();
});
$(".tab4").on('click', function(event){
		    $('#learnMore3').hide(); 
		     $('#learnMore1').hide();
		     $('#learnMore').hide();
		      $('#learnMore4').show();
});

      });
    </script>
    	<script type="text/javascript"> 
		var currSeconds = 0; 
		
		$(document).ready(function() { 

			/* Increment the idle time 
				counter every second */ 
			let idleInterval = 
				setInterval(timerIncrement, 1000); 

			/* Zero the idle timer 
				on mouse movement */ 
		
		}); 

		function resetTimer() { 

			/* Hide the timer text */ 
		
			
			
			currSeconds = 0; 
		} 

		function timerIncrement() {
		    
			currSeconds = currSeconds + 1; 

			/* Set the timer text to 
				the new value */ 
		 

    	document.querySelector(".secs") 
				.textContent = currSeconds;
				
			
	//var currSeconds1 = new Date(currSeconds * 1000).toISOString().substr(11, 8);
	
			/* Display the timer text */ 
		
		} 
		
		 
	</script> 
	<script type="text/javascript">
    window.onbeforeunload = function() {
        return "Dude, are you sure you want to leave? Think of the kittens!";
    }
</script>



<link rel="stylesheet" href="calendar/fullcalendar/fullcalendar.min.css" />
<script src="calendar/fullcalendar/lib/jquery.min.js"></script>
<script src="calendar/fullcalendar/lib/moment.min.js"></script>
<script src="calendar/fullcalendar/fullcalendar.min.js"></script>

<script>

$(document).ready(function () {
    var calendar = $('#calendar').fullCalendar({
        editable: true,
        events: "/calendar/fetch-event.php",
        displayEventTime: false,
        eventRender: function (event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        selectable: true,
        selectHelper: true,
        select: function (start, end, allDay) {
            var title = prompt('Event Title:');

            if (title) {
                var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

                $.ajax({
                    url: '/calendar/add-event.php',
                    data: 'title=' + title + '&start=' + start + '&end=' + end,
                    type: "POST",
                    success: function (data) {
                        displayMessage("Added Successfully");
                    }
                });
                calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                true
                        );
            }
            calendar.fullCalendar('unselect');
        },
        
        editable: true,
        eventDrop: function (event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url: '/calendar/edit-event.php',
                        data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                        type: "POST",
                        success: function (response) {
                            displayMessage("Updated Successfully");
                        }
                    });
                },
        eventClick: function (event) {
            var deleteMsg = confirm("Do you really want to delete?");
            if (deleteMsg) {
                $.ajax({
                    type: "POST",
                    url: "/calendar/delete-event.php",
                    data: "&id=" + event.id,
                    success: function (response) {
                        if(parseInt(response) > 0) {
                            $('#calendar').fullCalendar('removeEvents', event.id);
                            displayMessage("Deleted Successfully");
                        }
                    }
                });
            }
        }

    });
});

function displayMessage(message) {
	    $(".response").html("<div class='success'>"+message+"</div>");
    setInterval(function() { $(".success").fadeOut(); }, 1000);
}
</script>
<script>
$(function() {
	$("#workreport").on('submit', function(event) {
		debugger;
		var $form = $(this);		
		$.ajax({
			type: $form.attr('method'),
			url: $form.attr('action'),
			data: $form.serialize(),
			success: function() {
			    var message="Have a Good Day Bye !";
 		$(".response").html("<div class='success'>"+message+"</div>");
    setInterval(function() { $(".success").fadeOut(); }, 1000);			 
  			
			}
		});
		event.preventDefault();		 
	});
});
$(document).ready(function (e) {
 $("#idcard").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
         url: "/api/idcard.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
      {
    if(data=='invalid')
    {
     // invalid file format.
     $("#err").html("Invalid File !").fadeIn();
    }
    else
    {
     // view uploaded file.
     $("#preview").html(data).fadeIn();
     $("#idcard")[0].reset(); 
    }
    
       var message="Thankyou ! You will get your Id soon";
 		$(".response").html("<div class='success'>"+message+"</div>");
    setInterval(function() { $(".success").fadeOut(); }, 1000);	
    
    
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 }));
});

$(document).on('click', '.list-group-item', function(){
   var task_list_id = $(this).data('id');
   $.ajax({
    url:"update_task.php",
    method:"POST",
    data:{task_list_id:task_list_id},
    success:function(data)
    {
     $('#list-group-item-'+task_list_id).css('text-decoration', 'line-through');
    }
   })
  });
</script>
  </body>
</html>

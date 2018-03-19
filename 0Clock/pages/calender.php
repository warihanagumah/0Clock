<?php ob_start();
session_start();?>
<!DOCTYPE html>
<html>
 <head>
  <title>Calender for an event</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="http://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet" type="text/css">
    <link href="../assets/libraries/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/libraries/owl.carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" >
    <link href="../assets/libraries/colorbox/example1/colorbox.css" rel="stylesheet" type="text/css" >
    <link href="../assets/libraries/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/libraries/bootstrap-fileinput/fileinput.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/superlist.css" rel="stylesheet" type="text/css" >

    <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon.png">
  <script>
   
  $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    editable:true,
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay'
    },
    events: '../controller/loadbookingscontroller.php',
    selectable:true,
    selectHelper:true,
    select: function(start, end, allDay)
    {
     var name = prompt("Please enter your full name");
     var phone = prompt("please enter your phone number (eg +233543797123");
     var email = prompt("Please enter your email address");
     var title = prompt("please enter purpose of meeting");
     if(title && name && email && phone)
     {
      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
      $.ajax({
       url:"../controller/insertbookingcontroller.php",
       type:"POST",
       data:{title:title, start:start, end:end, phone:phone, email:email, name:name},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Appointment successfully booked");
       }
      })
     }
    },
    editable:true,
    eventResize:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"../controller/reschedulebookingcontroller.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function(){
       calendar.fullCalendar('refetchEvents');
       alert('Appointment succesfully rescheduled');
      }
     })
    },

    eventDrop:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"../controller/reschedulebookingcontroller.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function()
      {
       calendar.fullCalendar('refetchEvents');
       alert("Appointment succesfully rescheduled");
      }
     });
    },

    eventClick:function(event)
    {
     if(confirm("Are you sure you want to cancel this appointmemt?"))
     {
      var id = event.id;
      $.ajax({
       url:"../controller/deletebookingcontroller.php",
       type:"POST",
       data:{id:id},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Appointment successfully cancelled");
       }
      })
     }
    },

   });
  });
   
  </script>

 </head>
 <body>
  <?php include('../unsecure/processevent.php');?>
  <br/>
  <?php populatecalenderheader();?>
  <br/>
  <div class="container">
   <div id="calendar"></div><br><br>   
  </div>
 </body>
</html>

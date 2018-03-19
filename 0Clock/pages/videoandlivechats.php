<!DOCTYPE html>
<html>

<head>
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
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" >
    <!--<script type="text/javascript" src="http://cdn.peerjs.com/0/peer.js"></script>-->

    <title>zer0Clock - Video Call</title>
    <style type="text/css">
        a, span{font-size: 20px;}
    </style>
    <script type="text/javascript">
        var Peer = require('simple-peer')
        navigator.getUserMedia({video: true, audio: true}, function(stream){
          var peer = new Peer({
            initiator: location.hash === '#init',
            trickle: false,
            stream: stream
          })

          peer.on('signal', function (data) {
            document.getElementById('peerid').value = JSON.stringify(data)
          })

          document.getElementById('connect').addEventListener('click', function () {
            var receiverid = JSON.parse(document.getElementById('receiverid').value)
            peer.signal(receiverid)
          })

          document.getElementById('cancel').addEventListener('click', function () {
            peer.destroy([error])            
          })

          document.getElementById('chatSendBtn').addEventListener('click', function () {
            var message = document.getElementById('chatInput').value
            peer.send(message)
          })

          peer.on('data', function (data) {
            document.getElementById('messages').textContent += data + '\n'
          })

          peer.on('stream', function (stream) {
            var video = document.createElement('video')
            document.body.appendChild(video)

            video.src = window.URL.createObjectURL(stream)
            video.play()
          })
      }, function (error){
        console.error(error)
    })
    </script>
 

</head>

<body class="">
    
    <div class="container" style="padding-bottom:-600px;"><br>
        <a href="events.php"><-BACK</a><br>
        <a>your peerJs id is : <input type="text" id="peerid" name="receiverid" style="width: 40%; text-align: center; border-radius: 10%"><br>

        <a>Connect to peer :</a> 
        <input type="text" id="receiverid" name="receiverid" style="width: 30%; text-align: center; border-radius: 10%">
        <button id="connect" style="background-color:#66CDAA">connect</button>
        <button class="btn btn-info btn-sm initCall" id="cancel" style="background-color:red"><i class="glyphicon glyphicon-remove"></i></button>

        <div id="progBar" class="bar" style="width:0%;"></div>
        </div>
    </div><!-- /.container -->


    <div class="container-fluid chat-pane" style="padding-top: 380px;">
            <!-- CHAT PANEL-->
            <div class="row chat-window col-xs-12 col-md-4">
                <div class="">
                    <div class="panel panel-default chat-pane-panel">
                        
                        <div class="panel-body msg_container_base" id="chats"></div>
                        
                        <div class="panel-footer">
                            <span id="typingInfo"></span>
                            <div class="input-group">
                                <input id="chatInput" type="text" class="form-control input-sm chat_input" placeholder="Type message here...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-sm" id="chatSendBtn">Send</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CHAT PANEL -->
        </div>
                        
    <script src="../assets/js/jquery.js" type="text/javascript"></script>
    <script src="../assets/js/map.js" type="text/javascript"></script>

    <script src="../assets/libraries/bootstrap-sass/javascripts/bootstrap/collapse.js" type="text/javascript"></script>
    <script src="../assets/libraries/bootstrap-sass/javascripts/bootstrap/carousel.js" type="text/javascript"></script>
    <script src="../assets/libraries/bootstrap-sass/javascripts/bootstrap/transition.js" type="text/javascript"></script>
    <script src="../assets/libraries/bootstrap-sass/javascripts/bootstrap/dropdown.js" type="text/javascript"></script>
    <script src="../assets/libraries/bootstrap-sass/javascripts/bootstrap/tooltip.js" type="text/javascript"></script>
    <script src="../assets/libraries/bootstrap-sass/javascripts/bootstrap/tab.js" type="text/javascript"></script>
    <script src="../assets/libraries/bootstrap-sass/javascripts/bootstrap/alert.js" type="text/javascript"></script>

    <script src="../assets/libraries/colorbox/jquery.colorbox-min.js" type="text/javascript"></script>

    <script src="../assets/libraries/flot/jquery.flot.min.js" type="text/javascript"></script>
    <script src="../assets/libraries/flot/jquery.flot.spline.js" type="text/javascript"></script>

    <script src="../assets/libraries/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

    <script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing" type="text/javascript"></script>

    <script type="text/javascript" src="../assets/libraries/jquery-google-map/infobox.js"></script>
    <script type="text/javascript" src="../assets/libraries/jquery-google-map/markerclusterer.js"></script>
    <script type="text/javascript" src="../assets/libraries/jquery-google-map/jquery-google-map.js"></script>

    <script type="text/javascript" src="../assets/libraries/owl.carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="../assets/libraries/bootstrap-fileinput/fileinput.min.js"></script>

    <script src="../assets/js/superlist.js" type="text/javascript"></script>

</body>
</html>

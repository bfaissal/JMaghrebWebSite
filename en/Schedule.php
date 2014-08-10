<!DOCTYPE html>
<!-- saved from url=(0041)https://www.google.com/events/io/schedule -->
<html class=" js no-touch geolocation backgroundsize csstransforms csstransforms3d audio localstorage inlinesvg pointerevents webaudio mediaqueries getusermedia"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,target-densitydpi=160" name="viewport">
    <meta http-equiv="cleartype" content="on">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="keywords" content="event, google, i/o, programming, android, chrome, developers, moscone, san francisco">
    <meta property="og:title" content="Google I/O 2014">
    <meta property="og:description" content="Google I/O 2014 brings developers together for an immersive, two-day experience focused on exploring the next generation of technology. Join us online or in person June 25-26, 2014.">
    <meta property="og:image" content="/events/io/images/io.png">
    <script type="text/javascript">var sessionDetails;</script>
    <title>JMaghreb 2014 - Schedule</title>
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <script src="./Google I O 2014 - Schedule_files/modernizr.js"></script>
  <link type="text/css" rel="stylesheet" href="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/style.css"><script type="text/javascript" charset="utf-8" src="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/js/page_context.js"></script></head>
  
  <body class="schedule hoverable" data-google-drive-client-id="237695054204-umlfeaogsp53dibh6nc462fa2invrven.apps.googleusercontent.com" screen_capture_injected="true">
    <div class="details js-details -hide">
      <div class="details__dismiss js-scrim-dismiss-main" style="-webkit-user-select: none; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">&nbsp;</div>
      <div class="details__card js-details-card">&nbsp;</div>
    </div>

    <div class="toggle-basement js-basement" data-toggle-name="basement" data-direction="left">
      <style>
        #headerBar{
                        background-color: white;
            -webkit-box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 1px 10px rgba(0,0,0,.1);
            box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
        }
          
          @media (min-width: 1200px)
.container {
max-width: 1170px;
}
@media (min-width: 992px)
.container {
max-width: 970px;
}
@media (min-width: 768px)
.container {
max-width: 750px;
}
.container {
padding-right: 15px;
padding-left: 15px;
    padding-top: 20px;
margin-right: auto;
margin-left: auto;
}
        </style>
        
        <div id="headerBar" style="position:fixed; width:100%; z-index:1000;height:88px;">
            <div class="container" >
            <a class="navbar-brand" href="./" style="padding-top:20px;"><img src="images/main-logo.png?v_res_jmeagh=0.1" alt="Ashley website template" style="height:50px;"></a>
            <div style="display:inline;float right;margin-left: 20%;">
                <div style="display:inline;margin-left: 2%;<?php if($_GET['d']==1) {?>border-bottom: solid 3px;<?php } ?>padding-bottom: 10px;"><a href="schedule.php?d=1">Day 1</a></div>
                <div style="display:inline;margin-left: 2%;<?php if($_GET['d']==2) {?>border-bottom: solid 3px;<?php } ?>padding-bottom: 10px;"><a href="schedule.php?d=2">Day 2</a></div>
                <div style="display:inline;margin-left: 2%;<?php if($_GET['d']==3) {?>border-bottom: solid 3px;<?php } ?>padding-bottom: 10px;"><a href="schedule.php?d=3">Day 3</a></div>
            </div>
                </div>
        </div>
      <div class="wrapper js-basement-sibling" style="margin-top:88px;">
        
        <section class="section g-bg-white -schedule">
          <div class="row -full-height -gutterless-left -gutterless-right">
            <div class="schedule__col -left -width-3-4 -full-height" style="width:100%">
              <div class="schedule__list-wrapper">
                <ol class="schedule__list js-schedule-list"><!-- Day 1 -->
                  <div class="js-day-container">
                    <div >
                      
                    </div>
                    <li class="schedule__day -day-1 js-tabs-content js-day" data-tab-name="day-1">
                      
                      <ol class="day__timeslots">
                        
                        <?php
                                        $unparsed_json = file_get_contents("http://localhost:9000/acceptedTalksScheduler");
                                        $json_object = json_decode($unparsed_json,true);
                                        //print_r($json_object['speakers']);
                                        $h = -1;
                                        foreach($json_object['talks'] as $speaker){
                                            if($speaker['day']['value']==$_GET['d']){
                                            if($h != $speaker['from']['h']){
                                                if($h != -1 ){
                                        ?>
                      
                        
                        </div>
                        </li> 
                      <?php
                                        
                              } 
                                    ?>
                        <li class="day__timeslot js-timeslot js-sticky-container">
                          <div class="timeslot__label g-color-slate-grey js-timeslot-label js-sticky-element" style="position: absolute; top: 0px; width: 137px; height: 153px; overflow: hidden; display: block; z-index: 0; transform: matrix(1, 0, 0, 1, 0, 0); left: 0px;"><?php echo $speaker['from']['h']; ?><span></span></div>
                          <!-- Events -->
                          <div class="timeslot__events">
                              <?php } ?>
                            <a class="event js-event js-event-card   -code-lab -develop" data-toggle="modal" data-target="#<?php echo($speaker['_id']['$oid']); ?>" >
                              <div class="event__content">
                                <div class="event__title">
                                  <?php echo($speaker['title']); ?>
                                </div>
                                  <?php if($speaker['type']['value'] != 99){ ?>
                                  <div class="event__details">
                                  <div class="event__room -code-lab">
                                      <div><b>Speakers:</b></div> <ul>
                                      <?php 
                                            foreach($speaker['speakers'] as $tspeaker){
                                                echo "<li>".$tspeaker['fname']." ".$tspeaker['lname']."</li>";
                                            }
                                      ?> 
                                      </ul>
                                      </div>
                                </div>
                                <div class="event__details">
                                  <div class="event__room -code-lab">
                                      <b><?php echo($speaker['room']['label']); ?></b>, 
                                      from <?php echo($speaker['from']['h'].":".$speaker['from']['m']); ?>, 
                                      to <?php echo($speaker['to']['h'].":".$speaker['to']['m']); ?> 
                                      </div>
                                </div>
                                  <?php } ?>
                                <span class="event__pin icon -pin-grey js-schedule-pin" data-id="a40b31c3-ccfb-e311-903f-00155d5066d7" style="-webkit-user-select: none; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Pin</span>
                              </div>
                            </a>
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
            

                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                            
                            <?php 
                              if($h != $speaker['from']['h']){
                                                $h = $speaker['from']['h']
                              ?>
                             
                          <?php
                                        
                              } } }
                                    ?>
                          
                        <!-- Hour 10pm -->
                        
                          
                        
                        
                        
                        </ol>
                    </li>
                  </div></ol>
              </div>
            </div>

          </div>
        </section>
      </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="./Google I O 2014 - Schedule_files/libs.min.js"></script>
    <script src="./Google I O 2014 - Schedule_files/site.min.js"></script>
    <script>
     // io.init('schedule');
    </script>
    <script src="./Google I O 2014 - Schedule_files/autotrack.js"></script>
    
    

      
      
      
      
      
      
      
      
      
      
      
 <?php
                                        
                                        
                                        
                                        foreach($json_object['talks'] as $speaker){
                                            
                                        ?>
<!-- Modal -->
<div class="modal fade" style="z-index:10000" id="<?php echo($speaker['_id']['$oid']); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo($speaker['title']); ?></h4>
      </div>
      <div class="modal-body">
          <?php if($speaker['type']['value'] != 99){ ?>
          <div class="">   <b>Track</b>: Mobile, Web &amp; HTML5 <br/> <b>Type</b>: Conference session <br/> <b>Language</b>: French</div>
        <br/><b>Abstract</b>:
          <?php echo($speaker['abstract']); ?>
          <?php }else{ echo($speaker['abstract']); }?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      
      <?php } ?>
      
      
      
      
      
   <script>
      io.init('schedule');
    </script>   
      
      
      
</body></html>
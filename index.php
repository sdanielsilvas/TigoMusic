<!doctype html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=1280,height=720">
    <title> Videotemplate </title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="custom.css" />

    <!-- Template for every category element -->
    <script type="text/html" id="categoryTemplate">
      <div class="category-element"></div>
    </script> 

    <!-- Template for channel entries container element -->
    <script type="text/html" id="channelContainerTemplate">
      <div class="channel-container color-3"></div>
    </script>

    <!-- Template for video entry element on a channel list -->
    <script type="text/html" id="videoEntryTemplate">
      <div class="channel-entry video-element">
        <img class="video-element-thumb">
        <div class="video-element-title"></div>
        <div class="video-element-index"></div>
        <div class="video-element-play-icon"></div>
        <div class="video-element-duration"></div>
      </div>
    </script>

    <!-- Template for setting entry element on a channel list -->
    <script type="text/html" id="settingEntryTemplate">
      <div class="channel-entry setting-element">
        <div class="setting-center">
          <span class="setting-name"></span>
          <span class="setting-value"></span>
        </div>
      </div>
    </script>

    <!-- Template for search entry element on a channel list -->
    <script type="text/html" id="searchEntryTemplate">
      <div class="channel-entry search-element">
        <div class="search-center">
          <div class="search-text"></div>
        </div>
      </div>
    </script>

    <!-- Template for notification element -->
    <script type="text/html" id="notificationTemplate">
      <div class="notification-entry"></div>
    </script>
    
  </head>
  <body>
    <div id="main" class="color-4">
    
      <!-- Full screen video element defined bellow -->
      <video id="video"></video>

      <!-- First (select category) view defined bellow -->
      <div id="select-view">
        <div class="left-panel-border border-left"></div>
        <div id="left-panel" class="color-1">
          <div id="logo"></div>
          <div id="category-list-scroller">
            <div id="category-list"></div>
          </div>
        </div>
        <div class="left-panel-border border-right"></div>
        <div id="info-panel" class="hide">
          <div id="info-panel-title"></div>
          <div id="info-panel-desc"></div>
        </div>
        <div id="channel-panel"></div>
        <input id="search-input" maxlength="25">
      </div>
      <div id="notifications"></div>

      <!-- Full screen view for video defined bellow -->
      <div id="full-screen-view" class="hide">
          <div id="full-screen-title"></div>
          <div id="full-screen-progress">
            <div id="full-screen-progress-time"></div>
            <div id="full-screen-progress-indicator"></div>
            <div id="full-screen-progress-current-speed"></div>
            <div id="full-screen-progress-full-time"></div>
          </div>
          <div id="full-screen-buttons">
            <div id="full-screen-button-back"></div>
            <div id="full-screen-button-pause"></div>
            <!-- <div  id="full-screen-button-mute"></div> -->
            <div id="full-screen-button-favorite"></div>
            <div id="full-screen-button-show-info"></div>
            <div id="full-screen-button-prev"></div>
            <div id="full-screen-button-current">
              <div id="full-screen-category"></div>
              <div id="full-screen-category-index"></div>
            </div>
            <div  id="full-screen-button-next"></div>
          </div>
          <div id="full-screen-category-name"></div>
          <div id="full-screen-info" class="color-1">
            <div class="left-info-border"></div>
            <div id="full-screen-info-details" class="color-5"></div>
            <div id="full-screen-info-title" class="color-5"></div>
            <div id="full-screen-info-description"></div>
          </div>
      </div>
      

      <div id="overlay"></div>
      <!-- About page -->
      <div id="about-page-view">
        <strong id="about-title"></strong><br/>
        Version <span id="about-version"></span><br/>
        <span id="about-email"><b>Support: tvapps-support@opera.com</b></span><br/><br/>
        Copyright 2012 @ Opera Software ASA, licensed under the Creative Commons Attribution 3.0 Unported, available at http://creativecommons.org/licenses/by/3.0/<br/>
        Copyright 2012 by Steve Matteson, with the font name Open Sans,
        licensed under the Apache License Version 2.0, January 2004 available
        at http://www.apache.org/licenses/        
        <div class="back-button"> Back </div>
      </div>

    </div>
    


    <script type="text/javascript">
      // Define namespace
      window.VTNS = {}
    </script>
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lang.js"></script>
    <script type="text/javascript" src="js/core.js"></script>
    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
    <script type="text/javascript" src="js/channel.js"></script>
    <script type="text/javascript" src="js/exitChannel.js"></script>
    <script type="text/javascript" src="js/settingsChannel.js"></script>
    <script type="text/javascript" src="js/settingsModel.js"></script>
    <script type="text/javascript" src="js/aboutModel.js"></script>
    <script type="text/javascript" src="js/videoChannel.js"></script>
    <script type="text/javascript" src="js/videoModel.js"></script>
    <script type="text/javascript" src="js/searchChannel.js"></script>
    <script type="text/javascript" src="js/searchModel.js"></script>
    <script type="text/javascript" src="js/searchResultChannel.js"></script>
    <script type="text/javascript" src="js/favoriteChannel.js"></script>
    <script type="text/javascript" src="js/category.js"></script>
    <script type="text/javascript" src="js/categoryList.js"></script>
    <script type="text/javascript" src="js/fullScreenView.js"></script>
    <script type="text/javascript" src="js/videotemplate.js"></script>
    <script type="text/javascript" src="config.js"></script>
    
    <div class="modal fade" data-keyboard="false" data-backdrop="static" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Login</h4>
            </div>
            <div class="modal-body">
            <div class="row">
              <div class="col-md-3">
                <label>Usuario:</label>
              </div>
              <div class="col-md-9">
                <input id="userLogin" type="text" class="form-control">
              </div>
              <div class="col-md-3">
                <label>Contraseña:</label>
              </div>
              <div class="col-md-9">
                <input id="passwordLogin" type="password" class="form-control">
              </div>
            </div>
            </div>
            <div class="modal-footer">
              <button id="btnLogin" class="btn btn-success">Aceptar</button>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>

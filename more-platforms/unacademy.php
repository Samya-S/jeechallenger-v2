<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="eJQ_FkMeExR2nx8-heo_SbYFUYcrIijnIqdyCNARH6k" />
    <title>Unacademy | JEE Challenger</title>
    <link rel="icon" href="../images/jcicon.jpg" type="image/gif">
    <script type="text/javascript" src="../common.js"></script>
</head>

<body style="text-align: center;" class="headingimg" oncontextmenu="return false;">

    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script type="text/javascript" src="../common/dark-mode.js"></script>

    <header id="navbar">
        <div class="menu-toggle">
          <button class="NavOpenButton" onclick="toggleNavOpen()"><i class="fa fa-bars NavOpenButton" aria-hidden="true"></i></button>
        </div>
        <p>
          <a href="../home">
            <b>JEE Challenger</b>
          </a>
        </p>
        <nav>
          <div class="menu-toggle">
            <button class="NavCloseButton" onclick="toggleNavClose()">&times;</button>
          </div>
          <ul class="ul-class">
            <li><a href="../home"><b>Home</b></a></li>
            <li>
              <div class="dropdown">
                <button class="dropbtn">Materials<i class="rotate fa fa-caret-down"></i></button>
                <ul>
                  <div class="dropdown-content">
                    <li><a href="../materials/physics">Physics PDFs</a></li>
                    <li><a href="../materials/chemistry">Chemistry PDFs</a></li>
                    <li><a href="../materials/mathematics">Mathematics PDFs</a></li>
                    <li><a href="../materials/chapterwise-solved-pyqs">Chapterwise solved PYQs</a></li>
                    <li><a href="../materials/more-study-materials">More study materials</a></li>
                  </div>
                </ul>
              </div>
            </li>
            <li>
              <div class="dropdown">
                <button class="dropbtn">Officials links<i class="rotate fa fa-caret-down"></i></button>
                <ul>
                  <div class="dropdown-content">
                    <li><a href="../official-links/jee-main">JEE Main</a></li>
                    <li><a href="../official-links/jee-advanced">JEE Advanced</a></li>                
                  </div>
                </ul>
              </div>
            </li>
            <li>
              <div class="dropdown">
                <button class="dropbtn">More platforms<i class="rotate fa fa-caret-down"></i></button>
                <ul>
                  <div class="dropdown-content">
                    <li><a href="apnikaksha">Apni Kaksha</a></li>
                    <li><a href="physicswallah">Physics Wallah</a></li>
                    <li><a href="#" class="active">Unacademy</a></li>
                  </div>
                </ul>
              </div>
            </li>
          </ul>
        </nav>    
    
    </header>


    <div style="padding: 2%;">
        <div class="">
            <img class="thumbnail-img Uimg" src="../images/unacademy.jpg" style="float: left;" alt="" srcset="">
          <div style="padding: 2rem;">
            <div class="block"><h2>Unacademy App</h2><a href="https://play.google.com/store/apps/details?id=com.unacademyapp" target="_blank"><button class="button1">Click here</button></a></div>
            <div class="block"><h2>Official Website</h2><a href="https://unacademy.com/" target="_blank"><button class="button1">Click here</button></a></div>
          </div>
        </div>
    </div>

    <div style="padding: 2%; background-color: rgba(212, 212, 212, 0.26);">
        <div class="flex-container2">
          <div class="block"><h2>JEE YouTube Channel</h2><a href="https://www.youtube.com/c/UnacademyJEE" target="_blank"><button class="button1">Click here</button></a></div>
          <div class="block"><h2>JEE Live Daily</h2><a href="https://livedaily.me/jee" target="_blank"><button class="button1">Click here</button></a></div>
        </div>
        <div class="flex-container2">
          <div class="block"><h2>Atoms YouTube Channel</h2><a href="https://www.youtube.com/c/UnacademyAtoms" target="_blank"><button class="button1">Click here</button></a></div>
          <div class="block"><h2>Atoms Spreadsheet</h2><a href="https://livedaily.me/atoms" target="_blank"><button class="button1">Click here</button></a></div>
        </div>
    </div>


    <div style="padding: 2%;">
      <h1>Get Unacademy subscription</h1>
      <img src="../images/Unacademy-subscription.jpg" alt="" srcset="" style="max-width: 100%; padding: 2%;"><br>
      <a href="https://unacademy.com/goal/jee-main-and-advanced-preparation/TMUVD/subscribe?referral_code=PLUSX9K6W"  target="_blank"><button class="button2" style="font-size: 20px;">Subscribe Now</button></a>
  </div>

    <!-- <div style="padding: 2%;">
        <div class="flex-container">
          <div class="block"><h2>More Physics</h2><a><button class="button1" onclick="toggle_show_hide_p_Function()">Click here</button></a></div>
          <div class="block"><h2>More Chemistry</h2><a><button class="button1" onclick="toggle_show_hide_c_Function()">Click here</button></a></div>
          <div class="block"><h2>More Mathematics</h2><a><button class="button1" onclick="toggle_show_hide_m_Function()">Click here</button></a></div>
        </div>
    </div>
    
    <script>
      function toggle_show_hide_p_Function() {
        //show p
        var p = document.getElementById("toggle-show-hide-id-U_p");
        if (p.style.display === "none") {
          p.style.display = "block";
        } else {
          p.style.display = "none";
        }
        //hide others (c,m)
        var c = document.getElementById("toggle-show-hide-id-U_c");
        if (c.style.display === "block") {
          c.style.display = "none";
        }
        var m = document.getElementById("toggle-show-hide-id-U_m");
        if (m.style.display === "block") {
          m.style.display = "none";
        }
      }
      function toggle_show_hide_c_Function() {
        //show c
        var c = document.getElementById("toggle-show-hide-id-U_c");
        if (c.style.display === "none") {
          c.style.display = "block";
        } else {
          c.style.display = "none";
        }
        //hide others (p,m)
        var p = document.getElementById("toggle-show-hide-id-U_p");
        if (p.style.display === "block") {
          p.style.display = "none";
        }
        var m = document.getElementById("toggle-show-hide-id-U_m");
        if (m.style.display === "block") {
          m.style.display = "none";
        }
      }
      function toggle_show_hide_m_Function() {
        //show m
        var m = document.getElementById("toggle-show-hide-id-U_m");
        if (m.style.display === "none") {
          m.style.display = "block";
        } else {
          m.style.display = "none";
        }
        //hide others(p,c)
        var p = document.getElementById("toggle-show-hide-id-U_p");
        if (p.style.display === "block") {
          p.style.display = "none";
        }
        var c = document.getElementById("toggle-show-hide-id-U_c");
        if (c.style.display === "block") {
          c.style.display = "none";
        }
      }
    </script>

    <div id="toggle-show-hide-id-U_p" style="display: none; background-color: rgba(212, 212, 212, 0.2);">
      <div style="padding: 2%;"><p><h1 style="color: black; font-size: 3em; isolation: unset;">Unacademy Physics</h1></p></div>

      <div style="padding: 2%; background-color: rgba(212, 212, 212, 0.26);">
          <h1>Aman Dhattarwal</h1>
          <div class="flex-container2">
            <div class="block"><h2>Profile link</h2><a href="https://unacademy.com/@dhattarwalaman" target="_blank"><button class="button1">Click here</button></a></div>
            <div class="block"><h2>All special classes link</h2><a href="https://unacademy.com/@dhattarwalaman/courses?goal=all&type=special" target="_blank"><button class="button1">Click here</button></a></div>
          </div>
      </div>

      <div style="padding: 2%;">
          <h1>Neeraj Kumar Chaudhary</h1>
          <div class="flex-container2">
            <div class="block"><h2>Profile link</h2><a href="https://unacademy.com/@nkcsir" target="_blank"><button class="button1">Click here</button></a></div>
            <div class="block"><h2>All special classes link</h2><a href="https://unacademy.com/@nkcsir/courses?goal=all&type=special" target="_blank"><button class="button1">Click here</button></a></div>
          </div>
      </div>

      <div style="padding: 2%; background-color: rgba(212, 212, 212, 0.26);">
          <h1>Jayant Nagda</h1>
          <div class="flex-container2">
            <div class="block"><h2>Profile link</h2><a href="https://unacademy.com/@jayantnagda" target="_blank"><button class="button1">Click here</button></a></div>
            <div class="block"><h2>All special classes link</h2><a href="https://unacademy.com/@jayantnagda/courses?goal=TMUVD&type=special" target="_blank"><button class="button1">Click here</button></a></div>
          </div>
      </div>
    </div>


    <div id="toggle-show-hide-id-U_c" style="display: none; background-color: rgba(212, 212, 212, 0.2);">
      <div style="padding: 2%;"><p><h1 style="color: black; font-size: 3em; isolation: unset;">Unacademy Chemistry</h1></p></div>

      <div style="padding: 2%; background-color: rgba(212, 212, 212, 0.15);">
          <h1>Paaras Thakur</h1>
          <div class="flex-container2">
            <div class="block"><h2>Profile link</h2><a href="https://unacademy.com/@royalmaddy07" target="_blank"><button class="button1">Click here</button></a></div>
            <div class="block"><h2>All special classes link</h2><a href="https://unacademy.com/@royalmaddy07/courses?goal=all&type=special" target="_blank"><button class="button1">Click here</button></a></div>
          </div>
      </div>

      <div style="padding: 2%; background-color: rgba(212, 212, 212, 0.26);">
          <h1>Mohammad Kashif Alam</h1>
          <div class="flex-container2">
            <div class="block"><h2>Profile link</h2><a href="https://unacademy.com/@kcf521" target="_blank"><button class="button1">Click here</button></a></div>
            <div class="block"><h2>All special classes link</h2><a href="https://unacademy.com/@kcf521/courses?goal=all&type=special" target="_blank"><button class="button1">Click here</button></a></div>
          </div>
      </div>
    </div>


    <div id="toggle-show-hide-id-U_m" style="display: none; background-color: rgba(212, 212, 212, 0.2);">
      <div style="padding: 2%;"><p><h1 style="color: black; font-size: 3em; isolation: unset;">Unacademy Mathematics</h1></p></div>

      <div style="padding: 2%; background-color: rgba(212, 212, 212, 0.26);">
          <h1>Sameer Chincholikar</h1>
          <div class="flex-container2">
            <div class="block"><h2>Profile link</h2><a href="https://unacademy.com/@sameerchincholikar" target="_blank"><button class="button1">Click here</button></a></div>
            <div class="block"><h2>All special classes link</h2><a href="https://unacademy.com/@sameerchincholikar/courses?goal=all&type=special" target="_blank"><button class="button1">Click here</button></a></div>
          </div>
      </div>
    </div> -->



    <a href="https://t.me/jeechallenger" target="_blank" class="telegram-float">
      <p>Join us on</p>
      <i class="fa fa-telegram"></i>
    </a>
  
  
    <?php include("../common/contact-us-button.php"); ?>

    
    <?php include("../common/footer.php"); ?>


</body>
</html>
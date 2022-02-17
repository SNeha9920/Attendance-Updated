<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="../CSS/style.css" />
  <title>DMCE . Amendment Portal</title>
  <link rel="icon" href="../Resources/dmce_logo.jpeg" type="image/x-icon">

  <!-- STYLE FOR LOGIN/REGISTER DASHBOARD -->
  <style>
   body{
    background-image: url("../Resources/bg.png");
    background-repeat: no-repeat;
    background-size: 50%;
    background-position: center;
    
    
}

    .card-deck {
      margin-left: 5%;
      margin-right: 5%;
      margin-top: 7%;
    }

    a:link {
      text-decoration: none;
      text-align: center;
    }

    h5 {
      margin-top: 10%;
      color: black;
    }

    .card {
      min-height: 240px;
      min-width: 245px;
      border-style: solid;
      border-width: 2px;
      border-color: #04589c;
      box-shadow: 0 8px 6px -6px #999;
      margin-top: 5%;
    }

    .card:hover {
      border-color: orange;
      border-width: 3px;
    }

    #card-1 {
      border-top-left-radius: 30px;
      border-bottom-left-radius: 30px;
    }

    #card-2 {
      border-top-right-radius: 30px;
      border-bottom-right-radius: 30px;
    }  
  </style>
  <!-- STYLE FOR LOGIN/REGISTER DASHBOARD -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar"></nav>
  <div>
    <img src="../Resources/logo_blue.png" class="nav-image img-fluid" alt="DMCE" />
  </div>
  <hr />
  <!-- Navbar -->
  <?php
  session_start();
  if (!isset($_SESSION['userlogin'])) {
    ?>
<div class="card-deck text-center d-flex justify-content-center">

      <!-- Log-In -->
      <a href="login.php">
        <div class="card" id="card-1">
          <div class="card-body">
            <svg
              width="119"
              height="114"
              viewBox="0 0 119 114"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M64.8941 114H97.2577C103.398 114 108.543 111.795 112.527 107.554C116.51 103.482 118.999 98.0536 118.999 91.9464V25.6161C118.999 19.5089 116.51 14.0804 112.527 10.0089C108.543 5.9375 103.232 3.5625 97.2577 3.5625H64.8941V17.4732H97.2577C101.905 17.4732 105.39 21.0357 105.39 25.6161V91.9464C105.39 96.5268 101.905 100.259 97.2577 100.259H64.8941V114ZM0.00100708 45.6339V72.0982C0.00100708 75.1518 2.49051 77.6964 5.47792 77.6964H35.6839V98.5625C35.6839 100.429 36.5137 101.955 38.1734 102.804C38.8373 102.973 39.6671 102.973 39.9991 102.973C41.1608 102.973 42.1566 102.634 42.9865 101.786L81.9887 61.9196C83.4824 60.3929 83.3164 57.3393 81.9887 55.6429L42.9865 15.9464C41.6587 14.5893 39.9991 14.4196 38.1734 14.9286C36.5137 15.7768 35.6839 17.1339 35.6839 19V40.0357H5.47792C2.49051 40.0357 0.00100708 42.5804 0.00100708 45.6339Z"
                fill="black"
              />
            </svg>
            <h5 class="card-title">Log-In</h5>
          </div>
        </div>
      </a>
      <!-- Log-In -->

      <!-- Register -->
      <a href="register.php">
        <div class="card" id="card-2">
          <div class="card-body">
            <svg
              width="170"
              height="115"
              viewBox="0 0 145 140"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M84.5833 46.6667H28.1944C27.1262 46.6667 26.1017 46.257 25.3464 45.5277C24.591 44.7984 24.1667 43.8092 24.1667 42.7778V27.2223C24.1667 26.1909 24.591 25.2017 25.3464 24.4724C26.1017 23.7431 27.1262 23.3334 28.1944 23.3334H84.5833C85.6516 23.3334 86.6761 23.7431 87.4314 24.4724C88.1868 25.2017 88.6111 26.1909 88.6111 27.2223V42.7778C88.6111 43.8092 88.1868 44.7984 87.4314 45.5277C86.6761 46.257 85.6516 46.6667 84.5833 46.6667ZM32.2222 38.8889H80.5556V30.8778H32.2222V38.8889Z"
                fill="black"
              />
              <path
                d="M84.5833 54.7559H28.1944C27.1262 54.7559 26.1017 55.1656 25.3464 55.8949C24.591 56.6242 24.1667 57.6134 24.1667 58.6447V73.8892C24.1667 74.9206 24.591 75.9097 25.3464 76.6391C26.1017 77.3684 27.1262 77.7781 28.1944 77.7781H73.95L88.6111 63.3892V58.6447C88.6111 57.6134 88.1868 56.6242 87.4314 55.8949C86.6761 55.1656 85.6516 54.7559 84.5833 54.7559ZM80.5556 70.0003H32.2222V62.2225H80.5556V70.0003Z"
                fill="black"
              />
              <path
                d="M44.5472 122.539V122.306L45.8361 116.9H16.1111V15.5556H96.6667V55.4167L104.722 48.0667V11.6667C104.722 10.6353 104.298 9.64617 103.543 8.91686C102.787 8.18755 101.763 7.77783 100.694 7.77783H12.0833C11.0151 7.77783 9.99062 8.18755 9.23527 8.91686C8.47991 9.64617 8.05556 10.6353 8.05556 11.6667V120.556C8.05556 121.587 8.47991 122.576 9.23527 123.305C9.99062 124.035 11.0151 124.444 12.0833 124.444H44.3056C44.3387 123.805 44.4195 123.168 44.5472 122.539V122.539Z"
                fill="black"
              />
              <path
                d="M88.6111 74.5497L85.4694 77.6219C86.2489 77.4668 86.9633 77.0922 87.5224 76.5454C88.0815 75.9986 88.4604 75.3042 88.6111 74.5497Z"
                fill="black"
              />
              <path
                d="M24.1667 104.767C24.1667 105.798 24.591 106.787 25.3464 107.517C26.1017 108.246 27.1262 108.656 28.1944 108.656H47.6889L48.8972 103.6L49.4208 101.461V101.267H32.2222V93.3333H57.7583L65.8139 85.5555H28.1944C27.1262 85.5555 26.1017 85.9653 25.3464 86.6946C24.591 87.4239 24.1667 88.413 24.1667 89.4444V104.767Z"
                fill="black"
              />
              <path
                d="M134.89 64.8279L121.317 51.7224C120.714 51.1391 119.999 50.6764 119.211 50.3607C118.423 50.045 117.578 49.8824 116.725 49.8824C115.872 49.8824 115.027 50.045 114.239 50.3607C113.451 50.6764 112.736 51.1391 112.133 51.7224L56.9125 105.35L52.3611 124.056C52.1907 124.863 52.1869 125.694 52.3498 126.503C52.5128 127.311 52.8393 128.08 53.3108 128.767C53.7822 129.453 54.3892 130.043 55.0971 130.503C55.805 130.962 56.5999 131.282 57.4361 131.445C57.8513 131.485 58.2696 131.485 58.6847 131.445C59.1782 131.522 59.6815 131.522 60.175 131.445L79.7097 127.283L134.89 73.889C135.493 73.3107 135.971 72.623 136.298 71.8655C136.624 71.108 136.792 70.2956 136.792 69.4751C136.792 68.6546 136.624 67.8423 136.298 67.0848C135.971 66.3272 135.493 65.6395 134.89 65.0612V64.8279ZM75.6014 120.206L60.8597 123.356L64.4444 109.239L105.85 68.8335L117.208 79.8001L75.6014 120.206ZM121.76 75.4057L110.401 64.439L116.806 58.3335L128.244 69.3779L121.76 75.4057Z"
                fill="black"
              />
            </svg>

            <h5 class="card-title">Register</h5>
          </div>
        </div>
      </a>
      <!-- Register -->
  </div>
  <?php
}
if (isset($_SESSION['userlogin'])) {
    ?>
<!-- Card Container -->
    <div class="card-deck text-center d-flex justify-content-center" id="card-deck">
    <?php
if (isset($_SESSION['userlogin']) && (array_values($_SESSION['userlogin']))['5']=='manoj.patil@dmce.ac.in') {
  ?>
          <!-- Faculty Selection -->
          <a href="faculty.php">
            <div class="card" id="card1">
              <div class="card-body">
                
                <svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.5 26.25V35H113.75V105H52.5V113.75H131.25V105H122.5V26.25H17.5ZM35.0087 39.375C30.3716 39.3911 25.9289 41.2398 22.6491 44.5179C19.3693 47.7961 17.5184 52.2379 17.5 56.875C17.5 66.4956 25.3925 74.375 35.0087 74.375C39.6436 74.3566 44.0831 72.5066 47.3596 69.2285C50.6361 65.9503 52.4839 61.5098 52.5 56.875C52.5 47.2631 44.6162 39.375 35.0087 39.375ZM61.25 43.75V52.5H83.125V43.75H61.25ZM91.875 43.75V52.5H105V43.75H91.875ZM35.0087 48.125C39.8825 48.125 43.75 51.9881 43.75 56.875C43.75 61.775 39.8869 65.625 35.0087 65.625C30.1087 65.625 26.25 61.775 26.25 56.875C26.25 51.9881 30.1131 48.125 35.0087 48.125V48.125ZM61.25 61.25V70H105V61.25H61.25ZM17.5 78.75V113.75H26.25V87.5H39.375V113.75H48.125V90.3788L57.155 95.1562C59.7144 96.5125 62.79 96.5081 65.345 95.1562V95.165L80.7887 86.9969L76.7069 79.2531L61.2587 87.4213L47.7138 80.2725C45.8234 79.2738 43.718 78.7512 41.58 78.75H17.5Z" fill="black"/>
</svg>
  
                <h5 class="card-title">Faculty Selection</h5>
              </div>
            </div>
          </a>
          <!-- Faculty Selection -->
          <?php
        }
        ?>


        <?php
if (isset($_SESSION['userlogin']) && (array_values($_SESSION['userlogin']))['5']=='hodcomp@dmce.ac.in') {
  ?>
          <!-- Faculty Approval -->
          <a href="faculty_approve.php">
            <div class="card" id="card1">
              <div class="card-body">
                
                <svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.5 26.25V35H113.75V105H52.5V113.75H131.25V105H122.5V26.25H17.5ZM35.0087 39.375C30.3716 39.3911 25.9289 41.2398 22.6491 44.5179C19.3693 47.7961 17.5184 52.2379 17.5 56.875C17.5 66.4956 25.3925 74.375 35.0087 74.375C39.6436 74.3566 44.0831 72.5066 47.3596 69.2285C50.6361 65.9503 52.4839 61.5098 52.5 56.875C52.5 47.2631 44.6162 39.375 35.0087 39.375ZM61.25 43.75V52.5H83.125V43.75H61.25ZM91.875 43.75V52.5H105V43.75H91.875ZM35.0087 48.125C39.8825 48.125 43.75 51.9881 43.75 56.875C43.75 61.775 39.8869 65.625 35.0087 65.625C30.1087 65.625 26.25 61.775 26.25 56.875C26.25 51.9881 30.1131 48.125 35.0087 48.125V48.125ZM61.25 61.25V70H105V61.25H61.25ZM17.5 78.75V113.75H26.25V87.5H39.375V113.75H48.125V90.3788L57.155 95.1562C59.7144 96.5125 62.79 96.5081 65.345 95.1562V95.165L80.7887 86.9969L76.7069 79.2531L61.2587 87.4213L47.7138 80.2725C45.8234 79.2738 43.718 78.7512 41.58 78.75H17.5Z" fill="black"/>
</svg>
  
                <h5 class="card-title">Faculty Approval</h5>
              </div>
            </div>
          </a>
          <!-- Faculty Approval -->
          <?php
        }
        ?>

  
          <!-- Roll List -->
          <a href="roll_list_class_incharge.php">
            <div class="card ">
              <div class="card-body">
               <svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M126.875 8.75H13.125C5.87617 8.75 0 14.6262 0 21.875V118.125C0 125.374 5.87617 131.25 13.125 131.25H126.875C134.124 131.25 140 125.374 140 118.125V21.875C140 14.6262 134.124 8.75 126.875 8.75ZM125.234 118.125H14.7656C14.3305 118.125 13.9132 117.952 13.6055 117.644C13.2979 117.337 13.125 116.919 13.125 116.484V23.5156C13.125 23.0805 13.2979 22.6632 13.6055 22.3555C13.9132 22.0479 14.3305 21.875 14.7656 21.875H125.234C125.669 21.875 126.087 22.0479 126.394 22.3555C126.702 22.6632 126.875 23.0805 126.875 23.5156V116.484C126.875 116.919 126.702 117.337 126.394 117.644C126.087 117.952 125.669 118.125 125.234 118.125ZM113.75 92.9688V99.5312C113.75 101.343 112.281 102.812 110.469 102.812H55.7812C53.9692 102.812 52.5 101.343 52.5 99.5312V92.9688C52.5 91.1567 53.9692 89.6875 55.7812 89.6875H110.469C112.281 89.6875 113.75 91.1567 113.75 92.9688ZM113.75 66.7188V73.2812C113.75 75.0933 112.281 76.5625 110.469 76.5625H55.7812C53.9692 76.5625 52.5 75.0933 52.5 73.2812V66.7188C52.5 64.9067 53.9692 63.4375 55.7812 63.4375H110.469C112.281 63.4375 113.75 64.9067 113.75 66.7188ZM113.75 40.4688V47.0312C113.75 48.8433 112.281 50.3125 110.469 50.3125H55.7812C53.9692 50.3125 52.5 48.8433 52.5 47.0312V40.4688C52.5 38.6567 53.9692 37.1875 55.7812 37.1875H110.469C112.281 37.1875 113.75 38.6567 113.75 40.4688ZM44.8438 43.75C44.8438 49.1865 40.4365 53.5938 35 53.5938C29.5635 53.5938 25.1562 49.1865 25.1562 43.75C25.1562 38.3135 29.5635 33.9062 35 33.9062C40.4365 33.9062 44.8438 38.3135 44.8438 43.75ZM44.8438 70C44.8438 75.4365 40.4365 79.8438 35 79.8438C29.5635 79.8438 25.1562 75.4365 25.1562 70C25.1562 64.5635 29.5635 60.1562 35 60.1562C40.4365 60.1562 44.8438 64.5635 44.8438 70ZM44.8438 96.25C44.8438 101.686 40.4365 106.094 35 106.094C29.5635 106.094 25.1562 101.686 25.1562 96.25C25.1562 90.8135 29.5635 86.4062 35 86.4062C40.4365 86.4062 44.8438 90.8135 44.8438 96.25Z" fill="black"/>
</svg>
                <h5 class="card-title">Roll List</h5>
              </div>
            </div>
          </a>
          <!-- Roll List -->
  
          <!-- Attendance -->
          <a href="attendance.php">
            <div class="card" id="card2">
              <div class="card-body">
                
                  <img src="https://image.flaticon.com/icons/png/512/3125/3125932.png" width="140" height="140" viewBox="0 0 140 140" fill="none">
  
                <h5 class="card-title">Attendance</h5>
              </div>
            </div>
          </a>
          <!-- Attendance -->
      </div>
      <!-- Term Work -->
         <div class="card-deck text-center d-flex justify-content-center" id="card-deck">
                <a href="view_term_work.php">
            <div class="card" id="card3">
              <div class="card-body">
              
                <img src="https://image.flaticon.com/icons/png/512/4388/4388165.png" width="140" height="140" viewBox="0 0 140 140" fill="none">
                <h5 class="card-title">Term Work</h5>
              </div>
            </div>
          </a>
          <!-- Term Work -->
  
          <!-- Edit Profile -->
          <a href="profile.php">
            <div class="card ">
              <div class="card-body">
                <svg
                  width="138"
                  height="140"
                  viewBox="0 0 138 119"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0)">
                    <path
                      d="M48.3 59.5C63.5447 59.5 75.9 46.1822 75.9 29.75C75.9 13.3178 63.5447 0 48.3 0C33.0553 0 20.7 13.3178 20.7 29.75C20.7 46.1822 33.0553 59.5 48.3 59.5ZM67.62 66.9375H64.0191C59.2322 69.3082 53.9063 70.6562 48.3 70.6562C42.6938 70.6562 37.3894 69.3082 32.5809 66.9375H28.98C12.9806 66.9375 0 80.9293 0 98.175V107.844C0 114.003 4.63594 119 10.35 119H69.6253C69.1078 117.42 68.8922 115.746 69.0647 114.049L70.5309 99.8949L70.7897 97.315L72.4931 95.4789L89.1609 77.5127C83.8781 71.0746 76.2234 66.9375 67.62 66.9375V66.9375ZM77.3878 100.708L75.9216 114.886C75.6844 117.257 77.5388 119.256 79.7166 118.977L92.8481 117.396L122.583 85.3453L107.123 68.6807L77.3878 100.708V100.708ZM136.491 62.4982L128.318 53.6895C126.313 51.5279 123.036 51.5279 121.03 53.6895L112.88 62.475L111.996 63.4279L127.478 80.0926L136.491 70.3773C138.496 68.1926 138.496 64.683 136.491 62.4982V62.4982Z"
                      fill="black"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0">
                      <rect width="138" height="119" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
  
                <h5 class="card-title">Profile</h5>
              </div>
            </div>
          </a>
          <!-- Edit Profile -->

          <!-- Log-Out -->
          <a href="logout.php">
            <div class="card" id="card4">
              <div class="card-body">
                <svg
                  width="119"
                  height="140"
                  viewBox="0 0 119 114"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M0.000717163 25.6161V91.9464C0.000717163 98.0536 2.49022 103.482 6.47343 107.723C10.4566 111.795 15.6016 114 21.5764 114H54.106V100.259H21.5764C17.0953 100.259 13.61 96.5268 13.61 91.9464V25.6161C13.61 21.0357 17.0953 17.4732 21.5764 17.4732H54.106V3.5625H21.5764C15.6016 3.5625 10.4566 5.9375 6.47343 10.0089C2.49022 14.25 0.000717163 19.5089 0.000717163 25.6161ZM35.6836 45.6339V72.0982C35.6836 75.1518 38.3391 77.6964 41.3265 77.6964H71.3665V98.5625C71.3665 100.429 72.3623 101.955 74.022 102.804C74.6859 102.973 75.3497 102.973 75.6817 102.973C76.8434 102.973 77.8392 102.634 78.6691 101.786L117.671 61.9196C119.497 60.3929 119.331 57.3393 117.671 55.6429L78.6691 15.9464C76.3455 13.4018 71.3665 14.9286 71.3665 19V40.0357H41.3265C38.3391 40.0357 35.6836 42.5804 35.6836 45.6339Z"
                    fill="black"
                  />
                </svg>
                <h5 class="card-title">Log-Out</h5>
              </div>
            </div>
          </a>
          <!-- Log-Out -->
          </div>
      </div>
      <!-- Card Container -->
      <?php
  }
  ?>
       <br /><br /><br /><br /><br /><br /><br />
 <style>
    #card-deck {
      margin-left: 5%;
      margin-right: 5%;
      margin-top: 3%;
      margin-bottom: 2%;
    }

    a:link {
      margin: 0%;
      text-decoration: none;
      text-align: center;
    }

    h5 {
      color: black;
      margin-top: 5%;
    }

    .card {
      min-height: 240px;
      min-width: 245px;
      border-style: solid;
      border-width: 2px;
      border-color: #04589c;
      box-shadow: 0 8px 6px -6px #999;
      margin-top: 2%;
      /* opacity: 0.9; */
    }

    .card:hover {
      border-color: orange;
      border-width: 3px;
    }
    #card1 {
        border-top-left-radius: 30px;
      }
      #card2 {
        border-top-right-radius: 30px;
      }
      #card3 {
        border-bottom-left-radius: 30px;
      }
      #card4 {
        border-bottom-right-radius: 30px;
      }
  </style>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
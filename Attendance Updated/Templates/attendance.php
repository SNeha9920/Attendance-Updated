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
    body {
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
  <div class="card-deck text-center d-flex justify-content-center">
      <!-- Back -->
      <a href="index.php">
        <div class="card" id="card-1">
          <div class="card-body">
            <svg
              width="149"
              height="116"
              viewBox="0 0 149 116"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M62.0835 9.66676C62.0846 8.65876 61.681 7.6757 60.9289 6.85516C60.1769 6.03461 59.1142 5.41764 57.8895 5.09059C56.6648 4.76353 55.3394 4.74276 54.0987 5.03118C52.8581 5.3196 51.7644 5.90277 50.9706 6.69909L7.51222 50.1991C6.66444 51.0475 6.20416 52.0918 6.20416 53.1668C6.20416 54.2417 6.66444 55.286 7.51222 56.1344L50.9706 99.6344C51.7644 100.431 52.8581 101.014 54.0987 101.302C55.3394 101.591 56.6648 101.57 57.8895 101.243C59.1142 100.916 60.1769 100.299 60.9289 99.4784C61.681 98.6578 62.0846 97.6748 62.0835 96.6668V77.3818C95.4781 77.9231 111.52 82.8579 119.579 88.2229C127.24 93.3221 128.643 99.3203 130.102 105.604L130.481 107.223C130.759 108.381 131.572 109.421 132.766 110.145C133.96 110.87 135.453 111.23 136.965 111.158C138.476 111.085 139.901 110.585 140.972 109.752C142.043 108.919 142.685 107.81 142.779 106.633C143.841 93.3511 142.245 74.1048 130.195 58.0049C118.499 42.3788 97.4337 30.3631 62.0835 29.1064V9.66676Z"
                fill="black"
              />
            </svg>
            <h5 class="card-title">Back</h5>
          </div>
        </div>
      </a>
      <!-- Back -->

      <!-- View Attendance -->
      <a href="view_attendance.php">
        <div class="card">
          <div class="card-body">
            <svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M96.25 113.75C101.082 113.75 105 109.832 105 105C105 100.168 101.082 96.25 96.25 96.25C91.4175 96.25 87.5 100.168 87.5 105C87.5 109.832 91.4175 113.75 96.25 113.75Z" fill="black"/>
<path d="M130.274 102.721C127.571 95.8339 122.906 89.8918 116.858 85.6308C110.81 81.3699 103.645 78.9774 96.25 78.75C88.8552 78.9774 81.6897 81.3699 75.6416 85.6308C69.5936 89.8918 64.9288 95.8339 62.2256 102.721L61.25 105L62.2256 107.279C64.9288 114.166 69.5936 120.108 75.6416 124.369C81.6897 128.63 88.8552 131.023 96.25 131.25C103.645 131.023 110.81 128.63 116.858 124.369C122.906 120.108 127.571 114.166 130.274 107.279L131.25 105L130.274 102.721ZM96.25 122.5C92.7888 122.5 89.4054 121.474 86.5275 119.551C83.6497 117.628 81.4066 114.895 80.0821 111.697C78.7576 108.499 78.411 104.981 79.0863 101.586C79.7615 98.1913 81.4282 95.0731 83.8756 92.6256C86.3231 90.1782 89.4413 88.5115 92.8359 87.8363C96.2306 87.161 99.7493 87.5076 102.947 88.8321C106.145 90.1566 108.878 92.3997 110.801 95.2775C112.724 98.1554 113.75 101.539 113.75 105C113.744 109.64 111.899 114.087 108.618 117.368C105.337 120.649 100.89 122.494 96.25 122.5V122.5Z" fill="black"/>
<path d="M52.5 122.5H30.625V30.625H43.75V43.75H96.25V30.625H109.375V70H118.125V30.625C118.125 28.3044 117.203 26.0788 115.562 24.4378C113.921 22.7969 111.696 21.875 109.375 21.875H96.25V17.5C96.25 15.1794 95.3281 12.9538 93.6872 11.3128C92.0462 9.67187 89.8206 8.75 87.5 8.75H52.5C50.1794 8.75 47.9538 9.67187 46.3128 11.3128C44.6719 12.9538 43.75 15.1794 43.75 17.5V21.875H30.625C28.3044 21.875 26.0788 22.7969 24.4378 24.4378C22.7969 26.0788 21.875 28.3044 21.875 30.625V122.5C21.875 124.821 22.7969 127.046 24.4378 128.687C26.0788 130.328 28.3044 131.25 30.625 131.25H52.5V122.5ZM52.5 17.5H87.5V35H52.5V17.5Z" fill="black"/>
</svg>
            <h5 class="card-title">View Attendance</h5>
          </div>
        </div>
      </a>
      <!-- View Attendance -->

      <!-- Create Attendance -->
      <a href="create_attendance.php">
        <div class="card" id="card-2">
          <div class="card-body">
            <svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M43.75 100.625C43.75 99.4646 44.2109 98.3518 45.0314 97.5313C45.8519 96.7109 46.9647 96.2499 48.125 96.2499H126.875C128.035 96.2499 129.148 96.7109 129.969 97.5313C130.789 98.3518 131.25 99.4646 131.25 100.625C131.25 101.785 130.789 102.898 129.969 103.719C129.148 104.539 128.035 105 126.875 105H48.125C46.9647 105 45.8519 104.539 45.0314 103.719C44.2109 102.898 43.75 101.785 43.75 100.625ZM43.75 65.6249C43.75 64.4646 44.2109 63.3518 45.0314 62.5314C45.8519 61.7109 46.9647 61.2499 48.125 61.2499H126.875C128.035 61.2499 129.148 61.7109 129.969 62.5314C130.789 63.3518 131.25 64.4646 131.25 65.6249C131.25 66.7853 130.789 67.8981 129.969 68.7185C129.148 69.539 128.035 69.9999 126.875 69.9999H48.125C46.9647 69.9999 45.8519 69.539 45.0314 68.7185C44.2109 67.8981 43.75 66.7853 43.75 65.6249ZM43.75 30.6249C43.75 29.4646 44.2109 28.3518 45.0314 27.5314C45.8519 26.7109 46.9647 26.2499 48.125 26.2499H126.875C128.035 26.2499 129.148 26.7109 129.969 27.5314C130.789 28.3518 131.25 29.4646 131.25 30.6249C131.25 31.7853 130.789 32.8981 129.969 33.7185C129.148 34.539 128.035 34.9999 126.875 34.9999H48.125C46.9647 34.9999 45.8519 34.539 45.0314 33.7185C44.2109 32.8981 43.75 31.7853 43.75 30.6249ZM33.7225 18.7774C34.1299 19.1838 34.4532 19.6666 34.6737 20.1982C34.8943 20.7297 35.0078 21.2995 35.0078 21.8749C35.0078 22.4504 34.8943 23.0202 34.6737 23.5517C34.4532 24.0833 34.1299 24.566 33.7225 24.9724L20.5975 38.0974C20.1911 38.5049 19.7083 38.8281 19.1768 39.0487C18.6453 39.2692 18.0755 39.3828 17.5 39.3828C16.9245 39.3828 16.3547 39.2692 15.8232 39.0487C15.2917 38.8281 14.8089 38.5049 14.4025 38.0974L10.0275 33.7224C9.62072 33.3157 9.29805 32.8328 9.07791 32.3013C8.85777 31.7698 8.74446 31.2002 8.74446 30.6249C8.74446 30.0497 8.85777 29.4801 9.07791 28.9486C9.29805 28.4171 9.62072 27.9342 10.0275 27.5274C10.4343 27.1207 10.9172 26.798 11.4486 26.5779C11.9801 26.3577 12.5497 26.2444 13.125 26.2444C13.7002 26.2444 14.2699 26.3577 14.8013 26.5779C15.3328 26.798 15.8157 27.1207 16.2225 27.5274L17.5 28.8137L27.5275 18.7774C27.9339 18.37 28.4167 18.0468 28.9482 17.8262C29.4797 17.6057 30.0495 17.4921 30.625 17.4921C31.2005 17.4921 31.7703 17.6057 32.3018 17.8262C32.8333 18.0468 33.3161 18.37 33.7225 18.7774V18.7774ZM33.7225 53.7774C34.1299 54.1838 34.4532 54.6666 34.6737 55.1982C34.8943 55.7297 35.0078 56.2995 35.0078 56.8749C35.0078 57.4504 34.8943 58.0202 34.6737 58.5517C34.4532 59.0833 34.1299 59.566 33.7225 59.9724L20.5975 73.0974C20.1911 73.5049 19.7083 73.8281 19.1768 74.0487C18.6453 74.2692 18.0755 74.3828 17.5 74.3828C16.9245 74.3828 16.3547 74.2692 15.8232 74.0487C15.2917 73.8281 14.8089 73.5049 14.4025 73.0974L10.0275 68.7224C9.20598 67.9009 8.74446 66.7867 8.74446 65.6249C8.74446 64.4632 9.20598 63.349 10.0275 62.5274C10.849 61.7059 11.9632 61.2444 13.125 61.2444C14.2868 61.2444 15.401 61.7059 16.2225 62.5274L17.5 63.8137L27.5275 53.7774C27.9339 53.37 28.4167 53.0468 28.9482 52.8262C29.4797 52.6057 30.0495 52.4921 30.625 52.4921C31.2005 52.4921 31.7703 52.6057 32.3018 52.8262C32.8333 53.0468 33.3161 53.37 33.7225 53.7774V53.7774ZM33.7225 88.7774C34.1299 89.1838 34.4532 89.6666 34.6737 90.1982C34.8943 90.7297 35.0078 91.2995 35.0078 91.8749C35.0078 92.4504 34.8943 93.0202 34.6737 93.5517C34.4532 94.0833 34.1299 94.566 33.7225 94.9724L20.5975 108.097C20.1911 108.505 19.7083 108.828 19.1768 109.049C18.6453 109.269 18.0755 109.383 17.5 109.383C16.9245 109.383 16.3547 109.269 15.8232 109.049C15.2917 108.828 14.8089 108.505 14.4025 108.097L10.0275 103.722C9.20598 102.901 8.74446 101.787 8.74446 100.625C8.74446 99.4632 9.20598 98.349 10.0275 97.5274C10.849 96.7059 11.9632 96.2444 13.125 96.2444C14.2868 96.2444 15.401 96.7059 16.2225 97.5274L17.5 98.8137L27.5275 88.7774C27.9339 88.37 28.4167 88.0468 28.9482 87.8262C29.4797 87.6057 30.0495 87.4921 30.625 87.4921C31.2005 87.4921 31.7703 87.6057 32.3018 87.8262C32.8333 88.0468 33.3161 88.37 33.7225 88.7774V88.7774Z" fill="black"/>
</svg>
            <h5 class="card-title">Create Attendance</h5>
          </div>
        </div>
      </a>
      <!-- Create Attendance -->
  </div>
    <!-- CARD CONTAINER (OPTIONS) -->
    <br /><br /><br /><br /><br /><br /><br />
  <!-- CSS -->
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
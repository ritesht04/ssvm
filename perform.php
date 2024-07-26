<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="register.css" />
    <link rel="stylesheet" href="activity.css">
    <style>
        .complaints {
    font-size: 1.05em;
    padding: 15px;
    background: rgba(251, 250, 250, 0.25);
    backdrop-filter: blur( 2.5px );
    -webkit-backdrop-filter: blur( 2.5px );
    border-radius: 10px;
    border: 2px solid rgba(0, 66, 70, 0.5);
    margin: 10px 0;
  }
    </style>

</head>

<body onload="generate()">
    <header class="header">
        <img src="logo.png" alt="logo" class="logo">

        <nav class="navbar">
            <ul class="navbar-list">
                <li><a class="navbar-link" href="index.html">Home</a></li>
                <li><a class="navbar-link" href="gallery.html">Gallery</a></li>
                <li><a class="navbar-link" href="index.html#facilities">Facilities</a></li>
                <li><a class="navbar-link" href="activity.html">Activities</a></li>
                <li><a class="navbar-link" href="index.html#admission">Admission</a></li>
                <li><a class="navbar-link" href="regsiter.html">Register Now</a></li>
            </ul>
        </nav>

        <div class="mobile-navbar-btn">
            <div class="line line1"></div>
            <div class="line line2"></div>
            <div class="line line3"></div>
        </div>  
    </header>

    <section class="container">
    <h1 id="head">Performance Details</h1>
   

    <?php
    if(isset($_POST['userid'])){
    $server = "localhost";
    $username = "root";
    $password= "";
    
    $conn = mysqli_connect($server,$username,$password);
    
    
    if(!$conn)
    {
        die("Connection to database failed due to ". mysqli_connect_error());
    }
    $userid = $_POST['userid'];

    $sql = "SELECT * FROM `ssvm`.`performance` WHERE userid ='$userid';";
    $result = mysqli_query($conn, $sql);
    
    if ($result->num_rows > 0) {
        // Step 4: Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo " <div class='complaints'><p><strong>UserID:</strong> " . htmlspecialchars($row["userid"]) . "</p>";
            echo "<p><strong>Performance:</strong> " . htmlspecialchars($row["performance"]) . "</p> </div> <hr>";
        }
    } else {
        echo "<p>No record found.</p>";
    }
}
    ?></div>
    </section>


    <div class="bottom" id="contact">
        <div class="quote">
            <h1>-हमारा लक्ष्य-</h1>
            <p>इस प्रकार की राष्ट्रीय शिक्षा-प्रणाली का विकास करना है जिसके द्वारा ऐसी युवा-पीढ़ी का निर्माण हो सके जो
                हिन्दुत्वनिष्ठ एवं राष्ट्रभक्ति से ओत-प्रोत हो, शारीरिक, प्राणिक, मानसिक, बौद्धिक एवं आध्यात्मिक दृष्टि
                से पूर्ण
                विकसित हो तथा जो जीवन की वर्तमान चुनौतियों का सामना सफलता पूर्वक कर सकें और उसका जीवन ग्रामों, वनों,
                गिरिकन्दराओं एवं झुग्गी-झोपड़ियों में निवास करने वाले दीन-दुःखी अभावग्रस्त अपने बान्धवों को सामाजिक
                कुरीतियों,
                शोषण एवं अन्याय से मुक्त कराकर राष्ट्र जीवन को समरस, सुसम्पन्न एवं सुसंस्कृत बनाने के लिए समर्पित हो।
            </p>
        </div>

        <div class="footer-basic">
            <footer>
                <div class="social"><a href="#"><img src="whatsapp.png"></a><a href="#"><img src="facebook.png"></a>
                </div>
                <div class="contact">
                    <p>Address: Behind Raj Tower, Sonkatch Road, Pipalrawan (M.P.)<br>
                        Contact:
                    </p>
                </div>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#home">Home</a></li>
                    <li class="list-inline-item"><a href="gallery.html">Gallery</a></li>
                    <li class="list-inline-item"><a href="#facilities">Facilities</a></li>
                    <li class="list-inline-item"><a href="activity.html">Activities</a></li>
                    <li class="list-inline-item"><a href="#admission">Admission</a></li>
                    <li class="list-inline-item"><a href="regsiter.html">Register Now</a></li>
                </ul>
                <p class="copyright">SSVM © 2024</p>
            </footer>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>
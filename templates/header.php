<?php 
include 'password.php';

$conn = new mysqli($servername, $username, $password, $DB);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

      
<header>    
    <nav>
        <div class='topnav'>
            <span class='hamburger desktop-hidden'> &#9776;</span>
            <div id='logo'></div>
            <span class='desktop-only' style="  display: flex;justify-content: center;align-items: center;"> 
                <a class='desktop-only' href="/"> Home</a>
                <a class='desktop-only' href="/blog"> Blog</a>
                <a class='desktop-only' href="/about"> About Me</a>
            </span>
        </div>  
    </nav>
</header>
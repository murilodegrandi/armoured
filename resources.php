<?php
    session_start();
    if(!isset($_SESSION['id_user']))
    {
        header("location: index.php");
        exit;
    }
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Armoured DevSec Project</title>
        <meta name="description" content="My Hacking Lab Project">
        <meta name="author" content="Murilo de Grandi">
        <link rel="stylesheet" href="css/style3.css"> 
    </head>
  
    <body>
        <a href="http://172.26.0.140/armoured/index.php" target="_self">Sign out </a>
        <div id="content">
            <h1>Welcome! </h1>
            <p>Here you can find instructions and links to access the lab.</p>
        <div id="box">
            <h1>Logging into Kali Linux VM</h1>
            <img src="images/kasm.jpg"></img>
            <a href="https://13.55.214.210/" target="_blank">Click here to access</a>
            <h2>Kasm Credentials</h2>
            <p>Username = pentester <br> Password = DQskbfdfX9YK#g</p>
            
            <h2>Resources:</h2>
            <ul type="circle">
                <li>OWASP ZAP Proxy (Vulnerability Scanner) -> Use it to find vulnerabilities. </li>
                <li>Cloud9 IDE (Integrated Development Environment) -> Use it to perform manual secure code review. </li>
            </ul>
        </div>
        <div id="apps">
            <h1>INSIDE THE LAB</h1>
            <img src="images/Screenshot Kasm.jpg"></img>
            <h2>STEP 1: Performing Initial Vulnerability Scan<h2>
            <ol type:"1">
                <li>In Kali Desktop, double-click on ZAP-SCAN app to start scanning the app.</li>
                <li>Wait until the initial scan is finalised and click on 🚩ALERTS to check results.</li>
            </ol>
            <h2>STEP 2: Attacking the application </h2>
            <img src="images/app.jpg"></img>
            <p><b>From the Kali Linux desktop, double-click on ArmouredAPP</b><p>
            <ul type:"circle">
                <li>Objective 1: Bypass authentication via <b>SQL Injection</b>.</li>
                <li>Objective 2: Once authenticated, test the *Target field for <b>Reflected Cross-site Scripting(XSS)</b> 
                by making it show a pop-up window with some message. </li>
                <li>Objective 3: Access the passwd file from the server via <b>OS Command Injection</b>. </li>
            </ul>
            <h2>STEP 3: Fixing vulnerabilities</h2>
            <p><b>Using Cloud9 IDE</b></p>
            <ol type:"1">
                <li>Double-click on IDE-Cloud9 and sign in using credentials from IDE-Cloud9 Credentials file found in the Desktop.</li>
                <li>Click on Cloud9 > Shared with you > Open IDE</li>
                <li>Perform code review and click on save to apply the changes.</li>
                <li>Once the changes were made, attempt attacks again and go back to ZAP Proxy to run a new scan in order to verify if the vulnerabilities were eliminated.</li>
            </ol>
            <p><br>Note: If required, run "git restore *" from the Terminal window to restore the app to the original version.</p>
        </div>
            
        
    </body>


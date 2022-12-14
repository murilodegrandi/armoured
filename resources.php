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
        <input type="button" onclick="location.href='https://murilodegrandi.com/armoured/index.php';" value="Sign out" />
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
            <h1>Lab Walkthrough</h1>
            <img src="images/Screenshot Kasm.jpg"></img>
            <h2>STEP 1: Performing Initial Vulnerability Scan<h2>
            <ol type:"1">
                <li>In Kali Desktop, double-click on ZAP-SCAN app to start scanning the app.</li>
                <li>Wait until the initial scan is finalised and click on 🚩ALERTS to check results.</li>
            </ol>
            <h2>STEP 2: Attacking the application </h2>
            <p><br /><b>From the Kali Linux desktop, double-click on ArmouredAPP to open the app.</b><p>
            <img src="images/app.jpg"></img>
            
            <h2 style="color:grey;"><br />Attacking Challenges</h2>
            <ul type:"circle">
                <li>Challenge #1: Bypass authentication via <b>SQL Injection</b>.</li>
                <li>Challenge #2: Once in the restricted area, test the *Target field for <b>Reflected Cross-site Scripting(XSS).</b> 
                by making it show a pop-up window with some message. </li>
                <li>Challenge #3: Access the system users (passwd file) of the server via <b>OS Command Injection.</b>. </li>
            </ul>
            <h2><br />STEP 3: Remediating code flaws</h2>
            <p><br /><b>Using Cloud9 IDE to review the source-code.</b></p>
            <ol type:"1">
                <li>Double-click on IDE-Cloud9 and sign in using credentials from IDE-Cloud9 Credentials file found in the Desktop.</li>
                <li>Click on Cloud9 > Shared with you > Open IDE</li>
                <li>Implement code fixes, save the file and reload the webpage to verify the changes.</li>
                <li>Once the changes have been made, attempt attacking again and then run a new Active Scan on ZAP to verify whether the vulnerabilities were eliminated or not.</li>
            </ol>
            <p><br>Note: If required, you can run "git restore *" at anytime from the Terminal window to restore the vulnerable app to the original version.</p>
            <h2 style="color:grey;">Remediation Challenges<br /></h2>
            <ul type:"circle">
                <li>Challenge #4: Remediate <b>SQL Injection</b> flaw.</li>
                <li>Challenge #5: Remediate both <b>Command Injection</b> and <b>Reflected Cross-site Scripting(XSS).</b></li>
            
        </div>
            
        
    </body>


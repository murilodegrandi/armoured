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
        <header id="top">
          <h1>Armoured DevSec Project</h1>
          <h2>Web Application Security Lab<h2>
        </header>
        <div id="content">
            <h1>Welcome! </h1>
            <p>Here you can find instructions and links to access the lab.</p>
        <div id="box">
            <h1>Attack box Information</h1>
            <h2>OS: Kali Linux</h2>
            <h2>Resources:</h2>
            <ul type="circle">
                <li>OWASP ZAP Proxy (Vulnerability Scanner) -> Use it to find vulnerabilities. </li>
                <li>Cloud9 IDE (Integrated Development Environment) -> Use it to perform manual secure code review. </li>
            <a href="https://13.55.214.210/" target:"_blank">Click here to access the box.</a>
                
            </ul>
            
            <a href="logout.php">Logout</a>
        </div>
    </body>


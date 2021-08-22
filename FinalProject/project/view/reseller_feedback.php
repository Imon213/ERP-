<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../design/reseller_feedback.css">
<script type="text/javascript" src="../js/addfeedback.js"></script>

</head>
<body>
  <table width="100%" rules="rows">
    
    <tr>
    <td width="20%">
        <img src="../img/1.png"/>
    </td>
    <td width="50%" align="center">
    <h3 class="title">Where Every thing is at your hand</h3>
    <td align="center">
    <a href="reseller_dashboard.php" class="upperlink">Home |</a>
    <a href="../controller/reseller_logout.php" class="upperlink">Logout</a>
    </td>
    </td>
    
    </tr>
    
    </table>

<h3>Feedback</h3>

<div class="container">
 
    <label for="fname"> Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.."style="height:50px">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email.."style="height:50px">

    

    <label for="Comments">Comments</label>
    <textarea id="comment" name="comments" placeholder="Write something.." value="" style="height:150px"></textarea>

    <input type="button" value="Submit" class="feedbackbtn" onclick="Feedback()">
 
</div>

</body>
</html>

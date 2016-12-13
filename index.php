<!DOCTYPE html>
 <html>
   <head>
     <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <link type="text/css" rel="stylesheet" href="css/popup.css"  media="screen,projection"/>

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>

   <body>
     <!--Import jQuery before materialize.js-->
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="js/materialize.min.js"></script>
     <script type="text/javascript" src="js/myjs.js"></script>

  <header>
    <nav>
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">Logo</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="sass.html"><i class="material-icons left">search</i>Identify Scam</a></li>
            <li><a href="#modal1"><i class="material-icons left">add</i>ReportScam</a></li>
          </ul>
        </div>
      </nav>
  </header>




     <div class="row">
       <form class="col s12">
         <div class="row">
           <div class="input-field col s6">
             <input placeholder="Username (Optional)" id="first_name" type="text" class="validate">

           </div>
           </div>
       </form>
     </div>
     <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1">Copy paste the Anouncement</label>
          </div>
        </div>
      </form>





      <div id="modal1" class="modal modal-fixed-footer">
          <div class="modal-content">



                 <div class="row">
                   <form class="col s6"> <input placeholder="Username (Optional)" id="first_name" type="text" class="validate"> </form>
                   <form class="col s6" style="float:right;"><a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Upload Pictures</a></form>
                   <div class="input-field col s12"><textarea id="textarea1" class="materialize-textarea"></textarea>  <label for="textarea1">Copy paste the Anouncement</label></div>
                   <div class="input-field col s12"><textarea id="textarea1" class="materialize-textarea"></textarea> <label for="textarea1">Copy paste the conversation between you and the anouncer</label></div>
                 </div>

                 <form action="scamreport.php" method="post">

     <table border="0">

     <tr>
     	<td>Name</td>
     	<td align="center"><input type="text" name="username" size="30" /></td>
     </tr>

     <tr>
     	<td>Address</td>
     	<td align="center"><input type="text" name="streetaddress" size="30" /></td>
     </tr>

     <tr>
     	<td>City</td>
     	<td align="center"><input type="text" name="cityaddress" size="30"  /></td>
     </tr>

     <tr>
     <td colspan="2" align="center"><input type="submit" value="Submit"/></td>
     </tr>

     </table>
     </form>



          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Report</a>
          </div>
        </div>


   </body>
 </html>

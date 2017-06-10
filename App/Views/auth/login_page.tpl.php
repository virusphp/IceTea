<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <title>Login Admin</title>
   <style type="text/css">
      body{
         background-image: url(<?php print base_url()."/img/bg1.jpg"; ?>);
         background-color: #cccccc;
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-position: top; 
         background-size:cover;
      }
   </style>
   <?php css("login"); ?>
   <?php js("crayner"); ?>
   <?php js("login"); ?>
   <script type="text/javascript">
   var a = new login("<?php print rstr(72); ?>");
   setInterval(function(){
      a.l("<?php print router_url(); ?>/login/user_check");
   },6000);
   window.onload=function(){
      document.getElementById("fr").addEventListener("submit",function(){
         var u=document.getElementById("u").value,
             p=document.getElementById("p").value;
             (u!=""&&p!="") && a.lg("<?php print router_url(); ?>/login/action",u,p,"<?php print strrev($token); ?>","<?php print sha1($token) ?>");
          });
      var qa = document.getElementById("mcgg"), op = 0.4;
      qa.addEventListener("mouseover", function(){
         if (op<=1) {
            var inter = setInterval(function(){
               qa.style = "opacity:"+op;
               op+=0.03;
               if (op>=1) {
                  clearInterval(inter);
               }
               console.log(op);
            },10);
         } else {
            qa.removeEventListener("mouseover", null);
         }
      });
   };
   </script>
</head>
<body>
   <center>
      <div class="mcg" id="mcgg">
         <form method="post" action="javascript:void(0);" id="fr">
            <div class="ifcg">
               <div class="lghd">
                  <h1>Login</h1>
               </div>
               <div class="cgl">
                  <label>Username</label>
               </div>
               <div class="in">
                  <input type="text" name="username" id="u" required>
               </div>
               <div class="cgl">
                  <label>Password</label>
               </div>
               <div class="in">
                  <input type="password" name="password" id="p" required>
               </div>
               <div class="cgbt">
                  <input type="hidden" name="dynamic_token" value="<?php print $token; ?>" id="tkn">
                  <button type="submit" name="login" class="lbt">Login</button>
               </div>
               <div class="crg">
                  <a href="<?php print router_url()."/register"; ?>"><span>Daftar</span></a>
               </div>
            </div>
         </form>
      </div>
   </center>
</body>
</html>
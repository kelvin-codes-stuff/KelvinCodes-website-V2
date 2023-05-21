<!DOCTYPE HTML>
<html>
<head>
   <style>HTML
   .nav {
      position: relative;
      list-style: none;
      padding: 0;
      margin: 0;
   }
   .nav::before{
      content: "";
      position: absolute;
      top: 0;
      width: 50%;
      height: 100%;
      background: #fff;
      z-index: 1; 
   }
   .active{
      background: rgb(177, 177, 177);
   }
   .nav::after {
      content: "";
      position: absolute;
      top: 0;
      width: 50%;
      height: 100%;
      background: rgb(0, 0, 0);
      z-index: 1; 
   }
   .nav::before {
      left: 0;
      border-radius: 0 0 0 50%;
   }
   .nav::after {
      right: 0;
      border-radius: 0 0 50% 0;
   }
   .nav-item {
      position: relative;
      float: left;
      width: 16.66667%;
   }
   .nav-item a {
      display: block;
      padding: 10px 20px;
      border: 1px solid #ccc;
      text-decoration: none;
      color: #333;
      position: relative;
      z-index: 2;
   }
   </style>
</head>
<body>
   <ul class="nav">
      <li class="nav-item"><a href="#">Home</a></li>
      <li class="nav-item"><a href="#">About</a></li>
      <li class="nav-item"><a href="#">Services</a></li>
      <li class="nav-item"><a href="#">Portfolio</a></li>
      <li class="nav-item"><a href="#">Contact</a></li>
   </ul>
   <script>
      var navItems = document.querySelectorAll(".nav-item");
      for (var i = 0; i < navItems.length; i++) {
         navItems[i].addEventListener("click", function() {
            this.classList.add("active");
         });
      }
   </script>
</body>
</html>
<style>
body{background-color:#023e8a}
.inputs{
    width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.but{
    width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.but:hover{
    background-color: #45a049;
}
form{
    width:500px;
    display:flex;
    flex-direction:column; 
    margin-left:30%;
    margin-top:10%;
}
.lab{
    display:flex;
    margin:auto;
    font-family:Arial;
}
    </style>




<div class="">


    <div class="">
    
    <form class="form" method="POST" action="index.php?controller=login&action=created">
    <label class="lab" for="username"style="color:white;">Username</label>
    <input type="text" name="username" class="inputs" placeholder="Username">
    <label class="lab" for="username"style="color:white;">Email</label>
    <input type="email" name="email" class="inputs" placeholder="Email"> 
    <label class="lab" for="Password" style="color:white;">Password</label>
    <input type="password" name="password" class="inputs" placeholder="Password">
    
    <button type="submit" class="but">Login</button>
    </form>

    
    </div>


</div>
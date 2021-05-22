<style>
body{background-color:#023e8a;
color:white;}
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
  width:300px;
  margin:auto;
}
.but:hover{
    background-color: #45a049;
}
form{
    display:flex;
    flex-direction:column;
    margin-left:25%;
    margin-top:50px;
    width:600px;
}
.parac{font-family:arial;
        color:white}
</style>
<form method="POST" action="index.php?controller=reservation&action=created" name="f1">


<h1 class="parac" > <center>Reservez une table </center></h1>

<table >
   <tr>
       <td> <label for="nom"><p> Nom et prenom: </p> </label></td>
       <td><input class="inputs" type="text" id="nom" name="name" ></td>
      </tr>
  
	<tr>
       <td><label for="tel"><p> Télephone:</p> </label></td>
       <td><input class="inputs" type="tel" id="tel" name="tel" required maxlength="8" ></td>
	   
	   </tr>
	   <tr>
       <td ><label for="email"> <p> Email:</p> </label></td>
       <td><input  class="inputs" type="text" id="email" name="email" ></td>
      </tr>
	   
	   <tr>
        <td><label for="dateres"> <p> Date de Reservation:</p> </label></td>
       <td><input  class="inputs" type="date" id="datenais" min="2019-01-01" max="2020-01-01" name="date" value="03/12/2019"></td>
	   </tr>
   <tr>
       <td><label for="tel">  <p>Heure:</p> </label></label></td>
       <td><input class="inputs" type="text" id="heure" name="heure" required maxlength="1" ></td> <br>
	   <tr>
       <td>Matin/soir: </td>
	   <td>
  <input type="radio" id="PM" name="drone" value="PM"> 
   
  <label for="huey">PM</label> 
  
  <input type="radio" id="AM" name="drone" value="AM">
  <label for="dewey">AM</label></td></tr>
   
    <tr>
<td><label for="nom"> <p>Nombre de personnes:</p> </label></td>
       <td><input class="inputs" type="text" id="Nombre de personnes" name="nbrp" ></td>
	   </tr>
	   
	    <tr>
<td><label for="nom"> <p>Nombre de Tables:</p> </label></td>
       <td><input class="inputs" type="text" id="Nbrt" name="nbrt" ></td>
	   </tr>
	   <tr>
	   
</table>

<div> 
<br>
<tr>
	<td><label for="Type"> <p>Type</p> </label></td>
	<select name="type" class="inputs" style="width:200px;" id="Type">
	<td>
	 <option value="Spécial"><p> Choisir une Type</p></option>
	<option value="Spécial"> Spéciale</option> 
	<option value="Familiale"> Familiale</option> </td></tr>
	</select>
	</div>
	<br>
	
    <input type="submit" value="Reserver" class="but" onclick="verif()" name="B2"> </center></p>
</form>
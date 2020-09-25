<!DOCTYPE html>
<html>
	<head>
        <script src="asset/js/countries.js"></script
            
        
       	</head>
    <body>
        <div align ="center">
            <h1>Free JavaScript Country/State Selection Demo</h1>
            <hr/>
            <br/>
            Select Country (with states):   <select id="country" name ="country"></select>
			<br />
			State: <select name ="state" id ="state"></select>

			<br/><br />
            Select Country (without states):   <select id="country2" name ="country2"></select>
			<br />


			<script language="javascript">
				populateCountries("country", "state");
				populateCountries("country2");
			</script>
        
        	<br/><br/>
   
        	<br /><br />
        </div>
    </body>
</html>





{{-- <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script>
var stateObject = {
"India": { "Delhi": ["new Delhi", "North Delhi"],
"Kerala": ["Thiruvananthapuram", "Palakkad"],
"Goa": ["North Goa", "South Goa"],
},
"Australia": {
"South Australia": ["Dunstan", "Mitchell"],
"Victoria": ["Altona", "Euroa"]
}, "Canada": {
"Alberta": ["Acadia", "Bighorn"],
"Columbia": ["Washington", ""]
},
}
window.onload = function () {
var countySel = document.getElementById("countySel"),
stateSel = document.getElementById("stateSel"),
districtSel = document.getElementById("districtSel");
for (var country in stateObject) {
countySel.options[countySel.options.length] = new Option(country, country);
}
countySel.onchange = function () {
stateSel.length = 1; // remove all options bar first
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
for (var state in stateObject[this.value]) {
stateSel.options[stateSel.options.length] = new Option(state, state);
}
}
countySel.onchange(); // reset in case page is reloaded
stateSel.onchange = function () {
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
var district = stateObject[countySel.value][this.value];
for (var i = 0; i < district.length; i++) {
districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
}
}
}
</script>
</head>
<body>
<form name="myform" id="myForm">
Select Country: <select name="state" id="countySel" size="1">
<option value="" selected="selected">Select Country</option>
</select>
<br>
<br>
Select State: <select name="countrya" id="stateSel" size="1">
<option value="" selected="selected">Please select Country first</option>
</select>
<br>
<br>
Select District: <select name="district" id="districtSel" size="1">
<option value="" selected="selected">Please select State first</option>
</select><br>
<input type="submit">
</form>
</body>
</html> --}}
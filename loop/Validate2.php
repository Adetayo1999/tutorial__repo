<!DOCTYPE html>
<html lan="en">
<head>
<title>Dog Object</title>
<script src="validator.js"></script>
<style type="text/css">
#JS { display:none; }
</style>
<script>
function checkJS() {
document.getElementById('JS').style.display = "inline";
}
</script>
</head>
<body onload="checkJS();">
<h1>Dog Object Creater</h1>
<div id="JS">
<form method="post" action="lab.php" onSubmit="return validate_input(this)">
<h2>Please complete ALL fields. Please note the required format of information.</h2>
Your Dog's Name (max 20 characters, alphabetic) <input type="text" pattern="[a-zA-Z ]*"
title="Up to 20 Alphabetic Characters" maxlength="20" name="dog_name" id="dog_name" /><br />
Your Dog's Breed (max 35 characters, alphabetic) <input type="text" pattern="[a-zA-Z ]*"
title="Up to 35 Alphabetic Characters" maxlength="35" name="dog_breed" id="dog_breed" /><br />
Your Dog's Color (max 15 characters, alphabetic) <input type="text" pattern="[a-zA-Z]*"
title="Up to 15 Alphabetic Characters" maxlength="15" name="dog_color" id="dog_color" /><br />
Your Dog's Weight (numeric only) <input type="number" min="1" max="120" name="dog_weight"
id="dog_weight" /><br />
<input type="submit" value="Click to create your dog" />
</form>
</div>

<noscript>
<div id="noJS">
<form method="post" action="lab.php">
<h2>Please complete ALL fields. Please note the required format of information.</h2>
Your Dog's Name (max 20 characters, alphabetic) <input type="text" pattern="[a-zA-Z ]*"
title="Up to 20 Alphabetic Characters" maxlength="20" name="dog_name" id="dog_name" /><br />
Your Dog's Breed (max 35 characters, alphabetic) <input type="text" pattern="[a-zA-Z ]*"
title="Up to 35 Alphabetic Characters" maxlength="35" name="dog_breed" id="dog_breed" /><br />
Your Dog's Color (max 15 characters, alphabetic) <input type="text" pattern="[a-zA-Z]*"
title="Up to 15 Alphabetic Characters" maxlength="15" name="dog_color" id="dog_color" /><br />
Your Dog's Weight (numeric only) <input type="number" min="1" max="120" name="dog_weight"
id="dog_weight" /><br />
<input type="submit" value="Click to create your dog" />
</form>
</div>
</noscript>
</body>
</html>

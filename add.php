<?php
include 'db.php';
include 'header.php';
 ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function run(){
        var last_choice = document.getElementById('type_product').selectedIndex;
        console.log(last_choice);
        if (last_choice == '1'){
            $("#last_form").html("<br><br><label>Size(MB)</label><br><input type=\"number\" name=\"size\" placeholder=\"Insert size(MB)\" id=\"size\" oninvalid=\"this.setCustomValidity('Enter Product Size(MB) Here')\" oninput=\"this.setCustomValidity('')\" required /><br>");
            alert ('last_choice1');
        }
        if (last_choice == '2'){
            $("#last_form").html("<br><br><label>Weight(Kg)</label><br><input type=\"number\" name=\"weight\" placeholder=\"Insert weight(Kg)\" id=\"weight\" oninvalid=\"this.setCustomValidity('Enter Product Weight(Kg) Here')\" oninput=\"this.setCustomValidity('')\" required /><br>");
            alert ('last_choice2');
        }
        if (last_choice == '3'){
            $("#last_form").html("<br><br><label>Height(CM)</label><br><input type=\"number\" name=\"height\" placeholder=\"Insert height(CM)\" id=\"height\" oninvalid=\"this.setCustomValidity('Enter Product Height(CM) Here')\" oninput=\"this.setCustomValidity('')\" required /><br><br><label>Width(CM)</label><br><input type=\"number\" name=\"width\" placeholder=\"Insert width(CM)\"id=\"width\" oninvalid=\"this.setCustomValidity('Enter Product Width(CM) Here')\" oninput=\"this.setCustomValidity('')\" required /><br><br><label>Length(CM)</label><br><input type=\"number\" name=\"length\" placeholder=\"Insert length(CM)\"id=\"length\" oninvalid=\"this.setCustomValidity('Enter Product Length(CM) Here')\" oninput=\"this.setCustomValidity('')\" required /><br>");
            alert ('last_choice3');
        }
    }
</script>

<form method='post' action='save.php'>
     <h3>Add one product</h3>
     <div class='accept'>
         <button type='submit' id='add_product'>Save</button>
         <button type='button' id='cancel' onclick="location.href='index.php';">Cancel</button>
     </div>

     <br>
     <input type='text' name='sku' placeholder='SKU' id='sku' oninvalid="this.setCustomValidity('Enter SKU Here)" oninput="this.setCustomValidity('')" required>
     <br>

     <br>
     <input type='text' name='name' placeholder='Name' id='name' oninvalid="this.setCustomValidity('Enter Name Here)" oninput="this.setCustomValidity('')" required>
     <br>

     <br>
     <input type='text' name='price' placeholder='Price' id='price' oninvalid="this.setCustomValidity('Enter Price Here)" oninput="this.setCustomValidity('')" required>
     <br>

     <span id='last_form'>

     </span>

     <br>
     <p>You need to select type of product</p>
     <select name='type_product' id='type_product' onchange='run()' oninvalid="this.setCustomValidity('Pick a Product Type')" oninput="this.setCustomValidity('')" required>
         <option value='' selected disabled>Select the type of the product</option>
         <option value='DVD' id='#DVD'> DVD </option>
         <option value='Book' id='#Book'> Book </option>
         <option value='Furniture' id='#Furniture'> Furniture </option>
     <br>

 </form>

<a href="index.php">Home</a> |
<a href="addmeal.php">Add Meal</a> |
<a href="viewmeals.php">View Meals</a>
<br><br>


<h2>Add a Meal</h2>

<form action="insertmeal.php" method="POST">

    <label>Meal Name</label>
    <input type="text" name="meal_name" required>

    <br><br>

    <select name="meal_type_id" required>
        <option value="1">Breakfast</option>
        <option value="2">Lunch</option>
        <option value="3">Dinner</option>
        <option value="4">Snack</option>
    </select>
    <br><br>

    <label>Calories</label>
    <input type="number" name="calories" required>

    <br><br>

    <label>Protein</label>
    <input type="number" name="protein" required>

    <br><br>

    <label>Fat</label>
    <input type="number" name="fat" required>

    <br><br>

    <label>Carbs</label>
    <input type="number" name="carbs" required>

    <br><br>

    <label>Date</label>
    <input type="date" name="meal_date" required>

    <br><br>

    <button type="submit">Save Meal</button>

</form>

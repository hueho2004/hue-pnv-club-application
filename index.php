<!DOCTYPE html>
<html>
<head>
    <title>Application Form</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-check-label {
            font-weight: normal;
            color: #555;
        }
        .btn {
            padding: 10px 20px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="form-container">
    <form action="result.php" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" name="username" id="name">
    </div>
    <div class="mb-3">
        <label for="club" class="form-label">Club you want to apply:</label>
        <select class="form-select" name="club" id="club">
            <option value="Robotic club">Robotic club</option>
            <option value="Nami club">Nami club</option>
            <option value="Nobita club">Nobita club</option>
            <option value="Green club">Green club</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Best time for you:</label><br>
        <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="saturday_M" value="Saturday mornings" name="time">
            <label for="saturday_M" class="form-check-label">Saturday mornings</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="saturday_A" value="Saturday afternoons" name="time">
            <label for="saturday_A" class="form-check-label">Saturday afternoons</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="sunday" value="Sunday afternoons" name="time">
            <label for="sunday" class="form-check-label">Sunday afternoons</label>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Your skills:</label><br>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" id="coder" value="The best coder" name="skill[]">
            <label for="coder" class="form-check-label">The best coder</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" id="arts" value="Good in arts" name="skill[]">
            <label for="arts" class="form-check-label">Good in arts</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" id="star" value="A super star" name="skill[]">
            <label for="star" class="form-check-label">A super star</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" id="dancer" value="A crazy dancer" name="skill[]">
            <label for="dancer" class="form-check-label">A crazy dancer</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" id="singer" value="Singer" name="skill[]">
            <label for="singer" class="form-check-label">Singer</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" id="design" value="Good in design" name="skill[]">
            <label for="design" class="form-check-label">Good in design</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" id="eater" value="The best eater" name="skill[]">
            <label for="eater" class="form-check-label">The best eater</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" id="speeches" value="Good in speeches" name="skill[]">
            <label for="speeches" class="form-check-label">Good in speeches</label>
        </div>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-danger">Submit</button>
    </div>
</form>
</div>
</body>
</html>











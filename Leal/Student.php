<?php 
    include 'connection.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $target_dir = "uplaods/";
        $target_file = $target_dir. "_" . basename($_FILES['photo']['name']);

        if(move_uploaded_file($_FILES['photo']['tmp_name'],$target_file)){
            $name = $_POST['name'];
            $date = $_POST['date'];
            $gender = $_POST['gender'];
            $dateOfBirth = $_POST['dateOfBirth'];
            $age = $_POST['age'];
            $placeOfBirth = $_POST['placeOfBirth'];
            $contactNo = $_POST['contactNo'];
            $email = $_POST['email'];
            $religion = $_POST['religion'];
            $citizenship = $_POST['citizenship'];
            $civilStatus = $_POST['civilStatus'];
            $address = $_POST['address'];
            $date = $_POST['date'];

            $sql = $conn->query();

        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Personal Information Form</title>
    <style>
        .form-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Personal Information Form</h2>
        <form id="personalForm">
            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" id="photo" name="photo" accept="image/*">
            </div>

            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

             <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="dateOfBirth">Date of Birth:</label>
                <input type="date" id="dateOfBirth" name="dateOfBirth" required>
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" min="0" max="150" required="">
            </div>

            <div class="form-group">
                <label for="placeOfBirth">Place of Birth:</label>
                <input type="text" id="placeOfBirth" name="placeOfBirth">
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="contactNo">Contact Number:</label>
                <input type="tel" id="contactNo" name="contactNo">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="religion">Religion:</label>
                <input type="text" id="religion" name="religion">
            </div>

            <div class="form-group">
                <label for="citizenship">Citizenship:</label>
                <input type="text" id="citizenship" name="citizenship">
            </div>

            <div class="form-group">
                <label for="civilStatus">Civil Status:</label>
                <select id="civilStatus" name="civilStatus">
                    <option value="">Select Status</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="divorced">Divorced</option>
                    <option value="widowed">Widowed</option>
                </select>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>

 <!--    <script>
        // Auto-calculate age from date of birth
        document.getElementById('dateOfBirth').addEventListener('change', function() {
            const birthDate = new Date(this.value);
            const today = new Date();
            let age = today.getFullYear() - birthDate.getFullYear();
            const monthDiff = today.getMonth() - birthDate.getMonth();
            
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            
            document.getElementById('age').value = age;
        });

        // Form submission handler
        document.getElementById('personalForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const data = {};
            
            for (let [key, value] of formData.entries()) {
                data[key] = value;
            }
            
            console.log('Form Data:', data);
            alert('Form submitted successfully! Check console for data.');
        });
    </script> -->
</body>
</html>

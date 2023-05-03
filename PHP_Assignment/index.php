<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <title>Registration Form</title>
</head>

<style>
    body{
        margin: 0;
        font-family: 'Inter', sans-serif;
    }

    .box{
        width: 100%;
        max-width: 30%;
        height: auto;
        max-height: 50%;
        border: none;
        border-radius: 30px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        padding: 50px;
        margin: 40px auto 0px auto;
    }

    .form-group{
        display: flex;
        flex-direction: column;
        margin: 10px 10px 10px 40px;
    }

    .title{
        text-align: center;
        font-size: 30px;
        color: #3aaf9f;
        font-weight: 800;
        margin-bottom: 30px;
    }

    label{
        font-size: 18px;
        font-weight: 500;
        color: #030303;
        margin-bottom: 5px;
    }

    .form-control{
        display: block;
        width: 100%;
        max-width: 90%;
        padding: 0.375rem 0.75rem;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        font-size: 15px;
        margin-bottom: 10px;
    }

    .form-control:focus{
        outline: none;
    }

    .radio-input{
        min-height: 0.5rem;
        min-width: 0.5rem;
    }

    .btn{
        width: 60%;
        padding: 0.375rem 0.75rem;
        margin: 15px auto 0px auto;
        font-size: 20px;
        color: #fff;
        background: #3aaf9f;
        border: none;
        border-radius: 20px;
        cursor: pointer;
    }
</style>

<body>
    <div class="box">
        <h1 class="title">Registration Form</h1>
        <form action="insert.php" method="POST" autocomplete="off">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter you name" required>
            </div>

            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="number" maxlength="10" id="contact" class="form-control" name="contact" placeholder="Enter you contact" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" class="form-control" placeholder="Enter you address" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <label><input type="radio" id="gender" name="gender" value="Male" class="radio-input" required>Male</label>
                <label><input type="radio" id="gender" name="gender" value="Female" class="radio-input" required>Female</label>
            </div>

            <div class="form-group">
                <label for="qualification">Qualification</label>
                <select id="qualification" name="qualification" class="form-control" style="max-width: 95%;" required>
                    <option disabled selected value>Select an option</option>
                    <option value="Post Graduate">Post Graduate</option>
                    <option value="Graduate">Graduate</option>
                    <option value="Under Graduate">Under Graduate</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" name="submit" class="btn">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างบัญชีผู้ใช้ใหม่</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA4L3Jhd3BpeGVsX29mZmljZV8yMl9oYWxsb3dlZW5fdGhlbWVkX3dhbGxwYXBlcl9wdXJwbGVfYmFja2dyb3VuZF82Yjk4NWUyMC1lZmI5LTQxYTktYjlhOS0zYTZkMGNhNmRjMjJfMS5qcGc.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            
        }

        .container {
            position: relative;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            text-decoration: none;
            color: #007bff;
            margin-top: 10px;
            display: inline-block;
        }

        a:hover {
            text-decoration: underline;
        }

        .logo {
            position: absolute;
            top: -20px;
            left: -20px;
            width: 80px;
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://scontent.fhdy4-1.fna.fbcdn.net/v/t1.15752-9/438125168_979809806985665_1654001906951899602_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFiwwXL85bPHJB9dOSBwLXMGu-beRiTs2ka75t5GJOzacAS2PgwNNnoCscTB17MtDFz2osftAXnCKqyicBFNSki&_nc_ohc=OI86rAM04GUQ7kNvgFJr0B-&_nc_ht=scontent.fhdy4-1.fna&oh=03_Q7cD1QGXbVliiMrJj0af3LSnGLJPwA2evJFdg-qcw--rDrZLjQ&oe=66755E71" alt="Logo" class="logo">
        <h1>สร้างบัญชีผู้ใช้ใหม่</h1>
        <form action="process-register.php" method="POST">
            <div>
                <input name="username_accout" type="text" placeholder="ชื่อผู้ใช้" required>
            </div>
            <div>
                <input name="email_accout" type="email" placeholder="อีเมล" required>
            </div>
            <div>
                <input name="password_accout1" type="password" placeholder="รหัสผ่าน" required>
            </div>
            <div>
                <input name="password_accout2" type="password" placeholder="ยืนยันรหัสผ่าน" required>
            </div>
            <button type="submit">สร้างบัญชี</button>
            <a href="form-login.php">มีบัญชีแล้วอยู่แล้ว</a>
        </form>
    </div>
</body>
</html>

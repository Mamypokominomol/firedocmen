<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
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

        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
            max-width: 400px;
            width: 100%;
            position: relative;
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        input[type="email"],
        input[type="password"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            background-color: #1877f2;
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0d65d9;
        }

        a {
            display: block;
            text-align: center;
            text-decoration: none;
            color: #1877f2;
            font-weight: bold;
            margin-top: 15px;
        }

        a:hover {
            text-decoration: underline;
        }

        .logo {
            position: absolute;
            top: 0;
            left: 20px; /* เลื่อนโลโก้ไปทางซ้ายอีกนิด */
            transform: translate(-50%, -50%);
            width: 120px;
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
        }
    </style>
</head>
<body>
    <form action="process-login.php" method="post">
        <img src="https://scontent.fhdy4-1.fna.fbcdn.net/v/t1.15752-9/438125168_979809806985665_1654001906951899602_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFiwwXL85bPHJB9dOSBwLXMGu-beRiTs2ka75t5GJOzacAS2PgwNNnoCscTB17MtDFz2osftAXnCKqyicBFNSki&_nc_ohc=OI86rAM04GUQ7kNvgFJr0B-&_nc_ht=scontent.fhdy4-1.fna&oh=03_Q7cD1QGXbVliiMrJj0af3LSnGLJPwA2evJFdg-qcw--rDrZLjQ&oe=66755E71" alt="Logo" class="logo">
        <h1>เข้าสู่ระบบ</h1>
        <div>
            <input name="email_account" type="email" placeholder="อีเมล" required>
        </div>
        <div>
            <input name="password_account" type="password" placeholder="รหัสผู้ใช้งาน" required>
        </div>
        <button type="submit">เข้าสู่ระบบ</button>
        <a href="form-register.php">สร้างบัญชีผู้ใช้ใหม่</a>
    </form>
</body>
</html>

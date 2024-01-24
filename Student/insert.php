<!DOCTYPE html>
<html>
  <head>
    <title>Student Registration Page</title>
    <style>
      body {
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: sans-serif;
        line-height: 1.5;
        min-height: 100vh;
        background: #f3f3f3;
        flex-direction: column;
        margin: 0;
      }

      .main {
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        padding: 10px 20px;
        transition: transform 0.2s;
        width: 500px;
        text-align: center;
      }

      h1 {
        color: #4caf50;
      }

      label {
        display: block;
        width: 100%;
        margin-top: 10px;
        margin-bottom: 5px;
        text-align: left;
        color: #555;
        font-weight: bold;
      }

      #pass {
        color: red;
        font-size: 12px;
      }

      input {
        display: block;
        width: 100%;
        margin-bottom: 15px;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 5px;
      }

      select {
        display: block;
        width: 100%;
        margin-bottom: 15px;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 5px;
      }

      .submit{
        padding: 15px;
        border-radius: 10px;
        margin-top: 15px;
        margin-bottom: 15px;
        border: none;
        color: white;
        cursor: pointer;
        background-color: #3bc0c0;
        width: 100%;
        font-size: 16px;
      }

      .wrap {
        display: flex;
        justify-content: center;
        align-items: center;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Student Registration Form</h1>

      <form action="process.php" method="post">
        <label for="first">First Name:</label>
        <input
          type="text"
          id="first"
          name="firstName"
          placeholder="Enter your first name"
          required
        />

        <label for="last">Last Name:</label>
        <input
          type="text"
          id="last"
          name="lastName"
          placeholder="Enter your last name"
          required
        />

        <label for="email">Email:</label>
        <input
          type="email"
          id="email"
          name="email"
          placeholder="Enter your email"
          required
        />
        <label for="text">Class:</label>
        <input
          type="text"
          id="text"
          name="class"
          placeholder="Enter your Class"
        />

        <label for="Address">Address:</label>
        <input
          type="text"
          id="Address"
          name="address"
          placeholder="Enter your Address"
          required
        />
        <span id="pass"></span>

        <label for="mobile">Contact:</label>
        <input
          type="text"
          id="mobile"
          name="number"
          placeholder="Enter your Mobile Number"
          required
          maxlength="10"
        />

        <label for="gender" class="gender-label">Gender:</label>
        <select id="gender" name="gender" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
        <div class="wrap">
          <input type="submit" name="submit" value="submit" class="submit"/>
        </div>
      </form>
    </div>
  </body>
</html>

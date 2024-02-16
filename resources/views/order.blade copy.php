<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* Full-width input fields */
        input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 10%;
        }

        button:hover {
        opacity: 0.8;
        }


        /* Center the image and position the close button */
        .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
        }

        img.avatar {
        width: 20%;
        border-radius: 50%;
        }
    </style>
</head>
<body>

<div>
  <form action="{{ route('orderComplete') }}" method="POST" role="form">
    @csrf
    <div class="imgcontainer">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
      <h2> Byer's information </h2>
    </div>

    <div class="container">
      <label for="uname"><b>Name</b></label>
      <input type="text" placeholder="Enter Username" name="name" required>
    <div class="container">

      <label for="uname"><b>Address</b></label>
      <input type="text" placeholder="Enter Address" name="address" required>
    <div class="container">

      <label for="uname"><b>Phone</b></label>
      <input type="text" placeholder="Enter Phone" name="phone" required>
        
      <button type="submit">Order</button>
    </div>

  </form>
</div>

</body>
</html>

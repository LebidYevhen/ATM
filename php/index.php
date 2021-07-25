<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ATM login page</title>
</head>

<body>

   <main class="content">

      <section class="section">

         <div class="container">

            <div class="wrapper">

               <h1 class="title">Welcome to our online ATM</h1>
               <p class="text">Please enter your login details below</p>

               <form class="form" action="ATMPage.php" method="POST">

                  <p class="input__wrapper">
                     <label for="card_number">Card number:</label>
                     <input type="text" name="card_number" id="card_number">
                  </p>

                  <p class="input__wrapper">
                     <label for="card_pin">Card pin:</label>
                     <input type="password" name="card_pin" id="card_pin">
                  </p>

                  <input type="submit" value="Next" name="login_submit">

               </form>

            </div>

         </div>

      </section>

   </main>

</body>

</html>

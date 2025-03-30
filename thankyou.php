<?php
  include('templates/header.php');
?>


<main>
  <section class="container">
    <h1 class="col-100 text-center">ĎAKUJEME</h1><br>
  </section>
  <section class="container">
    <div class="row">
      <div class="col-100 text-center">
          <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
              $name = $_POST["name"];
              $surname = $_POST["surname"];
              $email = $_POST["email"];
              $subject = $_POST["subject"];
              $message = $_POST["message"];

              if (!empty($name)) {
                echo "<h2>$name ďakujeme za vyplnenie formulára</h2";
              }
      
              // echo "<p><strong>Meno:</strong> $name</p>";
              // echo "<p><strong>Priezvisko:</strong> $surname</p>";
              // echo "<p><strong>Email:</strong> $email</p>";
              // echo "<p><strong>Predmet:</strong> $subject</p>";
              // echo "<p><strong>Správa:</strong><br>" . ($message) . "</p>";
          } 
          else {
              echo "<p>Formulár nebol odoslaný správne.</p>";
          }  
          ?>
      </div>
    </div>
  </section>
  <section class="container">
    <p class="col-100 text-center"><a href='index.php'>Back to Home</a></p>
  </section>


</main>
    
<?php
  include('templates/footer.php');
?>
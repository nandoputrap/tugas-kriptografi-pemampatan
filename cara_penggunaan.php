<?php
  include_once "header.php";
?>

  <div style="margin-top:100px;"></div>
  <div class="container-fluid bg-main-content">
    <div class="container">
      <div class="row">
        <!--BEGIN MAIN CONTENT-->
        <div class="col-md-offset-4 col-md-4 bg-cara-penggunaan">
          <h1 class="text-center">KRIPTOGRAFI PEMAMPATAN</h1><br><br>
          <h3 class="text-center">Cara Penggunaan</h3><br>
          <!--BEGIN CARA PENGGUNAAN-->
          <p class="text-justify">
            Teknik kriptografi pemampatan merupakan teknik kriptografi dengan cara menghilangkan
            karakter tertentu dari sebuah kalimat/kata.
          </p>

          <p class="text-justify">
            Algoritma kriptografi yang digunakan pada website ini adalah
            dengan cara menghilangkan setiap 3 karakter dari awal kalimat/kata.
          </p>

          <p class="text-justify">
            User hanya perlu memasukkan kalimat/kata yang ingin dienkripsi, kemudian menekan tombol submit.
            Secara otomatis akan muncul kalimat/kata yang sudah diinput tersebut (plain text)
            dan kalimat/kata yang sudah dienkripsi (cipher text) dibawahnya.
          </p>
        </div>
      </div>
    </div>
  </div>

<?php
  include_once "footer.php";
?>

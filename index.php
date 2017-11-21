<?php
	include_once "header.php";
?>
		<div style="margin-top:100px;"></div>
		<!--BEGIN CONTENT-->
		<div class="container-fluid bg-main-content">
			<div class="container">
				<div class="row">
					<!--BEGIN MAIN CONTENT-->
					<div class="col-md-offset-4 col-md-4 bg-form">
						<h1 class="text-center">KRIPTOGRAFI PEMAMPATAN</h1>
						<!--BEGIN FORM-->
						<form action="" method="post" class="form-horizontal">
  						<div class="form-group">

								<label for="plain-text" class="control-label">Plain Text :</label>
								<div style="margin-bottom: 20px;"></div>
								<input type="text" class="form-control" name="plain" placeholder="Masukkan Plain Text...">
								<br>
								<label for="pilihan" class="control-label">Pilihan :</label>
								<div style="margin-bottom: 20px;"></div>
								<select class="form-control" name="pilihan">
									<option value="enkripsi" name="pilihan">Enkripsi</option>
									<option value="dekripsi" name="pilihan">Dekripsi</option>
								</select>

							</div>
							<center>
								<button type="submit" class="btn btn-success" name="submit">SUBMIT</button>
							</center>
						</form>
						<!--END FORM-->
					</div>
					<!--END MAIN CONTENT-->

						<?php

						if(isset($_POST['submit'])){ ?>
							<div class="col-md-offset-4 col-md-4 bg-result">

							<?php
							$string = $_POST['plain'];
							$pilihan = $_POST['pilihan'];
							$panjang = strlen($string);

							//BEGIN ENCRYPT
							if($string!=""){
								if ($pilihan == "enkripsi"){

									//mengubah string ke array
									$nomor = 0;
									for ($i=0;$i<$panjang;$i++){
										if ($i % 3 == 2){
											$compact[$nomor] = substr($string,$i,1);
											$nomor++;
										}
										else{
											$potong = substr($string,$i,1);
											$str[$i] = $potong;
										}

									}

									/*var_dump($compact);
									echo "<br>";
									var_dump($str);*/

									echo "<h2>Plain text : </h2><br>"."$string";
									echo "<br>";
									$kalimat_hilang = implode("", $compact);
									/*echo "Huruf yang dihilangkan adalah : "."<b>$kalimat_hilang</b>";
									echo "<br>";*/
									$kalimat_sisa = implode("",$str);
									/*echo "Huruf sisanya adalah : "."<b>$kalimat_sisa</b>";
									echo "<br>";*/

									echo "<h2>Cipher text : </h2></br>"."$kalimat_sisa"."&"."$kalimat_hilang";

								}
							}else{
								echo "<script>alert('Mohon isi data dengan benar.')</script>";
							}
							/*END ENCRYPT*/
						}
					?>
					</div>
				</div>
			</div>
		</div>
		<!--END CONTENT-->

		<div style="margin-top: 100px;"></div>

<?php
	include_once "footer.php";
?>

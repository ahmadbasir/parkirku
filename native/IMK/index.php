<!DOCTYPE html>
<html>
<head>
	<title>Parkiran</title>
	<?php
		require 'bootstrap/css.php';
		require_once 'database/connect.php';
	 ?>
</head>
<body>

	<div class="container">

		<div class="row">
		      	<div class="col-md-8">
		      		<div class="panel-default panel">
		      			<div style="text-align:left;font-size: 40px;" class="alert alert-success jumbotron">
		      				PROJECT AKHIR
		      			</div>
		      			<div class="panel-body" style="text-align:left;">
		      				<b style="color: #aaa">Interaksi Manusia dan Komputer</b>
		      				<div class="btn alert-info" style="cursor:auto"></div>
		      				<div class="btn alert-success" style="cursor:auto"></div>
		      				<div class="btn alert-warning" style="cursor:auto"></div>
		      				<div class="btn alert-danger" style="cursor:auto"></div>
		      				<div class="btn btn-info" style="cursor:auto"></div>
		      				<div class="btn btn-success" style="cursor:auto"></div>
		      				<div class="btn btn-warning" style="cursor:auto"></div>
		      				<div class="btn btn-danger" style="cursor:auto"></div>
		      			</div>
		      		</div>
		      	</div>
		    	<div class="col-md-4">
		      		<div class="panel panel-default">
		      			<div class="alert alert-info">
		      				<div class="">
		      					<b>ABSEN</b> PARKIRAN MOTOR
		      				</div>
		      			</div>
		      			<div class="panel-body" style="text-align: justify;">
		      				Aplikasi 'ABSEN PARKIRAN KENDARAAN' adalah apliaksi untuk mendata kendaraan yang masuk dan motor yang keluar.
		      			</div>
		      		</div>
		      	</div>
		    </div>

			<hr width="100%" class="btn-success">

			<div class="row">
			      	<div class="col-md-4">
			      		<div class="panel panel-default">
			      			<div class="panel-info panel-heading">
			              <div class="btn alert-info glyphicon glyphicon-user" style="color: #31708f;">
			              </div>
			              <b style="color: #31708f">INPUT MOTOR MASUK</b>
			            </div>

			      		<div class="panel-body">
			            <!-- FORM PENGISIAN -->
			              <form method="POST" action="database/masuk.php">
			                <div class="alert alert-danger">
			                  NO PLAT
			                  <hr>
			                  <b>
			                  	<input placeholder="ex : H 123 AZ" name="noPlat" class="alert" style="text-transform: uppercase;" type="text">
			                  </b>
			                </div>

			                <div class="alert alert-success">
			                  JENIS MOTOR<hr>
			                  <select class="alert alert-warning" name="tipe">
			                    <option value="Motor">MOTOR</option>
			                    <option value="Mobil">MOBIL</option>
			                  </select>

			                  <button class="alert btn-warning" type="submit" name="submit">
			                  	<b>SUMBIT</b>
			                  </button>

			                </div>

			              </form>
			            </div>
			      		</div>

			      	</div>
			      	<div class="col-md-8">
			      		<div class="panel-default panel">
			      			<div class="alert alert-warning">
			              <b>TOTAL KENDARAAN</b> :
										<?php require 'database/total.php'; ?>
			              <b style="color: #d43f3a"><?php echo $sudahkeluar; ?> sudah keluar</b> : :
			              <b style="color: #31708f"><?php echo $belumkeluar; ?> belum keluar</b>

			      			</div>
			            <table class="table">
			              	<tbody>
			              		<tr style="text-transform: uppercase; font-weight: bold;" class="panel">
			              		  <td class="alert-success">NO PLAT</td>
			              		  <td class="alert-danger">JENIS MOTOR</td>
			              		  <td class="alert-info">STATUS SAAT INI</td>
			              		  <td class="alert-info" width="5%"></td>
			              		  </tr>
			              		<!-- panggil tampil -->
			              		<?php
														$sql = "SELECT * FROM parkir ORDER BY id DESC";
														foreach ($db->query($sql) as $data):
												 ?>
			              		<tr>
			              		  <td style="padding-top: 17px;"><?php echo $data['noplat']; ?></td>
			              		  <td style="padding-top: 17px;"><?php echo $data['tipe']; ?></td>

			              		  <?php if($data['kondisi']==0): ?>
			              		  	<td style="font-weight: bold;padding-top: 17px;">BELUM KELUAR</td>
			              		  <?php else: ?>
			              		  	<td style="font-weight: bold;padding-top: 17px;">SUDAH KELUAR</td>
			              		  <?php endif; ?>

			              		  <?php if($data['kondisi']==0): ?>
			              		  	<td><a href="database/keluar.php?id=<?php echo $data['id']; ?>"><button class="btn btn-danger">X</button></a></td>
			              		  <?php else: ?>
			              			<td></td>
												<?php endif; ?>
			              		</tr>
											<?php endforeach; ?>
			            	</tbody>
			            </table>
			      		</div>
			      	</div>
			      </div>

		</div>

</body>
</html>

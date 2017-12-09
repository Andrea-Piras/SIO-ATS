<!DOCTYPE html>
<html>
<?php include('head.php'); ?>

<body>

	<?php include('navbar.php'); ?>

	<h1>C.U.P. (Centro Unico di Prenotazione)</h1>

	<form class="container" id="needs-validation" novalidate>
		<div class="row">
			<div class="col-md-4 mb-3">
				<label for="validationCustom01">Nome</label>
				<input type="text" minlength="2" class="form-control" id="validationCustom01" placeholder="Nome" required>
				<div class="invalid-feedback">
					Prego inserire un nome valido.
				</div>
			</div>

			<div class="col-md-4 mb-3">
				<label for="validationCustom02">Cognome</label>
				<input type="text" minlength="2" class="form-control" id="validationCustom02" placeholder="Cognome" required>
				<div class="invalid-feedback">
					Prego inserire un cognome valido.
				</div>
			</div>

			<div class="col-md-4 mb-3">
				<label for="validationCustom01">Indirizzo mail</label>
				<input type="text" class="form-control" id="validationCustom01" placeholder="Indirizzo mail" required>
				<div class="invalid-feedback">
					Prego inserire un indirizzo valido.
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4 mb-3">
				<label for="validationCustom03">Città</label>
				<input type="text" class="form-control" id="validationCustom03" placeholder="Città" required>
				<div class="invalid-feedback">
					Prego inserire una città valida.
				</div>
			</div>

			<div class="col-md-4 mb-3">
				<label for="validationCustom04">Stato</label>
				<input type="text" class="form-control" id="validationCustom04" placeholder="Stato" required>
				<div class="invalid-feedback">
					Prego inserire uno stato valido.
				</div>
			</div>

			<div class="col-md-4 mb-3">
				<label for="validationCustom05">C.A.P.</label>
				<input type="number" min="09000" max="09999" minlength="5" maxlength="5" class="form-control" id="validationCustom05" placeholder="Inserisci un C.A.P. valido" required>
				<div class="invalid-feedback">
					Prego inserire un C.A.P. valido.
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4 form-group">
				<label for="exampleFormControlSelect2">Seleziona il tuo sesso.</label><br>
				<label class="custom-control custom-radio">

					<input id="radio1" name="radio" type="radio" class="custom-control-input">
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">Maschio</span>
				</label>
				<label class="custom-control custom-radio">
					<input id="radio2" name="radio" type="radio" class="custom-control-input">
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">Femmina</span>
				</label>
			</div>
   				<div class="col-md-8 form-group">
					<label for="exampleFormControlSelect2">Seleziona la tipologia di esame.</label>
					<select class="form-control" id="exampleFormControlSelect2">
						<option>Radiografia</option>
						<option>Tomografia Computerizzata (T.C.)</option>
						<option>Risonanza Magnetica (R.M.)</option>
						<option>Ecografia</option>
						<option>Mammografia</option>
						<option>Medicina Nucleare</option>
					</select>
				</div>
			</div>
		</div>
		<button class="btn btn-primary" type="submit">Conferma i dati</button>

	</form>


	<script src="script.js"></script>
	<?php include('script.php'); ?>
</body> 



</body> 

</html>
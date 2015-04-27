@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Nom</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="nom" value="{{ old('nom') }}">
							</div>
						</div>
                        
                        <div class="form-group">
							<label class="col-md-4 control-label">Prenom</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="prenom" value="{{ old('prenom') }}">
							</div>
						</div>
                   		
                   		<div class="form-group" id="birthdate">
                    <label class="col-md-4 control-label">Date de naissance</label>
                    <div class="col-md-2">
                        <select class="form-control" name="jour">
                          <option value="0">Jour</option>
                             <?php
                                for ($i = 1; $i <= 31; $i++)
                                {
                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                }
                            ?>
                            <script type="text/javascript"> $('.selectpicker').selectpicker();</script>
                        </select></div>
                        <div class="col-md-2">
                    <select  class="form-control" name="mois">
                        <option value="00">Mois</option>
                        <option value="01">Janvier</option>
                        <option value="02">Février</option>
                        <option value="03">Mars</option>
                        <option value="04">Avril</option>
                        <option value="05">Mai</option>
                        <option value="06">Juin</option>
                        <option value="07">juillet</option>
                        <option value="08">Aout</option>
                        <option value="09">Septembre</option>
                        <option value="10">Octobre</option>
                        <option value="11">Novembre</option>
                        <option value="12">Décembre</option>
                    </select></div>
                    <div class="col-md-2">
                  <select  class="form-control" name="annee">
                       <option value="0">Année</option>
                        <?php
                            for ($i = 2015; $i >= 1930; $i--)
                            {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                        ?>  

                  </select></div>
                </div>
                        <div class="form-group">
							<label class="col-md-4 control-label">CIN</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="cin" value="{{ old('cin') }}">
							</div>
						</div>

              

						<div class="form-group">
							<label class="col-md-4 control-label">Adresse E-mail</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>
                        
                        <div class="form-group">
							<label class="col-md-4 control-label">Téléphone</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="tel" value="{{ old('tel') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Mot de passe</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirmez le mot de passe</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Envoyer
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

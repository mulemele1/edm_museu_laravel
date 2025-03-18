<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cadastre-se</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="{{ asset('plugins/fontawesome/js/all.min.js') }}"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/portal.css') }}">

</head> 

<body class="app app-signup p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="#"><img class="" src="{{ asset('assets/images/logo-musedm_1.png') }}" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-4">Cadastre-se</h2>					
	
					<div class="auth-form-container text-start mx-auto">
						<form class="auth-form auth-signup-form" action="{{ route('signup') }}" method="POST">         
							@csrf
							<div class="mb-3">
								<label class="sr-only" for="signup-name">Se Nome</label>
								<input id="signup-name" name="name" type="text" class="form-control signup-name" placeholder="Nome completo" required="required">
							</div>
							<div class="mb-3">
								<label class="sr-only" for="signup-email">Seu Email</label>
								<input id="signup-email" name="email" type="email" class="form-control signup-email" placeholder="Digite seu Email" required="required">
							</div>
							<div class="mb-3">
								<label class="sr-only" for="signup-password">Senha</label>
								<input id="signup-password" name="password" type="password" class="form-control signup-password" placeholder="Criar uma senha" required="required">
							</div>
                            <div class="mb-3">
                                <label class="sr-only" for="signup-password-confirmation">Confirmar Senha</label>
                                <input id="signup-password-confirmation" name="password_confirmation" type="password" class="form-control signup-password" placeholder="Confirme sua senha" required="required">
                            </div>
							<div class="extra mb-3">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="RememberPassword">
									<label class="form-check-label" for="RememberPassword">
										Eu concordo com os<a href="#" class="app-link">Termos de Serviço</a> e a<a href="#" class="app-link">Política de Privacidade </a>.
									</label>
								</div>
							</div><!--//extra-->
							
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Inscrever-se</button>
							</div>
						</form><!--//auth-form-->
						
						<div class="auth-option text-center pt-5">Já tem uma conta? Faça <a class="text-link" href="{{ route('login') }}">Entrar</a></div>
					</div><!--//auth-form-container-->	
					
					
				    
			    </div><!--//auth-body-->
		    
			    <footer class="app-auth-footer">
				    <div class="container text-center py-3">
				         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via nosso website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			        
				    </div>
			    </footer><!--//app-auth-footer-->	
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">			    
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				    <div class="overlay-content p-3 p-lg-4 rounded">
					    <h5 class="mb-3 overlay-title">Explore Portal Admin Template</h5>
					    <div>Portal is a free Bootstrap 5 admin dashboard template. You can download and view the template license <a href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">here</a>.</div>
				    </div>
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->
</body>
</html>

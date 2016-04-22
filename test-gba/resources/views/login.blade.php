<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

<div class="background-login-page">
<div class="wrapper">
  <form class="login">
    <p class="title"><i class="fa fa-users" style="margin-right: 10px"></i> Connexion GBA</p>
    <input type="text" placeholder="Nom d'utilisateur" autofocus/>
    <i class="fa fa-user"></i>
    <input type="password" placeholder="Mot de passe" />
    <i class="fa fa-unlock-alt"></i>
    <a href="#">Mot de passe oublié ?</a>
    <button>
      <i class="spinner"></i>
      <span class="state">Se connecter</span>
    </button>
  </form>
  </p>
</div>
</div>

<script src="{{ asset('js/jquery-2.1.4.js') }}"></script>

<script type="text/javascript">
var working = false;
$('.login').on('submit', function(e) {
  e.preventDefault();
  if (working) return;
  working = true;
  var $this = $(this),
    $state = $this.find('button > .state');
  $this.addClass('loading');
  $state.html('Authenticating');
  setTimeout(function() {
    $this.addClass('ok');
    $state.html('Welcome back!');
    setTimeout(function() {
      $state.html('Log in');
      $this.removeClass('ok loading');
      working = false;
    }, 4000);
  }, 3000);
});
</script>
<div class="container">
	<div class="footer">
	  <p class="pull-left">
	    Copyright &copy; 2017 -2020 Trinity Blog
	  </p>
	  <p class="pull-right">
	    Blog By <a target="_blank" href="https://adetayomodified.netlify.app">Adetayo Omotomiwa</a>
	  </p>
	<div class="clearfix"></div>
	</div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>


window.onscroll = function(){scrollFunction()};
const Nav =  document.querySelector('nav');
Nav.style.transition = "all 0.5s ease-out";
console.log(Nav);
const scrollFunction = () => {
  if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
   
   Nav.classList.add("bg-success");
  
  }else{
    Nav.classList.remove("bg-success")
  }
}

</script>
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

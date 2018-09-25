

  


f =  function() {
      var url = this.getAttribute('href');
      window.history.pushState(null, null, url);      
      return false;
}

document.getElementById('a1').onclick = f;
document.getElementById('a2').onclick = f;
document.getElementById('a3').onclick = f;

//window.addEventListener('popstate', , false) ;
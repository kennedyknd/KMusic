<!-- The Contato Section -->
<div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contato">
    <h2 class="w3-wide w3-center">CONTATO</h2>
    <p class="w3-opacity w3-center"><i>Gostou do que viu? Entre em contato!</i></p>
    <div class="w3-row w3-padding-32">
        <div class="w3-col m6 w3-large w3-margin-bottom">
            <i class="fa fa-map-marker" style="width:30px"></i> Brasília, Brasil<br>
            <i class="fa fa-phone" style="width:30px"></i> Telefone: 61 9 9199 8496<br>
            <i class="fa fa-envelope" style="width:30px"> </i> Email: kennedyalves.ka@gmail.com<br>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    <p class="w3-medium">Desenvolvido por Kennedy Alves Soares</p>
</footer>
</div>
<script>
    // Automatic Slideshow - change image every 4 seconds
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 4000);
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    // When the user clicks anywhere outside of the modal, close it
    var modal = document.getElementById('ticketModal');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>

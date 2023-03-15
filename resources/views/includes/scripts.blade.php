<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src=" {{url('user/script/js/bootstrap.min.js')}} "></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.2/datatables.min.js"></script>
<script src="https://kit.fontawesome.com/eaaad48747.js" crossorigin="anonymous"></script>

               

<script>
    $(document).ready( function () {
    $('#example').DataTable();
} );
</script>
    


<script type="text/javascript">
    var nav = document.querySelector('nav');
    var isi_nav = document.getElementById("isi-nav")

    window.addEventListener('scroll', function () {
      if (window.pageYOffset > 50) {
        nav.classList.add('bg-light', 'shadow'),
        isi_nav.classList.add('bg-light');
      } else {
        nav.classList.remove('bg-light', 'shadow'),
        isi_nav.classList.remove('bg-light');
      }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{url('admins/js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src=" {{url('admins/assets/demo/chart-area-demo.js')}} "></script>
<script src=" {{url('admins/assets/demo/chart-bar-demo.js')}} "></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src=" {{url('admins/js/datatables-simple-demo.js')}} "></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.2/datatables.min.js"></script>
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

       

<script>
    $(document).ready( function () {
    $('#tabel').DataTable();
    } );
</script>

   <!-- Rupiah Input -->
<script>
    /* Dengan Rupiah */
 var dengan_rupiah = document.getElementById('dengan-rupiah-1');
 dengan_rupiah.addEventListener('keyup', function(e)
 {
     dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
 });
 
 /* Fungsi */
 function formatRupiah(angka, prefix)
 {
     var number_string = angka.replace(/[^,\d]/g, '').toString(),
         split    = number_string.split(','),
         sisa     = split[0].length % 3,
         rupiah     = split[0].substr(0, sisa),
         ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
         
     if (ribuan) {
         separator = sisa ? '.' : '';
         rupiah += separator + ribuan.join('.');
     }
     
     rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
     return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
 }
</script>




   <!-- Rupiah Input2 -->
<script>
    /* Dengan Rupiah2 */
    var dengan_rupiah_2 = document.getElementById('dengan-rupiah-2');
    dengan_rupiah_2.addEventListener('keyup', function(e)
    {
        dengan_rupiah_2.value = formatRupiah2(this.value, 'Rp. ');
    });
 
 /* Fungsi */
 function formatRupiah2(angka, prefix)
 {
     var number_string = angka.replace(/[^,\d]/g, '').toString(),
         split      = number_string.split(','),
         sisa       = split[0].length % 3,
         rupiah     = split[0].substr(0, sisa),
         ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
         
     if (ribuan) {
         separator = sisa ? '.' : '';
         rupiah += separator + ribuan.join('.');
     }
     
     rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
     return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
 }
</script>
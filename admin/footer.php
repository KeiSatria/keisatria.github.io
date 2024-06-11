</div>
 
<!--Javascript Pencarian Data Siswa Berdasarkan NIK-->
<script>
function getFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("getSearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("getTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<!--Javascript Pencarian Data Siswa Berdasarkan NIK-->

<!--Load Javascript Bootstrap (Perlu Internet)-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!--Load Javascript Bootstrap (Perlu Internet)-->

</body>
</html>

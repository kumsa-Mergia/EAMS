    <!-- Footer -->
    <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
<span>
    Woliso Poly Technic College Employee Attendance System &copy; <?= date("Y") ?>
</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
    
        </div>
        <!-- End of Content Wrapper -->
        
</body>
<script type="text/javascript">
    function myFunction(){
            var x = document.getElementById('myInput');
            if (x.type === "password") {
                x.type = "text";
            }
            else{
                x.type = "password";
            }
        }

         function update_permision_status(value,id) {

         let url = "../hrm/managePermision.php";
 
           window.location.href = url+'?id='+id+'&permision_status='+value;
            // alert("value is: "  +value+  "and id :=  " +id);
        }

        
</script>
</html>

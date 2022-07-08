<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>

document.getElementById("hamburger").onclick = function toggleMenu() {
  const navToggle = document.getElementsByClassName("toggle");
  for (let i = 0; i < navToggle.length; i++) {
    navToggle.item(i).classList.toggle("hidden");
  }
};

$(document).ready(function (e) {
     
    // $('#image').onclick = function () {
    //  this.value = null;
    // };
       
     $('#image').change(function(){
        // console.log(this.value);
              
      let reader = new FileReader();
   
      reader.onload = (e) => { 
   
        $('#preview-image-before-upload').attr('src', e.target.result); 
      }
   
      reader.readAsDataURL(this.files[0]); 
     
     });
     
  });
</script>

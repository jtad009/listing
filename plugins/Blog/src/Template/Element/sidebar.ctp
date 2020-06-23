

<div id="mySidenav" class="sidenav" style="">
  <a href="javascript:void(0)" class="closebtn text-muted" onclick="closeNav()">&times;</a>
  <br/>
 <!--  <button class="dropdown-btn">Categories 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    
   
  <a href="#">Link 2</a>
    <a href="#">Link 3</a> 
  </div> -->
  <?php foreach ($c as $category): ?>
      <?= $this->Html->link(ucfirst($category->category).'<span class="badge   ml-3 small">'.$category->article_count.'</span>', ['controller'=>'articles', 'action'=>'category', $category->category], ['escape'=>false])?>
    <?php endforeach ?>
  <!-- <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a> -->
</div>

<script>
  /* Open the sidenav */
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

/* Close/hide the sidenav */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
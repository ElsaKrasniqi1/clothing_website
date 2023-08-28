<header class="row nav">
      <div class="name col-lg-3">
        <h5>Libraria Online</h5>
      </div>
      <div class="icons col-lg-9">
        <ul style="list-style: none;">
          <li class="listat">
            <i class="fa fa-solid fa-circle"></i>
            <a style="color:black" href="../index.php">Ballina</a>
          </li>

          <li class="listat">
            <i class="fa fa-sharp fa-solid fa-book"></i>
            <a style="color:black" href="books.php">Librat</a>
          </li>
          <li class="listat">
            <i class="fa fa-solid fa-user"></i>
            <a style="color:black" href="authors.php">Autorët</a>
          </li>
          <?php if(isset($_SESSION['role'])){ ?>
            <li style="cursor:pointer" onClick="logout()" class="listat">

            <i class="fa fa-solid fa-user-plus"></i>
            <a style="color:black" >Çkyçu</a>
          </li>
          <?php } else{ ?>
            <li class="listat">
            <i class="fa fa-solid fa-user-plus"></i>
            <a style="color:black" href="./signup.php">Kyçu</a>
          </li>
          <?php } ?>
        </ul>
      </div>
</header>
<div class="header">
    <div class="container">
      <div class="login">
        <div class="login-field">
          <form action="">
            <div>
              <input type="text" name="" value="username" />
              <input type="password" name="" value="password" />
              <!--
              <input type="submit" value="Logi sisse">
              -->
            </div>
          </form>
          <button class="login-button add-car">Logi sisse</button>
          <button class="register-form">Registreeru</button>
          
        </div>
        <div class="login-toggle">Logi sisse</div>
        
      </div>
      <div class="clear"></div>
    </div>

    <div class="search-box">
      <div class="container">
        <select>
          <option>Mis iganes</option>
          <option>Kes iganes</option>
          <option>Kus iganes</option>
          <option>Mida iganes</option>
        </select>
      <select>
          <option>Mis iganes</option>
          <option>Kes iganes</option>
          <option>Kus iganes</option>
          <option>Mida iganes</option>
        </select>
      <button class="logout">Otsi</button>
      <button class="more-details">Rohkem detaile</button>
      <div class="detail-search">
        <select>
          <option>Mis iganes</option>
          <option>Kes iganes</option>
          <option>Kus iganes</option>
          <option>Mida iganes</option>
        </select>
      <select>
          <option>Mis iganes</option>
          <option>Kes iganes</option>
          <option>Kus iganes</option>
          <option>Mida iganes</option>
        </select>
      <select>
          <option>Mis iganes</option>
          <option>Kes iganes</option>
          <option>Kus iganes</option>
          <option>Mida iganes</option>
        </select>
      <select>
          <option>Mis iganes</option>
          <option>Kes iganes</option>
          <option>Kus iganes</option>
          <option>Mida iganes</option>
        </select>
        

      </div>

      </div>
    </div>

  </div>
<div class="container">

  <div class="content">
      
  <?php foreach ($cars as $car) {?>
    <div class="object">
      <a href=<?php  ?>></a>
      <div class="object-img">
      
      <img alt="" src="img/car.jpg" />
      </div>
      <div class="object-text">
      <h2><?php echo $car->make; echo $car->model; ?></h2>
      <p><?php echo $car->description; ?></p>
      </div>
    
    </div>  
  <?php } ?>
      

  <div class="clear"></div>

  </div>
</div>
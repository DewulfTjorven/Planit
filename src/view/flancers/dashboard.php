<section class="header">
  <img src="../images/logo.svg" alt="Flancer logo" width="150">
</section>
<section class="title--section">
  <div class="title">
    <h1>Available freelancers</h1>
  </div>
  <div class="nav">
    <a href="index.php?page=job"><img src="../images/filter.svg" alt="filter" width="25"></a>
  </div>
</section>
<section>
<p>filter by</p>

<section class="filter">
    <h2 class="filter__title">Filter</h2>
    <form action="index.php?page=dashboard" class="filter__form" method="get">
      <select name="filter__select" id="filter__select">
       <option value="recommendations">recommendations</option>
       <option value="location">location</option>
       <option value="pricelow">pricelow</option>
      </select>
      <input type="submit" value="Filter" class="form__submit input input--button">
    </form>
  </section>

</section>
<section class="flancers__overview">
  <?php
  foreach($flancers as $flancer){
    ?>
  <a href ="index.php?page=detail&id=<?php echo $flancer['id']; ?>">
    <div class="flancer__card">
      <div class="img__div">
        <img class="flancer__image" src="../images/<?php echo $flancer["image"] ?>" width="104" alt="<?php echo $flancer["firstname"] ?>">
      </div>

      <div class="flancer__data">
        <p class="flancer__type"><?php echo $flancer["flancetype"] ?></p>
        <h2 class="flancer__name"><?php echo $flancer["firstname"] . ' ' . $flancer["lastname"] ?></h3>
        <p class="flancer__bio" ><?php echo $flancer["bio"] ?></p>
          <div class="flancer__info">
            <p class="flancer--info flancer--info__location"><?php echo $flancer["location"] ?></p>
            <p class="flancer--info flancer--info__recommendations"><?php echo $flancer["recommendations"]?> recommendations</p>
          </div>
      </div>
    </div>
  </a>
    <?php
  }
?>
</section>




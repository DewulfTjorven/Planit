<section class="header">
<a href="index.php?page=dashboard"><img src="../images/logo.svg" alt="Flancer logo" width="150"></a>
</section>

<section class="title__section padding--bottom">
    <h1 class="padding--bottom">Add a job</h1>
    <a href="index.php?page=job"><img src="../images/filter.svg" alt="view jobs" width="22"></a>
</section>

<section>
<form action="index.php?page=form" method="POST" class="job__form">
    <input type="hidden" name="action" value="createjob" class=""/>

    <label for="form__jobname">Name of the job</label>
    <span class="error"><?php if(!empty($errors['jobname'])){ echo $errors['jobname'];} ?></span>
    <input class="input form__jobname padding--bottom" type="text" name="jobname" value="<?php if(!empty($_POST['jobname']) && $_POST['action'] == 'createjob'){echo $_POST['jobname'];} ?>" required placeholder="Name of the job" min="8"/>
    <label for="form__textarea">Describe your job offer</label>
    <span class="error"><?php if(!empty($errors['description'])){ echo $errors['description'];} ?></span>
    <textarea placeholder="Description" class="input form__textarea" type="text" name="description" rows = "10" cols="100" required><?php if(!empty($_POST['description']) && $_POST['action'] == 'createjob'){echo $_POST['description'];} ?></textarea>
    <input class="hidden" type="number" name="price" min=1 required value="0"/>
    <input class="hidden" type="number" name="duration" min=1 required value="0"/>
    <input class="hidden" type="text" name="location" required value="/"/>
    <input class="hidden" type="text" name="skills" required value="/"/>
    <?php if(!empty($_POST['action']) && $_POST['action'] == 'createjob'){ ?>
      <a href="index.php?page=formupdate" class="button-blue">Add job info</a>
    <?php }else{ ?>

      <button  type="submit" class="button-blue">Verify info</button>
    <?php } ?>

  </form>
</section>

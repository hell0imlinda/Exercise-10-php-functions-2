<?php 

function titlecase($word) {
  $word = ucwords($word);
  return $word;
}

function capfirst($word) {
  $word = ucfirst($word);
  return $word;
}

function makedimsum($type) {
  if ($type == 'dimsum') {
    $valid = true;
    $description = 'A Chinese dish of small steamed or fried savory dumplings containing various fillings, served as a snack or main course.';
  } else if ($type == 'ha-gow') {
    $valid = true;
    $description = 'Ha gow is a traditional Cantonese dumpling served in dim sum. The dumpling is sometimes called a shrimp bonnet for its pleated shape.';
  } 
    else if ($type == 'shu-mai') {
    $valid = true;
    $description = 'Shu-mai or siu mai, the Chinese steamed pork and shrimp dumplings, are one of the most popular items at dim sum parlors. But you dont have to go out just to enjoy them, because they&#8217re one of the easiest dumplings to make at home.</p>';
  } 
    else if ($type == 'phoenix-claws') {
    $valid = true;
    $description = 'To a dim sum newbie, braised chicken feet (a.k.a. Phoenix Claws) can look as intimidating to eat as it sounds. Plump braised chicken feet sticking out of a small bowl—it&rsquo;s a dish for those who love cartilage, skin, and bones.';
  } 
    else if ($type == 'dan-tat') {
    $valid = true;
    $description = 'The egg tart (commonly romanized as daahn tāat (Cantonese Yale: daan6 taat1), dàn tǎ (Mandarin), or dan tat) is a kind of custard tart found in Hong Kong, Portugal, Brazil, Britain, and various Asian countries, which consists of an outer pastry crust and is filled with egg custard and baked.';
  }
     else if ($type == 'luo-buo-gao') {
    $valid = true;
    $description = 'Pan-fried radish cakes.';
  } 
    else if ($type == 'cha-siu-bao') {
    $valid = true;
    $description = 'Cha siu bao is a Cantonese barbecue-pork-filled bun. The buns are filled with barbecue-flavored cha siu pork. They are served as a type of dim sum during yum cha and are sometimes sold in Chinese bakeries.';
  } else {
    $valid = false;
  };

  if ($valid == true) {
    return('
      <div class="card my-4 mx-auto" style="width: 20rem;">
        <img class="img-fluid" src="images/'.$type.'.jpg" alt="Card image cap">
        <div class="card-block">
          <h2 class="h4 card-title">'.titlecase($type).'</h2>
          <p class="card-text">'.$description.'</p>
        </div>
      </div>
    ');
  } else {
    return('
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="m-0"><strong>'.capfirst($type).'? Sorry, we can&rsquo;t seem to find that.</strong> Please try a different submission.</p>
      </div>
    ');
  }
}

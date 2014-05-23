
<div class="crunch">

 <div class="Looker"> <?php print $this->header ; ?></div>
  <br>
  <?php if($this->funding != NULL){print '<div class="small-font fund"> <span class="font_">Funding:</span>'.$this->funding.'</div><br>' ;} ?>
  <?php if($this->team_total != NULL){print '<div class="small-font employ"> Total employees:'.$this->team_total.'</div><br>' ;} ?>
  <?php if($this->description != NULL){print '<div class="small-font"> <span class="font_">Description:</span>'.$this->description.'</div><br>' ;} ?>
  <?php if($this->date_founded != NULL){print '<div class="small-font"> <span class="font_">Date founded:</span>'.$this->date_founded.'</div><br>' ;} ?>
  <?php if($this->company_homepage_url != NULL){print '<div class="small-font"> <span class="font_">Homepage URL:</span>'.$this->company_homepage_url.'</div><br>' ;} ?>

</div>

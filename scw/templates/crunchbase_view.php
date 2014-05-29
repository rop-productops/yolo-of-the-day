
<div class="crunch">
 <DIv>
<!-- Border to see what it is -->
  
   <div class="Looker"> <?php print $this->header ; ?></div>
  <BR />
  <table>
  <?php if($this->funding != NULL){print '<TR><TD style="width: 225px;" class="small-font fund"> <span class="font_">Funding:</span>'.$this->funding.'</td>' ;} ?>
  <?php if($this->team_total != NULL){print '<td style="width: 225px;" class="small-font employ"> Total employees:'.$this->team_total.'</td></tr>' ;} ?>
  </table>
  <BR />
  <?php if($this->description != NULL){print '<div class="small-font"> <span class="font_">Description:</span>'.$this->description.'</div>' ;} ?>
    <BR />
  <?php if($this->date_founded != NULL){print '<div class="small-font"> <span class="font_">Date founded:</span>'.$this->date_founded.'</div>' ;} ?>
  
</div>

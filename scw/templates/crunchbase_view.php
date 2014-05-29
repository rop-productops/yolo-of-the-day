
<div class="crunch">
 <DIv>
<!-- Border to see what it is -->
  
   <div class="Looker border"> <?php print $this->header ; ?></div>
  <BR />
  <table class="border">
  <?php if($this->funding != NULL){print '<TR><TD style="width: 225px;" class="small-font fund"> <span class="font_">Funding:</span> <BR />'.$this->funding.'</td>' ;} ?>
  <?php if($this->team_total != NULL){print '<td style="width: 225px;" class="small-font employ"> Total employees:<BR />'.$this->team_total.'</td></tr>' ;} ?>
  </table>
  <BR />
  <?php if($this->description != NULL){print '<div class="border small-font"> <span class="font_">Description:</span><BR />'.$this->description.'</div>' ;} ?>
    <BR />
  <?php if($this->date_founded != NULL){print '<div class="border small-font"> <span class="font_">Date founded:</span> <BR />'.$this->date_founded.'</div>' ;} ?>
  
</div>

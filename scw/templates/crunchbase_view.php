
<div class="crunch">
 <DIv>
<!-- Border to see what it is -->
  
   <div class="Looker border"> <?php print $this->header ; ?></div>
  <table>
  <?php if($this->funding != NULL){print '<TR><TD style="width: 225px;" class=" border> <span class="font_">Funding:</span> <BR /> <span class="small-font">'.$this->funding.'</span></td>' ;} ?>
  <?php if($this->team_total != NULL){print '<td style="width: 225px;" class="border> Total employees:<BR /> <span="small-font">'.$this->team_total.'</span> </td></tr>' ;} ?>
  </table>
  <?php if($this->description != NULL){print '<div class="border small-font"> <span class="font_">Description:</span><BR /> <span class="small-font">'.$this->description.'</span> </div>' ;} ?>
  <?php if($this->date_founded != NULL){print '<div class="border small-font"> <span class="font_">Date founded:</span> <BR /> <span class="small-font">'.$this->date_founded.'</span></div>' ;} ?>
  
</div>

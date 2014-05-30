
<div class="crunch">
 <Div>
<!-- Border to see what it is -->
  
   <div class="Looker border"> <?php print $this->header ; ?></div>

  <?php if($this->funding != NULL){
  print '
        <div style="width: 227px;" class=" border"> 
            <span class="font_">Funding:</span> 
                <BR /> 
                    <span class="small-font">
                        '.$this->funding.'
                    </span>
        </div>
    ';} ?>
  <?php if($this->team_total != NULL){
    print '
        <div style="width: 225px; float: right;" class="border"> 
            <span class="font_">Total employees:</span> 
                <BR /> 
                <span="small-font">'
                    .$this->team_total.
                '</span> 
        </div>
        ' ;} ?>
  <?php if($this->description != NULL){
    print '
        <div class="border small-font"> 
            <span class="font_">Description:</span>
            <BR /> 
            <span class="small-font">'
                .$this->description.'
            </span> 
        </div>
    ' ;} ?>
  <?php if($this->date_founded != NULL){
    print '
        <div class="border small-font"> 
            <span class="font_">Date founded:</span> 
            <BR /> 
            <span class="small-font">'
                .$this->date_founded.'
            </span>
        </div>
    ' ;} ?>
  
</div>

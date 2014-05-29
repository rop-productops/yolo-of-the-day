
<div class="crunch">
 <Table>
  <Tr>
   <td class="Looker"> <?php print $this->header ; ?></td>
  </TR>
  <TR>
  <?php if($this->funding != NULL){print '<TD style="width: 50%;" class="small-font fund"> <span class="font_">Funding:</span>'.$this->funding.'</td>' ;} ?>
  <?php if($this->team_total != NULL){print '<td style="width: 50%;" class="small-font employ"> Total employees:'.$this->team_total.'</td>' ;} ?>
  </TR>
  <TR>
  <?php if($this->description != NULL){print '<td class="small-font"> <span class="font_">Description:</span>'.$this->description.'</td>' ;} ?>
  </TR>
  <TR>
  <?php if($this->date_founded != NULL){print '<td class="small-font"> <span class="font_">Date founded:</span>'.$this->date_founded.'</td>' ;} ?>
  </TR>
 </Table>
</div>

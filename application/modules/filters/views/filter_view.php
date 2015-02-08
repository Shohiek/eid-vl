<style>

.filterItem{
  width:350px;
  float:left;
  margin-right:5px;

}
.filterButton{
  border-radius: 4px !important;
}
</style>
<script type="text/javascript">
$('#reportrange').daterangepicker(
{
  ranges: {
   'Today': [moment(), moment()],
   'Last 7 Days': [moment().subtract('days', 6), moment()],
   'Last 30 Days': [moment().subtract('days', 29), moment()],
   'This Month': [moment().startOf('month'), moment().endOf('month')],
   'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')],
   'Last Three Months': [moment().subtract('month', 3).startOf('month'), moment().subtract('month').endOf('month')],
   'Last Six Months': [moment().subtract('month', 6).startOf('month'), moment().subtract('month').endOf('month')],
 },
 startDate: moment().subtract('days', 29),
 endDate: moment()
},
function(start, end) {
  $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
  $('#fro').val(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY')).trigger('change');
  $('#to').val(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY')).trigger('change');
}
);
</script>
<div class="row " style="border-bottom: 1px solid #eeeeee;padding-bottom:10px">
  <div class="col-md-8">
    <ui-select ng-model="address.selected" theme="bootstrap" ng-disabled="disabled" reset-search-input="false" style="" class="filterItem">
    <ui-select-match placeholder="Select A Program">{{$select.selected.formatted_address}}</ui-select-match>
    <ui-select-choices repeat="address in addresses track by $index" refresh="refreshAddresses($select.search)"  refresh-delay="0">
    <div ng-bind-html="address.formatted_address | highlight: $select.search"></div>
  </ui-select-choices>
</ui-select>

<ui-select ng-model="address.selected" theme="bootstrap" ng-disabled="disabled" reset-search-input="false" style="" class="filterItem">
<ui-select-match placeholder="Search Criteria to Filter by...">{{$select.selected.formatted_address}}</ui-select-match>
<ui-select-choices repeat="address in addresses track by $index" refresh="refreshAddresses($select.search)"  refresh-delay="0">
<div ng-bind-html="address.formatted_address | highlight: $select.search"></div>
</ui-select-choices>
</ui-select>

<div class="input-group" class="filterItem">
  <div class="input-group-btn ">
    <button type="button" class="btn btn-primary filterButton"><i class="fa fa-undo fa-sm"></i> Reset</button>      
  </div>
</div>
</div>

<div class="col-md-4">
  <div class="input-group " class="filterItem">
    <div class="input-group-btn ">
      <div id="reportrange" class="btn btn-primary pull-right filterButton">
        <i class="fa fa-calendar fa-md"></i>
        <span><?php echo date("F j, Y", strtotime('last day of this year')); ?> - <?php echo date("F j, Y"); ?></span> <b class="caret"></b>
      </div>
    </div>
  </div>
</div>
</div>


</div>

<input class="hide" type="text" id="fro" ng-model="filter.from" />    <!-- {{ filter.from }} --> <br/>
<input class="hide" type="text" id="to"  ng-model="filter.to"/>   <!-- {{ filter.to }} -->
<style>

.filterItem{
  width:100%;
  float:left;
  margin-right:0px;
  margin-left:0px;

}
.filterSection{

  padding-right: 1px;
  padding-left: 1px;
}
.filterButton{
  border-radius: 4px !important;
  widht:100%;
}
.ui-select-choices-group-label{
  font-weight: bold;
  font-size:14px;
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
   'This Year': [moment().startOf('year'),moment()],
 },
 startDate: moment().startOf('year'),
 endDate: moment(),
 showWeekNumbers:true,
 showDropdowns:true
},
function(start, end) {
  $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
  $('#fro').val(start.format('YYYY-MM-D') ).trigger('change');
  $('#to').val(end.format('YYYY-MM-D') ).trigger('change');
}
);
</script>

<div class="row " style="border-bottom: 1px solid #eeeeee;padding-bottom:10px">
  <div class="col-md-3 filterSection">
    <ui-select ng-model="filters.programs.selected " theme="bootstrap" ng-disabled="disabled" reset-search-input="false" style="" class="filterItem">
    <ui-select-match placeholder="Select a Program...">{{$select.selected.name +" ("+ $select.selected.initials +")" }}</ui-select-match>
    <ui-select-choices repeat="program in filters.programs track by $index" >
    <div ng-bind-html="program.name | highlight: $select.search"></div>
  </ui-select-choices>
</ui-select>
</div>

<div class="col-md-3 filterSection">

  <ui-select ng-model="filters.entities.selected" theme="bootstrap" ng-disabled="disabled" style="min-width: 300px;">
    <ui-select-match placeholder="Search Criteria to Filter by...">{{$select.selected.name +" ("+ $select.selected.type +")"  }}</ui-select-match>
    <ui-select-choices group-by="'type'" repeat="entity in filters.entities | entityFilter: {name: $select.search, phone: $select.search}">
      <div ng-bind-html="entity.name | highlight: $select.search"></div>
      <small>
        email: {{entity.email}}
        phone: <span ng-bind-html="''+entity.phone | highlight: $select.search"></span>
      </small>
    </ui-select-choices>
    </ui-select>

</div>
<div class="col-md-3 filterSection">

<div class="input-group" class="filterItem">
  <div class="input-group-btn ">
    <button type="button" ng-click="clear()" class="btn btn-primary filterButton"><i class="fa fa-undo fa-sm"></i> Reset</button>      
  </div>
</div>
</div>

<div class="col-md-3 filterSection">
  <div class="input-group " class="filterItem" >
    <div class="input-group-btn " >
      <div id="reportrange" class="btn btn-primary pull-right filterButton" style="width: 100%;">
        <i class="fa fa-calendar fa-md"></i>
        <span><?php echo 'January '.date("1, Y", strtotime('first day of this year')); ?> - <?php echo date("F j, Y"); ?></span> <b class="caret"></b>
      </div>
    </div>
  </div>
</div>
</div>


</div>

<input class="hide" type="text" id="fro" ng-model="filters.startDate" />    <!-- {{ filters.startDate}} --> <br/>
<input class="hide" type="text" id="to"  ng-model="filters.endDate"/>   <!-- {{ filters.endDate }} -->
<style>


@media (min-width: 300px) {
	#sidebar.affix-top {
		position: static;
		margin-top:30px;
		width:228px;
	}

	#sidebar.affix {
		position: fixed;
		top:70px;
		width:228px;
	}
}

#sidebar li.active {
	border:0 #eee solid;
	border-right-width: 4px;
	border-right-color: #428bca;
}


</style>

<div class="row" style="border-color: #428bca;">
	<div class="col-md-2" id="leftCol">

		<ul class="nav nav-stacked" id="sidebar">
			<li><a href="#tests">Testing Trends</a></li>
			<li><a href="#tat">Turn-Around-Time (TAT)</a></li>
			<li><a href="#facilitiesTests">Facilities and Tests</a></li>
			<li><a href="#labPerformance">Lab Performance</a></li>
			<li><a href="#TBCoinf">TB Co-Infection </a></li>
			<li><a href="#VLSuppression">Viral Load Suppression Level </a></li>
			<li ng-show="true"><a href="#SampleType">Sample Type </a></li>
			<li ng-show="true"><a href="#BF">EID Breast Feeding {{filters.programs.selected.initials}} </a></li>
		</ul>
	</div>
	<div class="col-md-10">
		<div class="" ui-view></div>
	</div>	
</div>



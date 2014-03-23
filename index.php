<?php
include("include/start.php");
include("include/header.php");

?>


	<ul ng-hide="dossier.uid">
		<li ng-repeat="person in persons">
			<a href="" data="{{person.uid}}" ng-click="getDossier(person.uid)">{{person.name}}</a>
		</li>
	</ul>
	<div ng-show="dossier.uid">
		<h1>{{dossier.name}}</h1>
		<table>
			<tr>
				<th>Name:</th>
				<td ng-hide="edit.name" ng-dblclick="editMode('name')">{{dossier.name}}</td>
				<td ng-show="edit.name">
					<input value="{{dossier.name}}" data="dossier.name">
					<button ng-click="saveField('name')" ng-show="edit.name">Save</button>
					<button ng-click="edit=false" ng-show="edit.family">Cancel</button>
				</td>
			</tr>
			<tr>
				<th>Family:</th>
				<td ng-hide="edit.family" ng-dblclick="editMode('family')">{{dossier.family}}</td>
				<td ng-show="edit.family">
					<input value="{{dossier.family}}" data="dossier.family">
					<button ng-click="saveField('family')" ng-show="edit.family">Save</button>
					<button ng-click="edit=false" ng-show="edit.family">Cancel</button>
				</td>
			</tr>
			<tr>
				<th>City:</th>
				<td ng-hide="edit.city" ng-dblclick="editMode('city')">{{dossier.city}}</td>
				<td ng-show="edit.city">
					<input value="{{dossier.city}}" data="dossier.city">
					<button ng-click="saveField('city')" ng-show="edit.city">Save</button>
					<button ng-click="edit=false" ng-show="edit.city">Cancel</button>
				</td>
			</tr>
			<tr>
				<th>Job:</th>
				<td ng-hide="edit.job" ng-dblclick="editMode('job')">{{dossier.job}}</td>
				<td ng-show="edit.job">
					<input value="{{dossier.job}}" data="dossier.job">
					<button ng-click="saveField('job')" ng-show="edit.job">Save</button>
					<button ng-click="edit=false" ng-show="edit.job">Cancel</button>
				</td>
			</tr>
			<tr>
				<th>Parent:</th>
				<td ng-hide="edit.parent" ng-dblclick="editMode('parent')">{{dossier.parent}}</td>
				<td ng-show="edit.parent">
					<input value="{{dossier.parent}}" data="dossier.parent">
					<button ng-click="saveField('parent')" ng-show="edit.parent">Save</button>
					<button ng-click="edit=false" ng-show="edit.parent">Cancel</button>
				</td>
			</tr>
			<tr>
				<th>Descendants:</th>
				<td ng-hide="edit.descendants" ng-dblclick="editMode('descendants')">{{dossier.descendants}}</td>
				<td ng-show="edit.descendants">
					<input value="{{dossier.descendants}}" data="dossier.descendants">
					<button ng-click="saveField('descendants')" ng-show="edit.descendants">Save</button>
					<button ng-click="edit=false" ng-show="edit.descendants">Cancel</button>
				</td>
			</tr>
		</table>
	</div>



<?php

include("include/footer.php");

?>
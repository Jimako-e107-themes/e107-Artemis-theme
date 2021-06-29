<?php
    /**
     * e107 website system.
     *
     * Copyright (C) 2008-2017 e107 Inc (e107.org)
     * Released under the terms and conditions of the
     * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
     *
     */

    $NEWS_GRID_TEMPLATE['cards']['start'] = '<div class="card-group">';

    $NEWS_GRID_TEMPLATE['cards']['featured'] = 
	'<div class="card">
		{SETIMAGE: w=400&h=400&crop=1}
		<div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
			<a href="{NEWSURL}" class="d-block">
			<img src="{NEWS_IMAGE: type=src&placeholder=true}" class="img-fluid border-radius-lg">
			</a>
		</div>
		<div class="card-body pt-2">
			<span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">{NEWS_CATEGORY_NAME}</span>
			<a href="{NEWSURL}" class="card-title h5 d-block text-darker">
			{NEWS_TITLE}
			</a>
			<p class="card-description mb-4">
			{NEWS_SUMMARY}
			</p>
			<div class="author align-items-center">
				{NEWS_AUTHOR_AVATAR: class=avatar shadow}
				<div class="name ps-3">
				<span>Mathew Glock</span>
				<div class="stats">
					<small>Posted on {NEWS_DATE=short}</small>
				</div>
				</div>
			</div>
		</div>
	</div>';

    $NEWS_GRID_TEMPLATE['cards']['item'] = 
'<div class="card">
	{SETIMAGE: w=400&h=400&crop=1}
	<div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
		<a href="{NEWSURL}" class="d-block">
		<img src="{NEWS_IMAGE: type=src&placeholder=true}" class="img-fluid border-radius-lg">
		</a>
	</div>
	<div class="card-body pt-2">
		<span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">{NEWS_CATEGORY_NAME}</span>
		<a href="{NEWSURL}" class="card-title h5 d-block text-darker">
		{NEWS_TITLE}
		</a>
		<p class="card-description mb-4">
		{NEWS_SUMMARY}
		</p>
		<div class="author align-items-center">
			{NEWS_AUTHOR_AVATAR: class=avatar shadow}
			<div class="name ps-3">
			<span>Mathew Glock</span>
			<div class="stats">
				<small>Posted on {NEWS_DATE=short}</small>
			</div>
			</div>
		</div>
	</div>
</div>';

$NEWS_GRID_TEMPLATE['cards']['end'] = '</div>';
 

 
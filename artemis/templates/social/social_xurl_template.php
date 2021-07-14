<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */


	/**
	 * {XURL_ICONS} template
	 */
	 $SOCIAL_XURL_TEMPLATE['default']['start'] = '<p class="xurl-social-icons hidden-print">';
	 $SOCIAL_XURL_TEMPLATE['default']['item'] = '<a target="_blank" href="{XURL_ICONS_HREF}" data-tooltip-position="top" class="e-tip social-icon social-{XURL_ICONS_ID}" title="{XURL_ICONS_TITLE}"><span class="e-social-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></span></a>';
	 $SOCIAL_XURL_TEMPLATE['default']['end'] = '</p>';

/*
<button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Facebook">
                        <i class="fab fa-facebook"></i>
                      </button>
                      */
	 $SOCIAL_XURL_TEMPLATE['contact']['start'] = '';
	 $SOCIAL_XURL_TEMPLATE['contact']['item'] = '<a target="_blank" href="{XURL_ICONS_HREF}" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="{XURL_ICONS_TITLE}">
                        <i class="fab fa-{XURL_ICONS_ID}"></i>
                      </a>';
	 $SOCIAL_XURL_TEMPLATE['contact']['end'] = '';

/* footer
 <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-dribbble"></span>
          </a>
          */
	 $SOCIAL_XURL_TEMPLATE['footer']['start'] = '';
	 $SOCIAL_XURL_TEMPLATE['footer']['item'] = '<a target="_blank" href="{XURL_ICONS_HREF}" class="text-secondary me-xl-4 me-4" data-toggle="tooltip" data-placement="bottom" data-original-title="{XURL_ICONS_TITLE}">
                         <span class="text-lg fab fa-{XURL_ICONS_ID}"></span>
                      </a>';
	 $SOCIAL_XURL_TEMPLATE['footer']['end'] = '';
# PerchCMS-GoSquared
Add GoSquared Analytics (http://gosquared.com) to Perch CMS admin. Requires a GoSquared account. Allows the 'Now' and 'Trends' data to be displayed within the Perch admin.

## Installation
Upload the `gosquared_montlewis` directory to `perch/addons/apps` and add `gosquared_montlewis` to your `config/apps.php` file.

Example:

	<?php
	    $apps_list = array(
	        'content', 
	        'categories',
	        'gosquared_montlewis'
	    );
	    
Then you must set your `GoSquared Embedded Dashboard API` and your GoSquared site's `Project Token` in the Perch settings area.

And that's it You should now see your site's GoSquared Analytics in Perch!

---


## License

The MIT License (MIT)

Copyright (c) 2018 Monty Lewis

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

<?php
/*
License:
"Remote Syslog" is a free application what can be used to view syslog messages.
Copyright (C) 2019 Tom Slenter, Ronald Gerits, YouLi

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.

For more information contact the author:
Name author: Tom Slenter
E-mail: info@remotesyslog.com
*/
?>

<html>
        <head>
                <title>Remote Syslog: Version v2.0.1</title>
        </head>
	<body>
		<?php $output = shell_exec('tail -n 30 /var/log/remote_syslog/remote_syslog.log'); echo "<pre>$output</pre>"; ?>
	</body>
</html>

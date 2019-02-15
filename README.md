# FileIcon
Generate Dynamic File Icon with extension of file displayed, format SVG

Pass the following variable values using get method to the php file to generate icon.
Ignoring these would load default values
Max length of extension is 4

ext=File Extension default value : ?

light=Light Color of Ribbon //hexcode (don't pass #) default color : #343C4F

dark=Dark Color of Ribbon //hexcode (don't pass #) default color : #1E2537

case=Case of Extension //upper,lower default case : (as passed into the string)

Note :
If you pass any color pass both , else it will load default for other which does'nt match color.

Examples

/icongenerator/index.php

/icongenerator/index.php?ext=svg&case=upper&light=003870&dark=002550

/icongenerator/index.php?ext=HTML&case=upper&light=00D0D0&dark=007070

/icongenerator/index.php?ext=Cpp&light=D00000&dark=700000

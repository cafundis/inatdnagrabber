# inatdnagrabber
Command line PHP script for pulling fungus DNA data from iNaturalist.

This script will pull metadata and DNA sequences from all iNaturalist fungus observations 
that have a "DNA Barcode ITS" observation field. It stores the data in a mySQL table 
called `inatimported`.

To run this script, first set up the conf.php file, then run the SQL file to create the 
new mySQL table. Finally, run the script from the command line:<br/>
`php ./dnagrabber.php`

The script may take many hours to import all the data. If the import gets interrupted, 
look at the script output to see what the last imported batch was. Then restart the script 
with the offset specified. For example, if the last line output by the script was...<br/>
`Processing batch 2 of 10699 (from record 1036452)...`<br/>
...you should restart the script with:<br/>
`php ./dnagrabber.php 1036452`

Any records that already exist in your `inatimported` table will be updated rather than 
duplicated when the script is run.

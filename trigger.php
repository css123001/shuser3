<?php
curl -X POST \
     -F token=TOKEN \
     -F "ref=REF_NAME" \
     -F "variables[MYREPONAMESHuser3]=SHuser3" \
     https://codeingress-test.hic.dundee.ac.uk/api/v4/projects/17/trigger/pipeline
?>

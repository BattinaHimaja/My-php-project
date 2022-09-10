<?php
fopen('phpwrite.txt','w');
fwrite(fopen('phpwrite.txt','w'),'himaja'."\n");
fwrite(fopen('phpwrite.txt','a'),'hi');
fclose(fopen('phpwrite.txt','a'));
?>
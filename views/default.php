 

<?php if(isset($content)): ?>
<h2>
<?php print $content ?>
</h2>
<?php endif; ?>
<div style="margin: 5em 0;padding:2em;background:#efecec;color:#000;clear:both;"> <b>Benchmarks</b>
  <pre>
  
  
<?php 
/* var_dump(debug_backtrace());
$arr = get_defined_functions();

print_r($arr['user']);*/

    $mtime = microtime(); 
   $mtime = explode(" ",$mtime); 
   $mtime = $mtime[1] + $mtime[0]; 
   $endtime = $mtime; 

   $mtime = T; 
   $mtime = explode(" ",$mtime); 
   $mtime = $mtime[1] + $mtime[0]; 
      $starttime = $mtime; 

   $totaltime = ($endtime - $starttime); 
   echo "This page was created in ".$totaltime." seconds"; 


//print (round(microtime()-T,5)*1000); ?>  
<?php print number_format(memory_get_usage()-M); ?> bytes
<?php print number_format(memory_get_usage()); ?> bytes (process)
<?php print number_format(memory_get_peak_usage(TRUE)); ?> bytes (process peak)
</pre>
   
   
  <?php if(!empty($_SESSION)) { ?>
  <b>Session Data</b> <?php print '<pre>';print_r($_SESSION);print '</pre>'; ?>
  <?php } ?>
  <?php $included_files = get_included_files(); ?>
  <b><?php print count($included_files); ?> PHP Files Included:</b>
  <pre>
<?php print implode("\n", $included_files); ?>
</pre>

 
</div>

<?php $ukr_map = $this->options; ?>
var ukr_config = {
	'default':{
		'borderclr':'<?php echo $ukr_map['borderclr']; ?>',
		'visnames':'<?php echo $ukr_map['visnames']; ?>',
	}<?php echo (isset($ukr_map['url_1']))?',':''; ?><?php $i = 1; 	while (isset($ukr_map['url_'.$i])) { ?>'ukr_<?php echo $i; ?>':{
		'hover': '<?php echo str_replace(array("\n","\r","\r\n","'"),array('','','','’'), is_array($ukr_map['info_'.$i]) ?
				array_map('stripslashes_deep', $ukr_map['info_'.$i]) : stripslashes($ukr_map['info_'.$i])); ?>',
		'url':'<?php echo $ukr_map['url_'.$i]; ?>',
		'targt':'<?php echo $ukr_map['turl_'.$i]; ?>',
		'upclr':'<?php echo $ukr_map['upclr_'.$i]; ?>',
		'ovrclr':'<?php echo $ukr_map['ovrclr_'.$i]; ?>',
		'dwnclr':'<?php echo $ukr_map['dwnclr_'.$i]; ?>',
		'enbl':<?php echo $ukr_map['enbl_'.$i]=='1'?'true':'false'; ?>,
		'visnames':'ukr_vn<?php echo $i; ?>',
		}
		<?php echo (isset($ukr_map['url_'.($i+1)]))?',':''; ?><?php $i++;} ?>
}
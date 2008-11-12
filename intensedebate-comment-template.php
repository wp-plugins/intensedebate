	<div id='idc-container'></div><script type='text/javascript'>
	var idcomments_acct='<?php echo get_option("id_blogAcct");?>';
	var idcomments_post_id='<?php echo $id;?>';
	var idcomments_post_time='<?php echo $post->post_date_gmt;?>';
	var idcomments_post_author='<?php echo addslashes(get_author_name($post->post_author));?>';
	var idcomments_post_title='<?php echo addslashes(urlencode($post->post_title));?>';
	var idcomments_post_url='<?php
	echo urlencode(the_permalink($id))."';";?>
	var idcomments_post_guid='<?php
	echo urlencode(the_permalink($post->guid))."';";?>

	var commentScriptWrapper = document.createElement("SCRIPT");
	commentScriptWrapper.type = "text/javascript";
	commentScriptWrapper.src = "http://www.intensedebate.com/js/wordpressTemplateCommentWrapper2.php?acct="+idcomments_acct+"&postid="+idcomments_post_id+"&title="+escape(idcomments_post_title)+"&url="+idcomments_post_url+"&posttime="+idcomments_post_time+"&postauthor="+idcomments_post_author+"&guid="+idcomments_post_guid;
	document.getElementsByTagName("HEAD")[0].appendChild(commentScriptWrapper);
	</script>
	<noscript>

<?php
	include(get_option("id_comment_template_file"));
?>
	</noscript>
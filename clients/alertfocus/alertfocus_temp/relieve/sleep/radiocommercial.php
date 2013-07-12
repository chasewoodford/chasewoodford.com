<?//begin code admpanel
$id = 123; 
$razdelid = "29"; 
$razdel_id = "29"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/sleep/index.php"; 
$id_author = 0; 
$title = "Radio commercial"; 
$description = "Text of two 60-second radio spots about sleep."; 
$partsfragmented = 1; 
$date_posted = "15-06-2005"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/relieve/sleep/radiocommercial.php"; 
$doc_identificate_name = "radiocommercial"; 
$content_source = ""; 
$content_source_url = ""; 
$url_archive_file = ""; 
//end code admpanel
?><?$site_root="/home4/jobhuntnow/public_html/alertfocus.com/";
include ($site_root."/support/database.php");
$db = connect_db();
$document_template_link = get_document_template_link($db,$template);
$tpl_file = get_tplfiledocument_link($db,$template);
$doc_content =<<<eod
<P>
<P>Do you remember sleeping so soundly, you wake up feeling refreshed?&nbsp; To get the deep sleep you need to be at your best, your brain has to let go and shift into low gear.&nbsp; Sleeping pills and alcohol degrade the quality of sleep.&nbsp; </P>
<P>If you’ve lost the natural ablity to get enough deep restorative sleep call me, Gary Ames at 610.668-3223.&nbsp; I show you how to train your brain waves with biofeedback.&nbsp; Biofeedback is a mirror.&nbsp; When you can see and hear your brain waves you can learn to control them.&nbsp; This is a proven method to improve sleep and performance.&nbsp; I also have a device approved by the FDA as safe and effective for anxiety, depression and insomnia. &nbsp;&nbsp;</P>
<P>Check out www.AlertFocus.com. &nbsp;Or call right now 610.668-3223. Six ten, sixty-six eight, thirty-two twenty-three.&nbsp; That’s AlertFocus.com or &nbsp;610.668-3223</P>
<P>
<HR id=null>
</P>
<P>Sleep, deep restorative sleep is essential to being fully awake so you can be at your best all day long.&nbsp; Missing even a half hour of sleep measurably decreases your performance.&nbsp; Sleeping pills and alcohol spoil sleep quality.&nbsp; </P>
<P>Getting to sleep and staying asleep is the ability to relax your brain.&nbsp; It’s the flexibility to shift into a very low gear.&nbsp; If your car couldn’t shift out of high gear, you’d take it to the shop.&nbsp; If your brain can’t get to sleep come see me, Gary Ames. &nbsp;&nbsp;I’m a licensed professional specializing in showing your mind how to control your brain.&nbsp; I use biofeedback, a proven method to train your brain waves to relax. &nbsp;I also have a device approved by the FDA as safe and effective for anxiety depression and insomnia.&nbsp; </P>
<P>Check out www.AlertFocus.com. &nbsp;Or call me right now 610.668-3223 six ten, sixty six eight, thirty-two twenty-three.&nbsp; That’s AlertFocus.com or &nbsp;610.668-3223. </P>
<P>&nbsp;</P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
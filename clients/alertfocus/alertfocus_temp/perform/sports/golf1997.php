<?//begin code admpanel
$id = 119; 
$razdelid = "31"; 
$razdel_id = "31"; 
$razdel_picture = ""; 
$razdel_link = "/perform/sports/index.php"; 
$id_author = 0; 
$title = "Golf research"; 
$description = "Presentation of research at the 1997 Winter Brain Conference. 14 of 15 golfers reported significant improvement in golf scores.  "; 
$partsfragmented = 1; 
$date_posted = "09-06-2005"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//perform/sports/golf1997.php"; 
$doc_identificate_name = "golf1997"; 
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
<P><STRONG>Peak Performance EEG Training and The Game of Golf<BR></STRONG>Dan Chartier, Ph.D., Larry Collins, Ed.D., Darren Koons, M.A.</P>
<P>Data from pre- and post-training golf scores and Profile of Mood States (POMS) scores indicate EEG feedback training has a beneficial effect on golf skill development. &nbsp; Fifteen subjects completed a two week series of 10 EEG training sessions and mind-body skill integration practice sessions.&nbsp; The EEG training included a protocol (BrainLink =AE*) that provided audio feedback contingent on the simultaneous presence of three frequencies above a selected threshold.&nbsp; The skill integration practice included: (1) visualization of perfect performance of a selected golf skill while maintaining targeted EEG activity and, (2) actual practice<BR>of the skill while attempting to produce the mind-body state achieved&nbsp; during the feedback training. </P>
<P>Fourteen of the participants reported significant improvement in their game as measured by comparison of pre- and post-training scores.&nbsp; Twelve of&nbsp; the participants completed pre- and post-training POMS.&nbsp; The post training POMS results for 10 of those 12 subjects showed development of what is called an&nbsp; "Iceberg Profile", a pattern of scores that typically is found in elite athletes.</P>
<P>In addition to improvement in their golf game and development of elite athlete mood states a number of participants also reported significant improvement in physical and mental health.&nbsp; Although medical and psychological symptoms were not a focus of this study, several subjects reported improvement of troubling physical symptoms including muscle spasm pain and angina.&nbsp; Reports of psychological changes included improved concentration and stress coping.&nbsp; </P>
<P>The self reports of symptom improvement were supported by Symptom Checklist 90 results. &nbsp; Comparison of SCL-90s completed before and after training show marked improvement on all scales with the obsessive-compulsive scale having the greatest change.<BR>* BrainLink is a registered trademark of Advanced Neurotechnologies.</P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
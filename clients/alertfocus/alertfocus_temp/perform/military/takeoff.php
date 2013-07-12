<?//begin code admpanel
$id = 128; 
$razdelid = "33"; 
$razdel_id = "33"; 
$razdel_picture = ""; 
$razdel_link = "/perform/military/index.php"; 
$id_author = 0; 
$title = "U.S. Army Expands Biofeedback-based Performance Enhancement Program!"; 
$description = "The U.S. Army's Peak Performance Center at West Point has proven the concept, now biofeedback is taking off."; 
$partsfragmented = 1; 
$date_posted = "30-09-2005"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//perform/military/takeoff.php"; 
$doc_identificate_name = "takeoff"; 
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
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; mso-layout-grid-align: none">&nbsp;&nbsp; Date: Thu, 29 Sep 2005 15:35:55 -0400</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; mso-layout-grid-align: none">&nbsp;&nbsp; From: "Jon Cowan" &lt;joncowan@earthlink.net&gt;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; mso-layout-grid-align: none">&nbsp;&nbsp; Subject: U.S. Army Expands Biofeedback-based Performance Enhancement&nbsp; Program!</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; mso-layout-grid-align: none">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; mso-layout-grid-align: none">I just learned from Dr. Louis Csoka, the retired Colonel who started the Army's Center for Enhanced Performance, that the Pentagon has approved and funded a program that will expand their offerings to 3 Army bases in the next year.&nbsp; If all goes well, the program will be expanded to another 10 bases in the second year.&nbsp; The goal is to offer this to almost every Army Officer.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>After visiting the West Point Center recently, the Army's Chief of Staff stated "This is exactly what our officers need before we send them off to Iraq.", so there is backing from the top.&nbsp; </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; mso-layout-grid-align: none">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; mso-layout-grid-align: none">The program will include three different types of biofeedback:</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; mso-layout-grid-align: none">1.&nbsp; The Freeze Framer from HeartMath</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; mso-layout-grid-align: none">2.&nbsp; EMG and respiration feedback</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; mso-layout-grid-align: none">3.&nbsp; The Peak Achievement Trainer.&nbsp; (Neurofeedback)</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; mso-layout-grid-align: none">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; mso-layout-grid-align: none">The 20 session program also includes affirmations, goal setting, and several other techniques.&nbsp; </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; mso-layout-grid-align: none">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; mso-layout-grid-align: none">This will create permanent positions for a number of individuals skilled in these training techniques.&nbsp; Dr. Csoka is planning to offer advanced training programs to those who are selected.&nbsp;&nbsp; I'll keep you informed.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; mso-layout-grid-align: none">Jon </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; mso-layout-grid-align: none">Jonathan D. Cowan, Ph.D., BCIACEEG </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">President and CTO, NeuroTek, LLC.</P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
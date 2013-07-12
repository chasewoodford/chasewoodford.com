<?//begin code admpanel
$id = 138; 
$razdelid = "27"; 
$razdel_id = "27"; 
$razdel_picture = ""; 
$razdel_link = "/perform/executive/index.php"; 
$id_author = 0; 
$title = "Sane, healthy competent and wise"; 
$description = "Beyond fixing what is wrong, there are further reaches of optimal functioning."; 
$partsfragmented = 1; 
$date_posted = "25-03-2006"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//perform/executive/sane.php"; 
$doc_identificate_name = "sane"; 
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
<TABLE class=MsoTableGrid style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; MARGIN: auto auto auto 95.4pt; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; BORDER-COLLAPSE: collapse; mso-border-alt: solid green 3.0pt; mso-yfti-tbllook: 480; mso-padding-alt: 0in 5.4pt 0in 5.4pt" cellSpacing=0 cellPadding=0 border=1>
<TBODY>
<TR style="mso-yfti-irow: 0; mso-yfti-lastrow: yes">
<TD style="BORDER-RIGHT: green 3pt solid; PADDING-RIGHT: 5.4pt; BORDER-TOP: green 3pt solid; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: green 3pt solid; WIDTH: 3.75in; PADDING-TOP: 0in; BORDER-BOTTOM: green 3pt solid; BACKGROUND-COLOR: transparent" vAlign=top width=360>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; TEXT-ALIGN: center" align=center><B style="mso-bidi-font-weight: normal">Brainwave Biofeedback </B></P></TD></TR></TBODY></TABLE>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; TEXT-ALIGN: center" align=center><B style="mso-bidi-font-weight: normal">&nbsp;</B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; TEXT-ALIGN: center" align=center><B style="mso-bidi-font-weight: normal">A Peaceful Mind is</B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; TEXT-ALIGN: center" align=center><B style="mso-bidi-font-weight: normal">Sane, Healthy, Competent and Wise</B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><B style="mso-bidi-font-weight: normal">&nbsp;</B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><B style="mso-bidi-font-weight: normal">&nbsp;</B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><B style="mso-bidi-font-weight: normal">Sane</B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Anxiety, depression, ADD,&nbsp;eating disorders, and many other nervous complaints respond very well to biofeedback training.&nbsp; Beyond that is enhanced personal effectiveness and emotional intelligence. </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><B style="mso-bidi-font-weight: normal">&nbsp;</B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><B style="mso-bidi-font-weight: normal">Healthy</B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Seizures, migraine, fibromyalgia, IBS, sleep and many other physical problems are reliably and significantly reduced by biofeedback training.&nbsp; Super health is increased resilience and flexibility of mind and body.</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><B style="mso-bidi-font-weight: normal">&nbsp;</B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><B style="mso-bidi-font-weight: normal">Competent&nbsp; </B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Athletes, performers, students, business executives and military officers use biofeedback to improve skills and quality of performance. Biofeedback boosts physical ability, IQ and enables greater poise under pressure. </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><B style="mso-bidi-font-weight: normal">&nbsp;</B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><B style="mso-bidi-font-weight: normal">Wise&nbsp; </B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">The opposite of foolish.&nbsp; With biofeedback, people tend to stop doing self-destructive behaviors such as crime, drugs, alcohol and end harmful relationships.&nbsp; Meditation becomes deeper and more pure.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Life becomes more meaningful.&nbsp; Improved emotional intelligence means more self-awareness and self-control with greater personal charisma and sensitivity to others.&nbsp; There are new levels of profound knowing and apt action.&nbsp; Further trainng integrates mind, body and spirit.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Stable and flexible are not opposites.</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; TEXT-ALIGN: center" align=center><B style="mso-bidi-font-weight: normal">An enduring state of calm focus.&nbsp; </B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
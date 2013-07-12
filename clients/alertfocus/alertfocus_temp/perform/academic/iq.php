<?//begin code admpanel
$id = 124; 
$razdelid = "32"; 
$razdel_id = "32"; 
$razdel_picture = ""; 
$razdel_link = "/perform/academic/index.php"; 
$id_author = 0; 
$title = "IQ"; 
$description = "Brainwave biofeedback increases intelligence by 12 points."; 
$partsfragmented = 1; 
$date_posted = "15-06-2005"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//perform/academic/iq.php"; 
$doc_identificate_name = "iq"; 
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
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="FONT-SIZE: 11pt; COLOR: #333333; FONT-FAMILY: Verdana; mso-bidi-font-size: 10.0pt">Academic performance is a favorite area for research on biofeedback.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>There are very few interventions that raise IQ, but neurofeedback has a very good record for increasing intelligence.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN><?xml:namespace prefix = o ns = "urn:schemas-microsoft-com:office:office" /><o:p></o:p></SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="FONT-SIZE: 11pt; COLOR: #333333; FONT-FAMILY: Verdana; mso-bidi-font-size: 10.0pt"><o:p>&nbsp;</o:p></SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="FONT-SIZE: 11pt; COLOR: #333333; FONT-FAMILY: Verdana; mso-bidi-font-size: 10.0pt">According to Joel Lubar, Professor of psychology at the University of Tennesee, a neurofeedback meta study would show 12 IQ points were gained during training.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN><o:p></o:p></SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="FONT-SIZE: 11pt; COLOR: #333333; FONT-FAMILY: Verdana; mso-bidi-font-size: 10.0pt"><o:p>&nbsp;</o:p></SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="FONT-SIZE: 11pt; COLOR: #333333; FONT-FAMILY: Verdana; mso-bidi-font-size: 10.0pt">That is, when he averaged the IQ test results from all the neurofeedback studies, he found a 12 point increase in intelligence across all subjects.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>He reports that it doesn’t matter whether you are high or low on the IQ scale, 12 points is available with neurofeedback training.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN></SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="FONT-SIZE: 11pt; COLOR: #333333; FONT-FAMILY: Verdana; mso-bidi-font-size: 10.0pt"><SPAN style="mso-spacerun: yes"></SPAN></SPAN>&nbsp;</P><SPAN style="FONT-SIZE: 11pt; COLOR: #333333; FONT-FAMILY: Verdana; mso-bidi-font-size: 10.0pt"><SPAN style="mso-spacerun: yes">
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="FONT-SIZE: 11pt; COLOR: #333333; FONT-FAMILY: Verdana; mso-bidi-font-size: 10.0pt">You can verify this for yourself with a simple google search of:<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>EEG IQ</SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="FONT-SIZE: 11pt; COLOR: #333333; FONT-FAMILY: Verdana; mso-bidi-font-size: 10.0pt"><A href="http://www.google.com/search?hl=en&amp;q=EEG+IQ">http://www.google.com/search?hl=en&amp;q=EEG+IQ</A><o:p></o:p></SPAN></P></SPAN><o:p></o:p></SPAN>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
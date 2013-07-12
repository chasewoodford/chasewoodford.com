<?//begin code admpanel
$id = 116; 
$razdelid = "30"; 
$razdel_id = "30"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/eating/index.php"; 
$id_author = 0; 
$title = "Typical response"; 
$description = "The sense of self emerges at about session number 15."; 
$partsfragmented = 1; 
$date_posted = "10-05-2005"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/eating/self.php"; 
$doc_identificate_name = "self"; 
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
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="FONT-SIZE: 10pt; FONT-FAMILY: Arial">Dr. Valdeane Brown is the genius behind the NeuroCARE Pro (NCP) software, <A href="http://www.zengar.com/">www.zengar.com</A>).<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>When I asked him about my bulimia case he wrote me: <?xml:namespace prefix = o ns = "urn:schemas-microsoft-com:office:office" /><o:p></o:p></SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="FONT-SIZE: 10pt; FONT-FAMILY: Arial"><o:p>&nbsp;</o:p></SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN class=postbody1><SPAN style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; mso-bidi-font-size: 7.0pt">“We've had very good response in the past with NCP.”<SPAN style="mso-spacerun: yes">&nbsp; </SPAN><o:p></o:p></SPAN></SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN class=postbody1><SPAN style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; mso-bidi-font-size: 7.0pt"><o:p>&nbsp;</o:p></SPAN></SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN class=postbody1><SPAN style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; mso-bidi-font-size: 7.0pt">“Look for the emergence of our "immune suppressed/depressed/PTSD/substance abuse" response to training -- meaning that you will likely find that significant shifts in "sense of self" or personal identity will accompany training success...or she will decide to stop training right at the time that those fundamental "who am I in the world" kind of questions start coming up.” <o:p></o:p></SPAN></SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN class=postbody1><SPAN style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; mso-bidi-font-size: 7.0pt"><o:p>&nbsp;</o:p></SPAN></SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 6pt"><SPAN class=postbody1><SPAN style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; mso-bidi-font-size: 7.0pt">“As with substance abuse, there will come a point where she simply can not continue to engage in neurofeedback and purge...she will release one of those paths and probably the "turning point" will come at about the 15th session or so...”<SPAN style="mso-spacerun: yes">&nbsp; </SPAN><o:p></o:p></SPAN></SPAN></P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
<?//begin code admpanel
$id = 125; 
$razdelid = "32"; 
$razdel_id = "32"; 
$razdel_picture = ""; 
$razdel_link = "/perform/academic/index.php"; 
$id_author = 0; 
$title = "Arts proposal"; 
$description = "Let's see if artists can improve each others' talent with neurofeedback."; 
$partsfragmented = 1; 
$date_posted = "15-06-2005"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//perform/academic/artproposal.php"; 
$doc_identificate_name = "artproposal"; 
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
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><B style="mso-bidi-font-weight: normal"><FONT size=3><FONT face="Times New Roman">Conceptual proposal to demonstrate that peer-to-peer neurofeedback training will enhance artistic performance.<?xml:namespace prefix = o ns = "urn:schemas-microsoft-com:office:office" /><o:p></o:p></FONT></FONT></B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><o:p><FONT face="Times New Roman" size=3>&nbsp;</FONT></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT size=3><FONT face="Times New Roman">Brainwave biofeedback has been show scientifically to elevate the optimal performance levels of myriad groups: students, athletes, musicians, soldiers, etc.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Google “motivating the musical mind” to find good quality research proving that neurofeedback was significantly better than other generic improvement conditions, such as aerobic exercise.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Indeed the 40 hours of brainwave training improved performance quality by 17%.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>This is about the same effect size as a year of graduate education at the Royal Academy of London.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN></FONT></FONT></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><o:p><FONT face="Times New Roman" size=3>&nbsp;</FONT></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT face="Times New Roman" size=3>Consistent clinical reports describe enhancement of other groups and interests as well.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Ample scientific research shows brainwave biofeedback to relieve numerous disorders.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>But all of these projects involved a professional administering the training. </FONT></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><o:p><FONT face="Times New Roman" size=3>&nbsp;</FONT></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT size=3><FONT face="Times New Roman">Brainwave biofeedback or neurofeedback is trail and error learning while getting biological feedback.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Brainwave biofeedback is a pleasant and relaxing experience.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Since 1970, the technology for brainwave biofeedback has become much more advanced.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>So advanced, it is now very safe and simple to use.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>So simple, that peers can train each other with ease.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>For example, playAttention.com trains teachers to administer neurofeedback to their students (mostly elementary special ed students) with multi-media training and phone calls only.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN></FONT></FONT></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><o:p><FONT face="Times New Roman" size=3>&nbsp;</FONT></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT size=3><FONT face="Times New Roman">The basic procedure is to paste sensors on the head that carry brainwave signals through an EEG and into a computer.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Software controls the playing of a CD and dynamic graphics.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>A trainer uses the computer software to control several thresholds with a mouse.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>The thresholds allow only a certain amount of brainwave turbulence.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Exceeding the threshold pauses the music and image.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>It is best for the pausing to be frequent (~a dozen times a minute) but to only extend the music track by 5-10%.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>There is a sweet spot of both pleasant and effective.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN></FONT></FONT></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><o:p><FONT face="Times New Roman" size=3>&nbsp;</FONT></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT face="Times New Roman" size=3>The process gradually trains the brain to operate more efficiently without needless surging.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>It is standard to administer 40 session lasting less than an hour, one to three times per week.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>But now robust benefits can now be expected with less training time.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>These wellness benefits are pervasive because the central nervous system is central.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>These are best described as increasing resilience and flexibility.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Longitudinal evidence with various disorders show the results to be enduring.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>It is presumed that the wisdom of the body recognizes, accepts and adopts improved functioning when show how.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>The main caution is keep it pleasant and don’t too much too soon.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Otherwise, a brief headache is the most common result. </FONT></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><o:p><FONT face="Times New Roman" size=3>&nbsp;</FONT></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT size=3><FONT face="Times New Roman">Optimal performance research has not yet been done without the direct involvement of health care professionals, such as psychologists.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>But it could now be done at fairly low cost with a brief training and indirect supervision.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>The computer equipment would cost $1000, software (Zengar.com), EEG, and sundry supplies would be $2500.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>A licensed psychologist could install, train and supervise a group of trainers for $1000.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Say, a total of $5000 for the project.<SPAN style="mso-spacerun: yes">&nbsp;&nbsp; </SPAN></FONT></FONT></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><o:p><FONT face="Times New Roman" size=3>&nbsp;</FONT></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT size=3><FONT face="Times New Roman">The research design would be many matched pairs of similar students who get neurofeedback training vs. those who do not.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Students will get identical instructions to produce a work in one hour.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Judges will view the work of the matched pairs pre- and post- training.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Judges will be blind to the training condition and rate the work on a variety of criteria.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>As with the study at the Royal College of London, the hypothesis is that judges will rate the post-training work more highly than any other condition.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN></FONT></FONT></P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
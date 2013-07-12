<?//begin code admpanel
$id = 134; 
$razdelid = "34"; 
$razdel_id = "34"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/add/index.php"; 
$id_author = 0; 
$title = "Biofeedback remedy for ADHD"; 
$description = "Brain training repairs circuits deficient in ADHD."; 
$partsfragmented = 1; 
$date_posted = "24-02-2006"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/add/repair.php"; 
$doc_identificate_name = "repair"; 
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
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="mso-bidi-font-size: 7.5pt"><FONT size=3><FONT face="Times New Roman">ADD or ADHD is a common and serious problem that causes difficulty at home and in school. &nbsp;The hallmarks are distractibility and impulsivity. &nbsp;“You don’t listen” or “Sit still” are commonly heard. &nbsp;Variants of ADHD may involve mood problems, defiant attitudes or learning difficulties. &nbsp;Later in life ADHD causes tragedy in all realms of life. &nbsp;Those with ADHD are more prone to job loss, broken marriages, accidents, addictions and psychiatric problems. &nbsp;<?xml:namespace prefix = o ns = "urn:schemas-microsoft-com:office:office" /><o:p></o:p></FONT></FONT></SPAN></P><SPAN style="mso-bidi-font-size: 7.5pt">
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><BR><FONT size=3><FONT face="Times New Roman">The established remedy for ADHD is stimulant medication. These pills do increase the attention span for as long as the drug is in the blood. &nbsp;But most pharmaceutical studies are short term. &nbsp;Medications do not claim to prevent the risky behaviors that damage lives and families.&nbsp;&nbsp;</FONT></FONT></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT size=3><FONT face="Times New Roman"><o:p></o:p></FONT></FONT></SPAN>&nbsp;</P><SPAN style="FONT-SIZE: 22pt; FONT-FAMILY: Verdana; mso-bidi-font-size: 12.0pt">
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"></SPAN><SPAN style="mso-bidi-font-size: 7.5pt"><FONT face="Times New Roman" size=3>Evidence has been mounting for 35 years that brain wave biofeedback is a safe, effective and efficient treatment for ADHD and many other disorders. &nbsp;Indeed biofeedback has been shown to improve academic achievement, musical talent and sports performance in the best and brightest students. </FONT></SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="mso-bidi-font-size: 7.5pt"><FONT face="Times New Roman" size=3><BR></FONT></SPAN><SPAN style="mso-bidi-font-size: 7.5pt"><FONT face="Times New Roman" size=3>A recent study by Beauregard used fMRI imaging to show that brain wave biofeedback improved the circuitry of the brain in those with ADHD. &nbsp;That study also showed significant improvement in performance tests and behavior ratings where a control group showed no such improvements.&nbsp;&nbsp;</FONT></SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="mso-bidi-font-size: 7.5pt"><FONT face="Times New Roman" size=3><BR></FONT></SPAN><SPAN style="mso-bidi-font-size: 7.5pt"><FONT face="Times New Roman" size=3>Brain wave training is a form of biofeedback or biological feedback. &nbsp;In all forms of biofeedback you monitor an aspect of your physiology and train with a live display of your own output. &nbsp;In brain wave training with an EEG you sit comfortably and let music and graphics guide your mind toward relaxed concentration. &nbsp;This reduces excess mental turbulence and allows the brain to find more efficient ways to operate. The results are pervasive with broad benefits for mental executive functions, mood stability and even improved quality of sleep.&nbsp;&nbsp;</FONT></SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="mso-bidi-font-size: 7.5pt"><FONT face="Times New Roman" size=3><BR></FONT></SPAN><SPAN style="mso-bidi-font-size: 7.5pt"><FONT size=3><FONT face="Times New Roman">Unlike drug studies, long term follow ups show that reduction of symptoms is permanent with brain wave biofeedback. &nbsp;There are studies by Monastra that show that children on stimulant medications can stop taking their drugs without a resurgence of symptoms after EEG biofeedback training. &nbsp;<o:p></o:p></FONT></FONT></SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="mso-bidi-font-size: 7.5pt"><BR><I><FONT face="Times New Roman" size=3>Gary Ames is a psychologist in private practice specializing in brain biofeedback. &nbsp;He is located in Bala Cynwyd. &nbsp;His phone number is 610-668-3223 and his web site is <A href="http://www.AlertFocus.com">www.AlertFocus.com</A> </FONT></I></SPAN></P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
<?//begin code admpanel
$id = 169; 
$razdelid = "29"; 
$razdel_id = "29"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/sleep/index.php"; 
$id_author = 0; 
$title = "Neurofeedback proven to help sleep"; 
$description = "Controlled study in major journal proves brainwave training to aid sleep and memory."; 
$partsfragmented = 1; 
$date_posted = "03-10-2008"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/sleep/SMR.php"; 
$doc_identificate_name = "SMR"; 
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
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY>
<TR>
<TD vAlign=top>
<UL type=disc>
<LI>Medical News: Sleep Disorders </LI></UL></TD>
<TD vAlign=top>
<P></P></TD></TR>
<TR>
<TD vAlign=top>
<H1>Self-Modification of Brain Activity May Improve Sleep</H1></TD></TR>
<TR>
<TD>
<TABLE cellPadding=0 width="100%" border=0>
<TBODY>
<TR>
<TD>
<P>By&nbsp;Todd Neale, Staff Writer, MedPage Today<BR>Published: October 01, 2008<BR>Reviewed&nbsp;by&nbsp;<A href="http://www.medpagetoday.com/reviewer.cfm?reviewerid=55">Robert Jasmer, MD</A>; Associate Clinical Professor of Medicine, University of California, San Francisco </P></TD><!--startclickprintexclude-->
<TD>
<P>&nbsp;</P></TD></TR></TBODY></TABLE>
<P></P></TD></TR>
<TR>
<TD>
<P>SALZBURG, Austria, Oct. 1 -- Sleep as well as memory may be enhanced by training specific brain rhythms, researchers here found. </P>
<P><STRONG>Action Points&nbsp;</STRONG>&nbsp;<!--- <img src="/images/2arrows.gif" border="0" />--></P>
<UL type=disc>
<LI>Explain to interested patients that this study found that a method of training specific brain activity may help improve sleep and memory. </LI></UL>
<P>A technique for training sensorimotor rhythm activity through instrumental conditioning significantly increased the amplitude of brain rhythms in 10 sessions (<EM>P</EM>=0.014), Manuel Schabus, Ph.D., of the University of Salzburg, and colleagues reported in the Oct. 1 issue of <EM>Sleep</EM>. </P>
<P>The increased sensorimotor rhythm activity translated into better sleep spindle numbers and sleep onset latency. </P>
<P>"Instrumental sensorimotor rhythm conditioning might thus be considered a promising nonpharmacological treatment for primary insomnia and other disorders," the researchers said. </P>
<P>In addition, the improved activity was associated with better retrieval scores on a memory test taken both before and after sleep. </P>
<P>The results of the study "support our general rationale that an increase in relaxation and a decrease in muscle tension might lead to less movement during sleep and thereby augment the restorative and learning enhancing benefits of sleep," Dr. Schabus and colleagues said. </P>
<P>Previous studies in cats have shown that sensorimotor rhythms -- which have a distinctive oscillatory pattern of 12 to 15 Hz on EEG recordings -- can be conditioned through a reward system, the researchers said. </P>
<P>So they evaluated whether training these rhythms for increased activity could influence sleep or memory in humans. </P>
<P>They randomized 27 healthy adults (13 male; mean age 23.63) to undergo instrumental conditioning of sensorimotor rhythm. There were 16 in the experimental group and 11 in a control group given a similar training regimen for random rhythm. </P>
<P>Each participant had 10 conditioning sessions on 10 consecutive days during which sensorimotor rhythm was monitored. In addition, they completed a declarative word-pair association task before and after a 90-minute nap. </P>
<P>The experimental group was trained to enhance the amplitude of their sensorimotor-frequency range by using relaxation and other techniques while monitoring their brain activity on a computer screen displaying EEG recordings. When they succeeded in increasing the amplitude of the specific frequency range, they were rewarded with a pleasing picture. </P>
<P>The control group was trained to enhance the amplitude of a different frequency range at each session in a similar manner. </P>
<P>The experimental group significantly increased their sensorimotor rhythm amplitude from the early training sessions through the end of training (<EM>P</EM>=0.014), successfully demonstrating a "shaping of one's own brain activity," according to the researchers. </P>
<P>The increased activity led to significant improvements in sleep spindle number (<EM>P</EM>=0.004) and sleep onset latency (<EM>P</EM>=0.006), "indicating that specific neural mechanisms trained during wakefulness can be translated into sleep," the researchers said. </P>
<P>On the memory task, only the experimental group had significant improvement in retrieval scores measured before the nap (<EM>P</EM>=0.011) and after the nap (<EM>P</EM>=0.018). </P>
<P>There were no similar changes in the control group. </P>
<P>"Possibly heightened attention or relaxation levels (during learning and/or retrieval) after 10 instrumental sensorimotor rhythm conditioning sessions … account for the observed improvement in word-pair recall," the researchers said. </P>
<P>They said that the results indicate that this technique may be used as an alternative treatment for primary insomnia, but added that future studies must look at whether it can be applied in these patients and evaluate how stable the changes are in the long term. </P>
<P>In addition, they said, "future studies should continue to focus on the effects of instrumental sensorimotor rhythm conditioning on various cognitive tasks and also address the potential clinical significance of this kind of training." </P>
<TABLE cellSpacing=0 hspace="1">
<TBODY>
<TR>
<TD>The study was supported by the Forschungsstipendium Salzburg and the Stiftungs-und Foerderungsgesellschaft der Universitaet Salzburg. 
<P></P>
<P>The authors made no disclosures.</P></TD></TR></TBODY></TABLE></TD></TR><TR><TD><BR><B>Primary source: </B>Sleep<BR>Source reference:<BR>Hoedlmoser K, et al "Instrumental conditioning of human sensorimotor rhythm (12-15 Hz) and its impact on sleep as well as declarative learning" <EM>Sleep</EM> 2008; 31. </TD></TR></TD></TR></TBODY></TABLE>
<P>Contact Gary Ames 610.668-3223&nbsp;</P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
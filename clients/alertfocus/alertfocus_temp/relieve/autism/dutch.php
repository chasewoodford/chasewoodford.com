<?//begin code admpanel
$id = 174; 
$razdelid = "37"; 
$razdel_id = "37"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/autism/index.php"; 
$id_author = 0; 
$title = "autism study"; 
$description = "Dutch study showing improvement in all autistic symptoms. "; 
$partsfragmented = 1; 
$date_posted = "24-01-2009"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/autism/dutch.php"; 
$doc_identificate_name = "dutch"; 
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
<DIV class=posttitle>
<H2>PDF of the research study: <SPAN style="FONT-SIZE: 6pt; FONT-FAMILY: Georgia; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Arial; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA"><A href="http://www.lis.inpg.fr/pages_perso/congedo/Kouijzer%20et%20al%202008.pdf"><SPAN style="COLOR: #1e66ae"><FONT size=3>http://www.lis.inpg.fr/pages_perso/congedo/Kouijzer%20et%20al%202008.pdf</FONT></SPAN></A></SPAN></H2>
<H2>Summary below.</H2>
<H2><A title="Permanent Link to Neurofeedback For Autistic Spectrum Disorders: Promising Results In A Small Sample" href="http://www.bmedreport.com/archives/339" rel=bookmark>Neurofeedback For Autistic Spectrum Disorders: Promising Results In A Small Sample</A></H2>
<P class=post-info>Jan 23rd, 2009 by <A title="Posts by cfisher" href="http://www.bmedreport.com/archives/author/cfisher/">cfisher</A> </P></DIV>
<DIV class=entry>
<P><IMG class="alignleft size-thumbnail wp-image-355" title=Neurons height=150 alt=Neurons src="http://www.bmedreport.com/wp-content/uploads/2009/01/neurons-beige-150x150.jpg" width=150>Readers not familiar with neurofeedback will want to might want to first review <A title="Brainwave Therapy" href="http://www.bmedreport.com/archives/184" target=_self>Neurofeedback: Brainwave Therapy</A> to better understand the current report.</P>
<P>Autistic Spectrum Disorders (ASD) are characterized by significant deficits in social skills, attention/concentration, and communication, as well as emotional, cognitive, and behavioral impairments. Examples include Autism, Asperger’s Disorder, and Pervasive Developmental Disorder Not Otherwise Specified.&nbsp; I am not aware of any treatment that can “cure” ASD. Current therapies focus on symptom reduction, behavioral and social skills training, and quality of life enhancements.</P>
<P>Kouijzer et al. (2009)* investigated the effects of neurofeedback in a group of 12 male and 2 female children (ages 8-12 years with a average age of 10.1) diagnosed with Pervasive Developmental Disorder, Not Otherwise Specified.<SPAN id=more-339></SPAN> Seven of 14 participants underwent neurofeedback training (”experimental group”), while the remaining persons&nbsp; received no treatment (”wait-list control group” or just “control group”).&nbsp; Experimental groups are often compared to control groups in research to help control for experimental confounds (variables that can seriously jeopardize the results of&nbsp; study),&nbsp; placebo effects (the effects of participants belief that their health will improve even if given a sham treatment), and to determine the magnitude of a treatment.&nbsp; &nbsp; A non-randomized, pre-test/post-test design (the same set of tests were given before and after the experiment) was used. Wait-list control and experimental participants were “matched.”&nbsp;&nbsp; Matched designs attempt to make comparisons between subjects who are judged to be more or less equivalent in the variables under investigation.&nbsp; For example, an experimenter might “match” subjects with similar levels of depression when testing a new&nbsp; anti-depressant so that the actual effects of the drug can more accurately estimated.</P>
<P>This part gets a little more technical. Based on previous research, Kouijzer et al. developed an argument that neurofeedback might improve abnormal theta-to-beta-ratios in persons with ASD.&nbsp; Specifically, the researchers hypothesized that a classic neurofeedback protocol called “SMR training”&nbsp; (inhibit frequencies less than 10Hz and enhance 12-15 Hz [often called "low beta" or "SMR"] along the cerebral motor strip using a 2 channel, C3/C4 protocol), might improve executive functioning (attention/concentration, mental flexibility, speed and efficiency, and goal setting) and communication abilities. Don’t worry about the frequency bands and names - just know that specific electrical energy of the brain was either enhanced or inhibited. The researchers reasoned and cited existing evidence that SMR training activates an important region of the brain called the anterior cingulate cortex that is responsible for cognitive and emotional regulation (a deficit in Autistic Spectrum Disorders). It is worth noting that elevated theta-to-beta ratios can occur in and are believed by some to be a defining feature of the EEG in attention deficit hyperactivity disorder (ADHD).</P>
<P>Outcome measures included executive, social, and neurophysiological (QEEG) levels of functioning.&nbsp; All persons in the experimental group received 40 neurofeedback sessions (this is a fairly average amount of sessions in my experience).&nbsp; The researchers reported impressive results following the completion of neurotherapy. Experimental group participants realized statistically significant improvements in the following areas: sustained auditory selective attention (30%), inhibition of verbal responses (55%), inhibition of motor responses (15%), set shifting (57%), concept generalization (50%), and planning ability (37%). Significant improvements were also found in communication (14%), social interaction (16%), communication (17%), and typical behavior (9%).</P>
<P>No statistically significant improvements were found in areas of verbal and visual memory and sustained attention; however, the authors’ noted that many of the participants did not exhibit deficits in these areas at the start of the study. &nbsp; Additionally, the post-QEEG (brainmap) did not show meaningful changes despite obvious treatment benefits. A current debate exists in the field regarding pre-post QEEGs and the factors that can account for changes or lack thereof.&nbsp; This is a highly technical discussion that I will not address in this report.</P>
<P>The fact that Kouijzer et al. obtained significant results with a relatively small number of participants suggests large treatment effect sizes (the magnitude of the treatment) with limited variability of test scores (participants had similar gains) following neurofeedback. One potential confound includes that participants’ IQ fell in the average range, which may not be representative of some persons with ASD. The researchers reported, however, a wide range of IQ scores in the experimental and control groups (73-111 and 82-199, respectively).</P>
<P>Coming Soon: PT 2 of this research investigates whether treatment gains realized in the current study were maintained 1 year later.</P>
<P>CFisher</P>
<P>References:</P>
<P>*Kouijzer, M., de Moor, J., Gerrits, B., Congedo, M., van Schie, H. (2009). Neurofeedback improves excutive functioning in children with austim spectrum disorders. <EM>Research in Autism Spectrum Disoders</EM>, 3, 145-162.</P>
<P class=postmetadata>Tags: <A href="http://www.bmedreport.com/archives/tag/autism" rel=tag>Autism</A>, <A href="http://www.bmedreport.com/archives/tag/autistic" rel=tag>Autistic</A>, <A href="http://www.bmedreport.com/archives/tag/neurofeedback" rel=tag>Neurofeedback</A>, <A href="http://www.bmedreport.com/archives/tag/neurotherapy" rel=tag>Neurotherapy</A></P></DIV>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
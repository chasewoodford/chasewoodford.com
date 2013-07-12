<?//begin code admpanel
$id = 159; 
$razdelid = "37"; 
$razdel_id = "37"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/autism/index.php"; 
$id_author = 0; 
$title = "Autism and Neurofeedback Research Summary"; 
$description = "Quick listing of 4 studies."; 
$partsfragmented = 1; 
$date_posted = "08-09-2007"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/autism/researchsummary.php"; 
$doc_identificate_name = "researchsummary"; 
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
<H2>Autism and Neurofeedback Research Summary</H2><B>
<DIR>
<DIR></B>
<P>&nbsp;</P></DIR></DIR><B>
<P>EEG Neurofeedback study (Jerusiewicz, 2002)</P></B>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 20 children with ASD in experimental group.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 20 children with ASD in control group</P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Experimental group completed an average of 36 neurofeedback sessions</P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pre- and post-treatment scores on the Autism Treatment Evaluation Checklist (ATEC) were collected.</P><B>
<P>Pilot study results: percentage of improvement on ATEC</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Neurofeedback group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Control group</P></B>
<P>Speech/Language&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 29%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0%</P>
<P>Sociability&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 33%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7%</P>
<P>Sensory/Cognitive&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;17%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0%</P>
<P>Health/Physical/Behavior&nbsp; 26%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;5%</P>
<P>Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 26%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 3%</P>
<P>&nbsp;</P><B>
<P>HEG Neurofeedback research (Limsila &amp; Toomim, 2003)</P></B>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Largest HEG study to date. </P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 180 autistic children in Thailand</P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; After 40 sessions, the cohort's mean HEG readings (prefrontal activation) increased 53%</P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Of the 81 subjects who were studying in public school, 86% increased their GPA by more than 0.5 (mean = 0.94) points on a 4-point scale </P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Only 4% decreased their GPA by more than 0.5 points (mean = 0.57)</P>
<P>&nbsp;</P><B>
<P>EEG Neurofeedback research (Coben &amp; Padolsky, 2006)</P></B>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 37 subjects with autism •&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 20 EEG neurofeedback sessions</P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wait list control group (n=12) matched for gender, age, race, handedness, IQ &amp; treatment</P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 89% success rate</P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 40% reduction of autistic symptoms on ATEC</P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Significant improvements on neuropsychological tests of Attention, Language, Visual-Perception &amp; Executive Functioning</P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; QEEG &amp; infrared imaging demonstrated gains </P>
<P>&nbsp;</P><B>
<P>HEG Neurofeedback Research (Coben 2006)</P></B>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 28 subjects with autism </P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 20 nir or pir HEG sessions</P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wait list control group (n=12) matched for gender, age, race, handedness, IQ &amp; treatment</P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; All subjects had previously completed 20 sessions of EEG neurofeedback</P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; All subjects had identified frontal system dysfunction based on neurobehavioral testing, neuropsychological testing, infrared imaging, and QEEG data</P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 90% success rate</P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 42% reduction in autistic symptoms on ATEC</P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 43% reduction in social interaction deficits</P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 47% reduction in communication deficits</P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 44% reduction in sensory/cognitive deficits</P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 39% reduction in behavior deficits</P>
<P>•&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Statistically significant (p &lt; .05) improvements in neurobehavioral and neuropsychological functioning</P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
<?//begin code admpanel
$id = 150; 
$razdelid = "37"; 
$razdel_id = "37"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/autism/index.php"; 
$id_author = 0; 
$title = "Autism study"; 
$description = "Neurofeedback has a 90% success rate and produces a 42% reduction in autism symptoms, compared with controls."; 
$partsfragmented = 1; 
$date_posted = "25-10-2006"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/autism/qguided.php"; 
$doc_identificate_name = "qguided"; 
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
<H3>Dr. Rob Coben's 2006 presentation abstract on his research with Autism.</H3>
<P>This presentation will focus on empirical data and a theoretical framework from which to understand Neurofeedback interventions for Autistic Spectrum Disorder. Our research evaluated the efficacy of assessment (QEEG)-guided neurofeedback for children with Autistic Spectrum Disorder (ASD). Findings included a 92% success rate with a 41.57% reduction in Autistic symptoms, which was significantly different than a wait-list control group. Neurophysiological changes included increased metabolic flow to frontal cortices and movement towards normalized QEEG connectivity. A theoretical approach for treatment of ASD focusing on aspects of EEG connectivity will be presented.</P>
<P><STRONG>Details:</STRONG></P>
<P><STRONG>Plenary #42):&nbsp; Neurofeedback For Autism: Empirical Validation and Theoretical Framework</STRONG></P>
<P>Autistic Spectrum Disorder (ASD) consists of a spectrum of heterogeneous disorders <BR>including Autism, Asperger’s Disorder, Pervasive Developmental Disorder-Not <BR>Otherwise Specified, Childhood Disintegrative Disorder, and Rett’s Disorder. The<BR>heterogeneity of ASD makes it more complex to treat effectively. The prevalence of<BR>ASD is as high as 60 per 10,000 or 1 in 166 children (Medical Research Council, 2001).<BR><BR>Current research suggests ASD may be associated with functional disconnectivity <BR>between brain regions (Courchesne &amp; Pierce, 2005; Belmonte et al., 2004; Baron-Cohen, 2004). Therefore, connectivity between the frontal cortex and other brain regions may be unsynchronized, weakly responsive, and information impoverished (Courchesne &amp; Pierce, 2005). Quantitative EEG (QEEG) analysis can precisely pinpoint patterns of &nbsp;disconnectivity among brain regions in children with ASD. ASD can best be conceived of as a neurodevelopmental disorder. Therefore, interventions which can activate affected neural pathways can normalize function and result in improved treatment outcomes. <BR><BR>This presentation will focus on empirical data and a theoretical framework from which to understand neurofeedback interventions for Autistic Spectrum Disorder. Our research evaluated the efficacy of assessment (QEEG)-guided neurofeedback for children with ASD. Findings included a 92% success rate with a 41.57% reduction in Autistic symptoms, which was significantly different than a wait-list control group. This was accomplished after only 20 Neurofeedback sessions done twice per week.</P>
<P>Neurophysiological changes included increased metabolic flow to frontal cortices and movement towards normalized QEEG connectivity. A theoretical approach for the treatment of ASD focusing on aspects of EEG connectivity will be presented. There is reason to believe that the greatest EEG anomaly in Autistic persons in a combination of hyper- and hypoconnectivity interfering with adequate brain functioning.&nbsp;</P>
<P>From:<BR><A href="http://www.brainmeeting.com/maxspeakers/reports/speaker29.html">http://www.brainmeeting.com/maxspeakers/reports/speaker29.html</A></P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
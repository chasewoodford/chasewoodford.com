<?//begin code admpanel
$id = 148; 
$razdelid = "37"; 
$razdel_id = "37"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/autism/index.php"; 
$id_author = 0; 
$title = "HEG relieves autism"; 
$description = "42% reduction in autism symptoms in 20 sessions of HEG neurofeedback."; 
$partsfragmented = 1; 
$date_posted = "25-10-2006"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/autism/heg.php"; 
$doc_identificate_name = "heg"; 
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
<P>Hemoencephalography for Autistic Spectrum DisorderRobert Coben, Ph.D. Private Practice; Director, NeuroRehabilitation and Neuropsychological Services. Massapequa Park, New York <A href="mailto:robcoben@optonline.net">robcoben@optonline.net</A>&nbsp; Research &amp; Clinical Application </P>
<P>The epidemiology of Autism is approximately 60 per 10,000 (1 in 166) children (Medical Research Council, 2001). Assessment-guided neurofeedback has been shown to significantly reduce the core symptoms of Autism (Coben, 2005). Hemoencephalography is a form of neurofeedback that has also been successfully utilized to improve function in patients with a wide range of diagnoses including Autism (Toomim, 2004).</P>
<P>Thirty-five patients with Autism received 20 sessions of Near Infrared or Passive Infrared Hemoencephalography (nir / pir HEG). The wait list control group (n=12) was matched for gender, age, race, handedness, IQ and other treatments. All patients had completed 20 sessions of EEG Biofeedback. The next phase of training was assessment-guided HEG. All patients had identified frontal system dysfunction based on neurobehavioral, neuropsychological testing, infrared imaging, and QEEG data.</P>
<P>Findings indicated a success rate of 90%. A 42% reduction in symptoms was reported. Social interaction deficits decreased by 55%. Communication and social communication deficits decreased by 55% and 52%, respectively. There were statistically significant (p &lt; .05) improvements in neurobehavioral and neuropsychological functioning. These improvements were associated with enhancement of thermal regulation and reduction in abnormal QEEG findings. These findings suggest that Autism can be successfully treated with assessment-guided pir and nir HEG.</P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
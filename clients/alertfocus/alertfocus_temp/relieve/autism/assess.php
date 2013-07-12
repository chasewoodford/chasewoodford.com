<?//begin code admpanel
$id = 153; 
$razdelid = "37"; 
$razdel_id = "37"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/autism/index.php"; 
$id_author = 0; 
$title = "Assessment Guided Neurofeedback for ASD"; 
$description = "Controlled research on EEG connectivity training shows 40% reduction "; 
$partsfragmented = 1; 
$date_posted = "05-03-2007"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/autism/assess.php"; 
$doc_identificate_name = "assess"; 
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
<CENTER>Coben, R. &amp; Padolsky, 1. (2006). </CENTER>
<CENTER>Assessment Guided Neurofeedback for Autistic Spectrum Disorder. </CENTER>
<CENTER>Manuscript under review with the Journal of Neurotherapy.</CENTER>
<P>
<CENTER><SPAN class=headOne>Abstract</SPAN></CENTER>
<P>Background. Research reviewing the epidemiology of Autism (Medical Research Council, 2001) indicated that approximately 60 per 10,000 children (1/166) are diagnosed with Autistic Spectrum Disorder (ASD). Jarusiewicz (2002) published the only controlled study documenting the effectiveness of neurofeedback for Autism based on one outcome measure. The present study extended these findings with a larger sample size, broader range of assessments, and physiological measures of brain functioning. 
<P>Methods. Assessment-guided neurofeedback was conducted in 20 sessions for 37 patients with ASD. The experimental and control groups were matched for age, gender, race, handedness, other treatments, and severity of ASD. 
<P>Results. Improved ratings of ASD symptoms reflected an 89% success rate (p &lt; .0001). Paired sample t-tests indicated statistically significant improvement in Autistics who received Neurofeedback compared to the control group. Other major findings included: 40% reduction (p &lt; .0001) in core ASD symptomatology (indicated by ATEC Total Scores), and 77% (p=.0392) of the experimental group had decreased hyperconnectivity or no change. Reduced cerebral hyperconnectivity was associated with positive clinical outcomes in this population. In all cases of reported improvement in ASD symptomatology, positive treatment outcomes were confirmed by neuropsychological and neurophysiological assessment. 
<P>Conclusions. Evidence from multiple measures has demonstrated that neurofeedback can be an effective treatment for ASD. In this population, a crucial factor in explaining improved clinical outcomes in the experimental group may be the use of assessment-guided neurofeedback to reduce cerebral hyperconnectivity. Implications of these findings are discussed. 
<P>Full Article: <A href="http://thebrainlabs.com/assessguidednfasd.pdf">http://thebrainlabs.com/assessguidednfasd.pdf</A></P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
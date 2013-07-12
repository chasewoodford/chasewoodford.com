<?//begin code admpanel
$id = 146; 
$razdelid = "37"; 
$razdel_id = "37"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/autism/index.php"; 
$id_author = 0; 
$title = "Mu rhythms in autism"; 
$description = "Summary of research showing a specific type of abnormality in autistic brains. Correcting this imbalance improves social-emotional functioning."; 
$partsfragmented = 1; 
$date_posted = "25-10-2006"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/autism/mu.php"; 
$doc_identificate_name = "mu"; 
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
<TABLE class=MsoNormalTable style="BACKGROUND: #f9fffd; WIDTH: 570pt; BORDER-COLLAPSE: collapse; mso-padding-alt: 3.0pt 3.0pt 3.0pt 3.0pt" cellSpacing=0 cellPadding=0 width=760 border=0>
<TBODY>
<TR style="mso-yfti-irow: 0; mso-yfti-lastrow: yes">
<TD style="BORDER-RIGHT: #ece9d8; PADDING-RIGHT: 3pt; BORDER-TOP: #ece9d8; PADDING-LEFT: 3pt; PADDING-BOTTOM: 3pt; BORDER-LEFT: #ece9d8; WIDTH: 100%; PADDING-TOP: 3pt; BORDER-BOTTOM: #ece9d8; BACKGROUND-COLOR: transparent" width="100%">
<H2 style="MARGIN: 2.75pt 0in 0pt">Mu-like Rhythms in Autistic Spectrum Disorder: <BR>EEG Analyses and Neurofeedback</H2>
<H3 style="MARGIN: 1.4pt 0in"><EM>Robert Coben, PhD &amp; Bill Hudspeth, PhD</EM></H3>
<H4 style="MARGIN: 1.4pt 0in auto">Neurorehabilitation and Neuropsychological Services, Massapequa Park, NY, Neuropsychometrix, Los Osos, CA robcoben@optonline.net</H4>
<P><B>Category</B>: Research &amp; Clinical Application </P>
<P><B>Introduction</B>. Autism occurs in approximately 60 per 10,000 (1 in 166) children (Medical Research Council, 2001). Research has linked social deficits in Autism to mirror neuron dysfunction (Mu rhythm activity; Dapretto et al., 2006; Oberman et al., 2005; Williams, Whiten, Suddendorf, &amp; Perrett, 2001). However, the mechanisms underlying the Mu rhythm have yet to be studied.<BR><BR><B>Method</B>. Twenty out of 50 patients with a diagnosis of ASD were identified as having significant Mu-like rhythm. Patients received a battery of neurobehavioral, neuropsychological testing, and QEEG assessment. There was a median split of Mu level activity for each patient so that portions of their EEG recordings were divided into high and low Mu level groupings. Each category was in turn analyzed in terms of absolute, relative power and connectivity. In ten patients, interhemispheric bipolar training was utilized. The remaining ten patients underwent coherence training designed to increase connectivity between regions C3/C4 and the peripheral frontal cortex.<BR><BR><B>Results</B>. Within and between group analyses indicated greater frontal hypoconnectivity (p &lt; .05) in the high Mu group associated with social and executive deficits. The power analyses indicated greater alpha (Mu) activity for the C3 and C4 sensor sites for patients in the high Mu category. Both groups of patients improved significantly on neurobehavioral and neuropsychological measures (p &lt; .05). However, only coherence training reduced Mu activity significantly. Coherence training was linked to reduced Mu activity which may be associated with improved social-emotional functioning. <BR><BR><B>Conclusion</B>. The findings indicate that social deficits and Mu-like Rhythm activity in Autism may both be associated with frontal hypoconnectivity. Both assessment-guided neurofeedback and coherence training are associated with improved symptoms in ASD. Coherence training significantly reduced Mu activity (p &lt; .05) and resulted in improved social-emotional functioning.</P>
<P>&nbsp;</P></TD></TR></TBODY></TABLE>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
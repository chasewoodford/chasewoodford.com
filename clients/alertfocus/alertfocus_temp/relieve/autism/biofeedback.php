<?//begin code admpanel
$id = 164; 
$razdelid = "37"; 
$razdel_id = "37"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/autism/index.php"; 
$id_author = 0; 
$title = "Connectivity Study"; 
$description = "Journal article on remediating autism with neurofeedback."; 
$partsfragmented = 1; 
$date_posted = "29-02-2008"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/autism/biofeedback.php"; 
$doc_identificate_name = "biofeedback"; 
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
[Connectivity-<WBR>Guided Neurofeedback for Autistic Spectrum Disorder; *<BR>Biofeedback*<WBR>], 2007; Vol. 35(4):131-135<BR><BR>Neurofeedback helping those with autistic disorders<BR><BR>Research on autistic spectrum disorder (ASD) shows that neurofeedback (EEG<BR>biofeedback) can remediate anomalies in brain activation, leading to symptom<BR>reduction and functional improvement. This evidence raises the hopes for a<BR>behavioral, psychophysiological intervention moderating the severity of ASD.<BR>The research is reviewed in a new article published in the latest issue of *<BR>Biofeedback*<WBR>.<BR><BR>Autism is a neurodevelopmental disorder characterized by a lack of<BR>appropriate eye contact, facial expression, social interaction,<BR>communication, and restricted repetitive behavior. ASD represents a group of<BR>disorders, including Autism, PDD-nos, Rett's Disorder, Child Disintegrative<BR>Disorder, and Asperger's Disorder. The Centers for Disease Control and<BR>Prevention (2006) reported the prevalence of ASD as 2 to 6 per 1,000.<BR><BR>Research has shown that related symptoms of ASD are the result of brain<BR>dysfunction in multiple brain regions. Functional neuroimaging and<BR>electroencephalogra<WBR>phy research have shown this to be related to abnormal<BR>neural connectivity problems. The brains of individuals with ASD show areas<BR>of both excessively high connectivity and deficient connectivity. In other<BR>words, some areas of the brain are chatting excessively with themselves,<BR>while failing to communicate normally with other relevant regions.<BR><BR>In one 2006 study using connectivity-<WBR>guided neurofeedback, pre-post analyses<BR>showed a 40 percent reduction in autistic symptoms, enhancement of function<BR>between the brain and behavior, and reduction of hyperconnectivity. These<BR>results begin to verify the theory that interhemispheric, bipolar<BR>neurofeedback montages can lead to reduction in hyperconnectivity based on<BR>the reward band trained.<BR><BR>Neurofeedback seems capable of remediating connectivity disturbances when<BR>these data are considered as part of treatment planning. Connectivity-<WBR>guided<BR>neurofeedback is capable of significantly remedying these anomalies and<BR>reducing autistic symptoms. Hyperconnectivity seen in patients with ASD can<BR>be remedied with coherence training and other neurofeedback approaches.<BR><BR>To read the entire study, click here:<BR><A href="http://www.allenpress.com/pdf/biof-35-04-04_Coben.pdf"><FONT color=#1e66ae>http://www.allenpre<WBR>ss.com/pdf/<WBR>biof-35-04-<WBR>04_Coben.<WBR>pdf</FONT></A><BR><BR>*Biofeedback* is a quarterly publication distributed by the Association for<BR>Applied Psychophysiology and Biofeedback. For more information regarding the<BR>publication or the society please visit, <A href="http://www.aapb.org./"><FONT color=#1e66ae>http://www.aapb.<WBR>org.</FONT></A>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
<?//begin code admpanel
$id = 151; 
$razdelid = "37"; 
$razdel_id = "37"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/autism/index.php"; 
$id_author = 0; 
$title = "Efficacy of Neurofeedback in the Autistic Spectrum"; 
$description = "The first research study on autism and neurofeedback by Betty Jarusiewicz."; 
$partsfragmented = 1; 
$date_posted = "25-10-2006"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/autism/jarusiewicz.php"; 
$doc_identificate_name = "jarusiewicz"; 
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
<H2>Efficacy of Neurofeedback in the Autistic Spectrum</H2>
<P>B. Jarusiewicz. Atlantic Research Institute, Atlantic Highlands, NJ 07716</P>
<P>The purpose of this study was to determine if Neurofeedback is efficacious for individuals in the Autism spectrum. Neurofeedback, a process of neuroregulation has been proven to assist many with similar behaviors to those in the Autistic spectrum. This methodology has been studied and used successfully with those exhibiting ADHD behaviors, anxiety, sleep disorders, and addiction and preliminary work with individuals in the Autistic spectrum is showing promise. </P>
<P>This process trains brain waves through operant conditioning using EEG readings, therapist computers controlling protocols, and game computers being used to provide feedback for the individual. This method allows the brain to begin to operate at optimal levels appropriate for the individual, assisting many of those in the autism spectrum to reduce confusing delta, theta, and alpha brain states and encouraging the use of beneficial beta and SMR frequencies.</P>
<P>Our study involved the training of 16 individuals using Neurofeedback, applying a number of assessment processes, and comparing those trained with 16 non-trained individuals.</P>
<P>Eighty eight percent of those trained reduced their levels of autism within months (measured by Rimland’s ATEC check-list) - on average 26% compared with control group on average of less than 5%. Before and after videos (Greenspan method) were also used for comparison purposes. All results show significant improvement on average in the areas of speech (30%), socialization (34%), other types of health (sleep, anxiety, tantrums – 29%), and cognitive awareness (16%).</P>
<P>When compared with other treatment modalities using the Rimland Treatment Effectiveness Survey, Neurofeedback, even in early comparison, is rated on a par with Occupational therapy, surpassed to date only by Behavior Modification and Speech therapies.</P>
<P>From: <A href="http://drugfreeadd.com/aut_neur.html">http://drugfreeadd.com/aut_neur.html</A></P>

eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
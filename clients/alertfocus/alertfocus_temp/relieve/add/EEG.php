<?//begin code admpanel
$id = 129; 
$razdelid = "34"; 
$razdel_id = "34"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/add/index.php"; 
$id_author = 0; 
$title = "EEG Fixes ADD"; 
$description = "The non-drug training that gets people off of psych drugs."; 
$partsfragmented = 1; 
$date_posted = "31-01-2006"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/add/EEG.php"; 
$doc_identificate_name = "EEG"; 
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
<P>ADD or AD/HD stands for Attention Deficit/Hyperactivity Disorder.&nbsp; It is characterized by inattention, distractibility, and impulsivity.&nbsp; There may be or may not be hyperactive squirmy and fidgety behavior.&nbsp;&nbsp; AD/HD affects 5-10% of children and continues into adulthood with transformed symptoms.&nbsp; The problem too often results in failure and tragedy in some realm of life.&nbsp; </P>
<P>Do not mistake long periods of hyper-focus on a game as evidence against ADD.&nbsp; The real problem is poor self-regulation of attention.&nbsp; It is flexible concentration and adaptable emotional intensity that promotes success.&nbsp;&nbsp;&nbsp;</P>
<P>We often see certain problems associated with AD/HD.&nbsp; These include learning disabilities, defiant attitudes, mood problems, and sleep disturbances.&nbsp; These related issues are not helped by the stimulant medications typically prescribed by physicians.&nbsp;</P>
<P>There is an elegant non drug solution to ADHD with many advantages.&nbsp; Since 1970, brain training with an EEG has proven effective for a growing number of physical and psychological complaints.&nbsp; AD/HD has been a leading area of research and application for direct brain training.&nbsp; </P>
<P>The idea behind this training is that when you interact with a display of your brain waves, you can self-repair the underlying problem.&nbsp; Instead of working chemically, brain training corrects the electrical properties of the brain.&nbsp; This training is a form of biofeedback which has been shown to reliably reduce symptoms in about 150 diverse disorders.&nbsp; </P>
<P>The advantage of clearing ADHD with training are that when the underlying disorder is cleared, the related learning, mood, and attitude problems also fade away.&nbsp; Research also shows the training to be highly effective and to be sustained in long term follow up studies.&nbsp; Side effects are rare and minimal.&nbsp;&nbsp;&nbsp;</P>
<P>Brain wave training involves simply learning to operate an efficient and quiet mind.&nbsp; The brain, EEG and software control any favorite music CD and computer images.&nbsp; When the mind is more calm and focused, the music plays and graphics move.&nbsp; When the mind is turbulent, the music and graphic pauses briefly.&nbsp; The thresholds are set so the music play 95-99% of the time.&nbsp; This play-pause contrast guides the trainee toward a calmer and more focused mind.&nbsp; The benefits are gradual and pervasive.&nbsp; </P>
<P>Brain training is also used for achieving optimal performance.&nbsp; Studies measuring IQ show an average of a 12 point gain.&nbsp; Brain wave training is used by athletes, performers, students, executives and military officers.&nbsp; They appreciate the improved mental focus and the emotional regulation that allows them to stay focused in the performance zone.&nbsp; Greater resilience and flexibility of the central nervous system is desirable in any human endeavor.&nbsp; </P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
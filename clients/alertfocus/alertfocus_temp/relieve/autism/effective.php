<?//begin code admpanel
$id = 160; 
$razdelid = "37"; 
$razdel_id = "37"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/autism/index.php"; 
$id_author = 0; 
$title = "Effective Neurofeedback Approaches for Autism"; 
$description = "There are several methods that reduce autistic symptoms dramatically"; 
$partsfragmented = 1; 
$date_posted = "03-10-2007"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/autism/effective.php"; 
$doc_identificate_name = "effective"; 
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
<H3 align=center>Effective Neurofeedback Approaches for Autism</H3>
<P align=right>By Gary Ames</P>
<P align=right></P>
<P>There are several kinds of brain biofeedback that have proven effective in significantly reducing the symptoms of autism. In most studies, the actual training time within all sessions is between 10 to 20 hours. </P><B>
<P>HemoEncephaloGraphy</B>, HEG. (blood-brain-image) </P><I>
<P>Passive Infrared HEG</I>. An infrared sensor is placed on the forehead reading thermal emissions. A DVD plays when a threshold is met. When below threshold the movie may pause or reduce in size or volume. This encourages metabolic activity up in the pre-frontal cortex. Succeeding in this exercise feels like an indescribable calm focus. </P><I>
<P>Near Infrared HEG. </I>A headband sensor detects blood oxygenation within the brain. Getting the readings to go up requires strong effort and is done in bursts of a few minutes. </P>
<P>Infrared photography verifies that the forehead becomes bright and more even after each HEG session and as sessions progress. This is closely linked to symptom improvement. I speculate that this exercise expands the capillary bed and dendritic connections enhancing neural capacity throughout the brain which is used for self-regulation. </P><B>
<P>ElectroEncephaloGraphy </B>EEG. </P><I>
<P>Reducing brain wave amplitudes.</I> Most EEG biofeedback aims to inhibit brain wave intensity. Most common is to encourage a reduction in high amplitude brain waves with biofeedback-driven computer games. Another strategy is to quell brain wave turbulence in all frequencies by pausing a multi-media stream briefly during surges. Another approach disrupts dysfunctional patterns with an incredibly small pulse of a radio carrier wave. All these approaches depend on neuroplasticity and the urge for self-regulation. </P><I>
<P>Improving brain wave connectivity.</I> Coherence refers to the temporal similarity of brain wave forms. Too much or too little coherence is a problem. One approach is to design game-like reinforcers when 3 conditions are met: lower amplitudes at 1-6 Hz and 20-30 Hz with increased amplitudes at 5-12 Hz. These kinds of protocols are determined by clinical judgement, neuropsychological testing or Quantitative EEG brain maps. </P>
<P><STRONG>The state of the art</STRONG></P>
<P>There is no standard of practice. Each approach above tends to have an initial period of success and then approach an asymptote. Some practitioners use one approach for 20 sessions and switch to another method. While all these approaches are highly effective, by themselves and in combinations, no clinic anywhere has used all these approaches. We do know that a complete remission of symptoms and accelerated development to all age appropriate levels is possible is some cases of autism. </P>
<P>We do not know the maximum effectiveness that is possible with neurofeedback. There are cases of complete remission from autism. One clinic reports more than 75% remission of symtoms for over 90% of autistic cases. In addition, neurofeedback technology is advancing rapidly. Research and awareness at all levels lag far behind the achievements of neurofeedback practitioners. </P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
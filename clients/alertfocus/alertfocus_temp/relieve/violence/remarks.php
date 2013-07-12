<?//begin code admpanel
$id = 145; 
$razdelid = "36"; 
$razdel_id = "36"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/violence/index.php"; 
$id_author = 0; 
$title = "Testimony"; 
$description = "Councilwoman Blackwell hosted a meeting in Council chambers on solving the problem of criminal violence. "; 
$partsfragmented = 1; 
$date_posted = "24-10-2006"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/violence/remarks.php"; 
$doc_identificate_name = "remarks"; 
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
<P>Citizens, Servants and Representatives: </P>
<P>I have the answer to violent crime.&nbsp; I know exactly where the problem lies: in the right prefrontal cortex.&nbsp; 19 of 20 death row inmates have disturbances at this site on their brain maps.&nbsp; </P>
<P>Whether the cause of criminality is genetic, brain injury, family or community, the answer is the same.&nbsp; Fix the brain and nervous system, heal the life and solve the problem of criminal violence. </P>
<P>What is the recidivism rate for violent felons?&nbsp; About 65% within 3 years.&nbsp; I brought a summary of a study done with 2776 felons from 1970 to 1995.&nbsp; Here 40 sessions of biofeedback produced a recidivism rate of 15%.&nbsp; That is a 70% reduction.&nbsp; Most of the trainers were volunteers.</P>
<P>Biofeedback begins with monitoring some aspect of physiology such as hand temperature or heart rhythms.&nbsp; Biofeedback consists of interacting with a display of your physiology.&nbsp; Neurofeedback is biofeedback with the brain – either brain waves or blood flow within the brain. </P>
<P>Biofeedback does not belong to any one field. </P>
<UL>
<LI>In the hands of a physician with patients, biofeedback is medicine.</LI>
<LI>In the hands of a psychologist with clients, biofeedback is therapy.</LI>
<LI>In the hands of a teacher with students, biofeedback is education.</LI>
<LI>In the hands of a prison guard with offenders, biofeedback is rehabilitation.</LI>
<LI>In the hands of a father with his child, biofeedback is parenting.</LI>
<LI>In the hands of a municipal official with citizens biofeedback is good government.&nbsp; </LI></UL>
<P>The technology is now so advanced it is easy to use and can be applied in many settings.&nbsp; It is easiest to fold a biofeedback module into a current program such as a half way house, prison, curfew center, police station, or school program.&nbsp; </P>
<P>With just a few hundred dollars for biofeedback or a few thousand for neurofeedback, much good can be done.&nbsp; At $32,120 a year to incarcerate offenders, any size program will pay for itself within a year.&nbsp; How much money do want to save?&nbsp; How much violence do you want to prevent?&nbsp; </P>
<P>I need from you open minds as you read the evidence.&nbsp; And then show courage as you take action.&nbsp; I submit that biofeedback is the best available technology to solve the problem of criminal violence in Philadelphia.&nbsp; </P>
<P>&nbsp;</P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
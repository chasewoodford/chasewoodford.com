<?//begin code admpanel
$id = 158; 
$razdelid = "28"; 
$razdel_id = "28"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/stress/index.php"; 
$id_author = 0; 
$title = "Anxiety"; 
$description = "Anxiety corrodes life.  Biofeedback enhances the response to stress."; 
$partsfragmented = 1; 
$date_posted = "13-08-2007"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/stress/anxiety.php"; 
$doc_identificate_name = "anxiety"; 
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
Anxiety corrodes the quality of life.  Anxiety is a nervous system issue of chronic over-arousal.  Too much tension ravages the body and can produce a wide variety of symptoms.  


Biofeedback is well known and accepted for relaxation and stress reduction.  Training for relaxation is an approved application for biofeedback by the FDA.   Biofeedback is so safe that some devices and games are available to anyone.  The most effective tools are in the hands of professionals.   (Google: Anxiety neurofeedback) 


Anxiety and arousal are the opposite of relaxation.  Biofeedback teaches mind-body lessons about relaxation versus tension.  You may think you are relaxed, but a body monitoring device will show you that there is much further to go.  And it will show you how to get there.  


Biofeedback is like looking at yourself in a mirror.  You will be able to see and hear tiny variations in your body’s arousal level.  This self-awareness soon becomes self-control.  Then your body learns to automatically control the underlying biological process.  


Biofeedback lessons automatically generalize to other situations.  This even includes deeper sleep.   When nervousness chronically impairs quality of life, biofeedback is a gentle and effective remedy.  


With more calm and control in your life you can be more productive.  Self-control and self-regulation are empowering.  A calmer central nervous system is more efficient and effective.  


Biofeedback is also used by organizations for peak performance training.  The best biofeedback research in schools is with test anxiety because the results are easily measured.  The military, athletes, artistic performers, schools, and businesses use biofeedback to enhance working calmly and clearly in The Zone.  


Training brain waves with biofeedback has been proven in the laboratory and clinic to have high success rates with various anxiety and stress-related problems.  This includes disorders such as seizures, migraines, IBS, PTSD, PMS, chronic abdominal pain, asthma, tics, teeth grinding, anorexia, bulimia, panic, phobias, and just an awful sense of always feeling anxious.  


Some anxiety is a part of life.  Biofeedback reduces inappropriate anxiety and makes appropriate anxiety reactions more efficient.  You want anxiety responses that are sharp, clear and temporary.  When excess anxiety is reduced, the need for defenses or psychological protections is also reduced, allowing you to be more productive with any other type of therapy. 


Within 6-10 sessions of brain wave biofeedback almost everyone notices one of three things:  1) better quality sleep, 2) sharper mental clarity, 3) greater emotional calm.  The brain has learned a better way to function and these results last in the long term.  Researchers see positive changes with brain map imaging.  


The lessons of brain wave biofeedback are pervasive and enduring.  The body’s wisdom recognizes and adopts a better way to function.  


A high proportion of people receive substantial relief from a wide variety of symptoms with biofeedback.  




eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
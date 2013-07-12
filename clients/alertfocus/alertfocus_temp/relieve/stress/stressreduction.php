<?//begin code admpanel
$id = 121; 
$razdelid = "28"; 
$razdel_id = "28"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/stress/index.php"; 
$id_author = 0; 
$title = "Stress Reduction"; 
$description = "Reducing stress isn't about bubble baths or the spa.  Teach your body to deal well with stress as it happens.  "; 
$partsfragmented = 1; 
$date_posted = "15-06-2005"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/stress/stressreduction.php"; 
$doc_identificate_name = "stressreduction"; 
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
The relentless exposure to daily, chronic anxiety is the most toxic form of stress. It can actually be poisonous, wearing down the immune system and increasing the risk of everything from colds to cancer. Stress can damage neurons in the brain, causing memory problems; it can interfere with sexual performance and lead to heart attacks and premature death. Worst of all, it can make you fat.<BR><BR>That exposure simply isn't mitigated by dutifully scheduling in nighttime bubble baths or ducking out to watch TV. Ultimately, it is how you spend your days -- not your downtime -- that matters. Americans are spending their days awash in a toxic bath of stress hormones.<BR><BR>The new research -- which has been fueled in part by the national stresses of Sept. 11 -- is exploring how some people manage to glide through stressful situations, while others wind themselves tighter as the day goes on.<BR><BR>It isn't that the first group is spending more time at the day spa. It isn't even that they are confronted by less stress. Researchers have pegged stress resistance to a single quality: resilience. People who handle stress well recover quickly, physically and mentally, when confronted by it. From the way they breathe at their desks to how much they laugh, they engage in a set of subtle behaviors that help them shift easily in and out of "stress mode" throughout the day.<BR><BR>The result is a major shift in what experts recommend for relief. The goal is to train people to deal with stress as it happens -- by changing how they react -- rather than trying to eliminate stress or treat its symptoms. Here are four strategies supported by the new research:<BR><BR><STRONG>Biofeedback</STRONG>: Maggie Wicken, a technology instructor at Boeing Corp., has a pretty unusual way of monitoring her anxiety. She literally plugs herself in to her desktop PC and takes a reading of her stress level.<BR><BR>This is the latest trend in biofeedback, a field that is getting a fresh look in the battle against chronic stress. In the past, biofeedback was often shrugged off as mad science. But at some major corporations, including Boeing, Cisco Systems and Unilever, it is now being used by employees right at their desks.<BR><BR>Using a finger clip attached to the PC, employees at these companies regularly hook themselves up to a biofeedback software program called Freeze-Framer. By measuring heart rhythms much the same way you take your temperature, it can give people a window on exactly how their body is handling stress throughout the day.<BR><BR>The goal is to learn to read signals from your body. Then when anxiety starts mounting, you adjust the way you breathe (the more deeply the better), sit (drop your shoulders) or even what you are thinking about (imagine yourself on the beach). The software even includes video games that you play by manipulating your own heart rate; adjust it properly and a hot-air balloon on the screen rises. This ability to bring the body back a state of calm is what stress-resistant people do naturally.
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
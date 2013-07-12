<?//begin code admpanel
$id = 163; 
$razdelid = "37"; 
$razdel_id = "37"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/autism/index.php"; 
$id_author = 0; 
$title = "Functional Underconnectivity"; 
$description = "Autism is a problem where the brain does not communicate well with itself."; 
$partsfragmented = 1; 
$date_posted = "06-02-2008"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/relieve/autism/Underconnectivity.php"; 
$doc_identificate_name = "Underconnectivity"; 
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
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><FONT face="Times New Roman" size=3>Autism Speaks just announced their top 10 research events<BR>for 2007. Confirming the Functional Underconnectivity theory of<BR>autism is one of those, link and article below.<BR><BR>The idea is that neural links are weak as seen on the EEG. What I<BR>explain to parents on my neurofeedback screen are the numbers<BR>indicating that the brain is everywhere shouting but no one is listening.<BR><BR>I just went to a conference and purchased equipment for coherence and<BR>connectivity brain training. The idea starts with a data base of<BR>optimal EEG values at the 19 standard site on the scalp. The<BR>neurofeedback training aims the client toward those values.<BR><BR>The procedure is to watch any DVD. When a high percentage of EEG<BR>variables are within norm the movie plays a full volume and contrast;<BR>when too many value fall outside the norm, the movie dims and the<BR>volume goes down some. The brain figures out how to keep the movie<BR>playing well by self-modulating the 248 EEG variables 256 times a<BR>second. There is a natural preference to see and hear the DVD fully,<BR>advice or encouragement are not helpful in this process.<BR><BR>This z-score system is unique in that it has 4 active leads on the<BR>scalp. This permits training on 6 pairs of sites at a time. (4 from<BR>the rectangle and 2 diagonal). What I typically see in autism is<BR>hypo-coherence, too little intercommunication between parts of the<BR>brain and the neurofeedback training resolving this issue with a<BR>reduction in symptoms.<BR><BR>Gary Ames, Licensed Psychologist<BR>28 Rock Hill Road, Bala Cynwyd, PA 19004<BR>610.668-3223 phone<BR><A href="http://www.AlertFocus.com">www.AlertFocus.com</A><BR><BR></FONT><A href="http://www.autismspeaks.org/science/science_news/top_ten_autism_research_events_2007_functional_underconnectivity.php"><FONT face="Times New Roman" size=3>http://www.autismspeaks.org/science/science_news/top_ten_autism_research_events_<BR>2007_functional_underconnectivity.php</FONT></A><BR><FONT face="Times New Roman" size=3>Functional Underconnectivity<BR><BR>Electrophysiological studies provide direct support of the "functional<BR>underconnectivity" theory of autism<BR><BR><BR>Studies from several labs in the past few years have hinted that the<BR>deficits in autism may not be found in any single structure of the<BR>brain, but rather in wiring of the neural networks that connect the<BR>different parts of our brain together. This has lead to a theory of<BR>autism called "functional underconnectivity," which hypothesizes that<BR>brain regions are not properly linked to each other, causing them to<BR>be functionally out-of-synch.<BR><BR>Scientists managed to directly test this hypothesis in 2007 by<BR>recording in real time the electrical signals that travel from one<BR>part of the brain to another. University of Washington researchers<BR>were the first to use a technique called "EEG coherence" to<BR>demonstrate underconnectivity in the brains of individuals with<BR>autism, finding that brain regions that were far apart did not "talk"<BR>to each other as typical. A collaborative team from the University of<BR>Colorado and the University of California at Davis also listened in on<BR>the brain activity of individuals with autism using a second technique<BR>called "MEG." It appeared as if the brain regions that should normally<BR>be synchronized with each other were not, and that the front of the<BR>brain may be especially disconnected with other brain regions.<BR><BR>Our most complex cognitive and executive functions, such as<BR>perception, attention, and learning and memory, require the<BR>coordinated function of brain activity. In order to conceive targeted<BR>therapies that overcome deficits in these areas, we need to first<BR>understand the biological problems that are generating them. These<BR>studies added critical evidence that communication problems between<BR>regions of the brain may be central to the impairments in autism, and<BR>could be directing us toward the ultimate design of strategies to<BR>re-synchronize brain activity.</FONT></P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
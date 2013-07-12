<?//begin code admpanel
$id = 113; 
$razdelid = "25"; 
$razdel_id = "25"; 
$razdel_picture = ""; 
$razdel_link = "perform/sales/index.php"; 
$id_author = 0; 
$title = "Brain Power"; 
$description = "Sales training that boosts the capacity for performance--mental and emotional."; 
$partsfragmented = 1; 
$date_posted = "07-02-2005"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//perform/sales/brainpower.php"; 
$doc_identificate_name = "brainpower"; 
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
<H2 align=center>Brain Power Sales Training&nbsp;</H2>
<P>Do you have salespeople who:</P>
<UL type=disc>
<LI>Talk too much and listen too little.&nbsp;&nbsp;</LI>
<LI>Won’t plan, follow through or finish tasks. </LI>
<LI>Procrastinate, ignore details and make careless mistakes.&nbsp;&nbsp;</LI>
<LI>Don’t stay focused on the proper goals.</LI></UL>
<P>And who may: </P>
<UL type=disc>
<LI>Become easily bored and frustrated.&nbsp; </LI>
<LI>Under-perform while always over-active. </LI></UL>
<P>The brain power sales training program improves mental clarity, emotional stability and quality of sleep.&nbsp; The results are guaranteed to impact both top line sales performance and bottom line sales productivity.</P>
<P>Modern training technology works directly with the mind to optimize it for greater efficiency and effectiveness.&nbsp; There is plenty of research to prove that this approach can improve cognitive functioning such as attention, memory, problem solving ability and intelligence.&nbsp; People generally say that work is easier and they are able to concentrate without emotional distractions. And everybody benefits from more restorative sleep. </P>
<P>The training is basically brainwave monitoring in a feedback loop that shows you when you are on track and when you've veering off.&nbsp; Within the loop you can learn by trial and error exactly how to use more brain power.</P>
<P>One-on-one training sessions last 1 hour each. Ten to 20 training sessions occur on-site 1 to 3 times per week. &nbsp;Eight people a day can be handled by one trainer. Sessions can also be conducted in my office in Bala Cynwyd. </P>
<P>A few people feel a benefit right away.&nbsp; Everybody can identify a benefit after 6 sessions. In any individual, the areas needing the most improvement tend to respond first. The training experience is usually described as either relaxing, pleasant or interesting.&nbsp;&nbsp; All benefits are long-term because showing the brain a better way to work is naturally retained. &nbsp;Brainwaves are an excellent focus for training because the central nervous system is central to all that you do.</P>
<H4>BENEFITS</H4>
<P><STRONG>TOP LINE </STRONG>sales revenue increases from improved:</P>
<UL type=disc>
<LI>Persistence in prospecting - to get more leads.</LI>
<LI>Resilience in the face of rejection - to keep on track. </LI>
<LI>Accuracy in qualifying prospects - to improve closing ratio. </LI>
<LI>Listening, empathy, rapport – to establish crediblity and trust. </LI>
<LI>Creative presentations to meet needs - and gain acceptance. </LI>
<LI>Charisma, melodious voice, likeable demeanor - relationships are key. </LI>
<LI>Flexibility in approaches to closing - continuous improvement. </LI>
<LI>Ability to stay on point and recall details of conversation - less slippage. </LI>
<LI>Ability to keep it together under pressure - and stay in The Performance Zone. </LI>
<LI>Cognitive skills for planning and problem solving - to work smarter. </LI>
<LI>Capacity for details and envisioning completion - for problem prevention. </LI>
<LI>More complete and timely follow-through - handle it once. </LI>
<LI>Respond to sales goals - with flexibility. </LI>
<LI>Increased sales per person, per account, per time, per sale - name of the game. </LI>
<LI>Profitability of sales - top line effectiveness. </LI>
<LI>Closing ratio - efficiency.</LI></UL>
<P><STRONG>BOTTOM LINE </STRONG>sales productivity improvements to lower the cost of sales from:</P>
<UL type=disc>
<LI>More revenue and profit per account -</LI>
<LI>Retention of Accounts, Annuity revenue, Sole sourcing.</LI>
<LI>Greater customer loyalty, fuller account development and continuity. </LI>
<LI>Better referrals. </LI>
<LI>Smoother sales delivery and implementation. </LI>
<LI>Fewer complaints, rejections, returns, or rework. </LI>
<LI>Administrative reporting that is more useful, complete, accurate and timely. </LI>
<LI>Stronger teamwork.&nbsp; Fewer personality problems. Better performance in non-sales tasks. </LI>
<LI>Greater wellness and time on task. </LI>
<LI>Lower turnover.&nbsp;</LI></UL>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>
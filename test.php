<?php
if( isset( $_GET['category'] ) ){
    switch ( $category ){
        case 'all':
            $selecttab=3;
            $page_title =  'BCS | BANK | Government Job Preparation | Online model test';
            $topic_title =  'All Questions';
            $title_description =  'Prepare for public jobs with Prostuti. Access job preparation guides, subject-wise questions, BCS, BANK, government job model tests, and online practice exams.';
            $leftnavselectedtrendingclass="leftnavbartabSelected";
            $contentcategoryscrollid="";
            $previousSelectedTab='home';
            $questionstitledata=get_exam_title_data('prevbcsq');
            $questionstitledata1=get_exam_title_data('prevbankq');
            $allexamloaddone=1;
            break;
        case 'prevbcsq':
            $selecttab=3;
            $page_title =  'Previous year BCS questions';
            $topic_title =  'Previous year BCS questions';
            $title_description =  'Get ready for public jobs with Prostuti. Access previous BCS questions, job preparation guides, subject-wise questions, government job model tests, and online practice exams.';
            $previousSelectedTab='prevbcsq';
            $leftnavselectedlatestclass="leftnavbartabSelected";
            $contentcategoryscrollid="indexquestionsfeedholderinnerprevbcsq";
            $questionstitledata=get_exam_title_data('prevbcsq');
            break;
        case 'prevbankq':
            $selecttab=3;
            $page_title =  'Previous years bank questions';
            $topic_title =  'Previous years bank questions';
            $title_description =  'Prepare for public and bank jobs with Prostuti. Access previous questions, model tests, and job preparation guides to enhance your strategy. Start practicing now!';
            $leftnavselectedmusicclass="leftnavbartabSelected";
            $contentcategoryscrollid="indexquestionsfeedholderinnerprevbankq";
            $previousSelectedTab='prevbankq';
            $questionstitledata=get_exam_title_data('prevbankq');
            break;
        case 'primary':
            $selecttab=3;
            $page_title =  'Primary previous question';
            $topic_title =  'Primary previous question';
            $title_description =  'Prepare for primary jobs with Prostuti. Access previous job exam questions, model tests, and job preparation guides. Master key topics and optimize your strategy for success!';
            $leftnavselectedmusicclass="leftnavbartabSelected";
            $contentcategoryscrollid="indexquestionsfeedholderinnerprimary";
            $previousSelectedTab='primary';
            $questionstitledata=get_exam_title_data('primary');
            break;
        case 'variousministry':
            $selecttab=3;
            $page_title =  'Ministry job exam question';
            $topic_title =  'Ministry job exam question';
            $title_description =  'Prepare comprehensively for Ministry job exams in Bangladesh with our collection of previous years questions. Explore exam patterns, master key topics, and optimize your preparation strategy for success. Start practicing now to excel in your Ministry job exam!';
            $leftnavselectedmusicclass="leftnavbartabSelected";
            $contentcategoryscrollid="indexquestionsfeedholderinnervariousministry";
            $previousSelectedTab='variousministry';
            $questionstitledata=get_exam_title_data('variousministry');
            break;
        case 'bcsmodeltest':
            $selecttab=3;
            $page_title =  'BCS model test';
            $topic_title =  'BCS model test';
            $title_description =  "Elevate your BCS job preparation with Prostuti's meticulously crafted model tests. Dive into simulated exam conditions, master key concepts from previous questions, and sharpen your skills for guaranteed success. Get started now to ace the BCS exam!";
            $leftnavselectedrecommendedclass="leftnavbartabSelected";
            $previousSelectedTab='bcsmodeltest';
            $contentcategoryscrollid="indexquestionsfeedholderinnerbcsmodeltest";
            $questionstitledata=get_exam_title_data('bcsmodeltest');
            break;
        case 'bankmdltest':
            $selecttab=3;
            $page_title =  'Bank model test';
            $topic_title =  'Bank model test';
            $title_description =  'Elevate your bank job preparation with our expert-designed model tests. Simulate exam conditions, master key concepts, and sharpen your skills for success. Start practicing now to excel in your bank job exam!';
            $previousSelectedTab='bankmdltest';
            $leftnavselectedmoviesclass="leftnavbartabSelected";
            $contentcategoryscrollid="indexquestionsfeedholderinnerbankmdltest";
            $questionstitledata=get_exam_title_data('bankmdltest');
            break;
        case 'trending':
            $selecttab=3;
            $page_title =  'Trending questions';
            $topic_title =  'Trending questions';
            $title_description =  'Unlock the latest in trending job exam questions! Stay ahead with our comprehensive collection, covering diverse fields and industries. Prepare effectively and enhance your chances of success in your upcoming job exams.';
            $leftnavselectedpopularclass="leftnavbartabSelected";
            $contentcategoryscrollid="indexquestionsfeedholderinnertrending";
            $previousSelectedTab='trending';
            $questionstitledata=get_exam_title_data('trending');
            break;

        case 'latest':
            $selecttab=3;
            $page_title =  'Latest questions';
            $topic_title =  'Latest questions';
            $title_description =  'Stay ahead with the latest job exam questions! Access our comprehensive collection to prepare effectively for upcoming exams. Master diverse topics and boost your chances of success. Start practicing now!';
            $contentcategoryscrollid="indexquestionsfeedholderinnerlatest";
            $leftnavselectedfeaturedclass="leftnavbartabSelected";
            $previousSelectedTab='latest';
            $table_name='model_test_exam';
            $questionstitledata=get_exam_title_data('latest',$table_name);
//                var_test_die($questionstitledata);
            break;
        case 'bangla':
//            $category=3;
            $selecttab=3;
            $page_title =  'বাংলা ভাষা ও সাহিত্য';
            $topic_title =  'বাংলা ভাষা ও সাহিত্য';
            $title_description =  'Prepare thoroughly for Bangali literature job exams with our curated collection of exam questions and preparation guides. Enhance your understanding of key concepts, refine your analytical skills, and maximize your chances of success. Start your journey towards acing the Bangali literature job exam today!';
            $leftnavselectedcelebrityclass="leftnavbartabSelected";
            $contentcategoryscrollid="indexquestionsfeedholderinnerbangla";
            $previousSelectedTab='bangla';
            $table_name='model_test_exam';
            $questionstitledata=get_exam_title_data('banglamodeltest',$table_name);
            break;
        case 'math':
            $selecttab=3;
            $page_title =  'Math';
            $topic_title =  'Math';
            $title_description =  'Prepare effectively for your mathematics job exam with our extensive collection of exam questions and preparation guides. Dive into our resources to enhance your problem-solving skills and boost your confidence. Start your prostuti towards success today!';
            $leftnavselectedgamingclass="leftnavbartabSelected";
            $contentcategoryscrollid="indexquestionsfeedholderinnermath";
            $previousSelectedTab='math';
            $table_name='model_test_exam';
            $questionstitledata=get_exam_title_data('mathmodeltest',$table_name);
            break;
        case 'english':
            $selecttab=3;
            $page_title =  'English';
            $topic_title =  'English';
            $title_description =  'Prepare for your English literature job exam with our comprehensive collection of exam questions and preparation guides. Enhance your understanding, refine your analytical skills, and boost your confidence for success. Start your prostuti towards acing the job exam with our model tests and guides.';
            $leftnavselectedtechclass="leftnavbartabSelected";
            $contentcategoryscrollid="indexquestionsfeedholderinnerenglish";
            $previousSelectedTab='english';
            $table_name='model_test_exam';
            $questionstitledata=get_exam_title_data('englishmodeltest',$table_name);
            break;
        case 'gk':
            $selecttab=3;
            $page_title =  'সাধারণ জ্ঞান';
            $topic_title =  'সাধারণ জ্ঞান';
            $title_description =  "Prepare for your exam with Prostuti's comprehensive collection of general knowledge content. Access exam questions, model tests, and subject-wise questions to enhance your preparation. Start now!";
            $leftnavselectedsportsclass="leftnavbartabSelected";
            $previousSelectedTab='gk';
            $contentcategoryscrollid="indexquestionsfeedholderinnergk";
            $table_name='model_test_exam';
            $questionstitledata=get_exam_title_data('gkmodeltest',$table_name);
            break;
        case 'science':
            $selecttab=3;
            $page_title =  'General science';
            $topic_title =  'General science';
            $title_description =  'Get ready for your general science job exam with our model tests and preparation guides. Enhance your preparation, boost your confidence, and ace your exam with ease. Start preparing today!';
            $leftnavselectedfashionclass="leftnavbartabSelected";
            $previousSelectedTab='science';
            $contentcategoryscrollid="indexquestionsfeedholderinnerscience";
            $table_name='model_test_exam';
            $questionstitledata=get_exam_title_data('sciencemodeltest',$table_name);
            break;
        case 'social':
            $selecttab=3;
            $page_title =  'ভূগোল, পরিবেশ ও দুর্যোগ';
            $topic_title =  'ভূগোল, পরিবেশ ও দুর্যোগ';
            $title_description =  "Prepare thoroughly for public job exams in social science with our comprehensive resources. Access subject questions, preparation guides, model tests, and more to enhance your readiness. Start your preparation journey towards success!";
            $leftnavselectedfoodclass="leftnavbartabSelected";
            $previousSelectedTab='social';
            $contentcategoryscrollid="indexquestionsfeedholderinnersocial";
            $table_name='model_test_exam';
            $questionstitledata=get_exam_title_data('socialmodeltest',$table_name);
            break;
        case 'computer':
            $selecttab=3;
            $page_title =  'Computer';
            $topic_title =  'Computer';
            $title_description =  'Prepare for public job exams in computer science with our all-inclusive resources. Access fundamental questions, preparation guides, model tests, and more to enhance your readiness. Start now!';
            $leftnavselectedleisureclass="leftnavbartabSelected";
            $previousSelectedTab='computer';
            $contentcategoryscrollid="indexquestionsfeedholderinnercomputer";
            $table_name='model_test_exam';
            $questionstitledata=get_exam_title_data('computermodeltest',$table_name);
            break;
        case 'humanity':
            $selecttab=3;
            $page_title =  'Mental ability';
            $topic_title =  'Mental ability';
            $title_description =  "Get ready for public job exams with prostuti's comprehensive resources in mental ability. Access questions, preparation guides, model tests, and more to boost your readiness.";
            $contentcategoryscrollid="indexquestionsfeedholderinnerhumanity";
            $previousSelectedTab='humanity';
            $leftnavselectedautoclass="leftnavbartabSelected";
            $questionstitledata=get_exam_title_data('humanity');
            break;
        case 'morality':
            $selecttab=3;
            $page_title =  'নৈতিকতা, মূল্যবোধ ও সুশাসন';
            $topic_title =  'নৈতিকতা, মূল্যবোধ ও সুশাসন';
            $title_description =  "Prepare for public job exams with prostuti's comprehensive resources on morality. Access questions, preparation guides, model tests, and more to enhance your readiness. Start your journey towards success today!";
            $previousSelectedTab='morality';
            $leftnavselectedpeopleclass="leftnavbartabSelected";
            $contentcategoryscrollid="indexfeedholderinnermorality";
            $questionstitledata=get_exam_title_data('morality');
            break;
        case 'random':
            $selecttab=3;
            $page_title =  'Random questions';
            $topic_title =  'Random questions';
            $title_description =  'Enhance your readiness for public job exams with our diverse range of resources, including random questions, preparation guides, model tests, and more. Start preparing now to maximize your chances of success!';
            $previousSelectedTab='random';
            $leftnavselectedpeopleclass="leftnavbartabSelected";
            $contentcategoryscrollid="indexfeedholderinnerrandom";
            $questionstitledata=get_exam_title_data('random');
//                var_test_die('ok');
            break;
        case 'prevntrcaq':
            $selecttab=3;
            $page_title =  'NTRCA questions';
            $topic_title =  'NTRCA questions';
            $title_description =  'Prepare effectively for public jobs with our collection of previous year NTRCA exam questions. Access model tests and job preparation guides to boost your readiness. Start practicing now to excel in your NTRCA exam!';
            $previousSelectedTab='prevntrcaq';
            $leftnavselectedpeopleclass="leftnavbartabSelected";
            $contentcategoryscrollid="indexfeedholderinnerprevntrcaq";
            $questionstitledata=get_exam_title_data('prevntrcaq');
            break;
        case 'engineering':
            $selecttab=3;
            $page_title =  'Engineering questions';
            $topic_title =  'Engineering questions';
            $title_description =  "Prepare for public job exams with Prostuti's comprehensive resources. Access CSE, EEE, Civil, ME, and other engineering job preparation questions. Optimize your readiness now!";
            $previousSelectedTab='engineering';
            $leftnavselectedpeopleclass="leftnavbartabSelected";
            $contentcategoryscrollid="indexfeedholderinnerengineering";
            $questionstitledata=false;
            break;
        case 'previousyearexam':
            $category=2;
            $selecttab=2;
            $page_title =  'বিগত সালের সকল চাকরির পরীক্ষার প্রশ্ন সমাধান ও মডেল টেস্ট';
            $topic_title =  'বিগত সালের সকল চাকরির পরীক্ষার প্রশ্ন সমাধান ও মডেল টেস্ট';
            $title_description =  'Prepare comprehensively for various public job exams with our collection of previous year exam questions. Access model tests, preparation guides, and prostuti materials for BCS and other public jobs. Boost your readiness and excel in your upcoming exams!';
            $previousSelectedTab='variousministry';
            $leftnavselectedpeopleclass="leftnavbartabSelected";
            $contentcategoryscrollid="indexfeedholderinnerengineering";
            $prevquestionseletcategory = 1;
            $prevexamyear=0;
            $table_name='exam_table';
            $display_limit=40;
            $questionstitledata=get_previous_exam_data($prevquestionseletcategory,$prevexamyear,$table_name,$display_limit);
            break;
        case 'quicktest':
            $category=4;
            $selecttab=4;
            $page_title =  'Quick Test Exam Questions';
            $topic_title =  'Quick Test Exam Questions';
            $title_description =  'Access quick test exam questions for all subjects like Bangla, English, Math, GK, Social Science, and Science. Perfect for job preparation and public job exams with Prostuti.';
            $display_limit=20;
            $questions_data=get_random_quizquestions_data($display_limit);

            $totalquestions=count($questions_data);
            $totaltime=ceil($totalquestions*.5);
            $time = date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")." +247 minutes"));
            $require_time=date("Y-m-d H:i:s");
            break;
        case 'subjectwise':
            $subjectwiseload=1;
            $category=5;
            $selecttab=5;
            $page_title =  'Subject wise questions';
            $topic_title =  'Subject wise questions';
            $title_description = 'Explore subject-wise questions for Bangla, English, Math, GK, Social Science, and Science. Ideal for job preparation and public job exams with Prostuti.';
            $display_limit=100;
            $table_name='questions';
            $subjecttype=1;
            $questions_data=get_subjecttype_questions($table_name,$subjecttype,$display_limit,$exam_pointer=null,$alreadyloadedpointer=[]);
            $totalquestions=count($questions_data);
            $totaltime=ceil($totalquestions*.5);
            $time = date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")." +247 minutes"));
            $require_time=date("Y-m-d H:i:s");
            break;
        case 'affairs':
            $currentaffairsdataload=1;
            $category=6;
            $selecttab=6;
            $page_title =  'Current affairs questions';
            $topic_title =  'Current affairs questions';
            $title_description = 'Stay updated with current affairs questions covering a wide range of topics. Perfect for job preparation and public job exams with Prostuti.';
            $display_limit=20;
            $table_name='current_affairs_title';
            $subjecttype=1;
            $questions_data=get_multiple_affairs_title_data_new($table_name,$display_limit);
            $totalquestions=count($questions_data);
            $totaltime=ceil($totalquestions*.5);
            $time = date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")." +247 minutes"));
            $require_time=date("Y-m-d H:i:s");
            $indexshareimage="https://www.prostuty.com/images/shareimage/current-affairs.jpg";
            break;
        case 'videoclass':
            $videodataload=1;
            $category=7;
            $selecttab=7;
            $page_title =  'Video';
            $topic_title =  'Video';
            $title_description = 'Video';
            $display_limit=20;
            $table_name='current_affairs_title';
            $subjecttype=1;
            $questions_data=get_online_video_lecture_data($subjecttype);
            $totalquestions=count($questions_data);
            break;
        case 'circular':
            $jobcirculardataload=1;
            $category=8;
            $selecttab=8;
            $page_title =  'Job circular';
            $topic_title =  'Job circular';
            $title_description = "Stay updated with job circulars in Bangladesh, spanning public and private sectors. Prepare effectively with Prostuti's resources including subject-wise questions, model tests, and more.";
            $display_limit=20;
            $questions_data=get_gov_job_circular_data($display_limit);
            $totalquestions=count($questions_data);
            break;
        case 'model-test':
            $page_title =  'Model Test';
            $topic_title =  'Model Test';
            $title_description = "Boost your job preparation with Prostuti's model tests. Access subject-wise questions, exam guides, and more for effective preparation. Ideal for public job aspirants!";
            $category=11;
            $selecttab=11;
            $display_limit=50;
            $page_title = 'Prostuty';
            $topic_title =  'Job circular';
            $tablename='model_test_exam';
            $is_public=1;
            $is_published=1;
            $is_private=1;
            $modeltestquestionstitledata=get_multiple_exam_data_for_modeltest($tablename,$display_limit,$is_public,$is_published,$is_private);
            $modeltestexamloaded=1;
            break;
    }
} else{
    $categ÷ory=1;
    $selecttab=1;
    $display_limit=12;
    $page_title =  'BCS | BANK | Government Job Preparation | Online model test';
    $topic_title =  'All Questions';
    $title_description =  'Prepare for public jobs with Prostuti. Access job preparation guides, subject-wise questions, BCS, BANK, government job model tests, and online practice exams.';
    $tablename='exam_table';
    $modeltest_tablename='model_test_exam';
    $is_public=1;
    $is_published=1;
    $is_private=1;
    $modeltestquestionstitledata=get_multiple_exam_data_for_modeltest($modeltest_tablename,$display_limit,$is_public,$is_published,$is_private);
    $previousexamtitledata=get_multiple_previous_exam_data_from_users_pointer($tablename,$display_limit,$is_public,$is_published,$is_private);
    $previousexamtitledata=array_values($previousexamtitledata);

    $display_limit=6;
    $users_pointer=1;
    $tablename='model_test_exam';
    $syllabus_data=get_multiple_syllabus_data_from_users_pointer($users_pointer,$session_pointer,$display_limit,$tablename);
    $indexshareimage="https://www.prostuty.com/images/indexshare_new.jpg";
    $homedataloaded=1;
}
$display_limit=50;
$metadescription = $title_description;
$metaogdescription = $title_description;

//........

$question_title_info = array(
'is_model_test' => 1,
'title' => 'this is title',
'description' =>  'Question description',
'time' =>   '30',
'negetive_marking' =>   0,
'select_privacy' =>   0,
'auto_disable' =>   0,
'selecttime' =>   0,
'exam_year' =>   2024,
'image_url' =>   '',
'date_published' =>   '22/09/2024',
'author_name' =>   'rubel',
);
$schema = [
"@context" => "https://schema.org",
"@type" => "Article",
"headline" => $question_title_info['title'],
"image" => $question_title_info['image_url'],
"datePublished" => $question_title_info['date_published'],
"author" => [
"@type" => "Person",
"name" => $question_title_info['author_name']
],
"publisher" => [
"@type" => "Organization",
"name" => "Prostuty",
"logo" => [
"@type" => "ImageObject",
"url" => "https://www.prostuty.com/logo.png"
]
],
"description" => $question_title_info['description']
];

// Encode schema to JSON
$jsonSchema = json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

// Embed schema in the page

?>
<body>
<head>
    <?php echo '<script type="application/ld+json">' . $jsonSchema . '</script>';?>
</head>
Here
</body>

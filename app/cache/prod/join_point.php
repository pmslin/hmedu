<?php 
return array (
  'importer' => 
  array (
    'course-member' => 'Biz\\Importer\\CourseMemberImporter',
    'classroom-member' => 'Biz\\Importer\\ClassroomMemberImporter',
  ),
  'order' => 
  array (
    'course' => 
    array (
      'processor' => 'Biz\\Order\\OrderProcessor\\CourseOrderProcessor',
      'order_show_template' => 'order/order-course.html.twig',
    ),
    'classroom' => 
    array (
      'processor' => 'Biz\\Order\\OrderProcessor\\ClassroomOrderProcessor',
      'order_show_template' => 'order/classroom.html.twig',
    ),
    'vip' => 
    array (
      'processor' => 'Biz\\Order\\OrderProcessor\\VipOrderProcessor',
      'order_show_template' => 'order/vip.html.twig',
    ),
    'coin' => 
    array (
      'processor' => 'Biz\\Order\\OrderProcessor\\CoinOrderProcessor',
    ),
  ),
  'reward_point' => 
  array (
    'common-acquire' => 'Biz\\RewardPoint\\Processor\\CommonAcquireRewardPoint',
    'course-acquire' => 'Biz\\RewardPoint\\Processor\\CourseAcquireRewardPoint',
  ),
);
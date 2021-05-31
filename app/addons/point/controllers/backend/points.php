<?php
use Tygh\Registry;

 if(!defined('BOOTSTRAP')) {die('Acess Denied');}

 if($_SERVER['REQUEST_METHOD']== 'GET'){
    if($mode == 'manage'){

        $chain='Select distinct(fk_user_id), sum(total_pontos) from cscart_points as P Inner Join cscart_users AS U on P.fk_user_id = U.user_id group by user_id';
        

        
      //  Tygh::$app['view']->assign('item', $chain);
   
       
        $points_list = db_get_array($chain);
       
        Tygh::$app['view']->assign('dados', $points_list);

    }

 }

